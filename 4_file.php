<?php
file_put_contents("data.txt","Hello\n");
file_put_contents("data.txt","World\n",FILE_APPEND);

echo nl2br(file_get_contents("data.txt"));
?>