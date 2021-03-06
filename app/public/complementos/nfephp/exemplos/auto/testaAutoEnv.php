<?php
/**
 * Exemplo de uso do método autoEnvNFe()
 * Serão enviadas para a SEFAZ, conforme definido pelo arquivo config.php, as NFe contidas na pasta "validadas",
 * caso a conversão seja bem sucedida os arquivos txt serão movidos para a pasta "temporarias".
 *   
 * As funções auto contidas na classe seguem uma determinada lógica
 * e movimentam as NFes pelos diretorios da estrutura.
 * 
 * Estas são funções simplificadas que podem ser utilizadas em linha de comando com 
 * o CRON para automatizar as tarefas de gestão das NFe.
 * 
 * As funções auto não são muito adequadas para o tratamento de erros !!!
 * Portanto é desaconselhado seu uso em ambiente Produção, sem outras 
 * ações que permitam o tratamento dos erros.
 * 
 * Recomenda-se o teste e leitura atenta das mesmas antes de tentar por em uso.
 * 
 */
error_reporting(E_ALL);
require_once('../libs/AutoToolsNFePHP.class.php');
$nfe = new ToolsNFePHP;
if (!$nfe->autoEnvNFe()){
    echo $nfe->errMsg;
}
?>
