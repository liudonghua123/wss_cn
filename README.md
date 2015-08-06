# wss_cn

### Notice

To run this docker image, you need to specify at least these environment variables:

- MYSQL_PORT_3306_TCP_ADDR
- MYSQL_ENV_USERNAME
- MYSQL_ENV_PASSWORD
- MYSQL_ENV_DATABASE

### How to use

Set the environment variables using export on bash

```
export MYSQL_PORT_3306_TCP_ADDR=<your_mysql_host>
export MYSQL_ENV_USERNAME=<your_mysql_username>
......
```
Or filling its value in docker-compose.yml file.

Then run the following command

```
# download the docker-compose.yml file to get `docker-compose` to run
wget https://raw.githubusercontent.com/ynu/wss_cn/master/README.md
# you can customize the exported port in this file
# and finally run the following command to start the container
docker-compose up -d
```

Also you can run directly using `docker run`

```
sudo docker run -d --restart=always -e 'MYSQL_PORT_3306_TCP_ADDR=<YOUR_MYSQL_HOST>' -e 'MYSQL_ENV_USERNAME=<YOUR_MYSQL_USERNAME>' -e 'MYSQL_ENV_PASSWORD=<YOUR_MYSQL_PASSWORD>' -e 'MYSQL_ENV_DATABASE=<YOUR_MYSQL_DATABASE>' -p <YOUR_EXPORTED_PORT>:80 ynuae/wss_cn
```

Replace YOUR_MYSQL_HOST, YOUR_MYSQL_USERNAME, YOUR_MYSQL_DATABASE, YOUR_MYSQL_PASSWORD, YOUR_EXPORTED_PORT according to your real situation.

