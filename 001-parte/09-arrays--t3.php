<?php
// Arrya associativos, quando o indice e uma string
$pessoa= array("nome"=> "Andriw", "idade"=> 23, "altura"=> 1.76);
echo $pessoa["nome"]."<hr>";
echo $pessoa["altura"]."<hr>";

// inserindo valores

$pessoa["cidade"] = "Ponta Grossa";
print_r($pessoa);
echo"<hr>";


foreach($pessoa as $indice => $valor){ // vai trazer o indice e os valores

    echo $indice.":".$valor.'<br>';
}
echo "<hr>";

// Arrays multidimensionais
$times = array(
    "cariocas"=>array("campeao"=>"Vasco","vice"=>"Flamengo","terceiroLugar"=>"Bota Fogo"),
    "paulistas"=>array("o melhor"=>"Santos","quase la"=>"Sao Paulo", "sem mundial"=>"Palmeiras"),
    "paranaense"=>array("mais famoso"=>"Curitiba","segundo"=>"Atletico","conhecido"=>"Operario"),
);

echo $times["cariocas"]["campeao"];
echo"<hr>";

foreach($times["cariocas"] as $indice => $valor) {

    echo $indice.":".$valor."<br>";
};
echo "<hr>";



foreach($times as $indice =>$valor){ // o indice recebe os indice por conta de ser atribuido os valores a var $valor

    foreach($times[$indice] as $indice2 =>$valor2){ // o time recebe o indice e o @indice2 e o novo indice dentro do array e o $valor2 o valor dos array dentro do array
        echo $indice2.':'.$valor2."<br>"; // printa o indice e o valor

    };
    echo "<hr>";
}

?>