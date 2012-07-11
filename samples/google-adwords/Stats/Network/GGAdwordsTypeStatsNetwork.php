<?php
/**
 * Class file for GGAdwordsTypeStatsNetwork
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeStatsNetwork
 * @date 03/07/2012
 */
class GGAdwordsTypeStatsNetwork extends GGAdwordsWsdlClass
{
	/**
	 * Constant for value 'SEARCH'
	 * Meta informations :
	 * 	- documentation : Aggregate of {@code GOOGLE_SEARCH} and {@code SEARCH_NETWORK}.
	 * @return string 'SEARCH'
	 */
	const VALUE_SEARCH = 'SEARCH';
	/**
	 * Constant for value 'GOOGLE_SEARCH'
	 * @return string 'GOOGLE_SEARCH'
	 */
	const VALUE_GOOGLE_SEARCH = 'GOOGLE_SEARCH';
	/**
	 * Constant for value 'SEARCH_NETWORK'
	 * @return string 'SEARCH_NETWORK'
	 */
	const VALUE_SEARCH_NETWORK = 'SEARCH_NETWORK';
	/**
	 * Constant for value 'CONTENT'
	 * Meta informations :
	 * 	- documentation : Aggregate of {@code CONTENT_KEYWORD_BID} and {@code CONTENT_PLACEMENT_BID}.
	 * @return string 'CONTENT'
	 */
	const VALUE_CONTENT = 'CONTENT';
	/**
	 * Constant for value 'CONTENT_KEYWORD_BID'
	 * @return string 'CONTENT_KEYWORD_BID'
	 */
	const VALUE_CONTENT_KEYWORD_BID = 'CONTENT_KEYWORD_BID';
	/**
	 * Constant for value 'CONTENT_PLACEMENT_BID'
	 * @return string 'CONTENT_PLACEMENT_BID'
	 */
	const VALUE_CONTENT_PLACEMENT_BID = 'CONTENT_PLACEMENT_BID';
	/**
	 * Constant for value 'ALL'
	 * @return string 'ALL'
	 */
	const VALUE_ALL = 'ALL';
	/**
	 * Constant for value 'UNKNOWN'
	 * Meta informations :
	 * 	- documentation : <span class="constraint Rejected">Used for return value only. An enumeration could not be processed, typically due to incompatibility with your WSDL version.</span>
	 * @return string 'UNKNOWN'
	 */
	const VALUE_UNKNOWN = 'UNKNOWN';
	/**
	 * Constructor
	 * @return GGAdwordsTypeStatsNetwork
	 */
	public function __construct()
	{
		parent::__construct(array());
	}
	/**
	 * Return true if value is allowed
	 * @param string value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(self::VALUE_SEARCH,self::VALUE_GOOGLE_SEARCH,self::VALUE_SEARCH_NETWORK,self::VALUE_CONTENT,self::VALUE_CONTENT_KEYWORD_BID,self::VALUE_CONTENT_PLACEMENT_BID,self::VALUE_ALL,self::VALUE_UNKNOWN));
	}
	/**
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>