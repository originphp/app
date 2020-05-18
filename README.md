# OriginPHP Application Template

This is the application template for OriginPHP.

## Installation

Download and install [Composer](https://getcomposer.org/doc/00-intro.md), then run the following command to create your
new OriginPHP project.

```linux
$ composer create-project originphp/app [project_name]
```

OriginPHP comes with a dockerized development environment.

Install [Docker Desktop](https://www.docker.com/products/docker-desktop) then build the docker containers, this must be done from within the project folder

```linux
$ cd [project_name]
$ docker-compose build
```

The container only needs to be built once, after this you will use the up and down commands to start and stop the docker container.

If you just want a web server then run the `docker-compose` command

```linux
$ docker-compose up
```

Then you will now be able to access your app at [http://localhost:8000/](http://localhost:8000/).

If you want to start the docker container with extra services such as database and caching, then run the script

```linux
$ bin/docker
```

You can add or remove docker services by editing the script file directly.

To shutdown the containers hit `ctrl-c`