<?php
$jogo = $_GET['jogo'];
$core = $_GET['core'];
$bios = $_GET['bios'];

if($bios ==null || $bios =="")
{
    $bios="";
    
}
else{
    //set bios
 $bios="biosUrl:'bios/$bios.7z',";
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
<meta name="HandheldFriendly" content="True">
<meta name="MobileOptimized" content="320">
<meta name="viewport" content="initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="emulatorjs.css" rel="stylesheet">
    <title>Test</title>
</head>
<body>
    <div style="position:fixed;left:0px;right:0px;top:0px;bottom:0px;">
        <div id="game"></div>
    </div>
    <script src="data/loader.js" type="text/javascript"></script>
    <script type="text/javascript">
    EJS_player = '#game';
    EJS_gameUrl = 'http://localhost/EmulatorJS-melhorias/roms/<?php echo $jogo?>'; // Url to Game rom
    EJS_core = '<?php echo $core?>';
    EJS_mouse = false; // SNES Mouse
    EJS_multitap = true; // SNES Multitap
    EJS_language = 'pt-BR'; 
    window.EJS_DEBUG_XX = true;
   // EJS.widescreen = 1;
</script>
</body>
</html>