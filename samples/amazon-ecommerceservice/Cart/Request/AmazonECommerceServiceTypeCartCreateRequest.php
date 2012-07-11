<?php
/**
 * Class file for AmazonECommerceServiceTypeCartCreateRequest
 * @date 10/07/2012
 */
/**
 * Class AmazonECommerceServiceTypeCartCreateRequest
 * @date 10/07/2012
 */
class AmazonECommerceServiceTypeCartCreateRequest extends AmazonECommerceServiceWsdlClass
{
	/**
	 * The MergeCart
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $MergeCart;
	/**
	 * The Items
	 * @var AmazonECommerceServiceTypeItems
	 */
	public $Items;
	/**
	 * The ResponseGroup
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var string
	 */
	public $ResponseGroup;
	/**
	 * Constructor
	 * @param string MergeCart
	 * @param AmazonECommerceServiceTypeItems Items
	 * @param string ResponseGroup
	 * @return AmazonECommerceServiceTypeCartCreateRequest
	 */
	public function __construct($_MergeCart = null,$_Items = null,$_ResponseGroup = null)
	{
		parent::__construct(array('MergeCart'=>$_MergeCart,'Items'=>$_Items,'ResponseGroup'=>$_ResponseGroup));
	}
	/**
	 * Set MergeCart
	 * @param string MergeCart
	 * @return string
	 */
	public function setMergeCart($_MergeCart)
	{
		return ($this->MergeCart = $_MergeCart);
	}
	/**
	 * Get MergeCart
	 * @return string
	 */
	public function getMergeCart()
	{
		return $this->MergeCart;
	}
	/**
	 * Set Items
	 * @param Items Items
	 * @return Items
	 */
	public function setItems($_Items)
	{
		return ($this->Items = $_Items);
	}
	/**
	 * Get Items
	 * @return AmazonECommerceServiceTypeItems
	 */
	public function getItems()
	{
		return $this->Items;
	}
	/**
	 * Set ResponseGroup
	 * @param string ResponseGroup
	 * @return string
	 */
	public function setResponseGroup($_ResponseGroup)
	{
		return ($this->ResponseGroup = $_ResponseGroup);
	}
	/**
	 * Get ResponseGroup
	 * @return string
	 */
	public function getResponseGroup()
	{
		return $this->ResponseGroup;
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