<?php
/**
 * Class file for EbayTradingTypeRemindersType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeRemindersType
 * Documentation : Specifies the type of reminders for which you want information.
 * @date 04/07/2012
 */
class EbayTradingTypeRemindersType extends EbayTradingWsdlClass
{
	/**
	 * The PaymentToSendCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The number of reminders requesting that the buyer send payment.
	 * @var int
	 */
	public $PaymentToSendCount;
	/**
	 * The FeedbackToReceiveCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The number of reminders that feedback has not yet been received by the buyer or seller.
	 * @var int
	 */
	public $FeedbackToReceiveCount;
	/**
	 * The FeedbackToSendCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The number of reminders that feedback has not yet been sent by the buyer or seller.
	 * @var int
	 */
	public $FeedbackToSendCount;
	/**
	 * The OutbidCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The number of reminders advising the buyer that the buyer has been outbid.
	 * @var int
	 */
	public $OutbidCount;
	/**
	 * The PaymentToReceiveCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The number of reminders that the seller has not yet received a payment.
	 * @var int
	 */
	public $PaymentToReceiveCount;
	/**
	 * The SecondChanceOfferCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The number of reminders requesting that the seller review second chance offers.
	 * @var int
	 */
	public $SecondChanceOfferCount;
	/**
	 * The ShippingNeededCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The number of reminders advising the seller that shipping is needed.
	 * @var int
	 */
	public $ShippingNeededCount;
	/**
	 * The RelistingNeededCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The number of reminders advising the seller that relisting is needed.
	 * @var int
	 */
	public $RelistingNeededCount;
	/**
	 * The TotalNewLeadsCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The number of new leads the seller has recieved.
	 * @var int
	 */
	public $TotalNewLeadsCount;
	/**
	 * The DocsForCCProcessingToSendCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The number of reminders advising the buyer to send documents for credit card processing.
	 * @var int
	 */
	public $DocsForCCProcessingToSendCount;
	/**
	 * The RTEToProcessCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The number of reminders requesting the buyer to process request time extension submitted by the seller.
	 * @var int
	 */
	public $RTEToProcessCount;
	/**
	 * The ItemReceiptToConfirmCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The number of reminders requesting the Buyer to confirm item receipt to seller.
	 * @var int
	 */
	public $ItemReceiptToConfirmCount;
	/**
	 * The RefundOnHoldCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The number of reminders to the buyer on refund on hold.
	 * @var int
	 */
	public $RefundOnHoldCount;
	/**
	 * The RefundCancelledCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The number of reminders to the buyer on refund cancelled.
	 * @var int
	 */
	public $RefundCancelledCount;
	/**
	 * The ShippingDetailsToBeProvidedCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The number of reminders requesting the seller to provide shipping details
	 * @var int
	 */
	public $ShippingDetailsToBeProvidedCount;
	/**
	 * The ItemReceiptConfirmationToReceiveCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The number of reminders to the seller on item receipt confirmation pending from buyer
	 * @var int
	 */
	public $ItemReceiptConfirmationToReceiveCount;
	/**
	 * The RefundInitiatedCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The number of reminders to the seller on refunds initiated
	 * @var int
	 */
	public $RefundInitiatedCount;
	/**
	 * The PendingRTERequestCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The number of reminders to the seller on pending shipping time extension requests with the buyer
	 * @var int
	 */
	public $PendingRTERequestCount;
	/**
	 * The DeclinedRTERequestCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The number of reminders to the seller on declined shipping time extension requests by the buyer
	 * @var int
	 */
	public $DeclinedRTERequestCount;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param int PaymentToSendCount
	 * @param int FeedbackToReceiveCount
	 * @param int FeedbackToSendCount
	 * @param int OutbidCount
	 * @param int PaymentToReceiveCount
	 * @param int SecondChanceOfferCount
	 * @param int ShippingNeededCount
	 * @param int RelistingNeededCount
	 * @param int TotalNewLeadsCount
	 * @param int DocsForCCProcessingToSendCount
	 * @param int RTEToProcessCount
	 * @param int ItemReceiptToConfirmCount
	 * @param int RefundOnHoldCount
	 * @param int RefundCancelledCount
	 * @param int ShippingDetailsToBeProvidedCount
	 * @param int ItemReceiptConfirmationToReceiveCount
	 * @param int RefundInitiatedCount
	 * @param int PendingRTERequestCount
	 * @param int DeclinedRTERequestCount
	 * @param DOMDocument any
	 * @return EbayTradingTypeRemindersType
	 */
	public function __construct($_PaymentToSendCount = null,$_FeedbackToReceiveCount = null,$_FeedbackToSendCount = null,$_OutbidCount = null,$_PaymentToReceiveCount = null,$_SecondChanceOfferCount = null,$_ShippingNeededCount = null,$_RelistingNeededCount = null,$_TotalNewLeadsCount = null,$_DocsForCCProcessingToSendCount = null,$_RTEToProcessCount = null,$_ItemReceiptToConfirmCount = null,$_RefundOnHoldCount = null,$_RefundCancelledCount = null,$_ShippingDetailsToBeProvidedCount = null,$_ItemReceiptConfirmationToReceiveCount = null,$_RefundInitiatedCount = null,$_PendingRTERequestCount = null,$_DeclinedRTERequestCount = null,$_any = null)
	{
		parent::__construct(array('PaymentToSendCount'=>$_PaymentToSendCount,'FeedbackToReceiveCount'=>$_FeedbackToReceiveCount,'FeedbackToSendCount'=>$_FeedbackToSendCount,'OutbidCount'=>$_OutbidCount,'PaymentToReceiveCount'=>$_PaymentToReceiveCount,'SecondChanceOfferCount'=>$_SecondChanceOfferCount,'ShippingNeededCount'=>$_ShippingNeededCount,'RelistingNeededCount'=>$_RelistingNeededCount,'TotalNewLeadsCount'=>$_TotalNewLeadsCount,'DocsForCCProcessingToSendCount'=>$_DocsForCCProcessingToSendCount,'RTEToProcessCount'=>$_RTEToProcessCount,'ItemReceiptToConfirmCount'=>$_ItemReceiptToConfirmCount,'RefundOnHoldCount'=>$_RefundOnHoldCount,'RefundCancelledCount'=>$_RefundCancelledCount,'ShippingDetailsToBeProvidedCount'=>$_ShippingDetailsToBeProvidedCount,'ItemReceiptConfirmationToReceiveCount'=>$_ItemReceiptConfirmationToReceiveCount,'RefundInitiatedCount'=>$_RefundInitiatedCount,'PendingRTERequestCount'=>$_PendingRTERequestCount,'DeclinedRTERequestCount'=>$_DeclinedRTERequestCount,'any'=>$_any));
	}
	/**
	 * Set PaymentToSendCount
	 * @param int PaymentToSendCount
	 * @return int
	 */
	public function setPaymentToSendCount($_PaymentToSendCount)
	{
		return ($this->PaymentToSendCount = $_PaymentToSendCount);
	}
	/**
	 * Get PaymentToSendCount
	 * @return int
	 */
	public function getPaymentToSendCount()
	{
		return $this->PaymentToSendCount;
	}
	/**
	 * Set FeedbackToReceiveCount
	 * @param int FeedbackToReceiveCount
	 * @return int
	 */
	public function setFeedbackToReceiveCount($_FeedbackToReceiveCount)
	{
		return ($this->FeedbackToReceiveCount = $_FeedbackToReceiveCount);
	}
	/**
	 * Get FeedbackToReceiveCount
	 * @return int
	 */
	public function getFeedbackToReceiveCount()
	{
		return $this->FeedbackToReceiveCount;
	}
	/**
	 * Set FeedbackToSendCount
	 * @param int FeedbackToSendCount
	 * @return int
	 */
	public function setFeedbackToSendCount($_FeedbackToSendCount)
	{
		return ($this->FeedbackToSendCount = $_FeedbackToSendCount);
	}
	/**
	 * Get FeedbackToSendCount
	 * @return int
	 */
	public function getFeedbackToSendCount()
	{
		return $this->FeedbackToSendCount;
	}
	/**
	 * Set OutbidCount
	 * @param int OutbidCount
	 * @return int
	 */
	public function setOutbidCount($_OutbidCount)
	{
		return ($this->OutbidCount = $_OutbidCount);
	}
	/**
	 * Get OutbidCount
	 * @return int
	 */
	public function getOutbidCount()
	{
		return $this->OutbidCount;
	}
	/**
	 * Set PaymentToReceiveCount
	 * @param int PaymentToReceiveCount
	 * @return int
	 */
	public function setPaymentToReceiveCount($_PaymentToReceiveCount)
	{
		return ($this->PaymentToReceiveCount = $_PaymentToReceiveCount);
	}
	/**
	 * Get PaymentToReceiveCount
	 * @return int
	 */
	public function getPaymentToReceiveCount()
	{
		return $this->PaymentToReceiveCount;
	}
	/**
	 * Set SecondChanceOfferCount
	 * @param int SecondChanceOfferCount
	 * @return int
	 */
	public function setSecondChanceOfferCount($_SecondChanceOfferCount)
	{
		return ($this->SecondChanceOfferCount = $_SecondChanceOfferCount);
	}
	/**
	 * Get SecondChanceOfferCount
	 * @return int
	 */
	public function getSecondChanceOfferCount()
	{
		return $this->SecondChanceOfferCount;
	}
	/**
	 * Set ShippingNeededCount
	 * @param int ShippingNeededCount
	 * @return int
	 */
	public function setShippingNeededCount($_ShippingNeededCount)
	{
		return ($this->ShippingNeededCount = $_ShippingNeededCount);
	}
	/**
	 * Get ShippingNeededCount
	 * @return int
	 */
	public function getShippingNeededCount()
	{
		return $this->ShippingNeededCount;
	}
	/**
	 * Set RelistingNeededCount
	 * @param int RelistingNeededCount
	 * @return int
	 */
	public function setRelistingNeededCount($_RelistingNeededCount)
	{
		return ($this->RelistingNeededCount = $_RelistingNeededCount);
	}
	/**
	 * Get RelistingNeededCount
	 * @return int
	 */
	public function getRelistingNeededCount()
	{
		return $this->RelistingNeededCount;
	}
	/**
	 * Set TotalNewLeadsCount
	 * @param int TotalNewLeadsCount
	 * @return int
	 */
	public function setTotalNewLeadsCount($_TotalNewLeadsCount)
	{
		return ($this->TotalNewLeadsCount = $_TotalNewLeadsCount);
	}
	/**
	 * Get TotalNewLeadsCount
	 * @return int
	 */
	public function getTotalNewLeadsCount()
	{
		return $this->TotalNewLeadsCount;
	}
	/**
	 * Set DocsForCCProcessingToSendCount
	 * @param int DocsForCCProcessingToSendCount
	 * @return int
	 */
	public function setDocsForCCProcessingToSendCount($_DocsForCCProcessingToSendCount)
	{
		return ($this->DocsForCCProcessingToSendCount = $_DocsForCCProcessingToSendCount);
	}
	/**
	 * Get DocsForCCProcessingToSendCount
	 * @return int
	 */
	public function getDocsForCCProcessingToSendCount()
	{
		return $this->DocsForCCProcessingToSendCount;
	}
	/**
	 * Set RTEToProcessCount
	 * @param int RTEToProcessCount
	 * @return int
	 */
	public function setRTEToProcessCount($_RTEToProcessCount)
	{
		return ($this->RTEToProcessCount = $_RTEToProcessCount);
	}
	/**
	 * Get RTEToProcessCount
	 * @return int
	 */
	public function getRTEToProcessCount()
	{
		return $this->RTEToProcessCount;
	}
	/**
	 * Set ItemReceiptToConfirmCount
	 * @param int ItemReceiptToConfirmCount
	 * @return int
	 */
	public function setItemReceiptToConfirmCount($_ItemReceiptToConfirmCount)
	{
		return ($this->ItemReceiptToConfirmCount = $_ItemReceiptToConfirmCount);
	}
	/**
	 * Get ItemReceiptToConfirmCount
	 * @return int
	 */
	public function getItemReceiptToConfirmCount()
	{
		return $this->ItemReceiptToConfirmCount;
	}
	/**
	 * Set RefundOnHoldCount
	 * @param int RefundOnHoldCount
	 * @return int
	 */
	public function setRefundOnHoldCount($_RefundOnHoldCount)
	{
		return ($this->RefundOnHoldCount = $_RefundOnHoldCount);
	}
	/**
	 * Get RefundOnHoldCount
	 * @return int
	 */
	public function getRefundOnHoldCount()
	{
		return $this->RefundOnHoldCount;
	}
	/**
	 * Set RefundCancelledCount
	 * @param int RefundCancelledCount
	 * @return int
	 */
	public function setRefundCancelledCount($_RefundCancelledCount)
	{
		return ($this->RefundCancelledCount = $_RefundCancelledCount);
	}
	/**
	 * Get RefundCancelledCount
	 * @return int
	 */
	public function getRefundCancelledCount()
	{
		return $this->RefundCancelledCount;
	}
	/**
	 * Set ShippingDetailsToBeProvidedCount
	 * @param int ShippingDetailsToBeProvidedCount
	 * @return int
	 */
	public function setShippingDetailsToBeProvidedCount($_ShippingDetailsToBeProvidedCount)
	{
		return ($this->ShippingDetailsToBeProvidedCount = $_ShippingDetailsToBeProvidedCount);
	}
	/**
	 * Get ShippingDetailsToBeProvidedCount
	 * @return int
	 */
	public function getShippingDetailsToBeProvidedCount()
	{
		return $this->ShippingDetailsToBeProvidedCount;
	}
	/**
	 * Set ItemReceiptConfirmationToReceiveCount
	 * @param int ItemReceiptConfirmationToReceiveCount
	 * @return int
	 */
	public function setItemReceiptConfirmationToReceiveCount($_ItemReceiptConfirmationToReceiveCount)
	{
		return ($this->ItemReceiptConfirmationToReceiveCount = $_ItemReceiptConfirmationToReceiveCount);
	}
	/**
	 * Get ItemReceiptConfirmationToReceiveCount
	 * @return int
	 */
	public function getItemReceiptConfirmationToReceiveCount()
	{
		return $this->ItemReceiptConfirmationToReceiveCount;
	}
	/**
	 * Set RefundInitiatedCount
	 * @param int RefundInitiatedCount
	 * @return int
	 */
	public function setRefundInitiatedCount($_RefundInitiatedCount)
	{
		return ($this->RefundInitiatedCount = $_RefundInitiatedCount);
	}
	/**
	 * Get RefundInitiatedCount
	 * @return int
	 */
	public function getRefundInitiatedCount()
	{
		return $this->RefundInitiatedCount;
	}
	/**
	 * Set PendingRTERequestCount
	 * @param int PendingRTERequestCount
	 * @return int
	 */
	public function setPendingRTERequestCount($_PendingRTERequestCount)
	{
		return ($this->PendingRTERequestCount = $_PendingRTERequestCount);
	}
	/**
	 * Get PendingRTERequestCount
	 * @return int
	 */
	public function getPendingRTERequestCount()
	{
		return $this->PendingRTERequestCount;
	}
	/**
	 * Set DeclinedRTERequestCount
	 * @param int DeclinedRTERequestCount
	 * @return int
	 */
	public function setDeclinedRTERequestCount($_DeclinedRTERequestCount)
	{
		return ($this->DeclinedRTERequestCount = $_DeclinedRTERequestCount);
	}
	/**
	 * Get DeclinedRTERequestCount
	 * @return int
	 */
	public function getDeclinedRTERequestCount()
	{
		return $this->DeclinedRTERequestCount;
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