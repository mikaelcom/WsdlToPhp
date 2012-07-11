<?php
/**
 * Class file for EbayTradingTypePromotionalSaleStatusCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypePromotionalSaleStatusCodeType
 * @date 04/07/2012
 */
class EbayTradingTypePromotionalSaleStatusCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Active'
	 * Meta informations :
	 * 	- documentation : The promotional sale is active.
	 * @return string 'Active'
	 */
	const VALUE_ACTIVE = 'Active';
	/**
	 * Constant for value 'Scheduled'
	 * Meta informations :
	 * 	- documentation : The promotional sale is scheduled. That is, the start time is in the future.
	 * @return string 'Scheduled'
	 */
	const VALUE_SCHEDULED = 'Scheduled';
	/**
	 * Constant for value 'Processing'
	 * Meta informations :
	 * 	- documentation : The status of the promotional sale is pending. When first scheduling a Sale, if you select over 200 listings to be in any given Sale, it will take some time for eBay to process the request.
	 * @return string 'Processing'
	 */
	const VALUE_PROCESSING = 'Processing';
	/**
	 * Constant for value 'Inactive'
	 * Meta informations :
	 * 	- documentation : The promotional sale is inactive, the sale has ended. You can reschedule a sale once it has ended, but you will need to wait at least 24 hours before it can become active.
	 * @return string 'Inactive'
	 */
	const VALUE_INACTIVE = 'Inactive';
	/**
	 * Constant for value 'Deleted'
	 * Meta informations :
	 * 	- documentation : The promotional sale has been deleted. Deleted promotional sales cannot be updated or reactivated.
	 * @return string 'Deleted'
	 */
	const VALUE_DELETED = 'Deleted';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypePromotionalSaleStatusCodeType
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
		return in_array($_value,array(self::VALUE_ACTIVE,self::VALUE_SCHEDULED,self::VALUE_PROCESSING,self::VALUE_INACTIVE,self::VALUE_DELETED,self::VALUE_CUSTOMCODE));
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