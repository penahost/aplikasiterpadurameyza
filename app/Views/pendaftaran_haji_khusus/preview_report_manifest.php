<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html><head>

	<meta http-equiv="content-type" content="text/html; charset=windows-1252">
	<title></title>
	<meta name="generator" content="LibreOffice 5.4.7.2 (Linux)">
	<meta name="author" content="RAMEY">
	<meta name="created" content="2019-12-31T02:16:11">
	<meta name="changedby" content="Mochamad Fauzin">
	<meta name="changed" content="2021-03-27T05:40:00">
	<meta name="AppVersion" content="15.0300">
	<meta name="DocSecurity" content="0">
	<meta name="HyperlinksChanged" content="false">
	<meta name="LinksUpToDate" content="false">
	<meta name="ScaleCrop" content="false">
	<meta name="ShareDoc" content="false">

	<style type="text/css">
		body,div,table,thead,tbody,tfoot,tr,th,td,p { font-family:"Calibri"; font-size:x-small }
		a.comment-indicator:hover + comment { background:#ffd; position:absolute; display:block; border:1px solid black; padding:0.5em;  }
		a.comment-indicator { background:red; display:inline-block; border:1px solid black; width:0.5em; height:0.5em;  }
		comment { display:none;  }
	</style>

</head>

<body>
<table cellspacing="0" border="0">
	<colgroup width="39"></colgroup>
	<colgroup width="312"></colgroup>
	<colgroup width="120"></colgroup>
	<colgroup width="87"></colgroup>
	<colgroup width="140"></colgroup>
	<colgroup width="221"></colgroup>
	<colgroup width="178" span="2"></colgroup>
	<colgroup width="152"></colgroup>
	<colgroup width="109"></colgroup>
	<colgroup width="116"></colgroup>
	<tbody>
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
    	return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
    }
		 ?>
		<tr>
		<td style="border-bottom: 1px solid #000000" colspan="11" valign="middle" height="73" align="center"><b><font size="5" face="Times New Roman" color="#000000">MANIFEST UMROH <?=tgl_indo(date("Y-m-d"));?></font></b></td>
		</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="middle" height="53" bgcolor="#FF0000" align="center"><b><font size="3">NO.</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="middle" bgcolor="#FF0000" align="center"><b><font size="3">NAMA SESUAI PASPOR</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="middle" bgcolor="#FF0000" align="center"><b><font size="3">NO. PASPOR</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="middle" bgcolor="#FF0000" align="center"><b><font size="3">FEMALE / MALE</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" sdnum="1033;0;[$-F800]DDDD\, MMMM DD\, YYYY" valign="middle" bgcolor="#FF0000" align="center"><b><font size="3">Tempat Lahir</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" sdnum="1033;1057;[$-421]DD MMMM YYYY;@" valign="middle" bgcolor="#FF0000" align="center"><b><font size="3">Tanggal</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" sdnum="1033;1057;[$-421]DD MMMM YYYY;@" valign="middle" bgcolor="#FF0000" align="center"><b><font size="3">DATE OF ISSUE</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" sdnum="1033;1057;[$-421]DD MMMM YYYY;@" valign="middle" bgcolor="#FF0000" align="center"><b><font size="3">DATE OF EXPIRE</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="middle" bgcolor="#FF0000" align="center"><b><font size="3">ISSUING OFFICE</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="middle" bgcolor="#FF0000" align="center"><b><font size="3">MAHRAM</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="middle" bgcolor="#FF0000" align="center"><b><font size="3">KET</font></b></td>
	</tr>
	<?php
	foreach($jamaah as $row):
		$ttl=$row->jamaah_ttl;
		$pecahkan = explode(',', $ttl);
		$pecahkan[0];
	?>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" sdval="1" sdnum="1033;" valign="middle" height="33" align="center"><font size="3">1</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" sdnum="1033;0;@" valign="middle" align="left"><font size="3" color="#000000"><?=$row->jamaah_nama;?> </font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="middle" align="center"><font size="3" color="#000000"><?=$row->jamaah_no_passport;?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="middle" align="center"><font size="3" color="#000000"><?=$row->jamaah_jk;?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="middle" align="center"><font size="3" color="#000000"><?=$pecahkan[0];?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" sdval="32006" sdnum="1033;1057;[$-421]DD MMMM YYYY;@" valign="middle" align="center"><font size="3" color="#000000"><?=$row->jamaah_ttl;?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" sdval="43747" sdnum="1033;1057;[$-421]DD MMMM YYYY;@" valign="middle" align="center"><font size="3" color="#000000"><?=$row->jamaah_dateofissue;?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" sdval="45574" sdnum="1033;1057;[$-421]DD MMMM YYYY;@" valign="middle" align="center"><font size="3" color="#000000"><?=$row->jamaah_dateofexpire;?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="middle" align="center"><font size="3" color="#000000">KEDIRI</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="middle" align="center"><font size="3" color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="middle" align="center"><font size="3" color="#000000"><br></font></td>
	</tr>
	<?php
	endforeach;
	?>
	<tr>
		<td valign="bottom" height="33" align="center"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="center"><font size="3" color="#000000"><br></font></td>
	</tr>
	<tr>
		<td valign="bottom" height="33" align="center"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" bgcolor="#FFFF00" align="left"><b><font size="3" color="#C00000"><br></font></b></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="center"><font size="3" color="#000000"><br></font></td>
	</tr>
	<tr>
		<td valign="bottom" height="33" align="center"><font size="3" color="#000000"><br></font></td>
		<td valign="middle" bgcolor="#92D050" align="left"><b><font size="3" color="#C00000"><br></font></b></td>
		<td valign="middle" align="center"><font size="3" color="#000000"><br></font></td>
		<td valign="middle" align="center"><font size="3" color="#000000"><br></font></td>
		<td sdnum="1033;0;[$-F800]DDDD\, MMMM DD\, YYYY" valign="middle" align="center"><font size="3" color="#000000"><br></font></td>
		<td sdnum="1033;1057;[$-421]DD MMMM YYYY;@" valign="middle" align="center"><font size="3" color="#000000"><br></font></td>
		<td sdnum="1033;1057;[$-421]DD MMMM YYYY;@" valign="middle" align="center"><font size="3" color="#000000"><br></font></td>
		<td sdnum="1033;1057;[$-421]DD MMMM YYYY;@" valign="middle" align="center"><font size="3" color="#000000"><br></font></td>
		<td valign="middle" align="center"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="center"><font size="3" color="#000000"><br></font></td>
	</tr>
	<tr>
		<td valign="bottom" height="33" align="center"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="center"><font size="3" color="#000000"><br></font></td>
	</tr>
	<tr>
		<td valign="bottom" height="33" align="center"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="center"><font size="3" color="#000000"><br></font></td>
	</tr>
	<tr>
		<td valign="bottom" height="33" bgcolor="#FFFFFF" align="center"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" bgcolor="#FFFFFF" align="center"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
	</tr>
	<tr>
		<td valign="bottom" height="33" bgcolor="#FFFFFF" align="center"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="center"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
	</tr>
	<tr>
		<td valign="bottom" height="33" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="center"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="center"><font size="3" color="#000000"><br></font></td>
	</tr>
	<tr>
		<td valign="bottom" height="33" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="center"><font size="3" color="#000000"><br></font></td>
	</tr>
	<tr>
		<td valign="bottom" height="33" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="center"><font size="3" color="#000000"><br></font></td>
	</tr>
	<tr>
		<td valign="bottom" height="33" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="center"><font size="3" color="#000000"><br></font></td>
	</tr>
	<tr>
		<td valign="bottom" height="33" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="center"><font size="3" color="#000000"><br></font></td>
	</tr>
	<tr>
		<td valign="bottom" height="33" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="center"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="center"><font size="3" color="#000000"><br></font></td>
	</tr>
	<tr>
		<td valign="bottom" height="33" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="center"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="center"><font size="3" color="#000000"><br></font></td>
	</tr>
	<tr>
		<td valign="bottom" height="33" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="center"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="center"><font size="3" color="#000000"><br></font></td>
	</tr>
	<tr>
		<td valign="bottom" height="33" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="center"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="center"><font size="3" color="#000000"><br></font></td>
	</tr>
	<tr>
		<td valign="bottom" height="33" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="center"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="center"><font size="3" color="#000000"><br></font></td>
	</tr>
	<tr>
		<td valign="bottom" height="33" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="center"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="center"><font size="3" color="#000000"><br></font></td>
	</tr>
	<tr>
		<td valign="bottom" height="33" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="center"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="center"><font size="3" color="#000000"><br></font></td>
	</tr>
	<tr>
		<td valign="bottom" height="33" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="center"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="center"><font size="3" color="#000000"><br></font></td>
	</tr>
	<tr>
		<td valign="bottom" height="33" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="center"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="center"><font size="3" color="#000000"><br></font></td>
	</tr>
	<tr>
		<td valign="bottom" height="33" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="center"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="center"><font size="3" color="#000000"><br></font></td>
	</tr>
	<tr>
		<td valign="bottom" height="33" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="center"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="center"><font size="3" color="#000000"><br></font></td>
	</tr>
	<tr>
		<td valign="bottom" height="33" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="center"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="center"><font size="3" color="#000000"><br></font></td>
	</tr>
	<tr>
		<td valign="bottom" height="33" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="center"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="center"><font size="3" color="#000000"><br></font></td>
	</tr>
	<tr>
		<td valign="bottom" height="33" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="center"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="center"><font size="3" color="#000000"><br></font></td>
	</tr>
	<tr>
		<td valign="bottom" height="33" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="center"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="center"><font size="3" color="#000000"><br></font></td>
	</tr>
	<tr>
		<td valign="bottom" height="33" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="center"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="center"><font size="3" color="#000000"><br></font></td>
	</tr>
	<tr>
		<td valign="bottom" height="33" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="center"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="center"><font size="3" color="#000000"><br></font></td>
	</tr>
	<tr>
		<td valign="bottom" height="33" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="center"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="center"><font size="3" color="#000000"><br></font></td>
	</tr>
	<tr>
		<td valign="bottom" height="33" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="center"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="center"><font size="3" color="#000000"><br></font></td>
	</tr>
	<tr>
		<td valign="bottom" height="33" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="center"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="center"><font size="3" color="#000000"><br></font></td>
	</tr>
	<tr>
		<td valign="bottom" height="33" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="center"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="center"><font size="3" color="#000000"><br></font></td>
	</tr>
	<tr>
		<td valign="bottom" height="33" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="center"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="center"><font size="3" color="#000000"><br></font></td>
	</tr>
	<tr>
		<td valign="bottom" height="33" align="center"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="center"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="center"><font size="3" color="#000000"><br></font></td>
		<td sdnum="1033;0;[$-F800]DDDD\, MMMM DD\, YYYY" valign="middle" align="center"><font size="3" color="#000000"><br></font></td>
		<td sdnum="1033;1057;[$-421]DD MMMM YYYY;@" valign="bottom" align="center"><font size="3" color="#000000"><br></font></td>
		<td sdnum="1033;1057;[$-421]DD MMMM YYYY;@" valign="bottom" align="center"><font size="3" color="#000000"><br></font></td>
		<td sdnum="1033;1057;[$-421]DD MMMM YYYY;@" valign="bottom" align="center"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="center"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="center"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="center"><font size="3" color="#000000"><br></font></td>
	</tr>
	<tr>
		<td valign="bottom" height="33" align="center"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="center"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="center"><font size="3" color="#000000"><br></font></td>
		<td sdnum="1033;0;[$-F800]DDDD\, MMMM DD\, YYYY" valign="middle" align="center"><font size="3" color="#000000"><br></font></td>
		<td sdnum="1033;1057;[$-421]DD MMMM YYYY;@" valign="bottom" align="center"><font size="3" color="#000000"><br></font></td>
		<td sdnum="1033;1057;[$-421]DD MMMM YYYY;@" valign="bottom" align="center"><font size="3" color="#000000"><br></font></td>
		<td sdnum="1033;1057;[$-421]DD MMMM YYYY;@" valign="bottom" align="center"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="center"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="center"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="center"><font size="3" color="#000000"><br></font></td>
	</tr>
	<tr>
		<td valign="bottom" height="33" align="center"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="left"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="center"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="center"><font size="3" color="#000000"><br></font></td>
		<td sdnum="1033;0;[$-F800]DDDD\, MMMM DD\, YYYY" valign="middle" align="center"><font size="3" color="#000000"><br></font></td>
		<td sdnum="1033;1057;[$-421]DD MMMM YYYY;@" valign="bottom" align="center"><font size="3" color="#000000"> </font></td>
		<td sdnum="1033;1057;[$-421]DD MMMM YYYY;@" valign="bottom" align="center"><font size="3" color="#000000"><br></font></td>
		<td sdnum="1033;1057;[$-421]DD MMMM YYYY;@" valign="bottom" align="center"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="center"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="center"><font size="3" color="#000000"><br></font></td>
		<td valign="bottom" align="center"><font size="3" color="#000000"><br></font></td>
	</tr>
</tbody></table>
<!-- ************************************************************************** -->



</body></html>
