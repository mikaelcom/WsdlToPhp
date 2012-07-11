<?php
/**
 * Class file for PPInvoiceTypeBusinessInfoType
 * @date 02/07/2012
 */
/**
 * Class PPInvoiceTypeBusinessInfoType
 * Documentation : Contact information for a company participating in the invoicing system.
 * @date 02/07/2012
 */
class PPInvoiceTypeBusinessInfoType extends PPInvoiceWsdlClass
{
	/**
	 * The firstName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : First name of the company contact.
	 * @var string
	 */
	public $firstName;
	/**
	 * The lastName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Last name of the company contact.
	 * @var string
	 */
	public $lastName;
	/**
	 * The businessName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Business name of the company.
	 * @var string
	 */
	public $businessName;
	/**
	 * The phone
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Phone number for contacting the company.
	 * @var string
	 */
	public $phone;
	/**
	 * The fax
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Fax number used by the company.
	 * @var string
	 */
	public $fax;
	/**
	 * The website
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Website used by the company.
	 * @var string
	 */
	public $website;
	/**
	 * The customValue
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Custom value to be displayed in the contact information details.
	 * @var string
	 */
	public $customValue;
	/**
	 * The address
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : Street address of the company.
	 * @var PPInvoiceTypeBaseAddress
	 */
	public $address;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param string firstName
	 * @param string lastName
	 * @param string businessName
	 * @param string phone
	 * @param string fax
	 * @param string website
	 * @param string customValue
	 * @param PPInvoiceTypeBaseAddress address
	 * @param DOMDocument any
	 * @return PPInvoiceTypeBusinessInfoType
	 */
	public function __construct($_firstName = null,$_lastName = null,$_businessName = null,$_phone = null,$_fax = null,$_website = null,$_customValue = null,$_address = null,$_any = null)
	{
		parent::__construct(array('firstName'=>$_firstName,'lastName'=>$_lastName,'businessName'=>$_businessName,'phone'=>$_phone,'fax'=>$_fax,'website'=>$_website,'customValue'=>$_customValue,'address'=>$_address,'any'=>$_any));
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
	 * Set businessName
	 * @param string businessName
	 * @return string
	 */
	public function setBusinessName($_businessName)
	{
		return ($this->businessName = $_businessName);
	}
	/**
	 * Get businessName
	 * @return string
	 */
	public function getBusinessName()
	{
		return $this->businessName;
	}
	/**
	 * Set phone
	 * @param string phone
	 * @return string
	 */
	public function setPhone($_phone)
	{
		return ($this->phone = $_phone);
	}
	/**
	 * Get phone
	 * @return string
	 */
	public function getPhone()
	{
		return $this->phone;
	}
	/**
	 * Set fax
	 * @param string fax
	 * @return string
	 */
	public function setFax($_fax)
	{
		return ($this->fax = $_fax);
	}
	/**
	 * Get fax
	 * @return string
	 */
	public function getFax()
	{
		return $this->fax;
	}
	/**
	 * Set website
	 * @param string website
	 * @return string
	 */
	public function setWebsite($_website)
	{
		return ($this->website = $_website);
	}
	/**
	 * Get website
	 * @return string
	 */
	public function getWebsite()
	{
		return $this->website;
	}
	/**
	 * Set customValue
	 * @param string customValue
	 * @return string
	 */
	public function setCustomValue($_customValue)
	{
		return ($this->customValue = $_customValue);
	}
	/**
	 * Get customValue
	 * @return string
	 */
	public function getCustomValue()
	{
		return $this->customValue;
	}
	/**
	 * Set address
	 * @param BaseAddress address
	 * @return BaseAddress
	 */
	public function setAddress($_address)
	{
		return ($this->address = $_address);
	}
	/**
	 * Get address
	 * @return PPInvoiceTypeBaseAddress
	 */
	public function getAddress()
	{
		return $this->address;
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