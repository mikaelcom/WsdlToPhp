<?php
/**
 * Class file for EbayTradingTypeDisputeSortTypeCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeDisputeSortTypeCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeDisputeSortTypeCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'None'
	 * Meta informations :
	 * 	- documentation : (in) Sort by the time the dispute was created, in descending order.
	 * @return string 'None'
	 */
	const VALUE_NONE = 'None';
	/**
	 * Constant for value 'DisputeCreatedTimeAscending'
	 * Meta informations :
	 * 	- documentation : (in) Sort by the time the dispute was created, in ascending order.
	 * @return string 'DisputeCreatedTimeAscending'
	 */
	const VALUE_DISPUTECREATEDTIMEASCENDING = 'DisputeCreatedTimeAscending';
	/**
	 * Constant for value 'DisputeCreatedTimeDescending'
	 * Meta informations :
	 * 	- documentation : (in) Sort by the time the dispute was created, in descending order.
	 * @return string 'DisputeCreatedTimeDescending'
	 */
	const VALUE_DISPUTECREATEDTIMEDESCENDING = 'DisputeCreatedTimeDescending';
	/**
	 * Constant for value 'DisputeStatusAscending'
	 * Meta informations :
	 * 	- documentation : (in) Sort by the dispute status, in ascending order.
	 * @return string 'DisputeStatusAscending'
	 */
	const VALUE_DISPUTESTATUSASCENDING = 'DisputeStatusAscending';
	/**
	 * Constant for value 'DisputeStatusDescending'
	 * Meta informations :
	 * 	- documentation : (in) Sort by the dispute status, in descending order.
	 * @return string 'DisputeStatusDescending'
	 */
	const VALUE_DISPUTESTATUSDESCENDING = 'DisputeStatusDescending';
	/**
	 * Constant for value 'DisputeCreditEligibilityAscending'
	 * Meta informations :
	 * 	- documentation : (in) Sort by whether the dispute is eligible for Final Value Fee credit, in ascending order. Ineligible disputes are listed before eligible disputes.
	 * @return string 'DisputeCreditEligibilityAscending'
	 */
	const VALUE_DISPUTECREDITELIGIBILITYASCENDING = 'DisputeCreditEligibilityAscending';
	/**
	 * Constant for value 'DisputeCreditEligibilityDescending'
	 * Meta informations :
	 * 	- documentation : (in) Sort by whether the dispute is eleigible for Final Value Fee credit, in descending order. Eligible disputes are listed before i(ineligible disputes.
	 * @return string 'DisputeCreditEligibilityDescending'
	 */
	const VALUE_DISPUTECREDITELIGIBILITYDESCENDING = 'DisputeCreditEligibilityDescending';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeDisputeSortTypeCodeType
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
		return in_array($_value,array(self::VALUE_NONE,self::VALUE_DISPUTECREATEDTIMEASCENDING,self::VALUE_DISPUTECREATEDTIMEDESCENDING,self::VALUE_DISPUTESTATUSASCENDING,self::VALUE_DISPUTESTATUSDESCENDING,self::VALUE_DISPUTECREDITELIGIBILITYASCENDING,self::VALUE_DISPUTECREDITELIGIBILITYDESCENDING,self::VALUE_CUSTOMCODE));
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