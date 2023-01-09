<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head lang="<?php echo $str_language; ?>" xml:lang="<?php echo $str_language; ?>">
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>MAMP</title>
</head>

<body>
<p>
    <?php
        $paragraph = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam dolorem numquam laborum consequuntur impedit beatae id aliquid ipsam modi natus, neque necessitatibus accusantium, autem enim! Quaerat nisi nobis incidunt quasi?';
        $badWord = $_GET['word'];
        $paragraph = str_replace($badWord, '***', $paragraph);
        $strLength = strlen($paragraph);
        echo $paragraph . ': ' . $strLength;
    ?>
</p>

</body>
</html>