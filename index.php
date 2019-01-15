<?php
include 'vf.php';
$title = 'Download Video Mp4 Mp3 Free HD - TolTUBE';
include 'tm-inc/head.php';
echo '<div class="pure-u-1"><div class="results"><h2>Daftar Lagu Mp3 dan Video Terbaru</h2><br>Dapatkan update Daftar Lagu Mp3 dan Video Terbaru. Download lagu Mp3 dan Video Terlengkap dengan cepat dan gratis. Unduh lagu-lagu terpopuler disini.<hr></div></div>';
$grabindex=file_get_contents('http://laguaz.net/video-genre/indo?sort=release_date');
$list = explode('<div class="item">',$grabindex);
if(!empty($grabindex)){
for($i=1; $i<=20; $i++){
$ud = potong($list[$i],'title="','"');
$name = potong($list[$i],'title="','"');
$gbr = potong($list[$i],'src="','"');

$ud = str_replace(' ', '+', str_replace(' Mp3', '', $ud));
$date = 'Type: mp3 - Quality: 320Kbps';


// Html Page

echo '<div class="pure-u-1"><div class="myblock"><table width="100%" cellspacing="1" cellpadding="1"><tbody><tr><td width="20%" align="left" valign="top"><img title="'.$name.'" style="" class="imege" src="'.$gbr.'" alt="Video" width="100%" height="auto"> </td><td align="left" valign="top" style="padding-left:10px;"><h3>'.$name.'</h3><div class="meta"> Download Lagu &amp; Video '.$name.' Mp3 3Gp Mp4 HD ( 4:17 ) - Daftar Link Kumpulan Lagu dan Video Terupdate Lengkap<br> <a class="pure-button" href="/download-video/'.$ud.'/"> Download Video</a></div></td></tr></tbody></table></div></div>';
}
}
echo '<div class="pure-u-1" style="width:98%;background-color:#E6E6E6;padding-bottom:10px;margin:0 1% 0 1%"><ul style="list-style:none">
<li style="width:30%;float:left">❖ <a href="/download-video/kpop/">Kpop</a></li><li style="width:30%;float:left">❖ <a href="/download-video/rock/">Rock</a></li><li style="width:30%;float:left">❖ <a href="/download-video/soundtrack/">OST</a></li>
<li style="width:30%;float:left">❖ <a href="/download-video/anak/">Anak</a></li><li style="width:30%;float:left">❖ <a href="/download-video/dance/">Dance</a></li><li style="width:30%;float:left">❖ <a href="/download-video/jazz/">Jazz</a></li>
<li style="width:30%;float:left">❖ <a href="/download-video/remix/">Remix</a></li><li style="width:30%;float:left">❖ <a href="/download-video/cover/">Cover</a></li><li style="width:30%;float:left">❖ <a href="/download-video/full-album/">Full Album</a></li>
<li style="width:30%;float:left">❖ <a href="/download-video/anime/">Anime</a></li><li style="width:30%;float:left">❖ <a href="/download-video/box-office/">Box Office</a></li><li style="width:30%;float:left">❖ <a href="/download-video/trailer/">Trailer</a></li>
<li style="width:30%;float:left">❖ <a href="/download-video/horror/">Horror</a></li><li style="width:30%;float:left">❖ <a href="/download-video/action/">Action</a></li><li style="width:30%;float:left">❖ <a href="/download-video/comedy/">Comedy</a></li>

</ul></div>';
?>
<?php
echo '<div class="pure-u-1"><div class="results">
<h2>Last Mp3 Searches</h2>
</div></div><div class="pure-u-1">
<div class="myblock">
<span class="keywords">';
$grabindex=file_get_contents('http://downloadlagu.fun/');
$list = explode('<a href="http://downloadlagu.fun/s',$grabindex);
if(!empty($grabindex)){
for($i=1; $i<=25; $i++){
$ud = potong($list[$i],'arch/','/"');
$ud = str_replace('-', '+', $ud);
$name = potong($list[$i],'title="','"');
$gbr = potong($list[$i],'src="','"');

// Html Page

echo '<a href="/download-video/'.$ud.'/">'.$name.'</a>, ';
}
}
?>
<?php
echo '</span></div></div>';
include 'tm-inc/foot.php';
?>
