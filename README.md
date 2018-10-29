# pm-kusanagi-docker
KUSANAGI Runs on Docker Ver. PRESSMAN

## Setup
**require `git`,`wget`,`docker`**

1. git clone this.
```
$ pwd
/home/foobar
$ git clone https://github.com/pm-yosuke/pm-kusanagi-docker.git my_wp_project
```

2. download and extract WordPress.
```
$ pwd
/home/yosuke
$ cd my_wp_project/kusanagi
$ wget http://ja.wordpress.org/latest-ja.tar.gz
$ tar -xzf latest-ja.tar.gz -C DocumentRoot/ --strip=1
$ rm latest.tar.gz
```

3. download kusanagi plugin.
```
$ pwd
/home/yosuke/my_wp_project/kusanagi
$ mkdir DocumentRoot/wp-content/mu-plugins
$ cd DocumentRoot/wp-content/mu-plugins/
$ docker run --rm -v $(pwd):/mu-plugins pmyosuke/pm-kusanagi-plugin
```

4. run docker-compose.
```
$ pwd
/home/yosuke/my_wp_project/kusanagi/DocumentRoot/wp-content/mu-plugins
$ cd /home/yosuke/my_wp_project
$ docker-compose up -d
```

5. access to http://localhost, and setup wp.

## @See
[prime-strategy/kusanagi-docker](https://github.com/prime-strategy/kusanagi-docker)