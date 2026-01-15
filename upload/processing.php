<?php
// Processing endpoint included in repository so Elastic Beanstalk receives it in the bundle.
// Adjust the implementation to your application's needs.
// This file is intentionally tiny for safety.

http_response_code(200);
echo "Processing endpoint OK";

