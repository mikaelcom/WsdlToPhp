<?php
/**
 * Class file for EbayTradingTypeAutomatedLeaveFeedbackEventCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeAutomatedLeaveFeedbackEventCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeAutomatedLeaveFeedbackEventCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'PositiveFeedbackReceived'
	 * Meta informations :
	 * 	- documentation : Leave feedback automatically when you receive positive feedback.
	 * @return string 'PositiveFeedbackReceived'
	 */
	const VALUE_POSITIVEFEEDBACKRECEIVED = 'PositiveFeedbackReceived';
	/**
	 * Constant for value 'PaymentReceived'
	 * Meta informations :
	 * 	- documentation : Leave feedback automatically when you receive payment.
	 * @return string 'PaymentReceived'
	 */
	const VALUE_PAYMENTRECEIVED = 'PaymentReceived';
	/**
	 * Constant for value 'None'
	 * Meta informations :
	 * 	- documentation : Do not leave feedback automatically.
	 * @return string 'None'
	 */
	const VALUE_NONE = 'None';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeAutomatedLeaveFeedbackEventCodeType
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
		return in_array($_value,array(self::VALUE_POSITIVEFEEDBACKRECEIVED,self::VALUE_PAYMENTRECEIVED,self::VALUE_NONE,self::VALUE_CUSTOMCODE));
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