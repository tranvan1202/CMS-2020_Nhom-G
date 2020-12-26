<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

if (!class_exists('lessc')) {
    $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);
    require_once($dir_block . '/libs/lessc.inc.php');
}

$less = new lessc;
$less->compileFile('less/07.less', 'css/07.css');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>07</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="<?php echo $url_path ?>/css/07.css" rel="stylesheet" type="text/css" />
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/font-awesome.min" rel="stylesheet" type="text/css" />
    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/07.less', 'css/07.css');
        ?>
        <script>
            var canvas = document.getElementById("myCanvas");
var ctx = canvas.getContext("2d");
ctx.moveTo(0,00);
ctx.lineTo(190,10);
ctx.lineTo(190,100);
ctx.lineTo(30,100);
ctx.lineTo(0,0);
ctx.fillStyle = "#d80019";
ctx.fill();
ctx.stroke();

        </script>
</head>

<body>
    <?php include '../07/07-content.php'; ?>
</body>

</html>