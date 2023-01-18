FROM php:8.1-apache
RUN apt-get update
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
RUN mysql -u root -p webinar_db < webinar_db.sql