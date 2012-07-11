<?php
/**
 * Class file for AmazonFPSTypeSubscriptionStatus
 * @date 10/07/2012
 */
/**
 * Class AmazonFPSTypeSubscriptionStatus
 * @date 10/07/2012
 */
class AmazonFPSTypeSubscriptionStatus extends AmazonFPSWsdlClass
{
	/**
	 * Constant for value 'Active'
	 * @return string 'Active'
	 */
	const VALUE_ACTIVE = 'Active';
	/**
	 * Constant for value 'Cancelled'
	 * @return string 'Cancelled'
	 */
	const VALUE_CANCELLED = 'Cancelled';
	/**
	 * Constant for value 'Completed'
	 * @return string 'Completed'
	 */
	const VALUE_COMPLETED = 'Completed';
	/**
	 * Constructor
	 * @return AmazonFPSTypeSubscriptionStatus
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
		return in_array($_value,array(self::VALUE_ACTIVE,self::VALUE_CANCELLED,self::VALUE_COMPLETED));
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