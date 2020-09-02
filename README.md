# OriginPHP Application Template

This is the application template for OriginPHP.

## Installation

Download and install [Composer](https://getcomposer.org/doc/00-intro.md), then run the following command to create your
new OriginPHP project.

```linux
$ composer create-project originphp/app [project_name]
```

OriginPHP comes with a dockerized development environment.

Install [Docker Desktop](https://www.docker.com/products/docker-desktop) then build the docker containers, this must be done from within the project folder. The build process only needs to be done once or if you change anything in the `Dockerfile`.

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

To shut down the server

```linux
$ docker-compose down
```

If you want to start the docker container with extra services including MySQL, Redis, Minio, MailHog then run the script

```linux
$ bin/docker
```

To shutdown the containers hit `CTRL C`, this will close the docker container and additional services.

To learn how to remove or add services such as Postwoman, Elasticsearch, Memcached and PostgreSQL, see [Dockerized Development Environment](https://www.originphp.com/docs/development/dockerized-development-environment/)