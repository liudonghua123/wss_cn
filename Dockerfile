# see https://github.com/tutumcloud/apache-php
FROM tutum/apache-php

MAINTAINER liudonghua123 <liudonghua123@gmail.com>

# add the application code to the default deployment location
ADD wss_cn /app
