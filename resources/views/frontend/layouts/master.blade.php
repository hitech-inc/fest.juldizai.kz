<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
  	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="HandheldFriendly" content="True">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">

	<meta name="description" content="Fest.Zhuldizai | Организация мероприятий">
	<meta name="keywords" content="event landing page, event management, conference, meeting, seminar, marketing, marketing landing, speakers, event marketing, webinar, mailchimp, group event, online registraion, exhibition, event">
	<meta name="author" content="Fest.Zhuldizai | Организация мероприятий">	

	<title>Жулдызай ФЕСТИВАЛЬ | Организация мероприятий</title>
	<link rel="stylesheet" href="/css/font-awesome.css">
	<link rel="stylesheet" href="/css/bootstrap.css">
	<link rel="stylesheet" href="/css/plugins.css">
	<link rel="stylesheet" href="/css/icofont.css">
	<link rel="stylesheet" href="/css/DINPROFont.css">
	<link rel="stylesheet" href="/css/style.css">
	<link rel="stylesheet" href="/css/mystyle.css">
	<link rel="stylesheet" href="/css/colors.css">
	<link rel="stylesheet" href="/css/responsive.css">
</head>
<body>
	<div id="wrapper">

		<header id="header">
			@include('frontend.partials._header')
		</header>

		<main id="main">
			@yield('content')
		</main>
			
		<footer id="footer">
			@include('frontend.partials._footer')
		</footer>

		<span id="back-top" class="text-center md-round fa fa-angle-up"></span>
		<!-- loader of the page -->
		<div id="loader" class="loader-holder">
			<div class="block"><img src="images/svg/bars.svg" width="60" alt="loader"></div>
		</div>

	</div>

	<script src="/js/jquery.js"></script>
	<script src="/js/plugins.js"></script>
	<script src="/js/jquery.main.js"></script>
<script>
	$('.closeVideo').click(function() {
		$('.smi').hide();
		$('body').css('overflow','auto');
	})
	$('.showVideo').click(function() {
		$('.smi').show();
		$('body').css('overflow','hidden');
	})
</script>
	<div id="style-changer" data-src="style-changer.html"></div>
</body>
</html>