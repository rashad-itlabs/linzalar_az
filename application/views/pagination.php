<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<style>
	a{
		text-decoration:none;
		color:#555;
		display: inline-block;
	}
	.page-link:hover a{
		text-decoration: none;
		color:#fff;


	}
	.page-link:hover{
		background: #007bff;
		border:1px solid #007dff;
	}

</style>
<body>

<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" href="<?php http_build_query($_GET, '', "&") ?>?order=all" >Page all</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab"  href="<?php http_build_query($_GET, '', "&") ?>?order=limit" >Page Limit</a>
  </li>
</ul>



<?php
error_reporting(0);



$url = $_GET['order'];

switch ($url) {
	case 'all':
		echo 'All Page';
		break;

	case 'limit':
		echo 'Limit Page';
		break;
	
	default:
		# code...
		break;
}



foreach ($veriler as $key) {
	
	echo '<ul><li>'.$key->basliq.'</li></ul>';

}


?>

<nav aria-label="Page navigation example">
  <?php
  echo $linkler;
  ?>
</nav>
	

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>


