<?php
require_once "inc/utils.php";
require_once "conf/common.conf.php";

/**
 * Boundary admin level definition
 */
define('BOUNDARY_LEVEL_1'         ,  1);
define('BOUNDARY_LEVEL_COUNTRY'   ,  2);
define('BOUNDARY_LEVEL_SUBCOUNTRY',  3);
define('BOUNDARY_LEVEL_STATE'     ,  4);
define('BOUNDARY_LEVEL_SUBSTATE'  ,  5);
define('BOUNDARY_LEVEL_COUNTY'    ,  6);
define('BOUNDARY_LEVEL_DISTRICT'  ,  7);
define('BOUNDARY_LEVEL_URB'       ,  8);
define('BOUNDARY_LEVEL_SUBURB'    ,  9);
define('BOUNDARY_LEVEL_CATASTRAL' , 10);


/**
 * Protected area boundary type definition
 */

define('BOUNDARY_PA_CLASS_1',  1);
define('BOUNDARY_PA_CLASS_2',  2);
define('BOUNDARY_PA_CLASS_3',  3);
define('BOUNDARY_PA_CLASS_4',  4);
define('BOUNDARY_PA_CLASS_5',  5);
define('BOUNDARY_PA_CLASS_6',  6);
define('BOUNDARY_PA_CLASS_7',  7);
define('BOUNDARY_PA_CLASS_12',  12);
define('BOUNDARY_PA_CLASS_25',  25);


$_BOUNDARY_COLOR = array(5 => '#555555', 8 => '#9a0070',11 => '#f100b0');

$_BOUNDARY_PA_NATURAL_COLOR  = array(10 => '#338800',11 => '#338800');
$_BOUNDARY_PA_WATER_COLOR    = array(10 => '#0000dd',11 => '#0000dd');
$_BOUNDARY_PA_MILITARY_COLOR = array(10 => '#cc0000',11 => '#cc0000');

$RENDER_BOUNDARY_LEVELS = array(
	BOUNDARY_LEVEL_CATASTRAL,
	BOUNDARY_LEVEL_URB,
	BOUNDARY_LEVEL_DISTRICT,
	BOUNDARY_LEVEL_COUNTY,
	BOUNDARY_LEVEL_COUNTRY,
);

/**
 * Zoom => Boundary level x zoom visibility maping 
 */
$BOUNDARY_LEVELS = array (
 5 => range(BOUNDARY_LEVEL_1, BOUNDARY_LEVEL_COUNTRY),
 6 => range(BOUNDARY_LEVEL_1, BOUNDARY_LEVEL_COUNTRY),
 7 => range(BOUNDARY_LEVEL_1, BOUNDARY_LEVEL_STATE),
 8 => range(BOUNDARY_LEVEL_1, BOUNDARY_LEVEL_STATE),
 9 => range(BOUNDARY_LEVEL_1, BOUNDARY_LEVEL_COUNTY),
10 => range(BOUNDARY_LEVEL_1, BOUNDARY_LEVEL_COUNTY),
11 => range(BOUNDARY_LEVEL_1, BOUNDARY_LEVEL_DISTRICT),
12 => range(BOUNDARY_LEVEL_1, BOUNDARY_LEVEL_DISTRICT),
13 => range(BOUNDARY_LEVEL_1, BOUNDARY_LEVEL_DISTRICT),
14 => range(BOUNDARY_LEVEL_1, BOUNDARY_LEVEL_URB),
15 => range(BOUNDARY_LEVEL_1, BOUNDARY_LEVEL_CATASTRAL),
16 => range(BOUNDARY_LEVEL_1, BOUNDARY_LEVEL_CATASTRAL),
17 => range(BOUNDARY_LEVEL_1, BOUNDARY_LEVEL_CATASTRAL),
18 => range(BOUNDARY_LEVEL_1, BOUNDARY_LEVEL_CATASTRAL),
);

/**
 * When to render white background
 */
