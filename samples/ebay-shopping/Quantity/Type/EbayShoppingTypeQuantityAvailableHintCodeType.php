<?php
/**
 * Class file for EbayShoppingTypeQuantityAvailableHintCodeType
 * @date 05/07/2012
 */
/**
 * Class EbayShoppingTypeQuantityAvailableHintCodeType
 * @date 05/07/2012
 */
class EbayShoppingTypeQuantityAvailableHintCodeType extends EbayShoppingWsdlClass
{
	/**
	 * Constant for value 'Limited'
	 * Meta informations :
	 * 	- documentation : (out) The message "Limited quantity available" is shown in the web flow (e.g., for a flash sale or a Daily Deal).
	 * @return string 'Limited'
	 */
	const VALUE_LIMITED = 'Limited';
	/**
	 * Constant for value 'MoreThan'
	 * Meta informations :
	 * 	- documentation : (out) The message "More than 10 available" is shown in the web flow. 10 is the value of QuantityThreshold tag based on the seller's preference.
	 * @return string 'MoreThan'
	 */
	const VALUE_MORETHAN = 'MoreThan';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayShoppingTypeQuantityAvailableHintCodeType
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
		return in_array($_value,array(self::VALUE_LIMITED,self::VALUE_MORETHAN,self::VALUE_CUSTOMCODE));
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