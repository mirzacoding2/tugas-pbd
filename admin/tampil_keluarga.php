<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ASDES | Data Keluarga</title>

    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="../assets/css/plugins/dataTables/datatables.min.css" rel="stylesheet">

    <link href="../assets/css/animate.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper">
    <?php include('component/navbar.php');?>

        <?php include('component/header.php'); ?>

            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Data Keluarga Per KK</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a>Keluarga</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <strong>Data Keluarga</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
                
                <div class="wrapper wrapper-content animated fadeInRight">
                    <div class="row">
                        <div class="col-lg-12">
                        <div class="ibox ">
                            <div class="ibox-title">
                                <!-- <h5>Data Keluarga Desa Kedungpoh</h5> -->
                                <div class="ibox-tools">
                                    <!-- <a class="collapse-link">
                                        <i class="fa fa-chevron-up"></i>
                                    </a> -->
                                    <!-- <a href="input_data_keluarga.php"> -->
                                        <!-- <i class="fa fa-edit"></i> Tambah Data  -->
                                    </a>
                                    <!-- <ul class="dropdown-menu dropdown-user">
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
                            
                            <!-- start table -->
                            <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover dataTables-example" >
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>NIK</th>
                                <th>Status Keluarga</th>
                                <!-- <th>Action</th> -->
                            </tr>
                            </thead>
                            	
<?php
include('../config/koneksi.php');
$no = 1;
$id = (int) $_GET['id'];
$sql = "SELECT * FROM tb_keluarga  INNER JOIN det_keluarga ON tb_keluarga.id_keluarga=det_keluarga.id_keluarga WHERE tb_keluarga.id_keluarga='$id'";
$result = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($result)){

?>
                            <tbody>
                            <td> <?php echo $no++; ?></td>
                            <td> <?php echo $row['nama_pend']; ?> </td>
                            <td> <?php echo $row['nik']; ?> </td>
                            <td> <?php echo $row['status_keluarga']; ?> </td>
                            </tbody>

<?php } ?>
                            </div>
                            
                            </div>
                        </div>
                    </div>
                    </div>
                    <!-- end table -->
        </div>
        </div>
        </div>



    <!-- Mainly scripts -->
    <script src="../assets/js/jquery-3.1.1.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.js"></script>
    <script src="../assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="../assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <script src="../assets/js/plugins/dataTables/datatables.min.js"></script>
    <script src="../assets/js/plugins/dataTables/dataTables.bootstrap4.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="../assets/js/inspinia.js"></script>
    <script src="../assets/js/plugins/pace/pace.min.js"></script>

    <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function(){
            $('.dataTables-example').DataTable({
                pageLength: 25,
                responsive: true,
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                    // {extend: 'copy'},
                    // {extend: 'csv'},
                    // {extend: 'excel', title: 'ExampleFile'},
                    // {extend: 'pdf', title: 'ExampleFile'},

                    // {extend: 'print',
                    //  customize: function (win){
                    //         $(win.document.body).addClass('white-bg');
                    //         $(win.document.body).css('font-size', '10px');

                    //         $(win.document.body).find('table')
                    //                 .addClass('compact')
                    //                 .css('font-size', 'inherit');
                    // }
                    // }
                ]

            });

        });

    </script>

</body>

</html>
