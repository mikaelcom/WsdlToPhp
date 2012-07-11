<?php
/**
 * Class file for EbayTradingTypeSelectionModeCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSelectionModeCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeSelectionModeCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Automatic'
	 * Meta informations :
	 * 	- documentation : Automatic criteria. Reserved for future use.
	 * @return string 'Automatic'
	 */
	const VALUE_AUTOMATIC = 'Automatic';
	/**
	 * Constant for value 'Manual'
	 * Meta informations :
	 * 	- documentation : Manual criteria. Reserved for future use.
	 * @return string 'Manual'
	 */
	const VALUE_MANUAL = 'Manual';
	/**
	 * Constant for value 'Prefilled'
	 * Meta informations :
	 * 	- documentation : In listing requests, do not specify the name or value because they will be filled in by eBay. In GetItemRecommendations, this indicates that the Item Specific will be pre-filled from a catalog, based on a product ID that you passed in the request. They should be presented as read-only to the seller. If you specify a prefilled value in your listing request when you list with a catalog product, eBay drops the value and uses the value from the catalog instead.
	 * @return string 'Prefilled'
	 */
	const VALUE_PREFILLED = 'Prefilled';
	/**
	 * Constant for value 'SelectionOnly'
	 * Meta informations :
	 * 	- documentation : In listing requests, only specify a value that eBay has recommended. That is, select from the list of recommended values; don't specify your own custom details. If you specify a different value, the listing request may return errors. Rarely used.
	 * @return string 'SelectionOnly'
	 */
	const VALUE_SELECTIONONLY = 'SelectionOnly';
	/**
	 * Constant for value 'FreeText'
	 * Meta informations :
	 * 	- documentation : In listing requests, specify any name or value, or select from the list of recommended values, if present. This is used in most cases.
	 * @return string 'FreeText'
	 */
	const VALUE_FREETEXT = 'FreeText';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeSelectionModeCodeType
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
		return in_array($_value,array(self::VALUE_AUTOMATIC,self::VALUE_MANUAL,self::VALUE_PREFILLED,self::VALUE_SELECTIONONLY,self::VALUE_FREETEXT,self::VALUE_CUSTOMCODE));
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