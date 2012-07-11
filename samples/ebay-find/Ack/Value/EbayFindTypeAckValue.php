<?php
/**
 * Class file for EbayFindTypeAckValue
 * @date 04/07/2012
 */
/**
 * Class EbayFindTypeAckValue
 * @date 04/07/2012
 */
class EbayFindTypeAckValue extends EbayFindWsdlClass
{
	/**
	 * Constant for value 'Success'
	 * Meta informations :
	 * 	- documentation : eBay successfully processed the request and the business data is returned in the response. Note that it is possible for a response to return Success, but still not contain the expected data in the result.
	 * @return string 'Success'
	 */
	const VALUE_SUCCESS = 'Success';
	/**
	 * Constant for value 'Failure'
	 * Meta informations :
	 * 	- documentation : eBay encountered a fatal error during the processing of the request, causing the request to fail. When a serious application-level error occurs, the error is returned instead of the business data.
	 * @return string 'Failure'
	 */
	const VALUE_FAILURE = 'Failure';
	/**
	 * Constant for value 'Warning'
	 * Meta informations :
	 * 	- documentation : The request was successfully processed, but eBay encountered a non-fatal error during the processing. For best results, requests should return without warnings. Inspect the warning details and resolve the problem before resubmitting the request.
	 * @return string 'Warning'
	 */
	const VALUE_WARNING = 'Warning';
	/**
	 * Constant for value 'PartialFailure'
	 * Meta informations :
	 * 	- documentation : eBay successfully processed the request, but one or more non-fatal errors occurred during the processing. For best results, requests should return without warning messages. Inspect the message details and resolve any problems before resubmitting the request.
	 * @return string 'PartialFailure'
	 */
	const VALUE_PARTIALFAILURE = 'PartialFailure';
	/**
	 * Constructor
	 * @return EbayFindTypeAckValue
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
		return in_array($_value,array(self::VALUE_SUCCESS,self::VALUE_FAILURE,self::VALUE_WARNING,self::VALUE_PARTIALFAILURE));
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