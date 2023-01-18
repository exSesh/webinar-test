FROM php:8.1-apache
RUN apt-get update
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
RUN cat /webinar_bd.sql | docker exec -it webinar-test-mysql-1 mysql -u root --password=8hXI5MgIbqifZ webinar_bd