<?php
/**
 * Class file for PayPalTypeTransactionStatusType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeTransactionStatusType
 * @date 14/07/2012
 */
class PayPalTypeTransactionStatusType extends PayPalWsdlClass
{
	/**
	 * The eBayPaymentStatus
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates the success or failure of an eBay Online Payment for the transaction. If the payment failed, the value returned indicates the reason for the failure. Possible values: 0 = No payment failure. 3 = Buyer's eCheck bounced. 4 = Buyer's credit card failed. 5 = Buyer failed payment as reported by seller. 7 = Payment from buyer to seller is in PayPal process, but has not yet been completed.
	 * @var int
	 */
	public $eBayPaymentStatus;
	/**
	 * The IncompleteState
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates the current state of the checkout process for the transaction. Possible values: 0 = Checkout complete. 1 = Checkout incomplete. No details specified. 2 = Buyer requests total. 3 = Seller responded to buyer's request.
	 * @var int
	 */
	public $IncompleteState;
	/**
	 * The LastTimeModified
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates last date and time checkout status or incomplete state was updated (in GMT).
	 * @var dateTime
	 */
	public $LastTimeModified;
	/**
	 * The PaymentMethodUsed
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Payment method used by the buyer. (See BuyerPaymentCodeList/Type).
	 * @var PayPalTypeBuyerPaymentMethodCodeType
	 */
	public $PaymentMethodUsed;
	/**
	 * The StatusIs
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether the transaction process complete or incomplete. Possible values: 1 = Incomplete 2 = Complete
	 * @var int
	 */
	public $StatusIs;
	/**
	 * Constructor
	 * @param int eBayPaymentStatus
	 * @param int IncompleteState
	 * @param dateTime LastTimeModified
	 * @param PayPalTypeBuyerPaymentMethodCodeType PaymentMethodUsed
	 * @param int StatusIs
	 * @return PayPalTypeTransactionStatusType
	 */
	public function __construct($_eBayPaymentStatus = null,$_IncompleteState = null,$_LastTimeModified = null,$_PaymentMethodUsed = null,$_StatusIs = null)
	{
		parent::__construct(array('eBayPaymentStatus'=>$_eBayPaymentStatus,'IncompleteState'=>$_IncompleteState,'LastTimeModified'=>$_LastTimeModified,'PaymentMethodUsed'=>$_PaymentMethodUsed,'StatusIs'=>$_StatusIs));
	}
	/**
	 * Set eBayPaymentStatus
	 * @param int eBayPaymentStatus
	 * @return int
	 */
	public function setEBayPaymentStatus($_eBayPaymentStatus)
	{
		return ($this->eBayPaymentStatus = $_eBayPaymentStatus);
	}
	/**
	 * Get eBayPaymentStatus
	 * @return int
	 */
	public function getEBayPaymentStatus()
	{
		return $this->eBayPaymentStatus;
	}
	/**
	 * Set IncompleteState
	 * @param int IncompleteState
	 * @return int
	 */
	public function setIncompleteState($_IncompleteState)
	{
		return ($this->IncompleteState = $_IncompleteState);
	}
	/**
	 * Get IncompleteState
	 * @return int
	 */
	public function getIncompleteState()
	{
		return $this->IncompleteState;
	}
	/**
	 * Set LastTimeModified
	 * @param dateTime LastTimeModified
	 * @return dateTime
	 */
	public function setLastTimeModified($_LastTimeModified)
	{
		return ($this->LastTimeModified = $_LastTimeModified);
	}
	/**
	 * Get LastTimeModified
	 * @return dateTime
	 */
	public function getLastTimeModified()
	{
		return $this->LastTimeModified;
	}
	/**
	 * Set PaymentMethodUsed
	 * @param BuyerPaymentMethodCodeType PaymentMethodUsed
	 * @return BuyerPaymentMethodCodeType
	 */
	public function setPaymentMethodUsed($_PaymentMethodUsed)
	{
		return ($this->PaymentMethodUsed = PayPalTypeBuyerPaymentMethodCodeType::valueIsValid($_PaymentMethodUsed)?$_PaymentMethodUsed:null);
	}
	/**
	 * Get PaymentMethodUsed
	 * @return PayPalTypeBuyerPaymentMethodCodeType
	 */
	public function getPaymentMethodUsed()
	{
		return $this->PaymentMethodUsed;
	}
	/**
	 * Set StatusIs
	 * @param int StatusIs
	 * @return int
	 */
	public function setStatusIs($_StatusIs)
	{
		return ($this->StatusIs = $_StatusIs);
	}
	/**
	 * Get StatusIs
	 * @return int
	 */
	public function getStatusIs()
	{
		return $this->StatusIs;
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