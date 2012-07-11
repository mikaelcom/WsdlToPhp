<?php
/**
 * Class file for XiMetalsTypeMetalTypes
 * @date 08/07/2012
 */
/**
 * Class XiMetalsTypeMetalTypes
 * @date 08/07/2012
 */
class XiMetalsTypeMetalTypes extends XiMetalsWsdlClass
{
	/**
	 * Constant for value 'ARE'
	 * @return string 'ARE'
	 */
	const VALUE_ARE = 'ARE';
	/**
	 * Constant for value 'AUN'
	 * @return string 'AUN'
	 */
	const VALUE_AUN = 'AUN';
	/**
	 * Constant for value 'BRI'
	 * @return string 'BRI'
	 */
	const VALUE_BRI = 'BRI';
	/**
	 * Constant for value 'DOE'
	 * @return string 'DOE'
	 */
	const VALUE_DOE = 'DOE';
	/**
	 * Constant for value 'DOW'
	 * @return string 'DOW'
	 */
	const VALUE_DOW = 'DOW';
	/**
	 * Constant for value 'FRN'
	 * @return string 'FRN'
	 */
	const VALUE_FRN = 'FRN';
	/**
	 * Constant for value 'KRU'
	 * @return string 'KRU'
	 */
	const VALUE_KRU = 'KRU';
	/**
	 * Constant for value 'MAL'
	 * @return string 'MAL'
	 */
	const VALUE_MAL = 'MAL';
	/**
	 * Constant for value 'M5P'
	 * @return string 'M5P'
	 */
	const VALUE_M5P = 'M5P';
	/**
	 * Constant for value 'NBL'
	 * @return string 'NBL'
	 */
	const VALUE_NBL = 'NBL';
	/**
	 * Constant for value 'OSO'
	 * @return string 'OSO'
	 */
	const VALUE_OSO = 'OSO';
	/**
	 * Constant for value 'NSO'
	 * @return string 'NSO'
	 */
	const VALUE_NSO = 'NSO';
	/**
	 * Constant for value 'VRL'
	 * @return string 'VRL'
	 */
	const VALUE_VRL = 'VRL';
	/**
	 * Constant for value 'VRN'
	 * @return string 'VRN'
	 */
	const VALUE_VRN = 'VRN';
	/**
	 * Constant for value 'XAU'
	 * @return string 'XAU'
	 */
	const VALUE_XAU = 'XAU';
	/**
	 * Constant for value 'XPD'
	 * @return string 'XPD'
	 */
	const VALUE_XPD = 'XPD';
	/**
	 * Constant for value 'XPT'
	 * @return string 'XPT'
	 */
	const VALUE_XPT = 'XPT';
	/**
	 * Constant for value 'XAG'
	 * @return string 'XAG'
	 */
	const VALUE_XAG = 'XAG';
	/**
	 * Constant for value 'XAUNYC'
	 * @return string 'XAUNYC'
	 */
	const VALUE_XAUNYC = 'XAUNYC';
	/**
	 * Constant for value 'XPDNYC'
	 * @return string 'XPDNYC'
	 */
	const VALUE_XPDNYC = 'XPDNYC';
	/**
	 * Constant for value 'XPTNYC'
	 * @return string 'XPTNYC'
	 */
	const VALUE_XPTNYC = 'XPTNYC';
	/**
	 * Constant for value 'XAGNYC'
	 * @return string 'XAGNYC'
	 */
	const VALUE_XAGNYC = 'XAGNYC';
	/**
	 * Constructor
	 * @return XiMetalsTypeMetalTypes
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
		return in_array($_value,array(self::VALUE_ARE,self::VALUE_AUN,self::VALUE_BRI,self::VALUE_DOE,self::VALUE_DOW,self::VALUE_FRN,self::VALUE_KRU,self::VALUE_MAL,self::VALUE_M5P,self::VALUE_NBL,self::VALUE_OSO,self::VALUE_NSO,self::VALUE_VRL,self::VALUE_VRN,self::VALUE_XAU,self::VALUE_XPD,self::VALUE_XPT,self::VALUE_XAG,self::VALUE_XAUNYC,self::VALUE_XPDNYC,self::VALUE_XPTNYC,self::VALUE_XAGNYC));
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