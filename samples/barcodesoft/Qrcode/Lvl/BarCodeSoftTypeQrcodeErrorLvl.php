<?php
/**
 * Class file for BarCodeSoftTypeQrcodeErrorLvl
 * @date 02/08/2012
 */
/**
 * Class BarCodeSoftTypeQrcodeErrorLvl
 * @date 02/08/2012
 */
class BarCodeSoftTypeQrcodeErrorLvl extends BarCodeSoftWsdlClass
{
	/**
	 * Constant for value 'L07'
	 * @return string 'L07'
	 */
	const VALUE_L07 = 'L07';
	/**
	 * Constant for value 'M15'
	 * @return string 'M15'
	 */
	const VALUE_M15 = 'M15';
	/**
	 * Constant for value 'Q25'
	 * @return string 'Q25'
	 */
	const VALUE_Q25 = 'Q25';
	/**
	 * Constant for value 'H30'
	 * @return string 'H30'
	 */
	const VALUE_H30 = 'H30';
	/**
	 * Constructor
	 * @return BarCodeSoftTypeQrcodeErrorLvl
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
		return in_array($_value,array(self::VALUE_L07,self::VALUE_M15,self::VALUE_Q25,self::VALUE_H30));
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