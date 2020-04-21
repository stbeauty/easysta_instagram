<?php
	function pagination () { 
		if (isset($_GET['pageno'])) {
    		$pageno = $_GET['pageno'];
		} else {
    		$pageno = 1;
		}

		$no_of_records_per_page = 8;
		$offset = ($pageno-1) * $no_of_records_per_page; 

		$total_rows = 200;
        $total_pages = 25;
	
		return $offset;
	}
