<?php
/**
 * Class file for EbayTradingTypeListingFeatureDetailsType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeListingFeatureDetailsType
 * Documentation : Details about feature availability for the site.
 * @date 04/07/2012
 */
class EbayTradingTypeListingFeatureDetailsType extends EbayTradingWsdlClass
{
	/**
	 * The BoldTitle
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Defines the availability of the BoldTitle feature for the site.
	 * @var EbayTradingTypeBoldTitleCodeType
	 */
	public $BoldTitle;
	/**
	 * The Border
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Defines the availability of the Border feature for the site.
	 * @var EbayTradingTypeBorderCodeType
	 */
	public $Border;
	/**
	 * The Highlight
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Defines the availability of the Highlight feature for the site.
	 * @var EbayTradingTypeHighlightCodeType
	 */
	public $Highlight;
	/**
	 * The GiftIcon
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Defines the availability of the Gift Icon feature for the site.
	 * @var EbayTradingTypeGiftIconCodeType
	 */
	public $GiftIcon;
	/**
	 * The HomePageFeatured
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Defines the availability of the HomePageFeatured feature for the site.
	 * @var EbayTradingTypeHomePageFeaturedCodeType
	 */
	public $HomePageFeatured;
	/**
	 * The FeaturedFirst
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Defines the availability of FeaturedFirst for the site. If FeaturedFirst is available for a site, then this field also is used to determine if FeaturedFirst is available only for PowerSellers, or only for top-rated sellers. If you make a GeteBayDetails call to site 100 (US eBay Motors), the value returned only applies to the Parts and Accessories category.
	 * @var EbayTradingTypeFeaturedFirstCodeType
	 */
	public $FeaturedFirst;
	/**
	 * The FeaturedPlus
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Defines the availability of FeaturedPlus for site, including whether it is only available for certain seller groups such as PowerSeller or TopRatedSeller.
	 * @var EbayTradingTypeFeaturedPlusCodeType
	 */
	public $FeaturedPlus;
	/**
	 * The ProPack
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Defines the availability of ProPack for the site. If ProPack is available for a site, this field also is used to determine if ProPack is available only for PowerSellers, or only for top-rated sellers. If you make a GeteBayDetails call to site 100 (US eBay Motors), the value returned only applies to the Parts and Accessories category.
	 * @var EbayTradingTypeProPackCodeType
	 */
	public $ProPack;
	/**
	 * The DetailVersion
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Returns the current version of details.
	 * @var string
	 */
	public $DetailVersion;
	/**
	 * The UpdateTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Gives the time in GMT that the feature flags for the details were last updated.
	 * @var dateTime
	 */
	public $UpdateTime;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeBoldTitleCodeType BoldTitle
	 * @param EbayTradingTypeBorderCodeType Border
	 * @param EbayTradingTypeHighlightCodeType Highlight
	 * @param EbayTradingTypeGiftIconCodeType GiftIcon
	 * @param EbayTradingTypeHomePageFeaturedCodeType HomePageFeatured
	 * @param EbayTradingTypeFeaturedFirstCodeType FeaturedFirst
	 * @param EbayTradingTypeFeaturedPlusCodeType FeaturedPlus
	 * @param EbayTradingTypeProPackCodeType ProPack
	 * @param string DetailVersion
	 * @param dateTime UpdateTime
	 * @param DOMDocument any
	 * @return EbayTradingTypeListingFeatureDetailsType
	 */
	public function __construct($_BoldTitle = null,$_Border = null,$_Highlight = null,$_GiftIcon = null,$_HomePageFeatured = null,$_FeaturedFirst = null,$_FeaturedPlus = null,$_ProPack = null,$_DetailVersion = null,$_UpdateTime = null,$_any = null)
	{
		parent::__construct(array('BoldTitle'=>$_BoldTitle,'Border'=>$_Border,'Highlight'=>$_Highlight,'GiftIcon'=>$_GiftIcon,'HomePageFeatured'=>$_HomePageFeatured,'FeaturedFirst'=>$_FeaturedFirst,'FeaturedPlus'=>$_FeaturedPlus,'ProPack'=>$_ProPack,'DetailVersion'=>$_DetailVersion,'UpdateTime'=>$_UpdateTime,'any'=>$_any));
	}
	/**
	 * Set BoldTitle
	 * @param BoldTitleCodeType BoldTitle
	 * @return BoldTitleCodeType
	 */
	public function setBoldTitle($_BoldTitle)
	{
		return ($this->BoldTitle = EbayTradingTypeBoldTitleCodeType::valueIsValid($_BoldTitle)?$_BoldTitle:null);
	}
	/**
	 * Get BoldTitle
	 * @return EbayTradingTypeBoldTitleCodeType
	 */
	public function getBoldTitle()
	{
		return $this->BoldTitle;
	}
	/**
	 * Set Border
	 * @param BorderCodeType Border
	 * @return BorderCodeType
	 */
	public function setBorder($_Border)
	{
		return ($this->Border = EbayTradingTypeBorderCodeType::valueIsValid($_Border)?$_Border:null);
	}
	/**
	 * Get Border
	 * @return EbayTradingTypeBorderCodeType
	 */
	public function getBorder()
	{
		return $this->Border;
	}
	/**
	 * Set Highlight
	 * @param HighlightCodeType Highlight
	 * @return HighlightCodeType
	 */
	public function setHighlight($_Highlight)
	{
		return ($this->Highlight = EbayTradingTypeHighlightCodeType::valueIsValid($_Highlight)?$_Highlight:null);
	}
	/**
	 * Get Highlight
	 * @return EbayTradingTypeHighlightCodeType
	 */
	public function getHighlight()
	{
		return $this->Highlight;
	}
	/**
	 * Set GiftIcon
	 * @param GiftIconCodeType GiftIcon
	 * @return GiftIconCodeType
	 */
	public function setGiftIcon($_GiftIcon)
	{
		return ($this->GiftIcon = EbayTradingTypeGiftIconCodeType::valueIsValid($_GiftIcon)?$_GiftIcon:null);
	}
	/**
	 * Get GiftIcon
	 * @return EbayTradingTypeGiftIconCodeType
	 */
	public function getGiftIcon()
	{
		return $this->GiftIcon;
	}
	/**
	 * Set HomePageFeatured
	 * @param HomePageFeaturedCodeType HomePageFeatured
	 * @return HomePageFeaturedCodeType
	 */
	public function setHomePageFeatured($_HomePageFeatured)
	{
		return ($this->HomePageFeatured = EbayTradingTypeHomePageFeaturedCodeType::valueIsValid($_HomePageFeatured)?$_HomePageFeatured:null);
	}
	/**
	 * Get HomePageFeatured
	 * @return EbayTradingTypeHomePageFeaturedCodeType
	 */
	public function getHomePageFeatured()
	{
		return $this->HomePageFeatured;
	}
	/**
	 * Set FeaturedFirst
	 * @param FeaturedFirstCodeType FeaturedFirst
	 * @return FeaturedFirstCodeType
	 */
	public function setFeaturedFirst($_FeaturedFirst)
	{
		return ($this->FeaturedFirst = EbayTradingTypeFeaturedFirstCodeType::valueIsValid($_FeaturedFirst)?$_FeaturedFirst:null);
	}
	/**
	 * Get FeaturedFirst
	 * @return EbayTradingTypeFeaturedFirstCodeType
	 */
	public function getFeaturedFirst()
	{
		return $this->FeaturedFirst;
	}
	/**
	 * Set FeaturedPlus
	 * @param FeaturedPlusCodeType FeaturedPlus
	 * @return FeaturedPlusCodeType
	 */
	public function setFeaturedPlus($_FeaturedPlus)
	{
		return ($this->FeaturedPlus = EbayTradingTypeFeaturedPlusCodeType::valueIsValid($_FeaturedPlus)?$_FeaturedPlus:null);
	}
	/**
	 * Get FeaturedPlus
	 * @return EbayTradingTypeFeaturedPlusCodeType
	 */
	public function getFeaturedPlus()
	{
		return $this->FeaturedPlus;
	}
	/**
	 * Set ProPack
	 * @param ProPackCodeType ProPack
	 * @return ProPackCodeType
	 */
	public function setProPack($_ProPack)
	{
		return ($this->ProPack = EbayTradingTypeProPackCodeType::valueIsValid($_ProPack)?$_ProPack:null);
	}
	/**
	 * Get ProPack
	 * @return EbayTradingTypeProPackCodeType
	 */
	public function getProPack()
	{
		return $this->ProPack;
	}
	/**
	 * Set DetailVersion
	 * @param string DetailVersion
	 * @return string
	 */
	public function setDetailVersion($_DetailVersion)
	{
		return ($this->DetailVersion = $_DetailVersion);
	}
	/**
	 * Get DetailVersion
	 * @return string
	 */
	public function getDetailVersion()
	{
		return $this->DetailVersion;
	}
	/**
	 * Set UpdateTime
	 * @param dateTime UpdateTime
	 * @return dateTime
	 */
	public function setUpdateTime($_UpdateTime)
	{
		return ($this->UpdateTime = $_UpdateTime);
	}
	/**
	 * Get UpdateTime
	 * @return dateTime
	 */
	public function getUpdateTime()
	{
		return $this->UpdateTime;
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