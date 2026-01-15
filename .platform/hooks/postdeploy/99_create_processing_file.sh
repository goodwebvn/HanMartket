#!/bin/bash
set -e

# Create a processing endpoint in the application current directory if it doesn't exist and fix ownership/permissions.
# On Amazon Linux 2023 Elastic Beanstalk deployments the app is typically deployed to /var/app/current
WEBROOT="/var/app/current"
TARGET="$WEBROOT/processing.php"

if [ ! -d "$WEBROOT" ]; then
  # If the directory doesn't exist yet (unexpected on EB), create it safely
  mkdir -p "$WEBROOT"
fi

if [ ! -f "$TARGET" ]; then
  cat > "$TARGET" <<'PHP'
<?php
// Auto-created processing endpoint. Adjust as needed.
http_response_code(200);
echo "Processing endpoint OK";
PHP
  echo "Created $TARGET"
else
  echo "$TARGET already exists"
fi

# Try to set ownership to common web user on Amazon Linux 2023
if command -v chown >/dev/null 2>&1; then
  chown webapp:webapp "$TARGET" || true
fi
chmod 0644 "$TARGET"

echo "Post-deploy processing file ensured and permissions set."
