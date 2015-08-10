# career-tag Developed using
<img src="public/assets/logos/careerscore_logo_lang.png" alt="Image of CareerTag" height="150" width="300"/>
<img src="public/assets/logos/L5.png" alt="Image of CareerTag" height="150" width="300"/>

### Installation guidelines

 - To clone repository use **git clone git@github.com:woxiprogrammers/career-tag.git**
 - There are two main branches
 ```
    1. master

    2. develop
 ```
 - always pull code from develop for local development.
 - create .env file in root directory and copy all content from .env.example to .env file and
   make changes according to requirement like database and other required passwords according
   to your local environment.
 - Install composer [It's dependency manager for php]
 ```
    1. curl -sS https://getcomposer.org/installer | php

    2. sudo mv composer.phar /usr/local/bin/composer
 ```
 - Then goto root path of project directory and run following command
 ```

    * composer install

 ```
 - Give recursive permission [777 -R] to following folders
 ```
    * bootstrap/cache

    * storage
 ```