#!/bin/bash
unzip -o /var/www/html/php-app.zip -d /var/www/html/
systemctl restart apache2
