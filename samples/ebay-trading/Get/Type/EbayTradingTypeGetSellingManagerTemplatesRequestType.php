<?php
/**
 * Class file for EbayTradingTypeGetSellingManagerTemplatesRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetSellingManagerTemplatesRequestType
 * Documentation : Retrieves Selling Manager templates. This call is subject to change without notice; the deprecation process is inapplicable to this call.
 * @date 04/07/2012
 */
class EbayTradingTypeGetSellingManagerTemplatesRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The SaleTemplateID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : The ID of the template whose data will be returned. A SaleTemplateID is the ID of a Selling Manager template. A Selling Manager template contains the data needed to list an item. One or more template IDs can be specified, each in its own container. You can obtain a SaleTemplateID by calling GetSellingManagerInventory.
	 * @var long
	 */
	public $SaleTemplateID;
	/**
	 * Constructor
	 * @param long SaleTemplateID
	 * @return EbayTradingTypeGetSellingManagerTemplatesRequestType
	 */
	public function __construct($_SaleTemplateID = null)
	{
		EbayTradingWsdlClass::__construct(array('SaleTemplateID'=>$_SaleTemplateID));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>