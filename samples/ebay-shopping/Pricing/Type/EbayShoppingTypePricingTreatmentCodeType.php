<?php
/**
 * Class file for EbayShoppingTypePricingTreatmentCodeType
 * @date 05/07/2012
 */
/**
 * Class EbayShoppingTypePricingTreatmentCodeType
 * @date 05/07/2012
 */
class EbayShoppingTypePricingTreatmentCodeType extends EbayShoppingWsdlClass
{
	/**
	 * Constant for value 'STP'
	 * Meta informations :
	 * 	- documentation : STP stands for Strikethrough Pricing.
	 * @return string 'STP'
	 */
	const VALUE_STP = 'STP';
	/**
	 * Constant for value 'MAP'
	 * Meta informations :
	 * 	- documentation : MAP stands for Minimum Advertised Price.
	 * @return string 'MAP'
	 */
	const VALUE_MAP = 'MAP';
	/**
	 * Constant for value 'None'
	 * Meta informations :
	 * 	- documentation : None means the item does not qualify for either STP or MAP pricing.
	 * @return string 'None'
	 */
	const VALUE_NONE = 'None';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayShoppingTypePricingTreatmentCodeType
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
		return in_array($_value,array(self::VALUE_STP,self::VALUE_MAP,self::VALUE_NONE,self::VALUE_CUSTOMCODE));
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