<?php
/**
 * Class file for PayPalTypeReferenceCreditCardDetailsType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeReferenceCreditCardDetailsType
 * Documentation : CreditCardDetailsType for DCC Reference Transaction Information about a Credit Card.
 * @date 14/07/2012
 */
class PayPalTypeReferenceCreditCardDetailsType extends PayPalWsdlClass
{
	/**
	 * The CreditCardNumberType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var PayPalTypeCreditCardNumberTypeType
	 */
	public $CreditCardNumberType;
	/**
	 * The ExpMonth
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $ExpMonth;
	/**
	 * The ExpYear
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $ExpYear;
	/**
	 * The CardOwnerName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var PayPalTypePersonNameType
	 */
	public $CardOwnerName;
	/**
	 * The BillingAddress
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var PayPalTypeAddressType
	 */
	public $BillingAddress;
	/**
	 * The CVV2
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CVV2;
	/**
	 * The StartMonth
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $StartMonth;
	/**
	 * The StartYear
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $StartYear;
	/**
	 * The IssueNumber
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $IssueNumber;
	/**
	 * Constructor
	 * @param PayPalTypeCreditCardNumberTypeType CreditCardNumberType
	 * @param int ExpMonth
	 * @param int ExpYear
	 * @param PayPalTypePersonNameType CardOwnerName
	 * @param PayPalTypeAddressType BillingAddress
	 * @param string CVV2
	 * @param int StartMonth
	 * @param int StartYear
	 * @param string IssueNumber
	 * @return PayPalTypeReferenceCreditCardDetailsType
	 */
	public function __construct($_CreditCardNumberType = null,$_ExpMonth = null,$_ExpYear = null,$_CardOwnerName = null,$_BillingAddress = null,$_CVV2 = null,$_StartMonth = null,$_StartYear = null,$_IssueNumber = null)
	{
		parent::__construct(array('CreditCardNumberType'=>$_CreditCardNumberType,'ExpMonth'=>$_ExpMonth,'ExpYear'=>$_ExpYear,'CardOwnerName'=>$_CardOwnerName,'BillingAddress'=>$_BillingAddress,'CVV2'=>$_CVV2,'StartMonth'=>$_StartMonth,'StartYear'=>$_StartYear,'IssueNumber'=>$_IssueNumber));
	}
	/**
	 * Set CreditCardNumberType
	 * @param CreditCardNumberTypeType CreditCardNumberType
	 * @return CreditCardNumberTypeType
	 */
	public function setCreditCardNumberType($_CreditCardNumberType)
	{
		return ($this->CreditCardNumberType = $_CreditCardNumberType);
	}
	/**
	 * Get CreditCardNumberType
	 * @return PayPalTypeCreditCardNumberTypeType
	 */
	public function getCreditCardNumberType()
	{
		return $this->CreditCardNumberType;
	}
	/**
	 * Set ExpMonth
	 * @param int ExpMonth
	 * @return int
	 */
	public function setExpMonth($_ExpMonth)
	{
		return ($this->ExpMonth = $_ExpMonth);
	}
	/**
	 * Get ExpMonth
	 * @return int
	 */
	public function getExpMonth()
	{
		return $this->ExpMonth;
	}
	/**
	 * Set ExpYear
	 * @param int ExpYear
	 * @return int
	 */
	public function setExpYear($_ExpYear)
	{
		return ($this->ExpYear = $_ExpYear);
	}
	/**
	 * Get ExpYear
	 * @return int
	 */
	public function getExpYear()
	{
		return $this->ExpYear;
	}
	/**
	 * Set CardOwnerName
	 * @param PersonNameType CardOwnerName
	 * @return PersonNameType
	 */
	public function setCardOwnerName($_CardOwnerName)
	{
		return ($this->CardOwnerName = $_CardOwnerName);
	}
	/**
	 * Get CardOwnerName
	 * @return PayPalTypePersonNameType
	 */
	public function getCardOwnerName()
	{
		return $this->CardOwnerName;
	}
	/**
	 * Set BillingAddress
	 * @param AddressType BillingAddress
	 * @return AddressType
	 */
	public function setBillingAddress($_BillingAddress)
	{
		return ($this->BillingAddress = $_BillingAddress);
	}
	/**
	 * Get BillingAddress
	 * @return PayPalTypeAddressType
	 */
	public function getBillingAddress()
	{
		return $this->BillingAddress;
	}
	/**
	 * Set CVV2
	 * @param string CVV2
	 * @return string
	 */
	public function setCVV2($_CVV2)
	{
		return ($this->CVV2 = $_CVV2);
	}
	/**
	 * Get CVV2
	 * @return string
	 */
	public function getCVV2()
	{
		return $this->CVV2;
	}
	/**
	 * Set StartMonth
	 * @param int StartMonth
	 * @return int
	 */
	public function setStartMonth($_StartMonth)
	{
		return ($this->StartMonth = $_StartMonth);
	}
	/**
	 * Get StartMonth
	 * @return int
	 */
	public function getStartMonth()
	{
		return $this->StartMonth;
	}
	/**
	 * Set StartYear
	 * @param int StartYear
	 * @return int
	 */
	public function setStartYear($_StartYear)
	{
		return ($this->StartYear = $_StartYear);
	}
	/**
	 * Get StartYear
	 * @return int
	 */
	public function getStartYear()
	{
		return $this->StartYear;
	}
	/**
	 * Set IssueNumber
	 * @param string IssueNumber
	 * @return string
	 */
	public function setIssueNumber($_IssueNumber)
	{
		return ($this->IssueNumber = $_IssueNumber);
	}
	/**
	 * Get IssueNumber
	 * @return string
	 */
	public function getIssueNumber()
	{
		return $this->IssueNumber;
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