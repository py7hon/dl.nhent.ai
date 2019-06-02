<?php
header('X-Varnish: 692393573');
header('Age: 0');
header('Via: 1.1 varnish-v4');
header('Accept-Ranges: bytes');
header('Strict-Transport-Security: max-age=31536000; preload;');
header('Pragma: no-cache');
header('Cache-Control: no-cache');
header('Content-Transfer-Encoding: binary');
header('X-Powered-By: HHVM/3.18.6-dev');
$id= $_GET['dl'];
if (isset($_GET['dl'])) {
$url2 = "https://nhentai.net/api/gallery/$id";
$url3 = "https://dl.nhent.ai/ext/$id";
$json2 = file_get_contents($url2);
$json3 = file_get_contents($url3);
function generateRandomString($length = 60) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
} else {
header('X-Varnish: 692393573');
header('Age: 0');
header('Via: 1.1 varnish-v4');
header('Accept-Ranges: bytes');
header('Strict-Transport-Security: max-age=31536000; preload;');
header('Pragma: no-cache');
header('Cache-Control: no-cache');
header('Content-Transfer-Encoding: binary');
header('X-Powered-By: HHVM/3.18.6-dev');
header('Location: https://nhent.ai/');}
$json_data3 = json_decode($json3, true);
$json_data2 = json_decode($json2, true);
$yummy = $json_data;
for ($i= 1; $i <= count($json_data3); $i++) {
}
//while(@$i++ < count($json_data3))
?>
<!DOCTYPE html>
<html>
<head>
<title>Download <?php echo $json_data2['title']['pretty'];?>.zip - nHtai</title>
<meta name="api" key="<?php echo $json_data2['id'];?>/<?php echo $json_data2['media_id'];?>/<?php echo $json_data2['num_pages'];?>/<?php echo generateRandomString();?>/<?php echo $json_data2['title']['pretty'];?>" action="GET" website="https://nhent.ai" />
<meta name="author" content="Iqbal Rifai" />
<meta charset="utf-8" />
<meta property="og:title" content="Download <?php echo $json_data2['title']['pretty'];?>.zip - nHtai" />
<meta property="og:url" content="https://dl.nhent.ai/dl/<?php echo $json_data2['id'];?>" />
<meta property="og:image" content="https://t.nhent.ai/galleries/<?php echo $json_data2['media_id'];?>/thumb.<?php echo $json_data3[1];?>" />
<link rel='dns-prefetch' href='//cdnjs.cloudflare.com' />
<link rel='dns-prefetch' href='//stuk.github.io' />
<link rel='dns-prefetch' href='//cdn.nhent.ai' />
<link rel='dns-prefetch' href='//stackpath.bootstrapcdn.com' />
<link href="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<center>
<img src="https://t.nhent.ai/galleries/<?php echo $json_data2['media_id'];?>/cover.<?php echo $json_data3[1];?>" id="thumbnail" alt="thumbnail" class="img-thumbnail rounded" style="object-fit: contain; width:25%; flex: 0;">
<h3><?php echo $json_data2['title']['pretty'];?></h3>
<p>
<span class="spinner-border spinner-border-sm" role="status"></span>
<strong id="status">downloading <?php echo $json_data2['num_pages'];?> pages ...</strong>
</p>
<input type="button" value="click here if can't download" onClick="window.location.reload()">
</center>
<script type="text/javascript" src="//code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="//stuk.github.io/jszip/dist/jszip.min.js"></script>
<script type="text/javascript" src="//stuk.github.io/jszip-utils/dist/jszip-utils.js"></script>
<script type="text/javascript" src="//stuk.github.io/jszip/vendor/FileSaver.js"></script>
<script type="text/javascript">"use strict";$(document).ready(function(){var $status=$("#status");function updateStatus(text,error){$status.text(text);if(error){$status.parent().addClass("text-danger")}else{$status.parent().removeClass("text-danger")}}var urls=[<?php for ($i=1; $i <= $json_data2["num_pages"]; $i++){echo "'";echo "https://cdn.nhent.ai/galleries/";echo $json_data2['media_id'];echo"/";echo $i;echo ".";print $json_data3[$i];echo"'";echo ",";echo"\n";}?>];var nama="<?php echo $json_data2['title']['pretty'];?> ♥ nHentai";function updatePercent(percent){$("#progress_bar").removeClass("hide").find(".progress-bar").attr("aria-valuenow",percent).css({width:percent+"%"})}var zip=new JSZip();var count=0;var name=nama+".zip";urls.forEach(function(url){JSZipUtils.getBinaryContent(url,function(err,data){if(err){throw err}var filename=url.replace(/.*\//g,'');var img=zip.folder("<?php echo $json_data2['title']['pretty'];?>");img.file("Read Me FIRST.txt","Download from https://dl.nhent.ai/g/<?php echo $json_data2['id'];?> \n Dont Forget to join discord: https://discord.gg/y6kurbu").file(filename,data,{binary:true});count+=1;if(count==urls.length){zip.generateAsync({type:'blob'}).then(function(content){updateStatus("Success!");saveAs(content,name)})}})})});</script>
<script type="application/ld+json" name="api" key="<?php echo $json_data2['id'];?>/<?php echo $json_data2['media_id'];?>/<?php echo $json_data2['num_pages'];?>/<?php echo generateRandomString();?>/<?php echo $json_data2['title']['pretty'];?>"><?php print json_encode($json_data2);?></script>
<script type="text/javascript">var _Hasync= _Hasync|| [];
_Hasync.push(['Histats.start', '1,4260016,4,0,0,0,00010000']);
_Hasync.push(['Histats.fasi', '1']);
_Hasync.push(['Histats.track_hits', '']);
(function() {
var hs = document.createElement('script'); hs.type = 'text/javascript'; hs.async = true;
hs.src = ('//s10.histats.com/js15_as.js');
(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(hs);
})();</script>
<noscript><a href="/" target="_blank"><img  src="//sstatic1.histats.com/0.gif?4260016&101" alt="" border="0"></a></noscript>
</body>
</html>
