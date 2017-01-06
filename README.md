# [wp.thepoliticalrev.org](https://github.com/politicalrev/wp.thepoliticalrev.org)

Welcome to the Github repository for The Political Revolution's Wordpress setup. It is built upon the [Sage 8.5](https://github.com/roots/sage/releases/latest) starter theme and sports a modern development workflow.

This file describes the steps to install this Wordpress repo and setup all the components on the same ([Debian](https://www.debian.org/) or [Ubuntu](https://www.ubuntu.com/)) machine. The steps should be largely similar for using [MAMP](https://www.mamp.info/en/) or [homebrew](http://brew.sh/).


## Contributing

Contributions are welcome from everyone. However, *please read* the [contributing guidelines](https://github.com/politicalrev/wp.thepoliticalrev.org/blob/master/CONTRIBUTING.md) before
jumping into the code to give your work the highest chance of being merged.

## Requirements

Make sure all dependencies have been installed before moving on:

* [Node.js](http://nodejs.org/) >= 4.5
  * update to the latest version of npm: `npm install -g npm@latest`.
* [Docker Engine](https://docs.docker.com/engine/installation/#on-linux) for your platform


## Installation

Installation is straight-foward.

1. Clone the repository.
1. Install [gulp](http://gulpjs.com) and [Bower](http://bower.io/) globally with `npm install -g gulp bower`
2. In the root of the project, run `npm run-script build && npm start`.
3. Navigate to http://127.0.0.1:8080/ and follow the instructions to create your local dev environment.
4. Go to http://127.0.0.1:8080/wp-admin and change the active theme to `thrpoliticalsage` to enable our theme.

`npm start` runs gulp watch and starts the docker development server. Stopping gulp with `ctrl + C` and running `npm stop` will spin down your dev processes. To attach to the terminal of the local dev server, you may run `docker exec -it wpthepoliticalrevorg_my-wp_1 /bin/bash`. 

A pre-populated database is not currently being provided. However, after setting up Wordpress for the first time, the database changes you make will be persisted in a Docker [data volume](https://docs.docker.com/engine/tutorials/dockervolumes/#data-volumes)
 until/unless you delete it. We plan to provide a pre-populated sample database in the future.

## Theme development

Sage uses [gulp](http://gulpjs.com/) as its build system and [Bower](http://bower.io/) to manage front-end packages.

### Available gulp commands

* `gulp` — Compile and optimize the files in your assets directory
* `gulp watch` — Compile assets when file changes are made
* `gulp --production` — Compile assets for production (no source maps).

## Documentation

Detailed documentation for this project will be located in the [docs/](https://github.com/politicalrev/wp.thepoliticalrev.org/tree/master/docs) folder.

Sage 8.5 documentation is available at [https://roots.io/sage/docs/](https://roots.io/sage/docs/).


