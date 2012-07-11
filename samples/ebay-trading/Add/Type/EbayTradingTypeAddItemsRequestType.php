<?php
/**
 * Class file for EbayTradingTypeAddItemsRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeAddItemsRequestType
 * Documentation : Defines from one to five items and lists them on a specified eBay site.
 * @date 04/07/2012
 */
class EbayTradingTypeAddItemsRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The AddItemRequestContainer
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Defines a single item to be listed on eBay. This container is similar to an AddItem request. Up to five (5) containers can be included per a given AddItems request.
	 * @var EbayTradingTypeAddItemRequestContainerType
	 */
	public $AddItemRequestContainer;
	/**
	 * Constructor
	 * @param EbayTradingTypeAddItemRequestContainerType AddItemRequestContainer
	 * @return EbayTradingTypeAddItemsRequestType
	 */
	public function __construct($_AddItemRequestContainer = null)
	{
		EbayTradingWsdlClass::__construct(array('AddItemRequestContainer'=>$_AddItemRequestContainer));
	}
	/**
	 * Set AddItemRequestContainer
	 * @param AddItemRequestContainerType AddItemRequestContainer
	 * @return AddItemRequestContainerType
	 */
	public function setAddItemRequestContainer($_AddItemRequestContainer)
	{
		return ($this->AddItemRequestContainer = $_AddItemRequestContainer);
	}
	/**
	 * Get AddItemRequestContainer
	 * @return EbayTradingTypeAddItemRequestContainerType
	 */
	public function getAddItemRequestContainer()
	{
		return $this->AddItemRequestContainer;
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