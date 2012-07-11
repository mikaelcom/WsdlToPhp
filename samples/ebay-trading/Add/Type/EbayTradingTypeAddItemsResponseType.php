<?php
/**
 * Class file for EbayTradingTypeAddItemsResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeAddItemsResponseType
 * Documentation : Returns the item IDs and the estimated fees for the new listings, as well as the start and end times of the listings.
 * @date 04/07/2012
 */
class EbayTradingTypeAddItemsResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The AddItemResponseContainer
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Returns the Single AddItem response with corresponding Item Id and estimated fees.
	 * @var EbayTradingTypeAddItemResponseContainerType
	 */
	public $AddItemResponseContainer;
	/**
	 * Constructor
	 * @param EbayTradingTypeAddItemResponseContainerType AddItemResponseContainer
	 * @return EbayTradingTypeAddItemsResponseType
	 */
	public function __construct($_AddItemResponseContainer = null)
	{
		EbayTradingWsdlClass::__construct(array('AddItemResponseContainer'=>$_AddItemResponseContainer));
	}
	/**
	 * Set AddItemResponseContainer
	 * @param AddItemResponseContainerType AddItemResponseContainer
	 * @return AddItemResponseContainerType
	 */
	public function setAddItemResponseContainer($_AddItemResponseContainer)
	{
		return ($this->AddItemResponseContainer = $_AddItemResponseContainer);
	}
	/**
	 * Get AddItemResponseContainer
	 * @return EbayTradingTypeAddItemResponseContainerType
	 */
	public function getAddItemResponseContainer()
	{
		return $this->AddItemResponseContainer;
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