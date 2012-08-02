<?php
/**
 * Class file for BarCodeSoftTypeAztecErrorLevel
 * @date 02/08/2012
 */
/**
 * Class BarCodeSoftTypeAztecErrorLevel
 * @date 02/08/2012
 */
class BarCodeSoftTypeAztecErrorLevel extends BarCodeSoftWsdlClass
{
	/**
	 * Constant for value 'AutoSelect'
	 * @return string 'AutoSelect'
	 */
	const VALUE_AUTOSELECT = 'AutoSelect';
	/**
	 * Constant for value 'AztecECL5'
	 * @return string 'AztecECL5'
	 */
	const VALUE_AZTECECL5 = 'AztecECL5';
	/**
	 * Constant for value 'AztecECL10'
	 * @return string 'AztecECL10'
	 */
	const VALUE_AZTECECL10 = 'AztecECL10';
	/**
	 * Constant for value 'AztecECL15'
	 * @return string 'AztecECL15'
	 */
	const VALUE_AZTECECL15 = 'AztecECL15';
	/**
	 * Constant for value 'AztecECL20'
	 * @return string 'AztecECL20'
	 */
	const VALUE_AZTECECL20 = 'AztecECL20';
	/**
	 * Constant for value 'AztecECL23'
	 * @return string 'AztecECL23'
	 */
	const VALUE_AZTECECL23 = 'AztecECL23';
	/**
	 * Constant for value 'AztecECL25'
	 * @return string 'AztecECL25'
	 */
	const VALUE_AZTECECL25 = 'AztecECL25';
	/**
	 * Constant for value 'AztecECL30'
	 * @return string 'AztecECL30'
	 */
	const VALUE_AZTECECL30 = 'AztecECL30';
	/**
	 * Constant for value 'AztecECL35'
	 * @return string 'AztecECL35'
	 */
	const VALUE_AZTECECL35 = 'AztecECL35';
	/**
	 * Constant for value 'AztecECL40'
	 * @return string 'AztecECL40'
	 */
	const VALUE_AZTECECL40 = 'AztecECL40';
	/**
	 * Constant for value 'AztecECL45'
	 * @return string 'AztecECL45'
	 */
	const VALUE_AZTECECL45 = 'AztecECL45';
	/**
	 * Constant for value 'AztecECL50'
	 * @return string 'AztecECL50'
	 */
	const VALUE_AZTECECL50 = 'AztecECL50';
	/**
	 * Constant for value 'AztecECL55'
	 * @return string 'AztecECL55'
	 */
	const VALUE_AZTECECL55 = 'AztecECL55';
	/**
	 * Constant for value 'AztecECL60'
	 * @return string 'AztecECL60'
	 */
	const VALUE_AZTECECL60 = 'AztecECL60';
	/**
	 * Constant for value 'AztecECL65'
	 * @return string 'AztecECL65'
	 */
	const VALUE_AZTECECL65 = 'AztecECL65';
	/**
	 * Constant for value 'AztecECL70'
	 * @return string 'AztecECL70'
	 */
	const VALUE_AZTECECL70 = 'AztecECL70';
	/**
	 * Constant for value 'AztecECL75'
	 * @return string 'AztecECL75'
	 */
	const VALUE_AZTECECL75 = 'AztecECL75';
	/**
	 * Constant for value 'AztecECL80'
	 * @return string 'AztecECL80'
	 */
	const VALUE_AZTECECL80 = 'AztecECL80';
	/**
	 * Constant for value 'AztecECL85'
	 * @return string 'AztecECL85'
	 */
	const VALUE_AZTECECL85 = 'AztecECL85';
	/**
	 * Constant for value 'AztecECL90'
	 * @return string 'AztecECL90'
	 */
	const VALUE_AZTECECL90 = 'AztecECL90';
	/**
	 * Constructor
	 * @return BarCodeSoftTypeAztecErrorLevel
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
		return in_array($_value,array(self::VALUE_AUTOSELECT,self::VALUE_AZTECECL5,self::VALUE_AZTECECL10,self::VALUE_AZTECECL15,self::VALUE_AZTECECL20,self::VALUE_AZTECECL23,self::VALUE_AZTECECL25,self::VALUE_AZTECECL30,self::VALUE_AZTECECL35,self::VALUE_AZTECECL40,self::VALUE_AZTECECL45,self::VALUE_AZTECECL50,self::VALUE_AZTECECL55,self::VALUE_AZTECECL60,self::VALUE_AZTECECL65,self::VALUE_AZTECECL70,self::VALUE_AZTECECL75,self::VALUE_AZTECECL80,self::VALUE_AZTECECL85,self::VALUE_AZTECECL90));
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