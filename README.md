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

```linux
$ docker-compose up
```

Now the development server is running, but first you need to install the Generate and Debug plugin, you will need to access the docker container from the command line.

```linux
$ docker-compose run app bash
$ bin/console plugin install originphp/generate-plugin
$ bin/console plugin install originphp/debug-plugin
```

Then you will now be able to access your app at [http://localhost:8000/](http://localhost:8000/).

To shutdown the container

```linux
$ docker-compose down
```