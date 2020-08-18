<div class="content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <h4>Halaman Admin</h4>
            </div>
        </div>
        <div class="row">
            <div class="col">

            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">NO</th>
                        <th scope="col">USERNAME</th>
                        <th scope="col">CONTACT</th>
                        <th scope="col">ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php
                        $i = 1;
                        foreach ($admin as $adm) {

                        ?>
                            <th scope="row"><?= $i++ ?></th>
                            <td><?= $adm['username']; ?></td>
                            <td><?= $adm['no_telp']; ?></td>
                            <td>
                                <a href="">Hapus</a>
                                ||
                                <a href="">edit</a>
                            </td>
                        <?php } ?>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>
</div>