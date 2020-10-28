#!/bin/sh

docker run --rm -i --user $(id -u):$(id -g) -w $(pwd) -v $(pwd):$(pwd) php:cli-alpine php "$@"

