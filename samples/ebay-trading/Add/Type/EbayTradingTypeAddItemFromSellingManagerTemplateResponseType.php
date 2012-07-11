<?php
/**
 * Class file for EbayTradingTypeAddItemFromSellingManagerTemplateResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeAddItemFromSellingManagerTemplateResponseType
 * Documentation : Returns values indicating information for a new listing.
 * @date 04/07/2012
 */
class EbayTradingTypeAddItemFromSellingManagerTemplateResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The ItemID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The unique identifier for the listing that was created by the AddItemFromSellingManagerTemplate request.
	 * @var EbayTradingTypeItemIDType
	 */
	public $ItemID;
	/**
	 * The StartTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Start time for the listing that was created by the AddItemFromSellingManagerTemplate request.
	 * @var dateTime
	 */
	public $StartTime;
	/**
	 * The EndTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : End time for the listing that was created by the AddItemFromSellingManagerTemplate request. This value is equal to the start time plus the listing duration.
	 * @var dateTime
	 */
	public $EndTime;
	/**
	 * The Fees
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Child elements contain the estimated listing fees for the new item listing. The fees do not include the Final Value Fee (FVF), which cannot be determined until an item is sold.
	 * @var EbayTradingTypeFeesType
	 */
	public $Fees;
	/**
	 * The CategoryID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : ID of the primary category in which the item was listed. Only returned if you set Item.CategoryMappingAllowed to true in the request and the ID you passed in PrimaryCategory was mapped to a new ID by eBay. If the primary category has not changed or it has expired with no replacement, CategoryID does not return a value. Not applicable to Half.com.
	 * @var string
	 */
	public $CategoryID;
	/**
	 * The Category2ID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : ID of the secondary category in which the item was listed. Only returned if you set Item.CategoryMappingAllowed to true in the request and the ID you passed in SecondaryCategory was mapped to a new ID by eBay. If the secondary category has not changed or it has expired with no replacement, Category2ID does not return a value. Not applicable to Half.com.
	 * @var string
	 */
	public $Category2ID;
	/**
	 * Constructor
	 * @param EbayTradingTypeItemIDType ItemID
	 * @param dateTime StartTime
	 * @param dateTime EndTime
	 * @param EbayTradingTypeFeesType Fees
	 * @param string CategoryID
	 * @param string Category2ID
	 * @return EbayTradingTypeAddItemFromSellingManagerTemplateResponseType
	 */
	public function __construct($_ItemID = null,$_StartTime = null,$_EndTime = null,$_Fees = null,$_CategoryID = null,$_Category2ID = null)
	{
		EbayTradingWsdlClass::__construct(array('ItemID'=>$_ItemID,'StartTime'=>$_StartTime,'EndTime'=>$_EndTime,'Fees'=>$_Fees,'CategoryID'=>$_CategoryID,'Category2ID'=>$_Category2ID));
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
	 * Set StartTime
	 * @param dateTime StartTime
	 * @return dateTime
	 */
	public function setStartTime($_StartTime)
	{
		return ($this->StartTime = $_StartTime);
	}
	/**
	 * Get StartTime
	 * @return dateTime
	 */
	public function getStartTime()
	{
		return $this->StartTime;
	}
	/**
	 * Set EndTime
	 * @param dateTime EndTime
	 * @return dateTime
	 */
	public function setEndTime($_EndTime)
	{
		return ($this->EndTime = $_EndTime);
	}
	/**
	 * Get EndTime
	 * @return dateTime
	 */
	public function getEndTime()
	{
		return $this->EndTime;
	}
	/**
	 * Set Fees
	 * @param FeesType Fees
	 * @return FeesType
	 */
	public function setFees($_Fees)
	{
		return ($this->Fees = $_Fees);
	}
	/**
	 * Get Fees
	 * @return EbayTradingTypeFeesType
	 */
	public function getFees()
	{
		return $this->Fees;
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
	 * Set Category2ID
	 * @param string Category2ID
	 * @return string
	 */
	public function setCategory2ID($_Category2ID)
	{
		return ($this->Category2ID = $_Category2ID);
	}
	/**
	 * Get Category2ID
	 * @return string
	 */
	public function getCategory2ID()
	{
		return $this->Category2ID;
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