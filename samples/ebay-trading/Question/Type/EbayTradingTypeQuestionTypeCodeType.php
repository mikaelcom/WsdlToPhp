<?php
/**
 * Class file for EbayTradingTypeQuestionTypeCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeQuestionTypeCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeQuestionTypeCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'General'
	 * Meta informations :
	 * 	- documentation : General questions about the item.
	 * @return string 'General'
	 */
	const VALUE_GENERAL = 'General';
	/**
	 * Constant for value 'Shipping'
	 * Meta informations :
	 * 	- documentation : Questions related to the shipping of the item.
	 * @return string 'Shipping'
	 */
	const VALUE_SHIPPING = 'Shipping';
	/**
	 * Constant for value 'Payment'
	 * Meta informations :
	 * 	- documentation : Questions related to the payment for the item.
	 * @return string 'Payment'
	 */
	const VALUE_PAYMENT = 'Payment';
	/**
	 * Constant for value 'MultipleItemShipping'
	 * Meta informations :
	 * 	- documentation : Questions related to the shipping of this item bundled with other items also purchased on eBay.
	 * @return string 'MultipleItemShipping'
	 */
	const VALUE_MULTIPLEITEMSHIPPING = 'MultipleItemShipping';
	/**
	 * Constant for value 'CustomizedSubject'
	 * Meta informations :
	 * 	- documentation : Customized subjects set by the seller using SetMessagePreferences or the eBay Web site.
	 * @return string 'CustomizedSubject'
	 */
	const VALUE_CUSTOMIZEDSUBJECT = 'CustomizedSubject';
	/**
	 * Constant for value 'None'
	 * Meta informations :
	 * 	- documentation : No question type applies. This value doesn't apply to AddMemberMessageAAQToPartner. Note that the value of None can apply if Messages.Message.MessageType isn't set to AskSellerQuestion.
	 * @return string 'None'
	 */
	const VALUE_NONE = 'None';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for future or internal use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeQuestionTypeCodeType
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
		return in_array($_value,array(self::VALUE_GENERAL,self::VALUE_SHIPPING,self::VALUE_PAYMENT,self::VALUE_MULTIPLEITEMSHIPPING,self::VALUE_CUSTOMIZEDSUBJECT,self::VALUE_NONE,self::VALUE_CUSTOMCODE));
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