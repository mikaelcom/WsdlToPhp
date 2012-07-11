<?php
/**
 * Class file for EbayTradingTypeStoreCategoryUpdateActionCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeStoreCategoryUpdateActionCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeStoreCategoryUpdateActionCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Add'
	 * Meta informations :
	 * 	- documentation : (in) Add the listed categories to the store.
	 * @return string 'Add'
	 */
	const VALUE_ADD = 'Add';
	/**
	 * Constant for value 'Delete'
	 * Meta informations :
	 * 	- documentation : (in) Delete the listed categories from the store.
	 * @return string 'Delete'
	 */
	const VALUE_DELETE = 'Delete';
	/**
	 * Constant for value 'Move'
	 * Meta informations :
	 * 	- documentation : (in) Move the listed categories from one place in the store category structure to another.
	 * @return string 'Move'
	 */
	const VALUE_MOVE = 'Move';
	/**
	 * Constant for value 'Rename'
	 * Meta informations :
	 * 	- documentation : (in) Rename the listed store categories to the names provided.
	 * @return string 'Rename'
	 */
	const VALUE_RENAME = 'Rename';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeStoreCategoryUpdateActionCodeType
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
		return in_array($_value,array(self::VALUE_ADD,self::VALUE_DELETE,self::VALUE_MOVE,self::VALUE_RENAME,self::VALUE_CUSTOMCODE));
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