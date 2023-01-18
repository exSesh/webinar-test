FROM php:8.1-apache
RUN apt-get update
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
RUN docker exec -it webinar-test-mysql-1 mysql -p webinar_db < webinar_db.sql