<?php
$input_line = trim(fgets(STDIN));

if (preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\?\*\[|\]%'=~^\{\}\/\+!#&\$\._-])*@([a-zA-Z0-9_-])+\.([a-zA-Z0-9\._-]+)+$/", $input_line)) {
    echo "適切なメールアドレスです";
} else {
    echo "不適切なメールアドレスです";
}
