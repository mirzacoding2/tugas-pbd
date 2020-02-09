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

            <h3>Kategori Surat</h3>

            <div class="row">
            <div class="col-lg-3">
                <div class="widget style1 lazur-bg">
                    <a href="form_nik_surat.php">
                        <div class="row">
                            <div class="col-4">
                                <i class="fa fa-envelope-o fa-5x"></i>
                            </div>
                            <div class="col-8 text-right">
                                <span>Pengantar KTP</span>
                                <!-- <h2 class="font-bold"></h2> -->
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
            <?php include('component/js.php');?>
        </div>

        
    </body>
</html>
