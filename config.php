<?php
// IF we are working locally use the local settings
if(strstr($_SERVER['SERVER_NAME'],'onthehub.com')){

	$classic_analytics_a = 'UA-2768482-2'; 
    $classic_analytics_b = 'UA-2768482-14'; 
    $universal_analytics = 'UA-2768482-18';
    $universal_analytics_name = 'onthehub.com';

// IF we are working on staging use the staging settings
}elseif(strstr($_SERVER['SERVER_NAME'], 'staging.onthehub.com')){

	$classic_analytics_a = 'UA-2768482-24'; 
    $classic_analytics_b = 'UA-0000000-02'; 
    $universal_analytics = 'UA-2768482-24';
    $universal_analytics_name = 'onthehub.com';
	
// IF we are working on Dev use the dev settings
}elseif(strstr($_SERVER['SERVER_NAME'], 'dev.onthehub.com')){

	$classic_analytics_a = 'UA-2768482-24'; 
    $classic_analytics_b = 'UA-0000000-02'; 
    $universal_analytics = 'UA-2768482-24';	
    $universal_analytics_name = 'onthehub.com';

}elseif(strstr($_SERVER['SERVER_NAME'], 'kivuto.com')){
// We are on Kivuto prod
	$classic_analytics_a = 'UA-0000000-24'; 
    $classic_analytics_b = 'UA-0000000-02'; 
    $universal_analytics = 'UA-2768482-17';
    $universal_analytics_name = 'kivuto.com';
	

}elseif(strstr($_SERVER['SERVER_NAME'], 'staging.kivuto.com')){	
// We are on Kivuto staging
	$classic_analytics_a = 'UA-0000000-24'; 
    $classic_analytics_b = 'UA-0000000-02'; 
	$universal_analytics = 'UA-2768482-25';
	$universal_analytics_name = 'kivuto.com';

}else{
// Use garbage accounts for places that don't matter
	$classic_analytics_a = 'UA-0000000-24'; 
    $classic_analytics_b = 'UA-0000000-02'; 
    $universal_analytics = 'UA-0000000-24';
    $universal_analytics_name = 'onthehub.com';
}

?>

