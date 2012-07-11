<?php
/**
 * Class file for EbayFindTypeGallerySizeEnum
 * @date 04/07/2012
 */
/**
 * Class EbayFindTypeGallerySizeEnum
 * @date 04/07/2012
 */
class EbayFindTypeGallerySizeEnum extends EbayFindWsdlClass
{
	/**
	 * Constant for value 'Small'
	 * Meta informations :
	 * 	- documentation : Small sized thumbnail image. Small images are up to 80 pixels on the longest side.
	 * @return string 'Small'
	 */
	const VALUE_SMALL = 'Small';
	/**
	 * Constant for value 'Medium'
	 * Meta informations :
	 * 	- documentation : Medium sized thumbnail image Medium images are up to 96 pixels on the longest side.
	 * @return string 'Medium'
	 */
	const VALUE_MEDIUM = 'Medium';
	/**
	 * Constant for value 'Large'
	 * Meta informations :
	 * 	- documentation : Large sized thumbnail image. Large images are up to 140 pixels on the longest side.
	 * @return string 'Large'
	 */
	const VALUE_LARGE = 'Large';
	/**
	 * Constructor
	 * @return EbayFindTypeGallerySizeEnum
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
		return in_array($_value,array(self::VALUE_SMALL,self::VALUE_MEDIUM,self::VALUE_LARGE));
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