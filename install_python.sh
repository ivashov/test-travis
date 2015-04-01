if [ -d python ]; then
    exit 0
fi

wget https://www.python.org/ftp/python/3.4.3/Python-3.4.3.tar.xz
cd Python-3.4.3
./configure --prefix=$HOME/python
make
make install
