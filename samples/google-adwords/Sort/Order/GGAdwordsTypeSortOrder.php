<?php
/**
 * Class file for GGAdwordsTypeSortOrder
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeSortOrder
 * @date 03/07/2012
 */
class GGAdwordsTypeSortOrder extends GGAdwordsWsdlClass
{
	/**
	 * Constant for value 'ASCENDING'
	 * @return string 'ASCENDING'
	 */
	const VALUE_ASCENDING = 'ASCENDING';
	/**
	 * Constant for value 'DESCENDING'
	 * @return string 'DESCENDING'
	 */
	const VALUE_DESCENDING = 'DESCENDING';
	/**
	 * Constructor
	 * @return GGAdwordsTypeSortOrder
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
		return in_array($_value,array(self::VALUE_ASCENDING,self::VALUE_DESCENDING));
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