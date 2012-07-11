<?php
/**
 * Class file for EbayTradingTypeSellingManagerGeneralPropertyTypeCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSellingManagerGeneralPropertyTypeCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeSellingManagerGeneralPropertyTypeCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'NegativeFeedbackReceived'
	 * Meta informations :
	 * 	- documentation : Items that received negative feeback.
	 * @return string 'NegativeFeedbackReceived'
	 */
	const VALUE_NEGATIVEFEEDBACKRECEIVED = 'NegativeFeedbackReceived';
	/**
	 * Constant for value 'UnpaidItemDispute'
	 * Meta informations :
	 * 	- documentation : Unpaid item disputes require your response.
	 * @return string 'UnpaidItemDispute'
	 */
	const VALUE_UNPAIDITEMDISPUTE = 'UnpaidItemDispute';
	/**
	 * Constant for value 'BadEmailTemplate'
	 * Meta informations :
	 * 	- documentation : Emails not set because of HTML or active content.
	 * @return string 'BadEmailTemplate'
	 */
	const VALUE_BADEMAILTEMPLATE = 'BadEmailTemplate';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeSellingManagerGeneralPropertyTypeCodeType
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
		return in_array($_value,array(self::VALUE_NEGATIVEFEEDBACKRECEIVED,self::VALUE_UNPAIDITEMDISPUTE,self::VALUE_BADEMAILTEMPLATE,self::VALUE_CUSTOMCODE));
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