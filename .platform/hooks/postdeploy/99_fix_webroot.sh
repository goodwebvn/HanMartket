#!/usr/bin/env bash
set -euo pipefail

# Ensure webroot has config.php and index.php that point to upload/ files.
# Safe: only creates symlinks or copies if targets are missing.

APP_ROOT="/var/app/current"
UPLOAD_DIR="$APP_ROOT/upload"
SRC_CONFIG="$UPLOAD_DIR/config.php"
TARGET_CONFIG="$UPLOAD_DIR/config.php"
SRC_INDEX="$UPLOAD_DIR/index.php"
TARGET_INDEX="$UPLOAD_DIR/index.php"
LOG_PREFIX="[eb-postdeploy-fix-webroot]"

echo "$LOG_PREFIX running: pwd=$(pwd)"

# If the upload dir exists in deploy, try to ensure web root points to upload
if [ -d "$UPLOAD_DIR" ]; then
  echo "$LOG_PREFIX found upload dir: $UPLOAD_DIR"

  # Ensure config.php exists in webroot (symlink to upload/config.php or copy if symlink fails)
  if [ -f "$SRC_CONFIG" ]; then
    if [ -e "$TARGET_CONFIG" ]; then
      echo "$LOG_PREFIX target config already exists: $TARGET_CONFIG"
    else
      echo "$LOG_PREFIX creating symlink for config.php -> $SRC_CONFIG"
      if sudo ln -s "$SRC_CONFIG" "$TARGET_CONFIG" 2>/dev/null; then
        echo "$LOG_PREFIX symlink created"
      else
        echo "$LOG_PREFIX symlink failed, copying file instead"
        sudo cp -a "$SRC_CONFIG" "$TARGET_CONFIG"
      fi
      sudo chown root:root "$TARGET_CONFIG" || true
      sudo chmod 644 "$TARGET_CONFIG" || true
    fi
  else
    echo "$LOG_PREFIX source config not found at $SRC_CONFIG - skipping"
  fi

  # Ensure index.php exists in webroot (symlink to upload/index.php)
  if [ -f "$SRC_INDEX" ]; then
    if [ -e "$TARGET_INDEX" ]; then
      echo "$LOG_PREFIX target index already exists: $TARGET_INDEX"
    else
      echo "$LOG_PREFIX creating symlink for index.php -> $SRC_INDEX"
      if sudo ln -s "$SRC_INDEX" "$TARGET_INDEX" 2>/dev/null; then
        echo "$LOG_PREFIX symlink created for index.php"
      else
        echo "$LOG_PREFIX symlink failed for index.php - copying instead"
        sudo cp -a "$SRC_INDEX" "$TARGET_INDEX"
      fi
      sudo chown root:root "$TARGET_INDEX" || true
      sudo chmod 644 "$TARGET_INDEX" || true
    fi
  else
    echo "$LOG_PREFIX source index not found at $SRC_INDEX - skipping"
  fi

else
  echo "$LOG_PREFIX upload dir not present at $UPLOAD_DIR - nothing to do"
fi

# Print nginx test (don't reload here)
if command -v nginx >/dev/null 2>&1; then
  echo "$LOG_PREFIX testing nginx configuration"
  sudo nginx -t || true
fi

exit 0

