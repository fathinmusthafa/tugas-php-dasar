<?php
function luasLingkaran($jariJari){
    $luas = pi() * $jariJari * $jariJari;
    return number_format($luas, 2);
}
        
function kelilingLingkaran($jariJari){
    $keliling = 2 * pi() * $jariJari;
    return number_format($keliling, 2);
}
        
function luasPersegi($panjang, $lebar){
    $luas = $panjang * $lebar;
    return number_format($luas, 2);
}
        
for ($i = 1; $i <= 100; $i++) {
            
    if ($i % 3 == 0) {
        $jariJari = $i / 3;
        echo luasLingkaran($jariJari) . "<br>";
    }elseif ($i % 5 == 0) {
        $jariJari = $i / 5;
        echo kelilingLingkaran($jariJari) . "<br>";
    }elseif ($i % 3 == 0 && $i % 5 == 0) {
            $panjang = $i / 3;
            $lebar = $i / 5;
            echo luasPersegi($panjang, $lebar) . "<br>";
    }else{
        echo number_format($i, 2) . "<br>";
    }
}






?>