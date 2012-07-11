<?php
/**
 * Class file for EbayTradingTypeEndItemsRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeEndItemsRequestType
 * Documentation : Ends up to 10 specified item listings before the date and time at which it would normally end per the listing duration.&nbsp;<b>Also for Half.com</b>.
 * @date 04/07/2012
 */
class EbayTradingTypeEndItemsRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The EndItemRequestContainer
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : A single container for an end item request. Multiple containers should be used to end multiple items. Up to ten (10) containers can be included per a given EndItems request.
	 * @var EbayTradingTypeEndItemRequestContainerType
	 */
	public $EndItemRequestContainer;
	/**
	 * Constructor
	 * @param EbayTradingTypeEndItemRequestContainerType EndItemRequestContainer
	 * @return EbayTradingTypeEndItemsRequestType
	 */
	public function __construct($_EndItemRequestContainer = null)
	{
		EbayTradingWsdlClass::__construct(array('EndItemRequestContainer'=>$_EndItemRequestContainer));
	}
	/**
	 * Set EndItemRequestContainer
	 * @param EndItemRequestContainerType EndItemRequestContainer
	 * @return EndItemRequestContainerType
	 */
	public function setEndItemRequestContainer($_EndItemRequestContainer)
	{
		return ($this->EndItemRequestContainer = $_EndItemRequestContainer);
	}
	/**
	 * Get EndItemRequestContainer
	 * @return EbayTradingTypeEndItemRequestContainerType
	 */
	public function getEndItemRequestContainer()
	{
		return $this->EndItemRequestContainer;
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