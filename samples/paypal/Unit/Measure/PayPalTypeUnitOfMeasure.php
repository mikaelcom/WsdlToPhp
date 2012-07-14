<?php
/**
 * Class file for PayPalTypeUnitOfMeasure
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeUnitOfMeasure
 * @date 14/07/2012
 */
class PayPalTypeUnitOfMeasure extends PayPalWsdlClass
{
	/**
	 * Constant for value 'EA'
	 * Meta informations :
	 * 	- documentation : Each
	 * @return string 'EA'
	 */
	const VALUE_EA = 'EA';
	/**
	 * Constant for value 'Hours'
	 * Meta informations :
	 * 	- documentation : Hours
	 * @return string 'Hours'
	 */
	const VALUE_HOURS = 'Hours';
	/**
	 * Constant for value 'Days'
	 * Meta informations :
	 * 	- documentation : Days
	 * @return string 'Days'
	 */
	const VALUE_DAYS = 'Days';
	/**
	 * Constant for value 'Seconds'
	 * Meta informations :
	 * 	- documentation : Seconds
	 * @return string 'Seconds'
	 */
	const VALUE_SECONDS = 'Seconds';
	/**
	 * Constant for value 'CrateOf12'
	 * Meta informations :
	 * 	- documentation : Crate of 12 bottles of beer
	 * @return string 'CrateOf12'
	 */
	const VALUE_CRATEOF12 = 'CrateOf12';
	/**
	 * Constant for value '6Pack'
	 * Meta informations :
	 * 	- documentation : 6Pack
	 * @return string '6Pack'
	 */
	const VALUE_6PACK = '6Pack';
	/**
	 * Constant for value 'GLI'
	 * Meta informations :
	 * 	- documentation : Gallon (UK)
	 * @return string 'GLI'
	 */
	const VALUE_GLI = 'GLI';
	/**
	 * Constant for value 'GLL'
	 * Meta informations :
	 * 	- documentation : Gallon (US)
	 * @return string 'GLL'
	 */
	const VALUE_GLL = 'GLL';
	/**
	 * Constant for value 'LTR'
	 * Meta informations :
	 * 	- documentation : Litre
	 * @return string 'LTR'
	 */
	const VALUE_LTR = 'LTR';
	/**
	 * Constant for value 'INH'
	 * Meta informations :
	 * 	- documentation : Inch
	 * @return string 'INH'
	 */
	const VALUE_INH = 'INH';
	/**
	 * Constant for value 'FOT'
	 * Meta informations :
	 * 	- documentation : Foot
	 * @return string 'FOT'
	 */
	const VALUE_FOT = 'FOT';
	/**
	 * Constant for value 'MMT'
	 * Meta informations :
	 * 	- documentation : Millimeter
	 * @return string 'MMT'
	 */
	const VALUE_MMT = 'MMT';
	/**
	 * Constant for value 'CMQ'
	 * Meta informations :
	 * 	- documentation : Centimeter
	 * @return string 'CMQ'
	 */
	const VALUE_CMQ = 'CMQ';
	/**
	 * Constant for value 'MTR'
	 * Meta informations :
	 * 	- documentation : Meter
	 * @return string 'MTR'
	 */
	const VALUE_MTR = 'MTR';
	/**
	 * Constant for value 'MTK'
	 * Meta informations :
	 * 	- documentation : Square Meter
	 * @return string 'MTK'
	 */
	const VALUE_MTK = 'MTK';
	/**
	 * Constant for value 'MTQ'
	 * Meta informations :
	 * 	- documentation : Cubic Meter
	 * @return string 'MTQ'
	 */
	const VALUE_MTQ = 'MTQ';
	/**
	 * Constant for value 'GRM'
	 * Meta informations :
	 * 	- documentation : Gram
	 * @return string 'GRM'
	 */
	const VALUE_GRM = 'GRM';
	/**
	 * Constant for value 'KGM'
	 * Meta informations :
	 * 	- documentation : Kilogram
	 * @return string 'KGM'
	 */
	const VALUE_KGM = 'KGM';
	/**
	 * Constant for value 'KG'
	 * Meta informations :
	 * 	- documentation : Kilogram
	 * @return string 'KG'
	 */
	const VALUE_KG = 'KG';
	/**
	 * Constant for value 'LBR'
	 * Meta informations :
	 * 	- documentation : Pound
	 * @return string 'LBR'
	 */
	const VALUE_LBR = 'LBR';
	/**
	 * Constant for value 'ANN'
	 * Meta informations :
	 * 	- documentation : Annual
	 * @return string 'ANN'
	 */
	const VALUE_ANN = 'ANN';
	/**
	 * Constant for value 'CEL'
	 * Meta informations :
	 * 	- documentation : Degree Celcius
	 * @return string 'CEL'
	 */
	const VALUE_CEL = 'CEL';
	/**
	 * Constant for value 'FAH'
	 * Meta informations :
	 * 	- documentation : Degree Fahrenheit
	 * @return string 'FAH'
	 */
	const VALUE_FAH = 'FAH';
	/**
	 * Constant for value 'RESERVED'
	 * Meta informations :
	 * 	- documentation : RESERVED
	 * @return string 'RESERVED'
	 */
	const VALUE_RESERVED = 'RESERVED';
	/**
	 * Constructor
	 * @return PayPalTypeUnitOfMeasure
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
		return in_array($_value,array(self::VALUE_EA,self::VALUE_HOURS,self::VALUE_DAYS,self::VALUE_SECONDS,self::VALUE_CRATEOF12,self::VALUE_6PACK,self::VALUE_GLI,self::VALUE_GLL,self::VALUE_LTR,self::VALUE_INH,self::VALUE_FOT,self::VALUE_MMT,self::VALUE_CMQ,self::VALUE_MTR,self::VALUE_MTK,self::VALUE_MTQ,self::VALUE_GRM,self::VALUE_KGM,self::VALUE_KG,self::VALUE_LBR,self::VALUE_ANN,self::VALUE_CEL,self::VALUE_FAH,self::VALUE_RESERVED));
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