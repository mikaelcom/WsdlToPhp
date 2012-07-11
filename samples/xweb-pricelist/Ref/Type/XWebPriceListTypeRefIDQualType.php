<?php
/**
 * Class file for XWebPriceListTypeRefIDQualType
 * @date 09/07/2012
 */
/**
 * Class XWebPriceListTypeRefIDQualType
 * @date 09/07/2012
 */
class XWebPriceListTypeRefIDQualType extends XWebPriceListWsdlClass
{
	/**
	 * Constant for value 'VP'
	 * @return string 'VP'
	 */
	const VALUE_VP = 'VP';
	/**
	 * Constant for value 'BP'
	 * @return string 'BP'
	 */
	const VALUE_BP = 'BP';
	/**
	 * Constant for value 'MG'
	 * @return string 'MG'
	 */
	const VALUE_MG = 'MG';
	/**
	 * Constant for value 'UP'
	 * @return string 'UP'
	 */
	const VALUE_UP = 'UP';
	/**
	 * Constructor
	 * @return XWebPriceListTypeRefIDQualType
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
		return in_array($_value,array(self::VALUE_VP,self::VALUE_BP,self::VALUE_MG,self::VALUE_UP));
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