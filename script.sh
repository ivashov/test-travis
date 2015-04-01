#!/usr/bin/env bash

php -S localhost:8000 -t scripts&
sleep 0.1
python3 test.py
