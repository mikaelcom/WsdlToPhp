<?php
/**
 * Class file for BingTypeNewsSortOption
 * @date 02/07/2012
 */
/**
 * Class BingTypeNewsSortOption
 * @date 02/07/2012
 */
class BingTypeNewsSortOption extends BingWsdlClass
{
	/**
	 * Constant for value 'Relevance'
	 * @return string 'Relevance'
	 */
	const VALUE_RELEVANCE = 'Relevance';
	/**
	 * Constant for value 'Date'
	 * @return string 'Date'
	 */
	const VALUE_DATE = 'Date';
	/**
	 * Constructor
	 * @return BingTypeNewsSortOption
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
		return in_array($_value,array(self::VALUE_RELEVANCE,self::VALUE_DATE));
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