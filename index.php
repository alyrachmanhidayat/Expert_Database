    <?php
    // connect index.php dengan library.php dan v_index.php
    include 'library/library.php';

    //panggil fungsi ini utk halaman yg diberi hak akses login (user harus login aga r bisa akses)
    cekLogin();

    //query dibawah untuk menampilkan tabel experts ke tampilan web
    //variable $sql  digunakan untuk mengirim perintah ='SELECT * FROM experts' query ke sql
    $sql = 'SELECT * FROM experts';

    // ngirim perintah yang ada di variable sql ke mysql, nanti respon baka disimpan ke variable listExperts
    $listExperts = $mysqli->query($sql);
    include 'views/v_index.php';
    ?>