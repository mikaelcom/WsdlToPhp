<?php
/**
 * Class file for EbayTradingTypeUnpaidItemStatusTypeCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeUnpaidItemStatusTypeCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeUnpaidItemStatusTypeCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'FinalValueFeeDenied'
	 * Meta informations :
	 * 	- documentation : Final value fee denied.
	 * @return string 'FinalValueFeeDenied'
	 */
	const VALUE_FINALVALUEFEEDENIED = 'FinalValueFeeDenied';
	/**
	 * Constant for value 'FinalValueFeeCredited'
	 * Meta informations :
	 * 	- documentation : Final value fee credited.
	 * @return string 'FinalValueFeeCredited'
	 */
	const VALUE_FINALVALUEFEECREDITED = 'FinalValueFeeCredited';
	/**
	 * Constant for value 'FinalValueFeeEligible'
	 * Meta informations :
	 * 	- documentation : Eligible for final value fee.
	 * @return string 'FinalValueFeeEligible'
	 */
	const VALUE_FINALVALUEFEEELIGIBLE = 'FinalValueFeeEligible';
	/**
	 * Constant for value 'AwaitingSellerResponse'
	 * Meta informations :
	 * 	- documentation : Awaiting seller response.
	 * @return string 'AwaitingSellerResponse'
	 */
	const VALUE_AWAITINGSELLERRESPONSE = 'AwaitingSellerResponse';
	/**
	 * Constant for value 'AwaitingBuyerResponse'
	 * Meta informations :
	 * 	- documentation : Awaiting buyer response.
	 * @return string 'AwaitingBuyerResponse'
	 */
	const VALUE_AWAITINGBUYERRESPONSE = 'AwaitingBuyerResponse';
	/**
	 * Constant for value 'UnpaidItemFiled'
	 * Meta informations :
	 * 	- documentation : Unpaid item filed.
	 * @return string 'UnpaidItemFiled'
	 */
	const VALUE_UNPAIDITEMFILED = 'UnpaidItemFiled';
	/**
	 * Constant for value 'UnpaidItemEligible'
	 * Meta informations :
	 * 	- documentation : Eligible for unpaid item.
	 * @return string 'UnpaidItemEligible'
	 */
	const VALUE_UNPAIDITEMELIGIBLE = 'UnpaidItemEligible';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeUnpaidItemStatusTypeCodeType
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
		return in_array($_value,array(self::VALUE_FINALVALUEFEEDENIED,self::VALUE_FINALVALUEFEECREDITED,self::VALUE_FINALVALUEFEEELIGIBLE,self::VALUE_AWAITINGSELLERRESPONSE,self::VALUE_AWAITINGBUYERRESPONSE,self::VALUE_UNPAIDITEMFILED,self::VALUE_UNPAIDITEMELIGIBLE,self::VALUE_CUSTOMCODE));
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