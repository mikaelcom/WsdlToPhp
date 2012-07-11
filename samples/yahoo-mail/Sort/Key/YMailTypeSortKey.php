<?php
/**
 * Class file for YMailTypeSortKey
 * @date 02/07/2012
 */
/**
 * Class YMailTypeSortKey
 * @date 02/07/2012
 */
class YMailTypeSortKey extends YMailWsdlClass
{
	/**
	 * Constant for value 'date'
	 * @return string 'date'
	 */
	const VALUE_DATE = 'date';
	/**
	 * Constant for value 'size'
	 * @return string 'size'
	 */
	const VALUE_SIZE = 'size';
	/**
	 * Constant for value 'subject'
	 * @return string 'subject'
	 */
	const VALUE_SUBJECT = 'subject';
	/**
	 * Constant for value 'sender'
	 * @return string 'sender'
	 */
	const VALUE_SENDER = 'sender';
	/**
	 * Constant for value 'to'
	 * @return string 'to'
	 */
	const VALUE_TO = 'to';
	/**
	 * Constant for value 'recipient'
	 * @return string 'recipient'
	 */
	const VALUE_RECIPIENT = 'recipient';
	/**
	 * Constant for value 'folder'
	 * @return string 'folder'
	 */
	const VALUE_FOLDER = 'folder';
	/**
	 * Constructor
	 * @return YMailTypeSortKey
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
		return in_array($_value,array(self::VALUE_DATE,self::VALUE_SIZE,self::VALUE_SUBJECT,self::VALUE_SENDER,self::VALUE_TO,self::VALUE_RECIPIENT,self::VALUE_FOLDER));
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