$BOUNDARY_BACKGROUND = array (
 5 => range(BOUNDARY_LEVEL_1, BOUNDARY_LEVEL_CATASTRAL),
 6 => range(BOUNDARY_LEVEL_1, BOUNDARY_LEVEL_CATASTRAL),
 7 => range(BOUNDARY_LEVEL_1, BOUNDARY_LEVEL_CATASTRAL),
 8 => range(BOUNDARY_LEVEL_1, BOUNDARY_LEVEL_CATASTRAL),
 9 => range(BOUNDARY_LEVEL_1, BOUNDARY_LEVEL_CATASTRAL),
10 => range(BOUNDARY_LEVEL_1, BOUNDARY_LEVEL_CATASTRAL),
11 => range(BOUNDARY_LEVEL_1, BOUNDARY_LEVEL_CATASTRAL),
12 => range(BOUNDARY_LEVEL_1, BOUNDARY_LEVEL_CATASTRAL),
13 => range(BOUNDARY_LEVEL_1, BOUNDARY_LEVEL_CATASTRAL),
14 => range(BOUNDARY_LEVEL_1, BOUNDARY_LEVEL_CATASTRAL),
15 => range(BOUNDARY_LEVEL_1, BOUNDARY_LEVEL_CATASTRAL),	
16 => range(BOUNDARY_LEVEL_1, BOUNDARY_LEVEL_CATASTRAL),	
17 => range(BOUNDARY_LEVEL_1, BOUNDARY_LEVEL_CATASTRAL),	
18 => range(BOUNDARY_LEVEL_1, BOUNDARY_LEVEL_CATASTRAL),	
);

/**
 * When to render glow
 */
$BOUNDARY_GLOW = array (
 5 => range(BOUNDARY_LEVEL_1, BOUNDARY_LEVEL_COUNTRY),
 6 => range(BOUNDARY_LEVEL_1, BOUNDARY_LEVEL_COUNTRY),
 7 => range(BOUNDARY_LEVEL_1, BOUNDARY_LEVEL_COUNTRY),
 8 => range(BOUNDARY_LEVEL_1, BOUNDARY_LEVEL_COUNTRY),
 9 => range(BOUNDARY_LEVEL_1, BOUNDARY_LEVEL_COUNTRY),
10 => range(BOUNDARY_LEVEL_1, BOUNDARY_LEVEL_COUNTRY),
11 => range(BOUNDARY_LEVEL_1, BOUNDARY_LEVEL_COUNTRY),
12 => range(BOUNDARY_LEVEL_1, BOUNDARY_LEVEL_COUNTRY),
13 => range(BOUNDARY_LEVEL_1, BOUNDARY_LEVEL_COUNTRY),
14 => range(BOUNDARY_LEVEL_1, BOUNDARY_LEVEL_COUNTRY),
15 => range(BOUNDARY_LEVEL_1, BOUNDARY_LEVEL_COUNTRY),	
16 => range(BOUNDARY_LEVEL_1, BOUNDARY_LEVEL_COUNTRY),	
17 => range(BOUNDARY_LEVEL_1, BOUNDARY_LEVEL_COUNTRY),	
18 => range(BOUNDARY_LEVEL_1, BOUNDARY_LEVEL_COUNTRY),	
);

/**
 * Boundary color level x zoom maping
 */
$BOUNDARY_COLOR = array(
BOUNDARY_LEVEL_1          => $_BOUNDARY_COLOR,
BOUNDARY_LEVEL_COUNTRY    => $_BOUNDARY_COLOR,
BOUNDARY_LEVEL_SUBCOUNTRY => $_BOUNDARY_COLOR,
BOUNDARY_LEVEL_STATE      => $_BOUNDARY_COLOR,
BOUNDARY_LEVEL_SUBSTATE   => $_BOUNDARY_COLOR,
BOUNDARY_LEVEL_COUNTY     => $_BOUNDARY_COLOR,
BOUNDARY_LEVEL_DISTRICT   => $_BOUNDARY_COLOR,
BOUNDARY_LEVEL_URB        => $_BOUNDARY_COLOR,
BOUNDARY_LEVEL_SUBURB     => $_BOUNDARY_COLOR,
BOUNDARY_LEVEL_CATASTRAL  => $_BOUNDARY_COLOR,
);

/**
 * Boundary width level x zoom maping
 */
