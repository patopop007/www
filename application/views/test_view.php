<html>
<head>
<title><?php echo $title; ?></title>
</head>
<body>
<h1><?php echo $heading; ?></h1>
<ol>
    <?php foreach($todo as $item): ?>
    <li><?php echo $item; ?></li>
    <?php endforeach; ?>
</ol>
</body>
</html>
