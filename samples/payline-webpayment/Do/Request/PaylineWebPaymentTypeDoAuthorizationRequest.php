<?php
/**
 * Class file for PaylineWebPaymentTypeDoAuthorizationRequest
 * @date 10/07/2012
 */
/**
 * Class PaylineWebPaymentTypeDoAuthorizationRequest
 * @date 10/07/2012
 */
class PaylineWebPaymentTypeDoAuthorizationRequest extends PaylineWebPaymentWsdlClass
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
	 * The order
	 * Meta informations :
	 * 	- nillable : false
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
	 * The authentication3DSecure
	 * Meta informations :
	 * 	- nillable : true
	 * @var PaylineWebPaymentTypeAuthentication3DSecure
	 */
	public $authentication3DSecure;
	/**
	 * Constructor
	 * @param PaylineWebPaymentTypePayment payment
	 * @param PaylineWebPaymentTypeCard card
	 * @param PaylineWebPaymentTypeOrder order
	 * @param PaylineWebPaymentTypeBuyer buyer
	 * @param PaylineWebPaymentTypeOwner owner
	 * @param PaylineWebPaymentTypePrivateDataList privateDataList
	 * @param PaylineWebPaymentTypeAuthentication3DSecure authentication3DSecure
	 * @return PaylineWebPaymentTypeDoAuthorizationRequest
	 */
	public function __construct($_payment = null,$_card = null,$_order = null,$_buyer = null,$_owner = null,$_privateDataList = null,$_authentication3DSecure = null)
	{
		parent::__construct(array('payment'=>$_payment,'card'=>$_card,'order'=>$_order,'buyer'=>$_buyer,'owner'=>$_owner,'privateDataList'=>$_privateDataList,'authentication3DSecure'=>$_authentication3DSecure));
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
	 * Set authentication3DSecure
	 * @param authentication3DSecure authentication3DSecure
	 * @return authentication3DSecure
	 */
	public function setAuthentication3DSecure($_authentication3DSecure)
	{
		return ($this->authentication3DSecure = $_authentication3DSecure);
	}
	/**
	 * Get authentication3DSecure
	 * @return PaylineWebPaymentTypeauthentication3DSecure
	 */
	public function getAuthentication3DSecure()
	{
		return $this->authentication3DSecure;
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