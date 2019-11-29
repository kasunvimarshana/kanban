<?php
   $path = "http://myserver.com/myfiles/greetings.mp4";
   $filePointer = fopen($path, 'r');
   header('Content-Type: video/mp4');
   fpassthru($filePointer);
?>