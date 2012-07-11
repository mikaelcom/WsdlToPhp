<?php
/**
 * Class file for EbayTradingTypeRefundTransactionArrayType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeRefundTransactionArrayType
 * Documentation : A container consisting of one or more RefundTransaction containers.
 * @date 04/07/2012
 */
class EbayTradingTypeRefundTransactionArrayType extends EbayTradingWsdlClass
{
	/**
	 * The RefundTransaction
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : A container consisting of details about an order line item against which the seller issued a refund.<br/><br/> <span class="tablenote"> <strong>Note:</strong> RefundTransaction containers are returned (for GetOrders and other order retrieval calls) if a refund was issued from the seller to the buyer for a DE/AT order subject to the new eBay payment process. </span>
	 * @var EbayTradingTypeRefundTransactionType
	 */
	public $RefundTransaction;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeRefundTransactionType RefundTransaction
	 * @param DOMDocument any
	 * @return EbayTradingTypeRefundTransactionArrayType
	 */
	public function __construct($_RefundTransaction = null,$_any = null)
	{
		parent::__construct(array('RefundTransaction'=>$_RefundTransaction,'any'=>$_any));
	}
	/**
	 * Set RefundTransaction
	 * @param RefundTransactionType RefundTransaction
	 * @return RefundTransactionType
	 */
	public function setRefundTransaction($_RefundTransaction)
	{
		return ($this->RefundTransaction = $_RefundTransaction);
	}
	/**
	 * Get RefundTransaction
	 * @return EbayTradingTypeRefundTransactionType
	 */
	public function getRefundTransaction()
	{
		return $this->RefundTransaction;
	}
	/**
	 * Set any
	 * @param DOMDocument any
	 * @return DOMDocument
	 */
	public function setAny($_any)
	{
		return ($this->any = $_any);
	}
	/**
	 * Get any
	 * @return DOMDocument
	 */
	public function getAny()
	{
		if(!($this->any instanceof DOMDocument))
		{
			$dom = new DOMDocument('1.0','UTF-8');
			$dom->formatOutput = true;
			$dom->loadXML($this->any);
			$this->setAny($dom);
		}
		return $this->any;
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