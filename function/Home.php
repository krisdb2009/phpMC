  <div id="desc">
  <div id="this-carousel-id" class="carousel slide"><!-- class of slide for animation -->
  <div class="carousel-inner">      
      <div class="item active">
	    <h1><center>Welcome to <?php echo $settings['general']['sitename']; ?></center></h1>
	    <p><?php
echo $settings['Home']['description'];
?></p>
      </div>
  
  <?php
        $allFiles = scandir('function/img/Home Page Slides'); // Or any other directory
        $files    = array_diff($allFiles, array(
            '.',
            '..'
        ));
        foreach ($files as $file) {
          echo '
      <div id="slide" class="item">
      <img style="margin: 0 auto;" src="function/img/Home Page Slides/'.$file.'" alt="" />
      <div class="carousel-caption">
      <p>'.$file.'</p>
      </div>
      </div>
            ';
        }

	
	?>
	
  </div><!-- /.carousel-inner -->
  <!--  Next and Previous controls below
        href values must reference the id for this carousel -->
    <a class="carousel-control left" href="#this-carousel-id" data-slide="prev"><--</a>
    <a class="carousel-control right" href="#this-carousel-id" data-slide="next">--></a>
</div><!-- /.carousel -->
</div>
<br>
<center>
<div id="half" class="panel panel-default">
  <div class="panel-body">
    <?php
$i = 1;
if(!empty($settings['News']))
{
echo '<center><h3>Recent News Articles</h3></center>';
$settings['News'] = array_reverse($settings['News']);
foreach($settings['News'] as $artical => $cont)
{
$cont = strip_tags(substr($cont,0,60).'...');
echo '<a id="artlink" href="?p=News&article='.$artical.'"><b>'.$artical.'</b> - '.$cont.'</a><br>';
if ($i++ == 3) break;
}}
?>
  </div>
</div>


<div id="half" class="panel panel-default">
  <div class="panel-body">
   <center><h3>Server Status</h3></center>
<script src="dpnd/jquery.min.js"></script>
    	<script>
	    $(document).ready(function() {
		$("#topiccon").load("function/GrabStatus.php");
	    setInterval(update, 5000);
	    });
        function update() {
     	$("#topiccon").load("function/GrabStatus.php");
	    }
      	</script>
		<div id="topiccon"><center>
		<br>
		<div style="width:60%;" class="progress progress-striped active">
  <div class="progress-bar progress-bar-success"  role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
    <span class="sr-only">45% Complete</span>
  </div>
</div>
		Pinging server...<br><br></center></div>
  </div>
</div>

</center>