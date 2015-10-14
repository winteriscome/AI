<?php

	function listDir($dir = '.'){
		if($handle = opendir($dir)){
			while(false !== ($file = readdir($handle)))
			{
				if($file == '.'|| $file == '..'){
					continue;
				}
				if(is_dir($sub_dir = realpath($dir.'/'.$file)))
				{
					echo 'FILE IN PATH:'.$dir.':'.$file."\n"; 
					listDir($sub_dir);
				}
				else{
					echo 'FILE:'.$file."\n";
				}
			}
			closedir($handle);
		}
	}

	listDir('.');
	
?>