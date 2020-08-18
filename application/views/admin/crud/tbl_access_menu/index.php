<div class="content-wrapper">
    <?= $this->session->flashdata('message'); ?>
    <div class="container-fluid">
        <div class="row mt-3">
            <div class="col">
                <h4>HALAMAN ACCESS MENU</h4>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <a href="<?= base_url('Admin/Crud/Tbl_Access_Menu/tambah') ?>" class="btn btn-primary">Tambah</a>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">NO</th>
                            <th scope="col">NAMA ROLE</th>
                            <th scope="col">NAMA MENU</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php
                            $i = 1;
                            foreach ($accessMenu  as $acm) {

                            ?>
                                <th scope="row"><?= $i++ ?></th>
                                <td><?= $acm['nama_role']; ?></td>
                                <td><?= $acm['nama_menu']; ?></td>
                                <td>
                                    <a href="<?= base_url('Admin/Crud/Tbl_Access_Menu') ?>/hapus/<?= $acm['id_access_menu']; ?>">Hapus</a>
                                    ||
                                    <a href="<?= base_url('Admin/Crud/Tbl_Access_Menu') ?>/ubah/<?= $acm['id_access_menu']; ?>">Ubah</a>
                                </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>