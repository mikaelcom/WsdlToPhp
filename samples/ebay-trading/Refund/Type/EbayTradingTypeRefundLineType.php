<?php
/**
 * Class file for EbayTradingTypeRefundLineType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeRefundLineType
 * Documentation : A code indicating the order line item to which the refund was applied.<br/><br/> <span class="tablenote"> <strong>Note:</strong> The (refund) type value is returned (for GetOrders and other order retrieval calls) in the Sandbox environment beginning in April 2012, and in the Production environment beginning in May 2012. The (refund) type value will be returned in the Sandbox environment only if the seller is using the Order Adjustment API to make issueRefund calls, and this is valid only for transactions that are part of the new eBay Payment Process. To use the Order Adjustment API in the Sandbox, the seller must specify the eBay site version header as 771. </span>
 * @date 04/07/2012
 */
class EbayTradingTypeRefundLineType extends EbayTradingTypeAmountType
{
	/**
	 * The _
	 * @var EbayTradingTypeAmountType
	 */
	public $_;
	/**
	 * The type
	 * Meta informations :
	 * 	- use : required
	 * @var EbayTradingTypeRefundLineTypeCodeType
	 */
	public $type;
	/**
	 * Constructor
	 * @param EbayTradingTypeAmountType _
	 * @param EbayTradingTypeRefundLineTypeCodeType type
	 * @return EbayTradingTypeRefundLineType
	 */
	public function __construct($__ = null,$_type = null)
	{
		EbayTradingWsdlClass::__construct(array('_'=>$__,'type'=>$_type));
	}
	/**
	 * Set _
	 * @param AmountType _
	 * @return AmountType
	 */
	public function set_($__)
	{
		return ($this->_ = $__);
	}
	/**
	 * Get _
	 * @return EbayTradingTypeAmountType
	 */
	public function get_()
	{
		return $this->_;
	}
	/**
	 * Set type
	 * @param RefundLineTypeCodeType type
	 * @return RefundLineTypeCodeType
	 */
	public function setType($_type)
	{
		return ($this->type = EbayTradingTypeRefundLineTypeCodeType::valueIsValid($_type)?$_type:null);
	}
	/**
	 * Get type
	 * @return EbayTradingTypeRefundLineTypeCodeType
	 */
	public function getType()
	{
		return $this->type;
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