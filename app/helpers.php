<?php


function bulanRomawi($bln){
    switch ($bln){
        case "01": 
            return "I";
            break;
        case "02":
            return "II";
            break;
        case "03":
            return "III";
            break;
        case "04":
            return "IV";
            break;
        case "05":
            return "V";
            break;
        case "06":
            return "VI";
            break;
        case "07":
            return "VII";
            break;
        case "08":
            return "VIII";
            break;
        case "09":
            return "IX";
            break;
        case "10":
            return "X";
            break;
        case "11":
            return "XI";
            break;
        case "12":
            return "XII";
            break;
    }
}

function generateKode($kode){

    return $value = substr(preg_replace("/[^bcdfghjklmnpqrstvwxyzBCDFGHJKLMNPQRSTVWXYZ]/", "", $kode), -3);

}

function GenerateNomorPasien($tanggal, $nama_pasien) {
    $date = strtotime($tanggal);
    $df = date('Y-m-d',$date);
    $tanggal = substr($df,8,2);
    $bulan = substr($df,5,2);
    $bulan_romawi = bulanRomawi($bulan);
    $tahun = substr($df,2,2);

    $nama = generateKode($nama_pasien);

    return $kode = $nama . '/' . $tanggal . '/' . $bulan_romawi . '/' . $tahun;
}