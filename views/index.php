<link rel="stylesheet" href="<?= base_url()?>assets/node_modules/bootstrap/dist/css/boostrap.min.css">
<div id="context">
	<h1 class="pt-5">Markdown</h1>
	<div id="capture">
		<?= $html; ?>
	</div>
	<h2 class="pt-5">Screenshot</h2>
	<div id="screenshot"></div>
</div>
<script src="<?= base_url()?>assets/vendors/html2canvas/js/html2canvas.js"></script>
<script>
	html2canvas(document.querySelector("#capture")).then(canvas => {
		document.getElementById("screenshot").appendChild(canvas)
	});
</script>