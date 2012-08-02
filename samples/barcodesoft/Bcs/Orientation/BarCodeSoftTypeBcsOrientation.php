<?php
/**
 * Class file for BarCodeSoftTypeBcsOrientation
 * @date 02/08/2012
 */
/**
 * Class BarCodeSoftTypeBcsOrientation
 * @date 02/08/2012
 */
class BarCodeSoftTypeBcsOrientation extends BarCodeSoftWsdlClass
{
	/**
	 * Constant for value 'Original'
	 * @return string 'Original'
	 */
	const VALUE_ORIGINAL = 'Original';
	/**
	 * Constant for value 'Rotate90'
	 * @return string 'Rotate90'
	 */
	const VALUE_ROTATE90 = 'Rotate90';
	/**
	 * Constant for value 'Rotate180'
	 * @return string 'Rotate180'
	 */
	const VALUE_ROTATE180 = 'Rotate180';
	/**
	 * Constant for value 'Rotate270'
	 * @return string 'Rotate270'
	 */
	const VALUE_ROTATE270 = 'Rotate270';
	/**
	 * Constructor
	 * @return BarCodeSoftTypeBcsOrientation
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
		return in_array($_value,array(self::VALUE_ORIGINAL,self::VALUE_ROTATE90,self::VALUE_ROTATE180,self::VALUE_ROTATE270));
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