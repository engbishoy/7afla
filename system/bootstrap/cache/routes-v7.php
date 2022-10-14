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
      '/_debugbar/open' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.openhandler',
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
      '/_debugbar/assets/stylesheets' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.assets.css',
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
      '/_debugbar/assets/javascript' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.assets.js',
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
      '/api/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SaUvijlyc4mB6dLI',
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
      '/api/businessprofile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XeU8xJfr4gLz2T7L',
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
      '/dashboard/profiles/delete-many' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'profile.destroy.many',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/profiles/ajax/datatable' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'profile.datatable',
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
      '/dashboard/profiles' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'profile.index',
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
            '_route' => 'profile.store',
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
      '/dashboard/profiles/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'profile.create',
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
      '/dashboard/profiles/trashed/delete-many' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'profile.trashed.destroy.many',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/profiles/trashed/restore-many' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'profile.trashed.restore.many',
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
      '/dashboard/profiles/trashed/ajax/datatable' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'profile.trashed.datatable',
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
      '/upload/photos' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'gallary.upload_photos',
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
      '/delete/photos' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'gallary.delete_photos',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/photos/get' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'gallary.get_photos',
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
      '/api/setting' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::K4t6Seu3sc3K5Dki',
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
      '/core' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::D9RXdbONiKUXqms9',
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
      '/core/theme' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hQPdizwrrrWAKI3w',
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
      '/api/dashboardprovider' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vcwg1NLNdwIUtwJL',
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
            '_route' => 'dashboard.provider',
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
            '_route' => 'generated::bue4iPbU5EB0k9if',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
            'PUT' => 3,
            'PATCH' => 4,
            'DELETE' => 5,
            'OPTIONS' => 6,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/provider/dashboard/services' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.provider.services',
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
      '/provider/dashboard/profiles/delete-many' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.provider.profile.destroy.many',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/provider/dashboard/package/delete-many' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.provider.package.destroy.many',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/provider/dashboard/package/ajax/datatable' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.provider.package.datatable',
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
      '/provider/dashboard/package' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.provider.package.index',
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
            '_route' => 'dashboard.provider.package.store',
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
      '/provider/dashboard/package/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.provider.package.create',
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
      '/provider/dashboard/gallary/delete-many' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.provider.gallary.destroy.many',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/provider/dashboard/gallary/ajax/datatable' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.provider.gallary.datatable',
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
      '/provider/dashboard/gallary' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.provider.gallary.index',
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
            '_route' => 'dashboard.provider.gallary.store',
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
      '/provider/dashboard/gallary/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.provider.gallary.create',
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
      '/api/package' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::oeE37ywitfX0y8e7',
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
      '/dashboard/package/delete-many' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'package.destroy.many',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/package/ajax/datatable' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'package.datatable',
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
      '/dashboard/package' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'package.index',
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
            '_route' => 'package.store',
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
      '/dashboard/package/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'package.create',
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
      '/dashboard/package/trashed/delete-many' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'package.trashed.destroy.many',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/package/trashed/restore-many' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'package.trashed.restore.many',
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
      '/dashboard/package/trashed/ajax/datatable' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'package.trashed.datatable',
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
      '/api/page' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fGREP0ArFQuZ2yFd',
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
      '/dashboard/page/delete-many' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'page.destroy.many',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/page/ajax/datatable' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'page.datatable',
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
      '/dashboard/page' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'page.index',
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
            '_route' => 'page.store',
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
      '/dashboard/page/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'page.create',
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
      '/dashboard/roles/delete-many' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'roles.destroy.many',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/roles/ajax/datatable' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'roles.datatable',
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
      '/dashboard/roles' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'roles.index',
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
            '_route' => 'roles.store',
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
      '/dashboard/roles/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'roles.create',
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
      '/api/provider' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fucD9IZEOFmoytbs',
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
      '/provider/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'provider.login.show',
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
            '_route' => 'provider.login',
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
      '/provider/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'provider.logout',
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
      '/dashboard/providers/delete-many' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'provider.destroy.many',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/providers/ajax/datatable' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'provider.datatable',
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
      '/dashboard/providers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'provider.index',
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
            '_route' => 'provider.store',
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
      '/dashboard/providers/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'provider.create',
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
      '/dashboard/providers/trashed/delete-many' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'provider.trashed.destroy.many',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/providers/trashed/restore-many' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'provider.trashed.restore.many',
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
      '/dashboard/providers/trashed/ajax/datatable' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'provider.trashed.datatable',
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
      '/provider/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'provider.dashboard',
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
      '/api/service' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Fwe3oNC3stHHhgCU',
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
      '/dashboard/service/delete-many' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'service.destroy.many',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/service/ajax/datatable' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'service.datatable',
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
      '/dashboard/service' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'service.index',
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
            '_route' => 'service.store',
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
      '/dashboard/service/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'service.create',
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
      '/dashboard/service/trashed/delete-many' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'service.trashed.destroy.many',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/service/trashed/restore-many' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'service.trashed.restore.many',
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
      '/dashboard/service/trashed/ajax/datatable' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'service.trashed.datatable',
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
      '/api/subscription' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ykWFcgsNdziYiI1L',
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
      '/dashboard/subscription/delete-many' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subscription.destroy.many',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/subscription/ajax/datatable' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subscription.datatable',
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
      '/dashboard/subscription' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subscription.index',
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
            '_route' => 'subscription.store',
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
      '/dashboard/subscription/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subscription.create',
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
      '/user/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.login.show',
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
            '_route' => 'user.login',
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
      '/user/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.logout',
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
      '/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard',
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
      '/dashboard/users/delete-many' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.destroy.many',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/users/ajax/datatable' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.datatable',
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
      '/dashboard/users' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.index',
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
            '_route' => 'users.store',
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
      '/dashboard/users/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.create',
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
      '/dashboard/users/trashed/delete-many' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.trashed.destroy.many',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/users/trashed/restore-many' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.trashed.restore.many',
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
      '/dashboard/users/trashed/ajax/datatable' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.trashed.datatable',
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
      0 => '{^(?|/_debugbar/c(?|lockwork/([^/]++)(*:39)|ache/([^/]++)(?:/([^/]++))?(*:73))|/dashboard/(?|p(?|ro(?|files/(?|ajax/datatable/([^/]++)(*:136)|([^/]++)(?|(*:155)|/edit(*:168)|(*:176))|active/([^/]++)(*:200)|block/([^/]++)(*:222)|trashed/([^/]++)(?|(*:249)))|viders/(?|([^/]++)(?|(*:280)|/edit(*:293)|(*:301))|trashed/([^/]++)(?|(*:329))))|a(?|ckage/(?|([^/]++)(?|(*:364)|/edit(*:377)|(*:385))|trashed/([^/]++)(?|(*:413)))|ge/([^/]++)(?|(*:437)|/edit(*:450)|(*:458))))|roles/([^/]++)(?|(*:486)|/edit(*:499)|(*:507))|s(?|ervice/(?|([^/]++)(?|(*:541)|/edit(*:554)|(*:562))|trashed/([^/]++)(?|(*:590)))|ubscription/([^/]++)(?|(*:623)|/edit(*:636)|(*:644)))|users/(?|([^/]++)(?|(*:674)|/edit(*:687)|(*:695))|trashed/([^/]++)(?|(*:723))))|/provider/dashboard/(?|p(?|rofiles/(?|ajax/datatable/([^/]++)(*:795)|([^/]++)(?|(*:814))|create/([^/]++)(*:838)|([^/]++)(?|(*:857)|/edit(*:870)|(*:878)))|ackage/([^/]++)(?|(*:906)|/edit(*:919)|(*:927)))|gallary/([^/]++)(*:953)))/?$}sDu',
    ),
    3 => 
    array (
      39 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.clockwork',
          ),
          1 => 
          array (
            0 => 'id',
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
      ),
      73 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.cache.delete',
            'tags' => NULL,
          ),
          1 => 
          array (
            0 => 'key',
            1 => 'tags',
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
      136 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'profile.status.datatable',
          ),
          1 => 
          array (
            0 => 'status',
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
      ),
      155 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'profile.update',
          ),
          1 => 
          array (
            0 => 'profile',
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
      168 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'profile.edit',
          ),
          1 => 
          array (
            0 => 'profile',
          ),
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
      176 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'profile.destroy',
          ),
          1 => 
          array (
            0 => 'profile',
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
      200 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'profile.active',
          ),
          1 => 
          array (
            0 => 'profile',
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
      222 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'profile.block',
          ),
          1 => 
          array (
            0 => 'profile',
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
      249 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'profile.trashed.destroy',
          ),
          1 => 
          array (
            0 => 'profile',
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
        1 => 
        array (
          0 => 
          array (
            '_route' => 'profile.trashed.restore',
          ),
          1 => 
          array (
            0 => 'profile',
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
      280 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'provider.update',
          ),
          1 => 
          array (
            0 => 'provider',
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
      293 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'provider.edit',
          ),
          1 => 
          array (
            0 => 'provider',
          ),
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
      301 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'provider.destroy',
          ),
          1 => 
          array (
            0 => 'provider',
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
      329 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'provider.trashed.destroy',
          ),
          1 => 
          array (
            0 => 'provider',
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
        1 => 
        array (
          0 => 
          array (
            '_route' => 'provider.trashed.restore',
          ),
          1 => 
          array (
            0 => 'provider',
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
      364 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'package.update',
          ),
          1 => 
          array (
            0 => 'package',
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
      377 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'package.edit',
          ),
          1 => 
          array (
            0 => 'package',
          ),
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
      385 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'package.destroy',
          ),
          1 => 
          array (
            0 => 'package',
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
      413 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'package.trashed.destroy',
          ),
          1 => 
          array (
            0 => 'package',
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
        1 => 
        array (
          0 => 
          array (
            '_route' => 'package.trashed.restore',
          ),
          1 => 
          array (
            0 => 'package',
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
      437 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'page.update',
          ),
          1 => 
          array (
            0 => 'page',
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
      450 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'page.edit',
          ),
          1 => 
          array (
            0 => 'page',
          ),
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
      458 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'page.destroy',
          ),
          1 => 
          array (
            0 => 'page',
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
      486 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'roles.update',
          ),
          1 => 
          array (
            0 => 'role',
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
      499 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'roles.edit',
          ),
          1 => 
          array (
            0 => 'role',
          ),
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
      507 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'roles.destroy',
          ),
          1 => 
          array (
            0 => 'role',
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
      541 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'service.update',
          ),
          1 => 
          array (
            0 => 'service',
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
      554 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'service.edit',
          ),
          1 => 
          array (
            0 => 'service',
          ),
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
      562 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'service.destroy',
          ),
          1 => 
          array (
            0 => 'service',
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
      590 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'service.trashed.destroy',
          ),
          1 => 
          array (
            0 => 'service',
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
        1 => 
        array (
          0 => 
          array (
            '_route' => 'service.trashed.restore',
          ),
          1 => 
          array (
            0 => 'service',
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
      623 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subscription.update',
          ),
          1 => 
          array (
            0 => 'subscription',
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
      636 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subscription.edit',
          ),
          1 => 
          array (
            0 => 'subscription',
          ),
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
      644 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subscription.destroy',
          ),
          1 => 
          array (
            0 => 'subscription',
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
      674 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.update',
          ),
          1 => 
          array (
            0 => 'user',
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
      687 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.edit',
          ),
          1 => 
          array (
            0 => 'user',
          ),
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
      695 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.destroy',
          ),
          1 => 
          array (
            0 => 'user',
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
      723 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.trashed.destroy',
          ),
          1 => 
          array (
            0 => 'user',
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
        1 => 
        array (
          0 => 
          array (
            '_route' => 'users.trashed.restore',
          ),
          1 => 
          array (
            0 => 'user',
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
      795 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.provider.profile.datatable',
          ),
          1 => 
          array (
            0 => 'service',
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
      ),
      814 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.provider.profile.index',
          ),
          1 => 
          array (
            0 => 'service',
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
          0 => 
          array (
            '_route' => 'dashboard.provider.profile.store',
          ),
          1 => 
          array (
            0 => 'service',
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
      838 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.provider.profile.create',
          ),
          1 => 
          array (
            0 => 'service',
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
      ),
      857 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.provider.profile.update',
          ),
          1 => 
          array (
            0 => 'profile',
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
      870 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.provider.profile.edit',
          ),
          1 => 
          array (
            0 => 'profile',
          ),
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
      878 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.provider.profile.destroy',
          ),
          1 => 
          array (
            0 => 'profile',
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
      906 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.provider.package.update',
          ),
          1 => 
          array (
            0 => 'package',
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
      919 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.provider.package.edit',
          ),
          1 => 
          array (
            0 => 'package',
          ),
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
      927 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.provider.package.destroy',
          ),
          1 => 
          array (
            0 => 'package',
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
      953 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.provider.gallary.destroy',
          ),
          1 => 
          array (
            0 => 'gallary',
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
    'debugbar.openhandler' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/open',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@handle',
        'as' => 'debugbar.openhandler',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@handle',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
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
    'debugbar.clockwork' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/clockwork/{id}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@clockwork',
        'as' => 'debugbar.clockwork',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@clockwork',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
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
    'debugbar.assets.css' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/assets/stylesheets',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@css',
        'as' => 'debugbar.assets.css',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@css',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
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
    'debugbar.assets.js' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/assets/javascript',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@js',
        'as' => 'debugbar.assets.js',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@js',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
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
    'debugbar.cache.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => '_debugbar/cache/{key}/{tags?}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\CacheController@delete',
        'as' => 'debugbar.cache.delete',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\CacheController@delete',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
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
    'generated::SaUvijlyc4mB6dLI' => 
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
          1 => 'auth:api',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:297:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:79:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000003ae46eb70000000064a1cd07";}";s:4:"hash";s:44:"5y6xtj6jZ8YWA3ONW0fAys8HJlgcoXqAoPk7WTixx4g=";}}',
        'namespace' => 'Modules\\User\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::SaUvijlyc4mB6dLI',
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
    'generated::XeU8xJfr4gLz2T7L' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/businessprofile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:295:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:77:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000003ae461c60000000064a1cd07";}";s:4:"hash";s:44:"qbTwFvEYPj5Qfa+QQG7YOsqHMqfONOZhIVEkWQ2VXnk=";}}',
        'namespace' => 'Modules\\BusinessProfile\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::XeU8xJfr4gLz2T7L',
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
    'profile.destroy.many' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/profiles/delete-many',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
          2 => 'can:profile.actions.delete',
        ),
        'uses' => 'Modules\\BusinessProfile\\Http\\Controllers\\ProfileController@destroyMany',
        'controller' => 'Modules\\BusinessProfile\\Http\\Controllers\\ProfileController@destroyMany',
        'as' => 'profile.destroy.many',
        'namespace' => 'Modules\\BusinessProfile\\Http\\Controllers',
        'prefix' => 'dashboard/profiles',
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
    'profile.datatable' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/profiles/ajax/datatable',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
          2 => 'can:profile.actions.view',
        ),
        'uses' => 'Modules\\BusinessProfile\\Http\\Controllers\\ProfileDatatableController@__invoke',
        'controller' => 'Modules\\BusinessProfile\\Http\\Controllers\\ProfileDatatableController',
        'as' => 'profile.datatable',
        'namespace' => 'Modules\\BusinessProfile\\Http\\Controllers',
        'prefix' => 'dashboard/profiles',
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
    'profile.status.datatable' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/profiles/ajax/datatable/{status}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
          2 => 'can:profile.actions.view',
        ),
        'uses' => 'Modules\\BusinessProfile\\Http\\Controllers\\ProfileStatusDatatableController@__invoke',
        'controller' => 'Modules\\BusinessProfile\\Http\\Controllers\\ProfileStatusDatatableController',
        'as' => 'profile.status.datatable',
        'namespace' => 'Modules\\BusinessProfile\\Http\\Controllers',
        'prefix' => 'dashboard/profiles',
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
    'profile.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/profiles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
          2 => 'can:profile.actions.view',
        ),
        'uses' => 'Modules\\BusinessProfile\\Http\\Controllers\\ProfileController@index',
        'controller' => 'Modules\\BusinessProfile\\Http\\Controllers\\ProfileController@index',
        'as' => 'profile.index',
        'namespace' => 'Modules\\BusinessProfile\\Http\\Controllers',
        'prefix' => 'dashboard/profiles',
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
    'profile.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/profiles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
          2 => 'can:profile.actions.add',
        ),
        'uses' => 'Modules\\BusinessProfile\\Http\\Controllers\\ProfileController@store',
        'controller' => 'Modules\\BusinessProfile\\Http\\Controllers\\ProfileController@store',
        'as' => 'profile.store',
        'namespace' => 'Modules\\BusinessProfile\\Http\\Controllers',
        'prefix' => 'dashboard/profiles',
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
    'profile.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/profiles/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
          2 => 'can:profile.actions.add',
        ),
        'uses' => 'Modules\\BusinessProfile\\Http\\Controllers\\ProfileController@create',
        'controller' => 'Modules\\BusinessProfile\\Http\\Controllers\\ProfileController@create',
        'as' => 'profile.create',
        'namespace' => 'Modules\\BusinessProfile\\Http\\Controllers',
        'prefix' => 'dashboard/profiles',
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
    'profile.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'dashboard/profiles/{profile}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
          2 => 'can:profile.actions.edit',
        ),
        'uses' => 'Modules\\BusinessProfile\\Http\\Controllers\\ProfileController@update',
        'controller' => 'Modules\\BusinessProfile\\Http\\Controllers\\ProfileController@update',
        'as' => 'profile.update',
        'namespace' => 'Modules\\BusinessProfile\\Http\\Controllers',
        'prefix' => 'dashboard/profiles',
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
    'profile.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/profiles/{profile}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
          2 => 'can:profile.actions.edit',
        ),
        'uses' => 'Modules\\BusinessProfile\\Http\\Controllers\\ProfileController@edit',
        'controller' => 'Modules\\BusinessProfile\\Http\\Controllers\\ProfileController@edit',
        'as' => 'profile.edit',
        'namespace' => 'Modules\\BusinessProfile\\Http\\Controllers',
        'prefix' => 'dashboard/profiles',
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
    'profile.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/profiles/{profile}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
          2 => 'can:profile.actions.delete',
        ),
        'uses' => 'Modules\\BusinessProfile\\Http\\Controllers\\ProfileController@destroy',
        'controller' => 'Modules\\BusinessProfile\\Http\\Controllers\\ProfileController@destroy',
        'as' => 'profile.destroy',
        'namespace' => 'Modules\\BusinessProfile\\Http\\Controllers',
        'prefix' => 'dashboard/profiles',
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
    'profile.active' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'dashboard/profiles/active/{profile}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
          2 => 'can:profile.actions.control',
        ),
        'uses' => 'Modules\\BusinessProfile\\Http\\Controllers\\ProfileController@active',
        'controller' => 'Modules\\BusinessProfile\\Http\\Controllers\\ProfileController@active',
        'as' => 'profile.active',
        'namespace' => 'Modules\\BusinessProfile\\Http\\Controllers',
        'prefix' => 'dashboard/profiles',
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
    'profile.block' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'dashboard/profiles/block/{profile}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
          2 => 'can:Profile.actions.control',
        ),
        'uses' => 'Modules\\BusinessProfile\\Http\\Controllers\\ProfileController@block',
        'controller' => 'Modules\\BusinessProfile\\Http\\Controllers\\ProfileController@block',
        'as' => 'profile.block',
        'namespace' => 'Modules\\BusinessProfile\\Http\\Controllers',
        'prefix' => 'dashboard/profiles',
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
    'profile.trashed.destroy.many' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/profiles/trashed/delete-many',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
          2 => 'can:profile.actions.hard_delete',
        ),
        'uses' => 'Modules\\BusinessProfile\\Http\\Controllers\\Trashed\\ProfileTrashedController@destroyMany',
        'controller' => 'Modules\\BusinessProfile\\Http\\Controllers\\Trashed\\ProfileTrashedController@destroyMany',
        'as' => 'profile.trashed.destroy.many',
        'namespace' => 'Modules\\BusinessProfile\\Http\\Controllers\\Trashed',
        'prefix' => 'dashboard/profiles/trashed',
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
    'profile.trashed.restore.many' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/profiles/trashed/restore-many',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
          2 => 'can:profile.actions.restore',
        ),
        'uses' => 'Modules\\BusinessProfile\\Http\\Controllers\\Trashed\\ProfileTrashedController@restoreMany',
        'controller' => 'Modules\\BusinessProfile\\Http\\Controllers\\Trashed\\ProfileTrashedController@restoreMany',
        'as' => 'profile.trashed.restore.many',
        'namespace' => 'Modules\\BusinessProfile\\Http\\Controllers\\Trashed',
        'prefix' => 'dashboard/profiles/trashed',
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
    'profile.trashed.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/profiles/trashed/{profile}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
          2 => 'can:profile.actions.hard_delete',
        ),
        'uses' => 'Modules\\BusinessProfile\\Http\\Controllers\\Trashed\\ProfileTrashedController@destroy',
        'controller' => 'Modules\\BusinessProfile\\Http\\Controllers\\Trashed\\ProfileTrashedController@destroy',
        'as' => 'profile.trashed.destroy',
        'namespace' => 'Modules\\BusinessProfile\\Http\\Controllers\\Trashed',
        'prefix' => 'dashboard/profiles/trashed',
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
    'profile.trashed.restore' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/profiles/trashed/{profile}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
          2 => 'can:profile.actions.restore',
        ),
        'uses' => 'Modules\\BusinessProfile\\Http\\Controllers\\Trashed\\ProfileTrashedController@restore',
        'controller' => 'Modules\\BusinessProfile\\Http\\Controllers\\Trashed\\ProfileTrashedController@restore',
        'as' => 'profile.trashed.restore',
        'namespace' => 'Modules\\BusinessProfile\\Http\\Controllers\\Trashed',
        'prefix' => 'dashboard/profiles/trashed',
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
    'profile.trashed.datatable' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/profiles/trashed/ajax/datatable',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
          2 => 'can:profile.actions.view_trash',
        ),
        'uses' => 'Modules\\BusinessProfile\\Http\\Controllers\\Trashed\\ProfileTrashedDataTableController@__invoke',
        'controller' => 'Modules\\BusinessProfile\\Http\\Controllers\\Trashed\\ProfileTrashedDataTableController',
        'as' => 'profile.trashed.datatable',
        'namespace' => 'Modules\\BusinessProfile\\Http\\Controllers\\Trashed',
        'prefix' => 'dashboard/profiles/trashed',
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
    'gallary.upload_photos' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'upload/photos',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Modules\\BusinessProfile\\Http\\Controllers\\ProfileController@upload_photos',
        'controller' => 'Modules\\BusinessProfile\\Http\\Controllers\\ProfileController@upload_photos',
        'namespace' => 'Modules\\BusinessProfile\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'gallary.upload_photos',
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
    'gallary.delete_photos' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'delete/photos',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Modules\\BusinessProfile\\Http\\Controllers\\ProfileController@delete_photos',
        'controller' => 'Modules\\BusinessProfile\\Http\\Controllers\\ProfileController@delete_photos',
        'namespace' => 'Modules\\BusinessProfile\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'gallary.delete_photos',
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
    'gallary.get_photos' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'photos/get',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Modules\\BusinessProfile\\Http\\Controllers\\ProfileController@get_photos',
        'controller' => 'Modules\\BusinessProfile\\Http\\Controllers\\ProfileController@get_photos',
        'namespace' => 'Modules\\BusinessProfile\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'gallary.get_photos',
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
    'generated::K4t6Seu3sc3K5Dki' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/setting',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api',
          2 => 'auth:api',
        ),
        'uses' => 'Modules\\Core\\Http\\Controllers\\Api\\SettingOptionController@index',
        'controller' => 'Modules\\Core\\Http\\Controllers\\Api\\SettingOptionController@index',
        'namespace' => 'Modules\\Core\\Http\\Controllers\\Api',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::K4t6Seu3sc3K5Dki',
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
    'generated::D9RXdbONiKUXqms9' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'core',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Modules\\Core\\Http\\Controllers\\CoreController@index',
        'controller' => 'Modules\\Core\\Http\\Controllers\\CoreController@index',
        'namespace' => 'Modules\\Core\\Http\\Controllers',
        'prefix' => '/core',
        'where' => 
        array (
        ),
        'as' => 'generated::D9RXdbONiKUXqms9',
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
    'generated::hQPdizwrrrWAKI3w' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'core/theme',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:287:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:69:"function () {
        return \\view(\'dashboard::pages.index\');
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000003ae461d10000000064a1cd07";}";s:4:"hash";s:44:"UWv4ocp8CO06o7BMbUsCdu/DxYciuyIhm8kBgaOU2gk=";}}',
        'namespace' => 'Modules\\Core\\Http\\Controllers',
        'prefix' => '/core',
        'where' => 
        array (
        ),
        'as' => 'generated::hQPdizwrrrWAKI3w',
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
    'generated::vcwg1NLNdwIUtwJL' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/dashboardprovider',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:295:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:77:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000003ae46e3c0000000064a1cd07";}";s:4:"hash";s:44:"Oj1qmWvj9JkmYuyTGCyCF9H+wmeKgQsT5rTKBO704yc=";}}',
        'namespace' => 'Modules\\DashboardProvider\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::vcwg1NLNdwIUtwJL',
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
    'dashboard.provider' => 
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
        'uses' => '\\Illuminate\\Routing\\ViewController@__invoke',
        'controller' => '\\Illuminate\\Routing\\ViewController',
        'namespace' => 'Modules\\DashboardProvider\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'dashboard.provider',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'view' => 'provider::front.dashboard',
        'data' => 
        array (
        ),
        'status' => 200,
        'headers' => 
        array (
        ),
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
    'dashboard.provider.services' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'provider/dashboard/services',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:provider',
        ),
        'uses' => 'Modules\\DashboardProvider\\Http\\Controllers\\Profile\\ProfileController@services',
        'controller' => 'Modules\\DashboardProvider\\Http\\Controllers\\Profile\\ProfileController@services',
        'as' => 'dashboard.provider.services',
        'namespace' => 'Modules\\DashboardProvider\\Http\\Controllers',
        'prefix' => '/provider/dashboard',
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
    'dashboard.provider.profile.destroy.many' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'provider/dashboard/profiles/delete-many',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:provider',
        ),
        'uses' => 'Modules\\DashboardProvider\\Http\\Controllers\\Profile\\ProfileController@destroyMany',
        'controller' => 'Modules\\DashboardProvider\\Http\\Controllers\\Profile\\ProfileController@destroyMany',
        'as' => 'dashboard.provider.profile.destroy.many',
        'namespace' => 'Modules\\DashboardProvider\\Http\\Controllers\\Profile',
        'prefix' => 'provider/dashboard/profiles',
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
    'dashboard.provider.profile.datatable' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'provider/dashboard/profiles/ajax/datatable/{service}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:provider',
        ),
        'uses' => 'Modules\\DashboardProvider\\Http\\Controllers\\Profile\\ProfileDatatableController@__invoke',
        'controller' => 'Modules\\DashboardProvider\\Http\\Controllers\\Profile\\ProfileDatatableController',
        'as' => 'dashboard.provider.profile.datatable',
        'namespace' => 'Modules\\DashboardProvider\\Http\\Controllers\\Profile',
        'prefix' => 'provider/dashboard/profiles',
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
    'dashboard.provider.profile.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'provider/dashboard/profiles/{service}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:provider',
        ),
        'uses' => 'Modules\\DashboardProvider\\Http\\Controllers\\Profile\\ProfileController@index',
        'controller' => 'Modules\\DashboardProvider\\Http\\Controllers\\Profile\\ProfileController@index',
        'as' => 'dashboard.provider.profile.index',
        'namespace' => 'Modules\\DashboardProvider\\Http\\Controllers\\Profile',
        'prefix' => 'provider/dashboard/profiles',
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
    'dashboard.provider.profile.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'provider/dashboard/profiles/{service}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:provider',
        ),
        'uses' => 'Modules\\DashboardProvider\\Http\\Controllers\\Profile\\ProfileController@store',
        'controller' => 'Modules\\DashboardProvider\\Http\\Controllers\\Profile\\ProfileController@store',
        'as' => 'dashboard.provider.profile.store',
        'namespace' => 'Modules\\DashboardProvider\\Http\\Controllers\\Profile',
        'prefix' => 'provider/dashboard/profiles',
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
    'dashboard.provider.profile.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'provider/dashboard/profiles/create/{service}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:provider',
        ),
        'uses' => 'Modules\\DashboardProvider\\Http\\Controllers\\Profile\\ProfileController@create',
        'controller' => 'Modules\\DashboardProvider\\Http\\Controllers\\Profile\\ProfileController@create',
        'as' => 'dashboard.provider.profile.create',
        'namespace' => 'Modules\\DashboardProvider\\Http\\Controllers\\Profile',
        'prefix' => 'provider/dashboard/profiles',
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
    'dashboard.provider.profile.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'provider/dashboard/profiles/{profile}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:provider',
        ),
        'uses' => 'Modules\\DashboardProvider\\Http\\Controllers\\Profile\\ProfileController@update',
        'controller' => 'Modules\\DashboardProvider\\Http\\Controllers\\Profile\\ProfileController@update',
        'as' => 'dashboard.provider.profile.update',
        'namespace' => 'Modules\\DashboardProvider\\Http\\Controllers\\Profile',
        'prefix' => 'provider/dashboard/profiles',
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
    'dashboard.provider.profile.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'provider/dashboard/profiles/{profile}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:provider',
        ),
        'uses' => 'Modules\\DashboardProvider\\Http\\Controllers\\Profile\\ProfileController@edit',
        'controller' => 'Modules\\DashboardProvider\\Http\\Controllers\\Profile\\ProfileController@edit',
        'as' => 'dashboard.provider.profile.edit',
        'namespace' => 'Modules\\DashboardProvider\\Http\\Controllers\\Profile',
        'prefix' => 'provider/dashboard/profiles',
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
    'dashboard.provider.profile.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'provider/dashboard/profiles/{profile}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:provider',
        ),
        'uses' => 'Modules\\DashboardProvider\\Http\\Controllers\\Profile\\ProfileController@destroy',
        'controller' => 'Modules\\DashboardProvider\\Http\\Controllers\\Profile\\ProfileController@destroy',
        'as' => 'dashboard.provider.profile.destroy',
        'namespace' => 'Modules\\DashboardProvider\\Http\\Controllers\\Profile',
        'prefix' => 'provider/dashboard/profiles',
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
    'dashboard.provider.package.destroy.many' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'provider/dashboard/package/delete-many',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:provider',
        ),
        'uses' => 'Modules\\DashboardProvider\\Http\\Controllers\\Package\\PackageController@destroyMany',
        'controller' => 'Modules\\DashboardProvider\\Http\\Controllers\\Package\\PackageController@destroyMany',
        'as' => 'dashboard.provider.package.destroy.many',
        'namespace' => 'Modules\\DashboardProvider\\Http\\Controllers\\Package',
        'prefix' => 'provider/dashboard/package',
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
    'dashboard.provider.package.datatable' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'provider/dashboard/package/ajax/datatable',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:provider',
        ),
        'uses' => 'Modules\\DashboardProvider\\Http\\Controllers\\Package\\PackageDatatableController@__invoke',
        'controller' => 'Modules\\DashboardProvider\\Http\\Controllers\\Package\\PackageDatatableController',
        'as' => 'dashboard.provider.package.datatable',
        'namespace' => 'Modules\\DashboardProvider\\Http\\Controllers\\Package',
        'prefix' => 'provider/dashboard/package',
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
    'dashboard.provider.package.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'provider/dashboard/package',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:provider',
        ),
        'uses' => 'Modules\\DashboardProvider\\Http\\Controllers\\Package\\PackageController@index',
        'controller' => 'Modules\\DashboardProvider\\Http\\Controllers\\Package\\PackageController@index',
        'as' => 'dashboard.provider.package.index',
        'namespace' => 'Modules\\DashboardProvider\\Http\\Controllers\\Package',
        'prefix' => 'provider/dashboard/package',
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
    'dashboard.provider.package.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'provider/dashboard/package',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:provider',
        ),
        'uses' => 'Modules\\DashboardProvider\\Http\\Controllers\\Package\\PackageController@store',
        'controller' => 'Modules\\DashboardProvider\\Http\\Controllers\\Package\\PackageController@store',
        'as' => 'dashboard.provider.package.store',
        'namespace' => 'Modules\\DashboardProvider\\Http\\Controllers\\Package',
        'prefix' => 'provider/dashboard/package',
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
    'dashboard.provider.package.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'provider/dashboard/package/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:provider',
        ),
        'uses' => 'Modules\\DashboardProvider\\Http\\Controllers\\Package\\PackageController@create',
        'controller' => 'Modules\\DashboardProvider\\Http\\Controllers\\Package\\PackageController@create',
        'as' => 'dashboard.provider.package.create',
        'namespace' => 'Modules\\DashboardProvider\\Http\\Controllers\\Package',
        'prefix' => 'provider/dashboard/package',
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
    'dashboard.provider.package.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'provider/dashboard/package/{package}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:provider',
        ),
        'uses' => 'Modules\\DashboardProvider\\Http\\Controllers\\Package\\PackageController@update',
        'controller' => 'Modules\\DashboardProvider\\Http\\Controllers\\Package\\PackageController@update',
        'as' => 'dashboard.provider.package.update',
        'namespace' => 'Modules\\DashboardProvider\\Http\\Controllers\\Package',
        'prefix' => 'provider/dashboard/package',
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
    'dashboard.provider.package.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'provider/dashboard/package/{package}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:provider',
        ),
        'uses' => 'Modules\\DashboardProvider\\Http\\Controllers\\Package\\PackageController@edit',
        'controller' => 'Modules\\DashboardProvider\\Http\\Controllers\\Package\\PackageController@edit',
        'as' => 'dashboard.provider.package.edit',
        'namespace' => 'Modules\\DashboardProvider\\Http\\Controllers\\Package',
        'prefix' => 'provider/dashboard/package',
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
    'dashboard.provider.package.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'provider/dashboard/package/{package}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:provider',
        ),
        'uses' => 'Modules\\DashboardProvider\\Http\\Controllers\\Package\\PackageController@destroy',
        'controller' => 'Modules\\DashboardProvider\\Http\\Controllers\\Package\\PackageController@destroy',
        'as' => 'dashboard.provider.package.destroy',
        'namespace' => 'Modules\\DashboardProvider\\Http\\Controllers\\Package',
        'prefix' => 'provider/dashboard/package',
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
    'dashboard.provider.gallary.destroy.many' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'provider/dashboard/gallary/delete-many',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:provider',
        ),
        'uses' => 'Modules\\DashboardProvider\\Http\\Controllers\\Profile\\Gallary\\GallaryController@destroyMany',
        'controller' => 'Modules\\DashboardProvider\\Http\\Controllers\\Profile\\Gallary\\GallaryController@destroyMany',
        'as' => 'dashboard.provider.gallary.destroy.many',
        'namespace' => 'Modules\\DashboardProvider\\Http\\Controllers\\Gallary',
        'prefix' => 'provider/dashboard/gallary',
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
    'dashboard.provider.gallary.datatable' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'provider/dashboard/gallary/ajax/datatable',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:provider',
        ),
        'uses' => 'Modules\\DashboardProvider\\Http\\Controllers\\Gallary\\GallaryDatatableController@__invoke',
        'controller' => 'Modules\\DashboardProvider\\Http\\Controllers\\Gallary\\GallaryDatatableController',
        'as' => 'dashboard.provider.gallary.datatable',
        'namespace' => 'Modules\\DashboardProvider\\Http\\Controllers\\Gallary',
        'prefix' => 'provider/dashboard/gallary',
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
    'dashboard.provider.gallary.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'provider/dashboard/gallary',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:provider',
        ),
        'uses' => 'Modules\\DashboardProvider\\Http\\Controllers\\Profile\\Gallary\\GallaryController@index',
        'controller' => 'Modules\\DashboardProvider\\Http\\Controllers\\Profile\\Gallary\\GallaryController@index',
        'as' => 'dashboard.provider.gallary.index',
        'namespace' => 'Modules\\DashboardProvider\\Http\\Controllers\\Gallary',
        'prefix' => 'provider/dashboard/gallary',
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
    'dashboard.provider.gallary.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'provider/dashboard/gallary',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:provider',
        ),
        'uses' => 'Modules\\DashboardProvider\\Http\\Controllers\\Profile\\Gallary\\GallaryController@store',
        'controller' => 'Modules\\DashboardProvider\\Http\\Controllers\\Profile\\Gallary\\GallaryController@store',
        'as' => 'dashboard.provider.gallary.store',
        'namespace' => 'Modules\\DashboardProvider\\Http\\Controllers\\Gallary',
        'prefix' => 'provider/dashboard/gallary',
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
    'dashboard.provider.gallary.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'provider/dashboard/gallary/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:provider',
        ),
        'uses' => 'Modules\\DashboardProvider\\Http\\Controllers\\Profile\\Gallary\\GallaryController@create',
        'controller' => 'Modules\\DashboardProvider\\Http\\Controllers\\Profile\\Gallary\\GallaryController@create',
        'as' => 'dashboard.provider.gallary.create',
        'namespace' => 'Modules\\DashboardProvider\\Http\\Controllers\\Gallary',
        'prefix' => 'provider/dashboard/gallary',
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
    'dashboard.provider.gallary.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'provider/dashboard/gallary/{gallary}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:provider',
        ),
        'uses' => 'Modules\\DashboardProvider\\Http\\Controllers\\Profile\\Gallary\\GallaryController@destroy',
        'controller' => 'Modules\\DashboardProvider\\Http\\Controllers\\Profile\\Gallary\\GallaryController@destroy',
        'as' => 'dashboard.provider.gallary.destroy',
        'namespace' => 'Modules\\DashboardProvider\\Http\\Controllers\\Gallary',
        'prefix' => 'provider/dashboard/gallary',
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
    'generated::oeE37ywitfX0y8e7' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/package',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:295:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:77:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000003ae46e1d0000000064a1cd07";}";s:4:"hash";s:44:"W985v2EF/yXcSiv+aDRssf1JHzUU4ZFZPh+vQCk6qSc=";}}',
        'namespace' => 'Modules\\Package\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::oeE37ywitfX0y8e7',
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
    'package.destroy.many' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/package/delete-many',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
          2 => 'can:package.actions.delete',
        ),
        'uses' => 'Modules\\Package\\Http\\Controllers\\PackageController@destroyMany',
        'controller' => 'Modules\\Package\\Http\\Controllers\\PackageController@destroyMany',
        'as' => 'package.destroy.many',
        'namespace' => 'Modules\\Package\\Http\\Controllers',
        'prefix' => 'dashboard/package',
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
    'package.datatable' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/package/ajax/datatable',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
          2 => 'can:package.actions.view',
        ),
        'uses' => 'Modules\\Package\\Http\\Controllers\\PackageDatatableController@__invoke',
        'controller' => 'Modules\\Package\\Http\\Controllers\\PackageDatatableController',
        'as' => 'package.datatable',
        'namespace' => 'Modules\\Package\\Http\\Controllers',
        'prefix' => 'dashboard/package',
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
    'package.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/package',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
          2 => 'can:package.actions.view',
        ),
        'uses' => 'Modules\\Package\\Http\\Controllers\\PackageController@index',
        'controller' => 'Modules\\Package\\Http\\Controllers\\PackageController@index',
        'as' => 'package.index',
        'namespace' => 'Modules\\Package\\Http\\Controllers',
        'prefix' => 'dashboard/package',
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
    'package.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/package',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
          2 => 'can:package.actions.add',
        ),
        'uses' => 'Modules\\Package\\Http\\Controllers\\PackageController@store',
        'controller' => 'Modules\\Package\\Http\\Controllers\\PackageController@store',
        'as' => 'package.store',
        'namespace' => 'Modules\\Package\\Http\\Controllers',
        'prefix' => 'dashboard/package',
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
    'package.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/package/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
          2 => 'can:package.actions.add',
        ),
        'uses' => 'Modules\\Package\\Http\\Controllers\\PackageController@create',
        'controller' => 'Modules\\Package\\Http\\Controllers\\PackageController@create',
        'as' => 'package.create',
        'namespace' => 'Modules\\Package\\Http\\Controllers',
        'prefix' => 'dashboard/package',
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
    'package.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'dashboard/package/{package}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
          2 => 'can:package.actions.edit',
        ),
        'uses' => 'Modules\\Package\\Http\\Controllers\\PackageController@update',
        'controller' => 'Modules\\Package\\Http\\Controllers\\PackageController@update',
        'as' => 'package.update',
        'namespace' => 'Modules\\Package\\Http\\Controllers',
        'prefix' => 'dashboard/package',
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
    'package.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/package/{package}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
          2 => 'can:package.actions.edit',
        ),
        'uses' => 'Modules\\Package\\Http\\Controllers\\PackageController@edit',
        'controller' => 'Modules\\Package\\Http\\Controllers\\PackageController@edit',
        'as' => 'package.edit',
        'namespace' => 'Modules\\Package\\Http\\Controllers',
        'prefix' => 'dashboard/package',
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
    'package.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/package/{package}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
          2 => 'can:package.actions.delete',
        ),
        'uses' => 'Modules\\Package\\Http\\Controllers\\PackageController@destroy',
        'controller' => 'Modules\\Package\\Http\\Controllers\\PackageController@destroy',
        'as' => 'package.destroy',
        'namespace' => 'Modules\\Package\\Http\\Controllers',
        'prefix' => 'dashboard/package',
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
    'package.trashed.destroy.many' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/package/trashed/delete-many',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
          2 => 'can:package.actions.hard_delete',
        ),
        'uses' => 'Modules\\Package\\Http\\Controllers\\Trashed\\PackageTrashedController@destroyMany',
        'controller' => 'Modules\\Package\\Http\\Controllers\\Trashed\\PackageTrashedController@destroyMany',
        'as' => 'package.trashed.destroy.many',
        'namespace' => 'Modules\\Package\\Http\\Controllers\\Trashed',
        'prefix' => 'dashboard/package/trashed',
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
    'package.trashed.restore.many' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/package/trashed/restore-many',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
          2 => 'can:package.actions.restore',
        ),
        'uses' => 'Modules\\Package\\Http\\Controllers\\Trashed\\PackageTrashedController@restoreMany',
        'controller' => 'Modules\\Package\\Http\\Controllers\\Trashed\\PackageTrashedController@restoreMany',
        'as' => 'package.trashed.restore.many',
        'namespace' => 'Modules\\Package\\Http\\Controllers\\Trashed',
        'prefix' => 'dashboard/package/trashed',
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
    'package.trashed.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/package/trashed/{package}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
          2 => 'can:package.actions.hard_delete',
        ),
        'uses' => 'Modules\\Package\\Http\\Controllers\\Trashed\\PackageTrashedController@destroy',
        'controller' => 'Modules\\Package\\Http\\Controllers\\Trashed\\PackageTrashedController@destroy',
        'as' => 'package.trashed.destroy',
        'namespace' => 'Modules\\Package\\Http\\Controllers\\Trashed',
        'prefix' => 'dashboard/package/trashed',
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
    'package.trashed.restore' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/package/trashed/{package}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
          2 => 'can:package.actions.restore',
        ),
        'uses' => 'Modules\\Package\\Http\\Controllers\\Trashed\\PackageTrashedController@restore',
        'controller' => 'Modules\\Package\\Http\\Controllers\\Trashed\\PackageTrashedController@restore',
        'as' => 'package.trashed.restore',
        'namespace' => 'Modules\\Package\\Http\\Controllers\\Trashed',
        'prefix' => 'dashboard/package/trashed',
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
    'package.trashed.datatable' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/package/trashed/ajax/datatable',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
          2 => 'can:package.actions.view_trash',
        ),
        'uses' => 'Modules\\Package\\Http\\Controllers\\Trashed\\PackageTrashedDataTableController@__invoke',
        'controller' => 'Modules\\Package\\Http\\Controllers\\Trashed\\PackageTrashedDataTableController',
        'as' => 'package.trashed.datatable',
        'namespace' => 'Modules\\Package\\Http\\Controllers\\Trashed',
        'prefix' => 'dashboard/package/trashed',
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
    'generated::fGREP0ArFQuZ2yFd' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/page',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:295:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:77:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000003ae46e690000000064a1cd07";}";s:4:"hash";s:44:"aHhNpYiNz+zoZMbU0TcyOdt5x5OcitkvSMNPYxQsDsA=";}}',
        'namespace' => 'Modules\\Page\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::fGREP0ArFQuZ2yFd',
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
    'page.destroy.many' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/page/delete-many',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
        ),
        'uses' => 'Modules\\Page\\Http\\Controllers\\PageController@destroyMany',
        'controller' => 'Modules\\Page\\Http\\Controllers\\PageController@destroyMany',
        'as' => 'page.destroy.many',
        'namespace' => 'Modules\\Page\\Http\\Controllers',
        'prefix' => 'dashboard/page',
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
    'page.datatable' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/page/ajax/datatable',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
        ),
        'uses' => 'Modules\\Page\\Http\\Controllers\\PageDatatableController@__invoke',
        'controller' => 'Modules\\Page\\Http\\Controllers\\PageDatatableController',
        'as' => 'page.datatable',
        'namespace' => 'Modules\\Page\\Http\\Controllers',
        'prefix' => 'dashboard/page',
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
    'page.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/page',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
        ),
        'uses' => 'Modules\\Page\\Http\\Controllers\\PageController@index',
        'controller' => 'Modules\\Page\\Http\\Controllers\\PageController@index',
        'as' => 'page.index',
        'namespace' => 'Modules\\Page\\Http\\Controllers',
        'prefix' => 'dashboard/page',
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
    'page.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/page',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
        ),
        'uses' => 'Modules\\Page\\Http\\Controllers\\PageController@store',
        'controller' => 'Modules\\Page\\Http\\Controllers\\PageController@store',
        'as' => 'page.store',
        'namespace' => 'Modules\\Page\\Http\\Controllers',
        'prefix' => 'dashboard/page',
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
    'page.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/page/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
        ),
        'uses' => 'Modules\\Page\\Http\\Controllers\\PageController@create',
        'controller' => 'Modules\\Page\\Http\\Controllers\\PageController@create',
        'as' => 'page.create',
        'namespace' => 'Modules\\Page\\Http\\Controllers',
        'prefix' => 'dashboard/page',
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
    'page.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'dashboard/page/{page}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
        ),
        'uses' => 'Modules\\Page\\Http\\Controllers\\PageController@update',
        'controller' => 'Modules\\Page\\Http\\Controllers\\PageController@update',
        'as' => 'page.update',
        'namespace' => 'Modules\\Page\\Http\\Controllers',
        'prefix' => 'dashboard/page',
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
    'page.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/page/{page}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
        ),
        'uses' => 'Modules\\Page\\Http\\Controllers\\PageController@edit',
        'controller' => 'Modules\\Page\\Http\\Controllers\\PageController@edit',
        'as' => 'page.edit',
        'namespace' => 'Modules\\Page\\Http\\Controllers',
        'prefix' => 'dashboard/page',
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
    'page.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/page/{page}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
        ),
        'uses' => 'Modules\\Page\\Http\\Controllers\\PageController@destroy',
        'controller' => 'Modules\\Page\\Http\\Controllers\\PageController@destroy',
        'as' => 'page.destroy',
        'namespace' => 'Modules\\Page\\Http\\Controllers',
        'prefix' => 'dashboard/page',
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
    'roles.destroy.many' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/roles/delete-many',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
          2 => 'can:role.actions.delete',
        ),
        'uses' => 'Modules\\Permission\\Http\\Controllers\\RoleController@destroyMany',
        'controller' => 'Modules\\Permission\\Http\\Controllers\\RoleController@destroyMany',
        'as' => 'roles.destroy.many',
        'namespace' => 'Modules\\Permission\\Http\\Controllers',
        'prefix' => 'dashboard/roles',
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
    'roles.datatable' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/roles/ajax/datatable',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
          2 => 'can:role.actions.view',
        ),
        'uses' => 'Modules\\Permission\\Http\\Controllers\\RoleDataTableController@__invoke',
        'controller' => 'Modules\\Permission\\Http\\Controllers\\RoleDataTableController',
        'as' => 'roles.datatable',
        'namespace' => 'Modules\\Permission\\Http\\Controllers',
        'prefix' => 'dashboard/roles',
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
    'roles.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/roles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
          2 => 'can:role.actions.view',
        ),
        'uses' => 'Modules\\Permission\\Http\\Controllers\\RoleController@index',
        'controller' => 'Modules\\Permission\\Http\\Controllers\\RoleController@index',
        'as' => 'roles.index',
        'namespace' => 'Modules\\Permission\\Http\\Controllers',
        'prefix' => 'dashboard/roles',
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
    'roles.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/roles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
          2 => 'can:role.actions.add',
        ),
        'uses' => 'Modules\\Permission\\Http\\Controllers\\RoleController@store',
        'controller' => 'Modules\\Permission\\Http\\Controllers\\RoleController@store',
        'as' => 'roles.store',
        'namespace' => 'Modules\\Permission\\Http\\Controllers',
        'prefix' => 'dashboard/roles',
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
    'roles.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/roles/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
          2 => 'can:role.actions.add',
        ),
        'uses' => 'Modules\\Permission\\Http\\Controllers\\RoleController@create',
        'controller' => 'Modules\\Permission\\Http\\Controllers\\RoleController@create',
        'as' => 'roles.create',
        'namespace' => 'Modules\\Permission\\Http\\Controllers',
        'prefix' => 'dashboard/roles',
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
    'roles.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'dashboard/roles/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
          2 => 'can:role.actions.edit',
        ),
        'uses' => 'Modules\\Permission\\Http\\Controllers\\RoleController@update',
        'controller' => 'Modules\\Permission\\Http\\Controllers\\RoleController@update',
        'as' => 'roles.update',
        'namespace' => 'Modules\\Permission\\Http\\Controllers',
        'prefix' => 'dashboard/roles',
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
    'roles.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/roles/{role}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
          2 => 'can:role.actions.edit',
        ),
        'uses' => 'Modules\\Permission\\Http\\Controllers\\RoleController@edit',
        'controller' => 'Modules\\Permission\\Http\\Controllers\\RoleController@edit',
        'as' => 'roles.edit',
        'namespace' => 'Modules\\Permission\\Http\\Controllers',
        'prefix' => 'dashboard/roles',
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
    'roles.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/roles/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
          2 => 'can:role.actions.delete',
        ),
        'uses' => 'Modules\\Permission\\Http\\Controllers\\RoleController@destroy',
        'controller' => 'Modules\\Permission\\Http\\Controllers\\RoleController@destroy',
        'as' => 'roles.destroy',
        'namespace' => 'Modules\\Permission\\Http\\Controllers',
        'prefix' => 'dashboard/roles',
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
    'generated::fucD9IZEOFmoytbs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/provider',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:295:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:77:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000003ae46e4d0000000064a1cd07";}";s:4:"hash";s:44:"XHtrieOhRRrVGbJiFcCrvz+rnoDG788SAitIWeVCBfc=";}}',
        'namespace' => 'Modules\\Provider\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::fucD9IZEOFmoytbs',
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
    'provider.login.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'provider/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest:provider',
        ),
        'uses' => 'Modules\\Provider\\Http\\Controllers\\Auth\\LoginController@show',
        'controller' => 'Modules\\Provider\\Http\\Controllers\\Auth\\LoginController@show',
        'as' => 'provider.login.show',
        'namespace' => 'Modules\\Provider\\Http\\Controllers',
        'prefix' => '/provider',
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
    'provider.login' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'provider/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest:provider',
        ),
        'uses' => 'Modules\\Provider\\Http\\Controllers\\Auth\\LoginController@login',
        'controller' => 'Modules\\Provider\\Http\\Controllers\\Auth\\LoginController@login',
        'as' => 'provider.login',
        'namespace' => 'Modules\\Provider\\Http\\Controllers',
        'prefix' => '/provider',
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
    'provider.logout' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'provider/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:provider',
        ),
        'uses' => 'Modules\\Provider\\Http\\Controllers\\Auth\\LoginController@logout',
        'controller' => 'Modules\\Provider\\Http\\Controllers\\Auth\\LoginController@logout',
        'as' => 'provider.logout',
        'namespace' => 'Modules\\Provider\\Http\\Controllers',
        'prefix' => '/provider',
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
    'provider.destroy.many' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/providers/delete-many',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
          2 => 'can:provider.actions.delete',
        ),
        'uses' => 'Modules\\Provider\\Http\\Controllers\\ProviderController@destroyMany',
        'controller' => 'Modules\\Provider\\Http\\Controllers\\ProviderController@destroyMany',
        'as' => 'provider.destroy.many',
        'namespace' => 'Modules\\Provider\\Http\\Controllers',
        'prefix' => 'dashboard/providers',
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
    'provider.datatable' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/providers/ajax/datatable',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
          2 => 'can:provider.actions.view',
        ),
        'uses' => 'Modules\\Provider\\Http\\Controllers\\ProviderDatatableController@__invoke',
        'controller' => 'Modules\\Provider\\Http\\Controllers\\ProviderDatatableController',
        'as' => 'provider.datatable',
        'namespace' => 'Modules\\Provider\\Http\\Controllers',
        'prefix' => 'dashboard/providers',
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
    'provider.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/providers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
          2 => 'can:provider.actions.view',
        ),
        'uses' => 'Modules\\Provider\\Http\\Controllers\\ProviderController@index',
        'controller' => 'Modules\\Provider\\Http\\Controllers\\ProviderController@index',
        'as' => 'provider.index',
        'namespace' => 'Modules\\Provider\\Http\\Controllers',
        'prefix' => 'dashboard/providers',
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
    'provider.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/providers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
          2 => 'can:provider.actions.add',
        ),
        'uses' => 'Modules\\Provider\\Http\\Controllers\\ProviderController@store',
        'controller' => 'Modules\\Provider\\Http\\Controllers\\ProviderController@store',
        'as' => 'provider.store',
        'namespace' => 'Modules\\Provider\\Http\\Controllers',
        'prefix' => 'dashboard/providers',
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
    'provider.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/providers/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
          2 => 'can:provider.actions.add',
        ),
        'uses' => 'Modules\\Provider\\Http\\Controllers\\ProviderController@create',
        'controller' => 'Modules\\Provider\\Http\\Controllers\\ProviderController@create',
        'as' => 'provider.create',
        'namespace' => 'Modules\\Provider\\Http\\Controllers',
        'prefix' => 'dashboard/providers',
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
    'provider.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'dashboard/providers/{provider}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
          2 => 'can:provider.actions.edit',
        ),
        'uses' => 'Modules\\Provider\\Http\\Controllers\\ProviderController@update',
        'controller' => 'Modules\\Provider\\Http\\Controllers\\ProviderController@update',
        'as' => 'provider.update',
        'namespace' => 'Modules\\Provider\\Http\\Controllers',
        'prefix' => 'dashboard/providers',
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
    'provider.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/providers/{provider}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
          2 => 'can:provider.actions.edit',
        ),
        'uses' => 'Modules\\Provider\\Http\\Controllers\\ProviderController@edit',
        'controller' => 'Modules\\Provider\\Http\\Controllers\\ProviderController@edit',
        'as' => 'provider.edit',
        'namespace' => 'Modules\\Provider\\Http\\Controllers',
        'prefix' => 'dashboard/providers',
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
    'provider.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/providers/{provider}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
          2 => 'can:provider.actions.delete',
        ),
        'uses' => 'Modules\\Provider\\Http\\Controllers\\ProviderController@destroy',
        'controller' => 'Modules\\Provider\\Http\\Controllers\\ProviderController@destroy',
        'as' => 'provider.destroy',
        'namespace' => 'Modules\\Provider\\Http\\Controllers',
        'prefix' => 'dashboard/providers',
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
    'provider.trashed.destroy.many' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/providers/trashed/delete-many',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
          2 => 'can:provider.actions.hard_delete',
        ),
        'uses' => 'Modules\\Provider\\Http\\Controllers\\Trashed\\ProviderTrashedController@destroyMany',
        'controller' => 'Modules\\Provider\\Http\\Controllers\\Trashed\\ProviderTrashedController@destroyMany',
        'as' => 'provider.trashed.destroy.many',
        'namespace' => 'Modules\\Provider\\Http\\Controllers\\Trashed',
        'prefix' => 'dashboard/providers/trashed',
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
    'provider.trashed.restore.many' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/providers/trashed/restore-many',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
          2 => 'can:provider.actions.restore',
        ),
        'uses' => 'Modules\\Provider\\Http\\Controllers\\Trashed\\ProviderTrashedController@restoreMany',
        'controller' => 'Modules\\Provider\\Http\\Controllers\\Trashed\\ProviderTrashedController@restoreMany',
        'as' => 'provider.trashed.restore.many',
        'namespace' => 'Modules\\Provider\\Http\\Controllers\\Trashed',
        'prefix' => 'dashboard/providers/trashed',
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
    'provider.trashed.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/providers/trashed/{provider}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
          2 => 'can:provider.actions.hard_delete',
        ),
        'uses' => 'Modules\\Provider\\Http\\Controllers\\Trashed\\ProviderTrashedController@destroy',
        'controller' => 'Modules\\Provider\\Http\\Controllers\\Trashed\\ProviderTrashedController@destroy',
        'as' => 'provider.trashed.destroy',
        'namespace' => 'Modules\\Provider\\Http\\Controllers\\Trashed',
        'prefix' => 'dashboard/providers/trashed',
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
    'provider.trashed.restore' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/providers/trashed/{provider}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
          2 => 'can:provider.actions.restore',
        ),
        'uses' => 'Modules\\Provider\\Http\\Controllers\\Trashed\\ProviderTrashedController@restore',
        'controller' => 'Modules\\Provider\\Http\\Controllers\\Trashed\\ProviderTrashedController@restore',
        'as' => 'provider.trashed.restore',
        'namespace' => 'Modules\\Provider\\Http\\Controllers\\Trashed',
        'prefix' => 'dashboard/providers/trashed',
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
    'provider.trashed.datatable' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/providers/trashed/ajax/datatable',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
          2 => 'can:provider.actions.view_trash',
        ),
        'uses' => 'Modules\\Provider\\Http\\Controllers\\Trashed\\ProviderTrashedDataTableController@__invoke',
        'controller' => 'Modules\\Provider\\Http\\Controllers\\Trashed\\ProviderTrashedDataTableController',
        'as' => 'provider.trashed.datatable',
        'namespace' => 'Modules\\Provider\\Http\\Controllers\\Trashed',
        'prefix' => 'dashboard/providers/trashed',
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
    'provider.dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'provider/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:provider',
        ),
        'uses' => '\\Illuminate\\Routing\\ViewController@__invoke',
        'controller' => '\\Illuminate\\Routing\\ViewController',
        'namespace' => 'Modules\\Provider\\Http\\Controllers',
        'prefix' => '/provider/dashboard',
        'where' => 
        array (
        ),
        'as' => 'provider.dashboard',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'view' => 'provider::front.dashboard',
        'data' => 
        array (
        ),
        'status' => 200,
        'headers' => 
        array (
        ),
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
    'generated::Fwe3oNC3stHHhgCU' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/service',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:295:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:77:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000003ae46e550000000064a1cd07";}";s:4:"hash";s:44:"CZ5HipcSIPmShIh2xJ/Mvh8AiK6CVqTqutEDchBHpJI=";}}',
        'namespace' => 'Modules\\Service\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::Fwe3oNC3stHHhgCU',
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
    'service.destroy.many' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/service/delete-many',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
          2 => 'can:service.actions.delete',
        ),
        'uses' => 'Modules\\Service\\Http\\Controllers\\ServiceController@destroyMany',
        'controller' => 'Modules\\Service\\Http\\Controllers\\ServiceController@destroyMany',
        'as' => 'service.destroy.many',
        'namespace' => 'Modules\\Service\\Http\\Controllers',
        'prefix' => 'dashboard/service',
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
    'service.datatable' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/service/ajax/datatable',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
          2 => 'can:service.actions.view',
        ),
        'uses' => 'Modules\\Service\\Http\\Controllers\\ServiceDatatableController@__invoke',
        'controller' => 'Modules\\Service\\Http\\Controllers\\ServiceDatatableController',
        'as' => 'service.datatable',
        'namespace' => 'Modules\\Service\\Http\\Controllers',
        'prefix' => 'dashboard/service',
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
    'service.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/service',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
          2 => 'can:service.actions.view',
        ),
        'uses' => 'Modules\\Service\\Http\\Controllers\\ServiceController@index',
        'controller' => 'Modules\\Service\\Http\\Controllers\\ServiceController@index',
        'as' => 'service.index',
        'namespace' => 'Modules\\Service\\Http\\Controllers',
        'prefix' => 'dashboard/service',
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
    'service.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/service',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
          2 => 'can:service.actions.add',
        ),
        'uses' => 'Modules\\Service\\Http\\Controllers\\ServiceController@store',
        'controller' => 'Modules\\Service\\Http\\Controllers\\ServiceController@store',
        'as' => 'service.store',
        'namespace' => 'Modules\\Service\\Http\\Controllers',
        'prefix' => 'dashboard/service',
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
    'service.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/service/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
          2 => 'can:service.actions.add',
        ),
        'uses' => 'Modules\\Service\\Http\\Controllers\\ServiceController@create',
        'controller' => 'Modules\\Service\\Http\\Controllers\\ServiceController@create',
        'as' => 'service.create',
        'namespace' => 'Modules\\Service\\Http\\Controllers',
        'prefix' => 'dashboard/service',
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
    'service.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'dashboard/service/{service}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
          2 => 'can:service.actions.edit',
        ),
        'uses' => 'Modules\\Service\\Http\\Controllers\\ServiceController@update',
        'controller' => 'Modules\\Service\\Http\\Controllers\\ServiceController@update',
        'as' => 'service.update',
        'namespace' => 'Modules\\Service\\Http\\Controllers',
        'prefix' => 'dashboard/service',
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
    'service.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/service/{service}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
          2 => 'can:service.actions.edit',
        ),
        'uses' => 'Modules\\Service\\Http\\Controllers\\ServiceController@edit',
        'controller' => 'Modules\\Service\\Http\\Controllers\\ServiceController@edit',
        'as' => 'service.edit',
        'namespace' => 'Modules\\Service\\Http\\Controllers',
        'prefix' => 'dashboard/service',
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
    'service.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/service/{service}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
          2 => 'can:service.actions.delete',
        ),
        'uses' => 'Modules\\Service\\Http\\Controllers\\ServiceController@destroy',
        'controller' => 'Modules\\Service\\Http\\Controllers\\ServiceController@destroy',
        'as' => 'service.destroy',
        'namespace' => 'Modules\\Service\\Http\\Controllers',
        'prefix' => 'dashboard/service',
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
    'service.trashed.destroy.many' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/service/trashed/delete-many',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
          2 => 'can:service.actions.hard_delete',
        ),
        'uses' => 'Modules\\Service\\Http\\Controllers\\Trashed\\ServiceTrashedController@destroyMany',
        'controller' => 'Modules\\Service\\Http\\Controllers\\Trashed\\ServiceTrashedController@destroyMany',
        'as' => 'service.trashed.destroy.many',
        'namespace' => 'Modules\\Service\\Http\\Controllers\\Trashed',
        'prefix' => 'dashboard/service/trashed',
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
    'service.trashed.restore.many' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/service/trashed/restore-many',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
          2 => 'can:service.actions.restore',
        ),
        'uses' => 'Modules\\Service\\Http\\Controllers\\Trashed\\ServiceTrashedController@restoreMany',
        'controller' => 'Modules\\Service\\Http\\Controllers\\Trashed\\ServiceTrashedController@restoreMany',
        'as' => 'service.trashed.restore.many',
        'namespace' => 'Modules\\Service\\Http\\Controllers\\Trashed',
        'prefix' => 'dashboard/service/trashed',
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
    'service.trashed.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/service/trashed/{service}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
          2 => 'can:service.actions.hard_delete',
        ),
        'uses' => 'Modules\\Service\\Http\\Controllers\\Trashed\\ServiceTrashedController@destroy',
        'controller' => 'Modules\\Service\\Http\\Controllers\\Trashed\\ServiceTrashedController@destroy',
        'as' => 'service.trashed.destroy',
        'namespace' => 'Modules\\Service\\Http\\Controllers\\Trashed',
        'prefix' => 'dashboard/service/trashed',
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
    'service.trashed.restore' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/service/trashed/{service}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
          2 => 'can:service.actions.restore',
        ),
        'uses' => 'Modules\\Service\\Http\\Controllers\\Trashed\\ServiceTrashedController@restore',
        'controller' => 'Modules\\Service\\Http\\Controllers\\Trashed\\ServiceTrashedController@restore',
        'as' => 'service.trashed.restore',
        'namespace' => 'Modules\\Service\\Http\\Controllers\\Trashed',
        'prefix' => 'dashboard/service/trashed',
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
    'service.trashed.datatable' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/service/trashed/ajax/datatable',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
          2 => 'can:service.actions.view_trash',
        ),
        'uses' => 'Modules\\Service\\Http\\Controllers\\Trashed\\ServiceTrashedDataTableController@__invoke',
        'controller' => 'Modules\\Service\\Http\\Controllers\\Trashed\\ServiceTrashedDataTableController',
        'as' => 'service.trashed.datatable',
        'namespace' => 'Modules\\Service\\Http\\Controllers\\Trashed',
        'prefix' => 'dashboard/service/trashed',
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
    'generated::ykWFcgsNdziYiI1L' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/subscription',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:295:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:77:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000003ae46ea10000000064a1cd07";}";s:4:"hash";s:44:"ZhU3zyK5jPHS6X3fAwt15Dq+N/A9wmjMbqEylLnKBg0=";}}',
        'namespace' => 'Modules\\Subscription\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::ykWFcgsNdziYiI1L',
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
    'subscription.destroy.many' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/subscription/delete-many',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
          2 => 'can:subscription.actions.delete',
        ),
        'uses' => 'Modules\\Subscription\\Http\\Controllers\\SubscriptionController@destroyMany',
        'controller' => 'Modules\\Subscription\\Http\\Controllers\\SubscriptionController@destroyMany',
        'as' => 'subscription.destroy.many',
        'namespace' => 'Modules\\Subscription\\Http\\Controllers',
        'prefix' => 'dashboard/subscription',
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
    'subscription.datatable' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/subscription/ajax/datatable',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
          2 => 'can:subscription.actions.view',
        ),
        'uses' => 'Modules\\Subscription\\Http\\Controllers\\SubscriptionDatatableController@__invoke',
        'controller' => 'Modules\\Subscription\\Http\\Controllers\\SubscriptionDatatableController',
        'as' => 'subscription.datatable',
        'namespace' => 'Modules\\Subscription\\Http\\Controllers',
        'prefix' => 'dashboard/subscription',
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
    'subscription.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/subscription',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
          2 => 'can:subscription.actions.view',
        ),
        'uses' => 'Modules\\Subscription\\Http\\Controllers\\SubscriptionController@index',
        'controller' => 'Modules\\Subscription\\Http\\Controllers\\SubscriptionController@index',
        'as' => 'subscription.index',
        'namespace' => 'Modules\\Subscription\\Http\\Controllers',
        'prefix' => 'dashboard/subscription',
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
    'subscription.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/subscription',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
          2 => 'can:subscription.actions.add',
        ),
        'uses' => 'Modules\\Subscription\\Http\\Controllers\\SubscriptionController@store',
        'controller' => 'Modules\\Subscription\\Http\\Controllers\\SubscriptionController@store',
        'as' => 'subscription.store',
        'namespace' => 'Modules\\Subscription\\Http\\Controllers',
        'prefix' => 'dashboard/subscription',
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
    'subscription.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/subscription/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
          2 => 'can:subscription.actions.add',
        ),
        'uses' => 'Modules\\Subscription\\Http\\Controllers\\SubscriptionController@create',
        'controller' => 'Modules\\Subscription\\Http\\Controllers\\SubscriptionController@create',
        'as' => 'subscription.create',
        'namespace' => 'Modules\\Subscription\\Http\\Controllers',
        'prefix' => 'dashboard/subscription',
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
    'subscription.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'dashboard/subscription/{subscription}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
          2 => 'can:subscription.actions.edit',
        ),
        'uses' => 'Modules\\Subscription\\Http\\Controllers\\SubscriptionController@update',
        'controller' => 'Modules\\Subscription\\Http\\Controllers\\SubscriptionController@update',
        'as' => 'subscription.update',
        'namespace' => 'Modules\\Subscription\\Http\\Controllers',
        'prefix' => 'dashboard/subscription',
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
    'subscription.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/subscription/{subscription}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
          2 => 'can:subscription.actions.edit',
        ),
        'uses' => 'Modules\\Subscription\\Http\\Controllers\\SubscriptionController@edit',
        'controller' => 'Modules\\Subscription\\Http\\Controllers\\SubscriptionController@edit',
        'as' => 'subscription.edit',
        'namespace' => 'Modules\\Subscription\\Http\\Controllers',
        'prefix' => 'dashboard/subscription',
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
    'subscription.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/subscription/{subscription}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
          2 => 'can:subscription.actions.delete',
        ),
        'uses' => 'Modules\\Subscription\\Http\\Controllers\\SubscriptionController@destroy',
        'controller' => 'Modules\\Subscription\\Http\\Controllers\\SubscriptionController@destroy',
        'as' => 'subscription.destroy',
        'namespace' => 'Modules\\Subscription\\Http\\Controllers',
        'prefix' => 'dashboard/subscription',
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
    'user.login.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest:dashboard',
        ),
        'uses' => 'Modules\\User\\Http\\Controllers\\Auth\\LoginController@show',
        'controller' => 'Modules\\User\\Http\\Controllers\\Auth\\LoginController@show',
        'as' => 'user.login.show',
        'namespace' => 'Modules\\User\\Http\\Controllers',
        'prefix' => '/user',
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
    'user.login' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest:dashboard',
        ),
        'uses' => 'Modules\\User\\Http\\Controllers\\Auth\\LoginController@login',
        'controller' => 'Modules\\User\\Http\\Controllers\\Auth\\LoginController@login',
        'as' => 'user.login',
        'namespace' => 'Modules\\User\\Http\\Controllers',
        'prefix' => '/user',
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
    'user.logout' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
        ),
        'uses' => 'Modules\\User\\Http\\Controllers\\Auth\\LoginController@logout',
        'controller' => 'Modules\\User\\Http\\Controllers\\Auth\\LoginController@logout',
        'as' => 'user.logout',
        'namespace' => 'Modules\\User\\Http\\Controllers',
        'prefix' => '/user',
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
    'dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
        ),
        'uses' => '\\Illuminate\\Routing\\ViewController@__invoke',
        'controller' => '\\Illuminate\\Routing\\ViewController',
        'namespace' => 'Modules\\User\\Http\\Controllers',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
        'as' => 'dashboard',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'view' => 'user::dashboard.dashboard',
        'data' => 
        array (
        ),
        'status' => 200,
        'headers' => 
        array (
        ),
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
    'users.destroy.many' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/users/delete-many',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
        ),
        'uses' => 'Modules\\User\\Http\\Controllers\\UserController@destroyMany',
        'controller' => 'Modules\\User\\Http\\Controllers\\UserController@destroyMany',
        'as' => 'users.destroy.many',
        'namespace' => 'Modules\\User\\Http\\Controllers',
        'prefix' => 'dashboard/users',
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
    'users.datatable' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/users/ajax/datatable',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
        ),
        'uses' => 'Modules\\User\\Http\\Controllers\\UserDatatableController@__invoke',
        'controller' => 'Modules\\User\\Http\\Controllers\\UserDatatableController',
        'as' => 'users.datatable',
        'namespace' => 'Modules\\User\\Http\\Controllers',
        'prefix' => 'dashboard/users',
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
    'users.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
        ),
        'uses' => 'Modules\\User\\Http\\Controllers\\UserController@index',
        'controller' => 'Modules\\User\\Http\\Controllers\\UserController@index',
        'as' => 'users.index',
        'namespace' => 'Modules\\User\\Http\\Controllers',
        'prefix' => 'dashboard/users',
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
    'users.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
        ),
        'uses' => 'Modules\\User\\Http\\Controllers\\UserController@store',
        'controller' => 'Modules\\User\\Http\\Controllers\\UserController@store',
        'as' => 'users.store',
        'namespace' => 'Modules\\User\\Http\\Controllers',
        'prefix' => 'dashboard/users',
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
    'users.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/users/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
        ),
        'uses' => 'Modules\\User\\Http\\Controllers\\UserController@create',
        'controller' => 'Modules\\User\\Http\\Controllers\\UserController@create',
        'as' => 'users.create',
        'namespace' => 'Modules\\User\\Http\\Controllers',
        'prefix' => 'dashboard/users',
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
    'users.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'dashboard/users/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
        ),
        'uses' => 'Modules\\User\\Http\\Controllers\\UserController@update',
        'controller' => 'Modules\\User\\Http\\Controllers\\UserController@update',
        'as' => 'users.update',
        'namespace' => 'Modules\\User\\Http\\Controllers',
        'prefix' => 'dashboard/users',
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
    'users.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/users/{user}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
        ),
        'uses' => 'Modules\\User\\Http\\Controllers\\UserController@edit',
        'controller' => 'Modules\\User\\Http\\Controllers\\UserController@edit',
        'as' => 'users.edit',
        'namespace' => 'Modules\\User\\Http\\Controllers',
        'prefix' => 'dashboard/users',
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
    'users.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/users/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
        ),
        'uses' => 'Modules\\User\\Http\\Controllers\\UserController@destroy',
        'controller' => 'Modules\\User\\Http\\Controllers\\UserController@destroy',
        'as' => 'users.destroy',
        'namespace' => 'Modules\\User\\Http\\Controllers',
        'prefix' => 'dashboard/users',
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
    'users.trashed.destroy.many' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/users/trashed/delete-many',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
        ),
        'uses' => 'Modules\\User\\Http\\Controllers\\Trashed\\UserTrashedController@destroyMany',
        'controller' => 'Modules\\User\\Http\\Controllers\\Trashed\\UserTrashedController@destroyMany',
        'as' => 'users.trashed.destroy.many',
        'namespace' => 'Modules\\User\\Http\\Controllers\\Trashed',
        'prefix' => 'dashboard/users/trashed',
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
    'users.trashed.restore.many' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/users/trashed/restore-many',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
        ),
        'uses' => 'Modules\\User\\Http\\Controllers\\Trashed\\UserTrashedController@restoreMany',
        'controller' => 'Modules\\User\\Http\\Controllers\\Trashed\\UserTrashedController@restoreMany',
        'as' => 'users.trashed.restore.many',
        'namespace' => 'Modules\\User\\Http\\Controllers\\Trashed',
        'prefix' => 'dashboard/users/trashed',
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
    'users.trashed.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/users/trashed/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
        ),
        'uses' => 'Modules\\User\\Http\\Controllers\\Trashed\\UserTrashedController@destroy',
        'controller' => 'Modules\\User\\Http\\Controllers\\Trashed\\UserTrashedController@destroy',
        'as' => 'users.trashed.destroy',
        'namespace' => 'Modules\\User\\Http\\Controllers\\Trashed',
        'prefix' => 'dashboard/users/trashed',
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
    'users.trashed.restore' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/users/trashed/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
        ),
        'uses' => 'Modules\\User\\Http\\Controllers\\Trashed\\UserTrashedController@restore',
        'controller' => 'Modules\\User\\Http\\Controllers\\Trashed\\UserTrashedController@restore',
        'as' => 'users.trashed.restore',
        'namespace' => 'Modules\\User\\Http\\Controllers\\Trashed',
        'prefix' => 'dashboard/users/trashed',
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
    'users.trashed.datatable' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/users/trashed/ajax/datatable',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
        ),
        'uses' => 'Modules\\User\\Http\\Controllers\\Trashed\\UserTrashedDataTableController@__invoke',
        'controller' => 'Modules\\User\\Http\\Controllers\\Trashed\\UserTrashedDataTableController',
        'as' => 'users.trashed.datatable',
        'namespace' => 'Modules\\User\\Http\\Controllers\\Trashed',
        'prefix' => 'dashboard/users/trashed',
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
    'generated::bue4iPbU5EB0k9if' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
        3 => 'PUT',
        4 => 'PATCH',
        5 => 'DELETE',
        6 => 'OPTIONS',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => '\\Illuminate\\Routing\\RedirectController@__invoke',
        'controller' => '\\Illuminate\\Routing\\RedirectController',
        'namespace' => 'Modules\\User\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::bue4iPbU5EB0k9if',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'destination' => '/user/login',
        'status' => 301,
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