$BOUNDARY_WIDTH = array(
BOUNDARY_LEVEL_1          => array( 5 => 0.3, 8 => 2, 11 => 3, 13 => 4, 15 => 8),
BOUNDARY_LEVEL_COUNTRY    => array( 5 => 0.3, 8 => 2, 13 => 3, 15 => 6),
BOUNDARY_LEVEL_SUBCOUNTRY => array( 5 => 0.2, 8 => 1, 13 => 2, 15 => 6),
BOUNDARY_LEVEL_STATE      => array( 6 => 0.2, 8 => 1, 13 => 2, 15 => 6),
BOUNDARY_LEVEL_SUBSTATE   => array( 7 => 0.2, 8 => 1, 13 => 2, 15 => 6),
BOUNDARY_LEVEL_COUNTY     => array( 8 => 1, 11 => 2, 13 => 3, 15 => 6),
BOUNDARY_LEVEL_DISTRICT   => array(         11 => 1, 13 => 2, 15 => 4),
BOUNDARY_LEVEL_URB        => array(12 => 0.6, 13 => 0.8, 15 => 2),
BOUNDARY_LEVEL_SUBURB     => array(12 => 0.6, 13 => 0.8, 15 => 2),
BOUNDARY_LEVEL_CATASTRAL  => array(15 => 1),
);

/**
 * Boundary opacity level x zoom maping
 */
$BOUNDARY_OPACITY = array(
BOUNDARY_LEVEL_1          => array( 8 => 0.4),
BOUNDARY_LEVEL_COUNTRY    => array( 8 => 0.4, 10 => 0.4),
BOUNDARY_LEVEL_SUBCOUNTRY => array( 8 => 0.4, 12 => 0.4),
BOUNDARY_LEVEL_STATE      => array( 8 => 0.4, 13 => 0.4),
BOUNDARY_LEVEL_SUBSTATE   => array( 8 => 0.4, 14 => 0.4),
BOUNDARY_LEVEL_COUNTY     => array( 8 => 0.4, 15 => 0.4),
BOUNDARY_LEVEL_DISTRICT   => array(10 => 0.4, 16 => 0.4),
BOUNDARY_LEVEL_URB        => array(12 => 0.4, 17 => 0.4),
BOUNDARY_LEVEL_SUBURB     => array(14 => 0.4, 18 => 0.4),
BOUNDARY_LEVEL_CATASTRAL  => array(15 => 0.4, 19 => 0.4),
);


$BOUNDARY_RENDER_DASH = array (
 5 => range(BOUNDARY_LEVEL_1, BOUNDARY_LEVEL_COUNTRY),
 6 => range(BOUNDARY_LEVEL_1, BOUNDARY_LEVEL_COUNTRY),
 7 => range(BOUNDARY_LEVEL_1, BOUNDARY_LEVEL_COUNTRY),
 8 => range(BOUNDARY_LEVEL_1, BOUNDARY_LEVEL_COUNTRY),
 9 => range(BOUNDARY_LEVEL_1, BOUNDARY_LEVEL_COUNTRY),
10 => range(BOUNDARY_LEVEL_1, BOUNDARY_LEVEL_CATASTRAL),
11 => range(BOUNDARY_LEVEL_1, BOUNDARY_LEVEL_CATASTRAL),
12 => range(BOUNDARY_LEVEL_1, BOUNDARY_LEVEL_CATASTRAL),
13 => range(BOUNDARY_LEVEL_1, BOUNDARY_LEVEL_CATASTRAL),
14 => range(BOUNDARY_LEVEL_1, BOUNDARY_LEVEL_CATASTRAL),
15 => range(BOUNDARY_LEVEL_1, BOUNDARY_LEVEL_CATASTRAL),
16 => range(BOUNDARY_LEVEL_1, BOUNDARY_LEVEL_CATASTRAL),
17 => range(BOUNDARY_LEVEL_1, BOUNDARY_LEVEL_CATASTRAL),
18 => range(BOUNDARY_LEVEL_1, BOUNDARY_LEVEL_CATASTRAL),
);

/**
 * Boundary opacity level x zoom maping
 */
