# SugarNero

##Install instructions

###Makefile Modification

Inside of `SugarNero/Makefile`, change following lines to your own path(s):

```
Line 1: srcdir = /Users/schakrabarty/Sites/SugarNero
Line 2: builddir = /Users/schakrabarty/Sites/SugarNero
Line 3: top_srcdir = /Users/schakrabarty/Sites/SugarNero
Line 4: top_builddir = /Users/schakrabarty/Sites/SugarNero
Line 20: prefix = /usr/local/Cellar/php55/5.5.26
Line 23: prefix = /usr/local/Cellar/php55/5.5.26
Line 24: phplibdir = /Users/schakrabarty/Sites/SugarNero/modules
Line 25: phpincludedir = /usr/local/Cellar/php55/5.5.26/include/php
Line 34: EXTENSION_DIR =/usr/local/Cellar/php55/5.5.26/lib/php/extensions/no-debug-non-zts-20121212
Line 35: PHP_EXECUTABLE = /usr/local/Cellar/php55/5.5.26/bin/php
Line 38: INCLUDES = -I/usr/local/Cellar/php55/5.5.26/include/php...
Line 179: SugarNero.lo: /Users/schakrabarty/Sites/SugarNero/SugarNero.c
Line 180: 	$(LIBTOOL) --mode=compile $(CC)  -I. -I/Users/schakrabarty/Sites/SugarNero...
```

Inside `SugarNero/SugarNero.la`, change the following line(s) to your own path(s):

```
Line 35: libdir='/Users/schakrabarty/Sites/SugarNero/modules'
```

Change the following in `php.ini`:

```
max_execution_time = 30000
max_input_time = 60000
memory_limit = 512M
```

I remember there was a separate ini file just for sugar, but don't remember where. Change that one as well.

###Running Instructions:
Download SugarParser submodule under `SugarNero/lib`. Final structure should look like `SugarNero/lib/SugarParser/`.

Under `SugarNero/ `, run

```
sudo make clean
sudo make && make install
  udo apachectl restart
```
  




