      <?php  include "protect.php"?>
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element">
                            <img alt="image" class="rounded-circle" src="../assets/img/profile_small.jpg"/>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="block m-t-xs font-bold"><?php echo $profile?></span>
                            </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a class="dropdown-item" href="profile.html">Profile</a></li>
                                <li><a class="dropdown-item" href="contacts.html">Contacts</a></li>
                                <li><a class="dropdown-item" href="mailbox.html">Mailbox</a></li>
                                <li class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="../config/logout.php">Logout</a></li>
                            </ul>
                        </div>
                        <div class="logo-element">
                            IN+
                        </div>
                    </li>
                    <li>
                        <a href="home_superadmin.php"><i class="fa fa-address-book"></i> <span class="nav-label">Dashboard</span></a>
                    </li>
                    <li>
                        <a href="data_penduduk.php"><i class="fa fa-users"></i> <span class="nav-label">Data Penduduk Desa</span></a>
                    </li>
                    <li>
                        <a href="data_penduduk.php"><i class="fa fa-users"></i> <span class="nav-label">Data Penduduk Dusun</span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="data_pend_gojo.php">Dusun Gojo</a></li>
                            <li><a href="data_pend_sm.php">Dusun Suka Makmur</a></li>
                            <li><a href="data_pend_smj.php">Dusun Suka Maju</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="data_keluarga.php"><i class="fa fa-users"></i> <span class="nav-label">Data Keluarga Desa</span></a>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-users"></i> <span class="nav-label">Data Keluarga Dusun</span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="#">Dusun Gojo</a></li>
                            <li><a href="#">Dusun Suka Makmur</a></li>
                            <li><a href="#">Dusun Suka Maju</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="jenis_surat.php"><i class="fa fa-server"></i> <span class="nav-label">Jenis Surat</span></a>
                    </li>
                    <!-- <li>
                        <a href="mailbox.html"><i class="fa fa-envelope"></i> <span class="nav-label">Jenis Surat salah</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="form_ktp.php">Pengantar KTP</a></li>
                            
                            <li><a href="form_akta.php">Pembuatan Akta</a></li>
                            <li><a href="form_tidakmampu.php">Surat Keterangan Tidak Mampu</a></li>
                        </ul>
                    </li> -->
                    <!-- <li>
                        <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">Forms Surat</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="form_nik_surat.php">Pengantar KTP</a></li>
                            <li><a href="#">Pembuatan Akta</a></li>
                            <li><a href="#">Surat Keterangan Tidak Mampu</a></li>
                        </ul>
                    </li> -->
                    <li>
                        <a href="#"><i class="fa fa-file-text"></i> <span class="nav-label">Berkas Surat</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="data_sktp.php">Pengantar KTP</a></li>
                        </ul>
                    </li>
                </ul>

            </div>
        </nav>