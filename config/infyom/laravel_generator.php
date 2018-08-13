<?php

$prefix = 'admin';
$moduleName = 'Prueba';

$module = (empty($moduleName) ? '' : 'Modules/'.$moduleName.'/');
$moduleNamespace = (empty($moduleName) ? 'App' : 'Modules\\'.$moduleName);

return [

    /*
    |--------------------------------------------------------------------------
    | Paths
    |--------------------------------------------------------------------------
    |
    */

    'path' => [

        'migration'         => base_path($module.'database/migrations/'),

        'model'             => base_path($module.'Models/'),

        'datatables'        => app_path('DataTables/'),

        'repository'        => base_path($module.'Repositories/'),

        'routes'            => base_path($module.'routes/'.(empty($prefix) ? 'web' : strtolower($prefix)).'.php'),

        'api_routes'        => base_path($module.'routes/api.php'),

        'request'           => base_path($module.'Http/Requests/'),

        'api_request'       => base_path($module.'Http/Requests/Api/'),

        'controller'        => base_path($module.'Http/Controllers/'.(empty($prefix) ? '' : ucfirst($prefix).'/') ),

        'api_controller'    => base_path($module.'Http/Controllers/Api/'),

        'test_trait'        => base_path('tests/traits/'),

        'repository_test'   => base_path('tests/'),

        'api_test'          => base_path('tests/'),

        'views'             => base_path($module.'resources/views/'),

        'schema_files'      => base_path($module.'resources/schemas/'),

        'templates_dir'     => base_path('resources/stubs/infyom-generator-templates/'),

        'modelJs'           => base_path('resources/assets/js/models/'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Namespaces
    |--------------------------------------------------------------------------
    |
    */

    'namespace' => [

        'model'             => $moduleNamespace.'\Models', //'App\Models',

        'datatables'        => $moduleNamespace.'\DataTables', //'App\DataTables',

        'repository'        => $moduleNamespace.'\Repositories', //'App\Repositories',

        'controller'        => $moduleNamespace.'\Http\Controllers'.(empty($prefix) ? '' : '\\'.ucfirst($prefix)), //'App\Http\Controllers',

        'api_controller'    => $moduleNamespace.'\Http\Controllers\Api', //'App\Http\Controllers\Api',

        'request'           => $moduleNamespace.'\Http\Requests', //'App\Http\Requests',

        'api_request'       => $moduleNamespace.'\Http\Requests\Api', //'App\Http\Requests\API',
    ],

    /*
    |--------------------------------------------------------------------------
    | Templates
    |--------------------------------------------------------------------------
    |
    */

    'templates'         => 'adminlte-templates',

    /*
    |--------------------------------------------------------------------------
    | Model extend class
    |--------------------------------------------------------------------------
    |
    */

    'model_extend_class' => 'Eloquent',

    /*
    |--------------------------------------------------------------------------
    | API routes prefix & version
    |--------------------------------------------------------------------------
    |
    */

    'api_prefix'  => 'api',

    'api_version' => '',

    /*
    |--------------------------------------------------------------------------
    | Options
    |--------------------------------------------------------------------------
    |
    */

    'options' => [

        'softDelete' => true,

        'tables_searchable_default' => false,
    ],

    /*
    |--------------------------------------------------------------------------
    | Prefixes
    |--------------------------------------------------------------------------
    |
    */

    'prefixes' => [

        'route' => '',  // using admin will create route('admin.?.index') type routes

        'path' => '',

        'view' => (empty($prefix) ? '' : strtolower($prefix)),  // using backend will create return view('backend.?.index') type the backend views directory

        'public' => (empty($moduleName) ? '' : $moduleName.'::'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Add-Ons
    |--------------------------------------------------------------------------
    |
    */

    'add_on' => [

        'swagger'       => false,

        'tests'         => true,

        'datatables'    => false,

        'menu'          => [

            'enabled'       => true,

            'menu_file'     => (empty($moduleName) ? '' : '../../../../resources/views/').'layouts/admin/menu.blade.php',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Timestamp Fields
    |--------------------------------------------------------------------------
    |
    */

    'timestamps' => [

        'enabled'       => true,

        'created_at'    => 'created_at',

        'updated_at'    => 'updated_at',

        'deleted_at'    => 'deleted_at',
    ],

    /*
    |--------------------------------------------------------------------------
    | Save model files to `App/Models` when use `--prefix`. see #208
    |--------------------------------------------------------------------------
    |
    */
    'ignore_model_prefix' => false,

];
