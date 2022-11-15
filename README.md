Sample project using [Symfony][1] 5.3.9, data is provided from [TMDB (The Movie Database)][2].

[1]: https://symfony.com
[2]: https://www.themoviedb.org/

Prerequirements
---------------
* You should have symfony installer ready on local machine to start the symfony internal web server.
* PHP version >= 7.4

Installation
------------
1. Clone the repository to local machine and install the composer dependencies
``` 
$ composer install
```
2. Start the symfony internal web server
```
$ symfony serve
```
3. Go to url https://127.0.0.1:8001/ (or http://127.0.0.1:8001/ if certificate not installed locally)

4. run the yarn command to build assets with Webpack
```
$ yarn run watch
```
