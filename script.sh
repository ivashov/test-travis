#!/usr/bin/env bash

export PATH="${HOME}/python/bin:${PATH}"

/usr/bin/python3 --version

php -S localhost:8000 -t scripts&
sleep 0.1
python3 test.py
