<div class="content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <h2>Halaman Tambah Data</h2>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <form method="post">
                    <div class="form-group">
                        <label for="role">Role</label>
                        <select class="form-control" id="role" name="role_id">
                            <?php foreach ($this->db->get('tbl_role')->result_array() as $sw) {
                            ?>
                                <option value="<?= $sw['id_role']; ?>"><?= $sw['nama_role']; ?></option>
                            <?php } ?>

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="menu">Menu</label>
                        <select class="form-control" id="menu" name="menu_id">
                            <?php foreach ($this->db->get('tbl_menu')->result_array() as $ktg) {
                            ?>
                                <option value="<?= $ktg['id_menu']; ?>"><?= $ktg['nama_menu']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </form>
            </div>
        </div>
    </div>
</div>