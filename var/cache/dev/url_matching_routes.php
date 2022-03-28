<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/candidate/list' => [[['_route' => 'candidate_list', '_controller' => 'App\\Controller\\HiredController::list'], null, null, null, false, false, null]],
        '/candidate/create' => [[['_route' => 'candidate_create', '_controller' => 'App\\Controller\\HiredController::createCandidate'], null, null, null, false, false, null]],
        '/candidate/contratar' => [[['_route' => 'candidate_contratar', '_controller' => 'App\\Controller\\HiredController::contratar'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
