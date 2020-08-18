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
                        <label for="siswa">SISWA</label>
                        <select class="form-control" id="siswa" name="siswa_id">
                            <?php foreach ($this->db->get('tbl_siswa')->result_array() as $sw) {
                            ?>
                                <option value="<?= $sw['id_siswa']; ?>"><?= $sw['nama_siswa']; ?></option>
                            <?php } ?>

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                        <select class="form-control" id="keterangan" name="keterangan_id">
                            <?php foreach ($this->db->get('tbl_keterangan')->result_array() as $ktg) {
                            ?>
                                <option value="<?= $ktg['id_keterangan']; ?>"><?= $ktg['nama_keterangan'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </form>
            </div>
        </div>
    </div>
</div>