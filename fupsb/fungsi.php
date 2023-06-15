<?php
function ubah_nomor($phone) {
    $delete = str_split(preg_replace("/[^0-9]/", "", $phone)); 
    
    $data = [];

    foreach ( $delete as $del ) {
            $data[] = $del;
    }
    if ( $data[0] == '0' ) {
        $data[0] = '+62';
    }
    return implode($data);
}

function kirim($id, $nomor) {
    $ex = "$nomor?text=Pelanggan yang terhormat, kami dari layanan Customer Support Maxnet+ Kabel Telekom Group. Terimakasih atas kepercayaannya menggunakan layanan kami. Mohon bantuannya untuk dicek kembali pada Stiker yang tertempel pada modem. Apabila pada kolom ID Pelanggan masih kosong (belum tertulis),  mohon bantuannya untuk dituliskan id ($id) pada stiker yang tertera pada modem, untuk keperluan  bilamana suatu saat membutuhkan update, dapat kami bantu dari pusat dengan melihat ID tersebut. Terima kasih.";
    header("Location: https://wa.me/$ex");
    return(1);
}
?>