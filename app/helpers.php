<?php 

if (! function_exists("page_title")) {

	function page_title($titre)
	{
		$titreBase = "Liste des artisants";

		if ($titre === "") 
		{
			return $titreBase;
		}else
		{
			return $titre . ' | ' . $titreBase;
		}
	}
	
}