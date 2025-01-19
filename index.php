<div>
    <p> O seu IMC está na Faixa da:
        <b>
        <?php
$altura = 1.55;
$peso = 67;
$imc = $peso / ($altura * $altura); 

$faixa = "";

if($imc < 18.5){
    $faixa = "Magreza";
}else if ($imc >= 15.5 && $imc < 25){
    $faixa = "Normal";
}else if ($imc >=25 && $imc <30){
    $faixa = "Sobrepeso";
}else {
    $faixa = "Obesidade";
} 

echo $faixa;

        ?>
        <b>
    </p>
</div>



