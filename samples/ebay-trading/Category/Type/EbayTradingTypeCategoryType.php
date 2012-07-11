<?php
/**
 * Class file for EbayTradingTypeCategoryType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeCategoryType
 * Documentation : Container for data on one listing category.
 * @date 04/07/2012
 */
class EbayTradingTypeCategoryType extends EbayTradingWsdlClass
{
	/**
	 * The BestOfferEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If true, the category supports best offers. If not present, the category does not support best offers. Will not be returned if false.
	 * @var boolean
	 */
	public $BestOfferEnabled;
	/**
	 * The AutoPayEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If true, indicates that the category supports immediate payment. If not present, the category does not support immediate payment. Will not be returned if false.
	 * @var boolean
	 */
	public $AutoPayEnabled;
	/**
	 * The B2BVATEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If true, the category supports business-to-business (B2B) VAT listings. Applicable to the eBay Germany (DE), Austria (AT), and Switzerland CH) sites only. If not present, the category does not support this feature. Will not be returned if false.
	 * @var boolean
	 */
	public $B2BVATEnabled;
	/**
	 * The CatalogEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If true, the category is associated with catalog content and the corresponding catalog is identified by the characteristic set ID. See CharacteristicsSets. As the Pre-filled Item Information feature uses the Item Specifics feature, the set of catalog-enabled categories is a subset of the categories that are mapped to characteristic sets. Not returned if false.
	 * @var boolean
	 */
	public $CatalogEnabled;
	/**
	 * The CategoryID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Distinct numeric ID for a category on eBay. In GetItem and related calls, see CategoryName for the text name of the category. Use GetCategories to look up the category parent ID.<br> <br> For GetPopularKeywords, -1 represents the root category.<br> <br> For GetItem, Half.com items return the Half.com category ID in PrimaryCategory. This ID is not necessarily returned in GetCategories.
	 * @var string
	 */
	public $CategoryID;
	/**
	 * The CategoryLevel
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The level where the category fits in the site's category hierarchy. For example, if this field has a value of 2, then the category is two levels below the root category in the site's category hierarchy.
	 * @var int
	 */
	public $CategoryLevel;
	/**
	 * The CategoryName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Display name of the category as it would appear on the eBay Web site. In GetItem, this is a fully qualified category name (e.g., Collectibles:Decorative Collectibles:Hummel, Goebel).<br> <br> In GetItem, always returned for eBay.com listings. Not returned in PrimaryCategory for Half.com listings.
	 * @var string
	 */
	public $CategoryName;
	/**
	 * The CategoryParentID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Category ID identifying a category that is an ancestor of the category indicated in CategoryID. For GetCategories, returns the same value as CategoryID if the CategoryLevel is 1. For GetSuggestedCategories, multiple CategoryParentID fields can be returned in sequence, starting with the root category and ending with the category that is the direct parent of the category specified in CategoryID. Use these parent fields and the CategoryID field to build the fully qualified category browse path or "breadcrumbs" (e.g., 58058:3516:3517). For GetPopularKeywords, -1 represents the root category.
	 * @var string
	 */
	public $CategoryParentID;
	/**
	 * The CategoryParentName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Display name of the category indicated in CategoryParentID. For GetSuggestedCategories, multiple CategoryParentName fields can be returned in sequence, starting with the root category and ending with the category that is the direct parent of the category specified in CategoryName. Use these parent fields and the CategoryName field to build the fully qualified category browse path or "breadcrumbs" (e.g., Computers & Networking > Technology Books > Certification).
	 * @var string
	 */
	public $CategoryParentName;
	/**
	 * The ProductSearchPageAvailable
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Returned from GetCategory2CS calls. Supports listing with Pre-filled Item Information. If the category supports single-attribute search, this field returns a value of true. Otherwise this field not returned or returned as false.
	 * @var boolean
	 */
	public $ProductSearchPageAvailable;
	/**
	 * The ProductFinderIDs
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : The category supports listing with Pre-filled Item Information. Specifies the buy-side and/or sell-side product finder IDs associated with this category, if any.
	 * @var EbayTradingTypeExtendedProductFinderIDType
	 */
	public $ProductFinderIDs;
	/**
	 * The CharacteristicsSets
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Returned from GetCategory2CS calls. A list of one or more characteristics sets mapped to the category. Use this information when working with Item Specifics (Attributes) and Pre-filled Item Information (Catalogs) functionality. Output only.
	 * @var EbayTradingTypeCharacteristicsSetType
	 */
	public $CharacteristicsSets;
	/**
	 * The Expired
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If true, indicates a category that has expired and to which items may not be listed. Will not be returned if false.
	 * @var boolean
	 */
	public $Expired;
	/**
	 * The IntlAutosFixedCat
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If true, indicates that the category is a fixed-fee category. Use this information to identify categories are not eligible for eBay Stores Inventory format listings. You cannot list eBay Store Inventory format listings in fixed-fee categories on international sites. Output only. Will not be returned if false.
	 * @var boolean
	 */
	public $IntlAutosFixedCat;
	/**
	 * The LeafCategory
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If true, indicates that the category indicated in CategoryID is a leaf category, in which items may be listed (if the category is not also expired or virtual). Will not be returned if false.
	 * @var boolean
	 */
	public $LeafCategory;
	/**
	 * The Virtual
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If true, indicates the category indicated in CategoryID is a virtual category, to which items may not be listed. Will not be returned if false.
	 * @var boolean
	 */
	public $Virtual;
	/**
	 * The NumOfItems
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The total quantity of matching items in the category. In the GetSearchResults response, matching categories at the same level (i.e., sibling categories) are sorted by this value. That is, if the request specifies that fewer categories or subcategories should be returned, the ones with the most matching items are returned first. See the Developer's guide for more information.
	 * @var int
	 */
	public $NumOfItems;
	/**
	 * The SellerGuaranteeEligible
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether this category is eligible for Motors Seller Guarantee program. This tag is emitted for eligible categories only on the eBay Motors site. Will not be returned if false.
	 * @var boolean
	 */
	public $SellerGuaranteeEligible;
	/**
	 * The ORPA
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether the category (and its subcategories) allows or disallows listing with a reserve price, depending on the prevailing site configuration indicated by ReservePriceAllowed. ORPA (override reserve price allowed) indicates when the category is an exception to the site's ReservePriceAllowed policy.<br> <br> If ORPA is true, the category overrides (toggles or reverses) the site's ReservePriceAllowed setting. In other words:<br> - If ReservePriceAllowed is true, reserve price is not allowed in this category.<br> - If ReservePriceAllowed is false, reserve price is allowed in this category.<br><br> If ORPA is not present, there is no override. That is, the category's setting is the same as the site's ReservePriceAllowed setting.<br> <br> This field will not be returned in the response if false. This toggling logic is designed to reduce the size of the GetCategories response by only returning ORPA when the category's policy is different from the site's policy. (If ORPA is true for a category, you can assume its subcategories inherit the same setting unless otherwise specified.)
	 * @var boolean
	 */
	public $ORPA;
	/**
	 * The ORRA
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether the category (and its subcategories) allows or disallows reducing a listing's reserve price, depending on the prevailing site configuration indicated by ReduceReserveAllowed. ORRA (override reduce reserve allowed) indicates when the category is an exception to the site's ReduceReserveAllowed policy.<br><br> If ORRA is true, the category overrides (toggles or reverses) the site's ReduceReserveAllowed setting. In other words:<br> - If ReduceReserveAllowed is true, reserve price reduction is not allowed in this category.<br> - If ReduceReserveAllowed is false (because it is not present in the response), reserve price reduction is allowed in this category.<br><br> If ORRA is not present, there is no override. Will not be returned in the response if false. That is, the category's setting is the same as the site's ReduceReserveAllowed setting.<br> <br> This toggling logic is designed to reduce the size of the GetCategories response by only returning ORRA when the category's policy is different from the site's policy. (If ORRA is true for a category, you can assume its subcategories inherit the same setting unless otherwise specified.)
	 * @var boolean
	 */
	public $ORRA;
	/**
	 * The LSD
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Item.LotSize is not permitted when you list in this category. If true, indicates that lot sizes are disabled in the specified category. Will not be returned if false.
	 * @var boolean
	 */
	public $LSD;
	/**
	 * The Keywords
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The list of keywords returned by GetPopularKeywords.
	 * @var string
	 */
	public $Keywords;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param boolean BestOfferEnabled
	 * @param boolean AutoPayEnabled
	 * @param boolean B2BVATEnabled
	 * @param boolean CatalogEnabled
	 * @param string CategoryID
	 * @param int CategoryLevel
	 * @param string CategoryName
	 * @param string CategoryParentID
	 * @param string CategoryParentName
	 * @param boolean ProductSearchPageAvailable
	 * @param EbayTradingTypeExtendedProductFinderIDType ProductFinderIDs
	 * @param EbayTradingTypeCharacteristicsSetType CharacteristicsSets
	 * @param boolean Expired
	 * @param boolean IntlAutosFixedCat
	 * @param boolean LeafCategory
	 * @param boolean Virtual
	 * @param int NumOfItems
	 * @param boolean SellerGuaranteeEligible
	 * @param boolean ORPA
	 * @param boolean ORRA
	 * @param boolean LSD
	 * @param string Keywords
	 * @param DOMDocument any
	 * @return EbayTradingTypeCategoryType
	 */
	public function __construct($_BestOfferEnabled = null,$_AutoPayEnabled = null,$_B2BVATEnabled = null,$_CatalogEnabled = null,$_CategoryID = null,$_CategoryLevel = null,$_CategoryName = null,$_CategoryParentID = null,$_CategoryParentName = null,$_ProductSearchPageAvailable = null,$_ProductFinderIDs = null,$_CharacteristicsSets = null,$_Expired = null,$_IntlAutosFixedCat = null,$_LeafCategory = null,$_Virtual = null,$_NumOfItems = null,$_SellerGuaranteeEligible = null,$_ORPA = null,$_ORRA = null,$_LSD = null,$_Keywords = null,$_any = null)
	{
		parent::__construct(array('BestOfferEnabled'=>$_BestOfferEnabled,'AutoPayEnabled'=>$_AutoPayEnabled,'B2BVATEnabled'=>$_B2BVATEnabled,'CatalogEnabled'=>$_CatalogEnabled,'CategoryID'=>$_CategoryID,'CategoryLevel'=>$_CategoryLevel,'CategoryName'=>$_CategoryName,'CategoryParentID'=>$_CategoryParentID,'CategoryParentName'=>$_CategoryParentName,'ProductSearchPageAvailable'=>$_ProductSearchPageAvailable,'ProductFinderIDs'=>$_ProductFinderIDs,'CharacteristicsSets'=>$_CharacteristicsSets,'Expired'=>$_Expired,'IntlAutosFixedCat'=>$_IntlAutosFixedCat,'LeafCategory'=>$_LeafCategory,'Virtual'=>$_Virtual,'NumOfItems'=>$_NumOfItems,'SellerGuaranteeEligible'=>$_SellerGuaranteeEligible,'ORPA'=>$_ORPA,'ORRA'=>$_ORRA,'LSD'=>$_LSD,'Keywords'=>$_Keywords,'any'=>$_any));
	}
	/**
	 * Set BestOfferEnabled
	 * @param boolean BestOfferEnabled
	 * @return boolean
	 */
	public function setBestOfferEnabled($_BestOfferEnabled)
	{
		return ($this->BestOfferEnabled = $_BestOfferEnabled);
	}
	/**
	 * Get BestOfferEnabled
	 * @return boolean
	 */
	public function getBestOfferEnabled()
	{
		return $this->BestOfferEnabled;
	}
	/**
	 * Set AutoPayEnabled
	 * @param boolean AutoPayEnabled
	 * @return boolean
	 */
	public function setAutoPayEnabled($_AutoPayEnabled)
	{
		return ($this->AutoPayEnabled = $_AutoPayEnabled);
	}
	/**
	 * Get AutoPayEnabled
	 * @return boolean
	 */
	public function getAutoPayEnabled()
	{
		return $this->AutoPayEnabled;
	}
	/**
	 * Set B2BVATEnabled
	 * @param boolean B2BVATEnabled
	 * @return boolean
	 */
	public function setB2BVATEnabled($_B2BVATEnabled)
	{
		return ($this->B2BVATEnabled = $_B2BVATEnabled);
	}
	/**
	 * Get B2BVATEnabled
	 * @return boolean
	 */
	public function getB2BVATEnabled()
	{
		return $this->B2BVATEnabled;
	}
	/**
	 * Set CatalogEnabled
	 * @param boolean CatalogEnabled
	 * @return boolean
	 */
	public function setCatalogEnabled($_CatalogEnabled)
	{
		return ($this->CatalogEnabled = $_CatalogEnabled);
	}
	/**
	 * Get CatalogEnabled
	 * @return boolean
	 */
	public function getCatalogEnabled()
	{
		return $this->CatalogEnabled;
	}
	/**
	 * Set CategoryID
	 * @param string CategoryID
	 * @return string
	 */
	public function setCategoryID($_CategoryID)
	{
		return ($this->CategoryID = $_CategoryID);
	}
	/**
	 * Get CategoryID
	 * @return string
	 */
	public function getCategoryID()
	{
		return $this->CategoryID;
	}
	/**
	 * Set CategoryLevel
	 * @param int CategoryLevel
	 * @return int
	 */
	public function setCategoryLevel($_CategoryLevel)
	{
		return ($this->CategoryLevel = $_CategoryLevel);
	}
	/**
	 * Get CategoryLevel
	 * @return int
	 */
	public function getCategoryLevel()
	{
		return $this->CategoryLevel;
	}
	/**
	 * Set CategoryName
	 * @param string CategoryName
	 * @return string
	 */
	public function setCategoryName($_CategoryName)
	{
		return ($this->CategoryName = $_CategoryName);
	}
	/**
	 * Get CategoryName
	 * @return string
	 */
	public function getCategoryName()
	{
		return $this->CategoryName;
	}
	/**
	 * Set CategoryParentID
	 * @param string CategoryParentID
	 * @return string
	 */
	public function setCategoryParentID($_CategoryParentID)
	{
		return ($this->CategoryParentID = $_CategoryParentID);
	}
	/**
	 * Get CategoryParentID
	 * @return string
	 */
	public function getCategoryParentID()
	{
		return $this->CategoryParentID;
	}
	/**
	 * Set CategoryParentName
	 * @param string CategoryParentName
	 * @return string
	 */
	public function setCategoryParentName($_CategoryParentName)
	{
		return ($this->CategoryParentName = $_CategoryParentName);
	}
	/**
	 * Get CategoryParentName
	 * @return string
	 */
	public function getCategoryParentName()
	{
		return $this->CategoryParentName;
	}
	/**
	 * Set ProductSearchPageAvailable
	 * @param boolean ProductSearchPageAvailable
	 * @return boolean
	 */
	public function setProductSearchPageAvailable($_ProductSearchPageAvailable)
	{
		return ($this->ProductSearchPageAvailable = $_ProductSearchPageAvailable);
	}
	/**
	 * Get ProductSearchPageAvailable
	 * @return boolean
	 */
	public function getProductSearchPageAvailable()
	{
		return $this->ProductSearchPageAvailable;
	}
	/**
	 * Set ProductFinderIDs
	 * @param ExtendedProductFinderIDType ProductFinderIDs
	 * @return ExtendedProductFinderIDType
	 */
	public function setProductFinderIDs($_ProductFinderIDs)
	{
		return ($this->ProductFinderIDs = $_ProductFinderIDs);
	}
	/**
	 * Get ProductFinderIDs
	 * @return EbayTradingTypeExtendedProductFinderIDType
	 */
	public function getProductFinderIDs()
	{
		return $this->ProductFinderIDs;
	}
	/**
	 * Set CharacteristicsSets
	 * @param CharacteristicsSetType CharacteristicsSets
	 * @return CharacteristicsSetType
	 */
	public function setCharacteristicsSets($_CharacteristicsSets)
	{
		return ($this->CharacteristicsSets = $_CharacteristicsSets);
	}
	/**
	 * Get CharacteristicsSets
	 * @return EbayTradingTypeCharacteristicsSetType
	 */
	public function getCharacteristicsSets()
	{
		return $this->CharacteristicsSets;
	}
	/**
	 * Set Expired
	 * @param boolean Expired
	 * @return boolean
	 */
	public function setExpired($_Expired)
	{
		return ($this->Expired = $_Expired);
	}
	/**
	 * Get Expired
	 * @return boolean
	 */
	public function getExpired()
	{
		return $this->Expired;
	}
	/**
	 * Set IntlAutosFixedCat
	 * @param boolean IntlAutosFixedCat
	 * @return boolean
	 */
	public function setIntlAutosFixedCat($_IntlAutosFixedCat)
	{
		return ($this->IntlAutosFixedCat = $_IntlAutosFixedCat);
	}
	/**
	 * Get IntlAutosFixedCat
	 * @return boolean
	 */
	public function getIntlAutosFixedCat()
	{
		return $this->IntlAutosFixedCat;
	}
	/**
	 * Set LeafCategory
	 * @param boolean LeafCategory
	 * @return boolean
	 */
	public function setLeafCategory($_LeafCategory)
	{
		return ($this->LeafCategory = $_LeafCategory);
	}
	/**
	 * Get LeafCategory
	 * @return boolean
	 */
	public function getLeafCategory()
	{
		return $this->LeafCategory;
	}
	/**
	 * Set Virtual
	 * @param boolean Virtual
	 * @return boolean
	 */
	public function setVirtual($_Virtual)
	{
		return ($this->Virtual = $_Virtual);
	}
	/**
	 * Get Virtual
	 * @return boolean
	 */
	public function getVirtual()
	{
		return $this->Virtual;
	}
	/**
	 * Set NumOfItems
	 * @param int NumOfItems
	 * @return int
	 */
	public function setNumOfItems($_NumOfItems)
	{
		return ($this->NumOfItems = $_NumOfItems);
	}
	/**
	 * Get NumOfItems
	 * @return int
	 */
	public function getNumOfItems()
	{
		return $this->NumOfItems;
	}
	/**
	 * Set SellerGuaranteeEligible
	 * @param boolean SellerGuaranteeEligible
	 * @return boolean
	 */
	public function setSellerGuaranteeEligible($_SellerGuaranteeEligible)
	{
		return ($this->SellerGuaranteeEligible = $_SellerGuaranteeEligible);
	}
	/**
	 * Get SellerGuaranteeEligible
	 * @return boolean
	 */
	public function getSellerGuaranteeEligible()
	{
		return $this->SellerGuaranteeEligible;
	}
	/**
	 * Set ORPA
	 * @param boolean ORPA
	 * @return boolean
	 */
	public function setORPA($_ORPA)
	{
		return ($this->ORPA = $_ORPA);
	}
	/**
	 * Get ORPA
	 * @return boolean
	 */
	public function getORPA()
	{
		return $this->ORPA;
	}
	/**
	 * Set ORRA
	 * @param boolean ORRA
	 * @return boolean
	 */
	public function setORRA($_ORRA)
	{
		return ($this->ORRA = $_ORRA);
	}
	/**
	 * Get ORRA
	 * @return boolean
	 */
	public function getORRA()
	{
		return $this->ORRA;
	}
	/**
	 * Set LSD
	 * @param boolean LSD
	 * @return boolean
	 */
	public function setLSD($_LSD)
	{
		return ($this->LSD = $_LSD);
	}
	/**
	 * Get LSD
	 * @return boolean
	 */
	public function getLSD()
	{
		return $this->LSD;
	}
	/**
	 * Set Keywords
	 * @param string Keywords
	 * @return string
	 */
	public function setKeywords($_Keywords)
	{
		return ($this->Keywords = $_Keywords);
	}
	/**
	 * Get Keywords
	 * @return string
	 */
	public function getKeywords()
	{
		return $this->Keywords;
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