#! /bin/bash

if [ $TRAVIS_BRANCH = "master" ]; then
  bundle exec cap staging deploy
  exit 0
elif [ $TRAVIS_BRANCH = "production" ]; then
  bundle exec cap production deploy
  exit 0
fi
exit 1 