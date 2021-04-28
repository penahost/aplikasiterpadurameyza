<html>

<head>
<meta http-equiv=Content-Type content="text/html; charset=utf-8">
<meta name=Generator content="Microsoft Word 15 (filtered)">
<style>
    body {
        width:8.5in;
        height:14in;
        /* to centre page on screen*/
        margin-left: auto;
        margin-right: auto;
    }
</style>
<style>
<!--
 /* Font Definitions */
 @font-face
	{font-family:"Cambria Math";
	panose-1:2 4 5 3 5 4 6 3 2 4;}
@font-face
	{font-family:Calibri;
	panose-1:2 15 5 2 2 2 4 3 2 4;}
@font-face
	{font-family:Tahoma;
	panose-1:2 11 6 4 3 5 4 4 2 4;}
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
	{margin-top:0in;
	margin-right:0in;
	margin-bottom:10.0pt;
	margin-left:0in;
	line-height:115%;
	font-size:11.0pt;
	font-family:"Calibri",sans-serif;}
p.MsoListParagraph, li.MsoListParagraph, div.MsoListParagraph
	{margin-top:0in;
	margin-right:0in;
	margin-bottom:10.0pt;
	margin-left:.5in;
	line-height:115%;
	font-size:11.0pt;
	font-family:"Calibri",sans-serif;}
p.MsoListParagraphCxSpFirst, li.MsoListParagraphCxSpFirst, div.MsoListParagraphCxSpFirst
	{margin-top:0in;
	margin-right:0in;
	margin-bottom:0in;
	margin-left:.5in;
	line-height:115%;
	font-size:11.0pt;
	font-family:"Calibri",sans-serif;}
p.MsoListParagraphCxSpMiddle, li.MsoListParagraphCxSpMiddle, div.MsoListParagraphCxSpMiddle
	{margin-top:0in;
	margin-right:0in;
	margin-bottom:0in;
	margin-left:.5in;
	line-height:115%;
	font-size:11.0pt;
	font-family:"Calibri",sans-serif;}
p.MsoListParagraphCxSpLast, li.MsoListParagraphCxSpLast, div.MsoListParagraphCxSpLast
	{margin-top:0in;
	margin-right:0in;
	margin-bottom:10.0pt;
	margin-left:.5in;
	line-height:115%;
	font-size:11.0pt;
	font-family:"Calibri",sans-serif;}
.MsoChpDefault
	{font-family:"Calibri",sans-serif;}
.MsoPapDefault
	{margin-bottom:10.0pt;
	line-height:115%;}
@page WordSection1
	{size:8.5in 14.0in;
	margin:1.0in 1.0in 1.0in 1.0in;}
div.WordSection1
	{page:WordSection1;}
 /* List Definitions */
 ol
	{margin-bottom:0in;}
ul
	{margin-bottom:0in;}
-->
</style>

</head>

<body lang=EN-US style='word-wrap:break-word'>
<?php
function tgl_indo($tanggal){
	$bulan = array (
		1 =>   'Januari',
		'Februari',
		'Maret',
		'April',
		'Mei',
		'Juni',
		'Juli',
		'Agustus',
		'September',
		'Oktober',
		'November',
		'Desember'
	);
	$pecahkan = explode('-', $tanggal);
	return $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
}
?>
<div class=WordSection1>

<p class=MsoNormal align=center style='margin-bottom:0in;text-align:center;
line-height:150%'><b><u><span lang=IN style='font-size:18.0pt;line-height:150%'>SURAT
PERNYATAAN</span></u></b></p>

<p class=MsoNormal align=center style='margin-bottom:0in;text-align:center;
line-height:150%'><b><u><span lang=IN style='font-size:14.0pt;line-height:150%'><span
 style='text-decoration:none'>&nbsp;</span></span></u></b></p>

<p class=MsoNormal style='margin-bottom:0in;text-align:justify;line-height:
150%'><span lang=IN style='font-size:12.0pt;line-height:150%'>Yang bertanda <span
style='color:black'>tangan di bawah ini:</span></span></p>

