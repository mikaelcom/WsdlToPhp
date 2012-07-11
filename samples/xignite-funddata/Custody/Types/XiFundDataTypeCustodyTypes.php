<?php
/**
 * Class file for XiFundDataTypeCustodyTypes
 * @date 08/07/2012
 */
/**
 * Class XiFundDataTypeCustodyTypes
 * @date 08/07/2012
 */
class XiFundDataTypeCustodyTypes extends XiFundDataWsdlClass
{
	/**
	 * Constant for value 'Bank'
	 * @return string 'Bank'
	 */
	const VALUE_BANK = 'Bank';
	/**
	 * Constant for value 'MemberNationalSecuritiesExchange'
	 * @return string 'MemberNationalSecuritiesExchange'
	 */
	const VALUE_MEMBERNATIONALSECURITIESEXCHANGE = 'MemberNationalSecuritiesExchange';
	/**
	 * Constant for value 'Self'
	 * @return string 'Self'
	 */
	const VALUE_SELF = 'Self';
	/**
	 * Constant for value 'Foreign'
	 * @return string 'Foreign'
	 */
	const VALUE_FOREIGN = 'Foreign';
	/**
	 * Constant for value 'InsuranceCompanySponsor'
	 * @return string 'InsuranceCompanySponsor'
	 */
	const VALUE_INSURANCECOMPANYSPONSOR = 'InsuranceCompanySponsor';
	/**
	 * Constant for value 'Other'
	 * @return string 'Other'
	 */
	const VALUE_OTHER = 'Other';
	/**
	 * Constructor
	 * @return XiFundDataTypeCustodyTypes
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
		return in_array($_value,array(self::VALUE_BANK,self::VALUE_MEMBERNATIONALSECURITIESEXCHANGE,self::VALUE_SELF,self::VALUE_FOREIGN,self::VALUE_INSURANCECOMPANYSPONSOR,self::VALUE_OTHER));
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