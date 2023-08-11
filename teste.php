<pre>
<?php
$url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'08-04-2023\'&@dataFinalCotacao=\'08-11-2023\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

$dados = json_decode(file_get_contents($url), true);

var_dump($dados);

$cotação = $dados["value"][0]["cotacaoCompra"];

echo"A cotação foi $cotação"
?>  
</pre>