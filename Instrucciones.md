Instalar PHP Extension Pack en VsCode

Editar el fichero
    sudo vim /etc/php/7.4/apache2/php.ini

El final del fichero debe quedar:
    # BEGIN ANSIBLE MANAGED BLOCK
    zend_extension=/usr/lib/php/20190902/xdebug.so
    xdebug.remote_enable = true
    xdebug.remote_autostart = true
    xdebug.mode = develop,trace,debug
    # END ANSIBLE MANAGED BLOCK

Se ha añadido la línea 11

Reiniciamos apache:
    sudo service apache2 restart
