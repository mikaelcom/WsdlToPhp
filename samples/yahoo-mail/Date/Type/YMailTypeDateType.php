<?php
/**
 * Class file for YMailTypeDateType
 * @date 02/07/2012
 */
/**
 * Class YMailTypeDateType
 * @date 02/07/2012
 */
class YMailTypeDateType extends YMailWsdlClass
{
	/**
	 * Constant for value 'senderDate'
	 * @return string 'senderDate'
	 */
	const VALUE_SENDERDATE = 'senderDate';
	/**
	 * Constant for value 'receiverDate'
	 * @return string 'receiverDate'
	 */
	const VALUE_RECEIVERDATE = 'receiverDate';
	/**
	 * Constructor
	 * @return YMailTypeDateType
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
		return in_array($_value,array(self::VALUE_SENDERDATE,self::VALUE_RECEIVERDATE));
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