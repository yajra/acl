<?php

return [
    /**
     * Export database migrations
     */
    'migrations' => false,
    
    /**
     * Role class used for ACL.
     */
    'role'       => \Yajra\Acl\Models\Role::class,

    /**
     * Permission class used for ACL.
     */
    'permission' => \Yajra\Acl\Models\Permission::class,
];
