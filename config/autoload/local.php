<?php
/**
 * Local Configuration Override
 *
 * This configuration override file is for overriding environment-specific and
 * security-sensitive configuration information. Copy this file without the
 * .dist extension at the end and populate values as needed.
 *
 * @NOTE: This file is ignored from Git by default with the .gitignore included
 * in ZendSkeletonApplication. This is a good practice, as it prevents sensitive
 * credentials from accidentally being comitted into version control.
 */
// mysql://username:password@127.0.0.1/database_name

return array(
    'db' => array(
        'dsn' => 'mysql://root:@localhost/album',
     ),
);