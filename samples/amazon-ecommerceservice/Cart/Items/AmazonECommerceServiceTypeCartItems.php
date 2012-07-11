<?php
/**
 * Class file for AmazonECommerceServiceTypeCartItems
 * @date 10/07/2012
 */
/**
 * Class AmazonECommerceServiceTypeCartItems
 * @date 10/07/2012
 */
class AmazonECommerceServiceTypeCartItems extends AmazonECommerceServiceWsdlClass
{
	/**
	 * The SubTotal
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonECommerceServiceTypePrice
	 */
	public $SubTotal;
	/**
	 * The CartItem
	 * Meta informations :
	 * 	- maxOccurs : unbounded
	 * @var AmazonECommerceServiceTypeCartItem
	 */
	public $CartItem;
	/**
	 * Constructor
	 * @param AmazonECommerceServiceTypePrice SubTotal
	 * @param AmazonECommerceServiceTypeCartItem CartItem
	 * @return AmazonECommerceServiceTypeCartItems
	 */
	public function __construct($_SubTotal = null,$_CartItem = null)
	{
		parent::__construct(array('SubTotal'=>$_SubTotal,'CartItem'=>$_CartItem));
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
	 * Set CartItem
	 * @param CartItem CartItem
	 * @return CartItem
	 */
	public function setCartItem($_CartItem)
	{
		return ($this->CartItem = $_CartItem);
	}
	/**
	 * Get CartItem
	 * @return AmazonECommerceServiceTypeCartItem
	 */
	public function getCartItem()
	{
		return $this->CartItem;
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