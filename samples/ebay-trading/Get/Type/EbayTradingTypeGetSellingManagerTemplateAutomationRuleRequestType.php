<?php
/**
 * Class file for EbayTradingTypeGetSellingManagerTemplateAutomationRuleRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetSellingManagerTemplateAutomationRuleRequestType
 * Documentation : Retrieves the set of Selling Manager automation rules associated with a Selling Manager template. This call is subject to change without notice; the deprecation process is inapplicable to this call.
 * @date 04/07/2012
 */
class EbayTradingTypeGetSellingManagerTemplateAutomationRuleRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The SaleTemplateID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The ID of the Selling Manager template whose Selling Manager automation rules you want to retrieve. You can obtain a SaleTemplateID by calling GetSellingManagerInventory.
	 * @var long
	 */
	public $SaleTemplateID;
	/**
	 * Constructor
	 * @param long SaleTemplateID
	 * @return EbayTradingTypeGetSellingManagerTemplateAutomationRuleRequestType
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