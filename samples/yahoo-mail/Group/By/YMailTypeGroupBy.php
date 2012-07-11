<?php
/**
 * Class file for YMailTypeGroupBy
 * @date 02/07/2012
 */
/**
 * Class YMailTypeGroupBy
 * @date 02/07/2012
 */
class YMailTypeGroupBy extends YMailWsdlClass
{
	/**
	 * Constant for value 'read'
	 * @return string 'read'
	 */
	const VALUE_READ = 'read';
	/**
	 * Constant for value 'unRead'
	 * @return string 'unRead'
	 */
	const VALUE_UNREAD = 'unRead';
	/**
	 * Constant for value 'replied'
	 * @return string 'replied'
	 */
	const VALUE_REPLIED = 'replied';
	/**
	 * Constant for value 'notReplied'
	 * @return string 'notReplied'
	 */
	const VALUE_NOTREPLIED = 'notReplied';
	/**
	 * Constant for value 'flagged'
	 * @return string 'flagged'
	 */
	const VALUE_FLAGGED = 'flagged';
	/**
	 * Constant for value 'unFlagged'
	 * @return string 'unFlagged'
	 */
	const VALUE_UNFLAGGED = 'unFlagged';
	/**
	 * Constant for value 'forwarded'
	 * @return string 'forwarded'
	 */
	const VALUE_FORWARDED = 'forwarded';
	/**
	 * Constant for value 'notForwarded'
	 * @return string 'notForwarded'
	 */
	const VALUE_NOTFORWARDED = 'notForwarded';
	/**
	 * Constant for value 'hasAttachment'
	 * @return string 'hasAttachment'
	 */
	const VALUE_HASATTACHMENT = 'hasAttachment';
	/**
	 * Constant for value 'noAttachment'
	 * @return string 'noAttachment'
	 */
	const VALUE_NOATTACHMENT = 'noAttachment';
	/**
	 * Constant for value 'inAddressBook'
	 * @return string 'inAddressBook'
	 */
	const VALUE_INADDRESSBOOK = 'inAddressBook';
	/**
	 * Constant for value 'notInAddressBook'
	 * @return string 'notInAddressBook'
	 */
	const VALUE_NOTINADDRESSBOOK = 'notInAddressBook';
	/**
	 * Constructor
	 * @return YMailTypeGroupBy
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
		return in_array($_value,array(self::VALUE_READ,self::VALUE_UNREAD,self::VALUE_REPLIED,self::VALUE_NOTREPLIED,self::VALUE_FLAGGED,self::VALUE_UNFLAGGED,self::VALUE_FORWARDED,self::VALUE_NOTFORWARDED,self::VALUE_HASATTACHMENT,self::VALUE_NOATTACHMENT,self::VALUE_INADDRESSBOOK,self::VALUE_NOTINADDRESSBOOK));
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