<div class="controller px-3">

    <div class="add-data">
        <h5><a href="<?php echo site_url('Welcome/VFormAddSiswa'); ?>">Add</a></h5>
    </div>

    <table class="table table-striped">
        <thead>
            <tr class="text-center">
                <th scope="col">NIS</th>
                <th scope="col">Nama</th>
                <th scope="col">Alamat</th>
                <th scope="col">Tools</th>
            </tr>
        </thead>
        <tbody>

            <?php
            if (!empty($DataSiswa)) {
                foreach ($DataSiswa as $ReadDS) {
            ?>

                    <tr class="text-center">
                        <td><?php echo $ReadDS->nis; ?></td>
                        <td><?php echo $ReadDS->nama; ?></td>
                        <td><?php echo $ReadDS->alamat; ?></td>
                        <td>
                            <a href="<?php echo site_url('Welcome/DataSiswa/' . $ReadDS->nis . '/view') ?>">Update</a>
                            <a href="<?php echo site_url('Welcome/DeleteDataSiswa/' . $ReadDS->nis) ?>" class="text-danger" onclick="return confirm('Hapus Data?');">Delete</a>


                        </td>
                    </tr>

            <?php
                }
            }
            ?>

        </tbody>
    </table>

</div>