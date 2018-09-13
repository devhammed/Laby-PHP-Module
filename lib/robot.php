<?php

  define( 'laby_name_Void', 0 );
  define( 'laby_name_Wall', 1 );
  define( 'laby_name_Rock', 2 );
  define( 'laby_name_Web', 3 );
  define( 'laby_name_Exit', 4 );
  define( 'laby_name_Unknown', 5 );

  function output( $s ) {
    echo $s . PHP_EOL;
  }

  function input() {
    $line = fgets( STDIN );
    if ( $line == 'quit\n' ) {
      exit( 0 );
    }
    return $line;
  }

  function laby_name_left() {
    output( 'left' );
    input();
  }

  function laby_name_right() {
    output( 'right' );
    input();
  }

  function laby_name_forward() {
    output( 'forward' );
    input();
  }

  function laby_name_take() {
    output( 'take');
    input();
  }

  function laby_name_drop() {
    output( 'drop' );
    input();
  }

  function laby_name_escape() {
    output( 'escape' );
    input();
  }

  function laby_name_say( $s ) {
    output( 'say ' . $s );
    input();
  }

  function laby_name_look() {
    output( 'look' );
    $ans = input();
    if ( $ans == 'void\n' ) {
      return laby_name_Void;
    }
    if ( $ans == 'wall\n' ) {
      return laby_name_Wall;
    }
    if ( $ans == 'rock\n' ) {
      return laby_name_Rock;
    }
    if ( $ans == 'web\n' ) {
      return laby_name_Web;
    }
    if ( $ans == 'exit\n' ) {
      return laby_name_Exit;
    }
    return laby_name_Unknown;
  }

  output( 'start' );
  input();

