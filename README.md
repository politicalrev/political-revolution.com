# [political-revolution.com](https://github.com/politicalrev/wp.thepoliticalrev.org)

Welcome to the Github repository for the website of [Political Revolution](https://political-revolution.com). It is built upon [Bedrock](https://roots.io/bedrock/) and the [Sage 8.5](https://github.com/roots/sage/releases/latest) starter theme.

This file describes the steps to install a working developer environment on your local machine so you can begin contributing to the revolution.


## Contributing

Contributions are welcome from everyone. However, *please read* the [contributing guidelines](https://github.com/politicalrev/wp.thepoliticalrev.org/blob/master/CONTRIBUTING.md) before
jumping into the code to give your work the highest chance of being merged.

## Installation

### Get the code

`git clone https://github.com/politicalrev/political-revolution.com.git` in your directory of choice. If you want a quick rundown on the workings of git or how to set it up, check out [this basic git guide](https://git-scm.com/book/en/v2/Git-Basics-Getting-a-Git-Repository)

### Set up local dev server

The local development server is entirely assebmled using [docker-compose](https://docs.docker.com/compose/), so the only prerequisite for theme development is to install Docker Engine. Installation is straightforward on [Mac](https://docs.docker.com/engine/installation/mac/), [Linux](https://docs.docker.com/engine/installation/), or [Windows](https://docs.docker.com/engine/installation/windows/). 

Once you have Docker Engine installed and running, open the terminal of your choice, navigate to the `political-revolution.com/` directory you cloned earlier, and run `docker-compose up`. Docker will create virtual containers which emulate our production server environment. On your console you will see the output of these containers. 

The first time you run this command, it will take several minutes to complete as it downloads all the dependencies the local server needs. Go grab a cup-a-joe.

To attach to the terminal of the database, server, or build, you may run `docker exec -it <container> /bin/bash`, but you shouldn't need to.

### Initial Wordpress Install
Navigate to http://127.0.0.1:8080/ and follow the instructions to set up your Wordpress admin account. You can ignore warnings about the user database not existing, they'll go away once you finish the setup wizard. Login with that admin account.

Go to http://127.0.0.1:8080/wp-admin, navigate to the themes section, and change the active theme to "The Political Sage" to enable the theme we develop.

A pre-populated database is not currently being provided. However, after setting up Wordpress for the first time, the database changes you make will be persisted in a Docker [data volume](https://docs.docker.com/engine/tutorials/dockervolumes/#data-volumes) linked to the `db/` directory until/unless you delete it. We plan to provide a pre-populated sample database in the near future.

## Documentation

Detailed documentation for this project will be located in the [docs/](https://github.com/politicalrev/wp.thepoliticalrev.org/tree/master/docs) folder, which already contains documentation for both Sage and Bedrock.
