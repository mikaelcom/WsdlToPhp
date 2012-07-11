<?php
/**
 * Class file for XiOFACTypeSearchTypes
 * @date 08/07/2012
 */
/**
 * Class XiOFACTypeSearchTypes
 * @date 08/07/2012
 */
class XiOFACTypeSearchTypes extends XiOFACWsdlClass
{
	/**
	 * Constant for value 'Contains'
	 * @return string 'Contains'
	 */
	const VALUE_CONTAINS = 'Contains';
	/**
	 * Constant for value 'ExactMatch'
	 * @return string 'ExactMatch'
	 */
	const VALUE_EXACTMATCH = 'ExactMatch';
	/**
	 * Constant for value 'SoundsLike'
	 * @return string 'SoundsLike'
	 */
	const VALUE_SOUNDSLIKE = 'SoundsLike';
	/**
	 * Constructor
	 * @return XiOFACTypeSearchTypes
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
		return in_array($_value,array(self::VALUE_CONTAINS,self::VALUE_EXACTMATCH,self::VALUE_SOUNDSLIKE));
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