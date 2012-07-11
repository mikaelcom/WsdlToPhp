<?php
/**
 * Class file for PaylineWebPaymentTypeOwner
 * @date 10/07/2012
 */
/**
 * Class PaylineWebPaymentTypeOwner
 * Documentation : This element contains information about the owner
 * @date 10/07/2012
 */
class PaylineWebPaymentTypeOwner extends PaylineWebPaymentWsdlClass
{
	/**
	 * The lastName
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $lastName;
	/**
	 * The firstName
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $firstName;
	/**
	 * The billingAddress
	 * Meta informations :
	 * 	- nillable : true
	 * @var PaylineWebPaymentTypeAddressOwner
	 */
	public $billingAddress;
	/**
	 * The issueCardDate
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $issueCardDate;
	/**
	 * Constructor
	 * @param string lastName
	 * @param string firstName
	 * @param PaylineWebPaymentTypeAddressOwner billingAddress
	 * @param string issueCardDate
	 * @return PaylineWebPaymentTypeOwner
	 */
	public function __construct($_lastName = null,$_firstName = null,$_billingAddress = null,$_issueCardDate = null)
	{
		parent::__construct(array('lastName'=>$_lastName,'firstName'=>$_firstName,'billingAddress'=>$_billingAddress,'issueCardDate'=>$_issueCardDate));
	}
	/**
	 * Set lastName
	 * @param string lastName
	 * @return string
	 */
	public function setLastName($_lastName)
	{
		return ($this->lastName = $_lastName);
	}
	/**
	 * Get lastName
	 * @return string
	 */
	public function getLastName()
	{
		return $this->lastName;
	}
	/**
	 * Set firstName
	 * @param string firstName
	 * @return string
	 */
	public function setFirstName($_firstName)
	{
		return ($this->firstName = $_firstName);
	}
	/**
	 * Get firstName
	 * @return string
	 */
	public function getFirstName()
	{
		return $this->firstName;
	}
	/**
	 * Set billingAddress
	 * @param addressOwner billingAddress
	 * @return addressOwner
	 */
	public function setBillingAddress($_billingAddress)
	{
		return ($this->billingAddress = $_billingAddress);
	}
	/**
	 * Get billingAddress
	 * @return PaylineWebPaymentTypeaddressOwner
	 */
	public function getBillingAddress()
	{
		return $this->billingAddress;
	}
	/**
	 * Set issueCardDate
	 * @param string issueCardDate
	 * @return string
	 */
	public function setIssueCardDate($_issueCardDate)
	{
		return ($this->issueCardDate = $_issueCardDate);
	}
	/**
	 * Get issueCardDate
	 * @return string
	 */
	public function getIssueCardDate()
	{
		return $this->issueCardDate;
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