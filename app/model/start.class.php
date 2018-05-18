<?php
  /*
  * @author João Artur
  * @description www.joaoartur.com - www.github.com/JoaoArtur
  */

  // Modelo de Entrada

  abstract class Start {
    public static function get($texto) {
      if (isset($_GET[$texto])) {
        return Security::antisql($_GET[$texto]);
      } else {
        return false;
      }
    }
    public static function session($texto) {
      if (isset($_SESSION[$texto])) {
        return Security::antisql($_SESSION[$texto]);
      } else {
        return false;
      }
    }
    public static function post($texto) {
      if (isset($_POST[$texto])) {
        return Security::antisql($_POST[$texto]);
      } else {
        return false;
      }
    }
  }
?>