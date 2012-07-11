<?php
/**
 * Class file for EbayTradingTypeVerifyRelistItemRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeVerifyRelistItemRequestType
 * Documentation : Checks the arguments that you plan to use for a RelistItem call, looking for errors and listing fees, without actually relisting the item.
 * @date 04/07/2012
 */
class EbayTradingTypeVerifyRelistItemRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The Item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Child elements hold the values for item properties that change for the item re-list. Item is a required input. At a minimum, the Item.ItemID property must be set to the ID of the listing being re-listed (a listing that ended in the past 90 days). By default, the new listing's Item object properties are the same as those of the original (ended) listing. By setting a new value in the Item object, the new listing uses the new value rather than the corresponding value from the old listing.
	 * @var EbayTradingTypeItemType
	 */
	public $Item;
	/**
	 * The DeletedField
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Specifies the name of the field to remove from a listing. See the Developer's Guide for rules on removing values when relisting items. DeletedField accepts the same values as DeletedField in RelistItem. DeletedField is case sensitive. The request can contain zero, one, or many instances of DeletedField.
	 * @var string
	 */
	public $DeletedField;
	/**
	 * Constructor
	 * @param EbayTradingTypeItemType Item
	 * @param string DeletedField
	 * @return EbayTradingTypeVerifyRelistItemRequestType
	 */
	public function __construct($_Item = null,$_DeletedField = null)
	{
		EbayTradingWsdlClass::__construct(array('Item'=>$_Item,'DeletedField'=>$_DeletedField));
	}
	/**
	 * Set Item
	 * @param ItemType Item
	 * @return ItemType
	 */
	public function setItem($_Item)
	{
		return ($this->Item = $_Item);
	}
	/**
	 * Get Item
	 * @return EbayTradingTypeItemType
	 */
	public function getItem()
	{
		return $this->Item;
	}
	/**
	 * Set DeletedField
	 * @param string DeletedField
	 * @return string
	 */
	public function setDeletedField($_DeletedField)
	{
		return ($this->DeletedField = $_DeletedField);
	}
	/**
	 * Get DeletedField
	 * @return string
	 */
	public function getDeletedField()
	{
		return $this->DeletedField;
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