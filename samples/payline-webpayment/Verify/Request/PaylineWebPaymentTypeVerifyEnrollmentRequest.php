<?php
/**
 * Class file for PaylineWebPaymentTypeVerifyEnrollmentRequest
 * @date 10/07/2012
 */
/**
 * Class PaylineWebPaymentTypeVerifyEnrollmentRequest
 * @date 10/07/2012
 */
class PaylineWebPaymentTypeVerifyEnrollmentRequest extends PaylineWebPaymentWsdlClass
{
	/**
	 * The card
	 * Meta informations :
	 * 	- nillable : false
	 * @var PaylineWebPaymentTypeCard
	 */
	public $card;
	/**
	 * The payment
	 * Meta informations :
	 * 	- nillable : false
	 * @var PaylineWebPaymentTypePayment
	 */
	public $payment;
	/**
	 * The orderRef
	 * Meta informations :
	 * 	- nillable : false
	 * @var string
	 */
	public $orderRef;
	/**
	 * The mdFieldValue
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $mdFieldValue;
	/**
	 * Constructor
	 * @param PaylineWebPaymentTypeCard card
	 * @param PaylineWebPaymentTypePayment payment
	 * @param string orderRef
	 * @param string mdFieldValue
	 * @return PaylineWebPaymentTypeVerifyEnrollmentRequest
	 */
	public function __construct($_card = null,$_payment = null,$_orderRef = null,$_mdFieldValue = null)
	{
		parent::__construct(array('card'=>$_card,'payment'=>$_payment,'orderRef'=>$_orderRef,'mdFieldValue'=>$_mdFieldValue));
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
	 * Set orderRef
	 * @param string orderRef
	 * @return string
	 */
	public function setOrderRef($_orderRef)
	{
		return ($this->orderRef = $_orderRef);
	}
	/**
	 * Get orderRef
	 * @return string
	 */
	public function getOrderRef()
	{
		return $this->orderRef;
	}
	/**
	 * Set mdFieldValue
	 * @param string mdFieldValue
	 * @return string
	 */
	public function setMdFieldValue($_mdFieldValue)
	{
		return ($this->mdFieldValue = $_mdFieldValue);
	}
	/**
	 * Get mdFieldValue
	 * @return string
	 */
	public function getMdFieldValue()
	{
		return $this->mdFieldValue;
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