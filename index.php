<!DOCTYPE html>
<html lang="">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LVCT Data Export</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    

    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

</head>
<body>

<?php
include "header.html";
?>

<div style="height: 70vh">
<div class="container">
<div class="row">
	<div class="col-lg-4">
		<div class="input-group mb-3">
		  <div class="input-group-prepend">
		    <label class="input-group-text" for="inputGroupSelect01">Select Database</label>
		  </div>
		  <select class="custom-select" id="inputGroupSelect01">
		    <option selected>Choose...</option>
		    <option value="1">One</option>
		    <option value="2">Two</option>
		    <option value="3">Three</option>
		  </select>
		</div>	
	</div>
	<div class="col-lg-4">
		<div class="input-group mb-3">
		  <div class="input-group-prepend">
		    <label class="input-group-text" for="inputGroupSelect01">Select Table</label>
		  </div>
		  <select class="custom-select" id="inputGroupSelect01">
		    <option selected>Choose...</option>
		    <option value="1">One</option>
		    <option value="2">Two</option>
		    <option value="3">Three</option>
		  </select>
		</div>	
	</div>
	<div class="col-lg-4">
		<div class="input-group mb-3">
		  <div class="input-group-prepend">
		    <label class="input-group-text" for="inputGroupSelect01">Select Columns</label>
		  </div>
		  <select class="custom-select" id="inputGroupSelect01">
		    <option selected>Choose...</option>
		    <option value="1">One</option>
		    <option value="2">Two</option>
		    <option value="3">Three</option>
		  </select>
		</div>	
	</div>
</div>

<div class="row">
	<div class="col-lg-12">
	
	<input type="text" class="form-control" name="daterange" aria-describedby="help" placeholder="Select period">
    <small id="help" class="form-text text-muted">Select the period for which you would like to have data exported.</small>

	<script>
	$(function() {
	  $('input[name="daterange"]').daterangepicker({
	    opens: 'left'
	  }, function(start, end, label) {
	    console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
	  });
	});
	</script>

	</div>
</div>
<br>
<div>
<button type="submit" class="btn btn-primary">Export data</button>
</div>

</div>
</div>

<?php
include "footer.html";
?>

</body>
</html>
