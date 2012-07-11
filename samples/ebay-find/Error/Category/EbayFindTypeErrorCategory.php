<?php
/**
 * Class file for EbayFindTypeErrorCategory
 * @date 04/07/2012
 */
/**
 * Class EbayFindTypeErrorCategory
 * @date 04/07/2012
 */
class EbayFindTypeErrorCategory extends EbayFindWsdlClass
{
	/**
	 * Constant for value 'System'
	 * Meta informations :
	 * 	- documentation : Indicates that an error has occurred on the eBay system side. For example, a database or server could be down. Inspect the error message to find the cause of the problem. If the problem is on the eBay side, an application can retry the request as-is a reasonable number of times (eBay recommends twice). If the error persists, contact Developer Technical Support. Once the problem has been resolved, the request may be resent in its original form.
	 * @return string 'System'
	 */
	const VALUE_SYSTEM = 'System';
	/**
	 * Constant for value 'Application'
	 * Meta informations :
	 * 	- documentation : An error occurred due to a problem with the request, with the most likely source being the application sending the request. For example, the request is missing a required data element or it contains an invalid field. The problem must be corrected before the request can be resent. Inspect the error message to find the cause of the problem. If the problem is due to an application error, modify the application and resend the request. If the error is due to invalid data, the source of the data must be corrected before you resend the resend request to eBay.
	 * @return string 'Application'
	 */
	const VALUE_APPLICATION = 'Application';
	/**
	 * Constant for value 'Request'
	 * Meta informations :
	 * 	- documentation : An error occurred due to a problem with the request, with the most likely source being missing or invalid data in the request. The problem must be corrected before the request can be retried. Inspect the error message to find the cause of the problem. If the problem is a result of end-user data, alert the end-user to the problem and provide the means for them to correct the problem. Once the problem is resolved, resend the request to eBay.
	 * @return string 'Request'
	 */
	const VALUE_REQUEST = 'Request';
	/**
	 * Constructor
	 * @return EbayFindTypeErrorCategory
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
		return in_array($_value,array(self::VALUE_SYSTEM,self::VALUE_APPLICATION,self::VALUE_REQUEST));
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