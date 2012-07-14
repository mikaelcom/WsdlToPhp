<?php
/**
 * Class file for PayPalTypeBillingApprovalDetailsType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeBillingApprovalDetailsType
 * @date 14/07/2012
 */
class PayPalTypeBillingApprovalDetailsType extends PayPalWsdlClass
{
	/**
	 * The ApprovalType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- documentation : The Type of Approval requested - Billing Agreement or Profile
	 * @var PayPalTypeApprovalTypeType
	 */
	public $ApprovalType;
	/**
	 * The ApprovalSubType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The Approval subtype - Must be MerchantInitiatedBilling for BillingAgreement ApprovalType
	 * @var PayPalTypeApprovalSubTypeType
	 */
	public $ApprovalSubType;
	/**
	 * The OrderDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Description about the Order
	 * @var PayPalTypeOrderDetailsType
	 */
	public $OrderDetails;
	/**
	 * The PaymentDirectives
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Directives about the type of payment
	 * @var PayPalTypePaymentDirectivesType
	 */
	public $PaymentDirectives;
	/**
	 * The Custom
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Client may pass in its identification of this Billing Agreement. It used for the client's tracking purposes.
	 * @var string
	 */
	public $Custom;
	/**
	 * Constructor
	 * @param PayPalTypeApprovalTypeType ApprovalType
	 * @param PayPalTypeApprovalSubTypeType ApprovalSubType
	 * @param PayPalTypeOrderDetailsType OrderDetails
	 * @param PayPalTypePaymentDirectivesType PaymentDirectives
	 * @param string Custom
	 * @return PayPalTypeBillingApprovalDetailsType
	 */
	public function __construct($_ApprovalType,$_ApprovalSubType = null,$_OrderDetails = null,$_PaymentDirectives = null,$_Custom = null)
	{
		parent::__construct(array('ApprovalType'=>$_ApprovalType,'ApprovalSubType'=>$_ApprovalSubType,'OrderDetails'=>$_OrderDetails,'PaymentDirectives'=>$_PaymentDirectives,'Custom'=>$_Custom));
	}
	/**
	 * Set ApprovalType
	 * @param ApprovalTypeType ApprovalType
	 * @return ApprovalTypeType
	 */
	public function setApprovalType($_ApprovalType)
	{
		return ($this->ApprovalType = PayPalTypeApprovalTypeType::valueIsValid($_ApprovalType)?$_ApprovalType:null);
	}
	/**
	 * Get ApprovalType
	 * @return PayPalTypeApprovalTypeType
	 */
	public function getApprovalType()
	{
		return $this->ApprovalType;
	}
	/**
	 * Set ApprovalSubType
	 * @param ApprovalSubTypeType ApprovalSubType
	 * @return ApprovalSubTypeType
	 */
	public function setApprovalSubType($_ApprovalSubType)
	{
		return ($this->ApprovalSubType = PayPalTypeApprovalSubTypeType::valueIsValid($_ApprovalSubType)?$_ApprovalSubType:null);
	}
	/**
	 * Get ApprovalSubType
	 * @return PayPalTypeApprovalSubTypeType
	 */
	public function getApprovalSubType()
	{
		return $this->ApprovalSubType;
	}
	/**
	 * Set OrderDetails
	 * @param OrderDetailsType OrderDetails
	 * @return OrderDetailsType
	 */
	public function setOrderDetails($_OrderDetails)
	{
		return ($this->OrderDetails = $_OrderDetails);
	}
	/**
	 * Get OrderDetails
	 * @return PayPalTypeOrderDetailsType
	 */
	public function getOrderDetails()
	{
		return $this->OrderDetails;
	}
	/**
	 * Set PaymentDirectives
	 * @param PaymentDirectivesType PaymentDirectives
	 * @return PaymentDirectivesType
	 */
	public function setPaymentDirectives($_PaymentDirectives)
	{
		return ($this->PaymentDirectives = $_PaymentDirectives);
	}
	/**
	 * Get PaymentDirectives
	 * @return PayPalTypePaymentDirectivesType
	 */
	public function getPaymentDirectives()
	{
		return $this->PaymentDirectives;
	}
	/**
	 * Set Custom
	 * @param string Custom
	 * @return string
	 */
	public function setCustom($_Custom)
	{
		return ($this->Custom = $_Custom);
	}
	/**
	 * Get Custom
	 * @return string
	 */
	public function getCustom()
	{
		return $this->Custom;
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