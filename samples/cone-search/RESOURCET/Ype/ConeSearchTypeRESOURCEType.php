<?php
/**
 * Class file for ConeSearchTypeRESOURCEType
 * @date 13/10/2012
 */
/**
 * Class ConeSearchTypeRESOURCEType
 * @date 13/10/2012
 */
class ConeSearchTypeRESOURCEType extends ConeSearchWsdlClass
{
	/**
	 * Constant for value 'results'
	 * @return string 'results'
	 */
	const VALUE_RESULTS = 'results';
	/**
	 * Constant for value 'meta'
	 * @return string 'meta'
	 */
	const VALUE_META = 'meta';
	/**
	 * Constructor
	 * @return ConeSearchTypeRESOURCEType
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
		return in_array($_value,array(self::VALUE_RESULTS,self::VALUE_META));
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