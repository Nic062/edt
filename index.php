<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Abonnement EDT</title>
	<link rel="stylesheet" href="assets/css/style.css">
	<script src="assets/js/clipboard.min.js"></script>
</head>

<body>

<div id="center-block">

<h1>Emploi du temps</h1>

<p></p>
<p>Dernière mise à jour effectuée le <b><?= date("d/m/Y à H:i",filemtime('edt.ics')) ?></b>.</p>

<div id="subscribe">
	<input type="text" id="link" value="edt.nvarlet.fr/edt.ics">
	<input id="copy" type="submit" data-clipboard-target="#link" value="Copier">
	<div class="clear"></div>
</div>

<a href="https://github.com/Nic062/edt.git" target="_blank" title="" class="center">Projet Git</a>

</div>
<script>
	new Clipboard('#copy');
</script>
</body>
</html>