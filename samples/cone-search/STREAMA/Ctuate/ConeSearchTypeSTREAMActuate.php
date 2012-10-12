<?php
/**
 * Class file for ConeSearchTypeSTREAMActuate
 * @date 13/10/2012
 */
/**
 * Class ConeSearchTypeSTREAMActuate
 * @date 13/10/2012
 */
class ConeSearchTypeSTREAMActuate extends ConeSearchWsdlClass
{
	/**
	 * Constant for value 'onLoad'
	 * @return string 'onLoad'
	 */
	const VALUE_ONLOAD = 'onLoad';
	/**
	 * Constant for value 'onRequest'
	 * @return string 'onRequest'
	 */
	const VALUE_ONREQUEST = 'onRequest';
	/**
	 * Constant for value 'other'
	 * @return string 'other'
	 */
	const VALUE_OTHER = 'other';
	/**
	 * Constant for value 'none'
	 * @return string 'none'
	 */
	const VALUE_NONE = 'none';
	/**
	 * Constructor
	 * @return ConeSearchTypeSTREAMActuate
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
		return in_array($_value,array(self::VALUE_ONLOAD,self::VALUE_ONREQUEST,self::VALUE_OTHER,self::VALUE_NONE));
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