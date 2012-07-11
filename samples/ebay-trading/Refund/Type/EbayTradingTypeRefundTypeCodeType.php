<?php
/**
 * Class file for EbayTradingTypeRefundTypeCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeRefundTypeCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeRefundTypeCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Full'
	 * Meta informations :
	 * 	- documentation : The seller has issued a refund for the transaction price that was originally paid to the seller. (The seller's shipping reimbursement is not included if Half.com calculates the refund amount).
	 * @return string 'Full'
	 */
	const VALUE_FULL = 'Full';
	/**
	 * Constant for value 'FullPlusShipping'
	 * Meta informations :
	 * 	- documentation : The seller has issued a refund for the transaction price and shipping reimbursement that was originally paid to the seller. (The buyer's return shipping costs might not be included if Half.com calculates the refund amount.)
	 * @return string 'FullPlusShipping'
	 */
	const VALUE_FULLPLUSSHIPPING = 'FullPlusShipping';
	/**
	 * Constant for value 'CustomOrPartial'
	 * Meta informations :
	 * 	- documentation : The seller has issued a refund amount that is different from the full refund (with or without shipping). If specified, it may be helpful to explain the amount in your note to the buyer.
	 * @return string 'CustomOrPartial'
	 */
	const VALUE_CUSTOMORPARTIAL = 'CustomOrPartial';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeRefundTypeCodeType
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
		return in_array($_value,array(self::VALUE_FULL,self::VALUE_FULLPLUSSHIPPING,self::VALUE_CUSTOMORPARTIAL,self::VALUE_CUSTOMCODE));
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