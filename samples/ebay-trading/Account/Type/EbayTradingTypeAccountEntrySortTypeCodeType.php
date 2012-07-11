<?php
/**
 * Class file for EbayTradingTypeAccountEntrySortTypeCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeAccountEntrySortTypeCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeAccountEntrySortTypeCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'None'
	 * Meta informations :
	 * 	- documentation : (in) Sort by the AccountEntry.Date value in the response, in ascending order. Same as AccountEntryCreatedTimeAscending.
	 * @return string 'None'
	 */
	const VALUE_NONE = 'None';
	/**
	 * Constant for value 'AccountEntryCreatedTimeAscending'
	 * Meta informations :
	 * 	- documentation : (in) Sort by the AccountEntry.Date value in the response, in ascending order.
	 * @return string 'AccountEntryCreatedTimeAscending'
	 */
	const VALUE_ACCOUNTENTRYCREATEDTIMEASCENDING = 'AccountEntryCreatedTimeAscending';
	/**
	 * Constant for value 'AccountEntryCreatedTimeDescending'
	 * Meta informations :
	 * 	- documentation : (in) Sort by the AccountEntry.Date value in the response, in descending order.
	 * @return string 'AccountEntryCreatedTimeDescending'
	 */
	const VALUE_ACCOUNTENTRYCREATEDTIMEDESCENDING = 'AccountEntryCreatedTimeDescending';
	/**
	 * Constant for value 'AccountEntryItemNumberAscending'
	 * Meta informations :
	 * 	- documentation : (in) Sort by the AccountEntry.ItemID value in the response, in ascending order.
	 * @return string 'AccountEntryItemNumberAscending'
	 */
	const VALUE_ACCOUNTENTRYITEMNUMBERASCENDING = 'AccountEntryItemNumberAscending';
	/**
	 * Constant for value 'AccountEntryItemNumberDescending'
	 * Meta informations :
	 * 	- documentation : (in) Sort by the AccountEntry.ItemID value in the response, in descending order.
	 * @return string 'AccountEntryItemNumberDescending'
	 */
	const VALUE_ACCOUNTENTRYITEMNUMBERDESCENDING = 'AccountEntryItemNumberDescending';
	/**
	 * Constant for value 'AccountEntryFeeTypeAscending'
	 * Meta informations :
	 * 	- documentation : (in) Sort by the value returned in AccountEntry.Description, with entries starting with lowercase letters before entries starting with uppercase letters and each group in alphabetical order.
	 * @return string 'AccountEntryFeeTypeAscending'
	 */
	const VALUE_ACCOUNTENTRYFEETYPEASCENDING = 'AccountEntryFeeTypeAscending';
	/**
	 * Constant for value 'AccountEntryFeeTypeDescending'
	 * Meta informations :
	 * 	- documentation : (in) Sort by the value returned in AccountEntry.Description, with entries starting with uppercase letters before entries starting with lowercase letters and each group in reverse alphabetical order.
	 * @return string 'AccountEntryFeeTypeDescending'
	 */
	const VALUE_ACCOUNTENTRYFEETYPEDESCENDING = 'AccountEntryFeeTypeDescending';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeAccountEntrySortTypeCodeType
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
		return in_array($_value,array(self::VALUE_NONE,self::VALUE_ACCOUNTENTRYCREATEDTIMEASCENDING,self::VALUE_ACCOUNTENTRYCREATEDTIMEDESCENDING,self::VALUE_ACCOUNTENTRYITEMNUMBERASCENDING,self::VALUE_ACCOUNTENTRYITEMNUMBERDESCENDING,self::VALUE_ACCOUNTENTRYFEETYPEASCENDING,self::VALUE_ACCOUNTENTRYFEETYPEDESCENDING,self::VALUE_CUSTOMCODE));
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