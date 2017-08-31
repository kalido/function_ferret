<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>FunctionFerret | MENU Alpha 0.1</title>
		<link rel="stylesheet" href="/css/style.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	</head>
	<body>
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="menu">
						<img src="images/logo_no.png" alt="">
						<ul class="items">
							<a href="/menu"><li class="menu_item">HOME <i class="fa fa-home fa-2x"></i></li></a>
							<a href="/calendars"><li class="menu_item">CALENDARS <i class="fa fa-calendar fa-2x"></i></li></a>
							<a href="#"><li class="menu_item">CLIENTS <i class="fa fa-address-book fa-2x"></i></li></a>
							<a href="#"><li class="menu_item">PROJECTS <i class="fa fa-file fa-2x"></i></li></a>
							<a href="#"><li class="menu_item">PERSONNEL <i class="fa fa-group fa-2x"></i></li></a>
							<a href="#"><li class="menu_item">REPORTS <i class="fa fa-line-chart fa-2x"></i></li></a>
							<a href="#"><li class="menu_item">MORE <i class="fa fa-hand-spock-o fa-2x"></i></li></a>
						</ul>
					</div>
					<div id="status">
						<h1 id="status_text">FunctionFerret | <span>Friday, September 30, 2017</span></h1>
						<ul class="options">
							<li class="icons"><a href="#"><i class="fa fa-search fa-lg"></i></a></li>
							<li class="icons"><a href="#"><i class="fa fa-cog fa-lg"></i></a></li>
							<li class="icons"><a href="#"><i class="fa fa-question-circle fa-lg"></i></a></li>
							<li class="icons"><a href="#"><i class="fa fa-sign-out fa-lg"></i></a></li>
						</ul>
					</div>
					<!-- Contenidos Yiels -->
					@yield('content')
			</div>
		</div>
	</div>
	</body>
	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
	<script src="https://use.fontawesome.com/289e639da0.js"></script>
	<script src="https://unpkg.com/vue"></script>
</html>
