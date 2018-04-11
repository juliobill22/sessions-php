<?php
/**
 * @author julioenglish
 */
class sessionClass {
    public function __construct() {        
    }    
    public static function createSession () : void  {
        session_start();
    }            
    public static function setVariables () : void  {
        echo $_SESSION["favcolor"] = "green".'<br>';
        echo $_SESSION["favanimal"] = "cat".'<br>';
        echo $_SESSION["fhobby"] = "walk".'<br>';
        echo $_SESSION["fmusic"] = "ecletic".'<br>';
    }
    public static function getVariables () : void {
        echo '<br> Favorite color is: ' . $_SESSION["favcolor"] . '.<br>';
        echo '<br> Favorite animal is: ' . $_SESSION["favanimal"] . '.<br>';            
        echo '<br> Favorite hobby is: ' . $_SESSION["fhobby"] . '.<br>';            
        echo '<br> Favorite music is: ' . $_SESSION["fmusic"] . '.<br>';            
    }    
    public static function destroySession() : void {
        session_unset(); 
        session_destroy(); 
    }
}