<?php
/*
 * IOUpDatabase.php
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

  class IOUpDatabase{
  
    private $dbHandler;

    public function __construct($fileName){
    
      if(!extension_loaded("sqlite3"))
	throw new IOUpException("There is no SQLite3 support!");
      
      //if(!file_exists($fileName))
	//throw new IOUpException("Database '".$fileName."' does not exist!");

      $this->dbHandler = new SQLite3($fileName);
      
    }
    
    public function __destruct(){
      $this->dbHandler->close();
      unset($this->dbHandler);
    }
    
    public buildFromScratch(){
      //$this->dbHandler->exec("CREATE TABLE test");
    }

  }