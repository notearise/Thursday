<?php $auth = 0 ?>
<?php include "control/includes.php" ?>
<?php include "partials/header.php" ?>
<?php if(isset($_SESSION["auth"]["id"])){
	header("location: account/index.php");
	die();
}
?>
<?php if (isset($_SESSION["logedout"])): ?>
	<div class="alert alert-success">you successfully loged out, have a nice day</div>
	<?php unset($_SESSION["logedout"]); ?>
<?php endif; ?>
	<div class="jumbotron">
		<h2>Welcome to <strong>Thursday</strong> <span class="glyphicon glyphicon-flash" aria-hidden="true"></span></h2>
		<p>Let's take some notes!</p>
	</div>For testing purposes only, people! Don't be sharin' & shit.</p>
	&copy; <?php
$copyYear = 2017; // Set your website start date
$curYear = date('Y'); // Keeps the second year updated
echo $copyYear . (($copyYear != $curYear) ? '-' . $curYear : '');
?> Notearise, Inc. All rights reserved.
<?php include "partials/footer.php" ?>
