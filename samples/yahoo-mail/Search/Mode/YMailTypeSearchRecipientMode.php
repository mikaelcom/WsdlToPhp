<?php
/**
 * Class file for YMailTypeSearchRecipientMode
 * @date 02/07/2012
 */
/**
 * Class YMailTypeSearchRecipientMode
 * @date 02/07/2012
 */
class YMailTypeSearchRecipientMode extends YMailWsdlClass
{
	/**
	 * Constant for value 'toonly'
	 * @return string 'toonly'
	 */
	const VALUE_TOONLY = 'toonly';
	/**
	 * Constant for value 'allrecipient'
	 * @return string 'allrecipient'
	 */
	const VALUE_ALLRECIPIENT = 'allrecipient';
	/**
	 * Constructor
	 * @return YMailTypeSearchRecipientMode
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
		return in_array($_value,array(self::VALUE_TOONLY,self::VALUE_ALLRECIPIENT));
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