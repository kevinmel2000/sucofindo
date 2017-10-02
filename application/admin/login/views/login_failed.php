<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
</head>
<body>
<script type="text/javascript">
	alert("<?php echo $message; ?>");
	window.location.href = "<?php echo base_url(); ?>index.php/login";
</script>
</body>
</html>