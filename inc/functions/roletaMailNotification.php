<?php

function mailRoletaNotification($nomePessoa, $emailPessoa, $premioId) {
    
    $name = get_bloginfo('name');
    switch ($premioId) {

        case 1: $details = ''; break;
        
        case 2: $details = '<h3>Desconto de 10%</h3><table class="table table-bordered"><tbody><tr><td>G&amp;G MODA INFANTIL</td><td>EXCETO COLEÇÃO NOVA</td></tr><tr><td>MIZIMA</td><td>TODA A LOJA</td></tr><tr><td>LOJA DOS IRMÃOS</td><td>TODA A LOJA</td></tr><tr><td>REY. CO</td><td>TODA A LOJA</td></tr><tr><td>VIGGORE MÓVEIS</td><td>TODA A LOJA</td></tr><tr><td>WINE FRIENDS</td><td>TODA A LOJA</td></tr><tr><td>PAPELEX</td><td>EXCETO CHAMEX</td></tr><tr><td>TASCA DO MARQUÊS</td><td>TODA A LOJA</td></tr><tr><td>ORTOBOM</td><td>TODA A LOJA</td></tr><tr><td>AEROCLASSIC</td><td>TODA A LOJA</td></tr><tr><td>QUIOSQUE HAVAIANAS</td><td>TODA A LOJA</td></tr><tr><td>BAR DO EDU</td><td>DRINKS</td></tr><tr><td>ATELIÊ ADRIANA NOVASQUE</td><td>TODA A LOJA</td></tr><tr><td>ESPAÇO ADRIANA NOVASQUE</td><td>TODO O SALÃO</td></tr><tr><td>CLUBE DO JEANS</td><td>CALÇA JEANS MODELO MON DA MARCA VGI 200630606 2006124261 2006124901</td></tr><tr><td>DELÍCIAS DA CANASTRA</td><td>TODA A LOJA</td></tr><tr><td>G&amp;G MODA INFANTIL</td><td>EXCETO COLEÇÃO NOVA</td></tr><tr><td>FOREVA</td><td>TODA A LOJA&nbsp;</td></tr></tbody></table>'; break;
        case 3: $details = '<h3>Desconto de 15%</h3><table class="table table-bordered"><tbody><tr><td>DINÁ MODAS</td><td>TODOS OS VESTIDOS EXCETO COLEÇÃO NOVA</td></tr><tr><td>MIRIAN DIAS ATELIÊ</td><td>MODELOS LUXO A PARTIR DE 169,90</td></tr><tr><td>VALENTINA T-SHIRT</td><td>TODA A LOJA</td></tr><tr><td>GIGANTE AEROTOWN</td><td>TODA A LOJA</td></tr><tr><td>LUMICASES&nbsp;</td><td>TODO O QUIOSQUE E MANUTENÇÃO DE CELULAR</td></tr><tr><td>MYNTI</td><td>TODA A LOJA</td></tr><tr><td>BRASUK</td><td>TODA A LOJA</td></tr><tr><td>MARQUINHOS BARBER SHOP</td><td>TODA A LOJA</td></tr><tr><td>RETRÔ SHOP</td><td>TODA A LOJA</td></tr><tr><td>AZ WOMEN`S&nbsp;</td><td>EXCETO COLEÇÃO NOVA</td></tr><tr><td>ALKAYAM</td><td>COMBINADO MIX ÁRABE</td></tr><tr><td>ABITO 21</td><td>EXCETO COLEÇÃO NOVA</td></tr><tr><td>OLECAS</td><td>TODA A LOJA</td></tr><tr><td>PET DOS IRMÃOS</td><td>EXCETO PRODUTOS EM PROMOÇÃO</td></tr><tr><td>BIZUZINHA</td><td>TODA A LOJA</td></tr><tr><td>MARK &amp; CAMISARIA</td><td>TODA A LOJA</td></tr><tr><td>CARTÃO PERFURADO</td><td>TODA A LOJA</td></tr></tbody></table>'; break;

        case 4: $details = ''; break;

        case 5: $details = '<h3>Desconto de 20%</h3><table class="table table-bordered"><tbody><tr><td>AP MODA FASHION</td><td>EXCETO PEÇAS EM PROMOÇÃO</td></tr><tr><td>G&amp;G MODA INFANTIL</td><td>EXCETO COLEÇÃO NOVA</td></tr><tr><td>OAKBERRY</td><td>AÇAÍ CLASSIC 350ML</td></tr><tr><td>CASA &amp; VIDEO</td><td>TODA A LOJA EXCETO CELULAR, TV E TABLET</td></tr></tbody></table>'; break;
        case 6: $details = '<h3>Desconto de 25%</h3><table class="table table-bordered"><tbody><tr><td>YES SHOES</td><td>TODA A LOJA EXCETO A COLEÇÃO NOVA</td></tr><tr><td>CLOVER</td><td>SAPATÊNIS COURO C/ PALMILHA EM GEL + TÊNIS ASICS GEL</td></tr><tr><td>NINE 21</td><td>VESTIDO ANIMAL PRINT ESTHER REF.: 9210356VESTIDO CORAL FOLHAGEM REF.: 9210355</td></tr><tr><td>AZ WOMEN`S&nbsp;</td><td>EXCETO COLEÇÃO NOVA</td></tr><tr><td>M&amp;K GLASSES</td><td>ÓCULOS DE SOL AVIADOR POLARIZADO REF.:</td></tr><tr><td>BOLICHE</td><td>1 HORA – SAPATOS NÃO INCLUSOS</td></tr><tr><td>PRATICITA</td><td>DRINKS</td></tr></tbody></table>'; break;

        case 7: $details = ''; break;

        case 8: $details = '<h3>Desconto de 30%</h3><table class="table table-bordered"><tbody><tr><td>G&amp;G MODA INFANTIL</td><td>EXCETO COLEÇÃO NOVA</td></tr><tr><td>KENTARO</td><td>CAIPIRINHA</td></tr></tbody></table>'; break;
        case 9: $details = '<h3>Desconto de 35%</h3><table class="table table-bordered"><tbody><tr><td>CHOPPEMPÉ</td><td>QUALQUER SANDUÍCHE</td></tr><tr><td>PIZZARIA SP</td><td>QUALQUER PIZZA</td></tr></tbody></table>'; break;
        case 10: $details = '<h3>Desconto de 45%</h3><table class="table table-bordered"><tbody><tr><td>OLECA`S</td><td>REGATAS MODELO NM MASC. E FEM.</td></tr></tbody></table>'; break;

        case 11: $details = ''; break;

        case 12: $details = '<h3>Desconto de 50%</h3><table class="table table-bordered"><tbody><tr><td>PEAHI</td><td>PEÇAS SELECIONADAS&nbsp;</td></tr></tbody></table>'; break;
        case 13: $details = '<h3>Desconto de 55%</h3><table class="table table-bordered"><tbody><tr><td>ILLA</td><td>TODA A LOJA EXCETO COLEÇÃO NOVA</td></tr><tr><td>MARIA VIOLETA</td><td>TODA A LOJA EXCETO COLEÇÃO NOVA</td></tr></tbody></table>'; break;
        case 14: $details = '<h3>Desconto de 75%</h3><table class="table table-bordered"><tbody><tr><td>GIN STORE</td><td>PEÇAS SELECIONADAS</td></tr></tbody></table>'; break;

    }
    

    if ($premioId != 1 && $premioId != 4 && $premioId != 7 && $premioId != 11) {

        $contentBook = '';
        $contentBook .= '
        <!DOCTYPE html>
        <html lang="pt-br">
            <head>
            <meta charset="UTF-8">
            <title>' . $name . '</title>
            </head>
            <body>
                <div style="font-size: 18px; font-family: \'Arial\', \'trebuchet MS\'; margin: 15px auto; width: 600px; " width="600">
                    <div align="center">
                        <img src="' . get_bloginfo('template_url') . '/img/logo.png" width="150" height="40" style="width: 150px; height: 40;" alt="' . $name . '">
                        <h2 style=" text-transform: uppercase;">Desconto Aerotown</h2>
                        <p>Olá, ' . $nomePessoa . ', você ganhou o desconto, verique abaixo as opções de lojas disponíveis para o seu desconto!</p>
                    </div>
                    <div>
                        ' . $details . '
                    </div>
                </div>
            </body>
        </html>
        ';
        $destinatario = array(
            $emailPessoa
        );
        $assunto = 'Blak Friday - Aerotown';
        $headers = array(
            'Content-Type: text/html; charset=UTF-8'
        );
        define('WP_USE_THEMES', false);
        require(ABSPATH . 'wp-load.php');
        wp_mail($destinatario, $assunto, $contentBook, $headers);
    }
}
