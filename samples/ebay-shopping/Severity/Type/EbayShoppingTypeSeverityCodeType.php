<?php
/**
 * Class file for EbayShoppingTypeSeverityCodeType
 * @date 05/07/2012
 */
/**
 * Class EbayShoppingTypeSeverityCodeType
 * @date 05/07/2012
 */
class EbayShoppingTypeSeverityCodeType extends EbayShoppingWsdlClass
{
	/**
	 * Constant for value 'Warning'
	 * Meta informations :
	 * 	- documentation : (out) The request was processed successfully, but something occurred that may affect your application or the user. For example, eBay may have changed a value the user sent in. In this case, eBay returns a normal, successful response and also returns the warning.
	 * @return string 'Warning'
	 */
	const VALUE_WARNING = 'Warning';
	/**
	 * Constant for value 'Error'
	 * Meta informations :
	 * 	- documentation : (out) The request that triggered the error was not processed successfully. When a serious application-level error occurs, the error is returned instead of the business data.
	 * @return string 'Error'
	 */
	const VALUE_ERROR = 'Error';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayShoppingTypeSeverityCodeType
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
		return in_array($_value,array(self::VALUE_WARNING,self::VALUE_ERROR,self::VALUE_CUSTOMCODE));
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