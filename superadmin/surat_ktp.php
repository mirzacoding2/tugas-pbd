<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

            <title>ASDES | Dashboard</title>

        <?php include('component/css.php');?>

    </head>

    <body>
        <div id="wrapper">
            <?php include('component/navbar.php');?>    
            <?php include('component/header.php');?>
            

        <?php 
        include "head.php";
        include "ktp_body.php";
        ?>
        <hr width="90%" size="5" id="10" color="black">
        <br>
        <table width="100%" cellpadding="0" cellspacing="0">
        <td width="111" align="center">
            <td width="887"  face="Bodoni MT Black" align="center"><div align="center" ><b>SURAT PENGANTAR<b> <br>
            _________________________________<br>
            NOMOR : XXX/XX/XX/XXX/XXXX  </div></td> <!-- di buat penomoran otomatis-->
            <td width="109"></td>
        </table>
        <br>
        <br>
        <br>
        <table width="100%" cellpadding="0" cellspacing="0">
        <tr>
        <td width="98" align="center"></td>
            <td width="868" align="left"><?php echo $row[1]; ?><br></td> 
            <!-- di buat penomoran otomatis-->
            <td width="124"></td>
        </tr>
        </table>
        <br>
        <table width="100%" cellpadding="0" cellspacing="0">
        <tr>
        <td width="108" align="center"></td>
            <td width="162" align="left">NIK</td> 
            <!-- di buat penomoran otomatis-->
            <td width="820">:</td>
        </tr>
        <tr>
        <td width="108" align="center"></td>
            <td width="162" align="left">Nama Penduduk </td> 
            <!-- di buat penomoran otomatis-->
            <td width="820">:</td>
        </tr>
        <tr>
        <td width="108" align="center"></td>
            <td width="162" align="left">Dusun</td> 
            <!-- di buat penomoran otomatis-->
            <td width="820">:</td>
        </tr>
        <tr>
        <td width="108" align="center"></td>
            <td width="162" align="left">Desa</td> 
            <!-- di buat penomoran otomatis-->
            <td width="820">:</td>
        </tr>
        <tr>
        <td width="108" align="center"></td>
            <td width="162" align="left">RT/RW</td> 
            <!-- di buat penomoran otomatis-->
            <td width="820">:</td>
        </tr>
        <tr>
        <td width="108" align="center"></td>
            <td width="162" align="left">Kecamatan</td> 
            <!-- di buat penomoran otomatis-->
            <td width="820">:</td>
        </tr>
        <tr>
        <td width="108" align="center"></td>
            <td width="162" align="left">Berlaku Sampai</td> 
            <!-- di buat penomoran otomatis-->
            <td width="820">:</td>
        </tr>
        </table>
        <br>
        <br>
        <table width="100%" cellpadding="0" cellspacing="0">
        <tr>
        <td width="98" align="center"></td>
            <td width="794" align="left">Nama tersebut di atas benar benar penduduk Desa Kedungpoh Kecamatan Nglipar Kabupaten Gunungkidul</td> 
            <!-- di buat penomoran otomatis-->
            <td width="198"></td>
        </tr>
        </table>
        <br>
        <table width="100%" cellpadding="0" cellspacing="0">
        <tr>
        <td width="98" align="center"></td>
            <td width="794" align="left">Demikian Surat ini di buat dengan sebenarnya untuk di gunakan sebagai mana mestinya</td> 
            <!-- di buat penomoran otomatis-->
            <td width="198"></td>
        </tr>
        </table>
        <br>
        <br>
        <table width="100%" cellpadding="0" cellspacing="0">
        <tr>
            <td width="106" align="left"></td> 
            <td width="188" align="center"></td>
            <td width="527" align="left"></td> 
            <!-- di buat penomoran otomatis-->
            <td width="269" align="right">Gunung Kidul, xx - Bulan - Tahun<br>
        </tr>
        </table>
        <br>
        <br>
        <table width="100%" cellpadding="0" cellspacing="0">
        <tr>
            <td width="111" align="left"></td> 
            <td width="197" align="center"></td>
            <td width="626" align="left"></td> 
            <!-- di buat penomoran otomatis-->
            <td width="156" align="center">Kepala Desa<br>
            <br>
            _____________
            <br><p>nama terang</p></td>
        </tr>
        </table>

            <?php include('component/js.php');?>
        </div>
    </body>
</html>
