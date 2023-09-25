<?php

// function que gera o conteúdo do pdf
function getBodyPdf() {
    $content = '
        <body>
            <div class="container">
                <div class="table-test">
                    <h4>table 1</h4>
                    <table>
                        <thead>
                            <tr class="tr-custon">
                                <th class="th-custon">Código</th>
                                <th class="th-custon">Empresa</th>
                                <th class="th-custon">Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="td-custon">1</td>
                                <td class="td-custon">Empresa 1</td>
                                <td class="td-custon">Editar</td>
                            </tr>
                            <tr>
                                <td class="td-custon">2</td>
                                <td class="td-custon">Empresa 2</td>
                                <td class="td-custon">Editar</td>
                            </tr>
                            <tr>
                                <td class="td-custon">3</td>
                                <td class="td-custon">Empresa 3</td>
                                <td class="td-custon">Editar</td>
                            </tr>
                            <tr>
                                <td class="td-custon">4</td>
                                <td class="td-custon">Empresa 4</td>
                                <td class="td-custon">Editar</td>
                            </tr>
                            <tr>
                                <td class="td-custon">5</td>
                                <td class="td-custon">Empresa 5</td>
                                <td class="td-custon">Editar</td>
                            </tr>
                            <tr>
                                <td class="td-custon">6</td>
                                <td class="td-custon">Empresa 6</td>
                                <td class="td-custon">Editar</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <br>
                <p>
                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                    The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using "Content here, content here", making it look like readable English. 
                    Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for "lorem ipsum" will uncover many web sites still in their infancy.
                    Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                </p>
            </body>';

    return $content;
}
