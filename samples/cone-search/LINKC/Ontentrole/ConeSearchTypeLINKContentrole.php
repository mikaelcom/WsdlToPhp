<?php
/**
 * Class file for ConeSearchTypeLINKContentrole
 * @date 13/10/2012
 */
/**
 * Class ConeSearchTypeLINKContentrole
 * @date 13/10/2012
 */
class ConeSearchTypeLINKContentrole extends ConeSearchWsdlClass
{
	/**
	 * Constant for value 'query'
	 * @return string 'query'
	 */
	const VALUE_QUERY = 'query';
	/**
	 * Constant for value 'hints'
	 * @return string 'hints'
	 */
	const VALUE_HINTS = 'hints';
	/**
	 * Constant for value 'doc'
	 * @return string 'doc'
	 */
	const VALUE_DOC = 'doc';
	/**
	 * Constant for value 'location'
	 * @return string 'location'
	 */
	const VALUE_LOCATION = 'location';
	/**
	 * Constructor
	 * @return ConeSearchTypeLINKContentrole
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
		return in_array($_value,array(self::VALUE_QUERY,self::VALUE_HINTS,self::VALUE_DOC,self::VALUE_LOCATION));
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