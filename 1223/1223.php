<?php
 include '../config.php';
 
        $url_host = 'http://'.$_SERVER['HTTP_HOST'];
        $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), $sala);
        $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
        
        preg_match_all($pattern_uri, __DIR__, $matches);
        $url_path = $url_host . $matches[1][0];
        $url_path = str_replace('\\', '/', $url_path);

    if (!class_exists('lessc')) {
        $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);      
        require_once($dir_block.'/libs/lessc.inc.php');
    }
    $less = new lessc;
    $less->compileFile('less/1223.less', 'css/1223.css');
    
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">      
        <link href="<?php echo $url_path ?>/css/1223.css" rel="stylesheet" type="text/css" /> 
        <link href="<?php echo $url_path ?>/css/bootstrap.min.css" rel="stylesheet">   
        <script src="<?php echo $url_path ?>/js/jquery-2.1.4.min.js" type="text/javascript" ></script>
        <script src="<?php echo $url_path ?>/js/1223.js" type="text/javascript" ></script>
        <title>1223</title>
    </head>

    <body>
        <?php
            include '1223-content.php';
        ?>
       
    </body>
</html>




