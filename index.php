<?php 
/*
 * index.php
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

  require "./inc/IOUpLoader.php";
  require "./inc/config.php";
  
  IOUploader::init();
  
  try{
    $api = new IOUpApi($config);
  }
  catch(IOUpException $e){
    echo $e->getMessage();
  }
  
  
  echo "All done";