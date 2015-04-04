<?php

 namespace Myfc\Session;
 
  /**
   * 
   * Extend lerde kullan�lmak �zere Interfaceler 
   * @author vahit�erif
   *
   */
 
 interface SessionInterface{
     
     
     public function flush();
     
     public function get($name);
     
     public function set($name, $value);
     
     public function delete($name);
     
     public function check();
     
     
 }