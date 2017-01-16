<?php
$settings = parse_ini_file('../db.ini',true);

$ipandport = explode(':',$settings['mcserver']['ip']);
if(empty($ipandport[1]))
{
$ipandport[1] = 25565;
}

	// Edit this ->
	define( 'MQ_SERVER_ADDR', $ipandport[0]);
	define( 'MQ_SERVER_PORT', $ipandport[1]);
	define( 'MQ_TIMEOUT', 1 );
	// Edit this <-

	// Display everything in browser, because some people can't look in logs for errors
	Error_Reporting( E_ALL | E_STRICT );
	Ini_Set( 'display_errors', true );

	require __DIR__ . '/MinecraftServerPing.php';

	$Timer = MicroTime( true );

	$Info = false;
	$Query = null;

	try
	{
		$Query = new MinecraftPing( MQ_SERVER_ADDR, MQ_SERVER_PORT, MQ_TIMEOUT );

		$Info = $Query->Query( );

		if( $Info === false )
		{
			/*
			 * If this server is older than 1.7, we can try querying it again using older protocol
			 * This function returns data in a different format, you will have to manually map
			 * things yourself if you want to match 1.7's output
			 *
			 * If you know for sure that this server is using an older version,
			 * you then can directly call QueryOldPre17 and avoid Query() and then reconnection part
			 */

			$Query->Close( );
			$Query->Connect( );

			$Info = $Query->QueryOldPre17( );
		}
	}
	catch( MinecraftPingException $e )
	{
		$Exception = $e;
	}

	if( $Query !== null )
	{
		$Query->Close( );
	}

	$Timer = Number_Format( MicroTime( true ) - $Timer, 4, '.', '' );



if(isset($Info['players']))
{

echo $Info['description'].'<Br>';
echo 'Players: '.$Info['players']['online'].' / '.$Info['players']['max'].'<br>';
echo 'Ping: '.$Timer;
echo '<br><br>';

}
else
{
echo 'Server is offline.';
}
?>