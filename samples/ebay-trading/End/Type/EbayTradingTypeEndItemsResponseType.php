<?php
/**
 * Class file for EbayTradingTypeEndItemsResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeEndItemsResponseType
 * Documentation : Contains a response of the resulting status of ending each item.
 * @date 04/07/2012
 */
class EbayTradingTypeEndItemsResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The EndItemResponseContainer
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Returns a response for an individually ended item. Mutiple containers will be listed if multiple items are ended.
	 * @var EbayTradingTypeEndItemResponseContainerType
	 */
	public $EndItemResponseContainer;
	/**
	 * Constructor
	 * @param EbayTradingTypeEndItemResponseContainerType EndItemResponseContainer
	 * @return EbayTradingTypeEndItemsResponseType
	 */
	public function __construct($_EndItemResponseContainer = null)
	{
		EbayTradingWsdlClass::__construct(array('EndItemResponseContainer'=>$_EndItemResponseContainer));
	}
	/**
	 * Set EndItemResponseContainer
	 * @param EndItemResponseContainerType EndItemResponseContainer
	 * @return EndItemResponseContainerType
	 */
	public function setEndItemResponseContainer($_EndItemResponseContainer)
	{
		return ($this->EndItemResponseContainer = $_EndItemResponseContainer);
	}
	/**
	 * Get EndItemResponseContainer
	 * @return EbayTradingTypeEndItemResponseContainerType
	 */
	public function getEndItemResponseContainer()
	{
		return $this->EndItemResponseContainer;
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