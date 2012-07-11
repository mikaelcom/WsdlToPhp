<?php
/**
 * Class file for EbayTradingTypeTokenReturnMethodCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeTokenReturnMethodCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeTokenReturnMethodCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Redirect'
	 * Meta informations :
	 * 	- documentation : Return the token in the HTTP redirect to the application-specified accept URL.
	 * @return string 'Redirect'
	 */
	const VALUE_REDIRECT = 'Redirect';
	/**
	 * Constant for value 'FetchToken'
	 * Meta informations :
	 * 	- documentation : Leave the token at eBay so that the application can get the token through the FetchToken API call (SecretId required).
	 * @return string 'FetchToken'
	 */
	const VALUE_FETCHTOKEN = 'FetchToken';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for future use
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeTokenReturnMethodCodeType
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
		return in_array($_value,array(self::VALUE_REDIRECT,self::VALUE_FETCHTOKEN,self::VALUE_CUSTOMCODE));
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