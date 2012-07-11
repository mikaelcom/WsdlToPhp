<?php
/**
 * Class file for EbayShoppingTypeErrorClassificationCodeType
 * @date 05/07/2012
 */
/**
 * Class EbayShoppingTypeErrorClassificationCodeType
 * @date 05/07/2012
 */
class EbayShoppingTypeErrorClassificationCodeType extends EbayShoppingWsdlClass
{
	/**
	 * Constant for value 'RequestError'
	 * Meta informations :
	 * 	- documentation : An error has occurred either as a result of a problem in the sending application or because the application's end-user has attempted to submit invalid data (or missing data). In these cases, do not retry the request. The problem must be corrected before the request can be made again. If the problem is due to something in the application (such as a missing required field), the application must be changed. If the problem is a result of end-user data, the application must alert the end-user to the problem and provide the means for the end-user to correct the data. Once the problem in the application or data is resolved, resend the request to eBay with the corrected data.
	 * @return string 'RequestError'
	 */
	const VALUE_REQUESTERROR = 'RequestError';
	/**
	 * Constant for value 'SystemError'
	 * Meta informations :
	 * 	- documentation : Indicates that an error has occurred on the eBay system side, such as a database or server down. An application can retry the request as-is a reasonable number of times (eBay recommends twice). If the error persists, contact Developer Technical Support. Once the problem has been resolved, the request may be resent in its original form.
	 * @return string 'SystemError'
	 */
	const VALUE_SYSTEMERROR = 'SystemError';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayShoppingTypeErrorClassificationCodeType
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
		return in_array($_value,array(self::VALUE_REQUESTERROR,self::VALUE_SYSTEMERROR,self::VALUE_CUSTOMCODE));
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