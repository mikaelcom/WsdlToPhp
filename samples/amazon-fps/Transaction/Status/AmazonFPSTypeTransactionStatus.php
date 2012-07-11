<?php
/**
 * Class file for AmazonFPSTypeTransactionStatus
 * @date 10/07/2012
 */
/**
 * Class AmazonFPSTypeTransactionStatus
 * @date 10/07/2012
 */
class AmazonFPSTypeTransactionStatus extends AmazonFPSWsdlClass
{
	/**
	 * Constant for value 'Reserved'
	 * @return string 'Reserved'
	 */
	const VALUE_RESERVED = 'Reserved';
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
	 * Constant for value 'Pending'
	 * @return string 'Pending'
	 */
	const VALUE_PENDING = 'Pending';
	/**
	 * Constant for value 'Cancelled'
	 * @return string 'Cancelled'
	 */
	const VALUE_CANCELLED = 'Cancelled';
	/**
	 * Constructor
	 * @return AmazonFPSTypeTransactionStatus
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
		return in_array($_value,array(self::VALUE_RESERVED,self::VALUE_SUCCESS,self::VALUE_FAILURE,self::VALUE_PENDING,self::VALUE_CANCELLED));
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