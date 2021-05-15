<html>
Présentation / Editer  Contenu
<head>
<title>CK editor</title>
<link rel="stylesheet" href="css/materialize.min.css">
</head>
<body>
<div class="container">

      <textarea name="content"></textarea>

</div>

<script src="ckeditor/ckeditor.js"></script>
<script>
CKEDITOR.replace('content');
CKEDITOR.config.extraPlugins='colorbutton';
</script>
</body>
</html>
