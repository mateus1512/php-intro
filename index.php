<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        $categorias = [];
        $categorias[]= 'infantil';
        $categorias[]= 'adolescente';
        $categorias[] = 'adulto';
        //print_r($categorias)
        
        $nome ='Mateus';
        $idade = 20;
        
        //var_dump($nome);
        //var_dump($idade);
        
        if($idade >=6 && $idade <=12)
        {
            for($i =0; $i <= count($categorias); $i++)
            {
                if ($categorias[$i] == 'infantil') 
                   echo "o nadador " . $nome . " compete na categoria " .$categorias[$i];
            }
        }
        else if($idade >=13 && $idade <=18)
        {
            for($i =0; $i <= count($categorias); $i++)
            {
                if ($categorias[$i] == 'adolescente') 
                   echo "o nadador " . $nome . " compete na categoria " .$categorias[$i];
            }
        }
        else
        {
            for($i =0; $i <= count($categorias); $i++)
            {
                if ($categorias[$i] == 'adulto') 
                   echo "o nadador " . $nome . " compete na categoria " .$categorias[$i];
            }
        }
        
        ?>
    </body>
</html>
