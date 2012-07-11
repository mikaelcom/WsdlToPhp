<?php
/**
 * Class file for AmazonFPSTypeVerificationStatus
 * @date 10/07/2012
 */
/**
 * Class AmazonFPSTypeVerificationStatus
 * @date 10/07/2012
 */
class AmazonFPSTypeVerificationStatus extends AmazonFPSWsdlClass
{
	/**
	 * Constant for value 'Success'
	 * @return string 'Success'
	 */
	const VALUE_SUCCESS = 'Success';
	/**
	 * Constant for value 'Failure'
	 * @return string 'Failure'
	 */
	const VALUE_FAILURE = 'Failure';
	/**
	 * Constructor
	 * @return AmazonFPSTypeVerificationStatus
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
		return in_array($_value,array(self::VALUE_SUCCESS,self::VALUE_FAILURE));
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