<?php
/**
  * forces CDN subdomain for srcset file list on img element
  *
  * Forces Wordpress to use CDN subdomains on srcset list
  * used since version 4.4 for responsive images support
  *
  * Wordpress, Responsive Web Design, Responsive, Responsive Images, RWD, 4.4, CDN, Subdomains, performance
  *
  * @author  Celso Bessa <celso.bessa@2aces.com.br>
  *
  * @since 1.0
  *
  * @param array $sources Source files data from wordpress media class (media.php)
  */
// you MUST change static1 to your CDN subdomain as needed
function aafd_cdn_srcset($sources){
	foreach ( $sources as $source ) {
		$sources[ $source['value'] ][ 'url' ] = str_replace('http://www', 'https://static1', $sources[ $source['value'] ][ 'url' ]);
		// you MAY use external domains as well
		// $sources[ $source['value'] ][ 'url' ] = str_replace('http://www.example.com', 'https://static.examplecdnprovider.com', $sources[ $source['value'] ][ 'url' ]);
	}
	return $sources;
}
add_filter( 'wp_calculate_image_srcset', 'aafd_cdn_srcset');
?>
