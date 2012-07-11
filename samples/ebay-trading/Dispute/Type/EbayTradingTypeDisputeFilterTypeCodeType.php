<?php
/**
 * Class file for EbayTradingTypeDisputeFilterTypeCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeDisputeFilterTypeCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeDisputeFilterTypeCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'AllInvolvedDisputes'
	 * Meta informations :
	 * 	- documentation : If used, this filter returns all open and closed disputes that involve the caller as a buyer or seller.
	 * @return string 'AllInvolvedDisputes'
	 */
	const VALUE_ALLINVOLVEDDISPUTES = 'AllInvolvedDisputes';
	/**
	 * Constant for value 'DisputesAwaitingMyResponse'
	 * Meta informations :
	 * 	- documentation : If used, this filter returns all open disputes that involve the caller as a buyer or seller and are awaiting a response from the caller. This is the default DisputeFilterType value. In other words, if no DisputeFilterType is specified in the request, only those disputes where the caller's response is due are returned.
	 * @return string 'DisputesAwaitingMyResponse'
	 */
	const VALUE_DISPUTESAWAITINGMYRESPONSE = 'DisputesAwaitingMyResponse';
	/**
	 * Constant for value 'DisputesAwaitingOtherPartyResponse'
	 * Meta informations :
	 * 	- documentation : If used, this filter returns all open disputes that involve the caller as a buyer or seller and are awaiting a response from the other party.
	 * @return string 'DisputesAwaitingOtherPartyResponse'
	 */
	const VALUE_DISPUTESAWAITINGOTHERPARTYRESPONSE = 'DisputesAwaitingOtherPartyResponse';
	/**
	 * Constant for value 'AllInvolvedClosedDisputes'
	 * Meta informations :
	 * 	- documentation : If used, this filter returns all closed disputes that involve the caller as a buyer or seller.
	 * @return string 'AllInvolvedClosedDisputes'
	 */
	const VALUE_ALLINVOLVEDCLOSEDDISPUTES = 'AllInvolvedClosedDisputes';
	/**
	 * Constant for value 'EligibleForCredit'
	 * Meta informations :
	 * 	- documentation : If used, this filter returns all disputes that involve the caller as a buyer or seller and are eligible for a Final Value Fee credit, regardless of whether or not the credit has been granted.
	 * @return string 'EligibleForCredit'
	 */
	const VALUE_ELIGIBLEFORCREDIT = 'EligibleForCredit';
	/**
	 * Constant for value 'UnpaidItemDisputes'
	 * Meta informations :
	 * 	- documentation : If used, this filter returns all open and closed Unpaid Item disputes that involve the caller as a buyer or seller.
	 * @return string 'UnpaidItemDisputes'
	 */
	const VALUE_UNPAIDITEMDISPUTES = 'UnpaidItemDisputes';
	/**
	 * Constant for value 'ItemNotReceivedDisputes'
	 * Meta informations :
	 * 	- documentation : If used, this filter returns all open and closed Item Not Received disputes that involve the caller as a buyer or seller.
	 * @return string 'ItemNotReceivedDisputes'
	 */
	const VALUE_ITEMNOTRECEIVEDDISPUTES = 'ItemNotReceivedDisputes';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeDisputeFilterTypeCodeType
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
		return in_array($_value,array(self::VALUE_ALLINVOLVEDDISPUTES,self::VALUE_DISPUTESAWAITINGMYRESPONSE,self::VALUE_DISPUTESAWAITINGOTHERPARTYRESPONSE,self::VALUE_ALLINVOLVEDCLOSEDDISPUTES,self::VALUE_ELIGIBLEFORCREDIT,self::VALUE_UNPAIDITEMDISPUTES,self::VALUE_ITEMNOTRECEIVEDDISPUTES,self::VALUE_CUSTOMCODE));
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