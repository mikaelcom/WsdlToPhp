<?php
/**
 * Class file for EbayTradingTypeListingDesignerType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeListingDesignerType
 * Documentation : Contains the IDs for the Listing Designer theme and template (if either are used) associated with an item, which can optionally be used to enhance the appearance of the item's description. Cannot be used with Photo Display.
 * @date 04/07/2012
 */
class EbayTradingTypeListingDesignerType extends EbayTradingWsdlClass
{
	/**
	 * The LayoutID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Identifies the Layout template to use when displaying the item's description. Call GetDescriptionTemplates for valid IDs. Set to false in GetDescriptionTemplates (or do not specify LayoutID) to get the standard layout. If a Listing Designer layout is used (except standard layout), PhotoDisplayType must be false (or not be specified). When relisting an item, LayoutID is removed from the listing if you specify ListingDesignerType without LayoutID. Alternatively, to remove this value when revising or relisting an item, use DeletedField.
	 * @var int
	 */
	public $LayoutID;
	/**
	 * The OptimalPictureSize
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If true, indicates that the item's picture will be enlarged to fit description of the item.
	 * @var boolean
	 */
	public $OptimalPictureSize;
	/**
	 * The ThemeID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : ID for the Listing Designer theme template to use when displaying the item's description. When relisting, if you specify ListingDesignerType without ThemeID, ThemeID is removed from the listing. Alternatively, to remove this value when revising or relisting an item, use DeletedField.
	 * @var int
	 */
	public $ThemeID;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param int LayoutID
	 * @param boolean OptimalPictureSize
	 * @param int ThemeID
	 * @param DOMDocument any
	 * @return EbayTradingTypeListingDesignerType
	 */
	public function __construct($_LayoutID = null,$_OptimalPictureSize = null,$_ThemeID = null,$_any = null)
	{
		parent::__construct(array('LayoutID'=>$_LayoutID,'OptimalPictureSize'=>$_OptimalPictureSize,'ThemeID'=>$_ThemeID,'any'=>$_any));
	}
	/**
	 * Set LayoutID
	 * @param int LayoutID
	 * @return int
	 */
	public function setLayoutID($_LayoutID)
	{
		return ($this->LayoutID = $_LayoutID);
	}
	/**
	 * Get LayoutID
	 * @return int
	 */
	public function getLayoutID()
	{
		return $this->LayoutID;
	}
	/**
	 * Set OptimalPictureSize
	 * @param boolean OptimalPictureSize
	 * @return boolean
	 */
	public function setOptimalPictureSize($_OptimalPictureSize)
	{
		return ($this->OptimalPictureSize = $_OptimalPictureSize);
	}
	/**
	 * Get OptimalPictureSize
	 * @return boolean
	 */
	public function getOptimalPictureSize()
	{
		return $this->OptimalPictureSize;
	}
	/**
	 * Set ThemeID
	 * @param int ThemeID
	 * @return int
	 */
	public function setThemeID($_ThemeID)
	{
		return ($this->ThemeID = $_ThemeID);
	}
	/**
	 * Get ThemeID
	 * @return int
	 */
	public function getThemeID()
	{
		return $this->ThemeID;
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