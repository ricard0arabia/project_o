<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>
<head>

	<!-- html@imports -> 099fb995346f31c749f6e40db0f395e3 -->
	<?php require_once('html@imports/_header^meta.php'); ?>
	<title>HTTP/1.1</title>

	<!-- html@imports -> 099fb995346f31c749f6e40db0f395e3 -->
	<?php require_once('html@imports/_header^shimStyle.php'); ?>
</head>
<body>

	<div class="container">
		<h4 id="sub-head">Closed System Authentication<sup>{elapsed_time}</sup></h4>
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<form>
					<div class="form-group">
						<input type="password" name="psk" id="psk" class="form-control" placeholder="Pre-Shared Key" minlength="8" maxlength="20">
					</div>
					<button type="submit" class="btn btn-primary auth">Authenticate</button>
				</form>
			</div>
		</div>
	</div>
	

	<!-- html@imports -> 251d164643533a527361dbe1a7b9235d -->
	<?php require_once('html@imports/_footer^scripts.php'); ?>
</body>
</html>