<?php
/**
 * Class file for EbayShoppingTypeVATDetailsType
 * @date 05/07/2012
 */
/**
 * Class EbayShoppingTypeVATDetailsType
 * Documentation : Container for eBay's Business User features. A business seller can choose to offer an item exclusively to bidders and buyers that also represent businesses. Only applicable when the item is listed in a B2B-enabled category. Currently, the eBay Germany (DE), Austria (AT), and Switzerland (CH) sites support B2B business features.
 * @date 05/07/2012
 */
class EbayShoppingTypeVATDetailsType extends EbayShoppingWsdlClass
{
	/**
	 * The BusinessSeller
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If true, this indicates that the seller is a business user and intends to use listing features that are offered to business users only. Applicable only to business sellers residing in Germany, Austria, or Switzerland who are listing in a B2B VAT- enabled category on the eBay Germany (DE), Austria (AT), or Switzerland (CH) sites. The seller must have a valid VAT ID registered with eBay. This must be set to true if RestrictedToBusiness is true. It has no effect (and it's not returned) if RestrictedToBusiness is false. If an item was not qualified as a business item when originally listed, but meets the conditions for business items when the item is revised or relisted, the seller can convert the item to a business item by specifying the appropriate VAT details. See the eBay Web Services guide for more information and additional rules.
	 * @var boolean
	 */
	public $BusinessSeller;
	/**
	 * The RestrictedToBusiness
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If true, this indicates that the seller elects to offer the item exclusively to business users. If false (or not returned), this indicates that the seller elects to offer the item to all users. Applicable only to business sellers residing in Germany, Austria, or Switzerland who are listing in a B2B VAT-enabled category on the eBay Germany (DE), Austria (AT), or Switzerland (CH) sites. If this argument is true, the seller must have a valid VAT-ID registered with eBay, and BusinessSeller must also be true.
	 * @var boolean
	 */
	public $RestrictedToBusiness;
	/**
	 * The VATPercent
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : VAT rate for the item, if any. When the VATPercent is specified, the item's VAT information appears on the item's listing page. In addition, the seller can choose to print an invoice that includes the item's net price, VAT percent, VAT amount, and total price. Since VAT rates vary depending on the item and on the user's country of residence, a seller is responsible for entering the correct VAT rate; it is not calculated by eBay. To specify a VATPercent, a seller must have a VAT-ID registered with eBay and must be listing the item on a VAT-enabled site. Max applicable length is 6 characters, including the decimal (e.g., 12.345). The scale is 3 decimal places. (If you pass in 12.3456, eBay may round up the value to 12.346.) Note: The View Item page may display the precision to 2 decimal places with no trailing zeros. However, the full value you send in is stored.
	 * @var float
	 */
	public $VATPercent;
	/**
	 * The VATSite
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Displays the VatSite Id of the seller (in a business card format) as part of the data returned in GetSingleItem call if the seller's SellerBusinessCodeType is set to 'Commercial'.
	 * @var string
	 */
	public $VATSite;
	/**
	 * The VATID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Displays the VatSite Id of the seller (in a business card format) as part of the data returned in the GetSingleItem call if the seller's SellerBusinessCodeType is set to 'Commercial'.
	 * @var string
	 */
	public $VATID;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param boolean BusinessSeller
	 * @param boolean RestrictedToBusiness
	 * @param float VATPercent
	 * @param string VATSite
	 * @param string VATID
	 * @param DOMDocument any
	 * @return EbayShoppingTypeVATDetailsType
	 */
	public function __construct($_BusinessSeller = null,$_RestrictedToBusiness = null,$_VATPercent = null,$_VATSite = null,$_VATID = null,$_any = null)
	{
		parent::__construct(array('BusinessSeller'=>$_BusinessSeller,'RestrictedToBusiness'=>$_RestrictedToBusiness,'VATPercent'=>$_VATPercent,'VATSite'=>$_VATSite,'VATID'=>$_VATID,'any'=>$_any));
	}
	/**
	 * Set BusinessSeller
	 * @param boolean BusinessSeller
	 * @return boolean
	 */
	public function setBusinessSeller($_BusinessSeller)
	{
		return ($this->BusinessSeller = $_BusinessSeller);
	}
	/**
	 * Get BusinessSeller
	 * @return boolean
	 */
	public function getBusinessSeller()
	{
		return $this->BusinessSeller;
	}
	/**
	 * Set RestrictedToBusiness
	 * @param boolean RestrictedToBusiness
	 * @return boolean
	 */
	public function setRestrictedToBusiness($_RestrictedToBusiness)
	{
		return ($this->RestrictedToBusiness = $_RestrictedToBusiness);
	}
	/**
	 * Get RestrictedToBusiness
	 * @return boolean
	 */
	public function getRestrictedToBusiness()
	{
		return $this->RestrictedToBusiness;
	}
	/**
	 * Set VATPercent
	 * @param float VATPercent
	 * @return float
	 */
	public function setVATPercent($_VATPercent)
	{
		return ($this->VATPercent = $_VATPercent);
	}
	/**
	 * Get VATPercent
	 * @return float
	 */
	public function getVATPercent()
	{
		return $this->VATPercent;
	}
	/**
	 * Set VATSite
	 * @param string VATSite
	 * @return string
	 */
	public function setVATSite($_VATSite)
	{
		return ($this->VATSite = $_VATSite);
	}
	/**
	 * Get VATSite
	 * @return string
	 */
	public function getVATSite()
	{
		return $this->VATSite;
	}
	/**
	 * Set VATID
	 * @param string VATID
	 * @return string
	 */
	public function setVATID($_VATID)
	{
		return ($this->VATID = $_VATID);
	}
	/**
	 * Get VATID
	 * @return string
	 */
	public function getVATID()
	{
		return $this->VATID;
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