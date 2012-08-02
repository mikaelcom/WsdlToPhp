<?php
/**
 * Class file for BarCodeSoftTypeBcsImageFormat
 * @date 02/08/2012
 */
/**
 * Class BarCodeSoftTypeBcsImageFormat
 * @date 02/08/2012
 */
class BarCodeSoftTypeBcsImageFormat extends BarCodeSoftWsdlClass
{
	/**
	 * Constant for value 'BMP'
	 * @return string 'BMP'
	 */
	const VALUE_BMP = 'BMP';
	/**
	 * Constant for value 'JPG'
	 * @return string 'JPG'
	 */
	const VALUE_JPG = 'JPG';
	/**
	 * Constant for value 'PNG'
	 * @return string 'PNG'
	 */
	const VALUE_PNG = 'PNG';
	/**
	 * Constant for value 'WMF'
	 * @return string 'WMF'
	 */
	const VALUE_WMF = 'WMF';
	/**
	 * Constant for value 'TIFF'
	 * @return string 'TIFF'
	 */
	const VALUE_TIFF = 'TIFF';
	/**
	 * Constant for value 'GIF'
	 * @return string 'GIF'
	 */
	const VALUE_GIF = 'GIF';
	/**
	 * Constructor
	 * @return BarCodeSoftTypeBcsImageFormat
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
		return in_array($_value,array(self::VALUE_BMP,self::VALUE_JPG,self::VALUE_PNG,self::VALUE_WMF,self::VALUE_TIFF,self::VALUE_GIF));
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