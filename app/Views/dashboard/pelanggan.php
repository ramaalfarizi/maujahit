<style>
    table,
    tb,
    th {
        border: 1px solid #333;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    td,
    th {
        padding: 2px;
    }

    th {
        background-color: #ccc;
    }

    @page {
        margin: 10px;
    }
</style>
<h1>Data Pelanggan</h1>
<?php $pdf = false;
if (strpos(current_url(), "printpdf")) {
    $pdf = true;
}
if ($pdf == false) {
?>
    <input type="button" value="Print PDF" onclick="window.open('<?= site_url('pelanggan/printpdf') ?>','blank')">
    <br>
    <br>
<?php } ?>

<table>
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