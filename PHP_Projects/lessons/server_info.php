<?php
# $_SERVER SUPERGLOBAL

// Create Server Array
$server = [
    'Host Server Name' => $_SERVER['SERVER_NAME'],
    'Host Header' => $_SERVER['HTTP_HOST'],
    'Server Software' => $_SERVER['SERVER_SOFTWARE'],
    'Document Root' => $_SERVER['DOCUMENT_ROOT'],
    'Current Page' => $_SERVER['PHP_SELF'],
    'Script Name' => $_SERVER['SCRIPT_NAME'],
    'Absolute Path' => $_SERVER['SCRIPT_FILENAME']
];

//print_r($server);

// Create Client Array
$client = [
    'Client System info' => $_SERVER['HTTP_USER_AGENT'],
    'Client IP' => $_SERVER['REMOTE_ADDR'],
    'Remote Port' => $_SERVER['REMOTE_PORT'],
    'Request Method' => $_SERVER['REQUEST_METHOD'],
    'PHP Self' => $_SERVER['PHP_SELF']
];

//print_r($client);
?>

<html>
<head>
	<title>System Info</title>
</head>
<body>
		<h1>Server and File Info</h1>
		<?php if($server): ?>
			<ul>
			<?php foreach($server as $key => $value): ?>
					<li>
					<strong><?php echo $key; ?>: </strong>
					<?php echo $value; ?>
					</li>
			<?php endforeach; ?>
			</ul>
		<?php endif; ?>

		<h1>Client Info</h1>
		<?php if($client): ?>
			<ul>
			<?php foreach($client as $key => $value): ?>
					<li>
					<strong><?php echo $key; ?>: </strong>
					<?php echo $value; ?>
					</li>
			<?php endforeach; ?>
			</ul>
		<?php endif; ?>
</body>
</html>