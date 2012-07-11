<?php
/**
 * Class file for EbayTradingTypeCombinedPaymentPeriodCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeCombinedPaymentPeriodCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeCombinedPaymentPeriodCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Days_3'
	 * Meta informations :
	 * 	- documentation : 3 days
	 * @return string 'Days_3'
	 */
	const VALUE_DAYS_3 = 'Days_3';
	/**
	 * Constant for value 'Days_5'
	 * Meta informations :
	 * 	- documentation : 5 days
	 * @return string 'Days_5'
	 */
	const VALUE_DAYS_5 = 'Days_5';
	/**
	 * Constant for value 'Days_7'
	 * Meta informations :
	 * 	- documentation : 7 days
	 * @return string 'Days_7'
	 */
	const VALUE_DAYS_7 = 'Days_7';
	/**
	 * Constant for value 'Days_14'
	 * Meta informations :
	 * 	- documentation : 14 days
	 * @return string 'Days_14'
	 */
	const VALUE_DAYS_14 = 'Days_14';
	/**
	 * Constant for value 'Days_30'
	 * Meta informations :
	 * 	- documentation : 30 days
	 * @return string 'Days_30'
	 */
	const VALUE_DAYS_30 = 'Days_30';
	/**
	 * Constant for value 'Ineligible'
	 * Meta informations :
	 * 	- documentation : No restriction period is being applied
	 * @return string 'Ineligible'
	 */
	const VALUE_INELIGIBLE = 'Ineligible';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for internal or future use
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeCombinedPaymentPeriodCodeType
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
		return in_array($_value,array(self::VALUE_DAYS_3,self::VALUE_DAYS_5,self::VALUE_DAYS_7,self::VALUE_DAYS_14,self::VALUE_DAYS_30,self::VALUE_INELIGIBLE,self::VALUE_CUSTOMCODE));
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