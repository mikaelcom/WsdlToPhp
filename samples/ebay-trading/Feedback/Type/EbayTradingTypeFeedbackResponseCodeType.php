<?php
/**
 * Class file for EbayTradingTypeFeedbackResponseCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeFeedbackResponseCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeFeedbackResponseCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Reply'
	 * Meta informations :
	 * 	- documentation : A reply to feedback left by another user.
	 * @return string 'Reply'
	 */
	const VALUE_REPLY = 'Reply';
	/**
	 * Constant for value 'FollowUp'
	 * Meta informations :
	 * 	- documentation : A follow-up to a feedback comment left for another user.
	 * @return string 'FollowUp'
	 */
	const VALUE_FOLLOWUP = 'FollowUp';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeFeedbackResponseCodeType
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
		return in_array($_value,array(self::VALUE_REPLY,self::VALUE_FOLLOWUP,self::VALUE_CUSTOMCODE));
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