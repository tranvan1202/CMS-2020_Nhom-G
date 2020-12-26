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
$less->compileFile('less/16.less', 'css/16.css');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>16</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="<?php echo $url_path ?>/css/16.css" rel="stylesheet" type="text/css" />
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/font-awesome.min" rel="stylesheet" type="text/css" />
    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/16.less', 'css/16.css');
        ?>
           <script>
        $('body').on('mouseenter mouseleave','.dropdown',function(e){
  var _d=$(e.target).closest('.dropdown');
  if (e.type === 'mouseenter')_d.addClass('show');
  setTimeout(function(){
    _d.toggleClass('show', _d.is(':hover'));
    $('[data-toggle="dropdown"]', _d).attr('aria-expanded',_d.is(':hover'));
  },300);
});

    </script>
</head>

<body>
    <?php include '../16/16-content.php'; ?>
 
</body>

</html>