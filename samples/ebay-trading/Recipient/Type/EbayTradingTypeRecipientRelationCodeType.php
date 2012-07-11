<?php
/**
 * Class file for EbayTradingTypeRecipientRelationCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeRecipientRelationCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeRecipientRelationCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value '1'
	 * Meta informations :
	 * 	- documentation : Indicates that the recipient has one or more best offers on the item; the relationship is "best offer buyer."
	 * @return string '1'
	 */
	const VALUE_1 = '1';
	/**
	 * Constant for value '2'
	 * Meta informations :
	 * 	- documentation : Indicates that the recipient has asked the seller a question about the item; the relationship is "a member with an ASQ question."
	 * @return string '2'
	 */
	const VALUE_2 = '2';
	/**
	 * Constant for value '3'
	 * Meta informations :
	 * 	- documentation : Indicates that the recipient has a postal code; the relationship is "a member with a postal code."
	 * @return string '3'
	 */
	const VALUE_3 = '3';
	/**
	 * Constant for value '4'
	 * @return string '4'
	 */
	const VALUE_4 = '4';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeRecipientRelationCodeType
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
		return in_array($_value,array(self::VALUE_1,self::VALUE_2,self::VALUE_3,self::VALUE_4,self::VALUE_CUSTOMCODE));
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