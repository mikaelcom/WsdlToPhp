<?php
/**
 * Class file for EbayFindTypeErrorSeverity
 * @date 04/07/2012
 */
/**
 * Class EbayFindTypeErrorSeverity
 * @date 04/07/2012
 */
class EbayFindTypeErrorSeverity extends EbayFindWsdlClass
{
	/**
	 * Constant for value 'Error'
	 * Meta informations :
	 * 	- documentation : eBay encountered a fatal error during the processing of the request, causing the request to fail. When eBay encounters an error, it returns error data instead of the requested business data. Inspect the error details and resolve the problem before resubmitting the request.
	 * @return string 'Error'
	 */
	const VALUE_ERROR = 'Error';
	/**
	 * Constant for value 'Warning'
	 * Meta informations :
	 * 	- documentation : The request was successfully processed, but eBay encountered a non-fatal error during the processing that could affect the data returned. For example, eBay might have changed the value of an input field. In this case, eBay returns a successful response, but it also returns a warning. For best results, requests should return without warnings. Inspect the warning details and resolve the problem before resubmitting the request.
	 * @return string 'Warning'
	 */
	const VALUE_WARNING = 'Warning';
	/**
	 * Constructor
	 * @return EbayFindTypeErrorSeverity
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
		return in_array($_value,array(self::VALUE_ERROR,self::VALUE_WARNING));
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