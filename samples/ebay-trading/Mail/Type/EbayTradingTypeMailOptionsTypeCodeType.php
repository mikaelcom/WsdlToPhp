<?php
/**
 * Class file for EbayTradingTypeMailOptionsTypeCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeMailOptionsTypeCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeMailOptionsTypeCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'DoNotSendEmail'
	 * @return string 'DoNotSendEmail'
	 */
	const VALUE_DONOTSENDEMAIL = 'DoNotSendEmail';
	/**
	 * Constant for value 'EmailCopyToSender'
	 * @return string 'EmailCopyToSender'
	 */
	const VALUE_EMAILCOPYTOSENDER = 'EmailCopyToSender';
	/**
	 * Constant for value 'HideSenderEmailAddress'
	 * @return string 'HideSenderEmailAddress'
	 */
	const VALUE_HIDESENDEREMAILADDRESS = 'HideSenderEmailAddress';
	/**
	 * Constant for value 'CustomCode'
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeMailOptionsTypeCodeType
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
		return in_array($_value,array(self::VALUE_DONOTSENDEMAIL,self::VALUE_EMAILCOPYTOSENDER,self::VALUE_HIDESENDEREMAILADDRESS,self::VALUE_CUSTOMCODE));
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