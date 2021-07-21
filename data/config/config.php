<?php
$CONFIG = array (
  'apps_paths' => 
  array (
    0 => 
    array (
      'path' => '/var/www/owncloud/apps',
      'url' => '/apps',
      'writable' => false,
    ),
    1 => 
    array (
      'path' => '/var/www/owncloud/custom',
      'url' => '/custom',
      'writable' => true,
    ),
  ),
  'trusted_domains' => 
  array (
    0 => 'cloud.mydomain.com',
  ),
  'datadirectory' => '/mnt/data/files',
  'dbtype' => 'mysql',
  'dbhost' => 'db:3306',
  'dbname' => 'owncloud',
  'dbuser' => 'root',
  'dbpassword' => 'CHANGEME',
  'dbtableprefix' => 'oc_',
  'log_type' => 'owncloud',
  'supportedDatabases' => 
  array (
    0 => 'sqlite',
    1 => 'mysql',
    2 => 'pgsql',
  ),
  'upgrade.disable-web' => true,
  'default_language' => 'en',
  'overwrite.cli.url' => 'http://0.0.0.0/',
  'htaccess.RewriteBase' => '/',
  'logfile' => '/mnt/data/files/owncloud.log',
  'loglevel' => 2,
  'memcache.local' => '\\OC\\Memcache\\APCu',
  'mysql.utf8mb4' => true,
  'filelocking.enabled' => true,
  'memcache.distributed' => '\\OC\\Memcache\\Redis',
  'memcache.locking' => '\\OC\\Memcache\\Redis',
  'redis' => 
  array (
    'host' => 'redis',
    'port' => '6379',
  ),
  'instanceid' => '',
  'passwordsalt' => '',
  'secret' => '',
  'version' => '10.7.0.4',
  'logtimezone' => 'Europe/Berlin',
  'installed' => true,
  'maintenance' => false,
  'theme' => 'mytheme',
  'singleuser' => false,
  'mail_domain' => 'mydomain.com',
  'mail_from_address' => 'cloud',
  'mail_smtpmode' => 'smtp',
  'mail_smtpsecure' => 'ssl',
  'mail_smtphost' => 'email-smtp',
  'mail_smtpport' => '465',
  'mail_smtpauthtype' => 'LOGIN',
  'mail_smtpauth' => 1,
  'mail_smtpname' => '',
  'mail_smtppassword' => '',
  'files_antivirus.av_path' => '/usr/bin/clamscan',
);
