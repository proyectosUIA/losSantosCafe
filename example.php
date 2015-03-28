<?php
	$pagenumber = 1;
	$totalrecords = 40;
	$pagesize=20;
	include_once("pagination.php"); 
	$pg = new bootPagination();
	$pg->pagenumber = $pagenumber;
	$pg->pagesize = $pagesize;
	$pg->totalrecords = $totalrecords;
	$pg->showfirst = true;
	$pg->showlast = true;
	$pg->paginationcss = "pagination-normal";
	$pg->paginationstyle = 1; // 1: advance advance pagination, 0: normal pagination
	$pg->defaultUrl = "index.php";
	$pg->paginationUrl = "index.php?p=[p]";
	echo $pg->process();
?>


