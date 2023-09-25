<?php

function getHeaderPdf(){
    $header = '
        <div class="container-header">
            <div class="header-img">
                <img src="img/logo.png" alt="Logo" class="logo-pdf">
            </div>
    
            <div class="titulo-pdf">
                <h1 class="titulo">Orçamento</h1>
                <h4 class="subtitulo"><i>Creative Software Corporation</i></h4>
            </div>
        </div>';

    return $header;
}


function getFooterPdf(){
    $footer = '  
        <div class="container-footer">
            <table>
                <tr>
                    <td style="width: 50%; text-align: left; font-size: 10px;">
                        <p><i>Gerado em: {DATE j-m-Y}</i></p>        
                        <p><i>Todos os direitos reservados</i></p>
                    </td>
                    <td style="width: 50%; text-align: right;">{PAGENO}/{nbpg}</td>
                </tr>
            </table>
        </div>';

    return $footer;
}