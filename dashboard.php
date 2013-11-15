<?php include("header.php") ?>
<nav class="navbar navbar-default" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="/dashboard.html"><h1>{{ site.name }}</h1></a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
		<li class="active"><a href="/dashboard.html">Dashboard</a></li>
		<li><a href="/shopping-lists.html"><span class="glyphicon glyphicon-shopping-cart"></span> Shopping Lists</a></li>
		<li><a href="/event.html"><span class="fui-calendar-solid"></span> Events</a></li>
		<li><a href="#"><span class="glyphicon glyphicon-usd"></span> Bills</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
		<li><a href="#">Settings</a></li>
		<li><a href="#">Log out</a></li>
    </ul>
  </div><!-- /.navbar-collapse -->
</nav>

<div id="dashboard" class="container">
	<ul class="newsFeed col-md-9">
		<h2>News Feed</h2>
		<li class="newEvent user">
			<img src="/images/user1.jpg" height="30" width="30">
			<h3>Rossana created a new shopping list</h3>
			<h4><a href="#" title="">Cleaning products</a></h4>
			<p class="date">5 minutes ago</p>
		</li>
		<li class="newEvent user">
			<img src="/images/user2.jpg" height="30" width="30">
			<h3>Gabriele created a new event</h3>
			<h4><a href="/event.html" title="">Gabriele's Birthday</a></h4>
			<p class="date">38 minutes ago</p>
		</li>
		<li class="newComment user">
			<img src="/images/user3.jpg" height="30" width="30">
			<h3>Esther commented in <a href="/event.html">Gabriele's Birthday!</a></h3>
			<h4>"Who will buy the white wine?"</h4>
			<p class="date">1 hour ago</p>
		</li>
		<li class="newEvent user">
			<img src="/images/user2.jpg" height="30" width="30">
			<h3>Gabriele bought 3 things of the shopping list <a href="#">Toilet</a></h3>
			<p class="date">3 hours ago</p>
		</li>
		<li class="newEvent user">
			<img src="/images/user1.jpg" height="30" width="30">
			<h3>Rossana added 10 Euros to the fund</h3>
			<p class="date">5 minutes ago</p>
		</li>
	</ul>
	<div class="col-md-3 fund">
		<h2>Fund</h2>
		<img src="/images/fund.png" alt="fund" width="200">
		<h3>34,25 Euros</h3>
		<div id="addMoneyField">
			<form class="form-horizontal" role="form">
			    <input type="text" class="form-control input" id="amount" placeholder=" 10 Euros">
				<button class="btn btn-primary" type="button" id="saveMoney">Save</button>
			</form>
		</div>
		<button class="btn btn-primary" type="button" id="addMoney"><span class="glyphicon glyphicon-plus"></span> Add money</button>
		
	</div>
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript">
$("#addMoneyField").hide();
$("#addMoney").click(function() {
	$("#addMoneyField").show();
	$("#addMoney").hide();
});
</script>
<?php include("footer.php") ?>  