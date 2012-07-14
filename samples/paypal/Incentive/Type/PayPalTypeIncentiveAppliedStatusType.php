<?php
/**
 * Class file for PayPalTypeIncentiveAppliedStatusType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeIncentiveAppliedStatusType
 * @date 14/07/2012
 */
class PayPalTypeIncentiveAppliedStatusType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'INCENTIVE-APPLIED-STATUS-SUCCESS'
	 * @return string 'INCENTIVE-APPLIED-STATUS-SUCCESS'
	 */
	const VALUE_INCENTIVE_APPLIED_STATUS_SUCCESS = 'INCENTIVE-APPLIED-STATUS-SUCCESS';
	/**
	 * Constant for value 'INCENTIVE-APPLIED-STATUS-ERROR'
	 * @return string 'INCENTIVE-APPLIED-STATUS-ERROR'
	 */
	const VALUE_INCENTIVE_APPLIED_STATUS_ERROR = 'INCENTIVE-APPLIED-STATUS-ERROR';
	/**
	 * Constructor
	 * @return PayPalTypeIncentiveAppliedStatusType
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
		return in_array($_value,array(self::VALUE_INCENTIVE_APPLIED_STATUS_SUCCESS,self::VALUE_INCENTIVE_APPLIED_STATUS_ERROR));
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