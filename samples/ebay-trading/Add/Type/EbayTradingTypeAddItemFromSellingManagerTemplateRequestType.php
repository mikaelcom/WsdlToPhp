<?php
/**
 * Class file for EbayTradingTypeAddItemFromSellingManagerTemplateRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeAddItemFromSellingManagerTemplateRequestType
 * Documentation : Creates listings from Selling Manager templates. This call is subject to change without notice; the deprecation process is inapplicable to this call.
 * @date 04/07/2012
 */
class EbayTradingTypeAddItemFromSellingManagerTemplateRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The SaleTemplateID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The ID of the template you are using to list an item. You can obtain a SaleTemplateID by calling GetSellingManagerInventory.
	 * @var long
	 */
	public $SaleTemplateID;
	/**
	 * The ScheduleTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Start time for the listing.
	 * @var dateTime
	 */
	public $ScheduleTime;
	/**
	 * The Item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : <b>Currently, only the following can be specified as children of this container: payment methods, the PayPal email address, and CategoryMappingAllowed. </b> This container is intended for specifying item values that differ from values in the template specified in the SaleTemplateID field. However, currently, the only children that are allowed for this container are payment methods and a PayPal email address.
	 * @var EbayTradingTypeItemType
	 */
	public $Item;
	/**
	 * Constructor
	 * @param long SaleTemplateID
	 * @param dateTime ScheduleTime
	 * @param EbayTradingTypeItemType Item
	 * @return EbayTradingTypeAddItemFromSellingManagerTemplateRequestType
	 */
	public function __construct($_SaleTemplateID = null,$_ScheduleTime = null,$_Item = null)
	{
		EbayTradingWsdlClass::__construct(array('SaleTemplateID'=>$_SaleTemplateID,'ScheduleTime'=>$_ScheduleTime,'Item'=>$_Item));
	}
	/**
	 * Set SaleTemplateID
	 * @param long SaleTemplateID
	 * @return long
	 */
	public function setSaleTemplateID($_SaleTemplateID)
	{
		return ($this->SaleTemplateID = $_SaleTemplateID);
	}
	/**
	 * Get SaleTemplateID
	 * @return long
	 */
	public function getSaleTemplateID()
	{
		return $this->SaleTemplateID;
	}
	/**
	 * Set ScheduleTime
	 * @param dateTime ScheduleTime
	 * @return dateTime
	 */
	public function setScheduleTime($_ScheduleTime)
	{
		return ($this->ScheduleTime = $_ScheduleTime);
	}
	/**
	 * Get ScheduleTime
	 * @return dateTime
	 */
	public function getScheduleTime()
	{
		return $this->ScheduleTime;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>