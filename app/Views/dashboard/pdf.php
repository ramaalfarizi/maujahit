<?= $this->extend('dashboard/layout') ?>
<?= $this->section('content') ?>
<h1 class="mt-4">Data Pelanggan</h1>
<?php $pdf = false;
if (strpos(current_url(), "printpdf")) {
    $pdf = true;
}
if ($pdf == false) {
?>
    <input class="btn btn-success" type="button" value="Print PDF" onclick="window.open('<?= site_url('pelanggan/printpdf') ?>','blank')">
    <br>
    <br>
<?php } ?>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        DataTable Example
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Telp.</th>
                    <th>Alamat</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $nomor = 1;
                foreach ($pelanggan as $values) {
                ?>
                    <tr>
                        <td><?= $nomor ?></td>
                        <td><?= $values['nama'] ?></td>
                        <td><?= $values['no_telp'] ?></td>
                        <td><?= $values['alamat'] ?></td>
                        <td><?= $values['email'] ?></td>
                    </tr>
                <?php
                    $nomor++;
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
<?= $this->endSection() ?>