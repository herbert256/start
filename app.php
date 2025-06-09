<?php

  $parts = $_SERVER ['SCRIPT_NAME'] ?? '';
  $parts = str_replace ( '.php', '', $parts);
  $parts = str_replace ( DIRECTORY_SEPARATOR , '/', $parts);
  $parts = explode ( '/', $parts );
  $parts = array_reverse ( $parts );

  $app = 'pad';

  foreach ( $parts as $part ) 
    if ( $part and file_exists ( "$padStartHome/../apps/$part") ) {
      $app = $part;
      break;
    }

  define ( 'APP', "$padStartHome/../apps/$app/" );
  
  unset ( $app, $parts, $part );

?>