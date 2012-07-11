<?php
/**
 * Class file for EbayTradingTypeBusinessSellerDetailsType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeBusinessSellerDetailsType
 * Documentation : Displays the seller's information (in a business card format) as part of the data returned in the GetItem call if the seller's SellerBusinessCodeType is set to 'Commercial'. Note that this option is only available for sites that have Business Seller options enabled.
 * @date 04/07/2012
 */
class EbayTradingTypeBusinessSellerDetailsType extends EbayTradingWsdlClass
{
	/**
	 * The Address
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Displays the Address of the seller (in a business card format) as part of the data returned in the GetItem call if the seller's SellerBusinessCodeType is set to 'Commercial'.
	 * @var EbayTradingTypeAddressType
	 */
	public $Address;
	/**
	 * The Fax
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Displays the fax number of the seller (in a business card format) as part of the data returned in the GetItem call if the seller's SellerBusinessCodeType is set to 'Commercial'.
	 * @var string
	 */
	public $Fax;
	/**
	 * The Email
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Displays the email address of the seller (in a business card format) as part of the data returned in the GetItem call if the seller's SellerBusinessCodeType is set to 'Commercial'.
	 * @var string
	 */
	public $Email;
	/**
	 * The AdditionalContactInformation
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Displays the AdditionalContactInformation of the seller (in a business card format) as part of the data returned in the GetItem call if the seller's SellerBusinessCodeType is set to 'Commercial'.
	 * @var string
	 */
	public $AdditionalContactInformation;
	/**
	 * The TradeRegistrationNumber
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Displays the TradeRegistrationNumber of the seller (in a business card format) as part of the data returned in the GetItem call if the seller's SellerBusinessCodeType is set to 'Commercial'.
	 * @var string
	 */
	public $TradeRegistrationNumber;
	/**
	 * The LegalInvoice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Displays the LegalInvoice of the seller (in a business card format) as part of the data returned in the GetItem call if the seller's SellerBusinessCodeType is set to 'Commercial'.
	 * @var boolean
	 */
	public $LegalInvoice;
	/**
	 * The TermsAndConditions
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Displays the TermsAndConditions of the seller (in a business card format) as part of the data returned in the GetItem call if the seller's SellerBusinessCodeType is set to 'Commercial'.
	 * @var string
	 */
	public $TermsAndConditions;
	/**
	 * The VATDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Displays the VATDetails of the seller (in a business card format) as part of the data returned in the GetItem call if the seller's SellerBusinessCodeType is set to 'Commercial'.
	 * @var EbayTradingTypeVATDetailsType
	 */
	public $VATDetails;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeAddressType Address
	 * @param string Fax
	 * @param string Email
	 * @param string AdditionalContactInformation
	 * @param string TradeRegistrationNumber
	 * @param boolean LegalInvoice
	 * @param string TermsAndConditions
	 * @param EbayTradingTypeVATDetailsType VATDetails
	 * @param DOMDocument any
	 * @return EbayTradingTypeBusinessSellerDetailsType
	 */
	public function __construct($_Address = null,$_Fax = null,$_Email = null,$_AdditionalContactInformation = null,$_TradeRegistrationNumber = null,$_LegalInvoice = null,$_TermsAndConditions = null,$_VATDetails = null,$_any = null)
	{
		parent::__construct(array('Address'=>$_Address,'Fax'=>$_Fax,'Email'=>$_Email,'AdditionalContactInformation'=>$_AdditionalContactInformation,'TradeRegistrationNumber'=>$_TradeRegistrationNumber,'LegalInvoice'=>$_LegalInvoice,'TermsAndConditions'=>$_TermsAndConditions,'VATDetails'=>$_VATDetails,'any'=>$_any));
	}
	/**
	 * Set Address
	 * @param AddressType Address
	 * @return AddressType
	 */
	public function setAddress($_Address)
	{
		return ($this->Address = $_Address);
	}
	/**
	 * Get Address
	 * @return EbayTradingTypeAddressType
	 */
	public function getAddress()
	{
		return $this->Address;
	}
	/**
	 * Set Fax
	 * @param string Fax
	 * @return string
	 */
	public function setFax($_Fax)
	{
		return ($this->Fax = $_Fax);
	}
	/**
	 * Get Fax
	 * @return string
	 */
	public function getFax()
	{
		return $this->Fax;
	}
	/**
	 * Set Email
	 * @param string Email
	 * @return string
	 */
	public function setEmail($_Email)
	{
		return ($this->Email = $_Email);
	}
	/**
	 * Get Email
	 * @return string
	 */
	public function getEmail()
	{
		return $this->Email;
	}
	/**
	 * Set AdditionalContactInformation
	 * @param string AdditionalContactInformation
	 * @return string
	 */
	public function setAdditionalContactInformation($_AdditionalContactInformation)
	{
		return ($this->AdditionalContactInformation = $_AdditionalContactInformation);
	}
	/**
	 * Get AdditionalContactInformation
	 * @return string
	 */
	public function getAdditionalContactInformation()
	{
		return $this->AdditionalContactInformation;
	}
	/**
	 * Set TradeRegistrationNumber
	 * @param string TradeRegistrationNumber
	 * @return string
	 */
	public function setTradeRegistrationNumber($_TradeRegistrationNumber)
	{
		return ($this->TradeRegistrationNumber = $_TradeRegistrationNumber);
	}
	/**
	 * Get TradeRegistrationNumber
	 * @return string
	 */
	public function getTradeRegistrationNumber()
	{
		return $this->TradeRegistrationNumber;
	}
	/**
	 * Set LegalInvoice
	 * @param boolean LegalInvoice
	 * @return boolean
	 */
	public function setLegalInvoice($_LegalInvoice)
	{
		return ($this->LegalInvoice = $_LegalInvoice);
	}
	/**
	 * Get LegalInvoice
	 * @return boolean
	 */
	public function getLegalInvoice()
	{
		return $this->LegalInvoice;
	}
	/**
	 * Set TermsAndConditions
	 * @param string TermsAndConditions
	 * @return string
	 */
	public function setTermsAndConditions($_TermsAndConditions)
	{
		return ($this->TermsAndConditions = $_TermsAndConditions);
	}
	/**
	 * Get TermsAndConditions
	 * @return string
	 */
	public function getTermsAndConditions()
	{
		return $this->TermsAndConditions;
	}
	/**
	 * Set VATDetails
	 * @param VATDetailsType VATDetails
	 * @return VATDetailsType
	 */
	public function setVATDetails($_VATDetails)
	{
		return ($this->VATDetails = $_VATDetails);
	}
	/**
	 * Get VATDetails
	 * @return EbayTradingTypeVATDetailsType
	 */
	public function getVATDetails()
	{
		return $this->VATDetails;
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