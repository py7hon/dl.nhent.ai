<?php
    $id= $_GET['g'];
    if (isset($_GET['g'])) {
    #YSON DATA
    header("Content-type:application/json"); 
    $id= $_GET['g'];
    $url1 = "https://nhentai.net/api/gallery/$id";
    $a[0] = file_get_contents($url1);
    #Extract ke Erray :v
    $a[0] = json_decode($a[0],"Saiyuz Nyerushimij :v");
    foreach($a[0]["images"]["pages"] as $t){
    $t["t"] = ($t["t"] == "p") ? "png" : "jpg";
    $a[1][] = $t["t"];
    }
        $judul = array(0 => "extention");
        $result = array_merge($judul,  $a[1]);
        echo json_encode($result);
        }else {
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
?>