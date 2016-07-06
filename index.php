<?php

	include('inc/metadata.php');

	// Load JSON file
	$data_file = file_get_contents('inc/data.json');
	$data = json_decode($data_file, true);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="<?php echo $website_desc; ?>" />
	<meta name="charset" content="utf-8" />

	<title><?php echo $website_title; ?></title>

	<link rel="stylesheet" type="text/css" href="inc/fa/css/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" href="inc/styles.css" />

</head>

<body>

	<header>
		<h1><a href="index.php"><?php echo $website_title; ?></a></h1>
	</header>

<?php 

if(isset($_GET['story_id'])) { // Individual story template

	$id = $_GET['story_id'];

	$letter = substr($id, 0, 1);

?>

<div class="back-button"><a class="btn btn-default" href="index.php">&#8592; Back to all stories</a></div>

<div class="bio_wrapper">

	<div class="letter"><?php echo strtoupper(substr($data[$id]['Name'], 0, 1)); ?></div>

	<h2><?php echo $data[$id]['Name']; ?></h2>

	<p><?php echo $data[$id]['LongBio']; ?></p>
</div>

<div class="audio_player">
	<ol>

<?php

	foreach($data[$id]['Audio'] as $snippet) {

		echo '<li><a href="' . $snippet['URL'] . '"><span class="fa fa-volume-up" aria-hidden="true" style="color:' . $snippet['Emotion'] . '"></span>' . $snippet['Desc'] . '</a></li>';
	}

?>
	</ol>
</div>


<?php

} else { // homepage template
	

?>
<div id="list_wrapper">
	<ol>
		<li class="story">
		<a href="?story_id=1">
			<span class="letter"><?php echo strtoupper(substr($data[1]['Name'], 0, 1)); ?></span>
			<h2><?php echo $data[1]['Name']; ?></h2>
			<p><?php echo $data[1]['ShortBio']; ?></p>
		</a>
		</li>
		<li class="story">
		<a href="?story_id=2">
			<span class="letter"><?php echo strtoupper(substr($data[2]['Name'], 0, 1)); ?></span>
			<h2><?php echo $data[2]['Name']; ?></h2>
			<p><?php echo $data[2]['ShortBio']; ?></p>
		</a>
		</li>
		<li class="story">
		<a href="?story_id=3">
			<span class="letter"><?php echo strtoupper(substr($data[3]['Name'], 0, 1)); ?></span>
			<h2><?php echo $data[3]['Name']; ?></h2>
			<p><?php echo $data[3]['ShortBio']; ?></p>
		</a>
		</li>
		<li class="story">
		<a href="?story_id=4">
			<span class="letter"><?php echo strtoupper(substr($data[4]['Name'], 0, 1)); ?></span>
			<h2><?php echo $data[4]['Name']; ?></h2>
			<p><?php echo $data[4]['ShortBio']; ?></p>
		</a>
		</li>
		<li class="story">
		<a href="?story_id=5">
			<span class="letter"><?php echo strtoupper(substr($data[5]['Name'], 0, 1)); ?></span>
			<h2><?php echo $data[5]['Name']; ?></h2>
			<p><?php echo $data[5]['ShortBio']; ?></p>
		</a>
		</li>
		<li class="story">
		<a href="?story_id=6">
			<span class="letter"><?php echo strtoupper(substr($data[6]['Name'], 0, 1)); ?></span>
			<h2><?php echo $data[6]['Name']; ?></h2>
			<p><?php echo $data[6]['ShortBio']; ?></p>
		</a>
		</li>
		<li class="story">
		<a href="?story_id=7">
			<span class="letter"><?php echo strtoupper(substr($data[7]['Name'], 0, 1)); ?></span>
			<h2><?php echo $data[7]['Name']; ?></h2>
			<p><?php echo $data[7]['ShortBio']; ?></p>
		</a>
		</li>
		<li class="story">
		<a href="?story_id=8">
			<span class="letter"><?php echo strtoupper(substr($data[8]['Name'], 0, 1)); ?></span>
			<h2><?php echo $data[8]['Name']; ?></h2>
			<p><?php echo $data[8]['ShortBio']; ?></p>
		</a>
		</li>
		<li class="story">
		<a href="?story_id=9">
			<span class="letter"><?php echo strtoupper(substr($data[9]['Name'], 0, 1)); ?></span>
			<h2><?php echo $data[9]['Name']; ?></h2>
			<p><?php echo $data[9]['ShortBio']; ?></p>
		</a>
		</li>
		<li class="story">
		<a href="?story_id=10">
			<span class="letter"><?php echo strtoupper(substr($data[10]['Name'], 0, 1)); ?></span>
			<h2><?php echo $data[10]['Name']; ?></h2>
			<p><?php echo $data[10]['ShortBio']; ?></p>
		</a>
		</li>
	</ol>
</div>
<?php

} // end homepage template

?>



	<script src="inc/scripts.js"></script>
</body>
</html>


