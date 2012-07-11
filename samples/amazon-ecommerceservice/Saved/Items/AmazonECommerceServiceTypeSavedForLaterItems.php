<?php
/**
 * Class file for AmazonECommerceServiceTypeSavedForLaterItems
 * @date 10/07/2012
 */
/**
 * Class AmazonECommerceServiceTypeSavedForLaterItems
 * @date 10/07/2012
 */
class AmazonECommerceServiceTypeSavedForLaterItems extends AmazonECommerceServiceWsdlClass
{
	/**
	 * The SubTotal
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonECommerceServiceTypePrice
	 */
	public $SubTotal;
	/**
	 * The SavedForLaterItem
	 * Meta informations :
	 * 	- maxOccurs : unbounded
	 * @var AmazonECommerceServiceTypeCartItem
	 */
	public $SavedForLaterItem;
	/**
	 * Constructor
	 * @param AmazonECommerceServiceTypePrice SubTotal
	 * @param AmazonECommerceServiceTypeCartItem SavedForLaterItem
	 * @return AmazonECommerceServiceTypeSavedForLaterItems
	 */
	public function __construct($_SubTotal = null,$_SavedForLaterItem = null)
	{
		parent::__construct(array('SubTotal'=>$_SubTotal,'SavedForLaterItem'=>$_SavedForLaterItem));
	}
	/**
	 * Set SubTotal
	 * @param Price SubTotal
	 * @return Price
	 */
	public function setSubTotal($_SubTotal)
	{
		return ($this->SubTotal = $_SubTotal);
	}
	/**
	 * Get SubTotal
	 * @return AmazonECommerceServiceTypePrice
	 */
	public function getSubTotal()
	{
		return $this->SubTotal;
	}
	/**
	 * Set SavedForLaterItem
	 * @param CartItem SavedForLaterItem
	 * @return CartItem
	 */
	public function setSavedForLaterItem($_SavedForLaterItem)
	{
		return ($this->SavedForLaterItem = $_SavedForLaterItem);
	}
	/**
	 * Get SavedForLaterItem
	 * @return AmazonECommerceServiceTypeCartItem
	 */
	public function getSavedForLaterItem()
	{
		return $this->SavedForLaterItem;
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