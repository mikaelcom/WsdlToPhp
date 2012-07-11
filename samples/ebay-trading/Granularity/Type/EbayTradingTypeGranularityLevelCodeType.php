<?php
/**
 * Class file for EbayTradingTypeGranularityLevelCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGranularityLevelCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeGranularityLevelCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Coarse'
	 * Meta informations :
	 * 	- documentation : (in) For each record in the response, retrieves less data than Medium. See the eBay Web Services guide for a list of the output fields that are returned when this level is specified.
	 * @return string 'Coarse'
	 */
	const VALUE_COARSE = 'Coarse';
	/**
	 * Constant for value 'Fine'
	 * Meta informations :
	 * 	- documentation : For each record in the response, retrieves more data than Medium. See the eBay Web Services guide for a list of the output fields that are returned when this level is specified.
	 * @return string 'Fine'
	 */
	const VALUE_FINE = 'Fine';
	/**
	 * Constant for value 'Medium'
	 * Meta informations :
	 * 	- documentation : For each record in the response, retrieves more data than Coarse and less data than Fine. See the eBay Web Services guide for a list of the output fields that are returned when this level is specified.
	 * @return string 'Medium'
	 */
	const VALUE_MEDIUM = 'Medium';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : 
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeGranularityLevelCodeType
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
		return in_array($_value,array(self::VALUE_COARSE,self::VALUE_FINE,self::VALUE_MEDIUM,self::VALUE_CUSTOMCODE));
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