@echo off
set php_home="D:\Program Files\wamp\bin\php\php5.5.12"
set nginx_home=D:\WorkSpace\Tools\nginx-1.10.1

start %nginx_home%/nginx.exe 

%php_home%\php-cgi.exe -b 127.0.0.1:9000  -c %php_home%/php.ini
