<!doctype html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.79.0">
    <title>Sticky Footer Template · Bootstrap v5.0</title>
    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/5.0/examples/sticky-footer/sticky-footer.css" rel="stylesheet">
</head>

<body class="d-flex flex-column h-100">

    <!-- Begin page content -->
    <main class="flex-shrink-0">
        <div class="container-fluid">
            <h1 class="mt-5">Data Pegawai</h1>
            <hr />
            <table class="table table-hover table-bordered">
                <thead>
                    <tr class="table-primary">
                        <th>No</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>No Telp</th>
                        <th>Email</th>
                        <th>Tanggal Lahir</th>
                        <th>Alamat</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($pegawai as $row) {
                    ?>
                        <tr>
                            <td><?= $nomor++; ?></td>
                            <td><?= $row->nama; ?></td>
                            <td><?= $row->jenis_kelamin; ?></td>
                            <td><?= $row->no_telp; ?></td>
                            <td><?= $row->email; ?></td>
                            <td><?= $row->tanggal_lahir; ?></td>
                            <td><?= $row->alamat; ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
            <?= $pager->links('pegawai', 'bootstrap_pagination'); ?>
        </div>
    </main>

    <footer class="footer mt-auto py-3 bg-light">
        <div class="container">
            <span class="text-muted">Place sticky footer content here.</span>
        </div>
    </footer>
</body>

</html>