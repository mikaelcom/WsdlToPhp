<?php
/**
 * Class file for EbayTradingTypeSetUserNotesActionCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSetUserNotesActionCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeSetUserNotesActionCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'AddOrUpdate'
	 * Meta informations :
	 * 	- documentation : Creates or replaces an item's My eBay notes. Note that if the specified item already has notes in My eBay, the new notes will completely replace the existing notes. They will not be appended.
	 * @return string 'AddOrUpdate'
	 */
	const VALUE_ADDORUPDATE = 'AddOrUpdate';
	/**
	 * Constant for value 'Delete'
	 * Meta informations :
	 * 	- documentation : Deletes any existing My eBay notes for the specified item. Specifying Delete when no notes exist does nothing, but does not return an error.
	 * @return string 'Delete'
	 */
	const VALUE_DELETE = 'Delete';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeSetUserNotesActionCodeType
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
		return in_array($_value,array(self::VALUE_ADDORUPDATE,self::VALUE_DELETE,self::VALUE_CUSTOMCODE));
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