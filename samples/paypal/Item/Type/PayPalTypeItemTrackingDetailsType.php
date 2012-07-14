<?php
/**
 * Class file for PayPalTypeItemTrackingDetailsType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeItemTrackingDetailsType
 * @date 14/07/2012
 */
class PayPalTypeItemTrackingDetailsType extends PayPalWsdlClass
{
	/**
	 * The ItemNumber
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Item Number. Required
	 * @var string
	 */
	public $ItemNumber;
	/**
	 * The ItemQty
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Option Quantity. Optional
	 * @var string
	 */
	public $ItemQty;
	/**
	 * The ItemQtyDelta
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Item Quantity Delta. Optional
	 * @var string
	 */
	public $ItemQtyDelta;
	/**
	 * The ItemAlert
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Item Alert. Optional
	 * @var string
	 */
	public $ItemAlert;
	/**
	 * The ItemCost
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Item Cost. Optional
	 * @var string
	 */
	public $ItemCost;
	/**
	 * Constructor
	 * @param string ItemNumber
	 * @param string ItemQty
	 * @param string ItemQtyDelta
	 * @param string ItemAlert
	 * @param string ItemCost
	 * @return PayPalTypeItemTrackingDetailsType
	 */
	public function __construct($_ItemNumber = null,$_ItemQty = null,$_ItemQtyDelta = null,$_ItemAlert = null,$_ItemCost = null)
	{
		parent::__construct(array('ItemNumber'=>$_ItemNumber,'ItemQty'=>$_ItemQty,'ItemQtyDelta'=>$_ItemQtyDelta,'ItemAlert'=>$_ItemAlert,'ItemCost'=>$_ItemCost));
	}
	/**
	 * Set ItemNumber
	 * @param string ItemNumber
	 * @return string
	 */
	public function setItemNumber($_ItemNumber)
	{
		return ($this->ItemNumber = $_ItemNumber);
	}
	/**
	 * Get ItemNumber
	 * @return string
	 */
	public function getItemNumber()
	{
		return $this->ItemNumber;
	}
	/**
	 * Set ItemQty
	 * @param string ItemQty
	 * @return string
	 */
	public function setItemQty($_ItemQty)
	{
		return ($this->ItemQty = $_ItemQty);
	}
	/**
	 * Get ItemQty
	 * @return string
	 */
	public function getItemQty()
	{
		return $this->ItemQty;
	}
	/**
	 * Set ItemQtyDelta
	 * @param string ItemQtyDelta
	 * @return string
	 */
	public function setItemQtyDelta($_ItemQtyDelta)
	{
		return ($this->ItemQtyDelta = $_ItemQtyDelta);
	}
	/**
	 * Get ItemQtyDelta
	 * @return string
	 */
	public function getItemQtyDelta()
	{
		return $this->ItemQtyDelta;
	}
	/**
	 * Set ItemAlert
	 * @param string ItemAlert
	 * @return string
	 */
	public function setItemAlert($_ItemAlert)
	{
		return ($this->ItemAlert = $_ItemAlert);
	}
	/**
	 * Get ItemAlert
	 * @return string
	 */
	public function getItemAlert()
	{
		return $this->ItemAlert;
	}
	/**
	 * Set ItemCost
	 * @param string ItemCost
	 * @return string
	 */
	public function setItemCost($_ItemCost)
	{
		return ($this->ItemCost = $_ItemCost);
	}
	/**
	 * Get ItemCost
	 * @return string
	 */
	public function getItemCost()
	{
		return $this->ItemCost;
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