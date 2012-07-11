<?php
/**
 * Class file for EbayTradingTypeRefundFundingSourceType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeRefundFundingSourceType
 * Documentation : Contains information about the funding source for the refund.
 * @date 04/07/2012
 */
class EbayTradingTypeRefundFundingSourceType extends EbayTradingWsdlClass
{
	/**
	 * The RefundingSourceType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The source from which the refund was made.<br/><br/> <span class="tablenote"> <strong>Note:</strong> RefundFundingSource elements are returned (for GetOrders and other order retrieval calls) for DE/AT orders subject to the new eBay payment process. </span>
	 * @var EbayTradingTypeRefundingSourceTypeCodeType
	 */
	public $RefundingSourceType;
	/**
	 * The AccountNumber
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The account number of the funding source.<br/><br/> <span class="tablenote"> <strong>Note:</strong> RefundFundingSource elements are returned (for GetOrders and other order retrieval calls) for DE/AT orders subject to the new eBay payment process. </span>
	 * @var string
	 */
	public $AccountNumber;
	/**
	 * The RefundAmount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The amount of the refund.<br/><br/> <span class="tablenote"> <strong>Note:</strong> RefundFundingSource elements are returned (for GetOrders and other order retrieval calls) for DE/AT orders subject to the new eBay payment process. </span>
	 * @var EbayTradingTypeAmountType
	 */
	public $RefundAmount;
	/**
	 * The SellerExternalTransactionID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The external transaction ID of the seller's account.<br/><br/> <span class="tablenote"> <strong>Note:</strong> RefundFundingSource elements are returned (for GetOrders and other order retrieval calls) for DE/AT orders subject to the new eBay payment process. </span>
	 * @var string
	 */
	public $SellerExternalTransactionID;
	/**
	 * The BuyerExternalTransactionID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The external transaction ID of the buyer's account.<br/><br/> <span class="tablenote"> <strong>Note:</strong> RefundFundingSource elements are returned (for GetOrders and other order retrieval calls) for DE/AT orders subject to the new eBay payment process. </span>
	 * @var string
	 */
	public $BuyerExternalTransactionID;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeRefundingSourceTypeCodeType RefundingSourceType
	 * @param string AccountNumber
	 * @param EbayTradingTypeAmountType RefundAmount
	 * @param string SellerExternalTransactionID
	 * @param string BuyerExternalTransactionID
	 * @param DOMDocument any
	 * @return EbayTradingTypeRefundFundingSourceType
	 */
	public function __construct($_RefundingSourceType = null,$_AccountNumber = null,$_RefundAmount = null,$_SellerExternalTransactionID = null,$_BuyerExternalTransactionID = null,$_any = null)
	{
		parent::__construct(array('RefundingSourceType'=>$_RefundingSourceType,'AccountNumber'=>$_AccountNumber,'RefundAmount'=>$_RefundAmount,'SellerExternalTransactionID'=>$_SellerExternalTransactionID,'BuyerExternalTransactionID'=>$_BuyerExternalTransactionID,'any'=>$_any));
	}
	/**
	 * Set RefundingSourceType
	 * @param RefundingSourceTypeCodeType RefundingSourceType
	 * @return RefundingSourceTypeCodeType
	 */
	public function setRefundingSourceType($_RefundingSourceType)
	{
		return ($this->RefundingSourceType = EbayTradingTypeRefundingSourceTypeCodeType::valueIsValid($_RefundingSourceType)?$_RefundingSourceType:null);
	}
	/**
	 * Get RefundingSourceType
	 * @return EbayTradingTypeRefundingSourceTypeCodeType
	 */
	public function getRefundingSourceType()
	{
		return $this->RefundingSourceType;
	}
	/**
	 * Set AccountNumber
	 * @param string AccountNumber
	 * @return string
	 */
	public function setAccountNumber($_AccountNumber)
	{
		return ($this->AccountNumber = $_AccountNumber);
	}
	/**
	 * Get AccountNumber
	 * @return string
	 */
	public function getAccountNumber()
	{
		return $this->AccountNumber;
	}
	/**
	 * Set RefundAmount
	 * @param AmountType RefundAmount
	 * @return AmountType
	 */
	public function setRefundAmount($_RefundAmount)
	{
		return ($this->RefundAmount = $_RefundAmount);
	}
	/**
	 * Get RefundAmount
	 * @return EbayTradingTypeAmountType
	 */
	public function getRefundAmount()
	{
		return $this->RefundAmount;
	}
	/**
	 * Set SellerExternalTransactionID
	 * @param string SellerExternalTransactionID
	 * @return string
	 */
	public function setSellerExternalTransactionID($_SellerExternalTransactionID)
	{
		return ($this->SellerExternalTransactionID = $_SellerExternalTransactionID);
	}
	/**
	 * Get SellerExternalTransactionID
	 * @return string
	 */
	public function getSellerExternalTransactionID()
	{
		return $this->SellerExternalTransactionID;
	}
	/**
	 * Set BuyerExternalTransactionID
	 * @param string BuyerExternalTransactionID
	 * @return string
	 */
	public function setBuyerExternalTransactionID($_BuyerExternalTransactionID)
	{
		return ($this->BuyerExternalTransactionID = $_BuyerExternalTransactionID);
	}
	/**
	 * Get BuyerExternalTransactionID
	 * @return string
	 */
	public function getBuyerExternalTransactionID()
	{
		return $this->BuyerExternalTransactionID;
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