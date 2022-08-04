<?php 
$angka = 101;
echo penyebut($angka);

function penyebut($nilai) {
    $nilai = abs($nilai); // Ganti
    $huruf = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
    $temp  = "";
    if ($nilai <= 0 or $nilai > 100) {
        echo "silahkan masukkan bilangan 1-100";
    } else if ($nilai < 12) {
        $temp = " " . $huruf[$nilai];
    } else if ($nilai < 20) {
        $temp = penyebut($nilai - 10) . " belas";
    } else if ($nilai < 100) {
        $temp = penyebut($nilai / 10) . " puluh" . penyebut($nilai % 10);
    } else {
        echo "seratus";
    }

    return $temp;
}
?>