<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;border:none'>
 <tr>
  <td width=156 valign=top style='width:116.75pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;text-align:justify;line-height:
  150%'><span lang=IN style='font-size:12.0pt;line-height:150%;color:black'>Nama</span></p>
  </td>
  <td width=449 valign=top style='width:336.7pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;text-align:justify;line-height:
  150%'><span style='font-size:12.0pt;line-height:150%;color:black'>: </span><span
  lang=IN style='font-size:12.0pt;line-height:150%;color:black'><?=$row['jamaah_nama'];?>
  </span></p>
  </td>
 </tr>
 <tr>
  <td width=156 valign=top style='width:116.75pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;text-align:justify;line-height:
  150%'><span lang=IN style='font-size:12.0pt;line-height:150%;color:black'>Tempat,
  Tanggal lahir</span></p>
  </td>
  <td width=449 valign=top style='width:336.7pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;text-align:justify;line-height:
  150%'><span style='font-size:12.0pt;line-height:150%;color:black'>: </span><span
  lang=IN style='font-size:12.0pt;line-height:150%;color:black'><?=$row['jamaah_tempat_lahir'];?>, <?=tgl_indo($row['jamaah_tanggal_lahir']);?>
  </span></p>
  </td>
 </tr>
 <tr>
  <td width=156 valign=top style='width:116.75pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;text-align:justify;line-height:
  150%'><span lang=IN style='font-size:12.0pt;line-height:150%'>Pekerjaan</span></p>
  </td>
  <td width=449 valign=top style='width:336.7pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;text-align:justify;line-height:
  150%'><span style='font-size:12.0pt;line-height:150%'>: </span><span lang=IN
  style='font-size:12.0pt;line-height:150%'><?=$row['jamaah_pekerjaan'];?>
  </span></p>
  </td>
 </tr>
 <tr>
  <td width=156 valign=top style='width:116.75pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;text-align:justify;line-height:
  150%'><span lang=IN style='font-size:12.0pt;line-height:150%'>Nomor
  Telephon/HP</span></p>
  </td>
  <td width=449 valign=top style='width:336.7pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;text-align:justify;line-height:
  150%'><span style='font-size:12.0pt;line-height:150%'>: </span><span lang=IN
  style='font-size:12.0pt;line-height:150%'><?=$row['jamaah_no_hp'];?>
  </span></p>
  </td>
 </tr>
 <tr>
  <td width=156 valign=top style='width:116.75pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;text-align:justify;line-height:
  150%'><span lang=IN style='font-size:12.0pt;line-height:150%'>Alamat</span></p>
  </td>
  <td width=449 valign=top style='width:336.7pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;text-align:justify;line-height:
  150%'><span style='font-size:12.0pt;line-height:150%'>: </span><span lang=IN
  style='font-size:12.0pt;line-height:150%'><?=$row['jamaah_alamat'];?>
  </span></p>
  </td>
 </tr>
</table>

<p class=MsoNormal style='margin-bottom:0in;text-align:justify;line-height:
150%'><b><span lang=IN style='font-size:12.0pt;line-height:150%;color:black'>&nbsp;</span></b></p>

<p class=MsoNormal style='margin-bottom:0in;text-align:justify;line-height:
150%'><span lang=IN style='font-size:12.0pt;line-height:150%'>Menyatakan dengan
sesungguhnya bahwa saya :</span></p>

<p class=MsoListParagraphCxSpFirst style='margin-top:0in;margin-right:0in;
margin-bottom:0in;margin-left:21.3pt;text-align:justify;text-indent:-.25in;
line-height:150%'><span lang=IN style='font-size:12.0pt;line-height:150%'>1.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span
lang=IN style='font-size:12.0pt;line-height:150%'>Saya belum pernah / pernah
memiliki Surat Perjalanan Republik Indonesia</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0in;margin-right:0in;
margin-bottom:0in;margin-left:21.3pt;text-align:justify;text-indent:-.25in;
line-height:150%'><span lang=IN style='font-size:12.0pt;line-height:150%'>2.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span
lang=IN style='font-size:12.0pt;line-height:150%'>Keberangkatan saya ke luar
negeri bukan untuk keberja, tetapi saya akan melakukan Umroh / Haji</span></p>

<p class=MsoListParagraphCxSpLast style='margin-top:0in;margin-right:0in;
margin-bottom:0in;margin-left:21.3pt;text-align:justify;text-indent:-.25in;
line-height:150%'><span lang=IN style='font-size:12.0pt;line-height:150%'>3.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span
lang=IN style='font-size:12.0pt;line-height:150%'>Bahwa data yang terlampir
sebagai persyaratan adalah benar.</span></p>

<p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
margin-left:21.3pt;text-align:justify;line-height:150%'><span lang=IN
style='font-size:12.0pt;line-height:150%'>Demikian peryataan ini saya buat
dengan sebenarnya dan bersedia di tuntut berdasarkan ketentuan
perundang-undangan yang berlaku apabila ternyata tidak benar.</span></p>

<p class=MsoNormal style='margin-top:0in;margin-right:0in;margin-bottom:0in;
margin-left:3.3pt;text-align:justify'><span lang=IN style='font-size:12.0pt;
line-height:115%'>&nbsp;</span></p>

