<?php
/**
 * Class file for EbayShoppingTypeGetItemStatusRequestType
 * @date 05/07/2012
 */
/**
 * Class EbayShoppingTypeGetItemStatusRequestType
 * Documentation : Contains a single ItemID or an array of ItemIDs.
 * @date 05/07/2012
 */
class EbayShoppingTypeGetItemStatusRequestType extends EbayShoppingTypeAbstractRequestType
{
	/**
	 * The ItemID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : The item ID that uniquely identifies the item listing for which to retrieve the data. You can provide a maximum of 20 ItemIDs. Use a comma to separate ItemIDs.
	 * @var string
	 */
	public $ItemID;
	/**
	 * Constructor
	 * @param string ItemID
	 * @return EbayShoppingTypeGetItemStatusRequestType
	 */
	public function __construct($_ItemID = null)
	{
		EbayShoppingWsdlClass::__construct(array('ItemID'=>$_ItemID));
	}
	/**
	 * Set ItemID
	 * @param string ItemID
	 * @return string
	 */
	public function setItemID($_ItemID)
	{
		return ($this->ItemID = $_ItemID);
	}
	/**
	 * Get ItemID
	 * @return string
	 */
	public function getItemID()
	{
		return $this->ItemID;
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