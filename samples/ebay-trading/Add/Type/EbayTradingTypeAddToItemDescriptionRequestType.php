<?php
/**
 * Class file for EbayTradingTypeAddToItemDescriptionRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeAddToItemDescriptionRequestType
 * Documentation : Appends a horizontal rule, then a message about what time the addition was made by the seller, and then the seller-specified text.
 * @date 04/07/2012
 */
class EbayTradingTypeAddToItemDescriptionRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The ItemID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Unique item ID that identifies the target item listing, the description of which is appended with the text specified in Description.
	 * @var EbayTradingTypeItemIDType
	 */
	public $ItemID;
	/**
	 * The Description
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies the text to append to the end of the listings description. Text appended to a listing's description must abide by the rules applicable to this data (such as no JavaScript) as is the case when first listing the item.
	 * @var string
	 */
	public $Description;
	/**
	 * Constructor
	 * @param EbayTradingTypeItemIDType ItemID
	 * @param string Description
	 * @return EbayTradingTypeAddToItemDescriptionRequestType
	 */
	public function __construct($_ItemID = null,$_Description = null)
	{
		EbayTradingWsdlClass::__construct(array('ItemID'=>$_ItemID,'Description'=>$_Description));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>