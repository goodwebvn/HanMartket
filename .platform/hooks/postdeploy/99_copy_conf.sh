#!/usr/bin/env bash
set -euo pipefail

# Post-deploy hook: copy nginx conf files from the application into the instance
# Destination: /etc/nginx/conf.d/elasticbeanstalk
# Source: .platform/conf.d/elasticbeanstalk (relative to application root)

SRC_DIR="$(pwd)/.platform/conf.d/elasticbeanstalk"
DST_DIR="/etc/nginx/conf.d/elasticbeanstalk"
LOG_PREFIX="[eb-postdeploy-copy-conf]"

if [ ! -d "$SRC_DIR" ]; then
  echo "$LOG_PREFIX source directory does not exist: $SRC_DIR - nothing to do"
  exit 0
fi

echo "$LOG_PREFIX creating destination directory: $DST_DIR"
sudo mkdir -p "$DST_DIR"

echo "$LOG_PREFIX copying files from $SRC_DIR to $DST_DIR"
sudo cp -a "$SRC_DIR/." "$DST_DIR/"

echo "$LOG_PREFIX fixing ownership to root:root"
sudo chown root:root -R "$DST_DIR"

# Validate nginx configuration and reload (try reload, fall back to restart)
echo "$LOG_PREFIX testing nginx configuration"
if sudo nginx -t >/dev/null 2>&1; then
  echo "$LOG_PREFIX nginx test OK - reloading nginx"
  if command -v systemctl >/dev/null 2>&1; then
    sudo systemctl reload nginx || sudo systemctl restart nginx
  else
    sudo service nginx reload || sudo service nginx restart
  fi
else
  echo "$LOG_PREFIX nginx test failed - not reloading. Please check /etc/nginx/conf.d/elasticbeanstalk for syntax errors"
  sudo nginx -t || true
fi

exit 0

