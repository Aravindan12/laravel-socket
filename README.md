<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Socket

Here in my repository socket io is user for chat application end to end user can chat through this here i added the process of implementing socket io in laravel project.

## Server Side

- Install Node and npm.
- Create a js file for server side.
- In that file use express create an app connect socket and mysql for database.
- Make the database Connection and add a get route to check the socket is connected or not.
- Add an event and listen it in on() method in that insert the data innto db and emit.
- Add the disconnect at the end.
- Listen socket in required port.

The above points have to be done in server side of socket io.

## Client Side

- Make a function in client connect the port of socket.
- Call the function at the time of message send button clicks.
- Emit the data to server and append the message ini your blade.
- And also listen the server event at the bottom.

The above points have to be done in client side of socket io.
