<!doctype html>

<html>

<head>

<title>Blog :: Titus Dillon</title>
<link rel='stylesheet' type='text/css' href='style.css'>


</head>

<body>

<div id=backDiv></div>
<div id=bannerDiv>
	<div>
	
		<a href="home.html"><img id=prof src="images/td669_img_sq.jpg" alt="Titus Dillon"></a>
		
		<table id=links>
		<tr>
			<td><a class=link href="home.html">Home</a></td>
			<td><a class=link id=bright href="blog.php">Blog</a></td>
			<td><a class=link href="resume.html">Resume</a></td>
			<td><a class=link href="contact.html">Contact</a></td>
		</tr>
		</table>
	</div>
</div>

<div id=content>

<br><br><br>
<br><br><br><br>

<table id=textTable>
<?php


// FILE METHOD /////
/*
$file = fopen("posts.fil","r");

$record = fgets($file);

while(!feof($file)) {
	
	$record = trim($record);
	$title = $record;
	
	$record = fgets($file);
	$record = trim($record);
	$date = $record;
	
	$record = fgets($file);
	$record = trim($record);
	$post = $record;
	
	echo "	<tr class=textTabTr>
		<td class=textTabTd>
			<h3><u>$title</u></h3><h4 style='float:right'>$date</h4>
			<p style='width:67%'>
			$post
			</p>
		</td>
	</tr>\n";
	
	$record = fgets($file);
	if ($record.length < 2) {
		$record = fgets($file);
	}
}
fclose($file);
*/

// DATABASE METHOD /////
/*
$dns = 'mysql:host=;dbname=';
$db = new PDO($dns, 'username_here', 'password_here');
$query = $db->prepare("SELECT * FROM Posts ORDER BY id DESC;");
$query->execute();
foreach($query->fetchAll(PDO::FETCH_ASSOC) as $row) {
	echo "	<tr class=textTabTr>
		<td class=textTabTd>
			<h3><u>{$row['title']}</u></h3><h4 style='float:right'>{$row['date']}</h4>
			<p style='width:67%'>
			{$row['post']}
			</p>
		</td>
	</tr>\n";
}
*/

?>
</table>
</div>

<div id=footSpaceDiv>
&emsp;
</div>

<div id=footDiv>
<table id=footTab>
	<tr>
		<td>
			
		</td>
	</tr>
</table>
</div>
</body>

</html>