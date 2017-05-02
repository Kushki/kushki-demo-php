FROM eboraas/apache-php
MAINTAINER Jose Santacruz <jose@kushkipagos.com>

RUN apt-get update && apt-get -y install php5-curl && apt-get clean && rm -rf /var/lib/apt/lists/*
RUN /usr/sbin/a2dismod 'mpm_*' && /usr/sbin/a2enmod mpm_prefork

EXPOSE 80
EXPOSE 443

CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]