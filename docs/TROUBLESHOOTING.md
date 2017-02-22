# Common problems setting up the PR dev environment

Here is a list of problems people have encountered when using our dev setup. If the problem you're having isn't listed here, please do us a favor and [submit an issue complaining about it](https://github.com/politicalrev/political-revolution.com/issues/new).

## Docker

- **`docker-compose up` stalls when running the first time.**
  - Exit the process with `ctrl + c` and re-run `docker-compose up`.

- **When I run `docker-compose up`, I get an `ERROR: could not find an available, non-overlapping IPv4 address pool among the defaults to assign to the network`.**

  - If you are on Linux (specifically Ubuntu), this may be caused by openVPN. There is a [nice thread that explains how to fix it](https://github.com/docker/libnetwork/issues/779).