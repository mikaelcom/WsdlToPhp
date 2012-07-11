<?php
/**
 * Class file for EbayTradingTypeRefundType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeRefundType
 * Documentation : Contains information about a single refund. A refund contains information about the amount refunded for an order line item to a single buyer. <br/><br/> <span class="tablenote"><strong>Note:</strong> Three RefundType fields (RefundFromSeller, RefundTime and TotalRefundToBuyer) are returned (for GetOrders) only if a refund has been issued against a Half.com order line item.</span>
 * @date 04/07/2012
 */
class EbayTradingTypeRefundType extends EbayTradingWsdlClass
{
	/**
	 * The RefundFromSeller
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Total amount refunded by the seller for this order line item.<br/><br/> <span class="tablenote"><strong>Note:</strong> This field is returned (for GetOrders) only if a refund has been issued against a Half.com order line item.</span>
	 * @var EbayTradingTypeAmountType
	 */
	public $RefundFromSeller;
	/**
	 * The TotalRefundToBuyer
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Total amount refunded to the buyer for this order line item.<br/><br/> <span class="tablenote"><strong>Note:</strong> This field is returned (for GetOrders) only if a refund has been issued against a Half.com order line item.</span>
	 * @var EbayTradingTypeAmountType
	 */
	public $TotalRefundToBuyer;
	/**
	 * The RefundTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The date and time at which the refund was issued.<br/><br/> <span class="tablenote"><strong>Note:</strong> This field is returned (for GetOrders) only if a refund has been issued against a Half.com order line item.</span>
	 * @var dateTime
	 */
	public $RefundTime;
	/**
	 * The RefundID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The refund ID for this refund.<br> <br/><br/> <span class="tablenote"><strong>Note:</strong> For eBay orders, Refund containers are only returned for DE/AT orders subject to the new eBay payment process.</span>
	 * @var string
	 */
	public $RefundID;
	/**
	 * The RefundTransactionArray
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A container consisting of details about an order line item against which the seller issued a refund.<br/><br/> <span class="tablenote"><strong>Note:</strong> For eBay orders, Refund containers are only returned for DE/AT orders subject to the new eBay payment process.</span>
	 * @var EbayTradingTypeRefundTransactionArrayType
	 */
	public $RefundTransactionArray;
	/**
	 * The RefundAmount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The total amount of the refund requested.<br/><br/> <span class="tablenote"><strong>Note:</strong> For eBay orders, Refund containers are only returned for DE/AT orders subject to the new eBay payment process.</span>
	 * @var EbayTradingTypeAmountType
	 */
	public $RefundAmount;
	/**
	 * The RefundStatus
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A code indicating the status of the refund request.<br/><br/> <span class="tablenote"><strong>Note:</strong> For eBay orders, Refund containers are only returned for DE/AT orders subject to the new eBay payment process.</span>
	 * @var EbayTradingTypeRefundStatusCodeType
	 */
	public $RefundStatus;
	/**
	 * The RefundFailureReason
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This describes the reason why a refund was not issued by the seller.<br/><br/> <span class="tablenote"><strong>Note:</strong> For eBay orders, Refund containers are only returned for DE/AT orders subject to the new eBay payment process.</span>
	 * @var EbayTradingTypeRefundFailureReasonType
	 */
	public $RefundFailureReason;
	/**
	 * The RefundFundingSourceArray
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This container lists the funding sources for the refund.<br/><br/> <span class="tablenote"><strong>Note:</strong> For eBay orders, Refund containers are only returned for DE/AT orders subject to the new eBay payment process.</span>
	 * @var EbayTradingTypeRefundFundingSourceArrayType
	 */
	public $RefundFundingSourceArray;
	/**
	 * The ExternalReferenceID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The unique external reference ID that was passed by the seller when requesting the refund. This ID helps to prevent duplication of refund requests.<br/><br/> <span class="tablenote"><strong>Note:</strong> For eBay orders, Refund containers are only returned for DE/AT orders subject to the new eBay payment process.</span>
	 * @var string
	 */
	public $ExternalReferenceID;
	/**
	 * The RefundRequestedTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The date and time when the refund was requested.<br/><br/> <span class="tablenote"><strong>Note:</strong> For eBay orders, Refund containers are only returned for DE/AT orders subject to the new eBay payment process.</span>
	 * @var dateTime
	 */
	public $RefundRequestedTime;
	/**
	 * The RefundCompletionTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The date and time that the refund was completed.<br/><br/> <span class="tablenote"><strong>Note:</strong> For eBay orders, Refund containers are only returned for DE/AT orders subject to the new eBay payment process.</span>
	 * @var dateTime
	 */
	public $RefundCompletionTime;
	/**
	 * The EstimatedRefundCompletionTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The estimated date and time that the refund is expected to be completed.<br/><br/> <span class="tablenote"><strong>Note:</strong> For eBay orders, Refund containers are only returned for DE/AT orders subject to the new eBay payment process.</span>
	 * @var dateTime
	 */
	public $EstimatedRefundCompletionTime;
	/**
	 * The SellerNoteToBuyer
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Comments made by the the seller to the buyer.<br/><br/> <span class="tablenote"><strong>Note:</strong> For eBay orders, Refund containers are only returned for DE/AT orders subject to the new eBay payment process.</span>
	 * @var string
	 */
	public $SellerNoteToBuyer;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeAmountType RefundFromSeller
	 * @param EbayTradingTypeAmountType TotalRefundToBuyer
	 * @param dateTime RefundTime
	 * @param string RefundID
	 * @param EbayTradingTypeRefundTransactionArrayType RefundTransactionArray
	 * @param EbayTradingTypeAmountType RefundAmount
	 * @param EbayTradingTypeRefundStatusCodeType RefundStatus
	 * @param EbayTradingTypeRefundFailureReasonType RefundFailureReason
	 * @param EbayTradingTypeRefundFundingSourceArrayType RefundFundingSourceArray
	 * @param string ExternalReferenceID
	 * @param dateTime RefundRequestedTime
	 * @param dateTime RefundCompletionTime
	 * @param dateTime EstimatedRefundCompletionTime
	 * @param string SellerNoteToBuyer
	 * @param DOMDocument any
	 * @return EbayTradingTypeRefundType
	 */
	public function __construct($_RefundFromSeller = null,$_TotalRefundToBuyer = null,$_RefundTime = null,$_RefundID = null,$_RefundTransactionArray = null,$_RefundAmount = null,$_RefundStatus = null,$_RefundFailureReason = null,$_RefundFundingSourceArray = null,$_ExternalReferenceID = null,$_RefundRequestedTime = null,$_RefundCompletionTime = null,$_EstimatedRefundCompletionTime = null,$_SellerNoteToBuyer = null,$_any = null)
	{
		parent::__construct(array('RefundFromSeller'=>$_RefundFromSeller,'TotalRefundToBuyer'=>$_TotalRefundToBuyer,'RefundTime'=>$_RefundTime,'RefundID'=>$_RefundID,'RefundTransactionArray'=>$_RefundTransactionArray,'RefundAmount'=>$_RefundAmount,'RefundStatus'=>$_RefundStatus,'RefundFailureReason'=>$_RefundFailureReason,'RefundFundingSourceArray'=>$_RefundFundingSourceArray,'ExternalReferenceID'=>$_ExternalReferenceID,'RefundRequestedTime'=>$_RefundRequestedTime,'RefundCompletionTime'=>$_RefundCompletionTime,'EstimatedRefundCompletionTime'=>$_EstimatedRefundCompletionTime,'SellerNoteToBuyer'=>$_SellerNoteToBuyer,'any'=>$_any));
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
	 * Set RefundTime
	 * @param dateTime RefundTime
	 * @return dateTime
	 */
	public function setRefundTime($_RefundTime)
	{
		return ($this->RefundTime = $_RefundTime);
	}
	/**
	 * Get RefundTime
	 * @return dateTime
	 */
	public function getRefundTime()
	{
		return $this->RefundTime;
	}
	/**
	 * Set RefundID
	 * @param string RefundID
	 * @return string
	 */
	public function setRefundID($_RefundID)
	{
		return ($this->RefundID = $_RefundID);
	}
	/**
	 * Get RefundID
	 * @return string
	 */
	public function getRefundID()
	{
		return $this->RefundID;
	}
	/**
	 * Set RefundTransactionArray
	 * @param RefundTransactionArrayType RefundTransactionArray
	 * @return RefundTransactionArrayType
	 */
	public function setRefundTransactionArray($_RefundTransactionArray)
	{
		return ($this->RefundTransactionArray = $_RefundTransactionArray);
	}
	/**
	 * Get RefundTransactionArray
	 * @return EbayTradingTypeRefundTransactionArrayType
	 */
	public function getRefundTransactionArray()
	{
		return $this->RefundTransactionArray;
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
	 * Set RefundStatus
	 * @param RefundStatusCodeType RefundStatus
	 * @return RefundStatusCodeType
	 */
	public function setRefundStatus($_RefundStatus)
	{
		return ($this->RefundStatus = EbayTradingTypeRefundStatusCodeType::valueIsValid($_RefundStatus)?$_RefundStatus:null);
	}
	/**
	 * Get RefundStatus
	 * @return EbayTradingTypeRefundStatusCodeType
	 */
	public function getRefundStatus()
	{
		return $this->RefundStatus;
	}
	/**
	 * Set RefundFailureReason
	 * @param RefundFailureReasonType RefundFailureReason
	 * @return RefundFailureReasonType
	 */
	public function setRefundFailureReason($_RefundFailureReason)
	{
		return ($this->RefundFailureReason = $_RefundFailureReason);
	}
	/**
	 * Get RefundFailureReason
	 * @return EbayTradingTypeRefundFailureReasonType
	 */
	public function getRefundFailureReason()
	{
		return $this->RefundFailureReason;
	}
	/**
	 * Set RefundFundingSourceArray
	 * @param RefundFundingSourceArrayType RefundFundingSourceArray
	 * @return RefundFundingSourceArrayType
	 */
	public function setRefundFundingSourceArray($_RefundFundingSourceArray)
	{
		return ($this->RefundFundingSourceArray = $_RefundFundingSourceArray);
	}
	/**
	 * Get RefundFundingSourceArray
	 * @return EbayTradingTypeRefundFundingSourceArrayType
	 */
	public function getRefundFundingSourceArray()
	{
		return $this->RefundFundingSourceArray;
	}
	/**
	 * Set ExternalReferenceID
	 * @param string ExternalReferenceID
	 * @return string
	 */
	public function setExternalReferenceID($_ExternalReferenceID)
	{
		return ($this->ExternalReferenceID = $_ExternalReferenceID);
	}
	/**
	 * Get ExternalReferenceID
	 * @return string
	 */
	public function getExternalReferenceID()
	{
		return $this->ExternalReferenceID;
	}
	/**
	 * Set RefundRequestedTime
	 * @param dateTime RefundRequestedTime
	 * @return dateTime
	 */
	public function setRefundRequestedTime($_RefundRequestedTime)
	{
		return ($this->RefundRequestedTime = $_RefundRequestedTime);
	}
	/**
	 * Get RefundRequestedTime
	 * @return dateTime
	 */
	public function getRefundRequestedTime()
	{
		return $this->RefundRequestedTime;
	}
	/**
	 * Set RefundCompletionTime
	 * @param dateTime RefundCompletionTime
	 * @return dateTime
	 */
	public function setRefundCompletionTime($_RefundCompletionTime)
	{
		return ($this->RefundCompletionTime = $_RefundCompletionTime);
	}
	/**
	 * Get RefundCompletionTime
	 * @return dateTime
	 */
	public function getRefundCompletionTime()
	{
		return $this->RefundCompletionTime;
	}
	/**
	 * Set EstimatedRefundCompletionTime
	 * @param dateTime EstimatedRefundCompletionTime
	 * @return dateTime
	 */
	public function setEstimatedRefundCompletionTime($_EstimatedRefundCompletionTime)
	{
		return ($this->EstimatedRefundCompletionTime = $_EstimatedRefundCompletionTime);
	}
	/**
	 * Get EstimatedRefundCompletionTime
	 * @return dateTime
	 */
	public function getEstimatedRefundCompletionTime()
	{
		return $this->EstimatedRefundCompletionTime;
	}
	/**
	 * Set SellerNoteToBuyer
	 * @param string SellerNoteToBuyer
	 * @return string
	 */
	public function setSellerNoteToBuyer($_SellerNoteToBuyer)
	{
		return ($this->SellerNoteToBuyer = $_SellerNoteToBuyer);
	}
	/**
	 * Get SellerNoteToBuyer
	 * @return string
	 */
	public function getSellerNoteToBuyer()
	{
		return $this->SellerNoteToBuyer;
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