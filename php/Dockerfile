# FROM označava koju temeljnu sliku koristimo. U ovom slučaju php:7.3.3-apache
FROM php:7.3.3-apache
# Ažuriranje sustava
RUN apt-get update && apt-get upgrade -y
# Instalacija mysqli ekstenzije za rad s bazom podataka
RUN docker-php-ext-install mysqli
# Port web aplikacije
EXPOSE 80
