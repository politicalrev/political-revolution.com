#! /bin/bash

if [ $TRAVIS_BRANCH = "master" ]; then
  bundle exec cap staging deploy
  exit $?
elif [ $TRAVIS_BRANCH = "production" ]; then
  bundle exec cap production deploy
  exit $?
fi
exit 1 