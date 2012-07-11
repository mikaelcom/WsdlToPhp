<?php
/**
 * Class file for EbayTradingTypeItemCompatibilityEnabledCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeItemCompatibilityEnabledCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeItemCompatibilityEnabledCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Disabled'
	 * Meta informations :
	 * 	- documentation : Parts Compatibility is not supported for the given category.
	 * @return string 'Disabled'
	 */
	const VALUE_DISABLED = 'Disabled';
	/**
	 * Constant for value 'ByApplication'
	 * Meta informations :
	 * 	- documentation : Parts Compatibility may be entered by application only for the given category. Entering parts compatibility by application specifies the assemblies (e.g., a specific year, make, and model of car) to which the item applies. Parts compatibility by application can be specified by listing with a catalog product that supports parts compatibility or by specifying parts compatibility by application manually (<b class="con"> Item.ItemCompatibilityList</b>).
	 * @return string 'ByApplication'
	 */
	const VALUE_BYAPPLICATION = 'ByApplication';
	/**
	 * Constant for value 'BySpecification'
	 * Meta informations :
	 * 	- documentation : Parts Compatibility may be entered by specification only for the given category. Entering parts compatibility by specification involves specifying the part's relevant dimensions or characteristics (e.g., Section Width, Aspect Ratio, Rim Diammeter, Load Index, and Speed Rating values for a tire) using attributes.
	 * @return string 'BySpecification'
	 */
	const VALUE_BYSPECIFICATION = 'BySpecification';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeItemCompatibilityEnabledCodeType
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
		return in_array($_value,array(self::VALUE_DISABLED,self::VALUE_BYAPPLICATION,self::VALUE_BYSPECIFICATION,self::VALUE_CUSTOMCODE));
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