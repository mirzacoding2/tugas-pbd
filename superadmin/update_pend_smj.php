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
                            <h5>Form Data Penduduk</h5>
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
                        <?php
                            include('../config/koneksi.php');
                            $id_pend = $_GET['id_pend'];
                            $data = mysqli_query($con, "SELECT * FROM tb_penduduk WHERE id_pend='$id_pend' ");
                            while($row = mysqli_fetch_array($data)){
                        ?>
                            <form method="post" action="../config/superadmin/update_pend_smj.php">
                            <input type="hidden" name="id_pend" value="<?php echo $row['id_pend']; ?>">
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">NIK</label>
                                    <div class="col-sm-10"><input type="text" class="form-control" name="nik" value="<?php echo $row['nik']; ?>"></div>
                                </div>

                                <div class="hr-line-dashed"></div>

                                <div class="form-group  row"><label class="col-sm-2 col-form-label">Nama</label>
                                    <div class="col-sm-10"><input type="text" class="form-control" name="nama_pend" value="<?php echo $row['nama_pend']; ?>"></div>
                                </div>
                                
                                <div class="hr-line-dashed"></div>
                                <div class="form-group row"><label class="col-sm-2 col-form-label">Agama</label>
                                <div class="col-sm-10">
                                    <?php $agama = $row['agama']; ?>
                                        <select name="agama" class="form-control m-b">
                                            <option <?php echo ($agama == 'Islam') ? "selected": "" ?>>Islam</option>
                                            <option <?php echo ($agama == 'Kristen') ? "selected": "" ?>>Kristen</option>
                                            <option <?php echo ($agama == 'Hindu') ? "selected": "" ?>>Hindu</option>
                                            <option <?php echo ($agama == 'Budha') ? "selected": "" ?>>Budha</option>
                                            <option <?php echo ($agama == 'Katolik') ? "selected": "" ?>>Katolik</option>
                                        </select>    
                                    </div> 
                                </div>
                                <div class="hr-line-dashed"></div>

                                <div class="form-group row"><label class="col-sm-2 col-form-label">Tempat Lahir</label>
                                    <div class="col-sm-10"><input type="text" class="form-control" name="tempat_lahir" value="<?php echo $row['tempat_lahir']; ?>"></div>
                                </div>
                                <div class="hr-line-dashed"></div>

                                <div class="form-group row"><label class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                    <div class="col-sm-10"><input type="text" class="form-control" name="tanggal_lahir" value="<?php echo $row['tanggal_lahir']; ?>"></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                
                                <div class="form-group row"><label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                    <div class="col-sm-10"><?php $jk = $row['jenis_kelamin']; ?>
                                        <select name="jenis_kelamin" class="form-control m-b">
                                            <option <?php echo ($jk == 'Laki-Laki') ? "selected": "" ?>>Laki-Laki</option>
                                            <option <?php echo ($jk == 'Perempuan') ? "selected": "" ?>>Perempuan</option>
                                        </select> 
                                    </select>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>

                                <div class="form-group row"><label class="col-sm-2 col-form-label">Golongan Darah</label>
                                    <div class="col-sm-10"><?php $gol = $row['golongan_darah']; ?>
                                        <select name="golongan_darah" class="form-control m-b">
                                            <option <?php echo ($gol == '-') ? "selected": "" ?>>-</option>
                                            <option <?php echo ($gol == 'A') ? "selected": "" ?>>A</option>
                                            <option <?php echo ($gol == 'B') ? "selected": "" ?>>B</option>
                                            <option <?php echo ($gol == 'A/B') ? "selected": "" ?>>A/B</option>
                                            <option <?php echo ($gol == 'O') ? "selected": "" ?>>O</option>
                                        </select>                                      
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                
                                <div class="form-group row"><label class="col-sm-2 col-form-label">Pendidikan</label>
                                    <div class="col-sm-10"><input type="text" class="form-control" name="pendidikan" value="<?php echo $row['pendidikan']; ?>"></div>
                                </div>
                                <div class="hr-line-dashed"></div>  

                                <div class="form-group row"><label class="col-sm-2 col-form-label">Pekerjaan</label>
                                    <div class="col-sm-10"><input type="text" class="form-control" name="pekerjaan" value="<?php echo $row['pekerjaan']; ?>"></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                
                                <div class="form-group row"><label class="col-sm-2 col-form-label">Status Pernikahan</label>
                                    <div class="col-sm-10"><?php $gol = $row['status_pernikahan']; ?>
                                        <select name="status_pernikahan" class="form-control m-b">
                                            <option <?php echo ($gol == '-') ? "selected": "" ?>>-</option>
                                            <option <?php echo ($gol == 'Belum Kawin') ? "selected": "" ?>>Belum Kawin</option>
                                            <option <?php echo ($gol == 'Kawin') ? "selected": "" ?>>Kawin</option>
                                            <option <?php echo ($gol == 'Duda') ? "selected": "" ?>>Duda</option>
                                            <option <?php echo ($gol == 'Janda') ? "selected": "" ?>>Janda</option>
                                        </select>  
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                
                                <div class="form-group row"><label class="col-sm-2 col-form-label">Dusun</label>
                                    <div class="col-sm-10"><input type="text" class="form-control" name="dusun" value="<?php echo $row['dusun']; ?>"></div>
                                </div>
                                <div class="hr-line-dashed"></div>

                                <div class="form-group row"><label class="col-sm-2 col-form-label">RT/RW</label>
                                    <div class="col-sm-10"><input type="text" class="form-control" name="rt_rw" value="<?php echo $row['rt_rw']; ?>"></div>
                                </div>
                                <div class="hr-line-dashed"></div>

                                <div class="form-group row"><label class="col-sm-2 col-form-label">Desa</label>
                                    <div class="col-sm-10"><input type="text" class="form-control" name="desa_pend" value="<?php echo $row['desa_pend']; ?>"></div>
                                </div>
                                <div class="hr-line-dashed"></div>

                                <div class="form-group row"><label class="col-sm-2 col-form-label">Kecamatan</label>
                                    <div class="col-sm-10"><input type="text" class="form-control" name="kec_pend" value="<?php echo $row['kec_pend']; ?>"></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                
                                <div class="form-group row"><label class="col-sm-2 col-form-label">Kewarganegaraan</label>
                                    <div class="col-sm-10"><?php $wn = $row['warga_negara']; ?>
                                        <select name="jenis_kelamin" class="form-control m-b">
                                            <option <?php echo ($wn == 'Indonesia') ? "selected": "" ?>>Indonesia</option>
                                            <option <?php echo ($wn == 'WNA') ? "selected": "" ?>>WNA</option>
                                        </select> 
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>   
                                
                                <div class="form-group row">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <a class="btn btn-white btn-sm" href="data_penduduk.php">Cancel</a>
                                        <button class="btn btn-primary btn-sm" type="submit" >Update</button>
                                    </div>
                                </div>
                            </form>
                            <?php
                            }
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
