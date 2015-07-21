<?php  

namespace myProject; 

?>

<?php

//Single Flavor Checks
	printf("<b>Single Flavor Checks</b><br>");
	//BEGIN SUGARCRM flav=pro ONLY
		printf("pro only<br>");
	//END SUGARCRM flav=pro ONLY

	//BEGIN SUGARCRM flav=ent ONLY
		printf("ent only<br>");
	//END SUGARCRM flav=ent ONLY

	//BEGIN SUGARCRM flav=ult ONLY
		printf("ult only<br>");
	//END SUGARCRM flav=ult ONLY


//Nested Single Flavor Checks
	printf("<b>Nested Single Flavor Checks</b><br>");
	//BEGIN SUGARCRM flav=pro ONLY
		printf("pro only<br>");
		//BEGIN SUGARCRM flav=ent ONLY
			printf("ent only<br>");
			//BEGIN SUGARCRM flav=ult ONLY
				printf("ult only<br>");
			//END SUGARCRM flav=ult ONLY
		//END SUGARCRM flav=ent ONLY
	//END SUGARCRM flav=pro ONLY


//Double Flavor Checks
	printf("<b>Double Flavor Checks</b><br>");
	//BEGIN SUGARCRM flav=pro && flav=ent ONLY
		printf("pro && ent only<br>");
	//END SUGARCRM flav=pro && flav=ent ONLY

	//BEGIN SUGARCRM flav=pro && flav=ult ONLY
		printf("pro && ult only<br>");
	//END SUGARCRM flav=pro && flav=ult ONLY

	//BEGIN SUGARCRM flav=ent && flav=ult ONLY
		printf("ent && ult only<br>");
	//END SUGARCRM flav=ent && flav=ult ONLY


//Deprecated Cases
	printf("<b>Deprecated Cases</b><br>");
	//BEGIN SUGARCRM flav=int ONLY
		printf("int only<br>");
	//END SUGARCRM flav=int ONLY

	//BEGIN SUGARCRM flav=corp ONLY
		printf("corp only<br>");
	//END SUGARCRM flav=corp ONLY

	//BEGIN SUGARCRM flav=com ONLY
		printf("com only<br>");
	//END SUGARCRM flav=com ONLY

	//BEGIN SUGARCRM lic=sub ONLY
		printf("lic=sub only<br>");
		//BEGIN SUGARCRM flav=int ONLY
			printf("int only<br>");
			//BEGIN SUGARCRM flav=com ONLY
				printf("com only<br>");
			//END SUGARCRM flav=com ONLY
		//END SUGARCRM flav=int ONLY
	//END SUGARCRM lic=sub ONLY


//Special Cases
	printf("<b>Special Cases</b><br>");
	//BEGIN SUGARCRM flav=com && flav!=com ONLY
		printf("com && !=com<br>"); //Shouldn't pass.
	//END SUGARCRM flav=com && flav!=com ONLY

	//BEGIN SUGARCRM flav=dev && flav!=dev ONLY
		printf("dev && !=dev<br>"); //Shouldn't pass.
	//END SUGARCRM flav=dev && flav!=dev ONLY

	//BEGIN SUGARCRM flav=ent && flav!=ent ONLY
		printf("ent && !=ent only<br>"); //Shouldn't pass pass.
	//END SUGARCRM flav=ent && flav!=ent ONLY

	//BEGIN SUGARCRM lic=sub && lic!=sub ONLY
		printf("sub && lic!=sub only<br>");  //Will pass. Should we do something about this?
	//END SUGARCRM lic=sub && lic!=sub ONLY

	//BEGIN SUGARCRM flav=int && flav!=int ONLY
		printf("int && flav!=int only<br>");	//Shouldn't pass. 
	//END SUGARCRM flav=int && flav!=int ONLY


//Testing Reverse Hierarchy
	printf("<b>Testing Reverse Hierarchy</b><br>");
	//BEGIN SUGARCRM flav=ult ONLY
		printf("ult only<br>");
		//BEGIN SUGARCRM flav=pro ONLY
			printf("pro only<br>");
		//END SUGARCRM flav=pro ONLY
	//END SUGARCRM flav=ult ONLY


?>