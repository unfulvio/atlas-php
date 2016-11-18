# Atlas

This is an experiment to port a [geocoding proxy service written in Go](https://github.com/unfulvio/atlas) to PHP using [Silex](http://silex.sensiolabs.org/) microframework and [Geocoder PHP](https://github.com/geocoder-php/Geocoder) library.

### Usage

First, make sure you have PHP 7 installed.

Clone this project:

```shell
$ git clone https://github.com/unfulvio/atlas-php atlas
``` 

Then install the project dependencies with:

```shell
$ cd atlas
$ composer install
```
   
Then try this proxy, from the directory above the project root, you need to launch an instance of the PHP webserver, like so (assumes you have cloned into `atlas` directory)  
 
```shell
$ cd ..
$ php -S localhost:8080 -t atlas/
```

This will start a webserver on port 8080. Visit an address like this:

> http://localhost:8080/geocode/London

and you will receive a JSON response with London coordinates. You can type any address, short or long, it will return a response from Google Maps.
