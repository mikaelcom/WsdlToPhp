<?php
/**
 * Class file for EbayTradingTypeModifyActionCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeModifyActionCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeModifyActionCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Add'
	 * Meta informations :
	 * 	- documentation : An addition.
	 * @return string 'Add'
	 */
	const VALUE_ADD = 'Add';
	/**
	 * Constant for value 'Delete'
	 * Meta informations :
	 * 	- documentation : A removal.
	 * @return string 'Delete'
	 */
	const VALUE_DELETE = 'Delete';
	/**
	 * Constant for value 'Update'
	 * Meta informations :
	 * 	- documentation : A modification.
	 * @return string 'Update'
	 */
	const VALUE_UPDATE = 'Update';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeModifyActionCodeType
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
		return in_array($_value,array(self::VALUE_ADD,self::VALUE_DELETE,self::VALUE_UPDATE,self::VALUE_CUSTOMCODE));
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