<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>whatsapp send chat</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@100;300;600&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h1>Follow UP Customer</h1>
        <?php
        $data = 0;
        while ($data < 5):
        ?>
        <div class="box">
            <form action="" method="POST" target="_blank">
                <input type="text" name="id" placeholder="NOMOR ID" required autofocus>
                <input type="text" name="number" placeholder="NOMOR CUSTOMER" required>
                <input type="submit" name="kirim" placeholder="kirim" class="tombol">
            </form>
        </div>
        <?php
        $data++;
        endwhile;
        ?>
    </div>
    <?php
        include 'fungsi.php';
        if ( isset($_POST['kirim']) > 0 ) {
            $id = $_POST['id'];
            $number = $_POST['number'];
            $num_send = ubah_nomor($number);
            echo kirim($id, $num_send);
        }
    ?>
</body>

</html>