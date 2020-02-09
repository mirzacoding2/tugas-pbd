<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Formulir Data Penduduk</title>

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
                            <form method="post" action="../config/superadmin/create_penduduk.php">
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">NIK</label>
                                    <div class="col-sm-10"><input type="text" class="form-control" name="nik_pend" required></div>
                                </div>

                                <div class="hr-line-dashed"></div>

                                <div class="form-group  row"><label class="col-sm-2 col-form-label">Nama</label>
                                    <div class="col-sm-10"><input type="text" class="form-control" name="nama_pend" required></div>
                                </div>
                                
                                <div class="hr-line-dashed"></div>
                                <div class="form-group row"><label class="col-sm-2 col-form-label" required>Agama</label>
                                    <div class="col-sm-10"><select class="form-control m-b" name="agama">
                                        <option value="-">-</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen">>Kristen</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Budha">Budha</option>
                                        <option value="Katolik">Katolik</option>
                                    </select>                                
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>

                                <div class="form-group row"><label class="col-sm-2 col-form-label" >Tempat Lahir</label>
                                    <div class="col-sm-10"><input type="text" class="form-control" name="tempat_lahir" required></div>
                                </div>
                                <div class="hr-line-dashed"></div>

                                <div class="form-group row"><label class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                    <div class="col-sm-10"><input type="date" class="form-control" name="tanggal_lahir" required></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                
                                <div class="form-group row"><label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                    <div class="col-sm-10"><select class="form-control m-b" name="jenis_kelamin" required>
                                        <option value="0">-</option>
                                        <option value="Laki-laki">Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>

                                <div class="form-group row"><label class="col-sm-2 col-form-label">Golongan Darah</label>
                                    <div class="col-sm-10"><select class="form-control m-b" name="gol_darah">
                                        <option value="-">-</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="A/B">A/B</option>
                                        <option value="O">O</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                
                                <div class="form-group row"><label class="col-sm-2 col-form-label">Pendidikan</label>
                                    <div class="col-sm-10"><input type="text" class="form-control" name="pendidikan" required></div>
                                </div>
                                <div class="hr-line-dashed"></div>  

                                <div class="form-group row"><label class="col-sm-2 col-form-label">Pekerjaan</label>
                                    <div class="col-sm-10"><input type="text" class="form-control" name="pekerjaan" ></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                
                                <div class="form-group row"><label class="col-sm-2 col-form-label">Status Pernikahan</label>
                                    <div class="col-sm-10"><select class="form-control m-b" name="status_pernikahan" required>
                                        <option value="0">-</option>
                                        <option value="Belum Kawin">Belum Kawin</option>
                                        <option value="Kawin">Kawin</option>
                                        <option value="Duda">Duda</option>
                                        <option value="Janda">Janda</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                
                                <div class="form-group row"><label class="col-sm-2 col-form-label">Dusun</label>
                                    <div class="col-sm-10"><input type="text" class="form-control" name="dusun" required></div>
                                </div>
                                <div class="hr-line-dashed"></div>

                                <div class="form-group row"><label class="col-sm-2 col-form-label">RT/RW</label>
                                    <div class="col-sm-10"><input type="text" class="form-control" name="rt_rw" required></div>
                                </div>
                                <div class="hr-line-dashed"></div>

                                <div class="form-group row"><label class="col-sm-2 col-form-label">Desa</label>
                                    <div class="col-sm-10"><input type="text" class="form-control" name="desa_pend" required></div>
                                </div>
                                <div class="hr-line-dashed"></div>

                                <div class="form-group row"><label class="col-sm-2 col-form-label">Kecamatan</label>
                                    <div class="col-sm-10"><input type="text" class="form-control" name="kec_pend" required></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                
                                <div class="form-group row"><label class="col-sm-2 col-form-label">Kewarganegaraan</label>
                                    <div class="col-sm-10"><select class="form-control m-b" name="warga_negara" required>
                                        <option value="-">-</option>
                                        <option value="Indonesia">Indonesia</option>
                                        <option value="WNA">WNA</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>  
                                
                                <div class="form-group row">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <a class="btn btn-white btn-sm" href="data_penduduk.php">Cancel</a>
                                        <button class="btn btn-primary btn-sm" type="submit">Save changes</button>
                                    </div>
                                </div>
                            </form>
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
