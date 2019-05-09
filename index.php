<?php
$id= $_GET['dl'];
if (isset($_GET['dl'])) {
$url1 = "https://apis.nhent.ai/g/$id";
$url2 = "https://nhentai.net/api/gallery/$id";
$url3 = "https://dl.nhent.ai/ext/$id";
$json = file_get_contents($url1);
$json2 = file_get_contents($url2);
$json3 = file_get_contents($url3);
} else {
header('Content-Disposition: inline; filename="sadpanda.jpg"');
header('Content-type: image/gif');
header('X-Varnish: 692393573');
header('Age: 0');
header('Via: 1.1 varnish-v4');
header('Accept-Ranges: bytes');
header('Strict-Transport-Security: max-age=31536000; preload;');
header('Pragma: no-cache');
header('Cache-Control: no-cache');
header('Content-Transfer-Encoding: binary');
header('X-Powered-By: HHVM/3.18.6-dev');
readfile('./.iae2013o0/sadpanda.jpg');}
$json_data3 = json_decode($json3, true);
$json_data2 = json_decode($json2, true);
$json_data = json_decode($json, true);
$json_count  = count($json_data);
$download = $json_data["dlurl"];
$size = $json_data["size"];
$yummy = $json_data;
for ($i= 1; $i <= count($json_data3); $i++) {
}
//while(@$i++ < count($json_data3))
?>
<!DOCTYPE html>
<html>
<header>
<title>https://dl.nhent.ai/dl/<?php echo $json_data2['id'];?></title>
<link rel='dns-prefetch' href='//cdnjs.cloudflare.com' />
<link rel='dns-prefetch' href='//stuk.github.io' />
<link rel='dns-prefetch' href='//i.bakaa.me' />
<link rel='dns-prefetch' href='//stackpath.bootstrapcdn.com' />
<link href="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</header>
<body>
<p>
<span class="spinner-border spinner-border-sm" role="status"></span>
<strong id="status">downloading...</strong>
</p>
<script type="text/javascript" src="//code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="//stuk.github.io/jszip/dist/jszip.min.js"></script>
<script type="text/javascript" src="//stuk.github.io/jszip-utils/dist/jszip-utils.js"></script>
<script type="text/javascript" src="//stuk.github.io/jszip/vendor/FileSaver.js"></script>
<script>"use strict";$(document).ready(function(){var $progress=$("#progress");var $status=$("#status");function updateStatus(text,error){$status.text(text);if(error){$status.parent().addClass("text-danger");$progress.addClass("bg-danger")}else{$status.parent().removeClass("text-danger");$progress.removeClass("bg-danger")}}var urls=[<?php for ($i=1; $i <= $json_data2["num_pages"]; $i++){echo "'";echo "https://i.bakaa.me/galleries/";echo $json_data2['media_id'];echo"/";echo $i;echo ".";print $json_data3[$i];echo"'";echo ",";echo"\n";}?>];var nama="<?php echo $json_data2['title']['japanese'];?> ♥ nHentai";var zip=new JSZip();var count=0;var name=nama+".zip";urls.forEach(function(url){JSZipUtils.getBinaryContent(url,function(err,data){if(err){throw err}var filename=url.replace(/.*\//g,'');var img=zip.folder("<?php echo $json_data2['title']['pretty'];?>");img.file("info.txt","Download from https://dl.nhent.ai/g/<?php echo $json_data2['id'];?> \n Dont Forget to join discord: https://discord.gg/y6kurbu").file(filename,data,{binary:true});count+=1;if(count==urls.length){zip.generateAsync({type:'blob'}).then(function(content){updateStatus("Success!");saveAs(content,name)})}})})});</script>
</body>
</html>
  