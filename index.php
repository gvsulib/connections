<?php

	include('inc/metadata.php');

	// Load JSON file
	$data_file = file_get_contents('inc/data.json');
	$data = json_decode($data_file, true);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<meta name="description" content="<?php echo $website_desc; ?>" />
	<meta name="charset" content="utf-8" />

	<title><?php echo $website_title; ?> :: A GVSU Libraries Exhibit</title>

	<link rel="stylesheet" href="inc/fa/css/font-awesome.min.css" />
	<link  rel="stylesheet" href="https://fonts.googleapis.com/css?family=Pathway+Gothic+One" />
	<link rel="stylesheet" href="inc/styles.css" />
<link href="styles.css" >

</head>

<body>

	<header>
		<h1><a href="index.php">Audio Stories</a></h1>
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

		echo '<li><a href="' . $snippet['URL'] . '" class="sm2_link"><span class="fa fa-volume-up" aria-hidden="true" style="color:' . $snippet['Emotion'] . '"></span>' . $snippet['Desc'] . '</a> <a href="' . $data[$id]['ShortTranscript'] . '" class="short-transcript transcript" title="Read Transcript"><i class="fa fa-file-text-o"></i><span class="acc-hide">Transcript</span></a></li>';
	}

?>
	</ol>
</div>
<div style="clear: both;"></div>
<div class="full-interview">
<ul>
	<li><a href="<?php echo $data[$id]['FullInterview']; ?>"><i class="fa fa-volume-up"></i> Listen to the Full Interview (<?php echo $data[$id]['FullInterviewTime']; ?>)</a></li>
	<li><a href="<?php echo $data[$id]['FullTranscript']; ?>" class="transcript"><i class="fa fa-file-text-o"></i> Read the full transcript</a></li>
</ul>
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

  <script src="http://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
	<script src="inc/soundmanager2.js"></script>
	<script src="inc/inlinemp3.js"></script>
	<script src="inc/scripts.js"></script>
	<script>
soundManager.setup({
  onready: function() {
    // Ready to use; soundManager.createSound() etc. can now be called.
  }
});
</script>
</body>
</html>
