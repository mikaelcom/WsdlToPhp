<?php
/**
 * Class file for BingTypePhonebookSortOption
 * @date 02/07/2012
 */
/**
 * Class BingTypePhonebookSortOption
 * @date 02/07/2012
 */
class BingTypePhonebookSortOption extends BingWsdlClass
{
	/**
	 * Constant for value 'Default'
	 * @return string 'Default'
	 */
	const VALUE_DEFAULT = 'Default';
	/**
	 * Constant for value 'Relevance'
	 * @return string 'Relevance'
	 */
	const VALUE_RELEVANCE = 'Relevance';
	/**
	 * Constant for value 'Distance'
	 * @return string 'Distance'
	 */
	const VALUE_DISTANCE = 'Distance';
	/**
	 * Constructor
	 * @return BingTypePhonebookSortOption
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
		return in_array($_value,array(self::VALUE_DEFAULT,self::VALUE_RELEVANCE,self::VALUE_DISTANCE));
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