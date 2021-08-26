<?php

    $bulan= 8;
    $tanggal= 23;

    switch ($bulan) {
        case 1:

            if ($tanggal >=1 && $tanggal <=20) {
                $hasil = 'Capricorn';
            }

            if (tanggal >=21 && $tanggal <=31) {
                $hasil='Aquarius';
            }

            break;

        case 2:

            if ($tanggal >=1 && $tanggal <=19) {
                $hasil = 'Aquarius';
            }

            if (tanggal >=20 && $tanggal <=28) {
                $hasil='Pisces';
            }

            break;

        case 3:

            if ($tanggal >=1 && $tanggal <=20) {
                $hasil = 'Pisces';
            }

            if (tanggal >=21 && $tanggal <=31) {
                $hasil='Aquarius';
            }

            break;

        case 4:

            if ($tanggal >=1 && $tanggal <=20) {
                $hasil = 'Aries';
            }

            if (tanggal >=21 && $tanggal <=30) {
                $hasil='Taurus';
            }

            break;

        case 5:

            if ($tanggal >=1 && $tanggal <=21) {
                $hasil = 'Taurus';
            }

            if (tanggal >=22 && $tanggal <=31) {
                $hasil='Gemini';
            }

            break;

        case 6:

            if ($tanggal >=1 && $tanggal <=22) {
                $hasil = 'Gemini';
            }

            if (tanggal >=22 && $tanggal <=30) {
                $hasil='Cancer';
            }

            break;

        case 7:

            if ($tanggal >=1 && $tanggal <=22) {
                $hasil = 'Cancer';
            }

            if (tanggal >=23 && $tanggal <=31) {
                $hasil='Leo';
            }

            break;

        case 8:
            
            if ($tanggal >=1 && $tanggal <=21) {
                $hasil = 'Leo';
            }
    
            if ($tanggal >=22 && $tanggal <=31) {
                $hasil = 'Virgo';
            }
    
            break;

        case 9:

            if ($tanggal >=1 && $tanggal <=23) {
                $hasil = 'Virgo';
            }

            if (tanggal >=24 && $tanggal <=30) {
                $hasil='Libra';
            }

            break;

        case 10:

            if ($tanggal >=1 && $tanggal <=23) {
                $hasil = 'Libra';
            }

            if (tanggal >=24 && $tanggal <=31) {
                $hasil='Scorpio';
            }

            break;

        case 11:

            if ($tanggal >=1 && $tanggal <=22) {
                $hasil = 'Scorpio';
            }

            if (tanggal >=23 && $tanggal <=30) {
                $hasil='Sagitarius';
            }

            break;

        case 12:

        if ($tanggal >=1 && $tanggal <=22) {
            $hasil = 'Sagitarius';
        }

        if (tanggal >=23 && $tanggal <=31) {
            $hasil='Capricorn';
        }

        break;


    default:
        $hasil= 'BELUM ADA';
        break;
    }

    echo $hasil;
?>