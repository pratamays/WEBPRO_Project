<div class="container pl-5 mt-5">
    <div class="row ml-5">
        <div class="col col-7 mt-5">
            <div class="row">
                <div class="col col-2">

                    <?php
                    foreach ($akun as $user) :
                        if ($_SESSION['success'] == $user['username']) {
                            if ($user['fotoProfil'] == "") {
                                $foto = "default.png";
                            } else {
                                $foto = $user['fotoProfil'];
                            }
                        }
                    endforeach
                    ?>

                    <a href="#fake">
                        <img alt="" class="rounded" src="<?php echo base_url(); ?>profil/<?php echo $foto ?>" alt="UNKNOWN" width="64px" height="64px">
                    </a>
                </div>
                <div class="col rounded d-flex" style="background-color: white; color: black;">
                    <ul class="list-inline mx-auto mb-1 justify-content-center text-center">
                        <li class="list-inline-item">
                            <a href="" class="text-dark hvr-float" style="text-decoration:none;" data-toggle="modal" data-target="#modalText">
                                <img src="<?php echo base_url('assets/aa.png'); ?>" alt="" width="40px" height="40px">
                                <p class="font-weight-lighter mt-1">Text</p>
                            </a>
                        </li>
                        <li class="list-inline-item ml-3 mt-3">
                            <a href="" class="text-dark hvr-float" style="text-decoration:none;" data-toggle="modal" data-target="#modalFoto">
                                <img src="<?php echo base_url('assets/camera.png'); ?>" alt="" width="40px" height="40px">
                                <p class="font-weight-lighter mt-1">Photo</p>
                            </a>
                        </li>
                        <li class="list-inline-item ml-3 mt-3">
                            <a href="" class="text-dark hvr-float" style="text-decoration:none;" data-toggle="modal" data-target="#modalQuote">
                                <img src="<?php echo base_url('assets/quotes.png'); ?>" alt="" width="40px" height="40px">
                                <p class="font-weight-lighter mt-1">Quote</p>
                            </a>
                        </li>
                        <li class="list-inline-item ml-3 mt-3">
                            <a href="" class="text-dark hvr-float" style="text-decoration:none;" data-toggle="modal" data-target="#modalLink">
                                <img src="<?php echo base_url('assets/link.png'); ?>" alt="" width="40px" height="40px">
                                <p class="font-weight-lighter mt-1">Link</p>
                            </a>
                        </li>
                        <li class="list-inline-item ml-3 mt-3">
                            <a href="" class="text-dark hvr-float" style="text-decoration:none;" data-toggle="modal" data-target="#modalChat">
                                <img src="<?php echo base_url('assets/icon.png'); ?>" alt="" width="40px" height="40px">
                                <p class="font-weight-lighter mt-1">Chat</p>
                            </a>
                        </li>
                        <li class="list-inline-item ml-3 mt-3">
                            <a href="" class="text-dark hvr-float" style="text-decoration:none;" data-toggle="modal" data-target="#modalAudio">
                                <img src="<?php echo base_url('assets/headset.ico'); ?>" alt="" width="40px" height="40px">
                                <p class="font-weight-lighter mt-1">Audio</p>
                            </a>
                        </li>
                        <li class="list-inline-item ml-3 mt-3">
                            <a href="" class="text-dark hvr-float" style="text-decoration:none;" data-toggle="modal" data-target="#modalVideo">
                                <img src="<?php echo base_url('assets/video.png'); ?>" alt="" width="40px" height="40px">
                                <p class="font-weight-lighter mt-1">Video</p>
                            </a>
                        </li>
                    </ul>
                </div>

            </div>

            <!-- start perulangan php untuk post -->
            <?php
            rsort($posting);
            foreach ($posting as $data) :
                if ($data['username'] == $_SESSION['success']) {
                    ?>
                    <div class="row mt-4">
                        <div class="col col-2">
                            <a href="#fake">
                                <img alt="" class="rounded" src="<?php echo base_url(); ?>profil/<?php echo $foto ?>" alt="UNKNOWN" width="64px" height="64px">
                            </a>
                        </div>

                        <div class="col rounded hvr-curl-top-right" style="background-color: white; color: black;">

                            <div>
                                <h6 class="mt-2"><?= $data['username']; ?></h6>
                            </div>
                            <div>
                                <?php if ($data['postText'] != NULL) { ?>
                                    <h1 class="mt-4"><?= $data['postText']; ?></h1>
                                <?php } else { ?>
                                    <img src="<?php echo base_url(); ?>post/<?= $data['postFoto']; ?>" alt="" width=100%>
                                <?php } ?>
                            </div>
                            <div>
                                <p><?= $data['caption']; ?></p>
                                <small class="text-muted">
                                    <p><?= $data['tag']; ?></p>
                                </small>
                            </div>
                            <div class="float-right">
                                <ul class="list-inline text-muted">
                                    <li class="list-inline-item mr-2">
                                        <ion-icon name="send"></ion-icon>
                                    </li>
                                    <li class="list-inline-item mr-2">
                                        <!-- modal harus tetep open saat klik reply dan cuma ngehilang pas ngeclick outside -->
                                        <a id="komen" class="text-muted" href="#" data-toggle="modal" data-target="#modalKomen">
                                            <ion-icon name="text"></ion-icon>
                                        </a>
                                    </li>
                                    <li class="list-inline-item mr-2">
                                        <ion-icon name="repeat"></ion-icon>
                                    </li>
                                    <!-- if post sendiri tombol edit delete, else post orang tombol love -->
                                    <li class="list-inline-item mr-2 dropup">
                                        <a class="dropdown-toggle text-muted" href="#" id="dropdownPost" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <ion-icon name="more"></ion-icon>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownPost">
                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modalEditText<?= $data['idPosting']; ?>">Edit</a>
                                            <a class="dropdown-item" href="<?php echo base_url(); ?>/primer/delete/<?php echo $data['idPosting']; ?>">Delete</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                <?php
            }
        endforeach
        ?>
            <!-- end perulangan php -->
        </div>

        <!-- SIDE BAR -->
        <div class="col col-4 ml-3 mt-5">
            <div>
                <?php
                foreach ($akun as $user) :
                    if ($_SESSION['success'] == $user['username']) {
                        $nama = $user['nama'];
                    }
                endforeach
                ?>
                <a href="#" class="text-muted" style="text-decoration: none"><b>
                        <?php
                        if (isset($_SESSION['success'])) {
                            echo $_SESSION['success'];
                        } else {
                            echo "GAGAL";
                        }
                        ?>
                    </b></a>
                <p><?php echo $nama; ?></p>
            </div>

            <div>
                <ul class="list-group active" id="sidebar">
                    <li class="list-group-item" style="background-color:transparent; border-right:0; border-left : 0; border-color: rgb(139, 153, 173)">
                        <a href="#" class="text-muted" style="text-decoration: none; text-decoration:none;"><b>Posts</b></a></li>
                    <li class="list-group-item" style="background-color:transparent; border-right:0; border-left : 0; border-color: rgb(139, 153, 173)">
                        <a href="#" class="text-muted" style="text-decoration: none; text-decoration:none;"><b>Review flagged posts</b></a></li>
                    <li class="list-group-item" style="background-color:transparent; border-right:0; border-left : 0; border-color: rgb(139, 153, 173)">
                        <a href="#" class="text-muted" style="text-decoration: none; text-decoration:none;"><b>Edit appearance</b></a></li>
                </ul>

                <a href="#" class="mt-1 link text-muted" style="text-decoration: none"><small>Mass post editor</small></a>
            </div>

            <div>
                <h5 class="mt-3">Radar</h5>
            </div>
            <div class="d-flex">
                <a href="#fake">
                    <img alt="" class="rounded" src="<?php echo base_url(); ?>profil/tempImage-min.jpg" alt="UNKNOWN" width="50px" height="50px">
                </a>
                <div class="ml-2">
                    <a href="#" style="color:white; text-decoration: none;"><b>pratamays</b></a><br>
                    <small class="font-weigth-light text-muted">Tama</small>
                </div>

                <div class="ml-auto mt-2">
                    <a href="" class="text-muted" style="text-decoration:none;">
                        <ion-icon name="add-circle" size="large"></ion-icon>
                    </a>
                </div>
            </div>
            <div class="mt-2">
                <img src="<?php echo base_url(); ?>assets/tempImage-min.jpg" alt="" width="100%">
                <div class="d-flex rounded-bottom pt-1 pl-2" style="background-color:white" width="100%">
                    <div class="mr-auto ml-2" style="color:black">
                        <p style="color:rgb(139, 153, 173)"><small>777 notes</small></p>
                    </div>

                    <div class="mt-2 mr-2">
                        <a href="#">
                            <ion-icon name="repeat"></ion-icon>
                        </a>
                        <a href="#">
                            <ion-icon name="heart"></ion-icon>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END SIDBAR -->