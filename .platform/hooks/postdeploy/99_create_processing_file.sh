#!/bin/bash
set -e

# Create a processing endpoint in webroot if it doesn't exist and fix ownership/permissions.
WEBROOT="/var/www/html"
TARGET="$WEBROOT/processing.php"

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

