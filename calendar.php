<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
	<link rel='stylesheet' type='text/css' href='./fullcalendar/fullcalendar.css' />
	<script type='text/javascript' src='./fullcalendar/jquery/jquery.js'></script>
	<script type='text/javascript' src='./fullcalendar/jquery/jquery-ui-custom.js'></script>
	<script type='text/javascript' src='./fullcalendar/fullcalendar.min.js'></script>
<script type='text/javascript'>

	$(document).ready(function() {

		var date = new Date();
		var d = date.getDate();
		var m = date.getMonth();
		var y = date.getFullYear();

		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,basicWeek,basicDay'
			},
			editable: true,
			events: [
				{
					title: 'L.O.Λ.E RECORD B-Side EP.09',
					start: new Date(y, m, 1, 23, 0),
					allDay: false,
					url : 'http://www.vlive.tv/video/73966'
				},
				{
					title: 'L.O.Λ.E COOKIE #05 - 배코의 호거트 만들기',
					start: new Date(y, m, 3, 16, 0),
					allDay: false,
					url : 'http://www.vlive.tv/video/74036'
				},
				{
					title: '복면가왕',
					start: new Date(y, m, 3, 17, 0),
					allDay: false,
					url : 'http://www.imbc.com/broad/tv/ent/sundaynight/'
				},
				{
					title: '여기어때 - 숙방',
					start: new Date(y, m, 7, 19, 0),
					allDay: false,
					url : 'http://www.vlive.tv/video/74575'
				},
				{
					title: '종현 생일',
					start: new Date(y, m, 8)
				},
				{
					title: '뜻밖의 Q',
					start: new Date(y, m, 9, 17, 0),
					end: new Date(y, m, d, 19, 0),
					allDay: false,
					url : 'http://www.imbc.com/broad/tv/ent/QuizQ/'

				},
				{
					title: 'L.O.Λ.E RECORD B-Side EP.10',
					start: new Date(y, m, 15, 23, 0),
					allDay: false
				},
				{
					title: 'L.O.Λ.E RECORD B-Side EP.11',
					start: new Date(y, m, 29, 23, 0),
					allDay: false
				}
			]
		});

	});

</script>
<style type='text/css'>

	body {
		margin-top: 40px;
		text-align: center;
		font-size: 14px;
		font-family: "메이플스토리",Helvetica,Arial,Verdana,sans-serif;
		}

	#calendar {
		width: 450px;
		margin: 25px 0 0 5px;
		}

</style>
</head>
<body>
<div id='calendar'></div>
</body>
</html>
