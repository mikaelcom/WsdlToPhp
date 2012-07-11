<?php
/**
 * Class file for XiLogosTypeImageTypes
 * @date 08/07/2012
 */
/**
 * Class XiLogosTypeImageTypes
 * @date 08/07/2012
 */
class XiLogosTypeImageTypes extends XiLogosWsdlClass
{
	/**
	 * Constant for value 'GIF'
	 * @return string 'GIF'
	 */
	const VALUE_GIF = 'GIF';
	/**
	 * Constant for value 'JPG'
	 * @return string 'JPG'
	 */
	const VALUE_JPG = 'JPG';
	/**
	 * Constant for value 'EPS'
	 * @return string 'EPS'
	 */
	const VALUE_EPS = 'EPS';
	/**
	 * Constructor
	 * @return XiLogosTypeImageTypes
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
		return in_array($_value,array(self::VALUE_GIF,self::VALUE_JPG,self::VALUE_EPS));
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