$BOUNDARY_DASH = array(
BOUNDARY_LEVEL_1          => array( 8 => array(5,1,2,1)),
BOUNDARY_LEVEL_COUNTRY    => array( 8 => array(10,3,2,3)),
BOUNDARY_LEVEL_SUBCOUNTRY => array(10 => array(10,3,2,3)),
BOUNDARY_LEVEL_STATE      => array(10 => array(10,3,2,3)),
BOUNDARY_LEVEL_SUBSTATE   => array(10 => array(10,3,2,3)),
BOUNDARY_LEVEL_COUNTY     => array(10 => array(10,3,2,3),13 => array(10,3,2,3),15 => array(12,6,6,6) ),
BOUNDARY_LEVEL_DISTRICT   => array(11 => array( 8,2,2,2)),
BOUNDARY_LEVEL_URB        => array( 8 => array(10,2,2,2)),
BOUNDARY_LEVEL_SUBURB     => array( 8 => array(10,2,2,2)),
BOUNDARY_LEVEL_CATASTRAL  => array( 8 => array(10,2,2,2)),
);

/**
 * Boundary glow color level x zoom maping
 */
$BOUNDARY_GLOW_COLOR = array(
BOUNDARY_LEVEL_1          => $_BOUNDARY_COLOR,
BOUNDARY_LEVEL_COUNTRY    => $_BOUNDARY_COLOR,
BOUNDARY_LEVEL_SUBCOUNTRY => $_BOUNDARY_COLOR,
BOUNDARY_LEVEL_STATE      => $_BOUNDARY_COLOR,
BOUNDARY_LEVEL_SUBSTATE   => $_BOUNDARY_COLOR,
BOUNDARY_LEVEL_COUNTY     => $_BOUNDARY_COLOR,
BOUNDARY_LEVEL_DISTRICT   => $_BOUNDARY_COLOR,
BOUNDARY_LEVEL_URB        => $_BOUNDARY_COLOR,
BOUNDARY_LEVEL_SUBURB     => $_BOUNDARY_COLOR,
BOUNDARY_LEVEL_CATASTRAL  => $_BOUNDARY_COLOR,
);

/**
 * Boundary glow width level x zoom maping
 */
$BOUNDARY_GLOW_WIDTH = array(
BOUNDARY_LEVEL_1          => array( 8 => 10, 13 => 30),
BOUNDARY_LEVEL_COUNTRY    => array( 8 => 10, 15 => 40),
BOUNDARY_LEVEL_SUBCOUNTRY => array( 8 => 1, 9 => 1, 13 => 8),
BOUNDARY_LEVEL_STATE      => array( 8 => 1, 9 => 1, 14 => 8),
BOUNDARY_LEVEL_SUBSTATE   => array( 8 => 0.8,10 => 1, 14 => 8),
BOUNDARY_LEVEL_COUNTY     => array( 8 => 0.6,11 => 1, 15 => 8),
BOUNDARY_LEVEL_DISTRICT   => array(10 => 0.6,12 => 1, 16 => 7),
BOUNDARY_LEVEL_URB        => array(12 => 0.6,13 => 1, 17 => 6),
BOUNDARY_LEVEL_SUBURB     => array(14 => 0.6,15 => 1, 18 => 5),
BOUNDARY_LEVEL_CATASTRAL  => array(15 => 0.6,16 => 1, 19 => 4),
);

/**
 * Boundary glow opacity level x zoom maping
 */
$BOUNDARY_GLOW_OPACITY = array(
BOUNDARY_LEVEL_1          => array( 7 => 0.0,10 => 0.2),
BOUNDARY_LEVEL_COUNTRY    => array( 7 => 0.0,10 => 0.2),
BOUNDARY_LEVEL_SUBCOUNTRY => array( 8 => 0.2,10 => 0.2),
BOUNDARY_LEVEL_STATE      => array( 8 => 0.2,10 => 0.2),
BOUNDARY_LEVEL_SUBSTATE   => array( 8 => 0.2,10 => 0.2),
BOUNDARY_LEVEL_COUNTY     => array( 8 => 0.2,10 => 0.2),
BOUNDARY_LEVEL_DISTRICT   => array(10 => 0.2,10 => 0.2),
BOUNDARY_LEVEL_URB        => array(12 => 0.2,10 => 0.2),
BOUNDARY_LEVEL_SUBURB     => array(14 => 0.2,10 => 0.2),
BOUNDARY_LEVEL_CATASTRAL  => array(15 => 0.2,10 => 0.2),
);






