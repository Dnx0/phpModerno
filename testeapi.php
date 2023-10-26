<pre>
<?php
$inicio = date("m-d-Y" , strtotime("-7 days"));

$fim = date("m-d-Y");

$url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio .'\'&@dataFinalCotacao=\''.$fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

#json_decode lê um arquivo no formato json
$dados = json_decode(file_get_contents($url), true);

//var_dump($dados);

$cotação = $dados["value"][0]["cotacaoCompra"];

//echo"cotação atual de ".number_format($cotação , 2) ."
?>  
</pre>