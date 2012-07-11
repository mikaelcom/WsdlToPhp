<?php
/**
 * Class file for EbayTradingTypeShippingCarrierCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeShippingCarrierCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeShippingCarrierCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'UPS'
	 * Meta informations :
	 * 	- documentation : United Parcel Service. <br><br> For UPS Mail Innovations (for CompleteSale call requests only), specify the value UPS-MI.
	 * @return string 'UPS'
	 */
	const VALUE_UPS = 'UPS';
	/**
	 * Constant for value 'USPS'
	 * Meta informations :
	 * 	- documentation : U.S. Postal Service.
	 * @return string 'USPS'
	 */
	const VALUE_USPS = 'USPS';
	/**
	 * Constant for value 'FedEx'
	 * Meta informations :
	 * 	- documentation : Fedex For FedEx SmartPost (for CompleteSale call requests only), specify the value FedEx.
	 * @return string 'FedEx'
	 */
	const VALUE_FEDEX = 'FedEx';
	/**
	 * Constant for value 'DeutschePost'
	 * Meta informations :
	 * 	- documentation : Deutsche Post.
	 * @return string 'DeutschePost'
	 */
	const VALUE_DEUTSCHEPOST = 'DeutschePost';
	/**
	 * Constant for value 'DHL'
	 * Meta informations :
	 * 	- documentation : DHL service
	 * @return string 'DHL'
	 */
	const VALUE_DHL = 'DHL';
	/**
	 * Constant for value 'Hermes'
	 * Meta informations :
	 * 	- documentation : Hermes
	 * @return string 'Hermes'
	 */
	const VALUE_HERMES = 'Hermes';
	/**
	 * Constant for value 'iLoxx'
	 * Meta informations :
	 * 	- documentation : iLoxx
	 * @return string 'iLoxx'
	 */
	const VALUE_ILOXX = 'iLoxx';
	/**
	 * Constant for value 'Other'
	 * Meta informations :
	 * 	- documentation : Other postal service
	 * @return string 'Other'
	 */
	const VALUE_OTHER = 'Other';
	/**
	 * Constant for value 'ColiposteDomestic'
	 * Meta informations :
	 * 	- documentation : Coliposte Domestic
	 * @return string 'ColiposteDomestic'
	 */
	const VALUE_COLIPOSTEDOMESTIC = 'ColiposteDomestic';
	/**
	 * Constant for value 'ColiposteInternational'
	 * Meta informations :
	 * 	- documentation : Coliposte International
	 * @return string 'ColiposteInternational'
	 */
	const VALUE_COLIPOSTEINTERNATIONAL = 'ColiposteInternational';
	/**
	 * Constant for value 'Chronopost'
	 * Meta informations :
	 * 	- documentation : Chronopost
	 * @return string 'Chronopost'
	 */
	const VALUE_CHRONOPOST = 'Chronopost';
	/**
	 * Constant for value 'Correos'
	 * Meta informations :
	 * 	- documentation : Correos
	 * @return string 'Correos'
	 */
	const VALUE_CORREOS = 'Correos';
	/**
	 * Constant for value 'Seur'
	 * Meta informations :
	 * 	- documentation : Seur (reserved for future use)
	 * @return string 'Seur'
	 */
	const VALUE_SEUR = 'Seur';
	/**
	 * Constant for value 'Nacex'
	 * Meta informations :
	 * 	- documentation : Nacex
	 * @return string 'Nacex'
	 */
	const VALUE_NACEX = 'Nacex';
	/**
	 * Constant for value 'GlobalShipping_MultiCarrier'
	 * Meta informations :
	 * 	- documentation : The Global Exchange program's international shipping provider.
	 * @return string 'GlobalShipping_MultiCarrier'
	 */
	const VALUE_GLOBALSHIPPING_MULTICARRIER = 'GlobalShipping_MultiCarrier';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for internal or future use
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeShippingCarrierCodeType
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
		return in_array($_value,array(self::VALUE_UPS,self::VALUE_USPS,self::VALUE_FEDEX,self::VALUE_DEUTSCHEPOST,self::VALUE_DHL,self::VALUE_HERMES,self::VALUE_ILOXX,self::VALUE_OTHER,self::VALUE_COLIPOSTEDOMESTIC,self::VALUE_COLIPOSTEINTERNATIONAL,self::VALUE_CHRONOPOST,self::VALUE_CORREOS,self::VALUE_SEUR,self::VALUE_NACEX,self::VALUE_GLOBALSHIPPING_MULTICARRIER,self::VALUE_CUSTOMCODE));
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