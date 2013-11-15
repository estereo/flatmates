<?php $title = "Shopping Lists | Flatmates" ?>
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
    <a class="navbar-brand" href="/dashboard.html"><h1>Flatmates</h1></a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
		<li><a href="/dashboard.php">Dashboard</a></li>
		<li  class="active"><a href="/shopping-lists.php"><span class="glyphicon glyphicon-shopping-cart"></span> Shopping Lists</a></li>
		<li><a href="/event.php"><span class="fui-calendar-solid"></span> Events</a></li>
		<li><a href="#"><span class="glyphicon glyphicon-usd"></span> Bills</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
		<li><a href="#">Settings</a></li>
		<li><a href="#">Log out</a></li>
    </ul>
  </div><!-- /.navbar-collapse -->
</nav>

<div id="shoppingMain" class="container">
	<ul class="col-md-8">
		<h2>Shopping Lists</h2>
		<li class="shoppingList user">
			<div class="well well-sm">
				<h4><a href="/event.php">Gabriele's Bday List</a></h4>
				<div class="btn-group btn-group-xs options">
					<button type="button" class="btn btn-primary remove"><span class="glyphicon glyphicon-remove"></span></button>
					<button type="button" class="btn btn-primary edit"><span class="glyphicon glyphicon-pencil"></span></button>
					<button type="button" class="btn btn-primary add"><span class="glyphicon glyphicon-plus-sign"></span></button>
				</div>
			</div>
		</li>
		<li class="shoppingList user">
			<div class="well well-sm">
				<h4><a href="#">Laundry</a></h4>
				<div class="btn-group btn-group-xs options">
					<button type="button" class="btn btn-primary remove"><span class="glyphicon glyphicon-remove"></span></button>
					<button type="button" class="btn btn-primary edit"><span class="glyphicon glyphicon-pencil"></span></button>
					<button type="button" class="btn btn-primary add"><span class="glyphicon glyphicon-plus-sign"></span></button>
				</div>
			</div>
		</li>
		<li class="shoppingList user">
			<div class="well well-sm">
				<h4><a href="#">Toilet</a></h4>
				<div class="btn-group btn-group-xs options">
					<button type="button" class="btn btn-primary remove"><span class="glyphicon glyphicon-remove"></span></button>
					<button type="button" class="btn btn-primary edit"><span class="glyphicon glyphicon-pencil"></span></button>
					<button type="button" class="btn btn-primary add"><span class="glyphicon glyphicon-plus-sign"></span></button>
				</div>
			</div>
		</li>
		<li class="shoppingList user">
			<div class="well well-sm">
				<h4><a href="#">Kitchen accesories</a></h4>
				<div class="btn-group btn-group-xs options">
					<button type="button" class="btn btn-primary remove"><span class="glyphicon glyphicon-remove"></span></button>
					<button type="button" class="btn btn-primary edit"><span class="glyphicon glyphicon-pencil"></span></button>
					<button type="button" class="btn btn-primary add"><span class="glyphicon glyphicon-plus-sign"></span></button>
				</div>
			</div>
		</li>
		<li class="shoppingList user">
			<div class="well well-sm">
				<h4><a href="#">IKEA</a></h4>
				<div class="btn-group btn-group-xs options">
					<button type="button" class="btn btn-primary remove"><span class="glyphicon glyphicon-remove"></span></button>
					<button type="button" class="btn btn-primary edit"><span class="glyphicon glyphicon-pencil"></span></button>
					<button type="button" class="btn btn-primary add"><span class="glyphicon glyphicon-plus-sign"></span></button>
				</div>
			</div>
		</li>
		<li class="shoppingList user">
			<button class="btn btn-primary" type="button"><span class="glyphicon glyphicon-plus"></span> Add new list</button>
		</li>
	</ul>
</div>
<?php include("footer.php") ?>