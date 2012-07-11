<?php
/**
 * Class file for EbayFindTypePriceTreatmentEnum
 * @date 04/07/2012
 */
/**
 * Class EbayFindTypePriceTreatmentEnum
 * @date 04/07/2012
 */
class EbayFindTypePriceTreatmentEnum extends EbayFindWsdlClass
{
	/**
	 * Constant for value 'STP'
	 * Meta informations :
	 * 	- documentation : STP stands for Strike-Through Pricing.
	 * @return string 'STP'
	 */
	const VALUE_STP = 'STP';
	/**
	 * Constant for value 'MAP'
	 * Meta informations :
	 * 	- documentation : MAP stands for Miminum Advertised Price.
	 * @return string 'MAP'
	 */
	const VALUE_MAP = 'MAP';
	/**
	 * Constructor
	 * @return EbayFindTypePriceTreatmentEnum
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
		return in_array($_value,array(self::VALUE_STP,self::VALUE_MAP));
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