<?php session_start(); ?>
<?php if(file_exists('./logicals/'.$request['file'].'.php')) { include("./logicals/{$request['file']}.php"); } ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?= $windowTitle['title'] . ( (isset($windowTitle['title'])) ? ('|' . $windowTitle['mottó']) : '' ) ?></title>
	<link rel="stylesheet" href="./styles/stilus.css" type="text/css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<?php if(file_exists('./styles/'.$request['file'].'.css')) { ?><link rel="stylesheet" href="./styles/<?= $request['file']?>.css" type="text/css"><?php } ?>
</head>
<body>
	<div class="container">
	<header>
		<div class="text-center ">
		<?php if(isset($_SESSION['login'])) { ?>Logged in: <strong><?= $_SESSION['csn']." ".$_SESSION['un']." (".$_SESSION['login'].")" ?></strong><?php } ?>
			<img class="headerImg img-fluid" src="./images/<?=$header['img']?>" alt="<?=$header['imgalt']?>">
		</div>
	</header>
    <div id="wrapper text-center">
                <ul class="nav text-center">
					<?php foreach ($pages as $url => $page) { ?>
						<?php if(! isset($_SESSION['login']) && $page['menun'][0] || isset($_SESSION['login']) && $page['menun'][1]) { ?>
							<li class="nav-item">
							<a <?= (($page == $request) ? ' class="active nav-link"' : 'nav-link') ?> href="<?= ($url == '/') ? '.' : ('?page=' . $url) ?>">
							<?= $page['content'] ?></a>
							</li>
						<?php } ?>
					<?php } ?>
                </ul>
    </div>
	<div id="content">
            <?php include("./templates/pages/{$request['file']}.tpl.php"); ?>
        </div>
    <footer style="text-align: center;">
        <?php if(isset($footer['copyright'])) { ?>&copy;&nbsp;<?= $footer['copyright'] ?> <?php } ?>
		&nbsp;
		<br>
        <?php if(isset($footer['made'])) { ?><?= $footer['made']; ?><?php } ?>
    </footer>
	</div>
</body>
</html>
