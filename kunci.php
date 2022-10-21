<?php

function encryptPassword($pass) {

    include 'lib.php';

    $plain = str_replace(' ', '', $pass);
    $key = 'daaniis';
    $panjang_plain = strlen($plain);
    $panjang_kunci = strlen($key);

    $index_x = 0;
    $index_y = 0;
    $hasil_cipher = array();
    $hasil_akhir = '';

    while ($index_x < $panjang_plain) {
        $x = substr($plain, $index_x, 1);
        $y = substr($key, $index_y, 1);

        $hasil_cipher[$index_x] = $tabel_vigenere[huruf_ke_angka($x)][huruf_ke_angka($y)];

        $index_x++;
        $index_y++;

        if ($index_y == $panjang_kunci) {
            $index_y = 0;
        }
    }

    $i = 0;
    while ($i < $index_x) {
        $hasil_akhir .= $hasil_cipher[$i];
        $i++;
    }

    return $hasil_akhir;
}

function decryptPassword($pass) {

    include 'lib.php';
    $key = 'daaniis';
    $hasil_cipher = str_replace(' ', '', $pass);
    $panjang_cipher = strlen($hasil_cipher);
    $panjang_kunci = strlen($key);

    $index_x = 0;
    $index_y = 0;
    $hasil_konversi = array();
    $hasil_akhir = '';

    while ($index_x < $panjang_cipher) {
        $x = substr($hasil_cipher, $index_x, 1);
        $y = substr($key, $index_y, 1);

        $konversi_x = huruf_ke_angka($x);
        $konversi_y = huruf_ke_angka($y);

        if ($konversi_x >= $konversi_y) {
            $hasil = $konversi_x - $konversi_y;
        } else {
            $hasil = $konversi_x + (26 - $konversi_y);
        }

        $hasil_konversi[$index_x] = angka_ke_huruf($hasil);

        $index_x++;
        $index_y++;

        if ($index_y == $panjang_kunci) {
            $index_y = 0;
        }
    }

    $i = 0;
    $hasil_akhir = '';
    while ($i < $index_x) {
        $hasil_akhir .= $hasil_konversi[$i];
        $i++;
    }

    return $hasil_akhir;

}