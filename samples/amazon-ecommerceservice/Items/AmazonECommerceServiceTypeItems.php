<?php
/**
 * Class file for AmazonECommerceServiceTypeItems
 * @date 10/07/2012
 */
/**
 * Class AmazonECommerceServiceTypeItems
 * @date 10/07/2012
 */
class AmazonECommerceServiceTypeItems extends AmazonECommerceServiceWsdlClass
{
	/**
	 * The Item
	 * @var AmazonECommerceServiceTypeItem
	 */
	public $Item;
	/**
	 * Constructor
	 * @param AmazonECommerceServiceTypeItem Item
	 * @return AmazonECommerceServiceTypeItems
	 */
	public function __construct($_Item = null)
	{
		parent::__construct(array('Item'=>$_Item));
	}
	/**
	 * Set Item
	 * @param Item Item
	 * @return Item
	 */
	public function setItem($_Item)
	{
		return ($this->Item = $_Item);
	}
	/**
	 * Get Item
	 * @return AmazonECommerceServiceTypeItem
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