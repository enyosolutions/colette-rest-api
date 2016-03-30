<?php
/**
 * Created by PhpStorm.
 * User: faou
 * Date: 08/08/15
 * Time: 21:26
 */


namespace App\Controllers\User;

use Symfony\Component\HttpFoundation\Response;


/**
 * Class DashboardController
 * @package Kwg\Controllers
 */
class DashboardController extends \Kwg\Controllers\DefaultController
{

    /**
     * @param $userId
     */
    function indexAction($userId = null)
    {

        $userId = $this->app['user']->getId();
        $user = $this->app['user'];
        if ($userId == NULL) {
            $this->session->getFlashbag()->add('danger', $this->translator->trans("dashboard.error.unknown.user"));
            $this->logger->addError('[DASHBOARD] Index action : ' . $this->translator->trans("dashboard.error.unknown.user"));

            return new Response($this->app['twig']->render(
                'common/404.html.twig',
                array()), 404);
        } else {

            if (count($user) < 1) {
                $this->session->getFlashbag()->add('warning', $this->translator->trans("dashboard.error.unknown.user"));
                $this->logger->addError('[DASHBOARD] Index action : ' . $this->translator->trans("dashboard.error.unknown.user"));
                return new Response($this->app['twig']->render(
                    'common/404.html.twig',
                    array()
                ), 404);
            } else {

                $lang = $this->app['locale'];
                $userBookmarks = iterator_to_array($this->em->userBookmark->find(['ownerId' => $user->getId() . ""])->sort(['createdAt' => -1]));
                $publicBookmarks = iterator_to_array($this->em->userBookmark->find(['visibility' => 'public'])->sort(['createdAt' => -1, 'metadata.copies' => -1, 'metadata.loves' => -1])->limit(2));
                $userInvites = iterator_to_array($this->em->userInvite->find(['fromUserId' => $user->getId() . "", 'status' => ['$ne' => 'complete'] ]));
                $userConnexion = iterator_to_array($this->em->userConnexion->find(['$or' => [['fromId' => $user->getId() . ""], ['toId' => $user->getId() . ""]]]));
				$contributionsCount = $this->em->userContribution->find(['contributorId' => $user->getId() . ""])->count();
                $savedDestinations = [];

                $cities = $this->app['cache.service']->getCities();


                $cheapestFares = $this->app['api.fare.controller']->listCheapestAction()->getContent();
                $cheapestFares = json_decode($cheapestFares, true);
                if (!empty($cheapestFares)) {
                    $cheapestFares = $cheapestFares['body'];
                }

                $userStats = ['total' => 0, 'visitedCity' => 0, 'wantedCity' => 0, 'visitedCountry' => 0,
                    'wantedCountry' => 0, 'tripIdea' => 0, 'destination' => 0, 'other' => 0, 'picture' => 0,
                    'contribution' => $contributionsCount, 'badges' => 0, 'flight' => 0, 'contest' => 0
                ];

                foreach ($userBookmarks as $bookmark) {
                    $userStats['total']++;
                    switch ($bookmark['type']) {
                        case 'destination':
                            $userStats['destination']++;
                            break;
                        case 'tripidea':
                            $userStats['tripIdea']++;
                            break;
                        case 'flight':
                            $userStats['flight']++;
                            break;
                        case 'other':
                        default:
                            $userStats['other']++;
                            break;
                    }

                    if (isset($bookmark['meta']['tags'])) {
                        if (in_array('picture', $bookmark['meta']['tags'])) {
                            $userStats['picture']++;
                        }
                    }
                    if (isset($bookmark['tags'])) {
                        if (in_array('wanted', $bookmark['tags']) && $bookmark['type'] === 'destination') {
                            $userStats['wantedCity']++;
                        }

                        if (in_array('visited', $bookmark['tags']) && $bookmark['type'] === 'destination') {
                            $userStats['visitedCity']++;
                        }
                    }

                }
                $page = ['class' => 'dashboard dashboard-home'];
                return new Response($this->app['twig']->render(
                    'Dashboard/index.html.twig',
                    array('user' => $user,
                        'savedDestinations' => $savedDestinations,
                        'userBookmarks' => $userBookmarks,
                        'publicBookmarks' => $publicBookmarks,
                        'userInvites' => $userInvites,
						'userConnexions' => $userConnexion,
                        'cities' => $cities,
                        'cheapestFares' => $cheapestFares,
                        'userStats' => $userStats,
                        'page' => $page
                    )
                ));
            }

        }
    }
} 