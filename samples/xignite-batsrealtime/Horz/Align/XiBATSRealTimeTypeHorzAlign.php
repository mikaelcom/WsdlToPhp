<?php
/**
 * Class file for XiBATSRealTimeTypeHorzAlign
 * @date 08/07/2012
 */
/**
 * Class XiBATSRealTimeTypeHorzAlign
 * @date 08/07/2012
 */
class XiBATSRealTimeTypeHorzAlign extends XiBATSRealTimeWsdlClass
{
	/**
	 * Constant for value 'Center'
	 * @return string 'Center'
	 */
	const VALUE_CENTER = 'Center';
	/**
	 * Constant for value 'Left'
	 * @return string 'Left'
	 */
	const VALUE_LEFT = 'Left';
	/**
	 * Constant for value 'Right'
	 * @return string 'Right'
	 */
	const VALUE_RIGHT = 'Right';
	/**
	 * Constructor
	 * @return XiBATSRealTimeTypeHorzAlign
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
		return in_array($_value,array(self::VALUE_CENTER,self::VALUE_LEFT,self::VALUE_RIGHT));
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