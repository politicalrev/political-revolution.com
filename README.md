# [political-revolution.com](https://github.com/politicalrev/wp.thepoliticalrev.org)
[![Build Status](https://travis-ci.org/politicalrev/political-revolution.com.svg?branch=master)](https://travis-ci.org/politicalrev/political-revolution.com)

Welcome to the Github repository for the website of [Political Revolution](https://political-revolution.com). It is built upon [Bedrock](https://roots.io/bedrock/) and the [Sage 8.5](https://github.com/roots/sage/releases/latest) starter theme.

This file describes the steps to install a working developer environment on your local machine so you can begin contributing to the revolution.

## Installation

1. **Install Docker Engine.** The local development server is entirely assembled using [docker-compose](https://docs.docker.com/compose/), so this is the only prerequisite for theme development. Installation is straightforward on [Mac](https://docs.docker.com/engine/installation/mac/), [Linux](https://docs.docker.com/engine/installation/), or [Windows](https://docs.docker.com/engine/installation/windows/). Once it's installed, open up your preferred terminal.

2. **Clone the code into your directory of choice:** 

  ```
  git clone https://github.com/politicalrev/political-revolution.com.git
  ```

2. **Set up the local server:** 

  ```
  cd political-revolution.com && cp .env.example .env && docker-compose up
  ```

  First, we [copy the example environment configuration](https://roots.io/bedrock/docs/environment-variables/) (which has already been configured to work with our local dev environment) to a local, untracked .env file. Docker will then create virtual containers which emulate our production server environment. On your console you will see the output of these containers. 
  
  The first time you run this command, it will take several minutes to complete as it downloads all the dependencies the local server needs, imorts our database into the `db/` folder, and starts up the server. Go grab a cup-a-joe. Running `docker-compose up` in the future will go much faster, as the dependencies are already installed. The installation is complete when you see:

  ```
  build_1      | [BS] Proxying: http://prdev.com
  build_1      | [BS] Access URLs:
  build_1      |  -----------------------------------
  build_1      |        Local: http://localhost:8083
  build_1      |     External: http://172.19.0.3:8083
  build_1      |  -----------------------------------
  build_1      |           UI: http://localhost:3001
  build_1      |  UI External: http://172.19.0.3:3001
  build_1      |  -----------------------------------
  build_1      | [BS] Watching files...
  ```

3. **Point the domain `prdev.com` at your local machine.** This is to get [BrowserSync](https://browsersync.io/) working with Docker, and is totally worth it. You can do this manually by adding the line `127.0.0.1 prdev.com` to your hosts file (`/etc/hosts` on Unix, `c:\windows\system32\drivers\etc\hosts` on Windows). If you are on Unix, running `./server/addhost.sh` from the root of the repo will do this for you.

4. **Navigate to `prdev.com:8083`, you're ready to go!** You should see a near-exact copy of the PR website. Browsersync will automatically inject any changes you make into the page when you save a file.

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
