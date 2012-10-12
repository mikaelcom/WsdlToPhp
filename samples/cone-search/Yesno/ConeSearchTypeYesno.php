<?php
/**
 * Class file for ConeSearchTypeYesno
 * @date 13/10/2012
 */
/**
 * Class ConeSearchTypeYesno
 * @date 13/10/2012
 */
class ConeSearchTypeYesno extends ConeSearchWsdlClass
{
	/**
	 * Constant for value 'yes'
	 * @return string 'yes'
	 */
	const VALUE_YES = 'yes';
	/**
	 * Constant for value 'no'
	 * @return string 'no'
	 */
	const VALUE_NO = 'no';
	/**
	 * Constructor
	 * @return ConeSearchTypeYesno
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
		return in_array($_value,array(self::VALUE_YES,self::VALUE_NO));
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