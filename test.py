#!/usr/bin/env python3

import urllib.request
import unittest

class TestTest(unittest.TestCase):
    def test_test(self):
        req = urllib.request.Request(url="http://localhost:8000/test.php")
        with urllib.request.urlopen(req) as f:
            response = f.read().decode('utf-8')
            self.assertEqual(response, "Test");




if __name__ == "__main__":
    unittest.main()

