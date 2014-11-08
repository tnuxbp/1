sudo apt-get install curl

sudo apt-get install php5-cli

sudo apt-get install php5-mysql

sudo apt-get install php5-mcrypt

sudo php5enmod mcrypt

sudo apt-get install php5-gd

curl -sS https://getcomposer.org/installer | php

sudo mv composer.phar /usr/local/bin/composer

composer global require "fxp/composer-asset-plugin:1.0.0-beta3"


bismillah@bismillah:~$ cd /var/www/
bismillah@bismillah:/var/www$ composer create-project --prefer-dist yiisoft/yii2-app-advanced advanced
<!-- Installing yiisoft/yii2-app-advanced (2.0.0)
  - Installing yiisoft/yii2-app-advanced (2.0.0)
    Loading from cache

Created project in advanced
Loading composer repositories with package information
Installing dependencies (including require-dev)
  - Installing yiisoft/yii2-composer (2.0.0)               
    Loading from cache

  - Installing swiftmailer/swiftmailer (v5.3.0)
    Loading from cache

  - Installing bower-asset/jquery (2.1.1)
    Loading from cache

  - Installing bower-asset/yii2-pjax (v2.0.1)
    Loading from cache

  - Installing bower-asset/punycode (v1.3.2)
    Loading from cache

  - Installing bower-asset/jquery.inputmask (3.1.37)
    Loading from cache

  - Installing cebe/markdown (1.0.1)
    Loading from cache

  - Installing ezyang/htmlpurifier (v4.6.0)
    Loading from cache

  - Installing yiisoft/yii2 (2.0.0)
    Loading from cache

  - Installing yiisoft/yii2-swiftmailer (2.0.0)
    Loading from cache

  - Installing yiisoft/yii2-codeception (2.0.0)
    Loading from cache

  - Installing bower-asset/bootstrap (v3.2.0)
    Loading from cache

  - Installing yiisoft/yii2-bootstrap (2.0.0)
    Loading from cache

  - Installing yiisoft/yii2-debug (2.0.0)
    Loading from cache

  - Installing bower-asset/typeahead.js (v0.10.5)
    Loading from cache

  - Installing phpspec/php-diff (v1.0.2)
    Loading from cache

  - Installing yiisoft/yii2-gii (2.0.0)
    Loading from cache

  - Installing fzaninotto/faker (v1.4.0)
    Loading from cache

  - Installing yiisoft/yii2-faker (2.0.0)
    Loading from cache

Writing lock file
Generating autoload files -->
bismillah@bismillah:/var/www$ cd advanced
bismillah@bismillah:/var/www/advanced$ php init
<!-- Yii Application Initialization Tool v1.0

Which environment do you want the application to be initialized in?

  [0] Development
  [1] Production -->

  Your choice [0-1, or "q" to quit] 0

  Initialize the application under 'Development' environment? [yes|no] yes

  <!-- Start initialization ...

   generate console/config/params-local.php
   generate console/config/main-local.php
   generate yii
   generate backend/web/index-test.php
   generate backend/web/index.php
   generate backend/config/params-local.php
   generate backend/config/main-local.php
   generate common/config/params-local.php
   generate common/config/main-local.php
   generate frontend/web/index-test.php
   generate frontend/web/index.php
   generate frontend/config/params-local.php
   generate frontend/config/main-local.php
   generate cookie validation key in backend/config/main-local.php
   generate cookie validation key in frontend/config/main-local.php
      chmod 0777 backend/runtime
      chmod 0777 backend/web/assets
      chmod 0777 frontend/runtime
      chmod 0777 frontend/web/assets
      chmod 0755 yii

  ... initialization completed. -->
bismillah@bismillah:/var/www/advanced$ ./yii migrate
Yii Migration Tool (based on Yii v2.0.0)

Creating migration history table "migration"...done.
Total 1 new migration to be applied:
    m130524_201442_init

Apply the above migration? (yes|no) [no]:yes
*** applying m130524_201442_init
    > create table {{%user}} ... done (time: 0.416s)
*** applied m130524_201442_init (time: 0.474s)


Migrated up successfully.
bismillah@bismillah:/var/www/advanced$ 
