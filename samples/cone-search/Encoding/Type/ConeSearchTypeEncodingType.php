<?php
/**
 * Class file for ConeSearchTypeEncodingType
 * @date 13/10/2012
 */
/**
 * Class ConeSearchTypeEncodingType
 * @date 13/10/2012
 */
class ConeSearchTypeEncodingType extends ConeSearchWsdlClass
{
	/**
	 * Constant for value 'gzip'
	 * @return string 'gzip'
	 */
	const VALUE_GZIP = 'gzip';
	/**
	 * Constant for value 'base64'
	 * @return string 'base64'
	 */
	const VALUE_BASE64 = 'base64';
	/**
	 * Constant for value 'dynamic'
	 * @return string 'dynamic'
	 */
	const VALUE_DYNAMIC = 'dynamic';
	/**
	 * Constant for value 'none'
	 * @return string 'none'
	 */
	const VALUE_NONE = 'none';
	/**
	 * Constructor
	 * @return ConeSearchTypeEncodingType
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
		return in_array($_value,array(self::VALUE_GZIP,self::VALUE_BASE64,self::VALUE_DYNAMIC,self::VALUE_NONE));
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