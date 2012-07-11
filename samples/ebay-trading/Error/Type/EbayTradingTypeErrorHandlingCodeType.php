<?php
/**
 * Class file for EbayTradingTypeErrorHandlingCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeErrorHandlingCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeErrorHandlingCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Legacy'
	 * Meta informations :
	 * 	- documentation : (in) Apply validation rules that were in effect prior to the time the call started supporting ErrorHandling.
	 * @return string 'Legacy'
	 */
	const VALUE_LEGACY = 'Legacy';
	/**
	 * Constant for value 'BestEffort'
	 * Meta informations :
	 * 	- documentation : (in) Drop the invalid data, continue processing the request with the valid data. If dropping the invalid data leaves the request in a state where required data is missing, reject the request.<br> <br> If BestEffort is specified for CompleteSale, the Ack field in the response could return PartialFailure if one change fails but another succeeds. For example, if the seller attempts to leave feedback twice for the same order line item, the feedback changes would fail but any paid or shipped status changes would succeed.
	 * @return string 'BestEffort'
	 */
	const VALUE_BESTEFFORT = 'BestEffort';
	/**
	 * Constant for value 'AllOrNothing'
	 * Meta informations :
	 * 	- documentation : (in) If any attribute data is invalid, drop the entire attribute set and proceed with listing the item. If the category has required attributes and the attribute set is dropped, reject the listing.
	 * @return string 'AllOrNothing'
	 */
	const VALUE_ALLORNOTHING = 'AllOrNothing';
	/**
	 * Constant for value 'FailOnError'
	 * Meta informations :
	 * 	- documentation : (in) If any data is invalid, reject the request.
	 * @return string 'FailOnError'
	 */
	const VALUE_FAILONERROR = 'FailOnError';
	/**
	 * Constructor
	 * @return EbayTradingTypeErrorHandlingCodeType
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
		return in_array($_value,array(self::VALUE_LEGACY,self::VALUE_BESTEFFORT,self::VALUE_ALLORNOTHING,self::VALUE_FAILONERROR));
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