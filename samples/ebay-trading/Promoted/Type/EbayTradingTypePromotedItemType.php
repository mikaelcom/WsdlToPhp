<?php
/**
 * Class file for EbayTradingTypePromotedItemType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypePromotedItemType
 * Documentation : Contains the data describing one cross-promoted item.
 * @date 04/07/2012
 */
class EbayTradingTypePromotedItemType extends EbayTradingWsdlClass
{
	/**
	 * The ItemID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The unique ID of the item for which there is a promotion.
	 * @var EbayTradingTypeItemIDType
	 */
	public $ItemID;
	/**
	 * The PictureURL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : URL for an image hosted by eBay Picture Services (EPS) or self-hosted for the promoted item, if any.
	 * @var string
	 */
	public $PictureURL;
	/**
	 * The Position
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The ordinal position of the cross-promoted item in the display. If the display is from top to bottom, 1 is at top. If the display is from left to right, 1 is at left.
	 * @var int
	 */
	public $Position;
	/**
	 * The SelectionType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The manner in which the cross-promoted item was chosen to be associated with the referring item. Output only.
	 * @var EbayTradingTypePromotionItemSelectionCodeType
	 */
	public $SelectionType;
	/**
	 * The Title
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The item title of the promoted item that is displayed in the referring item's page. <br><br> <span class="tablenote"><b>Note:</b> The maximum length of an eBay Item Title has increased to 80 characters as of September 2011. </span>
	 * @var string
	 */
	public $Title;
	/**
	 * The ListingType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The listing type under which the cross-promoted item is being offered.<br> <br> <span class="tablenote"><b>Note:</b> Lead generated items are only cross-promoted if they are in the classified ad format (ListingSubtype=ClassifiedAd). </span>
	 * @var EbayTradingTypeListingTypeCodeType
	 */
	public $ListingType;
	/**
	 * The PromotionDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Contains the details about the promoted item for a given PromotionPriceType. Output only. Returned with request versions 485 or higher.
	 * @var EbayTradingTypePromotionDetailsType
	 */
	public $PromotionDetails;
	/**
	 * The TimeLeft
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Time left before the listing for the cross-promoted item ends. Output only. The duration is represented in the ISO 8601 duration format (PnYnMnDTnHnMnS). See Data Types in the eBay Web Services guide for information about this format. For ended listings, the time left is PT0S (zero seconds).
	 * @var duration
	 */
	public $TimeLeft;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeItemIDType ItemID
	 * @param string PictureURL
	 * @param int Position
	 * @param EbayTradingTypePromotionItemSelectionCodeType SelectionType
	 * @param string Title
	 * @param EbayTradingTypeListingTypeCodeType ListingType
	 * @param EbayTradingTypePromotionDetailsType PromotionDetails
	 * @param duration TimeLeft
	 * @param DOMDocument any
	 * @return EbayTradingTypePromotedItemType
	 */
	public function __construct($_ItemID = null,$_PictureURL = null,$_Position = null,$_SelectionType = null,$_Title = null,$_ListingType = null,$_PromotionDetails = null,$_TimeLeft = null,$_any = null)
	{
		parent::__construct(array('ItemID'=>$_ItemID,'PictureURL'=>$_PictureURL,'Position'=>$_Position,'SelectionType'=>$_SelectionType,'Title'=>$_Title,'ListingType'=>$_ListingType,'PromotionDetails'=>$_PromotionDetails,'TimeLeft'=>$_TimeLeft,'any'=>$_any));
	}
	/**
	 * Set ItemID
	 * @param ItemIDType ItemID
	 * @return ItemIDType
	 */
	public function setItemID($_ItemID)
	{
		return ($this->ItemID = EbayTradingTypeItemIDType::valueIsValid($_ItemID)?$_ItemID:null);
	}
	/**
	 * Get ItemID
	 * @return EbayTradingTypeItemIDType
	 */
	public function getItemID()
	{
		return $this->ItemID;
	}
	/**
	 * Set PictureURL
	 * @param string PictureURL
	 * @return string
	 */
	public function setPictureURL($_PictureURL)
	{
		return ($this->PictureURL = $_PictureURL);
	}
	/**
	 * Get PictureURL
	 * @return string
	 */
	public function getPictureURL()
	{
		return $this->PictureURL;
	}
	/**
	 * Set Position
	 * @param int Position
	 * @return int
	 */
	public function setPosition($_Position)
	{
		return ($this->Position = $_Position);
	}
	/**
	 * Get Position
	 * @return int
	 */
	public function getPosition()
	{
		return $this->Position;
	}
	/**
	 * Set SelectionType
	 * @param PromotionItemSelectionCodeType SelectionType
	 * @return PromotionItemSelectionCodeType
	 */
	public function setSelectionType($_SelectionType)
	{
		return ($this->SelectionType = EbayTradingTypePromotionItemSelectionCodeType::valueIsValid($_SelectionType)?$_SelectionType:null);
	}
	/**
	 * Get SelectionType
	 * @return EbayTradingTypePromotionItemSelectionCodeType
	 */
	public function getSelectionType()
	{
		return $this->SelectionType;
	}
	/**
	 * Set Title
	 * @param string Title
	 * @return string
	 */
	public function setTitle($_Title)
	{
		return ($this->Title = $_Title);
	}
	/**
	 * Get Title
	 * @return string
	 */
	public function getTitle()
	{
		return $this->Title;
	}
	/**
	 * Set ListingType
	 * @param ListingTypeCodeType ListingType
	 * @return ListingTypeCodeType
	 */
	public function setListingType($_ListingType)
	{
		return ($this->ListingType = EbayTradingTypeListingTypeCodeType::valueIsValid($_ListingType)?$_ListingType:null);
	}
	/**
	 * Get ListingType
	 * @return EbayTradingTypeListingTypeCodeType
	 */
	public function getListingType()
	{
		return $this->ListingType;
	}
	/**
	 * Set PromotionDetails
	 * @param PromotionDetailsType PromotionDetails
	 * @return PromotionDetailsType
	 */
	public function setPromotionDetails($_PromotionDetails)
	{
		return ($this->PromotionDetails = $_PromotionDetails);
	}
	/**
	 * Get PromotionDetails
	 * @return EbayTradingTypePromotionDetailsType
	 */
	public function getPromotionDetails()
	{
		return $this->PromotionDetails;
	}
	/**
	 * Set TimeLeft
	 * @param duration TimeLeft
	 * @return duration
	 */
	public function setTimeLeft($_TimeLeft)
	{
		return ($this->TimeLeft = $_TimeLeft);
	}
	/**
	 * Get TimeLeft
	 * @return duration
	 */
	public function getTimeLeft()
	{
		return $this->TimeLeft;
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