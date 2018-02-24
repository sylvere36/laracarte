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

//Pour mettre les classes actives aux pages
if (! function_exists("root_active_page")) {

	function root_active_page($route)
	{
		return Route::is($route) ? "active" : "";
	}
	
}