<?php
/**
 * Class file for EbayTradingTypeIssueRefundResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeIssueRefundResponseType
 * Documentation : Indicates the refund amount that a seller issued to a buyer for a single Half.com order line item.Refunds may only be issued for a specific order line item. Sellers do not have the ability to issue a general refund (not tied to an order line item) to a buyer.
 * @date 04/07/2012
 */
class EbayTradingTypeIssueRefundResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The RefundFromSeller
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Total amount that the seller asked Half.com to refund to a buyer for a Half.com order line item.
	 * @var EbayTradingTypeAmountType
	 */
	public $RefundFromSeller;
	/**
	 * The TotalRefundToBuyer
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Total amount that Half.com refunded to the buyer (which could include the refund amount from the seller plus a refund amount from Half.com).
	 * @var EbayTradingTypeAmountType
	 */
	public $TotalRefundToBuyer;
	/**
	 * Constructor
	 * @param EbayTradingTypeAmountType RefundFromSeller
	 * @param EbayTradingTypeAmountType TotalRefundToBuyer
	 * @return EbayTradingTypeIssueRefundResponseType
	 */
	public function __construct($_RefundFromSeller = null,$_TotalRefundToBuyer = null)
	{
		EbayTradingWsdlClass::__construct(array('RefundFromSeller'=>$_RefundFromSeller,'TotalRefundToBuyer'=>$_TotalRefundToBuyer));
	}
	/**
	 * Set RefundFromSeller
	 * @param AmountType RefundFromSeller
	 * @return AmountType
	 */
	public function setRefundFromSeller($_RefundFromSeller)
	{
		return ($this->RefundFromSeller = $_RefundFromSeller);
	}
	/**
	 * Get RefundFromSeller
	 * @return EbayTradingTypeAmountType
	 */
	public function getRefundFromSeller()
	{
		return $this->RefundFromSeller;
	}
	/**
	 * Set TotalRefundToBuyer
	 * @param AmountType TotalRefundToBuyer
	 * @return AmountType
	 */
	public function setTotalRefundToBuyer($_TotalRefundToBuyer)
	{
		return ($this->TotalRefundToBuyer = $_TotalRefundToBuyer);
	}
	/**
	 * Get TotalRefundToBuyer
	 * @return EbayTradingTypeAmountType
	 */
	public function getTotalRefundToBuyer()
	{
		return $this->TotalRefundToBuyer;
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