$RENDER_BOUNDARY_PA_CLASSES = array(
	BOUNDARY_PA_CLASS_1,
	BOUNDARY_PA_CLASS_2,
	BOUNDARY_PA_CLASS_3,
	BOUNDARY_PA_CLASS_4,
	BOUNDARY_PA_CLASS_5,
	BOUNDARY_PA_CLASS_6,
	BOUNDARY_PA_CLASS_7,
	BOUNDARY_PA_CLASS_12,
	BOUNDARY_PA_CLASS_25,
);

$BOUNDARY_PA_ALL_CLASSES = array_merge(range(BOUNDARY_PA_CLASS_1, BOUNDARY_PA_CLASS_7),array(BOUNDARY_PA_CLASS_12,BOUNDARY_PA_CLASS_25));

/**
 * Zoom => Protected Area Boundary level x zoom visibility maping 
 */
$BOUNDARY_PA_CLASSES = array (
 5 => array(),
 6 => array(),
 7 => array(),
 8 => array(),
 9 => array(),
10 => array_merge(range(BOUNDARY_PA_CLASS_1, BOUNDARY_PA_CLASS_4),array(BOUNDARY_PA_CLASS_25)),
11 => array_merge(range(BOUNDARY_PA_CLASS_1, BOUNDARY_PA_CLASS_5),array(BOUNDARY_PA_CLASS_25)),
12 => array_merge(range(BOUNDARY_PA_CLASS_1, BOUNDARY_PA_CLASS_6),array(BOUNDARY_PA_CLASS_25)),
13 => array_merge(range(BOUNDARY_PA_CLASS_1, BOUNDARY_PA_CLASS_7),array(BOUNDARY_PA_CLASS_25)),
14 => $BOUNDARY_PA_ALL_CLASSES,
15 => $BOUNDARY_PA_ALL_CLASSES,
16 => $BOUNDARY_PA_ALL_CLASSES,
17 => $BOUNDARY_PA_ALL_CLASSES,
18 => $BOUNDARY_PA_ALL_CLASSES,
);

/**
 * When to render white background
 */
$BOUNDARY_PA_BACKGROUND = array (
 5 => $BOUNDARY_PA_ALL_CLASSES,
 6 => $BOUNDARY_PA_ALL_CLASSES,
 7 => $BOUNDARY_PA_ALL_CLASSES,
 8 => $BOUNDARY_PA_ALL_CLASSES,
 9 => $BOUNDARY_PA_ALL_CLASSES,
10 => $BOUNDARY_PA_ALL_CLASSES,
11 => $BOUNDARY_PA_ALL_CLASSES,
12 => $BOUNDARY_PA_ALL_CLASSES,
13 => $BOUNDARY_PA_ALL_CLASSES,
14 => $BOUNDARY_PA_ALL_CLASSES,
15 => $BOUNDARY_PA_ALL_CLASSES,
16 => $BOUNDARY_PA_ALL_CLASSES,
17 => $BOUNDARY_PA_ALL_CLASSES,
18 => $BOUNDARY_PA_ALL_CLASSES,
);

/**
 * When to render glow
 */
$BOUNDARY_PA_GLOW = array (
 5 => array(BOUNDARY_PA_CLASS_1,BOUNDARY_PA_CLASS_25),
 6 => array(BOUNDARY_PA_CLASS_1,BOUNDARY_PA_CLASS_25),
 7 => array(BOUNDARY_PA_CLASS_1,BOUNDARY_PA_CLASS_25),
 8 => array(BOUNDARY_PA_CLASS_1,BOUNDARY_PA_CLASS_25),
 9 => array(BOUNDARY_PA_CLASS_1,BOUNDARY_PA_CLASS_25),
10 => array(BOUNDARY_PA_CLASS_1,BOUNDARY_PA_CLASS_25),
11 => array(BOUNDARY_PA_CLASS_1,BOUNDARY_PA_CLASS_25),
12 => array(BOUNDARY_PA_CLASS_1,BOUNDARY_PA_CLASS_25),
13 => array(BOUNDARY_PA_CLASS_1,BOUNDARY_PA_CLASS_25),
14 => array(BOUNDARY_PA_CLASS_1,BOUNDARY_PA_CLASS_25),
15 => array(BOUNDARY_PA_CLASS_1,BOUNDARY_PA_CLASS_25),
16 => array(BOUNDARY_PA_CLASS_1,BOUNDARY_PA_CLASS_25),
17 => array(BOUNDARY_PA_CLASS_1,BOUNDARY_PA_CLASS_25),
18 => array(BOUNDARY_PA_CLASS_1,BOUNDARY_PA_CLASS_25),
);

