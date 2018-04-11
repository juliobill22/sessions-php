<?php 
    require './OO/sessionClass.php';
    echo '--------------------CRIANDO A SESSÃO--------------------<br>';
    sessionClass::createSession();
    echo '--------------------CRIOU A SESSÃO--------------------<br>';
?>
<!DOCTYPE html>
<html>
    <body>
        <?php 
            echo '<br>--------------------SETANDO AS VARIÁVEIS--------------------<br>';
            sessionClass::setVariables();        
            echo '<br>--------------------DESTRUINDO A SESSÃO--------------------<br>';
            sessionClass::destroySession();
            echo '<br>--------------------RETORNANDO AS VARIÁVEIS APÓS DESTRUIR A SESSÃO--------------------<br>';
            sessionClass::getVariables();
            echo '<br>--------------------SETANDO AS VARIÁVEIS--------------------<br>';
            sessionClass::setVariables();        
            echo '<br>--------------------RETORNANDO AS VARIÁVEIS--------------------<br>';
            sessionClass::getVariables();
        ?>        
    </body>
</html>