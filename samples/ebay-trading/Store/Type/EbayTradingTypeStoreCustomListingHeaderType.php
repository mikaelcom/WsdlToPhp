<?php
/**
 * Class file for EbayTradingTypeStoreCustomListingHeaderType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeStoreCustomListingHeaderType
 * Documentation : Configuration of a Store custom listing header.
 * @date 04/07/2012
 */
class EbayTradingTypeStoreCustomListingHeaderType extends EbayTradingWsdlClass
{
	/**
	 * The DisplayType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Display type for the custom listing header.
	 * @var EbayTradingTypeStoreCustomListingHeaderDisplayCodeType
	 */
	public $DisplayType;
	/**
	 * The Logo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies whether the custom header has a logo.
	 * @var boolean
	 */
	public $Logo;
	/**
	 * The SearchBox
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies whether the custom header has a search box.
	 * @var boolean
	 */
	public $SearchBox;
	/**
	 * The LinkToInclude
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Link to include in the custom header.
	 * @var EbayTradingTypeStoreCustomListingHeaderLinkType
	 */
	public $LinkToInclude;
	/**
	 * The AddToFavoriteStores
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies whether the custom header has a link to Add to Favorite Stores.
	 * @var boolean
	 */
	public $AddToFavoriteStores;
	/**
	 * The SignUpForStoreNewsletter
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies whether the custom header has a link to Sign up for Store Newsletter.
	 * @var boolean
	 */
	public $SignUpForStoreNewsletter;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeStoreCustomListingHeaderDisplayCodeType DisplayType
	 * @param boolean Logo
	 * @param boolean SearchBox
	 * @param EbayTradingTypeStoreCustomListingHeaderLinkType LinkToInclude
	 * @param boolean AddToFavoriteStores
	 * @param boolean SignUpForStoreNewsletter
	 * @param DOMDocument any
	 * @return EbayTradingTypeStoreCustomListingHeaderType
	 */
	public function __construct($_DisplayType = null,$_Logo = null,$_SearchBox = null,$_LinkToInclude = null,$_AddToFavoriteStores = null,$_SignUpForStoreNewsletter = null,$_any = null)
	{
		parent::__construct(array('DisplayType'=>$_DisplayType,'Logo'=>$_Logo,'SearchBox'=>$_SearchBox,'LinkToInclude'=>$_LinkToInclude,'AddToFavoriteStores'=>$_AddToFavoriteStores,'SignUpForStoreNewsletter'=>$_SignUpForStoreNewsletter,'any'=>$_any));
	}
	/**
	 * Set DisplayType
	 * @param StoreCustomListingHeaderDisplayCodeType DisplayType
	 * @return StoreCustomListingHeaderDisplayCodeType
	 */
	public function setDisplayType($_DisplayType)
	{
		return ($this->DisplayType = EbayTradingTypeStoreCustomListingHeaderDisplayCodeType::valueIsValid($_DisplayType)?$_DisplayType:null);
	}
	/**
	 * Get DisplayType
	 * @return EbayTradingTypeStoreCustomListingHeaderDisplayCodeType
	 */
	public function getDisplayType()
	{
		return $this->DisplayType;
	}
	/**
	 * Set Logo
	 * @param boolean Logo
	 * @return boolean
	 */
	public function setLogo($_Logo)
	{
		return ($this->Logo = $_Logo);
	}
	/**
	 * Get Logo
	 * @return boolean
	 */
	public function getLogo()
	{
		return $this->Logo;
	}
	/**
	 * Set SearchBox
	 * @param boolean SearchBox
	 * @return boolean
	 */
	public function setSearchBox($_SearchBox)
	{
		return ($this->SearchBox = $_SearchBox);
	}
	/**
	 * Get SearchBox
	 * @return boolean
	 */
	public function getSearchBox()
	{
		return $this->SearchBox;
	}
	/**
	 * Set LinkToInclude
	 * @param StoreCustomListingHeaderLinkType LinkToInclude
	 * @return StoreCustomListingHeaderLinkType
	 */
	public function setLinkToInclude($_LinkToInclude)
	{
		return ($this->LinkToInclude = $_LinkToInclude);
	}
	/**
	 * Get LinkToInclude
	 * @return EbayTradingTypeStoreCustomListingHeaderLinkType
	 */
	public function getLinkToInclude()
	{
		return $this->LinkToInclude;
	}
	/**
	 * Set AddToFavoriteStores
	 * @param boolean AddToFavoriteStores
	 * @return boolean
	 */
	public function setAddToFavoriteStores($_AddToFavoriteStores)
	{
		return ($this->AddToFavoriteStores = $_AddToFavoriteStores);
	}
	/**
	 * Get AddToFavoriteStores
	 * @return boolean
	 */
	public function getAddToFavoriteStores()
	{
		return $this->AddToFavoriteStores;
	}
	/**
	 * Set SignUpForStoreNewsletter
	 * @param boolean SignUpForStoreNewsletter
	 * @return boolean
	 */
	public function setSignUpForStoreNewsletter($_SignUpForStoreNewsletter)
	{
		return ($this->SignUpForStoreNewsletter = $_SignUpForStoreNewsletter);
	}
	/**
	 * Get SignUpForStoreNewsletter
	 * @return boolean
	 */
	public function getSignUpForStoreNewsletter()
	{
		return $this->SignUpForStoreNewsletter;
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