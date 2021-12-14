<?= $this->extend('dashboard/layout') ?>
<?= $this->section('content') ?>

<!-- <!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Codeigniter 4 jQuery Autocomplete Text Search Example</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"> -->

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script> -->

<style>
    .container {
        max-width: 500px;
    }
</style>
</head>

<body>
    <h1 class="mt-4 text-center">Data Pekerja</h1>
    <div class="container mt-5">

        <select class="search form-control" name="search"></select>

    </div>
</body>

<script>
    $('.search').select2({
        placeholder: 'Cari nama pekerja',
        ajax: {
            url: '<?php echo base_url('AutocompleteSearch/ajaxSearch'); ?>',
            dataType: 'json',
            delay: 250,
            processResults: function(data) {
                return {
                    results: data
                };
            },
            cache: true
        }
    });
</script>

<!-- </html> -->

<?= $this->endSection() ?>