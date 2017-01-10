# [political-revolution.com](https://github.com/politicalrev/wp.thepoliticalrev.org)

Welcome to the Github repository for the website of [Political Revolution](https://political-revolution.com). It is built upon [Bedrock](https://roots.io/bedrock/) and the [Sage 8.5](https://github.com/roots/sage/releases/latest) starter theme.

This file describes the steps to install a working developer environment on your local machine so you can begin contributing to the revolution.

## Installation

### Get the code

`git clone https://github.com/politicalrev/political-revolution.com.git` in your directory of choice. If you want a quick rundown on the workings of git or how to set it up, check out [this basic git guide](https://git-scm.com/book/en/v2/Git-Basics-Getting-a-Git-Repository)

### Set up local dev server

The local development server is entirely assembled using [docker-compose](https://docs.docker.com/compose/), so the only prerequisite for theme development is to install Docker Engine. Installation is straightforward on [Mac](https://docs.docker.com/engine/installation/mac/), [Linux](https://docs.docker.com/engine/installation/), or [Windows](https://docs.docker.com/engine/installation/windows/). 

Once you have Docker Engine installed and running, open the terminal of your choice, navigate to the `political-revolution.com/` directory you cloned earlier, and run `cp .env.example .env && docker-compose up`. First, we copy the example environment configuration (which has already been configured to work with our local dev environment) to a .env file. The reason for this is that .env is not tracked by git, as it will vary depending on the deploy environment ([explanation of how .env is used by bedrock](https://roots.io/bedrock/docs/environment-variables/)). Docker will then create virtual containers which emulate our production server environment. On your console you will see the output of these containers. 

The first time you run this command, it will take several minutes to complete as it downloads all the dependencies the local server needs, imorts our database into the `db/` folder, and starts up the server. Go grab a cup-a-joe. When everything finishes, you will have a local version of our website running at `127.0.0.1:8080`. Running `docker-compose up` in the future will go much faster, as the dependencies are already installed.

To attach to the terminal of the database, server, or build, you may run `docker exec -it <container> /bin/bash`, but you shouldn't need to.

To stop the local server, just hit `ctrl + c` from the terminal window `docker-compose` is running in and it will stop your containers.

## Theme Development

*TODO*

### Installing plugins

Plugins can be installed by locating them in the [Wpackagist registry](https://wpackagist.org), clicking on the version number, copying that line into the the `"require"` section of `composer.json`, and running `composer update`.

## Contributing

Contributions are welcome from everyone. However, *please read* the [contributing guidelines](https://github.com/politicalrev/wp.thepoliticalrev.org/blob/master/CONTRIBUTING.md) before
jumping into the code to give your work the highest chance of being merged.

## Documentation

Detailed documentation for this project will be located in the [docs/](https://github.com/politicalrev/wp.thepoliticalrev.org/tree/master/docs) folder, which already contains documentation for both Sage and Bedrock.
