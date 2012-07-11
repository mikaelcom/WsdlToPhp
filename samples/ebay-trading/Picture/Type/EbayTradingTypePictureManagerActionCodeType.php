<?php
/**
 * Class file for EbayTradingTypePictureManagerActionCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypePictureManagerActionCodeType
 * @date 04/07/2012
 */
class EbayTradingTypePictureManagerActionCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Add'
	 * Meta informations :
	 * 	- documentation : (in) Adds a folder or setting to the account.
	 * @return string 'Add'
	 */
	const VALUE_ADD = 'Add';
	/**
	 * Constant for value 'Delete'
	 * Meta informations :
	 * 	- documentation : (in) Deletes a folder or setting from the account.
	 * @return string 'Delete'
	 */
	const VALUE_DELETE = 'Delete';
	/**
	 * Constant for value 'Rename'
	 * Meta informations :
	 * 	- documentation : (in) Renames a folder or picture.
	 * @return string 'Rename'
	 */
	const VALUE_RENAME = 'Rename';
	/**
	 * Constant for value 'Move'
	 * Meta informations :
	 * 	- documentation : (in) Moves a picture to the user's default folder in the default album. If the picture is already there, then no action occurs.
	 * @return string 'Move'
	 */
	const VALUE_MOVE = 'Move';
	/**
	 * Constant for value 'Change'
	 * Meta informations :
	 * 	- documentation : (in) Changes a subscription level.
	 * @return string 'Change'
	 */
	const VALUE_CHANGE = 'Change';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypePictureManagerActionCodeType
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
		return in_array($_value,array(self::VALUE_ADD,self::VALUE_DELETE,self::VALUE_RENAME,self::VALUE_MOVE,self::VALUE_CHANGE,self::VALUE_CUSTOMCODE));
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