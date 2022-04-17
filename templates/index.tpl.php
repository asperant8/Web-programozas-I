<? session_start();?>
<? if (file_exists('./logicals/' . $request['file'] . '.php')) {
	include("./logicals/{$request['file']}.php");
} ?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title><?= $windowTitle['title'] . ((isset($windowTitle['title'])) ? ('|' . $windowTitle['title']) : $header['motto']) ?></title>
	<link rel="stylesheet" href="./styles/stilus.css" type="text/css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
	<script src="./js/script.js"></script>
	<? if (file_exists('./styles/' . $request['file'] . '.css')) { ?>
		<link rel="stylesheet" href="./styles/<?= $request['file'] ?>.css" type="text/css"><? } ?>
</head>

<body onload="carousel()">
	<div class="container">
		<header>
			<div class="text-center ">
			<? if (isset($_SESSION['username'])) { ?> <div class="text-end" style="color:White; background-color:rgb(0, 39, 71);"><span style="margin-right:1em;">Logged in as <strong><? print_r( $_SESSION['firstname'] . " " . $_SESSION['lastname'] . " (" . $_SESSION['username'] . ")") ?></strong></span></div> <? } ?>
			<img class="headerImg img-fluid" src="./images/<?= $header['img'] ?>" alt="<?= $header['imgalt'] ?>">
			</div>
		</header>
		<div id="wrapper text-center">
			<ul style="border-radius: 0 0 1em 1em;" class="nav text-center">
				<? foreach ($pages as $url => $page) { ?>
					<? if (!isset($_SESSION['username']) && $page['menun'][0] || isset($_SESSION['username']) && $page['menun'][1]) { ?>
						<li class="nav-item">
							<a <?= (($page == $request) ? ' class="active nav-link"' : 'class="nav-link"') ?> href="<?= ($url == '/') ? '.' : ('?page=' . $url) ?>">
								<?= $page['content'] ?></a>
						</li>
					<? } ?>
				<? } ?>
			</ul>
		</div>
		<div id="content">
			<? include("./templates/pages/{$request['file']}.tpl.php"); ?>
		</div>
		<footer style="text-align: center; margin-top:1em;" class="cardbox text-center">
			<div class="col" style="color:lightgrey;">
				<? if (isset($footer['copyright'])) { ?>&copy;&nbsp;<?= $footer['copyright'] ?> <? } ?>
			&nbsp;
			<br>
			<? if (isset($footer['made'])) { ?><?= $footer['made']; ?><? } ?>
			</div>
		</footer>
	</div>
</body>

</html>