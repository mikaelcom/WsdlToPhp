<?php
/**
 * Class file for EbayTradingTypeMyMessagesFolderOperationCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeMyMessagesFolderOperationCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeMyMessagesFolderOperationCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Display'
	 * Meta informations :
	 * 	- documentation : If a folder has been removed, restores the specified folder in My Messages. Because you cannot remove the Inbox and Sent folders, they can also not be restored. Requires FolderName as input. <br><br> Use Display to create a new custom folder. If you specify a FolderName that has not be removed, a new My Messages folder is created.
	 * @return string 'Display'
	 */
	const VALUE_DISPLAY = 'Display';
	/**
	 * Constant for value 'Rename'
	 * Meta informations :
	 * 	- documentation : Renames a specified folder. Inbox and Sent folders cannot be renamed. To rename a folder, use FolderID to indicate the folder to rename, and FolderName to indicate the new name.
	 * @return string 'Rename'
	 */
	const VALUE_RENAME = 'Rename';
	/**
	 * Constant for value 'Remove'
	 * Meta informations :
	 * 	- documentation : Removes a specified folder. Inbox and Sent folders cannot be removed. Removing a folder that is not empty returns an error. Requires FolderID as input.
	 * @return string 'Remove'
	 */
	const VALUE_REMOVE = 'Remove';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for future or internal use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeMyMessagesFolderOperationCodeType
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
		return in_array($_value,array(self::VALUE_DISPLAY,self::VALUE_RENAME,self::VALUE_REMOVE,self::VALUE_CUSTOMCODE));
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