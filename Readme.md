# Development

## How to run help.keyman.com locally with Apache on Docker

Previously, the site was run in IIS, but is now migrated to Apache. The Docker image is configured to host the site that can be accessed at http://localhost:8055.


### Pre-requisites

On the host machine, install [Docker](https://docs.docker.com/get-docker/) and [Composer](https://getcomposer.org/download/):

On Windows, Docker will also need either:
* hyper-v or
* [WSL2](https://ubuntu.com/tutorials/install-ubuntu-on-wsl2-on-windows-10#1-overview)

### Builder actions

#### Configure
Install PHP dependencies in vendor/ folder
1. Run `./build.sh configure`.

#### Build the Docker image
1. Run `./build.sh build`.

#### Start the Docker container
1. Run `./build.sh start`.

After this, you can access the help.keyman site at http://localhost:8055

#### Stop the Docker container
1. Run `./build.sh stop`

#### Clean the Docker container and image
1. Run `./build.sh clean`.

#### Running tests
Checks for broken links
1. Run `./build.sh test`