/**
 * Protected Area Boundary color level x zoom maping
 */
$BOUNDARY_PA_COLOR = array(
BOUNDARY_PA_CLASS_1 => $_BOUNDARY_PA_NATURAL_COLOR,
BOUNDARY_PA_CLASS_2 => $_BOUNDARY_PA_NATURAL_COLOR,
BOUNDARY_PA_CLASS_3 => $_BOUNDARY_PA_NATURAL_COLOR,
BOUNDARY_PA_CLASS_4 => $_BOUNDARY_PA_NATURAL_COLOR,
BOUNDARY_PA_CLASS_5 => $_BOUNDARY_PA_NATURAL_COLOR,
BOUNDARY_PA_CLASS_6 => $_BOUNDARY_PA_NATURAL_COLOR,
BOUNDARY_PA_CLASS_7 => $_BOUNDARY_PA_NATURAL_COLOR,
BOUNDARY_PA_CLASS_12 => $_BOUNDARY_PA_WATER_COLOR,
BOUNDARY_PA_CLASS_25 => $_BOUNDARY_PA_MILITARY_COLOR,
);



/**
 * Protected Area Boundary width level x zoom maping
 */
/*
$BOUNDARY_PA_WIDTH = array(
BOUNDARY_PA_CLASS_1 => array( 10 => 2, 13 => 4, 15 => 3),
BOUNDARY_PA_CLASS_2 => array( 10 => 12, 15 => 12),
BOUNDARY_PA_CLASS_3 => array( 10 => 1, 15 => 2),
BOUNDARY_PA_CLASS_4 => array( 11 => 1, 15 => 2),
BOUNDARY_PA_CLASS_5 => array( 12 => 10, 15 => 10),
BOUNDARY_PA_CLASS_6 => array( 13 => 1, 15 => 1),
BOUNDARY_PA_CLASS_7 => array( 13 => 1, 15 => 1),
BOUNDARY_PA_CLASS_12 => array( 11 => 1, 15 => 1),
BOUNDARY_PA_CLASS_25 => array( 10 => 2, 15 => 2),
);
*/

/**
 * Protected Area Boundary opacity level x zoom maping
 */
$BOUNDARY_PA_OPACITY = array(
BOUNDARY_PA_CLASS_1 => array( 8 => 1.0),
BOUNDARY_PA_CLASS_2 => array( 8 => 0.9),
BOUNDARY_PA_CLASS_3 => array( 8 => 0.8),
BOUNDARY_PA_CLASS_4 => array( 8 => 0.7),
BOUNDARY_PA_CLASS_5 => array( 8 => 0.6),
BOUNDARY_PA_CLASS_6 => array( 8 => 0.5),
BOUNDARY_PA_CLASS_7 => array( 8 => 0.4),
BOUNDARY_PA_CLASS_12 => array( 8 => 0.9),
BOUNDARY_PA_CLASS_25 => array( 8 => 0.9),
);


$BOUNDARY_PA_RENDER_DASH = array (
 5 => $BOUNDARY_PA_ALL_CLASSES,
 6 => $BOUNDARY_PA_ALL_CLASSES,
 7 => $BOUNDARY_PA_ALL_CLASSES,
 8 => $BOUNDARY_PA_ALL_CLASSES,
 9 => $BOUNDARY_PA_ALL_CLASSES,
10 => $BOUNDARY_PA_ALL_CLASSES,
11 => $BOUNDARY_PA_ALL_CLASSES,
12 => $BOUNDARY_PA_ALL_CLASSES,
13 => $BOUNDARY_PA_ALL_CLASSES,
14 => $BOUNDARY_PA_ALL_CLASSES,
15 => $BOUNDARY_PA_ALL_CLASSES,
16 => $BOUNDARY_PA_ALL_CLASSES,
17 => $BOUNDARY_PA_ALL_CLASSES,
18 => $BOUNDARY_PA_ALL_CLASSES,
);

/**
 * Protected Area Boundary opacity level x zoom maping
 */
