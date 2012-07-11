<?php
/**
 * Class file for EbayTradingTypeAuthTokenTypeCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeAuthTokenTypeCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeAuthTokenTypeCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'ClientAlertsToken'
	 * Meta informations :
	 * 	- documentation : Buyer protection is covered by the PayPal Protection Program.
	 * @return string 'ClientAlertsToken'
	 */
	const VALUE_CLIENTALERTSTOKEN = 'ClientAlertsToken';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeAuthTokenTypeCodeType
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
		return in_array($_value,array(self::VALUE_CLIENTALERTSTOKEN,self::VALUE_CUSTOMCODE));
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