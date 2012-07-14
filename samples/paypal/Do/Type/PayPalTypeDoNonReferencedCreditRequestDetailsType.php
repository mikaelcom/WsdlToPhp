<?php
/**
 * Class file for PayPalTypeDoNonReferencedCreditRequestDetailsType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeDoNonReferencedCreditRequestDetailsType
 * @date 14/07/2012
 */
class PayPalTypeDoNonReferencedCreditRequestDetailsType extends PayPalWsdlClass
{
	/**
	 * The Amount
	 * Meta informations :
	 * 	- documentation : 
	 * @var PayPalTypeBasicAmountType
	 */
	public $Amount;
	/**
	 * The NetAmount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : 
	 * @var PayPalTypeBasicAmountType
	 */
	public $NetAmount;
	/**
	 * The TaxAmount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : 
	 * @var PayPalTypeBasicAmountType
	 */
	public $TaxAmount;
	/**
	 * The ShippingAmount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : 
	 * @var PayPalTypeBasicAmountType
	 */
	public $ShippingAmount;
	/**
	 * The CreditCard
	 * Meta informations :
	 * 	- documentation : 
	 * @var PayPalTypeCreditCardDetailsType
	 */
	public $CreditCard;
	/**
	 * The ReceiverEmail
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : 
	 * @var string
	 */
	public $ReceiverEmail;
	/**
	 * The Comment
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : 
	 * @var string
	 */
	public $Comment;
	/**
	 * Constructor
	 * @param PayPalTypeBasicAmountType Amount
	 * @param PayPalTypeBasicAmountType NetAmount
	 * @param PayPalTypeBasicAmountType TaxAmount
	 * @param PayPalTypeBasicAmountType ShippingAmount
	 * @param PayPalTypeCreditCardDetailsType CreditCard
	 * @param string ReceiverEmail
	 * @param string Comment
	 * @return PayPalTypeDoNonReferencedCreditRequestDetailsType
	 */
	public function __construct($_Amount = null,$_NetAmount = null,$_TaxAmount = null,$_ShippingAmount = null,$_CreditCard = null,$_ReceiverEmail = null,$_Comment = null)
	{
		parent::__construct(array('Amount'=>$_Amount,'NetAmount'=>$_NetAmount,'TaxAmount'=>$_TaxAmount,'ShippingAmount'=>$_ShippingAmount,'CreditCard'=>$_CreditCard,'ReceiverEmail'=>$_ReceiverEmail,'Comment'=>$_Comment));
	}
	/**
	 * Set Amount
	 * @param BasicAmountType Amount
	 * @return BasicAmountType
	 */
	public function setAmount($_Amount)
	{
		return ($this->Amount = $_Amount);
	}
	/**
	 * Get Amount
	 * @return PayPalTypeBasicAmountType
	 */
	public function getAmount()
	{
		return $this->Amount;
	}
	/**
	 * Set NetAmount
	 * @param BasicAmountType NetAmount
	 * @return BasicAmountType
	 */
	public function setNetAmount($_NetAmount)
	{
		return ($this->NetAmount = $_NetAmount);
	}
	/**
	 * Get NetAmount
	 * @return PayPalTypeBasicAmountType
	 */
	public function getNetAmount()
	{
		return $this->NetAmount;
	}
	/**
	 * Set TaxAmount
	 * @param BasicAmountType TaxAmount
	 * @return BasicAmountType
	 */
	public function setTaxAmount($_TaxAmount)
	{
		return ($this->TaxAmount = $_TaxAmount);
	}
	/**
	 * Get TaxAmount
	 * @return PayPalTypeBasicAmountType
	 */
	public function getTaxAmount()
	{
		return $this->TaxAmount;
	}
	/**
	 * Set ShippingAmount
	 * @param BasicAmountType ShippingAmount
	 * @return BasicAmountType
	 */
	public function setShippingAmount($_ShippingAmount)
	{
		return ($this->ShippingAmount = $_ShippingAmount);
	}
	/**
	 * Get ShippingAmount
	 * @return PayPalTypeBasicAmountType
	 */
	public function getShippingAmount()
	{
		return $this->ShippingAmount;
	}
	/**
	 * Set CreditCard
	 * @param CreditCardDetailsType CreditCard
	 * @return CreditCardDetailsType
	 */
	public function setCreditCard($_CreditCard)
	{
		return ($this->CreditCard = $_CreditCard);
	}
	/**
	 * Get CreditCard
	 * @return PayPalTypeCreditCardDetailsType
	 */
	public function getCreditCard()
	{
		return $this->CreditCard;
	}
	/**
	 * Set ReceiverEmail
	 * @param string ReceiverEmail
	 * @return string
	 */
	public function setReceiverEmail($_ReceiverEmail)
	{
		return ($this->ReceiverEmail = $_ReceiverEmail);
	}
	/**
	 * Get ReceiverEmail
	 * @return string
	 */
	public function getReceiverEmail()
	{
		return $this->ReceiverEmail;
	}
	/**
	 * Set Comment
	 * @param string Comment
	 * @return string
	 */
	public function setComment($_Comment)
	{
		return ($this->Comment = $_Comment);
	}
	/**
	 * Get Comment
	 * @return string
	 */
	public function getComment()
	{
		return $this->Comment;
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