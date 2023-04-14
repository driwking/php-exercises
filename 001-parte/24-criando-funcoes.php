<?php
    // CRIANDO FUNCOES

    Function exibirNome($nome){ // passanod parametros
        echo "Meu nome e $nome";

    };
    exibirNOme("Andriw Aparecido");
    
    echo "<hr>";

    function calculaMedia($nome,$n1,$n2,$n3,$n4) {

        $media = ($n1 + $n2 + $n3 + $n4) / 4;
        if($media >= 7):
            echo "$nome foi aprovado com a media $media";
        else:
            echo"$nome foi reprovado";
        endif;
    };
    calculaMedia("andriw", 7,7,10,8);
    echo "<hr>";
    calculaMedia("george",2,5,3,1);
?>