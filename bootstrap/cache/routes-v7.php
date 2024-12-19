<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/sanctum/csrf-cookie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sanctum.csrf-cookie',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'platform.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/systems/files' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'platform.systems.files.upload',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/systems/media' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'platform.systems.files.media',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/systems/files/sort' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'platform.systems.files.sort',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/systems/relation' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'platform.systems.relation',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/systems/sorting' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'platform.systems.sorting',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/api/notifications' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'platform.api.notifications',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'platform.login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'platform.login.auth',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/lock' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'platform.login.lock',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/switch-logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'platform.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'platform.switch.logout',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'platform.logout',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/health-check' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.healthCheck',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/execute-solution' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.executeSolution',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/update-config' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.updateConfig',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::t9y8oqISs1Tx4wn1',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'main',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/about' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'about',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/admin/(?|s(?|e(?|arch/([^/]++)(?:/(changeSearchType|compact))?(*:70)|ttings(?|(?:/(0))?(*:95)|/([^/]++)(?:/(createOrUpdate|remove))?(*:140)|Edit(?:/(createOrUpdate|remove))?(*:181)))|ystems/files/(?|([^/]++)(*:215)|post/([^/]++)(*:236)))|a(?|sync/([^/]++)(?:/([^/]++)(?:/([^/]++))?)?(*:291)|dvantages(?|(?:/(0))?(*:320)|/([^/]++)(?:/(createOrUpdate|remove))?(*:366)|Edit(?:/(createOrUpdate|remove))?(*:407)))|listener/([^/]++)/([^/]++)(*:443)|notifications(?:/([^/]++)(?:/(maskNotification|markAllAsRead|removeAll|unreadNotification))?)?(*:545)|m(?|a(?|in(?:/(0))?(*:572)|rquees(?|(?:/(0))?(*:598)|/([^/]++)(?:/(createOrUpdate|remove))?(*:644)|Edit(?:/(createOrUpdate|remove))?(*:685)))|enus(?|(?:/(0))?(*:711)|/([^/]++)(?:/(createOrUpdate|remove))?(*:757)|Edit(?:/(createOrUpdate|remove))?(*:798)))|p(?|rofile(?:/(save|changePassword))?(*:845)|a(?|ges(?|(?:/(0))?(*:872)|/([^/]++)(?:/(createOrUpdate|remove))?(*:918)|Edit(?:/(createOrUpdate|remove))?(*:959))|rtners(?|(?:/(0))?(*:986)|/([^/]++)(?:/(createOrUpdate|remove))?(*:1032)|Edit(?:/(createOrUpdate|remove))?(*:1074))))|users(?|/(?|([^/]++)/edit(?:/(save|remove|loginAs))?(*:1138)|create(?:/(save|remove|loginAs))?(*:1180))|(?:/(loadUserOnOpenModal|saveUser|remove))?(*:1233))|r(?|oles(?|/(?|([^/]++)/edit(?:/(save|remove))?(*:1290)|create(?:/(save|remove))?(*:1324))|(?:/(0))?(*:1343))|eviews(?|(?:/(0))?(*:1371)|/([^/]++)(?:/(createOrUpdate|remove))?(*:1418)|Edit(?:/(createOrUpdate|remove))?(*:1460)))|example(?:/(showToast))?(*:1495)|blocks(?|(?:/(0))?(*:1522)|/([^/]++)(?:/(createOrUpdate|remove))?(*:1569)|Edit(?:/(createOrUpdate|remove))?(*:1611))|faqs(?|(?:/(0))?(*:1637)|/([^/]++)(?:/(createOrUpdate|remove))?(*:1684)|Edit(?:/(createOrUpdate|remove))?(*:1726))|directors(?|(?:/(0))?(*:1757)|/([^/]++)(?:/(createOrUpdate|remove))?(*:1804)|Edit(?:/(createOrUpdate|remove))?(*:1846))|(.*)(*:1860)))/?$}sDu',
    ),
    3 => 
    array (
      70 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'platform.search',
            'method' => NULL,
          ),
          1 => 
          array (
            0 => 'query',
            1 => 'method',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      95 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'platform.settings.list',
            'method' => NULL,
          ),
          1 => 
          array (
            0 => 'method',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      140 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'platform.settings.editItem',
            'method' => NULL,
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'method',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      181 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'platform.settings.edit',
            'method' => NULL,
          ),
          1 => 
          array (
            0 => 'method',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      215 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'platform.systems.files.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      236 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'platform.systems.files.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      291 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'platform.async',
            'method' => NULL,
            'template' => NULL,
          ),
          1 => 
          array (
            0 => 'screen',
            1 => 'method',
            2 => 'template',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      320 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'platform.advantages.list',
            'method' => NULL,
          ),
          1 => 
          array (
            0 => 'method',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      366 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'platform.advantages.editItem',
            'method' => NULL,
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'method',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      407 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'platform.advantages.edit',
            'method' => NULL,
          ),
          1 => 
          array (
            0 => 'method',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      443 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'platform.async.listener',
          ),
          1 => 
          array (
            0 => 'screen',
            1 => 'layout',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      545 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'platform.notifications',
            'id' => NULL,
            'method' => NULL,
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'method',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      572 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'platform.main',
            'method' => NULL,
          ),
          1 => 
          array (
            0 => 'method',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      598 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'platform.marquees.list',
            'method' => NULL,
          ),
          1 => 
          array (
            0 => 'method',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      644 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'platform.marquees.editItem',
            'method' => NULL,
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'method',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      685 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'platform.marquees.edit',
            'method' => NULL,
          ),
          1 => 
          array (
            0 => 'method',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      711 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'platform.menus.list',
            'method' => NULL,
          ),
          1 => 
          array (
            0 => 'method',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      757 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'platform.menus.editItem',
            'method' => NULL,
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'method',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      798 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'platform.menus.edit',
            'method' => NULL,
          ),
          1 => 
          array (
            0 => 'method',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      845 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'platform.profile',
            'method' => NULL,
          ),
          1 => 
          array (
            0 => 'method',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      872 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'platform.pages.list',
            'method' => NULL,
          ),
          1 => 
          array (
            0 => 'method',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      918 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'platform.pages.editItem',
            'method' => NULL,
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'method',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      959 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'platform.pages.edit',
            'method' => NULL,
          ),
          1 => 
          array (
            0 => 'method',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      986 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'platform.partners.list',
            'method' => NULL,
          ),
          1 => 
          array (
            0 => 'method',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1032 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'platform.partners.editItem',
            'method' => NULL,
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'method',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1074 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'platform.partners.edit',
            'method' => NULL,
          ),
          1 => 
          array (
            0 => 'method',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1138 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'platform.systems.users.edit',
            'method' => NULL,
          ),
          1 => 
          array (
            0 => 'user',
            1 => 'method',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1180 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'platform.systems.users.create',
            'method' => NULL,
          ),
          1 => 
          array (
            0 => 'method',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1233 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'platform.systems.users',
            'method' => NULL,
          ),
          1 => 
          array (
            0 => 'method',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1290 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'platform.systems.roles.edit',
            'method' => NULL,
          ),
          1 => 
          array (
            0 => 'role',
            1 => 'method',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1324 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'platform.systems.roles.create',
            'method' => NULL,
          ),
          1 => 
          array (
            0 => 'method',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1343 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'platform.systems.roles',
            'method' => NULL,
          ),
          1 => 
          array (
            0 => 'method',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1371 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'platform.reviews.list',
            'method' => NULL,
          ),
          1 => 
          array (
            0 => 'method',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1418 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'platform.reviews.editItem',
            'method' => NULL,
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'method',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1460 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'platform.reviews.edit',
            'method' => NULL,
          ),
          1 => 
          array (
            0 => 'method',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1495 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'platform.example',
            'method' => NULL,
          ),
          1 => 
          array (
            0 => 'method',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1522 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'platform.blocks.list',
            'method' => NULL,
          ),
          1 => 
          array (
            0 => 'method',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1569 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'platform.blocks.editItem',
            'method' => NULL,
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'method',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1611 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'platform.blocks.edit',
            'method' => NULL,
          ),
          1 => 
          array (
            0 => 'method',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1637 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'platform.faqs.list',
            'method' => NULL,
          ),
          1 => 
          array (
            0 => 'method',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1684 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'platform.faqs.editItem',
            'method' => NULL,
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'method',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1726 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'platform.faqs.edit',
            'method' => NULL,
          ),
          1 => 
          array (
            0 => 'method',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1757 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'platform.directors.list',
            'method' => NULL,
          ),
          1 => 
          array (
            0 => 'method',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1804 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'platform.directors.editItem',
            'method' => NULL,
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'method',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1846 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'platform.directors.edit',
            'method' => NULL,
          ),
          1 => 
          array (
            0 => 'method',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1860 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'platform.generated::L2JDscmybCsZccxd',
          ),
          1 => 
          array (
            0 => 'fallbackPlaceholder',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'sanctum.csrf-cookie' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sanctum/csrf-cookie',
      'action' => 
      array (
        'uses' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'controller' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'namespace' => NULL,
        'prefix' => 'sanctum',
        'where' => 
        array (
        ),
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'sanctum.csrf-cookie',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'platform.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin',
      'action' => 
      array (
        'domain' => '',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'platform',
          2 => 'cache.headers:private;must_revalidate;etag',
          3 => 'breadcrumbs',
        ),
        'uses' => 'Orchid\\Platform\\Http\\Controllers\\IndexController@index',
        'controller' => 'Orchid\\Platform\\Http\\Controllers\\IndexController@index',
        'as' => 'platform.index',
        'namespace' => NULL,
        'prefix' => '/admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'Tabuna\\Breadcrumbs\\BreadcrumbsMiddleware' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:310:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:92:"fn (\\Tabuna\\Breadcrumbs\\Trail $trail) => $trail->push(\\__(\'Home\'), \\route(\'platform.index\'))";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000039e0000000000000000";}";s:4:"hash";s:44:"4P5RnXBmIjC4t7OLXKw+B0hXsKQHb8cjB/D0q57xoNM=";}}',
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'platform.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
      ),
      'uri' => 'admin/search/{query}/{method?}',
      'action' => 
      array (
        'domain' => '',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'platform',
          2 => 'cache.headers:private;must_revalidate;etag',
          3 => 'breadcrumbs',
        ),
        'uses' => 'Orchid\\Platform\\Http\\Screens\\SearchScreen@__invoke',
        'controller' => 'Orchid\\Platform\\Http\\Screens\\SearchScreen',
        'as' => 'platform.search',
        'namespace' => NULL,
        'prefix' => '/admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'Tabuna\\Breadcrumbs\\BreadcrumbsMiddleware' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:360:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:141:"fn (\\Tabuna\\Breadcrumbs\\Trail $trail, string $query) => $trail->parent(\'platform.index\')
        ->push(\\__(\'Search\'))
        ->push($query)";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000039f0000000000000000";}";s:4:"hash";s:44:"vUgpcfg0Ff2+Eu8Yt/pJjlsSarafYEFhz6BmoSB22RU=";}}',
      ),
      'wheres' => 
      array (
        'method' => 'changeSearchType|compact',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'platform.async' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/async/{screen}/{method?}/{template?}',
      'action' => 
      array (
        'domain' => '',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'platform',
          2 => 'cache.headers:private;must_revalidate;etag',
        ),
        'uses' => 'Orchid\\Platform\\Http\\Controllers\\AsyncController@load',
        'controller' => 'Orchid\\Platform\\Http\\Controllers\\AsyncController@load',
        'as' => 'platform.async',
        'namespace' => NULL,
        'prefix' => '/admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'platform.async.listener' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/listener/{screen}/{layout}',
      'action' => 
      array (
        'domain' => '',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'platform',
          2 => 'cache.headers:private;must_revalidate;etag',
        ),
        'uses' => 'Orchid\\Platform\\Http\\Controllers\\AsyncController@listener',
        'controller' => 'Orchid\\Platform\\Http\\Controllers\\AsyncController@listener',
        'as' => 'platform.async.listener',
        'namespace' => NULL,
        'prefix' => '/admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'platform.systems.files.upload' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/systems/files',
      'action' => 
      array (
        'domain' => '',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'platform',
          2 => 'cache.headers:private;must_revalidate;etag',
        ),
        'uses' => 'Orchid\\Platform\\Http\\Controllers\\AttachmentController@upload',
        'controller' => 'Orchid\\Platform\\Http\\Controllers\\AttachmentController@upload',
        'as' => 'platform.systems.files.upload',
        'namespace' => NULL,
        'prefix' => 'admin/systems',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'platform.systems.files.media' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/systems/media',
      'action' => 
      array (
        'domain' => '',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'platform',
          2 => 'cache.headers:private;must_revalidate;etag',
        ),
        'uses' => 'Orchid\\Platform\\Http\\Controllers\\AttachmentController@media',
        'controller' => 'Orchid\\Platform\\Http\\Controllers\\AttachmentController@media',
        'as' => 'platform.systems.files.media',
        'namespace' => NULL,
        'prefix' => 'admin/systems',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'platform.systems.files.sort' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/systems/files/sort',
      'action' => 
      array (
        'domain' => '',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'platform',
          2 => 'cache.headers:private;must_revalidate;etag',
        ),
        'uses' => 'Orchid\\Platform\\Http\\Controllers\\AttachmentController@sort',
        'controller' => 'Orchid\\Platform\\Http\\Controllers\\AttachmentController@sort',
        'as' => 'platform.systems.files.sort',
        'namespace' => NULL,
        'prefix' => 'admin/systems',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'platform.systems.files.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/systems/files/{id}',
      'action' => 
      array (
        'domain' => '',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'platform',
          2 => 'cache.headers:private;must_revalidate;etag',
        ),
        'uses' => 'Orchid\\Platform\\Http\\Controllers\\AttachmentController@destroy',
        'controller' => 'Orchid\\Platform\\Http\\Controllers\\AttachmentController@destroy',
        'as' => 'platform.systems.files.destroy',
        'namespace' => NULL,
        'prefix' => 'admin/systems',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'platform.systems.files.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/systems/files/post/{id}',
      'action' => 
      array (
        'domain' => '',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'platform',
          2 => 'cache.headers:private;must_revalidate;etag',
        ),
        'uses' => 'Orchid\\Platform\\Http\\Controllers\\AttachmentController@update',
        'controller' => 'Orchid\\Platform\\Http\\Controllers\\AttachmentController@update',
        'as' => 'platform.systems.files.update',
        'namespace' => NULL,
        'prefix' => 'admin/systems',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'platform.systems.relation' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/systems/relation',
      'action' => 
      array (
        'domain' => '',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'platform',
          2 => 'cache.headers:private;must_revalidate;etag',
        ),
        'uses' => 'Orchid\\Platform\\Http\\Controllers\\RelationController@view',
        'controller' => 'Orchid\\Platform\\Http\\Controllers\\RelationController@view',
        'as' => 'platform.systems.relation',
        'namespace' => NULL,
        'prefix' => 'admin/systems',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'platform.systems.sorting' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/systems/sorting',
      'action' => 
      array (
        'domain' => '',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'platform',
          2 => 'cache.headers:private;must_revalidate;etag',
        ),
        'uses' => 'Orchid\\Platform\\Http\\Controllers\\SortableController@saveSortOrder',
        'controller' => 'Orchid\\Platform\\Http\\Controllers\\SortableController@saveSortOrder',
        'as' => 'platform.systems.sorting',
        'namespace' => NULL,
        'prefix' => 'admin/systems',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'platform.notifications' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
      ),
      'uri' => 'admin/notifications/{id?}/{method?}',
      'action' => 
      array (
        'domain' => '',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'platform',
          2 => 'cache.headers:private;must_revalidate;etag',
          3 => 'breadcrumbs',
        ),
        'uses' => 'Orchid\\Platform\\Http\\Screens\\NotificationScreen@__invoke',
        'controller' => 'Orchid\\Platform\\Http\\Screens\\NotificationScreen',
        'as' => 'platform.notifications',
        'namespace' => NULL,
        'prefix' => '/admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'Tabuna\\Breadcrumbs\\BreadcrumbsMiddleware' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:333:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:114:"fn (\\Tabuna\\Breadcrumbs\\Trail $trail) => $trail->parent(\'platform.index\')
            ->push(\\__(\'Notifications\'))";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000003c20000000000000000";}";s:4:"hash";s:44:"rJ+2BJokPrHBnveaWoR86JVJMuJNYIaQ6IrRZP7tJtY=";}}',
      ),
      'wheres' => 
      array (
        'method' => 'maskNotification|markAllAsRead|removeAll|unreadNotification',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'platform.api.notifications' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/api/notifications',
      'action' => 
      array (
        'domain' => '',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'platform',
          2 => 'cache.headers:private;must_revalidate;etag',
        ),
        'uses' => 'Orchid\\Platform\\Http\\Screens\\NotificationScreen@unreadNotification',
        'controller' => 'Orchid\\Platform\\Http\\Screens\\NotificationScreen@unreadNotification',
        'as' => 'platform.api.notifications',
        'namespace' => NULL,
        'prefix' => '/admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'platform.generated::L2JDscmybCsZccxd' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/{fallbackPlaceholder}',
      'action' => 
      array (
        'domain' => '',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'platform',
          2 => 'cache.headers:private;must_revalidate;etag',
        ),
        'uses' => 'Orchid\\Platform\\Http\\Controllers\\IndexController@fallback',
        'controller' => 'Orchid\\Platform\\Http\\Controllers\\IndexController@fallback',
        'as' => 'platform.generated::L2JDscmybCsZccxd',
        'namespace' => NULL,
        'prefix' => '/admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => true,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'fallbackPlaceholder' => '.*',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'platform.login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/login',
      'action' => 
      array (
        'domain' => '',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cache.headers:private;must_revalidate;etag',
        ),
        'uses' => 'Orchid\\Platform\\Http\\Controllers\\LoginController@showLoginForm',
        'controller' => 'Orchid\\Platform\\Http\\Controllers\\LoginController@showLoginForm',
        'as' => 'platform.login',
        'namespace' => NULL,
        'prefix' => '/admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'platform.login.auth' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/login',
      'action' => 
      array (
        'domain' => '',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cache.headers:private;must_revalidate;etag',
          2 => 'throttle:60,1',
        ),
        'uses' => '\\Orchid\\Platform\\Http\\Controllers\\LoginController@login',
        'controller' => '\\Orchid\\Platform\\Http\\Controllers\\LoginController@login',
        'as' => 'platform.login.auth',
        'namespace' => NULL,
        'prefix' => '/admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'platform.login.lock' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/lock',
      'action' => 
      array (
        'domain' => '',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cache.headers:private;must_revalidate;etag',
        ),
        'uses' => 'Orchid\\Platform\\Http\\Controllers\\LoginController@resetCookieLockMe',
        'controller' => 'Orchid\\Platform\\Http\\Controllers\\LoginController@resetCookieLockMe',
        'as' => 'platform.login.lock',
        'namespace' => NULL,
        'prefix' => '/admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'platform.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/switch-logout',
      'action' => 
      array (
        'domain' => '',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cache.headers:private;must_revalidate;etag',
        ),
        'uses' => 'Orchid\\Platform\\Http\\Controllers\\LoginController@switchLogout',
        'controller' => 'Orchid\\Platform\\Http\\Controllers\\LoginController@switchLogout',
        'as' => 'platform.',
        'namespace' => NULL,
        'prefix' => '/admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'platform.switch.logout' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/switch-logout',
      'action' => 
      array (
        'domain' => '',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cache.headers:private;must_revalidate;etag',
        ),
        'uses' => 'Orchid\\Platform\\Http\\Controllers\\LoginController@switchLogout',
        'controller' => 'Orchid\\Platform\\Http\\Controllers\\LoginController@switchLogout',
        'as' => 'platform.switch.logout',
        'namespace' => NULL,
        'prefix' => '/admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'platform.logout' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/logout',
      'action' => 
      array (
        'domain' => '',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'cache.headers:private;must_revalidate;etag',
        ),
        'uses' => 'Orchid\\Platform\\Http\\Controllers\\LoginController@logout',
        'controller' => 'Orchid\\Platform\\Http\\Controllers\\LoginController@logout',
        'as' => 'platform.logout',
        'namespace' => NULL,
        'prefix' => '/admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'platform.main' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
      ),
      'uri' => 'admin/main/{method?}',
      'action' => 
      array (
        'domain' => '',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'platform',
          2 => 'cache.headers:private;must_revalidate;etag',
        ),
        'uses' => 'App\\Orchid\\Screens\\PlatformScreen@__invoke',
        'controller' => 'App\\Orchid\\Screens\\PlatformScreen',
        'namespace' => NULL,
        'prefix' => '/admin/',
        'where' => 
        array (
        ),
        'as' => 'platform.main',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'method' => '0',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'platform.profile' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
      ),
      'uri' => 'admin/profile/{method?}',
      'action' => 
      array (
        'domain' => '',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'platform',
          2 => 'cache.headers:private;must_revalidate;etag',
          3 => 'breadcrumbs',
        ),
        'uses' => 'App\\Orchid\\Screens\\User\\UserProfileScreen@__invoke',
        'controller' => 'App\\Orchid\\Screens\\User\\UserProfileScreen',
        'namespace' => NULL,
        'prefix' => '/admin/',
        'where' => 
        array (
        ),
        'as' => 'platform.profile',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'Tabuna\\Breadcrumbs\\BreadcrumbsMiddleware' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:360:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:141:"fn (\\Tabuna\\Breadcrumbs\\Trail $trail) => $trail
        ->parent(\'platform.index\')
        ->push(\\__(\'Profile\'), \\route(\'platform.profile\'))";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000003c80000000000000000";}";s:4:"hash";s:44:"xvK9GeV7OGhaFQfORavqIB+1qK7BI6Y9TYE4fL/uqsY=";}}',
      ),
      'wheres' => 
      array (
        'method' => 'save|changePassword',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'platform.systems.users.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
      ),
      'uri' => 'admin/users/{user}/edit/{method?}',
      'action' => 
      array (
        'domain' => '',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'platform',
          2 => 'cache.headers:private;must_revalidate;etag',
          3 => 'breadcrumbs',
        ),
        'uses' => 'App\\Orchid\\Screens\\User\\UserEditScreen@__invoke',
        'controller' => 'App\\Orchid\\Screens\\User\\UserEditScreen',
        'namespace' => NULL,
        'prefix' => '/admin/',
        'where' => 
        array (
        ),
        'as' => 'platform.systems.users.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'Tabuna\\Breadcrumbs\\BreadcrumbsMiddleware' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:390:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:171:"fn (\\Tabuna\\Breadcrumbs\\Trail $trail, $user) => $trail
        ->parent(\'platform.systems.users\')
        ->push($user->name, \\route(\'platform.systems.users.edit\', $user))";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000003d30000000000000000";}";s:4:"hash";s:44:"VZSoFrzJhVttP0q0Xfau/taowGy1P5PbrWa/YRYbkbY=";}}',
      ),
      'wheres' => 
      array (
        'method' => 'save|remove|loginAs',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'platform.systems.users.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
      ),
      'uri' => 'admin/users/create/{method?}',
      'action' => 
      array (
        'domain' => '',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'platform',
          2 => 'cache.headers:private;must_revalidate;etag',
          3 => 'breadcrumbs',
        ),
        'uses' => 'App\\Orchid\\Screens\\User\\UserEditScreen@__invoke',
        'controller' => 'App\\Orchid\\Screens\\User\\UserEditScreen',
        'namespace' => NULL,
        'prefix' => '/admin/',
        'where' => 
        array (
        ),
        'as' => 'platform.systems.users.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'Tabuna\\Breadcrumbs\\BreadcrumbsMiddleware' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:380:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:161:"fn (\\Tabuna\\Breadcrumbs\\Trail $trail) => $trail
        ->parent(\'platform.systems.users\')
        ->push(\\__(\'Create\'), \\route(\'platform.systems.users.create\'))";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000003d60000000000000000";}";s:4:"hash";s:44:"y0thLaW0ALOwJmIsHnv4heMWJKzZNGdp3GbjDSjn1ws=";}}',
      ),
      'wheres' => 
      array (
        'method' => 'save|remove|loginAs',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'platform.systems.users' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
      ),
      'uri' => 'admin/users/{method?}',
      'action' => 
      array (
        'domain' => '',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'platform',
          2 => 'cache.headers:private;must_revalidate;etag',
          3 => 'breadcrumbs',
        ),
        'uses' => 'App\\Orchid\\Screens\\User\\UserListScreen@__invoke',
        'controller' => 'App\\Orchid\\Screens\\User\\UserListScreen',
        'namespace' => NULL,
        'prefix' => '/admin/',
        'where' => 
        array (
        ),
        'as' => 'platform.systems.users',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'Tabuna\\Breadcrumbs\\BreadcrumbsMiddleware' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:364:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:145:"fn (\\Tabuna\\Breadcrumbs\\Trail $trail) => $trail
        ->parent(\'platform.index\')
        ->push(\\__(\'Users\'), \\route(\'platform.systems.users\'))";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000003d70000000000000000";}";s:4:"hash";s:44:"nbsnKKsOk5RVmSPJiTy6jnaUK53nWhMItwrWN3x7myM=";}}',
      ),
      'wheres' => 
      array (
        'method' => 'loadUserOnOpenModal|saveUser|remove',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'platform.systems.roles.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
      ),
      'uri' => 'admin/roles/{role}/edit/{method?}',
      'action' => 
      array (
        'domain' => '',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'platform',
          2 => 'cache.headers:private;must_revalidate;etag',
          3 => 'breadcrumbs',
        ),
        'uses' => 'App\\Orchid\\Screens\\Role\\RoleEditScreen@__invoke',
        'controller' => 'App\\Orchid\\Screens\\Role\\RoleEditScreen',
        'namespace' => NULL,
        'prefix' => '/admin/',
        'where' => 
        array (
        ),
        'as' => 'platform.systems.roles.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'Tabuna\\Breadcrumbs\\BreadcrumbsMiddleware' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:390:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:171:"fn (\\Tabuna\\Breadcrumbs\\Trail $trail, $role) => $trail
        ->parent(\'platform.systems.roles\')
        ->push($role->name, \\route(\'platform.systems.roles.edit\', $role))";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000003da0000000000000000";}";s:4:"hash";s:44:"5BQlHt6rWaJ9OundaNnkPHh6aXgcmcpPfOZnhmMSis4=";}}',
      ),
      'wheres' => 
      array (
        'method' => 'save|remove',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'platform.systems.roles.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
      ),
      'uri' => 'admin/roles/create/{method?}',
      'action' => 
      array (
        'domain' => '',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'platform',
          2 => 'cache.headers:private;must_revalidate;etag',
          3 => 'breadcrumbs',
        ),
        'uses' => 'App\\Orchid\\Screens\\Role\\RoleEditScreen@__invoke',
        'controller' => 'App\\Orchid\\Screens\\Role\\RoleEditScreen',
        'namespace' => NULL,
        'prefix' => '/admin/',
        'where' => 
        array (
        ),
        'as' => 'platform.systems.roles.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'Tabuna\\Breadcrumbs\\BreadcrumbsMiddleware' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:380:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:161:"fn (\\Tabuna\\Breadcrumbs\\Trail $trail) => $trail
        ->parent(\'platform.systems.roles\')
        ->push(\\__(\'Create\'), \\route(\'platform.systems.roles.create\'))";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000003db0000000000000000";}";s:4:"hash";s:44:"HW/HY7T0iACwaNYb4GMr8aBCwFNKR5C4Biy1KxviJvE=";}}',
      ),
      'wheres' => 
      array (
        'method' => 'save|remove',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'platform.systems.roles' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
      ),
      'uri' => 'admin/roles/{method?}',
      'action' => 
      array (
        'domain' => '',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'platform',
          2 => 'cache.headers:private;must_revalidate;etag',
          3 => 'breadcrumbs',
        ),
        'uses' => 'App\\Orchid\\Screens\\Role\\RoleListScreen@__invoke',
        'controller' => 'App\\Orchid\\Screens\\Role\\RoleListScreen',
        'namespace' => NULL,
        'prefix' => '/admin/',
        'where' => 
        array (
        ),
        'as' => 'platform.systems.roles',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'Tabuna\\Breadcrumbs\\BreadcrumbsMiddleware' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:364:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:145:"fn (\\Tabuna\\Breadcrumbs\\Trail $trail) => $trail
        ->parent(\'platform.index\')
        ->push(\\__(\'Roles\'), \\route(\'platform.systems.roles\'))";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000003c60000000000000000";}";s:4:"hash";s:44:"R0M1pGD6t7dOaC9teEFQDUb9r5NimawIbuMczhBTCP0=";}}',
      ),
      'wheres' => 
      array (
        'method' => '0',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'platform.example' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
      ),
      'uri' => 'admin/example/{method?}',
      'action' => 
      array (
        'domain' => '',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'platform',
          2 => 'cache.headers:private;must_revalidate;etag',
          3 => 'breadcrumbs',
        ),
        'uses' => 'App\\Orchid\\Screens\\Examples\\ExampleScreen@__invoke',
        'controller' => 'App\\Orchid\\Screens\\Examples\\ExampleScreen',
        'namespace' => NULL,
        'prefix' => '/admin/',
        'where' => 
        array (
        ),
        'as' => 'platform.example',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'Tabuna\\Breadcrumbs\\BreadcrumbsMiddleware' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:334:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:115:"fn (\\Tabuna\\Breadcrumbs\\Trail $trail) => $trail
        ->parent(\'platform.index\')
        ->push(\'Example Screen\')";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000003dd0000000000000000";}";s:4:"hash";s:44:"fmBXV2NktPTe5evqHwIoSbMagn1CFDd1iPvdiNAtRk4=";}}',
      ),
      'wheres' => 
      array (
        'method' => 'showToast',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'platform.pages.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
      ),
      'uri' => 'admin/pages/{method?}',
      'action' => 
      array (
        'domain' => '',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'platform',
          2 => 'cache.headers:private;must_revalidate;etag',
        ),
        'uses' => 'App\\Orchid\\Screens\\PageListScreen@__invoke',
        'controller' => 'App\\Orchid\\Screens\\PageListScreen',
        'namespace' => NULL,
        'prefix' => '/admin/',
        'where' => 
        array (
        ),
        'as' => 'platform.pages.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'method' => '0',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'platform.pages.editItem' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
      ),
      'uri' => 'admin/pages/{id}/{method?}',
      'action' => 
      array (
        'domain' => '',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'platform',
          2 => 'cache.headers:private;must_revalidate;etag',
        ),
        'uses' => 'App\\Orchid\\Screens\\PageEditScreen@__invoke',
        'controller' => 'App\\Orchid\\Screens\\PageEditScreen',
        'namespace' => NULL,
        'prefix' => '/admin/',
        'where' => 
        array (
        ),
        'as' => 'platform.pages.editItem',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'method' => 'createOrUpdate|remove',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'platform.pages.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
      ),
      'uri' => 'admin/pagesEdit/{method?}',
      'action' => 
      array (
        'domain' => '',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'platform',
          2 => 'cache.headers:private;must_revalidate;etag',
        ),
        'uses' => 'App\\Orchid\\Screens\\PageEditScreen@__invoke',
        'controller' => 'App\\Orchid\\Screens\\PageEditScreen',
        'namespace' => NULL,
        'prefix' => '/admin/',
        'where' => 
        array (
        ),
        'as' => 'platform.pages.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'method' => 'createOrUpdate|remove',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'platform.menus.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
      ),
      'uri' => 'admin/menus/{method?}',
      'action' => 
      array (
        'domain' => '',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'platform',
          2 => 'cache.headers:private;must_revalidate;etag',
        ),
        'uses' => 'App\\Orchid\\Screens\\MenuListScreen@__invoke',
        'controller' => 'App\\Orchid\\Screens\\MenuListScreen',
        'namespace' => NULL,
        'prefix' => '/admin/',
        'where' => 
        array (
        ),
        'as' => 'platform.menus.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'method' => '0',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'platform.menus.editItem' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
      ),
      'uri' => 'admin/menus/{id}/{method?}',
      'action' => 
      array (
        'domain' => '',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'platform',
          2 => 'cache.headers:private;must_revalidate;etag',
        ),
        'uses' => 'App\\Orchid\\Screens\\MenuEditScreen@__invoke',
        'controller' => 'App\\Orchid\\Screens\\MenuEditScreen',
        'namespace' => NULL,
        'prefix' => '/admin/',
        'where' => 
        array (
        ),
        'as' => 'platform.menus.editItem',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'method' => 'createOrUpdate|remove',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'platform.menus.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
      ),
      'uri' => 'admin/menusEdit/{method?}',
      'action' => 
      array (
        'domain' => '',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'platform',
          2 => 'cache.headers:private;must_revalidate;etag',
        ),
        'uses' => 'App\\Orchid\\Screens\\MenuEditScreen@__invoke',
        'controller' => 'App\\Orchid\\Screens\\MenuEditScreen',
        'namespace' => NULL,
        'prefix' => '/admin/',
        'where' => 
        array (
        ),
        'as' => 'platform.menus.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'method' => 'createOrUpdate|remove',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'platform.settings.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
      ),
      'uri' => 'admin/settings/{method?}',
      'action' => 
      array (
        'domain' => '',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'platform',
          2 => 'cache.headers:private;must_revalidate;etag',
        ),
        'uses' => 'App\\Orchid\\Screens\\SettingListScreen@__invoke',
        'controller' => 'App\\Orchid\\Screens\\SettingListScreen',
        'namespace' => NULL,
        'prefix' => '/admin/',
        'where' => 
        array (
        ),
        'as' => 'platform.settings.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'method' => '0',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'platform.settings.editItem' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
      ),
      'uri' => 'admin/settings/{id}/{method?}',
      'action' => 
      array (
        'domain' => '',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'platform',
          2 => 'cache.headers:private;must_revalidate;etag',
        ),
        'uses' => 'App\\Orchid\\Screens\\SettingEditScreen@__invoke',
        'controller' => 'App\\Orchid\\Screens\\SettingEditScreen',
        'namespace' => NULL,
        'prefix' => '/admin/',
        'where' => 
        array (
        ),
        'as' => 'platform.settings.editItem',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'method' => 'createOrUpdate|remove',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'platform.settings.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
      ),
      'uri' => 'admin/settingsEdit/{method?}',
      'action' => 
      array (
        'domain' => '',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'platform',
          2 => 'cache.headers:private;must_revalidate;etag',
        ),
        'uses' => 'App\\Orchid\\Screens\\SettingEditScreen@__invoke',
        'controller' => 'App\\Orchid\\Screens\\SettingEditScreen',
        'namespace' => NULL,
        'prefix' => '/admin/',
        'where' => 
        array (
        ),
        'as' => 'platform.settings.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'method' => 'createOrUpdate|remove',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'platform.blocks.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
      ),
      'uri' => 'admin/blocks/{method?}',
      'action' => 
      array (
        'domain' => '',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'platform',
          2 => 'cache.headers:private;must_revalidate;etag',
        ),
        'uses' => 'App\\Orchid\\Screens\\BlockListScreen@__invoke',
        'controller' => 'App\\Orchid\\Screens\\BlockListScreen',
        'namespace' => NULL,
        'prefix' => '/admin/',
        'where' => 
        array (
        ),
        'as' => 'platform.blocks.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'method' => '0',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'platform.blocks.editItem' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
      ),
      'uri' => 'admin/blocks/{id}/{method?}',
      'action' => 
      array (
        'domain' => '',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'platform',
          2 => 'cache.headers:private;must_revalidate;etag',
        ),
        'uses' => 'App\\Orchid\\Screens\\BlockEditScreen@__invoke',
        'controller' => 'App\\Orchid\\Screens\\BlockEditScreen',
        'namespace' => NULL,
        'prefix' => '/admin/',
        'where' => 
        array (
        ),
        'as' => 'platform.blocks.editItem',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'method' => 'createOrUpdate|remove',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'platform.blocks.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
      ),
      'uri' => 'admin/blocksEdit/{method?}',
      'action' => 
      array (
        'domain' => '',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'platform',
          2 => 'cache.headers:private;must_revalidate;etag',
        ),
        'uses' => 'App\\Orchid\\Screens\\BlockEditScreen@__invoke',
        'controller' => 'App\\Orchid\\Screens\\BlockEditScreen',
        'namespace' => NULL,
        'prefix' => '/admin/',
        'where' => 
        array (
        ),
        'as' => 'platform.blocks.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'method' => 'createOrUpdate|remove',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'platform.advantages.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
      ),
      'uri' => 'admin/advantages/{method?}',
      'action' => 
      array (
        'domain' => '',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'platform',
          2 => 'cache.headers:private;must_revalidate;etag',
        ),
        'uses' => 'App\\Orchid\\Screens\\AdvantageListScreen@__invoke',
        'controller' => 'App\\Orchid\\Screens\\AdvantageListScreen',
        'namespace' => NULL,
        'prefix' => '/admin/',
        'where' => 
        array (
        ),
        'as' => 'platform.advantages.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'method' => '0',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'platform.advantages.editItem' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
      ),
      'uri' => 'admin/advantages/{id}/{method?}',
      'action' => 
      array (
        'domain' => '',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'platform',
          2 => 'cache.headers:private;must_revalidate;etag',
        ),
        'uses' => 'App\\Orchid\\Screens\\AdvantageEditScreen@__invoke',
        'controller' => 'App\\Orchid\\Screens\\AdvantageEditScreen',
        'namespace' => NULL,
        'prefix' => '/admin/',
        'where' => 
        array (
        ),
        'as' => 'platform.advantages.editItem',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'method' => 'createOrUpdate|remove',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'platform.advantages.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
      ),
      'uri' => 'admin/advantagesEdit/{method?}',
      'action' => 
      array (
        'domain' => '',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'platform',
          2 => 'cache.headers:private;must_revalidate;etag',
        ),
        'uses' => 'App\\Orchid\\Screens\\AdvantageEditScreen@__invoke',
        'controller' => 'App\\Orchid\\Screens\\AdvantageEditScreen',
        'namespace' => NULL,
        'prefix' => '/admin/',
        'where' => 
        array (
        ),
        'as' => 'platform.advantages.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'method' => 'createOrUpdate|remove',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'platform.reviews.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
      ),
      'uri' => 'admin/reviews/{method?}',
      'action' => 
      array (
        'domain' => '',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'platform',
          2 => 'cache.headers:private;must_revalidate;etag',
        ),
        'uses' => 'App\\Orchid\\Screens\\ReviewListScreen@__invoke',
        'controller' => 'App\\Orchid\\Screens\\ReviewListScreen',
        'namespace' => NULL,
        'prefix' => '/admin/',
        'where' => 
        array (
        ),
        'as' => 'platform.reviews.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'method' => '0',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'platform.reviews.editItem' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
      ),
      'uri' => 'admin/reviews/{id}/{method?}',
      'action' => 
      array (
        'domain' => '',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'platform',
          2 => 'cache.headers:private;must_revalidate;etag',
        ),
        'uses' => 'App\\Orchid\\Screens\\ReviewEditScreen@__invoke',
        'controller' => 'App\\Orchid\\Screens\\ReviewEditScreen',
        'namespace' => NULL,
        'prefix' => '/admin/',
        'where' => 
        array (
        ),
        'as' => 'platform.reviews.editItem',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'method' => 'createOrUpdate|remove',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'platform.reviews.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
      ),
      'uri' => 'admin/reviewsEdit/{method?}',
      'action' => 
      array (
        'domain' => '',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'platform',
          2 => 'cache.headers:private;must_revalidate;etag',
        ),
        'uses' => 'App\\Orchid\\Screens\\ReviewEditScreen@__invoke',
        'controller' => 'App\\Orchid\\Screens\\ReviewEditScreen',
        'namespace' => NULL,
        'prefix' => '/admin/',
        'where' => 
        array (
        ),
        'as' => 'platform.reviews.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'method' => 'createOrUpdate|remove',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'platform.partners.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
      ),
      'uri' => 'admin/partners/{method?}',
      'action' => 
      array (
        'domain' => '',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'platform',
          2 => 'cache.headers:private;must_revalidate;etag',
        ),
        'uses' => 'App\\Orchid\\Screens\\PartnerListScreen@__invoke',
        'controller' => 'App\\Orchid\\Screens\\PartnerListScreen',
        'namespace' => NULL,
        'prefix' => '/admin/',
        'where' => 
        array (
        ),
        'as' => 'platform.partners.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'method' => '0',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'platform.partners.editItem' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
      ),
      'uri' => 'admin/partners/{id}/{method?}',
      'action' => 
      array (
        'domain' => '',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'platform',
          2 => 'cache.headers:private;must_revalidate;etag',
        ),
        'uses' => 'App\\Orchid\\Screens\\PartnerEditScreen@__invoke',
        'controller' => 'App\\Orchid\\Screens\\PartnerEditScreen',
        'namespace' => NULL,
        'prefix' => '/admin/',
        'where' => 
        array (
        ),
        'as' => 'platform.partners.editItem',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'method' => 'createOrUpdate|remove',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'platform.partners.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
      ),
      'uri' => 'admin/partnersEdit/{method?}',
      'action' => 
      array (
        'domain' => '',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'platform',
          2 => 'cache.headers:private;must_revalidate;etag',
        ),
        'uses' => 'App\\Orchid\\Screens\\PartnerEditScreen@__invoke',
        'controller' => 'App\\Orchid\\Screens\\PartnerEditScreen',
        'namespace' => NULL,
        'prefix' => '/admin/',
        'where' => 
        array (
        ),
        'as' => 'platform.partners.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'method' => 'createOrUpdate|remove',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'platform.marquees.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
      ),
      'uri' => 'admin/marquees/{method?}',
      'action' => 
      array (
        'domain' => '',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'platform',
          2 => 'cache.headers:private;must_revalidate;etag',
        ),
        'uses' => 'App\\Orchid\\Screens\\MarqueeListScreen@__invoke',
        'controller' => 'App\\Orchid\\Screens\\MarqueeListScreen',
        'namespace' => NULL,
        'prefix' => '/admin/',
        'where' => 
        array (
        ),
        'as' => 'platform.marquees.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'method' => '0',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'platform.marquees.editItem' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
      ),
      'uri' => 'admin/marquees/{id}/{method?}',
      'action' => 
      array (
        'domain' => '',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'platform',
          2 => 'cache.headers:private;must_revalidate;etag',
        ),
        'uses' => 'App\\Orchid\\Screens\\MarqueeEditScreen@__invoke',
        'controller' => 'App\\Orchid\\Screens\\MarqueeEditScreen',
        'namespace' => NULL,
        'prefix' => '/admin/',
        'where' => 
        array (
        ),
        'as' => 'platform.marquees.editItem',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'method' => 'createOrUpdate|remove',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'platform.marquees.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
      ),
      'uri' => 'admin/marqueesEdit/{method?}',
      'action' => 
      array (
        'domain' => '',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'platform',
          2 => 'cache.headers:private;must_revalidate;etag',
        ),
        'uses' => 'App\\Orchid\\Screens\\MarqueeEditScreen@__invoke',
        'controller' => 'App\\Orchid\\Screens\\MarqueeEditScreen',
        'namespace' => NULL,
        'prefix' => '/admin/',
        'where' => 
        array (
        ),
        'as' => 'platform.marquees.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'method' => 'createOrUpdate|remove',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'platform.faqs.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
      ),
      'uri' => 'admin/faqs/{method?}',
      'action' => 
      array (
        'domain' => '',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'platform',
          2 => 'cache.headers:private;must_revalidate;etag',
        ),
        'uses' => 'App\\Orchid\\Screens\\FaqListScreen@__invoke',
        'controller' => 'App\\Orchid\\Screens\\FaqListScreen',
        'namespace' => NULL,
        'prefix' => '/admin/',
        'where' => 
        array (
        ),
        'as' => 'platform.faqs.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'method' => '0',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'platform.faqs.editItem' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
      ),
      'uri' => 'admin/faqs/{id}/{method?}',
      'action' => 
      array (
        'domain' => '',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'platform',
          2 => 'cache.headers:private;must_revalidate;etag',
        ),
        'uses' => 'App\\Orchid\\Screens\\FaqEditScreen@__invoke',
        'controller' => 'App\\Orchid\\Screens\\FaqEditScreen',
        'namespace' => NULL,
        'prefix' => '/admin/',
        'where' => 
        array (
        ),
        'as' => 'platform.faqs.editItem',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'method' => 'createOrUpdate|remove',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'platform.faqs.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
      ),
      'uri' => 'admin/faqsEdit/{method?}',
      'action' => 
      array (
        'domain' => '',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'platform',
          2 => 'cache.headers:private;must_revalidate;etag',
        ),
        'uses' => 'App\\Orchid\\Screens\\FaqEditScreen@__invoke',
        'controller' => 'App\\Orchid\\Screens\\FaqEditScreen',
        'namespace' => NULL,
        'prefix' => '/admin/',
        'where' => 
        array (
        ),
        'as' => 'platform.faqs.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'method' => 'createOrUpdate|remove',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'platform.directors.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
      ),
      'uri' => 'admin/directors/{method?}',
      'action' => 
      array (
        'domain' => '',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'platform',
          2 => 'cache.headers:private;must_revalidate;etag',
        ),
        'uses' => 'App\\Orchid\\Screens\\DirectorListScreen@__invoke',
        'controller' => 'App\\Orchid\\Screens\\DirectorListScreen',
        'namespace' => NULL,
        'prefix' => '/admin/',
        'where' => 
        array (
        ),
        'as' => 'platform.directors.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'method' => '0',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'platform.directors.editItem' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
      ),
      'uri' => 'admin/directors/{id}/{method?}',
      'action' => 
      array (
        'domain' => '',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'platform',
          2 => 'cache.headers:private;must_revalidate;etag',
        ),
        'uses' => 'App\\Orchid\\Screens\\DirectorEditScreen@__invoke',
        'controller' => 'App\\Orchid\\Screens\\DirectorEditScreen',
        'namespace' => NULL,
        'prefix' => '/admin/',
        'where' => 
        array (
        ),
        'as' => 'platform.directors.editItem',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'method' => 'createOrUpdate|remove',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'platform.directors.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
      ),
      'uri' => 'admin/directorsEdit/{method?}',
      'action' => 
      array (
        'domain' => '',
        'middleware' => 
        array (
          0 => 'web',
          1 => 'platform',
          2 => 'cache.headers:private;must_revalidate;etag',
        ),
        'uses' => 'App\\Orchid\\Screens\\DirectorEditScreen@__invoke',
        'controller' => 'App\\Orchid\\Screens\\DirectorEditScreen',
        'namespace' => NULL,
        'prefix' => '/admin/',
        'where' => 
        array (
        ),
        'as' => 'platform.directors.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'method' => 'createOrUpdate|remove',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.healthCheck' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_ignition/health-check',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController',
        'as' => 'ignition.healthCheck',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.executeSolution' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/execute-solution',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController',
        'as' => 'ignition.executeSolution',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.updateConfig' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/update-config',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController',
        'as' => 'ignition.updateConfig',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::t9y8oqISs1Tx4wn1' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:77:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000041d0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::t9y8oqISs1Tx4wn1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'main' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\PagesController@main',
        'controller' => 'App\\Http\\Controllers\\PagesController@main',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'main',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'about' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'about',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\PagesController@about',
        'controller' => 'App\\Http\\Controllers\\PagesController@about',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'about',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
