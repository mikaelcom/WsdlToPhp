<?php
/**
 * Class file for YMailTypeSearchAttachmentType
 * @date 02/07/2012
 */
/**
 * Class YMailTypeSearchAttachmentType
 * @date 02/07/2012
 */
class YMailTypeSearchAttachmentType extends YMailWsdlClass
{
	/**
	 * Constant for value 'ignoreattachments'
	 * @return string 'ignoreattachments'
	 */
	const VALUE_IGNOREATTACHMENTS = 'ignoreattachments';
	/**
	 * Constant for value 'noattachments'
	 * @return string 'noattachments'
	 */
	const VALUE_NOATTACHMENTS = 'noattachments';
	/**
	 * Constant for value 'anyattachments'
	 * @return string 'anyattachments'
	 */
	const VALUE_ANYATTACHMENTS = 'anyattachments';
	/**
	 * Constant for value 'mimetypesattachments'
	 * @return string 'mimetypesattachments'
	 */
	const VALUE_MIMETYPESATTACHMENTS = 'mimetypesattachments';
	/**
	 * Constructor
	 * @return YMailTypeSearchAttachmentType
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
		return in_array($_value,array(self::VALUE_IGNOREATTACHMENTS,self::VALUE_NOATTACHMENTS,self::VALUE_ANYATTACHMENTS,self::VALUE_MIMETYPESATTACHMENTS));
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