<?php
/**
 * Class file for PayPalTypeItemArrayType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeItemArrayType
 * @date 14/07/2012
 */
class PayPalTypeItemArrayType extends PayPalWsdlClass
{
	/**
	 * The Item
	 * @var PayPalTypeItemType
	 */
	public $Item;
	/**
	 * Constructor
	 * @param PayPalTypeItemType Item
	 * @return PayPalTypeItemArrayType
	 */
	public function __construct($_Item = null)
	{
		parent::__construct(array('Item'=>$_Item));
	}
	/**
	 * Set Item
	 * @param ItemType Item
	 * @return ItemType
	 */
	public function setItem($_Item)
	{
		return ($this->Item = $_Item);
	}
	/**
	 * Get Item
	 * @return PayPalTypeItemType
	 */
	public function getItem()
	{
		return $this->Item;
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