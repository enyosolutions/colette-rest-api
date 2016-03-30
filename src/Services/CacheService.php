<?php


namespace App\Services;

class CacheService
{
    protected $app;
    private $keys = ["cities" => "kwg:cities",
        "cityPages" => 'kwg:citypages',
        "users" => 'kwg:users'
    ];

    /**
     * @var array local cache for storing queries that might be made to redis many times in the same request, eg. a different places.
     */
    private $localCache = [];

    public function __construct($app)
    {
        $this->app = $app;

    }

    /**
     * Gets the data from the caches for the cities, in this order : LocalCache => Redis => Mongodb.
     * @param null $locale
     * @return array|mixed
     */
    public function getCities($locale = null)
    {

        // get in local cache, if not get from redis.

        $cities = [];
        $cacheKey = $this->keys['cities'];
        if (isset($this->localCache[$cacheKey])) {
            $cities = $this->localCache[$cacheKey];
        }  else {

            $citiesCursor = ($this->app['mongodb']->city->find());
            $cities = [];
            foreach ($citiesCursor as $city) {
                $cities[$city['code']] = $city;
            }
            $this->localCache[$cacheKey] = $cities;
        }


        if ($locale !== NULL) {
            foreach ($cities as $city) {
                if ($locale !== NULL) {
                    $city['infos'] = $city['intl'][$locale];
                }
                $cities[$city['code']] = $city;
            }
        }
        return $cities;
    }

    public function getCity($cityCode, $locale = NULL)
    {
        $cacheKey = $this->keys['users'] .$cityCode . $locale;
        if (isset($this->localCache[$cacheKey])) {
            return $this->localCache[$cacheKey];
        } else {
            $item = $this->app['mongodb']->city->find(['code' => $cityCode])->getNext();
            if($item === NULL)
                return NULL;
            if ($locale !== NULL) {
                $item['infos'] = $item['intl'][$locale];
            }

            return $item;
        }
    }


    public
    function getUsers()
    {
        $cacheKey = $this->keys['users'];

        if (isset($this->localCache[$cacheKey])) {
            $list = $this->localCache[$cacheKey];
        } else {
            $cursor = $this->app['mongodb']->user->find();
            foreach ($cursor as $user) {
                $user['_id'] .= '';
                $list[$user['_id']] = $user;
            }

            $this->localCache[$cacheKey] = $list;
        }
        return $list;
    }


    public
    function getUser($id)
    {
        $cacheKey = $this->keys['users'] . $id;
        if (isset($this->localCache[$cacheKey])) {
            return $this->localCache[$cacheKey];
        } else {

            $item = $this->app['mongodb']->user->find(['_id' => new \MongoId($id)])->getNext();
            if($item === NULL) {
                return NULL;
            }
            $this->localCache[$id] = $item;

            return $item;
        }
    }


    /**
     * Gets the data from the caches for the cities, in this order : LocalCache => Redis => Mongodb.
     * @param null $locale
     * @return array|mixed
     */
    public function getCityPages($locale = null)
    {
        $cacheKey = $this->keys['cityPages'];
        $list = [];

        // get in local cache, if not get from redis.
        if (isset($this->localCache[$cacheKey])) {
            $list = $this->localCache[$cacheKey];
        }  else {
            $listCursor = $this->app['mongodb']->cityPage->find();
            foreach ($listCursor as $item) {
                $item['_id'] .= '';
                $list[$item['code']] = $item;
            }
            $this->localCache[$cacheKey] = $list;

            if (count($list) > 0) {
                $this->localCache[$cacheKey] = $list;
            }
        }


        if ($locale !== NULL) {
            foreach ($list as $k => $item) {
                foreach ($item['intl'] as $lg) {
                    if ($lg['lang'] === $locale) {
                        $list['infos'] = $lg;
                    }
                }

                $list[$item['code']] = $item;
            }
        }
        return $list;
    }

    public
    function getCityPage($cityCode, $locale = NULL)
    {
        $cacheKey = $this->keys['cityPages'] .$cityCode . $locale;
        if (isset($this->localCache[$cacheKey])) {
            return $this->localCache[$cacheKey];
        } else {
            $item = $this->app['mongodb']->cityPage->find(['code' => $cityCode])->getNext();
            if($item === NULL)
                return NULL;
            if ($locale !== NULL) {
                foreach ($item['intl'] as $key => $val) {
                    $item['infos'] = $val;
                }
            }
            $this->localCache[$cacheKey] = $item;
            return $item;
        }
    }

}
		
		
		
			