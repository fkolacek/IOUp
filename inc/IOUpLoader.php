<?php
/*
 * IOUpLoader.php
 * 
 * Copyright 2014 Frantisek Kolacek <work@kolacek.it>
 * 
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
 * MA 02110-1301, USA.
 * 
 */

  class IOUpLoader{
    public static $loader = NULL;
    
    private static $paths = Array("./", "./inc/");
    private static $extensions = Array(".php", ".class.php");
    
    public function __construct(){
      spl_autoload_register(Array($this, "load"));
    }
    
    public static function init(){
      if(self::$loader === NULL)
	self::$loader = new self();

      return self::$loader;
    }
    
    public function load($className){
      foreach(self::$paths as $path){
	foreach(self::$extensions as $extension){
	 if(file_exists($path.$className.$extension)){
	  require $path.$className.$extension;
	  return true;
	 }
	}	
      }
      return false;
    }
  }