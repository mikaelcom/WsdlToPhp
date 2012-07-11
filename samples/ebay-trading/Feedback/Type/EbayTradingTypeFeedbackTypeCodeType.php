<?php
/**
 * Class file for EbayTradingTypeFeedbackTypeCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeFeedbackTypeCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeFeedbackTypeCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'FeedbackReceivedAsSeller'
	 * Meta informations :
	 * 	- documentation : Retrieves feedback left by all buyers for this user.
	 * @return string 'FeedbackReceivedAsSeller'
	 */
	const VALUE_FEEDBACKRECEIVEDASSELLER = 'FeedbackReceivedAsSeller';
	/**
	 * Constant for value 'FeedbackReceivedAsBuyer'
	 * Meta informations :
	 * 	- documentation : Retrieves feedback left by all sellers for this user.
	 * @return string 'FeedbackReceivedAsBuyer'
	 */
	const VALUE_FEEDBACKRECEIVEDASBUYER = 'FeedbackReceivedAsBuyer';
	/**
	 * Constant for value 'FeedbackReceived'
	 * Meta informations :
	 * 	- documentation : Retrieves feedback left by all buyers and all sellers for this user.
	 * @return string 'FeedbackReceived'
	 */
	const VALUE_FEEDBACKRECEIVED = 'FeedbackReceived';
	/**
	 * Constant for value 'FeedbackLeft'
	 * Meta informations :
	 * 	- documentation : Feedback left for others.
	 * @return string 'FeedbackLeft'
	 */
	const VALUE_FEEDBACKLEFT = 'FeedbackLeft';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeFeedbackTypeCodeType
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
		return in_array($_value,array(self::VALUE_FEEDBACKRECEIVEDASSELLER,self::VALUE_FEEDBACKRECEIVEDASBUYER,self::VALUE_FEEDBACKRECEIVED,self::VALUE_FEEDBACKLEFT,self::VALUE_CUSTOMCODE));
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