$BOUNDARY_PA_DASH = array(
BOUNDARY_PA_CLASS_1 => array(10 => array(8,2,4,2)),
BOUNDARY_PA_CLASS_2 => array(10 => array(8,2,4,2)),
BOUNDARY_PA_CLASS_3 => array(10 => array(8,2,4,2)),
BOUNDARY_PA_CLASS_4 => array(10 => array(8,2,4,2)),
BOUNDARY_PA_CLASS_5 => array(10 => array(8,2,4,2)),
BOUNDARY_PA_CLASS_6 => array(10 => array(8,2,4,2)),
BOUNDARY_PA_CLASS_7 => array(11 => array(8,2,4,2)),
BOUNDARY_PA_CLASS_12 => array(11 => array(8,2,4,2)),
BOUNDARY_PA_CLASS_25 => array(11 => array(8,2,4,2)),
);

/**
 * Protected Area Boundary glow color level x zoom maping
 */
$BOUNDARY_PA_GLOW_COLOR = array(
BOUNDARY_PA_CLASS_1 => $_BOUNDARY_PA_NATURAL_COLOR,
BOUNDARY_PA_CLASS_2 => $_BOUNDARY_PA_NATURAL_COLOR,
BOUNDARY_PA_CLASS_3 => $_BOUNDARY_PA_NATURAL_COLOR,
BOUNDARY_PA_CLASS_4 => $_BOUNDARY_PA_NATURAL_COLOR,
BOUNDARY_PA_CLASS_5 => $_BOUNDARY_PA_NATURAL_COLOR,
BOUNDARY_PA_CLASS_6 => $_BOUNDARY_PA_NATURAL_COLOR,
BOUNDARY_PA_CLASS_7 => $_BOUNDARY_PA_NATURAL_COLOR,
BOUNDARY_PA_CLASS_12 => array(10 => '#0000dd',11 => '#0000dd'),
BOUNDARY_PA_CLASS_25 => array(10 => '#cc0000',11 => '#cc0000'),

);

/**
 * Protected Area Boundary glow width level x zoom maping
 */
$BOUNDARY_PA_GLOW_WIDTH = array(
    220 => array( 8 => 1.5),
    470 => array( 8 => 1.5),
   1000 => array( 8 => 1.9),
   2200 => array( 8 => 2.4),
   4700 => array( 8 => 3.0),
  10000 => array( 8 => 3.7),
  22000 => array( 8 => 4.5),
  47000 => array( 8 => 5.4),
 100000 => array( 8 => 6.4), 
 220000 => array( 8 => 7.5), 
 470000 => array( 8 => 8.6), 
1000000 => array( 8 => 9.8), 
);

/**
 * Protected Area Boundary glow opacity level x zoom maping
 */
$BOUNDARY_PA_GLOW_OPACITY = array(
BOUNDARY_PA_CLASS_1 => array( 7 => 0.2,10 => 0.2),
BOUNDARY_PA_CLASS_2 => array( 7 => 0.0,10 => 0.0),
BOUNDARY_PA_CLASS_3 => array( 8 => 0.2,10 => 0.3),
BOUNDARY_PA_CLASS_4 => array( 8 => 0.2,10 => 0.3),
BOUNDARY_PA_CLASS_5 => array( 8 => 0.0,10 => 0.0),
BOUNDARY_PA_CLASS_6 => array( 8 => 0.2,10 => 0.2),
BOUNDARY_PA_CLASS_7 => array(10 => 0.2,10 => 0.2),
BOUNDARY_PA_CLASS_12 => array(10 => 0.2,10 => 0.2),
BOUNDARY_PA_CLASS_25 => array( 9 => 0.2,11 => 0.2),
);


$BOUNDARY_PA_WIDTH = array(    
    220 => array( 8 => 0.8),
    470 => array( 8 => 1.0),
   1000 => array( 8 => 1.2),
   2200 => array( 8 => 1.5),
   4700 => array( 8 => 1.9),
  10000 => array( 8 => 2.4),
  22000 => array( 8 => 3.0),
  47000 => array( 8 => 3.7),
 100000 => array( 8 => 4.5), 
 220000 => array( 8 => 5.4), 
 470000 => array( 8 => 6.4), 
1000000 => array( 8 => 7.5), 
);

$BOUNDARY_PA_MINIMAL_AREA = $_MINIMAL_AREA;
