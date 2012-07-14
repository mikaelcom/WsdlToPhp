<?php
/**
 * Class file for PayPalTypeShippingDetailsType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeShippingDetailsType
 * Documentation : Specifies the shipping payment details.
 * @date 14/07/2012
 */
class PayPalTypeShippingDetailsType extends PayPalWsdlClass
{
	/**
	 * The AllowPaymentEdit
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether the buyer edited the payment amount.
	 * @var boolean
	 */
	public $AllowPaymentEdit;
	/**
	 * The CalculatedShippingRate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Calculated shipping rate details. If present, then the calculated shipping rate option was used.
	 * @var PayPalTypeCalculatedShippingRateType
	 */
	public $CalculatedShippingRate;
	/**
	 * The ChangePaymentInstructions
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether the payment instructions are included (e.g., for updating the details of a transaction).
	 * @var boolean
	 */
	public $ChangePaymentInstructions;
	/**
	 * The FlatShippingRate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Flat shipping rate details. If present, then the flat shipping rate option was used.
	 * @var PayPalTypeFlatShippingRateType
	 */
	public $FlatShippingRate;
	/**
	 * The InsuranceTotal
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Total cost of insurance for the transaction.
	 * @var PayPalTypeAmountType
	 */
	public $InsuranceTotal;
	/**
	 * The InsuranceWanted
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether buyer selected to have insurance.
	 * @var boolean
	 */
	public $InsuranceWanted;
	/**
	 * The PaymentInstructions
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Payment instuctions.
	 * @var string
	 */
	public $PaymentInstructions;
	/**
	 * The SalesTax
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Sales tax details. Sales tax applicable for only US sites. For non-US sites this sub-element should not be used.
	 * @var PayPalTypeSalesTaxType
	 */
	public $SalesTax;
	/**
	 * The SellerPostalCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Postal/Zip code from where the seller will ship the item.
	 * @var string
	 */
	public $SellerPostalCode;
	/**
	 * Constructor
	 * @param boolean AllowPaymentEdit
	 * @param PayPalTypeCalculatedShippingRateType CalculatedShippingRate
	 * @param boolean ChangePaymentInstructions
	 * @param PayPalTypeFlatShippingRateType FlatShippingRate
	 * @param PayPalTypeAmountType InsuranceTotal
	 * @param boolean InsuranceWanted
	 * @param string PaymentInstructions
	 * @param PayPalTypeSalesTaxType SalesTax
	 * @param string SellerPostalCode
	 * @return PayPalTypeShippingDetailsType
	 */
	public function __construct($_AllowPaymentEdit = null,$_CalculatedShippingRate = null,$_ChangePaymentInstructions = null,$_FlatShippingRate = null,$_InsuranceTotal = null,$_InsuranceWanted = null,$_PaymentInstructions = null,$_SalesTax = null,$_SellerPostalCode = null)
	{
		parent::__construct(array('AllowPaymentEdit'=>$_AllowPaymentEdit,'CalculatedShippingRate'=>$_CalculatedShippingRate,'ChangePaymentInstructions'=>$_ChangePaymentInstructions,'FlatShippingRate'=>$_FlatShippingRate,'InsuranceTotal'=>$_InsuranceTotal,'InsuranceWanted'=>$_InsuranceWanted,'PaymentInstructions'=>$_PaymentInstructions,'SalesTax'=>$_SalesTax,'SellerPostalCode'=>$_SellerPostalCode));
	}
	/**
	 * Set AllowPaymentEdit
	 * @param boolean AllowPaymentEdit
	 * @return boolean
	 */
	public function setAllowPaymentEdit($_AllowPaymentEdit)
	{
		return ($this->AllowPaymentEdit = $_AllowPaymentEdit);
	}
	/**
	 * Get AllowPaymentEdit
	 * @return boolean
	 */
	public function getAllowPaymentEdit()
	{
		return $this->AllowPaymentEdit;
	}
	/**
	 * Set CalculatedShippingRate
	 * @param CalculatedShippingRateType CalculatedShippingRate
	 * @return CalculatedShippingRateType
	 */
	public function setCalculatedShippingRate($_CalculatedShippingRate)
	{
		return ($this->CalculatedShippingRate = $_CalculatedShippingRate);
	}
	/**
	 * Get CalculatedShippingRate
	 * @return PayPalTypeCalculatedShippingRateType
	 */
	public function getCalculatedShippingRate()
	{
		return $this->CalculatedShippingRate;
	}
	/**
	 * Set ChangePaymentInstructions
	 * @param boolean ChangePaymentInstructions
	 * @return boolean
	 */
	public function setChangePaymentInstructions($_ChangePaymentInstructions)
	{
		return ($this->ChangePaymentInstructions = $_ChangePaymentInstructions);
	}
	/**
	 * Get ChangePaymentInstructions
	 * @return boolean
	 */
	public function getChangePaymentInstructions()
	{
		return $this->ChangePaymentInstructions;
	}
	/**
	 * Set FlatShippingRate
	 * @param FlatShippingRateType FlatShippingRate
	 * @return FlatShippingRateType
	 */
	public function setFlatShippingRate($_FlatShippingRate)
	{
		return ($this->FlatShippingRate = $_FlatShippingRate);
	}
	/**
	 * Get FlatShippingRate
	 * @return PayPalTypeFlatShippingRateType
	 */
	public function getFlatShippingRate()
	{
		return $this->FlatShippingRate;
	}
	/**
	 * Set InsuranceTotal
	 * @param AmountType InsuranceTotal
	 * @return AmountType
	 */
	public function setInsuranceTotal($_InsuranceTotal)
	{
		return ($this->InsuranceTotal = $_InsuranceTotal);
	}
	/**
	 * Get InsuranceTotal
	 * @return PayPalTypeAmountType
	 */
	public function getInsuranceTotal()
	{
		return $this->InsuranceTotal;
	}
	/**
	 * Set InsuranceWanted
	 * @param boolean InsuranceWanted
	 * @return boolean
	 */
	public function setInsuranceWanted($_InsuranceWanted)
	{
		return ($this->InsuranceWanted = $_InsuranceWanted);
	}
	/**
	 * Get InsuranceWanted
	 * @return boolean
	 */
	public function getInsuranceWanted()
	{
		return $this->InsuranceWanted;
	}
	/**
	 * Set PaymentInstructions
	 * @param string PaymentInstructions
	 * @return string
	 */
	public function setPaymentInstructions($_PaymentInstructions)
	{
		return ($this->PaymentInstructions = $_PaymentInstructions);
	}
	/**
	 * Get PaymentInstructions
	 * @return string
	 */
	public function getPaymentInstructions()
	{
		return $this->PaymentInstructions;
	}
	/**
	 * Set SalesTax
	 * @param SalesTaxType SalesTax
	 * @return SalesTaxType
	 */
	public function setSalesTax($_SalesTax)
	{
		return ($this->SalesTax = $_SalesTax);
	}
	/**
	 * Get SalesTax
	 * @return PayPalTypeSalesTaxType
	 */
	public function getSalesTax()
	{
		return $this->SalesTax;
	}
	/**
	 * Set SellerPostalCode
	 * @param string SellerPostalCode
	 * @return string
	 */
	public function setSellerPostalCode($_SellerPostalCode)
	{
		return ($this->SellerPostalCode = $_SellerPostalCode);
	}
	/**
	 * Get SellerPostalCode
	 * @return string
	 */
	public function getSellerPostalCode()
	{
		return $this->SellerPostalCode;
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