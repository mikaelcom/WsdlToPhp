<?php
/**
 * Class file for EbayShoppingTypeHalfItemConditionCodeType
 * @date 05/07/2012
 */
/**
 * Class EbayShoppingTypeHalfItemConditionCodeType
 * @date 05/07/2012
 */
class EbayShoppingTypeHalfItemConditionCodeType extends EbayShoppingWsdlClass
{
	/**
	 * Constant for value 'BrandNew'
	 * Meta informations :
	 * 	- documentation : New, unread, unused and in perfect condition.
	 * @return string 'BrandNew'
	 */
	const VALUE_BRANDNEW = 'BrandNew';
	/**
	 * Constant for value 'LikeNew'
	 * Meta informations :
	 * 	- documentation : Item still in original packaging, no wear and tear, all facets of the product are intact. (Could easily be mistaken for brand new.)
	 * @return string 'LikeNew'
	 */
	const VALUE_LIKENEW = 'LikeNew';
	/**
	 * Constant for value 'VeryGood'
	 * Meta informations :
	 * 	- documentation : Doesn't look brand new but has no easily noticeable damage and very minimal wear and tear. (You would give it to a good friend as a gift)
	 * @return string 'VeryGood'
	 */
	const VALUE_VERYGOOD = 'VeryGood';
	/**
	 * Constant for value 'Good'
	 * Meta informations :
	 * 	- documentation : Very minimal damage to the item and still includes all accessories such as dust jackets, liner notes, and cases. (You would use it yourself, but wouldn't necessarily give it as a gift)
	 * @return string 'Good'
	 */
	const VALUE_GOOD = 'Good';
	/**
	 * Constant for value 'Acceptable'
	 * Meta informations :
	 * 	- documentation : Some damage to the item but integrity still intact. May be missing an accessory. (Item beaten up a bit but it works)
	 * @return string 'Acceptable'
	 */
	const VALUE_ACCEPTABLE = 'Acceptable';
	/**
	 * Constant for value 'Used'
	 * Meta informations :
	 * 	- documentation : Some damage to the item and visibly used.
	 * @return string 'Used'
	 */
	const VALUE_USED = 'Used';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayShoppingTypeHalfItemConditionCodeType
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
		return in_array($_value,array(self::VALUE_BRANDNEW,self::VALUE_LIKENEW,self::VALUE_VERYGOOD,self::VALUE_GOOD,self::VALUE_ACCEPTABLE,self::VALUE_USED,self::VALUE_CUSTOMCODE));
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