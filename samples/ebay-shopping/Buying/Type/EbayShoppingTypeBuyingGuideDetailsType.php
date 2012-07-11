<?php
/**
 * Class file for EbayShoppingTypeBuyingGuideDetailsType
 * @date 05/07/2012
 */
/**
 * Class EbayShoppingTypeBuyingGuideDetailsType
 * Documentation : Information about zero or more buying guides and the site's buying guide hub. Buying guides contain content about particular product areas, categories, or subjects to help buyers decide which type of item to purchase based on their particular interests. Multiple buying guides can be returned. See the eBay Web Services Guide for additional information.
 * @date 05/07/2012
 */
class EbayShoppingTypeBuyingGuideDetailsType extends EbayShoppingWsdlClass
{
	/**
	 * The BuyingGuide
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Information that identifies a buying guide. A buying guide contains content about particular product areas, categories, or subjects to help buyers decide which type of item to purchase based on their particular interests. Buying guides are useful to buyers who do not have a specific product in mind. For example, a digital camera buying guide could help a buyer determine what kind of digital camera is right for them.
	 * @var EbayShoppingTypeBuyingGuideType
	 */
	public $BuyingGuide;
	/**
	 * The BuyingGuideHub
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : URL of the buying guide home page for the site being searched. Your application can present this URL as a link. Optionally, you can use a value like "See all buying guides" as the link's display name.
	 * @var anyURI
	 */
	public $BuyingGuideHub;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayShoppingTypeBuyingGuideType BuyingGuide
	 * @param anyURI BuyingGuideHub
	 * @param DOMDocument any
	 * @return EbayShoppingTypeBuyingGuideDetailsType
	 */
	public function __construct($_BuyingGuide = null,$_BuyingGuideHub = null,$_any = null)
	{
		parent::__construct(array('BuyingGuide'=>$_BuyingGuide,'BuyingGuideHub'=>$_BuyingGuideHub,'any'=>$_any));
	}
	/**
	 * Set BuyingGuide
	 * @param BuyingGuideType BuyingGuide
	 * @return BuyingGuideType
	 */
	public function setBuyingGuide($_BuyingGuide)
	{
		return ($this->BuyingGuide = $_BuyingGuide);
	}
	/**
	 * Get BuyingGuide
	 * @return EbayShoppingTypeBuyingGuideType
	 */
	public function getBuyingGuide()
	{
		return $this->BuyingGuide;
	}
	/**
	 * Set BuyingGuideHub
	 * @param anyURI BuyingGuideHub
	 * @return anyURI
	 */
	public function setBuyingGuideHub($_BuyingGuideHub)
	{
		return ($this->BuyingGuideHub = $_BuyingGuideHub);
	}
	/**
	 * Get BuyingGuideHub
	 * @return anyURI
	 */
	public function getBuyingGuideHub()
	{
		return $this->BuyingGuideHub;
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