<?php
/**
 * Class file for XiFinancialsTypeLineTypes
 * @date 08/07/2012
 */
/**
 * Class XiFinancialsTypeLineTypes
 * @date 08/07/2012
 */
class XiFinancialsTypeLineTypes extends XiFinancialsWsdlClass
{
	/**
	 * Constant for value 'Header'
	 * @return string 'Header'
	 */
	const VALUE_HEADER = 'Header';
	/**
	 * Constant for value 'Line'
	 * @return string 'Line'
	 */
	const VALUE_LINE = 'Line';
	/**
	 * Constant for value 'SubTotal'
	 * @return string 'SubTotal'
	 */
	const VALUE_SUBTOTAL = 'SubTotal';
	/**
	 * Constant for value 'Total'
	 * @return string 'Total'
	 */
	const VALUE_TOTAL = 'Total';
	/**
	 * Constructor
	 * @return XiFinancialsTypeLineTypes
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
		return in_array($_value,array(self::VALUE_HEADER,self::VALUE_LINE,self::VALUE_SUBTOTAL,self::VALUE_TOTAL));
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