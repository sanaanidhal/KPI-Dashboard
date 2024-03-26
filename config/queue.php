<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Queue Connection Name
    |--------------------------------------------------------------------------
    |
<<<<<<< HEAD
    | Laravel's queue supports a variety of backends via a single, unified
    | API, giving you convenient access to each backend using identical
    | syntax for each. The default queue connection is defined below.
    |
    */

    'default' => env('QUEUE_CONNECTION', 'database'),
=======
    | Laravel's queue API supports an assortment of back-ends via a single
    | API, giving you convenient access to each back-end using the same
    | syntax for every one. Here you may define a default connection.
    |
    */

    'default' => env('QUEUE_CONNECTION', 'sync'),
>>>>>>> bdb526c670e8a430c1ea45b0dcc8df81fc066926

    /*
    |--------------------------------------------------------------------------
    | Queue Connections
    |--------------------------------------------------------------------------
    |
<<<<<<< HEAD
    | Here you may configure the connection options for every queue backend
    | used by your application. An example configuration is provided for
    | each backend supported by Laravel. You're also free to add more.
=======
    | Here you may configure the connection information for each server that
    | is used by your application. A default configuration has been added
    | for each back-end shipped with Laravel. You are free to add more.
>>>>>>> bdb526c670e8a430c1ea45b0dcc8df81fc066926
    |
    | Drivers: "sync", "database", "beanstalkd", "sqs", "redis", "null"
    |
    */

    'connections' => [

        'sync' => [
            'driver' => 'sync',
        ],

        'database' => [
            'driver' => 'database',
<<<<<<< HEAD
            'connection' => env('DB_QUEUE_CONNECTION', null),
            'table' => env('DB_QUEUE_TABLE', 'jobs'),
            'queue' => env('DB_QUEUE', 'default'),
            'retry_after' => env('DB_QUEUE_RETRY_AFTER', 90),
=======
            'table' => 'jobs',
            'queue' => 'default',
            'retry_after' => 90,
>>>>>>> bdb526c670e8a430c1ea45b0dcc8df81fc066926
            'after_commit' => false,
        ],

        'beanstalkd' => [
            'driver' => 'beanstalkd',
<<<<<<< HEAD
            'host' => env('BEANSTALKD_QUEUE_HOST', 'localhost'),
            'queue' => env('BEANSTALKD_QUEUE', 'default'),
            'retry_after' => env('BEANSTALKD_QUEUE_RETRY_AFTER', 90),
=======
            'host' => 'localhost',
            'queue' => 'default',
            'retry_after' => 90,
>>>>>>> bdb526c670e8a430c1ea45b0dcc8df81fc066926
            'block_for' => 0,
            'after_commit' => false,
        ],

        'sqs' => [
            'driver' => 'sqs',
            'key' => env('AWS_ACCESS_KEY_ID'),
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            'prefix' => env('SQS_PREFIX', 'https://sqs.us-east-1.amazonaws.com/your-account-id'),
            'queue' => env('SQS_QUEUE', 'default'),
            'suffix' => env('SQS_SUFFIX'),
            'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
            'after_commit' => false,
        ],

        'redis' => [
            'driver' => 'redis',
<<<<<<< HEAD
            'connection' => env('REDIS_QUEUE_CONNECTION', 'default'),
            'queue' => env('REDIS_QUEUE', 'default'),
            'retry_after' => env('REDIS_QUEUE_RETRY_AFTER', 90),
=======
            'connection' => 'default',
            'queue' => env('REDIS_QUEUE', 'default'),
            'retry_after' => 90,
>>>>>>> bdb526c670e8a430c1ea45b0dcc8df81fc066926
            'block_for' => null,
            'after_commit' => false,
        ],

    ],

    /*
    |--------------------------------------------------------------------------
<<<<<<< HEAD
    | Job Batching
    |--------------------------------------------------------------------------
    |
    | The following options configure the database and table that store job
    | batching information. These options can be updated to any database
    | connection and table which has been defined by your application.
    |
    */

    'batching' => [
        'database' => env('DB_CONNECTION', 'sqlite'),
        'table' => 'job_batches',
    ],

    /*
    |--------------------------------------------------------------------------
=======
>>>>>>> bdb526c670e8a430c1ea45b0dcc8df81fc066926
    | Failed Queue Jobs
    |--------------------------------------------------------------------------
    |
    | These options configure the behavior of failed queue job logging so you
<<<<<<< HEAD
    | can control how and where failed jobs are stored. Laravel ships with
    | support for storing failed jobs in a simple file or in a database.
    |
    | Supported drivers: "database-uuids", "dynamodb", "file", "null"
=======
    | can control which database and table are used to store the jobs that
    | have failed. You may change them to any database / table you wish.
>>>>>>> bdb526c670e8a430c1ea45b0dcc8df81fc066926
    |
    */

    'failed' => [
        'driver' => env('QUEUE_FAILED_DRIVER', 'database-uuids'),
<<<<<<< HEAD
        'database' => env('DB_CONNECTION', 'sqlite'),
=======
        'database' => env('DB_CONNECTION', 'mysql'),
>>>>>>> bdb526c670e8a430c1ea45b0dcc8df81fc066926
        'table' => 'failed_jobs',
    ],

];
