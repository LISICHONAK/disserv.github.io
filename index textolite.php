if (!-e $request_filename) {rewrite ^/textolite/(.*)$ /textolite/textolite.php?q=$1}
location ~ \.(ini|log)$ {deny all;}