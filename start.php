<?php

  if ( ! isset ( $padMicro ) ) $padMicro = microtime ( TRUE );
  if ( ! isset ( $padHR )    ) $padHR    = hrtime    ( TRUE );

  $padStartHome = dirname ( __FILE__ );

  if ( ! defined ( 'APP' ) ) include "$padStartHome/app.php";
  if ( ! defined ( 'DAT' ) ) include "$padStartHome/dat.php";
 
  include "$padStartHome/../pad/pad.php";

?>