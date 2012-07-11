<?php
/**
 * Class file for EbayTradingTypeStoreType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeStoreType
 * Documentation : The configuration of an eBay Store.
 * @date 04/07/2012
 */
class EbayTradingTypeStoreType extends EbayTradingWsdlClass
{
	/**
	 * The Name
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Name of the eBay Store. The name is shown at the top of the Store page.
	 * @var string
	 */
	public $Name;
	/**
	 * The URLPath
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The URL path of the Store (58 characters maximum). Only if you are using Chinese characters in the Name property do you need to use this field, such as if you are opening a Store on the Taiwan site. The reason for this is that the URL path is normally derived from the Store name, but it cannot be derived from the name of the Store if it contains Chinese characters because URLs cannot contain Chinese characters.
	 * @var string
	 */
	public $URLPath;
	/**
	 * The URL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The complete URL of the user's Store. This field is only ever returned, and does not need to be explicitly set.
	 * @var anyURI
	 */
	public $URL;
	/**
	 * The SubscriptionLevel
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Subscription level (tier) for the user's eBay Store.
	 * @var EbayTradingTypeStoreSubscriptionLevelCodeType
	 */
	public $SubscriptionLevel;
	/**
	 * The Description
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Store description (300 characters maximum).
	 * @var string
	 */
	public $Description;
	/**
	 * The Logo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Store logo.
	 * @var EbayTradingTypeStoreLogoType
	 */
	public $Logo;
	/**
	 * The Theme
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Store theme.
	 * @var EbayTradingTypeStoreThemeType
	 */
	public $Theme;
	/**
	 * The HeaderStyle
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Style for the Store header.
	 * @var EbayTradingTypeStoreHeaderStyleCodeType
	 */
	public $HeaderStyle;
	/**
	 * The HomePage
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Page to use as the Store's homepage (default is 0). To change the homepage, specify the PageID of one of the Store's custom pages.
	 * @var long
	 */
	public $HomePage;
	/**
	 * The ItemListLayout
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The default layout type to use for the Store items.
	 * @var EbayTradingTypeStoreItemListLayoutCodeType
	 */
	public $ItemListLayout;
	/**
	 * The ItemListSortOrder
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The default sort order to use for the items for sale in the Store.
	 * @var EbayTradingTypeStoreItemListSortOrderCodeType
	 */
	public $ItemListSortOrder;
	/**
	 * The CustomHeaderLayout
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Layout for the Store's custom header.
	 * @var EbayTradingTypeStoreCustomHeaderLayoutCodeType
	 */
	public $CustomHeaderLayout;
	/**
	 * The CustomHeader
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Custom header text for the Store.
	 * @var string
	 */
	public $CustomHeader;
	/**
	 * The ExportListings
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies whether to export the Store listings to comparison shopping websites.
	 * @var boolean
	 */
	public $ExportListings;
	/**
	 * The CustomCategories
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Custom categories for the Store. Deprecated (input ignored) for SetStore with request version 449 or higher. Use SetStoreCategories with request verison 449 or higher to modify store category structures.
	 * @var EbayTradingTypeStoreCustomCategoryArrayType
	 */
	public $CustomCategories;
	/**
	 * The CustomListingHeader
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Custom listing header for the Store.
	 * @var EbayTradingTypeStoreCustomListingHeaderType
	 */
	public $CustomListingHeader;
	/**
	 * The MerchDisplay
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies the chosen customization display scheme for this store's Merch Widgets. See MerchDisplayCodeType for specific values.
	 * @var EbayTradingTypeMerchDisplayCodeType
	 */
	public $MerchDisplay;
	/**
	 * The LastOpenedTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates the time the store was last opened or reopened.
	 * @var dateTime
	 */
	public $LastOpenedTime;
	/**
	 * The TitleWithCompatibility
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A flag indicating if a Compatibility tab exists for the Store item listing. This field is only applicable to Parts & Accessories listings in eBay US Motors. The Compatibility tab will contain vehicles that are compatible with the part in the listing. The seller specifies this information at listing time.
	 * @var boolean
	 */
	public $TitleWithCompatibility;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param string Name
	 * @param string URLPath
	 * @param anyURI URL
	 * @param EbayTradingTypeStoreSubscriptionLevelCodeType SubscriptionLevel
	 * @param string Description
	 * @param EbayTradingTypeStoreLogoType Logo
	 * @param EbayTradingTypeStoreThemeType Theme
	 * @param EbayTradingTypeStoreHeaderStyleCodeType HeaderStyle
	 * @param long HomePage
	 * @param EbayTradingTypeStoreItemListLayoutCodeType ItemListLayout
	 * @param EbayTradingTypeStoreItemListSortOrderCodeType ItemListSortOrder
	 * @param EbayTradingTypeStoreCustomHeaderLayoutCodeType CustomHeaderLayout
	 * @param string CustomHeader
	 * @param boolean ExportListings
	 * @param EbayTradingTypeStoreCustomCategoryArrayType CustomCategories
	 * @param EbayTradingTypeStoreCustomListingHeaderType CustomListingHeader
	 * @param EbayTradingTypeMerchDisplayCodeType MerchDisplay
	 * @param dateTime LastOpenedTime
	 * @param boolean TitleWithCompatibility
	 * @param DOMDocument any
	 * @return EbayTradingTypeStoreType
	 */
	public function __construct($_Name = null,$_URLPath = null,$_URL = null,$_SubscriptionLevel = null,$_Description = null,$_Logo = null,$_Theme = null,$_HeaderStyle = null,$_HomePage = null,$_ItemListLayout = null,$_ItemListSortOrder = null,$_CustomHeaderLayout = null,$_CustomHeader = null,$_ExportListings = null,$_CustomCategories = null,$_CustomListingHeader = null,$_MerchDisplay = null,$_LastOpenedTime = null,$_TitleWithCompatibility = null,$_any = null)
	{
		parent::__construct(array('Name'=>$_Name,'URLPath'=>$_URLPath,'URL'=>$_URL,'SubscriptionLevel'=>$_SubscriptionLevel,'Description'=>$_Description,'Logo'=>$_Logo,'Theme'=>$_Theme,'HeaderStyle'=>$_HeaderStyle,'HomePage'=>$_HomePage,'ItemListLayout'=>$_ItemListLayout,'ItemListSortOrder'=>$_ItemListSortOrder,'CustomHeaderLayout'=>$_CustomHeaderLayout,'CustomHeader'=>$_CustomHeader,'ExportListings'=>$_ExportListings,'CustomCategories'=>$_CustomCategories,'CustomListingHeader'=>$_CustomListingHeader,'MerchDisplay'=>$_MerchDisplay,'LastOpenedTime'=>$_LastOpenedTime,'TitleWithCompatibility'=>$_TitleWithCompatibility,'any'=>$_any));
	}
	/**
	 * Set Name
	 * @param string Name
	 * @return string
	 */
	public function setName($_Name)
	{
		return ($this->Name = $_Name);
	}
	/**
	 * Get Name
	 * @return string
	 */
	public function getName()
	{
		return $this->Name;
	}
	/**
	 * Set URLPath
	 * @param string URLPath
	 * @return string
	 */
	public function setURLPath($_URLPath)
	{
		return ($this->URLPath = $_URLPath);
	}
	/**
	 * Get URLPath
	 * @return string
	 */
	public function getURLPath()
	{
		return $this->URLPath;
	}
	/**
	 * Set URL
	 * @param anyURI URL
	 * @return anyURI
	 */
	public function setURL($_URL)
	{
		return ($this->URL = $_URL);
	}
	/**
	 * Get URL
	 * @return anyURI
	 */
	public function getURL()
	{
		return $this->URL;
	}
	/**
	 * Set SubscriptionLevel
	 * @param StoreSubscriptionLevelCodeType SubscriptionLevel
	 * @return StoreSubscriptionLevelCodeType
	 */
	public function setSubscriptionLevel($_SubscriptionLevel)
	{
		return ($this->SubscriptionLevel = EbayTradingTypeStoreSubscriptionLevelCodeType::valueIsValid($_SubscriptionLevel)?$_SubscriptionLevel:null);
	}
	/**
	 * Get SubscriptionLevel
	 * @return EbayTradingTypeStoreSubscriptionLevelCodeType
	 */
	public function getSubscriptionLevel()
	{
		return $this->SubscriptionLevel;
	}
	/**
	 * Set Description
	 * @param string Description
	 * @return string
	 */
	public function setDescription($_Description)
	{
		return ($this->Description = $_Description);
	}
	/**
	 * Get Description
	 * @return string
	 */
	public function getDescription()
	{
		return $this->Description;
	}
	/**
	 * Set Logo
	 * @param StoreLogoType Logo
	 * @return StoreLogoType
	 */
	public function setLogo($_Logo)
	{
		return ($this->Logo = $_Logo);
	}
	/**
	 * Get Logo
	 * @return EbayTradingTypeStoreLogoType
	 */
	public function getLogo()
	{
		return $this->Logo;
	}
	/**
	 * Set Theme
	 * @param StoreThemeType Theme
	 * @return StoreThemeType
	 */
	public function setTheme($_Theme)
	{
		return ($this->Theme = $_Theme);
	}
	/**
	 * Get Theme
	 * @return EbayTradingTypeStoreThemeType
	 */
	public function getTheme()
	{
		return $this->Theme;
	}
	/**
	 * Set HeaderStyle
	 * @param StoreHeaderStyleCodeType HeaderStyle
	 * @return StoreHeaderStyleCodeType
	 */
	public function setHeaderStyle($_HeaderStyle)
	{
		return ($this->HeaderStyle = EbayTradingTypeStoreHeaderStyleCodeType::valueIsValid($_HeaderStyle)?$_HeaderStyle:null);
	}
	/**
	 * Get HeaderStyle
	 * @return EbayTradingTypeStoreHeaderStyleCodeType
	 */
	public function getHeaderStyle()
	{
		return $this->HeaderStyle;
	}
	/**
	 * Set HomePage
	 * @param long HomePage
	 * @return long
	 */
	public function setHomePage($_HomePage)
	{
		return ($this->HomePage = $_HomePage);
	}
	/**
	 * Get HomePage
	 * @return long
	 */
	public function getHomePage()
	{
		return $this->HomePage;
	}
	/**
	 * Set ItemListLayout
	 * @param StoreItemListLayoutCodeType ItemListLayout
	 * @return StoreItemListLayoutCodeType
	 */
	public function setItemListLayout($_ItemListLayout)
	{
		return ($this->ItemListLayout = EbayTradingTypeStoreItemListLayoutCodeType::valueIsValid($_ItemListLayout)?$_ItemListLayout:null);
	}
	/**
	 * Get ItemListLayout
	 * @return EbayTradingTypeStoreItemListLayoutCodeType
	 */
	public function getItemListLayout()
	{
		return $this->ItemListLayout;
	}
	/**
	 * Set ItemListSortOrder
	 * @param StoreItemListSortOrderCodeType ItemListSortOrder
	 * @return StoreItemListSortOrderCodeType
	 */
	public function setItemListSortOrder($_ItemListSortOrder)
	{
		return ($this->ItemListSortOrder = EbayTradingTypeStoreItemListSortOrderCodeType::valueIsValid($_ItemListSortOrder)?$_ItemListSortOrder:null);
	}
	/**
	 * Get ItemListSortOrder
	 * @return EbayTradingTypeStoreItemListSortOrderCodeType
	 */
	public function getItemListSortOrder()
	{
		return $this->ItemListSortOrder;
	}
	/**
	 * Set CustomHeaderLayout
	 * @param StoreCustomHeaderLayoutCodeType CustomHeaderLayout
	 * @return StoreCustomHeaderLayoutCodeType
	 */
	public function setCustomHeaderLayout($_CustomHeaderLayout)
	{
		return ($this->CustomHeaderLayout = EbayTradingTypeStoreCustomHeaderLayoutCodeType::valueIsValid($_CustomHeaderLayout)?$_CustomHeaderLayout:null);
	}
	/**
	 * Get CustomHeaderLayout
	 * @return EbayTradingTypeStoreCustomHeaderLayoutCodeType
	 */
	public function getCustomHeaderLayout()
	{
		return $this->CustomHeaderLayout;
	}
	/**
	 * Set CustomHeader
	 * @param string CustomHeader
	 * @return string
	 */
	public function setCustomHeader($_CustomHeader)
	{
		return ($this->CustomHeader = $_CustomHeader);
	}
	/**
	 * Get CustomHeader
	 * @return string
	 */
	public function getCustomHeader()
	{
		return $this->CustomHeader;
	}
	/**
	 * Set ExportListings
	 * @param boolean ExportListings
	 * @return boolean
	 */
	public function setExportListings($_ExportListings)
	{
		return ($this->ExportListings = $_ExportListings);
	}
	/**
	 * Get ExportListings
	 * @return boolean
	 */
	public function getExportListings()
	{
		return $this->ExportListings;
	}
	/**
	 * Set CustomCategories
	 * @param StoreCustomCategoryArrayType CustomCategories
	 * @return StoreCustomCategoryArrayType
	 */
	public function setCustomCategories($_CustomCategories)
	{
		return ($this->CustomCategories = $_CustomCategories);
	}
	/**
	 * Get CustomCategories
	 * @return EbayTradingTypeStoreCustomCategoryArrayType
	 */
	public function getCustomCategories()
	{
		return $this->CustomCategories;
	}
	/**
	 * Set CustomListingHeader
	 * @param StoreCustomListingHeaderType CustomListingHeader
	 * @return StoreCustomListingHeaderType
	 */
	public function setCustomListingHeader($_CustomListingHeader)
	{
		return ($this->CustomListingHeader = $_CustomListingHeader);
	}
	/**
	 * Get CustomListingHeader
	 * @return EbayTradingTypeStoreCustomListingHeaderType
	 */
	public function getCustomListingHeader()
	{
		return $this->CustomListingHeader;
	}
	/**
	 * Set MerchDisplay
	 * @param MerchDisplayCodeType MerchDisplay
	 * @return MerchDisplayCodeType
	 */
	public function setMerchDisplay($_MerchDisplay)
	{
		return ($this->MerchDisplay = EbayTradingTypeMerchDisplayCodeType::valueIsValid($_MerchDisplay)?$_MerchDisplay:null);
	}
	/**
	 * Get MerchDisplay
	 * @return EbayTradingTypeMerchDisplayCodeType
	 */
	public function getMerchDisplay()
	{
		return $this->MerchDisplay;
	}
	/**
	 * Set LastOpenedTime
	 * @param dateTime LastOpenedTime
	 * @return dateTime
	 */
	public function setLastOpenedTime($_LastOpenedTime)
	{
		return ($this->LastOpenedTime = $_LastOpenedTime);
	}
	/**
	 * Get LastOpenedTime
	 * @return dateTime
	 */
	public function getLastOpenedTime()
	{
		return $this->LastOpenedTime;
	}
	/**
	 * Set TitleWithCompatibility
	 * @param boolean TitleWithCompatibility
	 * @return boolean
	 */
	public function setTitleWithCompatibility($_TitleWithCompatibility)
	{
		return ($this->TitleWithCompatibility = $_TitleWithCompatibility);
	}
	/**
	 * Get TitleWithCompatibility
	 * @return boolean
	 */
	public function getTitleWithCompatibility()
	{
		return $this->TitleWithCompatibility;
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