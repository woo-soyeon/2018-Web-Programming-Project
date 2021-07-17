<?
   session_start();
   extract($_SESSION);
   extract($_GET);
   extract($_POST);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="css/common.css">
<!-- <iframe src="https://calendar.google.com/calendar/embed?src=wsy4533%40gmail.com&ctz=Asia%2FSeoul" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe> -->
<!--<iframe width="560" height="315" src="https://www.youtube.com/embed/5e8-4mBiCSI?autoplay=1" frameborder="0" allowfullscreen></iframe><br /><a href="http://youtu.be/5e8-4mBiCSI" target="_blank">http://youtu.be/5e8-4mBiCSI</a> -->
<!-- <a class="twitter-timeline" href="https://twitter.com/TwitterDev/timelines/539487832448843776?ref_src=twsrc%5Etfw">National Park Tweets - Curated tweets by TwitterDev</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> -->
</head>

<body>
<div id="wrap">
   <div id="header">
    <? include "./lib/top_login1.php"; ?>
   </div>  <!-- end of header -->

   <div id="menu">
   <? include "./lib/top_menu1.php"; ?>
   </div>  <!-- end of menu -->

	 <?include "./lib/func.php"?>

  <div id="content">
      <div id="main_img"><img src="./img/main_img.gif"></div>



	<div id="latest">
			<div id="latest1">
				<div id="title_latest1"><img src="./img/title_latest1.gif"></div>
	  			<div class="latest_box">
				    <a class="twitter-timeline" href="https://twitter.com/NUESTNEWS?ref_src=twsrc%5Etfw">Tweets by NUESTNEWS</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
				</div>
			</div>
			<div id="latest2">
        <div id="title_latest2"><img src="./img/title_latest2.gif"></div>
				<div class="latest_box">
					<div id="main_img"><iframe width="450" height="315" src="https://www.youtube.com/embed/5e8-4mBiCSI?autoplay=1" frameborder="0" allowfullscreen></iframe><br /><a href="http://youtu.be/5e8-4mBiCSI" target="_blank"></a></div>
				</div>
			</div>
      <div id="latest3">
        <div id="title_latest3"><img src="./img/title_latest3.gif"></div>
				<div class="latest_box">
					<!--<iframe src="https://calendar.google.com/calendar/embed?showTitle=0&amp;showNav=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;height=550&amp;wkst=1&amp;bgcolor=%23ccccff&amp;src=4ofa9ngftphlg6g04g8vgof2ps%40group.calendar.google.com&amp;color=%23B1365F&amp;ctz=Asia%2FSeoul" style="border-width:0" width="450" height="550" frameborder="0" scrolling="no"></iframe> -->
          <?include "./calendar.php"?>
				</div>
			</div>
		</div>


 </div> <!-- end of content -->




</div> <!-- end of wrap -->

</body>
</html>
