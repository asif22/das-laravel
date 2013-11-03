<?php

class Custom {

    public static function changeDateFormat($cdate){

		list($day,$month,$year)= explode("-",$cdate);
		return $year."-".$month."-".$day;
		
	}
	
    public static function rmdir_recursive($dir) {
		foreach(scandir($dir) as $file) {
			if ('.' === $file || '..' === $file) continue;
			if (is_dir("$dir/$file")) rmdir_recursive("$dir/$file");
			else unlink("$dir/$file");
		}
		rmdir($dir);
	}

}

?>
