<?php
/**
 * Class file for EbayTradingTypeAdFormatEnabledCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeAdFormatEnabledCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeAdFormatEnabledCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Disabled'
	 * Meta informations :
	 * 	- documentation : The Ad Format feature is disabled for the category.
	 * @return string 'Disabled'
	 */
	const VALUE_DISABLED = 'Disabled';
	/**
	 * Constant for value 'Enabled'
	 * Meta informations :
	 * 	- documentation : The Ad Format feature is enabled for the category.
	 * @return string 'Enabled'
	 */
	const VALUE_ENABLED = 'Enabled';
	/**
	 * Constant for value 'Only'
	 * Meta informations :
	 * 	- documentation : The category supports the Ad Format feature only.
	 * @return string 'Only'
	 */
	const VALUE_ONLY = 'Only';
	/**
	 * Constant for value 'ClassifiedAdEnabled'
	 * Meta informations :
	 * 	- documentation : The lead generation Classified Ad Format feature is enabled for the category.
	 * @return string 'ClassifiedAdEnabled'
	 */
	const VALUE_CLASSIFIEDADENABLED = 'ClassifiedAdEnabled';
	/**
	 * Constant for value 'ClassifiedAdOnly'
	 * Meta informations :
	 * 	- documentation : The category supports the lead generation Classified Ad Format feature only.
	 * @return string 'ClassifiedAdOnly'
	 */
	const VALUE_CLASSIFIEDADONLY = 'ClassifiedAdOnly';
	/**
	 * Constant for value 'LocalMarketBestOfferOnly'
	 * Meta informations :
	 * 	- documentation : The category supports the lead generation Motors Loccal Market feature only.
	 * @return string 'LocalMarketBestOfferOnly'
	 */
	const VALUE_LOCALMARKETBESTOFFERONLY = 'LocalMarketBestOfferOnly';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeAdFormatEnabledCodeType
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
		return in_array($_value,array(self::VALUE_DISABLED,self::VALUE_ENABLED,self::VALUE_ONLY,self::VALUE_CLASSIFIEDADENABLED,self::VALUE_CLASSIFIEDADONLY,self::VALUE_LOCALMARKETBESTOFFERONLY,self::VALUE_CUSTOMCODE));
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