<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0
 style='margin-left:283.25pt;border-collapse:collapse;border:none'>
 <tr>
  <td width=246 valign=top style='width:184.25pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;text-align:justify;line-height:
  normal'><span lang=IN style='font-size:12.0pt'>Kediri, <?=$row['jamaah_tgl_ttd'];?>
  </span></p>
  </td>
 </tr>
 <tr style='height:61.6pt'>
  <td width=246 valign=top style='width:184.25pt;padding:0in 5.4pt 0in 5.4pt;
  height:61.6pt'>
  <p class=MsoNormal style='margin-bottom:0in;text-align:justify;line-height:
  normal'><span lang=IN style='font-size:12.0pt'>&nbsp;</span></p>
  <p class=MsoNormal style='margin-bottom:0in;text-align:justify;line-height:
  normal'><span style='font-size:12.0pt'><img width=84 height=60 id="Picture 6"
  src="SURAT%20PERNYATAAN%20ke%20Depag%20Kota%20(%20A4)_files/image001.png"></span></p>
  </td>
 </tr>
 <tr>
  <td width=246 valign=top style='width:184.25pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;text-align:justify;line-height:
  normal'><span lang=IN style='font-size:12.0pt;color:black'><?=$row['jamaah_nama'];?>
  </span></p>
  </td>
 </tr>
</table>

<p class=MsoNormal style='margin-bottom:0in'><span lang=IN style='font-size:
12.0pt;line-height:115%'>&nbsp;</span></p>

<p class=MsoNormal style='margin-bottom:0in'><b><span lang=IN>Peringatan :</span></b></p>

<p class=MsoListParagraphCxSpFirst style='margin-top:0in;margin-right:0in;
margin-bottom:0in;margin-left:21.25pt;text-align:justify;text-indent:-.25in'><span
lang=IN>1.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=IN>Undang-undang Keimigrasian No. 6 tahun 2011 Pasal
126 huruf c:</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0in;margin-right:0in;
margin-bottom:0in;margin-left:21.25pt;text-align:justify'><span lang=IN>Memberikan
data yang tidak sah atau keterangan yang tidak benar untuk memperoleh Dokumen
Perjalanan Republik Indonesia Bagi dirinya sendiri atau orang lain dipinada
dengan pidana penjara paling lama 5 (lima) tahun dan pidana denda paling banyak
Rp. 500.000.000,00 (lima ratus juta rupiah). </span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0in;margin-right:0in;
margin-bottom:0in;margin-left:21.3pt;text-align:justify;text-indent:-.25in'><span
lang=IN>2.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=IN>Surat Edaran Direktorat Jendral Imigrasi No.
FI.IZ.03.02-1760 tentang Batas waktu pengambilan foto permohonan paspor RI :</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0in;margin-right:0in;
margin-bottom:0in;margin-left:21.3pt;text-align:justify'><span lang=IN>Permohonan
paspor RI yang telah diterima oleh petugas loket, maka terhadap permohonan
wajib melakukan pengambilan foto paling lambat 30 hari kalender, sejak
permohonan diterima oleh petugas loket, apabila tidak melanjutkan proses, maka
permohonan paspor RI yang bersangkutan dibatalkan dan selanjutnya mengajukan
permohonan baru</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0in;margin-right:0in;
margin-bottom:0in;margin-left:21.3pt;text-align:justify'><span lang=IN>&nbsp;</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0in;margin-right:0in;
margin-bottom:0in;margin-left:21.3pt;text-align:justify'><span lang=IN>&nbsp;</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0in;margin-right:0in;
margin-bottom:0in;margin-left:21.3pt;text-align:justify'><span lang=IN>&nbsp;</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0in;margin-right:0in;
margin-bottom:0in;margin-left:21.3pt;text-align:justify'><span lang=IN>&nbsp;</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0in;margin-right:0in;
margin-bottom:0in;margin-left:21.3pt;text-align:justify'><span lang=IN>&nbsp;</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0in;margin-right:0in;
margin-bottom:0in;margin-left:21.3pt;text-align:justify'><span lang=IN>&nbsp;</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0in;margin-right:0in;
margin-bottom:0in;margin-left:21.3pt;text-align:justify'><span lang=IN>&nbsp;</span></p>

<p class=MsoListParagraphCxSpLast style='margin-top:0in;margin-right:0in;
margin-bottom:0in;margin-left:21.3pt;text-align:justify'><span lang=IN>&nbsp;</span></p>

</div>

</body>

</html>
