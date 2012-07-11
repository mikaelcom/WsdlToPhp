<?php
/**
 * Test with Bing Search WSDL
 * @date 01/07/2012
 */
ini_set('display_errors',E_ALL);
require_once dirname(__FILE__) . '/bing-search/BingAutoload.php';
/**
 * Bing Search Informations
 */
define('BING_KEY','****************************************');
define('BING_WSDL','http://api.bing.net/search.wsdl?AppID=' . BING_KEY . '&Version=2.2');
/**
 * init
 */
$wsdl = array(
			BingServiceSearch::WSDL_URL=>BING_WSDL);
$b = new BingServiceSearch($wsdl);
/**
 * Search
 */
$so = new BingTypeArrayOfSearchOption();
$so->add(BingTypeSearchOption::VALUE_DISABLELOCATIONDETECTION);
$st = new BingTypeArrayOfSourceType();
$st->add(BingTypeSourceType::VALUE_WEB);
$b->Search(new BingTypeSearchRequest(null,null,null,'Google',BING_KEY,null,null,null,null,$so->toSend(),$st->toSend()));
$b->getResult()->getWeb()->getResults()->initInternArrayToIterate();
echo '<br />Number of results : ' . $b->getResult()->getWeb()->getResults()->count();
while($b->getResult()->getWeb()->getResults()->valid())
{
	echo '<br />Resultat #' . $b->getResult()->getWeb()->getResults()->key() . ' : <a href="' . $b->getResult()->getWeb()->getResults()->current()->getUrl() . '" title="' . $b->getResult()->getWeb()->getResults()->current()->getTitle() . '">' . $b->getResult()->getWeb()->getResults()->current()->getTitle() . '</a>';
	$b->getResult()->getWeb()->getResults()->next();
}
/**
 * Second search
 */
$searchOptions = new BingTypeArrayOfSearchOption();
$searchOptions->add(BingTypeSearchOption::VALUE_DISABLELOCATIONDETECTION);
$sourceTypes = new BingTypeArrayOfSourceType();
$sourceTypes->add(BingTypeSourceType::VALUE_WEB);
$sourceTypes->add(BingTypeSourceType::VALUE_IMAGE);
$sourceTypes->add(BingTypeSourceType::VALUE_NEWS);
$sourceTypes->add(BingTypeSourceType::VALUE_MOBILEWEB);
$sourceTypes->add(BingTypeSourceType::VALUE_PHONEBOOK);
$sourceTypes->add(BingTypeSourceType::VALUE_RELATEDSEARCH);
$sourceTypes->add(BingTypeSourceType::VALUE_SHOWTIMES);
$sourceTypes->add(BingTypeSourceType::VALUE_SPELL);
$sourceTypes->add(BingTypeSourceType::VALUE_WEB);
$b = new BingServiceSearch($wsdl);
$b->Search(new BingTypeSearchRequest(2.2,null,null,'Google',BING_KEY,BingTypeAdultOption::VALUE_MODERATE,null,null,null,$searchOptions->toSend(),$sourceTypes->toSend()));
echo str_replace(array(
						"\t",
						' ',
						"\r",
						"\n"),array(
								"&nbsp;",
								"&nbsp;",
								'<br />',
								'<br />'),print_r($b->getResult(),true));
?>