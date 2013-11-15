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
		<li><a href="{{ site.baseurl }}/dashboard.html">Dashboard</a></li>
		<li><a href="{{ site.baseurl }}/shopping-lists.html"><span class="glyphicon glyphicon-shopping-cart"></span> Shopping Lists</a></li>
		<li  class="active"><a href="{{ site.baseurl }}/event.html"><span class="fui-calendar-solid"></span> Events</a></li>
		<li><a href="#"><span class="glyphicon glyphicon-usd"></span> Bills</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
		<li><a href="#">Settings</a></li>
		<li><a href="#">Log out</a></li>
    </ul>
  </div><!-- /.navbar-collapse -->
</nav>

<div id="event" class="container">
	<div class="newEvent col-md-7 container">
		<h2>New Event</h2>
		<div class="row">
				<div class="col-md-5">
					<form>
						<fieldset id="step1">
							<legend>Fill the fields:</legend>
							<label for="title">Title:</label>
							<input type="text" id="title" name="title" class="form-control input-sm">
							<label for="author">Author:</label>
							<input type="text" id="author" name="author" class="form-control input-sm">
							<label for="date">Date:</label>
							<input type="text" id="date" name="date" class="form-control input-sm">
							<label for="time">Time:</label>
							<input type="text" id="time" name="time" class="form-control input-sm">
							<label for="guests">Guests:</label>
							<input type="text" id="guests" name="guests" class="form-control input-sm">
							<label>Add existing shopping list:</label>
							<div class="input-prepend input-append"><input type="text" id="" name="" class="form-control input-sm"><button class="btn btn-primary" type="button">Create</button></div>
						</fieldset>
					
					
				</div>
			</div>
		
	</div>
		
</div>
<?php include("footer.php") ?>