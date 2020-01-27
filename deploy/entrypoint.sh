#!/bin/sh

set -eu

npm i
npm deploy
aws cloudfront create-invalidation --distribution-id $DIST_ID --paths '/*'
