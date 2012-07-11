<?php
/**
 * Class file for EbayTradingTypeCrossPromotionPreferencesType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeCrossPromotionPreferencesType
 * Documentation : Contains preferences describing how items similar to the one the user is presently viewing are promoted.
 * @date 04/07/2012
 */
class EbayTradingTypeCrossPromotionPreferencesType extends EbayTradingWsdlClass
{
	/**
	 * The CrossPromotionEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : (For eBay store owners only) Specifies whether cross-promotions are enabled for the seller's listings.
	 * @var boolean
	 */
	public $CrossPromotionEnabled;
	/**
	 * The CrossSellItemFormatSortFilter
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : (For eBay store owners only) Specifies which items should be shown in cross-sell promotions (such as Buy It Now or Store Inventory items) and in which sequence.
	 * @var EbayTradingTypeItemFormatSortFilterCodeType
	 */
	public $CrossSellItemFormatSortFilter;
	/**
	 * The CrossSellGallerySortFilter
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : (For eBay store owners only) Specifies whether to display only items with gallery images and whether they should precede other items in cross-sell promotions.
	 * @var EbayTradingTypeGallerySortFilterCodeType
	 */
	public $CrossSellGallerySortFilter;
	/**
	 * The CrossSellItemSortFilter
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : (For eBay store owners only) Specifies how to sort items displayed in a cross-sell promotion.
	 * @var EbayTradingTypeItemSortFilterCodeType
	 */
	public $CrossSellItemSortFilter;
	/**
	 * The UpSellItemFormatSortFilter
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : (For eBay store owners only) Specifies which items (such as Buy It Now or Store Inventory items) should be shown in upsell promotions and in which sequence.
	 * @var EbayTradingTypeItemFormatSortFilterCodeType
	 */
	public $UpSellItemFormatSortFilter;
	/**
	 * The UpSellGallerySortFilter
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : (For eBay store owners only) Specifies whether to display only items with gallery images in upsell promotions and whether they should precede other items.
	 * @var EbayTradingTypeGallerySortFilterCodeType
	 */
	public $UpSellGallerySortFilter;
	/**
	 * The UpSellItemSortFilter
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : (For eBay store owners only) Specifies how to sort items used in an upsell promotion.
	 * @var EbayTradingTypeItemSortFilterCodeType
	 */
	public $UpSellItemSortFilter;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param boolean CrossPromotionEnabled
	 * @param EbayTradingTypeItemFormatSortFilterCodeType CrossSellItemFormatSortFilter
	 * @param EbayTradingTypeGallerySortFilterCodeType CrossSellGallerySortFilter
	 * @param EbayTradingTypeItemSortFilterCodeType CrossSellItemSortFilter
	 * @param EbayTradingTypeItemFormatSortFilterCodeType UpSellItemFormatSortFilter
	 * @param EbayTradingTypeGallerySortFilterCodeType UpSellGallerySortFilter
	 * @param EbayTradingTypeItemSortFilterCodeType UpSellItemSortFilter
	 * @param DOMDocument any
	 * @return EbayTradingTypeCrossPromotionPreferencesType
	 */
	public function __construct($_CrossPromotionEnabled = null,$_CrossSellItemFormatSortFilter = null,$_CrossSellGallerySortFilter = null,$_CrossSellItemSortFilter = null,$_UpSellItemFormatSortFilter = null,$_UpSellGallerySortFilter = null,$_UpSellItemSortFilter = null,$_any = null)
	{
		parent::__construct(array('CrossPromotionEnabled'=>$_CrossPromotionEnabled,'CrossSellItemFormatSortFilter'=>$_CrossSellItemFormatSortFilter,'CrossSellGallerySortFilter'=>$_CrossSellGallerySortFilter,'CrossSellItemSortFilter'=>$_CrossSellItemSortFilter,'UpSellItemFormatSortFilter'=>$_UpSellItemFormatSortFilter,'UpSellGallerySortFilter'=>$_UpSellGallerySortFilter,'UpSellItemSortFilter'=>$_UpSellItemSortFilter,'any'=>$_any));
	}
	/**
	 * Set CrossPromotionEnabled
	 * @param boolean CrossPromotionEnabled
	 * @return boolean
	 */
	public function setCrossPromotionEnabled($_CrossPromotionEnabled)
	{
		return ($this->CrossPromotionEnabled = $_CrossPromotionEnabled);
	}
	/**
	 * Get CrossPromotionEnabled
	 * @return boolean
	 */
	public function getCrossPromotionEnabled()
	{
		return $this->CrossPromotionEnabled;
	}
	/**
	 * Set CrossSellItemFormatSortFilter
	 * @param ItemFormatSortFilterCodeType CrossSellItemFormatSortFilter
	 * @return ItemFormatSortFilterCodeType
	 */
	public function setCrossSellItemFormatSortFilter($_CrossSellItemFormatSortFilter)
	{
		return ($this->CrossSellItemFormatSortFilter = EbayTradingTypeItemFormatSortFilterCodeType::valueIsValid($_CrossSellItemFormatSortFilter)?$_CrossSellItemFormatSortFilter:null);
	}
	/**
	 * Get CrossSellItemFormatSortFilter
	 * @return EbayTradingTypeItemFormatSortFilterCodeType
	 */
	public function getCrossSellItemFormatSortFilter()
	{
		return $this->CrossSellItemFormatSortFilter;
	}
	/**
	 * Set CrossSellGallerySortFilter
	 * @param GallerySortFilterCodeType CrossSellGallerySortFilter
	 * @return GallerySortFilterCodeType
	 */
	public function setCrossSellGallerySortFilter($_CrossSellGallerySortFilter)
	{
		return ($this->CrossSellGallerySortFilter = EbayTradingTypeGallerySortFilterCodeType::valueIsValid($_CrossSellGallerySortFilter)?$_CrossSellGallerySortFilter:null);
	}
	/**
	 * Get CrossSellGallerySortFilter
	 * @return EbayTradingTypeGallerySortFilterCodeType
	 */
	public function getCrossSellGallerySortFilter()
	{
		return $this->CrossSellGallerySortFilter;
	}
	/**
	 * Set CrossSellItemSortFilter
	 * @param ItemSortFilterCodeType CrossSellItemSortFilter
	 * @return ItemSortFilterCodeType
	 */
	public function setCrossSellItemSortFilter($_CrossSellItemSortFilter)
	{
		return ($this->CrossSellItemSortFilter = EbayTradingTypeItemSortFilterCodeType::valueIsValid($_CrossSellItemSortFilter)?$_CrossSellItemSortFilter:null);
	}
	/**
	 * Get CrossSellItemSortFilter
	 * @return EbayTradingTypeItemSortFilterCodeType
	 */
	public function getCrossSellItemSortFilter()
	{
		return $this->CrossSellItemSortFilter;
	}
	/**
	 * Set UpSellItemFormatSortFilter
	 * @param ItemFormatSortFilterCodeType UpSellItemFormatSortFilter
	 * @return ItemFormatSortFilterCodeType
	 */
	public function setUpSellItemFormatSortFilter($_UpSellItemFormatSortFilter)
	{
		return ($this->UpSellItemFormatSortFilter = EbayTradingTypeItemFormatSortFilterCodeType::valueIsValid($_UpSellItemFormatSortFilter)?$_UpSellItemFormatSortFilter:null);
	}
	/**
	 * Get UpSellItemFormatSortFilter
	 * @return EbayTradingTypeItemFormatSortFilterCodeType
	 */
	public function getUpSellItemFormatSortFilter()
	{
		return $this->UpSellItemFormatSortFilter;
	}
	/**
	 * Set UpSellGallerySortFilter
	 * @param GallerySortFilterCodeType UpSellGallerySortFilter
	 * @return GallerySortFilterCodeType
	 */
	public function setUpSellGallerySortFilter($_UpSellGallerySortFilter)
	{
		return ($this->UpSellGallerySortFilter = EbayTradingTypeGallerySortFilterCodeType::valueIsValid($_UpSellGallerySortFilter)?$_UpSellGallerySortFilter:null);
	}
	/**
	 * Get UpSellGallerySortFilter
	 * @return EbayTradingTypeGallerySortFilterCodeType
	 */
	public function getUpSellGallerySortFilter()
	{
		return $this->UpSellGallerySortFilter;
	}
	/**
	 * Set UpSellItemSortFilter
	 * @param ItemSortFilterCodeType UpSellItemSortFilter
	 * @return ItemSortFilterCodeType
	 */
	public function setUpSellItemSortFilter($_UpSellItemSortFilter)
	{
		return ($this->UpSellItemSortFilter = EbayTradingTypeItemSortFilterCodeType::valueIsValid($_UpSellItemSortFilter)?$_UpSellItemSortFilter:null);
	}
	/**
	 * Get UpSellItemSortFilter
	 * @return EbayTradingTypeItemSortFilterCodeType
	 */
	public function getUpSellItemSortFilter()
	{
		return $this->UpSellItemSortFilter;
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