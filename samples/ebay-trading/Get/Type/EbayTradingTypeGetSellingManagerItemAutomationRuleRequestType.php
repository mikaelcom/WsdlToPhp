<?php
/**
 * Class file for EbayTradingTypeGetSellingManagerItemAutomationRuleRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetSellingManagerItemAutomationRuleRequestType
 * Documentation : Retrieves the set of Selling Manager automation rules associated with an item. This call is subject to change without notice; the deprecation process is inapplicable to this call.
 * @date 04/07/2012
 */
class EbayTradingTypeGetSellingManagerItemAutomationRuleRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The ItemID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The ID of the item whose Selling Manager automation rules you want to retrieve.
	 * @var EbayTradingTypeItemIDType
	 */
	public $ItemID;
	/**
	 * Constructor
	 * @param EbayTradingTypeItemIDType ItemID
	 * @return EbayTradingTypeGetSellingManagerItemAutomationRuleRequestType
	 */
	public function __construct($_ItemID = null)
	{
		EbayTradingWsdlClass::__construct(array('ItemID'=>$_ItemID));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>