#!/bin/sh

set -eu

npm i
nom run build
npm run deploy
aws cloudfront create-invalidation --distribution-id $DIST_ID --paths '/*'
