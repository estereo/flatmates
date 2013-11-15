<?php $title = "Gabriele's Birthday | Flatmates" ?>
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
    <a class="navbar-brand" href="/dashboard.php"><h1>Flatmates</h1></a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
		<li><a href="/dashboard.php">Dashboard</a></li>
		<li><a href="/shopping-lists.php"><span class="glyphicon glyphicon-shopping-cart"></span> Shopping Lists</a></li>
		<li  class="active"><a href="/event.php"><span class="fui-calendar-solid"></span> Events</a></li>
		<li><a href="#"><span class="glyphicon glyphicon-usd"></span> Bills</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
		<li><a href="#">Settings</a></li>
		<li><a href="#">Log out</a></li>
    </ul>
  </div><!-- /.navbar-collapse -->
</nav>

<div id="event" class="container">
	<ul class="eventData col-md-7">
		<li>
			<h2>Gabriele's Birthday <a href="#" class="edit" title=""><span class="glyphicon glyphicon-pencil"></span> Edit</a></h2>
			<h3>Saturday 2nd January 2014 <span>20:00h</span></h3>
		</li>
		<li>
			<h3>Author:</h3>
			<p>Gabriele</p>
		</li>
		<li>
			<h3>Guests:</h3>
			<p>Marianna, Massimo, Guillermo, Nina, Tina, Luca, Alfredo, Tania, Albert, Nora, Stefan</p>
		</li>
		<li>
			<h3>Shopping list for the event:</h3>
			<div class="well well-sm">
				<h4><a href="#">Gabriele's Bday List</a></h4>
				<div class="btn-group btn-group-xs options">
					<button type="button" class="btn btn-primary remove"><span class="glyphicon glyphicon-remove"></span></button>
					<button type="button" class="btn btn-primary edit"><span class="glyphicon glyphicon-pencil"></span></button>
					<button type="button" class="btn btn-primary add"><span class="glyphicon glyphicon-plus-sign"></span></button>
				</div>
			</div>
		</li>
		<li>
			<h3>Comments:</h3>
			<div class="panel-body">                
				<form accept-charset="UTF-8" action="" method="POST">
					<textarea class="form-control counted" name="message" placeholder="Type in your message" rows="3" style="margin-bottom:10px;"></textarea>
					<button class="btn btn-primary" type="submit">Post new comment</button>
				</form>
			</div>
		</li>
	</ul>
</div>
<?php include("footer.php") ?>