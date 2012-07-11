<?php
/**
 * Class file for YMailTypeOffsetType
 * @date 02/07/2012
 */
/**
 * Class YMailTypeOffsetType
 * @date 02/07/2012
 */
class YMailTypeOffsetType extends YMailWsdlClass
{
	/**
	 * Constant for value 'startWith'
	 * @return string 'startWith'
	 */
	const VALUE_STARTWITH = 'startWith';
	/**
	 * Constant for value 'centerOn'
	 * @return string 'centerOn'
	 */
	const VALUE_CENTERON = 'centerOn';
	/**
	 * Constructor
	 * @return YMailTypeOffsetType
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
		return in_array($_value,array(self::VALUE_STARTWITH,self::VALUE_CENTERON));
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