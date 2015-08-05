# wss_cn

### Notice

To run this docker image, you need to specify at least 5 environment variables: MYSQL_PORT_3306_TCP_ADDR/MYSQL_ENV_USERNAME/MYSQL_ENV_PASSWORD/MYSQL_ENV_DATABASE/YOUR_EXPORTED_PORT.

### How to use

- Run with environment variables passed using `docker run`

	```bash
sudo docker run -d --restart=always -e 'MYSQL_PORT_3306_TCP_ADDR=<YOUR_MYSQL_HOST>' -e 'MYSQL_ENV_USERNAME=<YOUR_MYSQL_USERNAME>' -e 'MYSQL_ENV_PASSWORD=<YOUR_MYSQL_PASSWORD>' -e 'MYSQL_ENV_DATABASE=<YOUR_MYSQL_DATABASE>' -p <YOUR_EXPORTED_PORT>:80 ynuae/wss_cn
```

	Replace **<YOUR_MYSQL_HOST>\<YOUR_MYSQL_USERNAME>\<YOUR_MYSQL_DATABASE>\<YOUR_MYSQL_PASSWORD>\<YOUR_EXPORTED_PORT>** according to your real situation.

- Run with environment variables passed using `docker --link`, see more detais on [dockerlinks](http://docs.docker.com/userguide/dockerlinks/)
	
	If your mysql was running in a docker container in the same host which you run wss_cn, you do not need to expose the port 3306 or else.
	
	```bash
	docker run -d --name mysql mysql
	```
	
	Then run the wss_cn using the following command(you do not need specify MYSQL_PORT_3306_TCP_ADDR environment variable)
	
	```bash
	docker run -d -e 'MYSQL_ENV_USERNAME=<YOUR_MYSQL_USERNAME>' -e 'MYSQL_ENV_PASSWORD=<YOUR_MYSQL_PASSWORD>' -e 'MYSQL_ENV_DATABASE=<YOUR_MYSQL_DATABASE>' --name my_wss --link mysql -p <YOUR_EXPORTED_PORT>:80 ynuae/wss_cn
	```