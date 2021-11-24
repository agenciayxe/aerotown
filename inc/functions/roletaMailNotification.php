<?php

function mailRoletaNotification($nomePessoa, $emailPessoa, $premioId) {
    
    $name = get_bloginfo('name');
    switch ($premioId) {

        case 1: $details = '<h3>Não foi dessa vez, tente novamente na próxima!</h3>'; break;
        
        case 2: $details = '<h3>Desconto de 10%</h3><table><tbody><tr><td border="1">G&amp;G MODA INFANTIL</td><td border="1">EXCETO COLEÇÃO NOVA</td></tr><tr><td border="1">MIZIMA</td><td border="1">TODA A LOJA</td></tr><tr><td border="1">LOJA DOS IRMÃOS</td><td border="1">TODA A LOJA</td></tr><tr><td border="1">REY. CO</td><td border="1">TODA A LOJA</td></tr><tr><td border="1">VIGGORE MÓVEIS</td><td border="1">TODA A LOJA</td></tr><tr><td border="1">WINE FRIENDS</td><td border="1">TODA A LOJA</td></tr><tr><td border="1">PAPELEX</td><td border="1">EXCETO CHAMEX</td></tr><tr><td border="1">TASCA DO MARQUÊS</td><td border="1">TODA A LOJA</td></tr><tr><td border="1">ORTOBOM</td><td border="1">TODA A LOJA</td></tr><tr><td border="1">AEROCLASSIC</td><td border="1">TODA A LOJA</td></tr><tr><td border="1">QUIOSQUE HAVAIANAS</td><td border="1">TODA A LOJA</td></tr><tr><td border="1">BAR DO EDU</td><td border="1">DRINKS</td></tr><tr><td border="1">ATELIÊ ADRIANA NOVASQUE</td><td border="1">TODA A LOJA</td></tr><tr><td border="1">ESPAÇO ADRIANA NOVASQUE</td><td border="1">TODO O SALÃO</td></tr><tr><td border="1">CLUBE DO JEANS</td><td border="1">CALÇA JEANS MODELO MON DA MARCA VGI 200630606 2006124261 2006124901</td></tr><tr><td border="1">DELÍCIAS DA CANASTRA</td><td border="1">TODA A LOJA</td></tr><tr><td border="1">G&amp;G MODA INFANTIL</td><td border="1">EXCETO COLEÇÃO NOVA</td></tr><tr><td border="1">FOREVA</td><td border="1">TODA A LOJA&nbsp;</td></tr></tbody></table>'; break;
        case 3: $details = '<h3>Desconto de 15%</h3><table><tbody><tr><td border="1">DINÁ MODAS</td><td border="1">TODOS OS VESTIDOS EXCETO COLEÇÃO NOVA</td></tr><tr><td border="1">MIRIAN DIAS ATELIÊ</td><td border="1">MODELOS LUXO A PARTIR DE 169,90</td></tr><tr><td border="1">VALENTINA T-SHIRT</td><td border="1">TODA A LOJA</td></tr><tr><td border="1">GIGANTE AEROTOWN</td><td border="1">TODA A LOJA</td></tr><tr><td border="1">LUMICASES&nbsp;</td><td border="1">TODO O QUIOSQUE E MANUTENÇÃO DE CELULAR</td></tr><tr><td border="1">MYNTI</td><td border="1">TODA A LOJA</td></tr><tr><td border="1">BRASUK</td><td border="1">TODA A LOJA</td></tr><tr><td border="1">MARQUINHOS BARBER SHOP</td><td border="1">TODA A LOJA</td></tr><tr><td border="1">RETRÔ SHOP</td><td border="1">TODA A LOJA</td></tr><tr><td border="1">AZ WOMEN`S&nbsp;</td><td border="1">EXCETO COLEÇÃO NOVA</td></tr><tr><td border="1">ALKAYAM</td><td border="1">COMBINADO MIX ÁRABE</td></tr><tr><td border="1">ABITO 21</td><td border="1">EXCETO COLEÇÃO NOVA</td></tr><tr><td border="1">OLECAS</td><td border="1">TODA A LOJA</td></tr><tr><td border="1">PET DOS IRMÃOS</td><td border="1">EXCETO PRODUTOS EM PROMOÇÃO</td></tr><tr><td border="1">BIZUZINHA</td><td border="1">TODA A LOJA</td></tr><tr><td border="1">MARK &amp; CAMISARIA</td><td border="1">TODA A LOJA</td></tr><tr><td border="1">CARTÃO PERFURADO</td><td border="1">TODA A LOJA</td></tr></tbody></table>'; break;

        case 4: $details = '<h3>Não foi dessa vez, tente novamente na próxima!</h3>'; break;

        case 5: $details = '<h3>Desconto de 20%</h3><table><tbody><tr><td border="1">AP MODA FASHION</td><td border="1">EXCETO PEÇAS EM PROMOÇÃO</td></tr><tr><td border="1">G&amp;G MODA INFANTIL</td><td border="1">EXCETO COLEÇÃO NOVA</td></tr><tr><td border="1">OAKBERRY</td><td border="1">AÇAÍ CLASSIC 350ML</td></tr><tr><td border="1">CASA &amp; VIDEO</td><td border="1">TODA A LOJA EXCETO CELULAR, TV E TABLET</td></tr></tbody></table>'; break;
        case 6: $details = '<h3>Desconto de 25%</h3><table><tbody><tr><td border="1">YES SHOES</td><td border="1">TODA A LOJA EXCETO A COLEÇÃO NOVA</td></tr><tr><td border="1">CLOVER</td><td border="1">SAPATÊNIS COURO C/ PALMILHA EM GEL + TÊNIS ASICS GEL</td></tr><tr><td border="1">NINE 21</td><td border="1">VESTIDO ANIMAL PRINT ESTHER REF.: 9210356VESTIDO CORAL FOLHAGEM REF.: 9210355</td></tr><tr><td border="1">AZ WOMEN`S&nbsp;</td><td border="1">EXCETO COLEÇÃO NOVA</td></tr><tr><td border="1">M&amp;K GLASSES</td><td border="1">ÓCULOS DE SOL AVIADOR POLARIZADO REF.:</td></tr><tr><td border="1">BOLICHE</td><td border="1">1 HORA – SAPATOS NÃO INCLUSOS</td></tr><tr><td border="1">PRATICITA</td><td border="1">DRINKS</td></tr></tbody></table>'; break;

        case 7: $details = '<h3>Não foi dessa vez, tente novamente na próxima!</h3>'; break;

        case 8: $details = '<h3>Desconto de 30%</h3><table><tbody><tr><td border="1">G&amp;G MODA INFANTIL</td><td border="1">EXCETO COLEÇÃO NOVA</td></tr><tr><td border="1">KENTARO</td><td border="1">CAIPIRINHA</td></tr></tbody></table>'; break;
        case 9: $details = '<h3>Desconto de 35%</h3><table><tbody><tr><td border="1">CHOPPEMPÉ</td><td border="1">QUALQUER SANDUÍCHE</td></tr><tr><td border="1">PIZZARIA SP</td><td border="1">QUALQUER PIZZA</td></tr></tbody></table>'; break;
        case 10: $details = '<h3>Desconto de 45%</h3><table><tbody><tr><td border="1">OLECA`S</td><td border="1">REGATAS MODELO NM MASC. E FEM.</td></tr></tbody></table>'; break;

        case 11: $details = '<h3>Não foi dessa vez, tente novamente na próxima!</h3>'; break;

        case 12: $details = '<h3>Desconto de 50%</h3><table><tbody><tr><td border="1">PEAHI</td><td border="1">PEÇAS SELECIONADAS&nbsp;</td></tr></tbody></table>'; break;
        case 13: $details = '<h3>Desconto de 55%</h3><table><tbody><tr><td border="1">ILLA</td><td border="1">TODA A LOJA EXCETO COLEÇÃO NOVA</td></tr><tr><td border="1">MARIA VIOLETA</td><td border="1">TODA A LOJA EXCETO COLEÇÃO NOVA</td></tr></tbody></table>'; break;
        case 14: $details = '<h3>Desconto de 75%</h3><table><tbody><tr><td border="1">GIN STORE</td><td border="1">PEÇAS SELECIONADAS</td></tr></tbody></table>'; break;
        
        default: $details = '<h3>Não foi dessa vez, tente novamente na próxima!</h3>'; break;

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
                        <img src="' . get_bloginfo('template_url') . '/img/logo-aerotown-horizontal.png" width="150" height="40" style="width: 150px; height: 40;" alt="' . $name . '">
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
