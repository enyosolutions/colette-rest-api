<?php

namespace App\Events;

final class KwgEvents
{
/**
* The store.order event is thrown each time an order is created
* in the system.
*
* The event listener receives an
* Acme\StoreBundle\Event\FilterOrderEvent instance.
*
* @var string
*/
const USER_REGISTRATION = 'user.account.registration';
const USER_DEST_BOOKMARKS_VIEW = 'user.destination_bookmarks.view';
const USER_DEST_BOOKMARKS_ADD = 'user.destination_bookmarks.add';
    const USER_DEST_BOOKMARKS_DELETE = 'user.destination_bookmarks.delete';
}