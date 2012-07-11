<?php
/**
 * Class file for EbayTradingTypeVeROItemStatusCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeVeROItemStatusCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeVeROItemStatusCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Received'
	 * Meta informations :
	 * 	- documentation : (out) The VeRO report request for the item has been received by eBay.
	 * @return string 'Received'
	 */
	const VALUE_RECEIVED = 'Received';
	/**
	 * Constant for value 'Submitted'
	 * Meta informations :
	 * 	- documentation : (out) The VeRO report request for the item has been submitted to eBay.
	 * @return string 'Submitted'
	 */
	const VALUE_SUBMITTED = 'Submitted';
	/**
	 * Constant for value 'Removed'
	 * Meta informations :
	 * 	- documentation : (out) The reported item has been ended by eBay.
	 * @return string 'Removed'
	 */
	const VALUE_REMOVED = 'Removed';
	/**
	 * Constant for value 'SubmissionFailed'
	 * Meta informations :
	 * 	- documentation : (out) The VeRO report request for the item failed.
	 * @return string 'SubmissionFailed'
	 */
	const VALUE_SUBMISSIONFAILED = 'SubmissionFailed';
	/**
	 * Constant for value 'ClarificationRequired'
	 * Meta informations :
	 * 	- documentation : (out) The VeRO report request for the item has been received by eBay, but additional clarification is needed before eBay can end the item.
	 * @return string 'ClarificationRequired'
	 */
	const VALUE_CLARIFICATIONREQUIRED = 'ClarificationRequired';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeVeROItemStatusCodeType
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
		return in_array($_value,array(self::VALUE_RECEIVED,self::VALUE_SUBMITTED,self::VALUE_REMOVED,self::VALUE_SUBMISSIONFAILED,self::VALUE_CLARIFICATIONREQUIRED,self::VALUE_CUSTOMCODE));
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