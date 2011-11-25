Kohana WordPress Integration


general directory structure
/
	kohana
	wordpress


general logic
* all requests are routed to wordpress
* in the wp-content/themes/kohana/404.php, pages not found in wordpress are processed using kohana


changes required for kohana
* replace the __() function with ___()
* create /wordpress.php (same as index php but without the request logic at the end

changes required for wordpress
* add the kohana theme
* update wp config to use the kohana db config
