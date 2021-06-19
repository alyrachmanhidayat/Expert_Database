<!DOCTYPE html>
<html lang="en">

<head>
    <title>Expert Database</title>

    <!--bootstrap 5.0 CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets\CSS\v_index_CSS.css">

    <!--DataTables integration-->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">

</head>

<body>
    <div class="container">
        <table id="example" class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Occupation</th>
                    <th>Area Of Expertise</th>
                    <th>Work Area With SEAMEO CECCEP</th>
                    <th>Article Of Presentation</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 1;
                //numbering di table
                //fetch_array() fungsi untuk dapetin data dlm bentuk array lalu di iterasi sejumlah data yang dari query
                while ($experts = $listExperts->fetch_array()) {
                ?>
                    <!--memanggil isi field dari database ke table di index.php-->
                    <tr>
                        <th><?= $i++ ?></th>
                        <td><?= $experts['name'] ?></td>
                        <td><?= $experts['phone'] ?></td>
                        <td><?= $experts['email'] ?></td>
                        <td><?= $experts['occupation'] ?></td>
                        <td><?= $experts['expertise'] ?></td>
                        <td><?= $experts['workarea_ceccep'] ?></td>
                        <td><?= $experts['article_presentation'] ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <script>
            $(document).ready(function() {
                $('#example').DataTable();
            });
        </script>
    </div>
</body>

</html>