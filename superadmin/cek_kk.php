<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Update Data Penduduk</title>

    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="../assets/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="../assets/css/animate.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">

    <link href="../assets/css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper">
    <?php include('component/navbar.php');?>
    <?php include('component/header.php');?>
        
            
        
                
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Cek Data Penduduk</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                <!-- <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="#" class="dropdown-item">Config option 1</a>
                                    </li>
                                    <li><a href="#" class="dropdown-item">Config option 2</a>
                                    </li>
                                </ul>
                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a> -->
                            </div>
                        </div>
                        <div class="ibox-content">
                        <form method="POST" action="form_akta.php">                         
                            <table class="table table-striped table-bordered table-hover dataTables-example">
                                <?php
                                include ("../config/koneksi.php");
                                    $cari = $_POST['no_kk'];
                                    if(empty($cari)){
                                    echo "data kosong";
                                    echo "<a href='form_kk_akta.php'";
                                }

                                // $query2 = "SELECT * FROM tb_keluarga WHERE no_kk LIKE '%$cari%'";
                                // $sql = mysqli_query($con, $query2);
                                // while ($r = mysqli_fetch_array($sql)){
                                //  if(mysqli_num_rows($sql) == 0){
                                //      echo "NIK Tidak Terdaftar";
                                //      echo "<br><br>";
                                //      echo '
                                //      <div class="form-group row">
                                //      <div class="col-sm-4 col-sm-offset-2">
                                //          <a class="btn btn-white btn-sm" href="">Back</a>
                                //      </div>
                                //     </div>
                                //      ';
                                //  }else{
                                //     while ($r = mysqli_fetch_array($sql))
                                //  {
                                    $query2 = "SELECT a.no_kk a.dusun a.rt_rw a.desa_pend b.nama_pend FROM tb_keluarga a JOIN det_keluarga b ON a.no_kk = b.no_kk WHERE no_kk LIKE '%$cari%'";
                                    $result = mysqli_query($con, $query2);
                                    while ($r = mysqli_fetch_array($result)){
                                        if(mysqli_num_rows($sql) == 0){
                                            echo "No KK Tidak Terdaftar";
                                            echo "<br><br>";
                                            echo '
                                            <div class="form-group row">
                                            <div class="col-sm-4 col-sm-offset-2">
                                                <a class="btn btn-white btn-sm" href="">Back</a>
                                            </div>
                                            </div>';
                                        }else{
                                            while ($r = mysqli_fetch_array($sql));
                                        }
                                    
                                ?>
                                <tr>
                                    <td colspan="2" align="center"><h3><b>Data Penduduk</b></h3></td>   
                                </tr>
                                
                                <tr class='gradeA'>
                                <td>No.KK</td>
                                <td><input type="text" class="form-control" name='nik' value="<?php echo $r['no_kk']; ?>"></td>
                                </tr>
                                

                                <tr class='gradeA'>
                                <td>Dusun</td>
                                <td><input type="text" class="form-control" name="dusun" value="<?php echo $r['dusun']; ?>"></td>
                                </tr>

                                <tr class='gradeA'>
                                <td>Desa</td>
                                <td><input type="text" class="form-control" name="desa_pend" value="<?php echo $r['desa_pend']; ?>"></td>
                                </tr>

                                <tr class='gradeA'>
                                <td>RT/RW</td>
                                <td><input type="text" class="form-control" name="rt_rw" value="<?php echo $r['rt_rw']; ?>"></td>
                                </tr>

                                <tr class='gradeA'>
                                <td>Kecamatan</td>
                                <td><input type="text" class="form-control" name="kec_pend" value="<?php echo $r['kec_pend']; ?>"></td>
                                </tr>


                                <tr>
                                    <td colspan="2" align="center">
                                        <a class="btn btn-white btn-sm" href="form_kk_akta.php">Cancel</a>
                                        <button class="btn btn-primary btn-sm" type="submit" name="proses">Proses</button>
                                    </td>   
                                </tr>
                            </table>
                        </form>
                                <?php }
                            //  header("location:tampil.php")
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       

        </div>
        </div>


    <!-- Mainly scripts -->
    <script src="../assets/js/jquery-3.1.1.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.js"></script>
    <script src="../assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="../assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="../assets/js/inspinia.js"></script>
    <script src="../assets/js/plugins/pace/pace.min.js"></script>

    <!-- iCheck -->
    <script src="../assets/js/plugins/iCheck/icheck.min.js"></script>
        <script>
            $(document).ready(function () {
                $('.i-checks').iCheck({
                    checkboxClass: 'icheckbox_square-green',
                    radioClass: 'iradio_square-green',
                });
            });
        </script>
</body>

</html>
