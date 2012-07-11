<?php
/**
 * Class file for EbayTradingTypeGetStoreOptionsResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetStoreOptionsResponseType
 * Documentation : Contains the current list of options for Store configurations.
 * @date 04/07/2012
 */
class EbayTradingTypeGetStoreOptionsResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The BasicThemeArray
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The current set of basic themes. Each basic theme definition specifies a valid color scheme for the theme.
	 * @var EbayTradingTypeStoreThemeArrayType
	 */
	public $BasicThemeArray;
	/**
	 * The AdvancedThemeArray
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The current set of advances themes. Unlike basic themes, you can use any color scheme with an advanced theme. These themes are suitable for more advanced customization.
	 * @var EbayTradingTypeStoreThemeArrayType
	 */
	public $AdvancedThemeArray;
	/**
	 * The LogoArray
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The current set of Store logos. These logos are used in the Store header.
	 * @var EbayTradingTypeStoreLogoArrayType
	 */
	public $LogoArray;
	/**
	 * The SubscriptionArray
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The current set of eBay Store subscription tiers and corresponding subscription prices.
	 * @var EbayTradingTypeStoreSubscriptionArrayType
	 */
	public $SubscriptionArray;
	/**
	 * The MaxCategories
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The maximum number of categories in this store.
	 * @var int
	 */
	public $MaxCategories;
	/**
	 * The MaxCategoryLevels
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The maximum number of category levels in this store.
	 * @var int
	 */
	public $MaxCategoryLevels;
	/**
	 * Constructor
	 * @param EbayTradingTypeStoreThemeArrayType BasicThemeArray
	 * @param EbayTradingTypeStoreThemeArrayType AdvancedThemeArray
	 * @param EbayTradingTypeStoreLogoArrayType LogoArray
	 * @param EbayTradingTypeStoreSubscriptionArrayType SubscriptionArray
	 * @param int MaxCategories
	 * @param int MaxCategoryLevels
	 * @return EbayTradingTypeGetStoreOptionsResponseType
	 */
	public function __construct($_BasicThemeArray = null,$_AdvancedThemeArray = null,$_LogoArray = null,$_SubscriptionArray = null,$_MaxCategories = null,$_MaxCategoryLevels = null)
	{
		EbayTradingWsdlClass::__construct(array('BasicThemeArray'=>$_BasicThemeArray,'AdvancedThemeArray'=>$_AdvancedThemeArray,'LogoArray'=>$_LogoArray,'SubscriptionArray'=>$_SubscriptionArray,'MaxCategories'=>$_MaxCategories,'MaxCategoryLevels'=>$_MaxCategoryLevels));
	}
	/**
	 * Set BasicThemeArray
	 * @param StoreThemeArrayType BasicThemeArray
	 * @return StoreThemeArrayType
	 */
	public function setBasicThemeArray($_BasicThemeArray)
	{
		return ($this->BasicThemeArray = $_BasicThemeArray);
	}
	/**
	 * Get BasicThemeArray
	 * @return EbayTradingTypeStoreThemeArrayType
	 */
	public function getBasicThemeArray()
	{
		return $this->BasicThemeArray;
	}
	/**
	 * Set AdvancedThemeArray
	 * @param StoreThemeArrayType AdvancedThemeArray
	 * @return StoreThemeArrayType
	 */
	public function setAdvancedThemeArray($_AdvancedThemeArray)
	{
		return ($this->AdvancedThemeArray = $_AdvancedThemeArray);
	}
	/**
	 * Get AdvancedThemeArray
	 * @return EbayTradingTypeStoreThemeArrayType
	 */
	public function getAdvancedThemeArray()
	{
		return $this->AdvancedThemeArray;
	}
	/**
	 * Set LogoArray
	 * @param StoreLogoArrayType LogoArray
	 * @return StoreLogoArrayType
	 */
	public function setLogoArray($_LogoArray)
	{
		return ($this->LogoArray = $_LogoArray);
	}
	/**
	 * Get LogoArray
	 * @return EbayTradingTypeStoreLogoArrayType
	 */
	public function getLogoArray()
	{
		return $this->LogoArray;
	}
	/**
	 * Set SubscriptionArray
	 * @param StoreSubscriptionArrayType SubscriptionArray
	 * @return StoreSubscriptionArrayType
	 */
	public function setSubscriptionArray($_SubscriptionArray)
	{
		return ($this->SubscriptionArray = $_SubscriptionArray);
	}
	/**
	 * Get SubscriptionArray
	 * @return EbayTradingTypeStoreSubscriptionArrayType
	 */
	public function getSubscriptionArray()
	{
		return $this->SubscriptionArray;
	}
	/**
	 * Set MaxCategories
	 * @param int MaxCategories
	 * @return int
	 */
	public function setMaxCategories($_MaxCategories)
	{
		return ($this->MaxCategories = $_MaxCategories);
	}
	/**
	 * Get MaxCategories
	 * @return int
	 */
	public function getMaxCategories()
	{
		return $this->MaxCategories;
	}
	/**
	 * Set MaxCategoryLevels
	 * @param int MaxCategoryLevels
	 * @return int
	 */
	public function setMaxCategoryLevels($_MaxCategoryLevels)
	{
		return ($this->MaxCategoryLevels = $_MaxCategoryLevels);
	}
	/**
	 * Get MaxCategoryLevels
	 * @return int
	 */
	public function getMaxCategoryLevels()
	{
		return $this->MaxCategoryLevels;
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