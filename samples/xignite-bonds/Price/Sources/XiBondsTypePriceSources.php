<?php
/**
 * Class file for XiBondsTypePriceSources
 * @date 08/07/2012
 */
/**
 * Class XiBondsTypePriceSources
 * @date 08/07/2012
 */
class XiBondsTypePriceSources extends XiBondsWsdlClass
{
	/**
	 * Constant for value 'FINRA'
	 * @return string 'FINRA'
	 */
	const VALUE_FINRA = 'FINRA';
	/**
	 * Constructor
	 * @return XiBondsTypePriceSources
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
		return in_array($_value,array(self::VALUE_FINRA));
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