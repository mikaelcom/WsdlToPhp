<?php
/**
 * Class file for EbayTradingTypeDisputeResolutionRecordTypeCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeDisputeResolutionRecordTypeCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeDisputeResolutionRecordTypeCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'StrikeBuyer'
	 * Meta informations :
	 * 	- documentation : The buyer received an Unpaid Item Strike.
	 * @return string 'StrikeBuyer'
	 */
	const VALUE_STRIKEBUYER = 'StrikeBuyer';
	/**
	 * Constant for value 'SuspendBuyer'
	 * Meta informations :
	 * 	- documentation : The buyer is suspended and unable to use the eBay site.
	 * @return string 'SuspendBuyer'
	 */
	const VALUE_SUSPENDBUYER = 'SuspendBuyer';
	/**
	 * Constant for value 'RestrictBuyer'
	 * Meta informations :
	 * 	- documentation : The buyer is restricted and unable to bid or purchase items.
	 * @return string 'RestrictBuyer'
	 */
	const VALUE_RESTRICTBUYER = 'RestrictBuyer';
	/**
	 * Constant for value 'FVFCredit'
	 * Meta informations :
	 * 	- documentation : The seller received a Final Value Fee credit.
	 * @return string 'FVFCredit'
	 */
	const VALUE_FVFCREDIT = 'FVFCredit';
	/**
	 * Constant for value 'InsertionFeeCredit'
	 * Meta informations :
	 * 	- documentation : The seller's listing fee was credited.
	 * @return string 'InsertionFeeCredit'
	 */
	const VALUE_INSERTIONFEECREDIT = 'InsertionFeeCredit';
	/**
	 * Constant for value 'AppealBuyerStrike'
	 * Meta informations :
	 * 	- documentation : The buyer's Unpaid Item Strike was appealed.
	 * @return string 'AppealBuyerStrike'
	 */
	const VALUE_APPEALBUYERSTRIKE = 'AppealBuyerStrike';
	/**
	 * Constant for value 'UnsuspendBuyer'
	 * Meta informations :
	 * 	- documentation : The restriction on the buyer was lifted.
	 * @return string 'UnsuspendBuyer'
	 */
	const VALUE_UNSUSPENDBUYER = 'UnsuspendBuyer';
	/**
	 * Constant for value 'UnrestrictBuyer'
	 * Meta informations :
	 * 	- documentation : The restriction on the buyer was lifted.
	 * @return string 'UnrestrictBuyer'
	 */
	const VALUE_UNRESTRICTBUYER = 'UnrestrictBuyer';
	/**
	 * Constant for value 'ReverseFVFCredit'
	 * Meta informations :
	 * 	- documentation : The seller's Final Value Fee credit was reversed.
	 * @return string 'ReverseFVFCredit'
	 */
	const VALUE_REVERSEFVFCREDIT = 'ReverseFVFCredit';
	/**
	 * Constant for value 'ReverseInsertionFeeCredit'
	 * Meta informations :
	 * 	- documentation : The seller's listing fee was reversed.
	 * @return string 'ReverseInsertionFeeCredit'
	 */
	const VALUE_REVERSEINSERTIONFEECREDIT = 'ReverseInsertionFeeCredit';
	/**
	 * Constant for value 'GenerateCSTicketForSuspend'
	 * Meta informations :
	 * 	- documentation : The buyer is given a ticket.
	 * @return string 'GenerateCSTicketForSuspend'
	 */
	const VALUE_GENERATECSTICKETFORSUSPEND = 'GenerateCSTicketForSuspend';
	/**
	 * Constant for value 'FVFCreditNotGranted'
	 * Meta informations :
	 * 	- documentation : The seller did not receive a Final Value Fee credit.
	 * @return string 'FVFCreditNotGranted'
	 */
	const VALUE_FVFCREDITNOTGRANTED = 'FVFCreditNotGranted';
	/**
	 * Constant for value 'ItemNotReceivedClaimFiled'
	 * Meta informations :
	 * 	- documentation : The buyer did not received the item, and the buyer filed a claim.
	 * @return string 'ItemNotReceivedClaimFiled'
	 */
	const VALUE_ITEMNOTRECEIVEDCLAIMFILED = 'ItemNotReceivedClaimFiled';
	/**
	 * Constant for value 'UnpaidItemRelisted'
	 * Meta informations :
	 * 	- documentation : Reserved for future use.
	 * @return string 'UnpaidItemRelisted'
	 */
	const VALUE_UNPAIDITEMRELISTED = 'UnpaidItemRelisted';
	/**
	 * Constant for value 'UnpaidItemRevised'
	 * Meta informations :
	 * 	- documentation : Reserved for future use.
	 * @return string 'UnpaidItemRevised'
	 */
	const VALUE_UNPAIDITEMREVISED = 'UnpaidItemRevised';
	/**
	 * Constant for value 'FVFOnShippingCredit'
	 * Meta informations :
	 * 	- documentation : Reserved for future use.
	 * @return string 'FVFOnShippingCredit'
	 */
	const VALUE_FVFONSHIPPINGCREDIT = 'FVFOnShippingCredit';
	/**
	 * Constant for value 'FVFOnShippingCreditNotGranted'
	 * Meta informations :
	 * 	- documentation : Reserved for future use.
	 * @return string 'FVFOnShippingCreditNotGranted'
	 */
	const VALUE_FVFONSHIPPINGCREDITNOTGRANTED = 'FVFOnShippingCreditNotGranted';
	/**
	 * Constant for value 'ReverseFVFOnShippingCredit'
	 * Meta informations :
	 * 	- documentation : Reserved for future use.
	 * @return string 'ReverseFVFOnShippingCredit'
	 */
	const VALUE_REVERSEFVFONSHIPPINGCREDIT = 'ReverseFVFOnShippingCredit';
	/**
	 * Constant for value 'FeatureFeeCredit'
	 * Meta informations :
	 * 	- documentation : Credit amount for feature fees.
	 * @return string 'FeatureFeeCredit'
	 */
	const VALUE_FEATUREFEECREDIT = 'FeatureFeeCredit';
	/**
	 * Constant for value 'FeatureFeeNotCredit'
	 * Meta informations :
	 * 	- documentation : Amount not returned or credited for feature fees. Item price.
	 * @return string 'FeatureFeeNotCredit'
	 */
	const VALUE_FEATUREFEENOTCREDIT = 'FeatureFeeNotCredit';
	/**
	 * Constant for value 'ReverseFeatureFeeCredit'
	 * Meta informations :
	 * 	- documentation : Amount reversed on credit card for feature fees.
	 * @return string 'ReverseFeatureFeeCredit'
	 */
	const VALUE_REVERSEFEATUREFEECREDIT = 'ReverseFeatureFeeCredit';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeDisputeResolutionRecordTypeCodeType
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
		return in_array($_value,array(self::VALUE_STRIKEBUYER,self::VALUE_SUSPENDBUYER,self::VALUE_RESTRICTBUYER,self::VALUE_FVFCREDIT,self::VALUE_INSERTIONFEECREDIT,self::VALUE_APPEALBUYERSTRIKE,self::VALUE_UNSUSPENDBUYER,self::VALUE_UNRESTRICTBUYER,self::VALUE_REVERSEFVFCREDIT,self::VALUE_REVERSEINSERTIONFEECREDIT,self::VALUE_GENERATECSTICKETFORSUSPEND,self::VALUE_FVFCREDITNOTGRANTED,self::VALUE_ITEMNOTRECEIVEDCLAIMFILED,self::VALUE_UNPAIDITEMRELISTED,self::VALUE_UNPAIDITEMREVISED,self::VALUE_FVFONSHIPPINGCREDIT,self::VALUE_FVFONSHIPPINGCREDITNOTGRANTED,self::VALUE_REVERSEFVFONSHIPPINGCREDIT,self::VALUE_FEATUREFEECREDIT,self::VALUE_FEATUREFEENOTCREDIT,self::VALUE_REVERSEFEATUREFEECREDIT,self::VALUE_CUSTOMCODE));
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