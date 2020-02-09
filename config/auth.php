<?php 
    session_start();

    //menyambungkan koneksi
    include('koneksi.php');

    //menangkap data yang dikrim dari form login
    $username = $_GET['username'] ;
    $password = $_GET['password'] ;

    //koneksi ambil data dalam tabel user
    $login = mysqli_query($con,"SELECT * FROM tb_users where username='$username' and pass='$password' ");

    //menghitung jumlah data yang ditemukan
    $cek = mysqli_num_rows($login);

    if($cek > 0) {
        $data = mysqli_fetch_assoc($login); 

        if($data['level'] == "superadmin" ){
            //session login username dan level sebagai superadmin
            $_SESSION['username'] = $username;
            $_SESSION['level'] = "superadmin";
            
            //mengalihkan ke halaman superadmin
            header("location:../superadmin/home_superadmin.php");
        }
        else if($data['level'] == "admin"){
            //session login username dan level sebagai administrator
            $_SESSION['username'] = $username;
            $_SESSION['level'] = 'admin';

            //mengalihkan ke halaman administrator
            header("location:../admin/home_admin.php");
        }
    }
    else{
        header("location:../index.php?pesan=gagal");
    }

    
?>
