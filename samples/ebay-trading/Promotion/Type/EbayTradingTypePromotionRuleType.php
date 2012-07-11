<?php
/**
 * Class file for EbayTradingTypePromotionRuleType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypePromotionRuleType
 * Documentation : Defines a rule that promotes items or a store category when a buyer views a specific item or store category.
 * @date 04/07/2012
 */
class EbayTradingTypePromotionRuleType extends EbayTradingWsdlClass
{
	/**
	 * The PromotedStoreCategoryID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The ID of the Store category being promoted. Use with a promotion scheme of ItemToStoreCat, StoreToStoreCat, ItemToDefaultRule, or DefaultRule. Only for Store owners.
	 * @var long
	 */
	public $PromotedStoreCategoryID;
	/**
	 * The PromotedeBayCategoryID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The ID of the eBay category being promoted. Use with a promotion scheme of ItemToDefaultRule or DefaultRule.
	 * @var string
	 */
	public $PromotedeBayCategoryID;
	/**
	 * The PromotedKeywords
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The keywords that identify promoted items. Use with a promotion scheme of ItemToDefaultRule or DefaultRule. Only for Store owners.
	 * @var string
	 */
	public $PromotedKeywords;
	/**
	 * The ReferringItemID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The unique ID of the item the buyer is viewing or purchasing. Use with a promotion scheme of ItemToItem or ItemToStoreCat. Always use ReferringItemID or ReferringStoreCategoryID, but not both.
	 * @var EbayTradingTypeItemIDType
	 */
	public $ReferringItemID;
	/**
	 * The ReferringStoreCategoryID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The ID of the store category the user is browsing. Use with a promotion scheme of StoreToStoreCat, ItemToDefaultRule or DefaultRule. Always use ReferringStoreCategoryID or ReferringItemID, but not both.
	 * @var long
	 */
	public $ReferringStoreCategoryID;
	/**
	 * The ReferringeBayCategoryID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The ID of the eBay category being referred. Use with a promotion scheme or ItemToDefaultRule or DefaultRule.
	 * @var string
	 */
	public $ReferringeBayCategoryID;
	/**
	 * The ReferringKeywords
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The keywords that identify referring items. Use with a promotion scheme of ItemToDefaultRule or DefaultRule. Only for Store owners.
	 * @var string
	 */
	public $ReferringKeywords;
	/**
	 * The PromotionScheme
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The type of cross-promotion scheme you are defining.
	 * @var EbayTradingTypePromotionSchemeCodeType
	 */
	public $PromotionScheme;
	/**
	 * The PromotionMethod
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The type of cross promotion, CrossSell or UpSell.
	 * @var EbayTradingTypePromotionMethodCodeType
	 */
	public $PromotionMethod;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param long PromotedStoreCategoryID
	 * @param string PromotedeBayCategoryID
	 * @param string PromotedKeywords
	 * @param EbayTradingTypeItemIDType ReferringItemID
	 * @param long ReferringStoreCategoryID
	 * @param string ReferringeBayCategoryID
	 * @param string ReferringKeywords
	 * @param EbayTradingTypePromotionSchemeCodeType PromotionScheme
	 * @param EbayTradingTypePromotionMethodCodeType PromotionMethod
	 * @param DOMDocument any
	 * @return EbayTradingTypePromotionRuleType
	 */
	public function __construct($_PromotedStoreCategoryID = null,$_PromotedeBayCategoryID = null,$_PromotedKeywords = null,$_ReferringItemID = null,$_ReferringStoreCategoryID = null,$_ReferringeBayCategoryID = null,$_ReferringKeywords = null,$_PromotionScheme = null,$_PromotionMethod = null,$_any = null)
	{
		parent::__construct(array('PromotedStoreCategoryID'=>$_PromotedStoreCategoryID,'PromotedeBayCategoryID'=>$_PromotedeBayCategoryID,'PromotedKeywords'=>$_PromotedKeywords,'ReferringItemID'=>$_ReferringItemID,'ReferringStoreCategoryID'=>$_ReferringStoreCategoryID,'ReferringeBayCategoryID'=>$_ReferringeBayCategoryID,'ReferringKeywords'=>$_ReferringKeywords,'PromotionScheme'=>$_PromotionScheme,'PromotionMethod'=>$_PromotionMethod,'any'=>$_any));
	}
	/**
	 * Set PromotedStoreCategoryID
	 * @param long PromotedStoreCategoryID
	 * @return long
	 */
	public function setPromotedStoreCategoryID($_PromotedStoreCategoryID)
	{
		return ($this->PromotedStoreCategoryID = $_PromotedStoreCategoryID);
	}
	/**
	 * Get PromotedStoreCategoryID
	 * @return long
	 */
	public function getPromotedStoreCategoryID()
	{
		return $this->PromotedStoreCategoryID;
	}
	/**
	 * Set PromotedeBayCategoryID
	 * @param string PromotedeBayCategoryID
	 * @return string
	 */
	public function setPromotedeBayCategoryID($_PromotedeBayCategoryID)
	{
		return ($this->PromotedeBayCategoryID = $_PromotedeBayCategoryID);
	}
	/**
	 * Get PromotedeBayCategoryID
	 * @return string
	 */
	public function getPromotedeBayCategoryID()
	{
		return $this->PromotedeBayCategoryID;
	}
	/**
	 * Set PromotedKeywords
	 * @param string PromotedKeywords
	 * @return string
	 */
	public function setPromotedKeywords($_PromotedKeywords)
	{
		return ($this->PromotedKeywords = $_PromotedKeywords);
	}
	/**
	 * Get PromotedKeywords
	 * @return string
	 */
	public function getPromotedKeywords()
	{
		return $this->PromotedKeywords;
	}
	/**
	 * Set ReferringItemID
	 * @param ItemIDType ReferringItemID
	 * @return ItemIDType
	 */
	public function setReferringItemID($_ReferringItemID)
	{
		return ($this->ReferringItemID = EbayTradingTypeItemIDType::valueIsValid($_ReferringItemID)?$_ReferringItemID:null);
	}
	/**
	 * Get ReferringItemID
	 * @return EbayTradingTypeItemIDType
	 */
	public function getReferringItemID()
	{
		return $this->ReferringItemID;
	}
	/**
	 * Set ReferringStoreCategoryID
	 * @param long ReferringStoreCategoryID
	 * @return long
	 */
	public function setReferringStoreCategoryID($_ReferringStoreCategoryID)
	{
		return ($this->ReferringStoreCategoryID = $_ReferringStoreCategoryID);
	}
	/**
	 * Get ReferringStoreCategoryID
	 * @return long
	 */
	public function getReferringStoreCategoryID()
	{
		return $this->ReferringStoreCategoryID;
	}
	/**
	 * Set ReferringeBayCategoryID
	 * @param string ReferringeBayCategoryID
	 * @return string
	 */
	public function setReferringeBayCategoryID($_ReferringeBayCategoryID)
	{
		return ($this->ReferringeBayCategoryID = $_ReferringeBayCategoryID);
	}
	/**
	 * Get ReferringeBayCategoryID
	 * @return string
	 */
	public function getReferringeBayCategoryID()
	{
		return $this->ReferringeBayCategoryID;
	}
	/**
	 * Set ReferringKeywords
	 * @param string ReferringKeywords
	 * @return string
	 */
	public function setReferringKeywords($_ReferringKeywords)
	{
		return ($this->ReferringKeywords = $_ReferringKeywords);
	}
	/**
	 * Get ReferringKeywords
	 * @return string
	 */
	public function getReferringKeywords()
	{
		return $this->ReferringKeywords;
	}
	/**
	 * Set PromotionScheme
	 * @param PromotionSchemeCodeType PromotionScheme
	 * @return PromotionSchemeCodeType
	 */
	public function setPromotionScheme($_PromotionScheme)
	{
		return ($this->PromotionScheme = EbayTradingTypePromotionSchemeCodeType::valueIsValid($_PromotionScheme)?$_PromotionScheme:null);
	}
	/**
	 * Get PromotionScheme
	 * @return EbayTradingTypePromotionSchemeCodeType
	 */
	public function getPromotionScheme()
	{
		return $this->PromotionScheme;
	}
	/**
	 * Set PromotionMethod
	 * @param PromotionMethodCodeType PromotionMethod
	 * @return PromotionMethodCodeType
	 */
	public function setPromotionMethod($_PromotionMethod)
	{
		return ($this->PromotionMethod = EbayTradingTypePromotionMethodCodeType::valueIsValid($_PromotionMethod)?$_PromotionMethod:null);
	}
	/**
	 * Get PromotionMethod
	 * @return EbayTradingTypePromotionMethodCodeType
	 */
	public function getPromotionMethod()
	{
		return $this->PromotionMethod;
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