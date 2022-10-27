<?php

return [
    /**
     * Control if the seeder should create a user per role while seeding the data.
     */
    'create_users' => false,

    /**
     * Control if all the laratrust tables should be truncated before running the seeder.
     */
    'truncate_tables' => true,

    'roles_structure' => [
        'super_admin' => [
            'roles' => 'c,r,u,d',
            'admins' => 'c,r,u,d',
            'settings' => 'c,r,u,d',
            'rent_offers' => 'c,r,u,d',
            'sale_offers' => 'c,r,u,d',
            'exchange_offers' => 'c,r,u,d',
            'client_mangement' => 'c,r,u,d',
            'owners_mangement' => 'c,r,u,d',
            'agent_mangement' => 'c,r,u,d',
        ],
        'admin' => [],
        'user' => [],
    ],

    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ],
    'create_users' => true,
];
