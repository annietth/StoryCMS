FROM php:7.4-apache
EXPOSE 80
# RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf
# CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]
RUN docker-php-ext-install mysqli pdo pdo_mysql json \
&& a2enmod rewrite