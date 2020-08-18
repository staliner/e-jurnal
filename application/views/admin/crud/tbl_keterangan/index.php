    <!-- ############################ BEGIN OF CONTENT ############################### -->
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <?= $this->session->flashdata('message'); ?>
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Keterangan</h1>
                    </div><!-- /.col -->

                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <!-- ############################ BEGIN OF CONTENT ############################### -->
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <!-- <div class="row">
                    <div class="col">
                        <a href="<?= base_url('Admin/Crud/Tbl_absen/tambah') ?>" class="btn btn-primary">Tambah</a>
                    </div>
                </div> -->


                <table class="table mt-2">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">ID KETERANGAN</th>
                            <th scope="col">NAMA KETERANGAN</th>
                            <th scope="col">PREFIX KETERANGAN</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($keterangan as $ket) {

                        ?>
                            <tr>
                                <td><?= $ket['id_keterangan']; ?></td>
                                <td><?= $ket['nama_keterangan']; ?></td>
                                <td><?= $ket['prefix_keterangan']; ?></td>
                                <!-- <td>
                                    <a href="<?= base_url('Admin/Crud/Tbl_absen/'); ?>hapus/<?= $ket['id_absen']; ?>">hapus</a>
                                    ||
                                    <a href="<?= base_url('Admin/Crud/Tbl_absen/'); ?>ubah/<?= $ket['id_absen']; ?>">ubah</a>
                                </td> -->

                            </tr>
                        <?php } ?>

                    </tbody>
                </table>
            </div>
            <!-- /.card -->

    </div>
    <!-- /.col (RIGHT) -->
    </div>
    <!-- /.row -->
    </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->