<?php

// routes array
return array(
    'subscriber-list/delete' => 'subscriberList/delete',
    'subscriber-list/([a-zA-Z0-9.]+)' => 'subscriberList/index/$1',
    'subscriber-list' => 'subscriberList/index',
    'subscription' => 'mainPage/subscribe',
    '' => 'mainPage/index',
);
