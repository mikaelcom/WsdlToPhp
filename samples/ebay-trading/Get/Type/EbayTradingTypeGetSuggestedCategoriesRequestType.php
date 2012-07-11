<?php
/**
 * Class file for EbayTradingTypeGetSuggestedCategoriesRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetSuggestedCategoriesRequestType
 * Documentation : Returns a list of up to 10 categories that have the highest percentage of listings whose titles or descriptions contain the keywords you specify.
 * @date 04/07/2012
 */
class EbayTradingTypeGetSuggestedCategoriesRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The Query
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies the search string, consisting of one or more words to search for in the listing title. The words "and" and "or" are treated like any other word.
	 * @var string
	 */
	public $Query;
	/**
	 * Constructor
	 * @param string Query
	 * @return EbayTradingTypeGetSuggestedCategoriesRequestType
	 */
	public function __construct($_Query = null)
	{
		EbayTradingWsdlClass::__construct(array('Query'=>$_Query));
	}
	/**
	 * Set Query
	 * @param string Query
	 * @return string
	 */
	public function setQuery($_Query)
	{
		return ($this->Query = $_Query);
	}
	/**
	 * Get Query
	 * @return string
	 */
	public function getQuery()
	{
		return $this->Query;
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