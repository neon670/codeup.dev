<?php

$favoriteFoods = ['Brownies', 'Pound Cake', 'Doughnuts', 'Stir Fry', 'Steak'];
$year = date('Y');

?>

<!DOCTYPE html>
<html>
<head>
    <title>Codeup!</title>
</head>
<body>
    <h1>My Favorite Foods <?php echo $year; ?></h1>
    <ol>
    <?php foreach ($favoriteFoods as $favoriteFood) { ?>
        <li><?= $favoriteFood;  ?></li>
        <!--  is the same as <?php echo " "?> -->
    <?php } ?>
    </ol>
    <div id="muteYouTubeVideoPlayer"><iframe  style="width: 100%; height: 1000px; position: relative; top: 50%; left: 50%; transform: translateX(-50%) translateY(-50%);" src="https://www.youtube.com/embed/AUvX1SFmuKw?autoplay=1&amp;controls=0&amp;loop=1&amp;playlist=AUvX1SFmuKw&amp;
                         showinfo=0&amp;modestbranding=1&amp;disablekb=1&amp;enablejsapi=1" volume="0" frameborder="0"></iframe></div>
<script async src="https://www.youtube.com/iframe_api"></script>
<script>
 function onYouTubeIframeAPIReady() {
  var player;
  player = new YT.Player('muteYouTubeVideoPlayer', {
    videoId: 'AUvX1SFmuKw', // YouTube Video ID
    width: auto,               // Player width (in px)
    height: 1000,              // Player height (in px)
    playerVars: {
      autoplay: 1,        // Auto-play the video on load
      controls: 0,        // Show pause/play buttons in player
      showinfo: 0,        // Hide the video title
      modestbranding: 0,  // Hide the Youtube Logo
      playlist:'AUvX1SFmuKw', // Loop the playlist video
      loop: 1,            // Run the video in a loop
      fs: 0,              // Hide the full screen button
      cc_load_policy: 0, // Hide closed captions
      iv_load_policy: 3,  // Hide the Video Annotations
      autohide: 0         // Hide video controls when playing
    },
    events: {
      onReady: function(e) {
        e.target.mute();
      }
    }
  });
 }

</script>
</body>
</html>