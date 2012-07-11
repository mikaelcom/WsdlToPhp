<?php
/**
 * Class file for EbayTradingTypePricingTreatmentCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypePricingTreatmentCodeType
 * @date 04/07/2012
 */
class EbayTradingTypePricingTreatmentCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'STP'
	 * Meta informations :
	 * 	- documentation : STP stands for Strike Through Pricing.
	 * @return string 'STP'
	 */
	const VALUE_STP = 'STP';
	/**
	 * Constant for value 'MAP'
	 * Meta informations :
	 * 	- documentation : MAP stands for MinimumAdvertisedPrice
	 * @return string 'MAP'
	 */
	const VALUE_MAP = 'MAP';
	/**
	 * Constant for value 'None'
	 * Meta informations :
	 * 	- documentation : None means neither STP nor MinimumAdvertisedPrice.
	 * @return string 'None'
	 */
	const VALUE_NONE = 'None';
	/**
	 * Constant for value 'MFO'
	 * Meta informations :
	 * 	- documentation : MFO means stands for MadeForOutletComparisonPrice.
	 * @return string 'MFO'
	 */
	const VALUE_MFO = 'MFO';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypePricingTreatmentCodeType
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
		return in_array($_value,array(self::VALUE_STP,self::VALUE_MAP,self::VALUE_NONE,self::VALUE_MFO,self::VALUE_CUSTOMCODE));
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