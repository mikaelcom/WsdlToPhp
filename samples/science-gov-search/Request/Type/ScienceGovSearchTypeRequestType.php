<?php
/**
 * Class file for ScienceGovSearchTypeRequestType
 * @date 13/10/2012
 */
/**
 * Class ScienceGovSearchTypeRequestType
 * @date 13/10/2012
 */
class ScienceGovSearchTypeRequestType extends ScienceGovSearchWsdlClass
{
	/**
	 * Constant for value 'USER'
	 * @return string 'USER'
	 */
	const VALUE_USER = 'USER';
	/**
	 * Constant for value 'ALERT'
	 * @return string 'ALERT'
	 */
	const VALUE_ALERT = 'ALERT';
	/**
	 * Constant for value 'REFINE'
	 * @return string 'REFINE'
	 */
	const VALUE_REFINE = 'REFINE';
	/**
	 * Constant for value 'PROBE'
	 * @return string 'PROBE'
	 */
	const VALUE_PROBE = 'PROBE';
	/**
	 * Constant for value 'RESTART'
	 * @return string 'RESTART'
	 */
	const VALUE_RESTART = 'RESTART';
	/**
	 * Constructor
	 * @return ScienceGovSearchTypeRequestType
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
		return in_array($_value,array(self::VALUE_USER,self::VALUE_ALERT,self::VALUE_REFINE,self::VALUE_PROBE,self::VALUE_RESTART));
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