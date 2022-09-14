<?php 
/**
 * Plantilla HTML5 para renderización de datos
 */
    $rows = '';
    // Generamos el contenido de la tabla de renderización de datos
    if(isset($data['content']) && count($data['content']) > 0){
        $rows = '';
        foreach ($data['content'] as $value) {
            $rows .= "<tr>";
            foreach ($value as $val){
                $rows .= <<<HTML
                <td>$val</td>
            HTML;
            }
            $rows .= "</tr>";
        }
    } else {
        $rows = 'No data to display';
    }

    $template = file_get_contents('./templates/template.html');
    foreach ($data as $clave => $valor) {
        if($clave == 'content'){
            if(!isset($data['content']) || count($data['content']) === 0){
                $template = str_replace('{header}', '', $template);
                $template = str_replace('{'.$clave.'}', $rows, $template);
            } else {
                $tableHeader = <<<HTML
            <tr>
                <th>ID</th>
                <th>PRODUCTO</th>
                <th>DESCRIPCIÓN</th>
                <th>STOCK (uds.)</th>
                <th>PRECIO (€)</th>
            </tr>
            HTML;
                $template = str_replace('{header}', $tableHeader, $template);
                $template = str_replace('{'.$clave.'}', $rows, $template);
            }
        } else {
            $template = str_replace('{'.$clave.'}', $valor, $template);
        }

        
    }
    echo $template;
?>