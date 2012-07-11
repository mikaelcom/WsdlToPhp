<?php
/**
 * Class file for AmazonFPSTypeTokenType
 * @date 10/07/2012
 */
/**
 * Class AmazonFPSTypeTokenType
 * @date 10/07/2012
 */
class AmazonFPSTypeTokenType extends AmazonFPSWsdlClass
{
	/**
	 * Constant for value 'SingleUse'
	 * @return string 'SingleUse'
	 */
	const VALUE_SINGLEUSE = 'SingleUse';
	/**
	 * Constant for value 'MultiUse'
	 * @return string 'MultiUse'
	 */
	const VALUE_MULTIUSE = 'MultiUse';
	/**
	 * Constant for value 'Recurring'
	 * @return string 'Recurring'
	 */
	const VALUE_RECURRING = 'Recurring';
	/**
	 * Constant for value 'Unrestricted'
	 * @return string 'Unrestricted'
	 */
	const VALUE_UNRESTRICTED = 'Unrestricted';
	/**
	 * Constructor
	 * @return AmazonFPSTypeTokenType
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
		return in_array($_value,array(self::VALUE_SINGLEUSE,self::VALUE_MULTIUSE,self::VALUE_RECURRING,self::VALUE_UNRESTRICTED));
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