<?php
    function cetak_gambar($panjang){
        /*Fungsi Mencetak Gambar
        * Parameter Harus Ganjil
        * Jika Genap Muncul Tulisan 'Parameter Harus Ganjil'*/
        //mengecek apakah panjangnya genap atau ganjil
        $ganjil = $panjang % 2 == 0 ? TRUE : FALSE;

        if($ganjil){

?>