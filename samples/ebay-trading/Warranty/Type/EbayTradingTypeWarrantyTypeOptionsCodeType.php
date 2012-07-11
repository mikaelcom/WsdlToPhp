<?php
/**
 * Class file for EbayTradingTypeWarrantyTypeOptionsCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeWarrantyTypeOptionsCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeWarrantyTypeOptionsCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'ReplacementWarranty'
	 * Meta informations :
	 * 	- documentation : The item will be replaced, if under warranty.
	 * @return string 'ReplacementWarranty'
	 */
	const VALUE_REPLACEMENTWARRANTY = 'ReplacementWarranty';
	/**
	 * Constant for value 'DealerWarranty'
	 * Meta informations :
	 * 	- documentation : The warranty is offered by the dealer.
	 * @return string 'DealerWarranty'
	 */
	const VALUE_DEALERWARRANTY = 'DealerWarranty';
	/**
	 * Constant for value 'ManufacturerWarranty'
	 * Meta informations :
	 * 	- documentation : The warranty is offered by the manufacturer.
	 * @return string 'ManufacturerWarranty'
	 */
	const VALUE_MANUFACTURERWARRANTY = 'ManufacturerWarranty';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeWarrantyTypeOptionsCodeType
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
		return in_array($_value,array(self::VALUE_REPLACEMENTWARRANTY,self::VALUE_DEALERWARRANTY,self::VALUE_MANUFACTURERWARRANTY,self::VALUE_CUSTOMCODE));
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