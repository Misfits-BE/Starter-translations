<?php 

return [

    /**
     * -----------------------------------------------------------------------
     * Database Translations Lines 
     * -----------------------------------------------------------------------
     * 
     * The following language lines are used during the database seeds for 
     * various messages that we need to display to the user. You are free 
     * to modify these language lines according to your application's 
     * requirements. 
     * 
     */

    // DatabaseSeeder.php 
    'ask-refresh'               => 'Do you wish to refresh the migration before seeding, it will clear all old data?', 
    'cleared-database'          => 'Data cleared, starting from blank database.', 

    // usersTableSeeder.php
    'permissions-added'         => 'Default Permissions added.', 
    'ask-roles-default'         => 'Create Roles for user, default is admin and user?', 
    'ask-roles-user'            => 'Enter roles in comma separate format.', 
    'perms-synced-admin'        => 'Admin granted all the permissions.', 
    'role-created-info'         => 'Roles :roles added successfully.',
    'only-default-role-added'   => 'Added only default user role.', 
    'no-roles-added'            => 'The default user role already exists in the database.',
    'user-admin-role'           => 'Here is your admin details to login:', 
    'default-password'          => 'Password is "secret"',


];