    <!-- ############################ BEGIN OF CONTENT ############################### -->
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <?= $this->session->flashdata('message'); ?>
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Chat</h1>
                    </div><!-- /.col -->

                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <!-- ############################ BEGIN OF CONTENT ############################### -->
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">

                <table class="table mt-2">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">ID CHAT</th>
                            <th scope="col">USERNAME</th>
                            <th scope="col">ISI CHAT</th>
                            <th scope="col">CREATED AT</th>
                            <th scope="col"> ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($chat as $ket) {

                        ?>
                            <tr>
                                <td><?= $ket['id_chat']; ?></td>
                                <td><?= $ket['username']; ?></td>
                                <td><?= $ket['isi_chat']; ?></td>
                                <td><?= $ket['created_at']; ?></td>
                                <td>
                                    <a href="<?= base_url('Admin/Crud/Tbl_chat/'); ?>hapus/<?= $ket['id_chat']; ?>">hapus</a>
                                </td>

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