<?php
/**
 * Class file for AmazonFPSTypeTokenStatus
 * @date 10/07/2012
 */
/**
 * Class AmazonFPSTypeTokenStatus
 * @date 10/07/2012
 */
class AmazonFPSTypeTokenStatus extends AmazonFPSWsdlClass
{
	/**
	 * Constant for value 'Active'
	 * @return string 'Active'
	 */
	const VALUE_ACTIVE = 'Active';
	/**
	 * Constant for value 'Inactive'
	 * @return string 'Inactive'
	 */
	const VALUE_INACTIVE = 'Inactive';
	/**
	 * Constructor
	 * @return AmazonFPSTypeTokenStatus
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
		return in_array($_value,array(self::VALUE_ACTIVE,self::VALUE_INACTIVE));
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