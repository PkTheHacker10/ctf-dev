#!/bin/bash
# Start Apache service
service apache2 start

# Keep the container running
tail -f /dev/null
