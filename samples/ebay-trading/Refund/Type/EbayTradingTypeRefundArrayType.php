<?php
/**
 * Class file for EbayTradingTypeRefundArrayType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeRefundArrayType
 * Documentation : Contains an array of refunds.
 * @date 04/07/2012
 */
class EbayTradingTypeRefundArrayType extends EbayTradingWsdlClass
{
	/**
	 * The Refund
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Contains information about one refund. Applicable to Half.com (for GetOrders). Applicable to refunds issued with eBay's new Payment Process.<br/><br/> <span class="tablenote"><strong>Note:</strong> Refund containers are returned for eBay's new Payment Process in the Sandbox environment beginning in April 2012, and in the Production environment beginning in May 2012.</span>
	 * @var EbayTradingTypeRefundType
	 */
	public $Refund;
	/**
	 * Constructor
	 * @param EbayTradingTypeRefundType Refund
	 * @return EbayTradingTypeRefundArrayType
	 */
	public function __construct($_Refund = null)
	{
		parent::__construct(array('Refund'=>$_Refund));
	}
	/**
	 * Set Refund
	 * @param RefundType Refund
	 * @return RefundType
	 */
	public function setRefund($_Refund)
	{
		return ($this->Refund = $_Refund);
	}
	/**
	 * Get Refund
	 * @return EbayTradingTypeRefundType
	 */
	public function getRefund()
	{
		return $this->Refund;
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