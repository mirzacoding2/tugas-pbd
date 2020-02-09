<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Formulir Data Keluarga</title>

    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="../assets/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="../assets/css/animate.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">

    <link href="../assets/css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">
    <link href="../assets/css/jquery.min.js" rel="stylesheet">

</head>

<body>

    <div id="wrapper">
    <?php include('component/navbar.php');?>
    <?php include('component/header.php');?>
        
    <?php 
        include("../config/koneksi.php");
        $result = mysqli_query($con,"SELECT * FROM tb_keluarga ORDER BY id_keluarga DESC LIMIT 1");
        $cek = mysqli_fetch_array($result); // embeded include yaaa!!!!!!!!!!!!!!!!!!!
    ?>
        
                
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Form Data Keluarga</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                
                            </div>
                        </div>
                        <div class="ibox-content">
                            <form method="post" action="../config/superadmin/create_anggota.php">
                            <button type="button" id="btn-tambah-form" class="btn btn-success btn-sm">Tambah Data Form</button>
		                    <button type="button" id="btn-reset-form" class="btn btn-danger btn-sm">Reset Form</button><br><br>
                            <input type="hidden" class="form-control" name="id_kel[]" value="<?php echo $cek[0];?>">
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">No. KK</label>
                                    <div class="col-sm-10"><input type="text" class="form-control"  value="<?php echo $cek[1];?>" disabled></div>
                                </div>

                                <div class="form-group row"><label class="col-sm-2 col-form-label">Anggota Keluarga</label>

                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-md-3"><input type="text" placeholder="NIK" class="form-control" name="nik[]" required></div>
                                            <div class="col-md-6"><input type="text" placeholder="Nama" class="form-control" name="nama[]" required></div>
                                            <div class="col-md-3"><select class="form-control m-b" name="status_keluarga[]">
                                                <option value="-">-</option>
                                                <option value="Kepala Keluarga">Kepala Keluarga</option>
                                                <option value="Istri">Istri</option>
                                                <option value="Anak">Anak</option>
                                            </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div id="insert-form"></div>

                                <div class="hr-line-dashed"></div>
                                <div class="form-group row">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <a class="btn btn-white btn-sm" href="input_data_keluarga.php">Cancel</a>
                                        <!-- <button class="btn btn-primary btn-sm" type="submit">Input Anggota</button> -->
                                        <button class="btn btn-primary btn-sm" type="submit">Save</button>
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
    <script>
	$(document).ready(function(){ // Ketika halaman sudah diload dan siap
		$("#btn-tambah-form").click(function(){ // Ketika tombol Tambah Data Form di klik
			var jumlah = parseInt($("#jumlah-form").val()); // Ambil jumlah data form pada textbox jumlah-form
			var nextform = jumlah + 1; // Tambah 1 untuk jumlah form nya
			
			// Kita akan menambahkan form dengan menggunakan append
			// pada sebuah tag div yg kita beri id insert-form
			$("#insert-form").append("<b>Data ke " + nextform + " :</b>" +
				// "<table>" +
				// "<tr>" +
				// "<td>No. KK</td>" +
				// "<td><input type='text' name='no_kk[]' required></td>" +
				// "</tr>" +
				// "<tr>" +
				// "<td>NIK</td>" +
				// "<td><input type='text' name='nik[]' required></td>" +
				// "</tr>" +
				// "<tr>" +
				// "<td>Nama</td>" +
				// "<td><input type='text' name='nama_pend[]' required></td>" +
				// "</tr>" +
				// "<tr>" +
				// "<td>Status Keluarga</td>" +
				// "<td><textarea name='status_keluarga[]' required></textarea></td>" +
				// "</tr>" +
				// "</table>" +
				// "<br><br>");
                '<input type="hidden" class="form-control" name="id_kel[]" value="<?php echo $cek[0];?>">'+
                '<div class="form-group row"><label class="col-sm-2 col-form-label"> </label>'+
                    '<div class="col-sm-10">'+
                        '<div class="row">'+
                            '<div class="col-md-3"><input type="text" placeholder="NIK" class="form-control" name="nik[]" required></div>'+
                            '<div class="col-md-6"><input type="text" placeholder="Nama" class="form-control" name="nama[]" required></div>'+
                            '<div class="col-md-3"><select class="form-control m-b" name="status_keluarga[]" required><option value="-">-</option><option value="Kepala Keluarga">Kepala Keluarga</option><option value="Istri">Istri</option><option value="Anak">Anak</option></select></div>'+
                        '</div>'+
                    '</div>'+
                '</div>'+
                "<br>");
			
			$("#jumlah-form").val(nextform); // Ubah value textbox jumlah-form dengan variabel nextform
		});
		
		// Buat fungsi untuk mereset form ke semula
		$("#btn-reset-form").click(function(){
			$("#insert-form").html(""); // Kita kosongkan isi dari div insert-form
			$("#jumlah-form").val("1"); // Ubah kembali value jumlah form menjadi 1
		});
	});
	</script>
</body>

</html>
