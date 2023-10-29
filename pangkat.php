<?php
    function pangkat($angka, $pangkat) {
        $hasil    = $angka;
        for($i=0;$i<($pangkat-1);$i++) {
            $hasil    = $hasil * $angka;
        }
        return $hasil;
    }
    echo "5 pangkat 4 =" . pangkat(5,4)
?>