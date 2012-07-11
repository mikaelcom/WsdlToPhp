<?php
/**
 * Class file for EbayTradingTypeWirelessCarrierIDCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeWirelessCarrierIDCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeWirelessCarrierIDCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Cingular'
	 * @return string 'Cingular'
	 */
	const VALUE_CINGULAR = 'Cingular';
	/**
	 * Constant for value 'TMobile'
	 * @return string 'TMobile'
	 */
	const VALUE_TMOBILE = 'TMobile';
	/**
	 * Constant for value 'Sprint'
	 * @return string 'Sprint'
	 */
	const VALUE_SPRINT = 'Sprint';
	/**
	 * Constant for value 'Nextel'
	 * @return string 'Nextel'
	 */
	const VALUE_NEXTEL = 'Nextel';
	/**
	 * Constant for value 'Verizon'
	 * @return string 'Verizon'
	 */
	const VALUE_VERIZON = 'Verizon';
	/**
	 * Constant for value 'CincinnatiBell'
	 * @return string 'CincinnatiBell'
	 */
	const VALUE_CINCINNATIBELL = 'CincinnatiBell';
	/**
	 * Constant for value 'Dobson'
	 * @return string 'Dobson'
	 */
	const VALUE_DOBSON = 'Dobson';
	/**
	 * Constant for value 'Alltel'
	 * @return string 'Alltel'
	 */
	const VALUE_ALLTEL = 'Alltel';
	/**
	 * Constant for value 'Leap'
	 * @return string 'Leap'
	 */
	const VALUE_LEAP = 'Leap';
	/**
	 * Constant for value 'USCellular'
	 * @return string 'USCellular'
	 */
	const VALUE_USCELLULAR = 'USCellular';
	/**
	 * Constant for value 'Movistar'
	 * @return string 'Movistar'
	 */
	const VALUE_MOVISTAR = 'Movistar';
	/**
	 * Constant for value 'Amena'
	 * @return string 'Amena'
	 */
	const VALUE_AMENA = 'Amena';
	/**
	 * Constant for value 'Vodafone'
	 * @return string 'Vodafone'
	 */
	const VALUE_VODAFONE = 'Vodafone';
	/**
	 * Constant for value 'ATT'
	 * @return string 'ATT'
	 */
	const VALUE_ATT = 'ATT';
	/**
	 * Constant for value 'CustomCode'
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeWirelessCarrierIDCodeType
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
		return in_array($_value,array(self::VALUE_CINGULAR,self::VALUE_TMOBILE,self::VALUE_SPRINT,self::VALUE_NEXTEL,self::VALUE_VERIZON,self::VALUE_CINCINNATIBELL,self::VALUE_DOBSON,self::VALUE_ALLTEL,self::VALUE_LEAP,self::VALUE_USCELLULAR,self::VALUE_MOVISTAR,self::VALUE_AMENA,self::VALUE_VODAFONE,self::VALUE_ATT,self::VALUE_CUSTOMCODE));
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