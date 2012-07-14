<?php
/**
 * Class file for PayPalTypeIncentiveItemType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeIncentiveItemType
 * @date 14/07/2012
 */
class PayPalTypeIncentiveItemType extends PayPalWsdlClass
{
	/**
	 * The ItemId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $ItemId;
	/**
	 * The PurchaseTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var dateTime
	 */
	public $PurchaseTime;
	/**
	 * The ItemCategoryList
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $ItemCategoryList;
	/**
	 * The ItemPrice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var PayPalTypeBasicAmountType
	 */
	public $ItemPrice;
	/**
	 * The ItemQuantity
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var integer
	 */
	public $ItemQuantity;
	/**
	 * Constructor
	 * @param string ItemId
	 * @param dateTime PurchaseTime
	 * @param string ItemCategoryList
	 * @param PayPalTypeBasicAmountType ItemPrice
	 * @param integer ItemQuantity
	 * @return PayPalTypeIncentiveItemType
	 */
	public function __construct($_ItemId = null,$_PurchaseTime = null,$_ItemCategoryList = null,$_ItemPrice = null,$_ItemQuantity = null)
	{
		parent::__construct(array('ItemId'=>$_ItemId,'PurchaseTime'=>$_PurchaseTime,'ItemCategoryList'=>$_ItemCategoryList,'ItemPrice'=>$_ItemPrice,'ItemQuantity'=>$_ItemQuantity));
	}
	/**
	 * Set ItemId
	 * @param string ItemId
	 * @return string
	 */
	public function setItemId($_ItemId)
	{
		return ($this->ItemId = $_ItemId);
	}
	/**
	 * Get ItemId
	 * @return string
	 */
	public function getItemId()
	{
		return $this->ItemId;
	}
	/**
	 * Set PurchaseTime
	 * @param dateTime PurchaseTime
	 * @return dateTime
	 */
	public function setPurchaseTime($_PurchaseTime)
	{
		return ($this->PurchaseTime = $_PurchaseTime);
	}
	/**
	 * Get PurchaseTime
	 * @return dateTime
	 */
	public function getPurchaseTime()
	{
		return $this->PurchaseTime;
	}
	/**
	 * Set ItemCategoryList
	 * @param string ItemCategoryList
	 * @return string
	 */
	public function setItemCategoryList($_ItemCategoryList)
	{
		return ($this->ItemCategoryList = $_ItemCategoryList);
	}
	/**
	 * Get ItemCategoryList
	 * @return string
	 */
	public function getItemCategoryList()
	{
		return $this->ItemCategoryList;
	}
	/**
	 * Set ItemPrice
	 * @param BasicAmountType ItemPrice
	 * @return BasicAmountType
	 */
	public function setItemPrice($_ItemPrice)
	{
		return ($this->ItemPrice = $_ItemPrice);
	}
	/**
	 * Get ItemPrice
	 * @return PayPalTypeBasicAmountType
	 */
	public function getItemPrice()
	{
		return $this->ItemPrice;
	}
	/**
	 * Set ItemQuantity
	 * @param integer ItemQuantity
	 * @return integer
	 */
	public function setItemQuantity($_ItemQuantity)
	{
		return ($this->ItemQuantity = $_ItemQuantity);
	}
	/**
	 * Get ItemQuantity
	 * @return integer
	 */
	public function getItemQuantity()
	{
		return $this->ItemQuantity;
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