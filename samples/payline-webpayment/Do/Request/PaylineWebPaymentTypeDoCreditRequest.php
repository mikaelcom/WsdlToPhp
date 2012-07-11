<?php
/**
 * Class file for PaylineWebPaymentTypeDoCreditRequest
 * @date 10/07/2012
 */
/**
 * Class PaylineWebPaymentTypeDoCreditRequest
 * @date 10/07/2012
 */
class PaylineWebPaymentTypeDoCreditRequest extends PaylineWebPaymentWsdlClass
{
	/**
	 * The payment
	 * Meta informations :
	 * 	- nillable : false
	 * @var PaylineWebPaymentTypePayment
	 */
	public $payment;
	/**
	 * The card
	 * Meta informations :
	 * 	- nillable : false
	 * @var PaylineWebPaymentTypeCard
	 */
	public $card;
	/**
	 * The comment
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $comment;
	/**
	 * The order
	 * Meta informations :
	 * 	- nillable : true
	 * @var PaylineWebPaymentTypeOrder
	 */
	public $order;
	/**
	 * The buyer
	 * Meta informations :
	 * 	- nillable : true
	 * @var PaylineWebPaymentTypeBuyer
	 */
	public $buyer;
	/**
	 * The owner
	 * Meta informations :
	 * 	- nillable : true
	 * @var PaylineWebPaymentTypeOwner
	 */
	public $owner;
	/**
	 * The privateDataList
	 * Meta informations :
	 * 	- nillable : true
	 * @var PaylineWebPaymentTypePrivateDataList
	 */
	public $privateDataList;
	/**
	 * Constructor
	 * @param PaylineWebPaymentTypePayment payment
	 * @param PaylineWebPaymentTypeCard card
	 * @param string comment
	 * @param PaylineWebPaymentTypeOrder order
	 * @param PaylineWebPaymentTypeBuyer buyer
	 * @param PaylineWebPaymentTypeOwner owner
	 * @param PaylineWebPaymentTypePrivateDataList privateDataList
	 * @return PaylineWebPaymentTypeDoCreditRequest
	 */
	public function __construct($_payment = null,$_card = null,$_comment = null,$_order = null,$_buyer = null,$_owner = null,$_privateDataList = null)
	{
		parent::__construct(array('payment'=>$_payment,'card'=>$_card,'comment'=>$_comment,'order'=>$_order,'buyer'=>$_buyer,'owner'=>$_owner,'privateDataList'=>$_privateDataList));
	}
	/**
	 * Set payment
	 * @param payment payment
	 * @return payment
	 */
	public function setPayment($_payment)
	{
		return ($this->payment = $_payment);
	}
	/**
	 * Get payment
	 * @return PaylineWebPaymentTypepayment
	 */
	public function getPayment()
	{
		return $this->payment;
	}
	/**
	 * Set card
	 * @param card card
	 * @return card
	 */
	public function setCard($_card)
	{
		return ($this->card = $_card);
	}
	/**
	 * Get card
	 * @return PaylineWebPaymentTypecard
	 */
	public function getCard()
	{
		return $this->card;
	}
	/**
	 * Set comment
	 * @param string comment
	 * @return string
	 */
	public function setComment($_comment)
	{
		return ($this->comment = $_comment);
	}
	/**
	 * Get comment
	 * @return string
	 */
	public function getComment()
	{
		return $this->comment;
	}
	/**
	 * Set order
	 * @param order order
	 * @return order
	 */
	public function setOrder($_order)
	{
		return ($this->order = $_order);
	}
	/**
	 * Get order
	 * @return PaylineWebPaymentTypeorder
	 */
	public function getOrder()
	{
		return $this->order;
	}
	/**
	 * Set buyer
	 * @param buyer buyer
	 * @return buyer
	 */
	public function setBuyer($_buyer)
	{
		return ($this->buyer = $_buyer);
	}
	/**
	 * Get buyer
	 * @return PaylineWebPaymentTypebuyer
	 */
	public function getBuyer()
	{
		return $this->buyer;
	}
	/**
	 * Set owner
	 * @param owner owner
	 * @return owner
	 */
	public function setOwner($_owner)
	{
		return ($this->owner = $_owner);
	}
	/**
	 * Get owner
	 * @return PaylineWebPaymentTypeowner
	 */
	public function getOwner()
	{
		return $this->owner;
	}
	/**
	 * Set privateDataList
	 * @param privateDataList privateDataList
	 * @return privateDataList
	 */
	public function setPrivateDataList($_privateDataList)
	{
		return ($this->privateDataList = $_privateDataList);
	}
	/**
	 * Get privateDataList
	 * @return PaylineWebPaymentTypeprivateDataList
	 */
	public function getPrivateDataList()
	{
		return $this->privateDataList;
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