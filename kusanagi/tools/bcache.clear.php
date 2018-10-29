<?php
$_SERVER['HTTP_HOST'] = 'kusanagi.local';
define( 'SHORTINIT', true );
require_once( '../DocumentRoot/wp-load.php' );

$ret = $wpdb->get_results( 'show tables', ARRAY_N );
foreach ($ret as $row) {
	$t = $row[0];
	if ( preg_match( '/site_cache$/', $t ) ) {
		$sql = 'truncate table `' . $wpdb->escape( $t, 'recursive' ) . '`';
		echo $sql ."\n";
		$wpdb->query( $sql );
	}
}

