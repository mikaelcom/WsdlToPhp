<?php
/**
 * Class file for AmazonECommerceServiceTypeCollections
 * @date 10/07/2012
 */
/**
 * Class AmazonECommerceServiceTypeCollections
 * @date 10/07/2012
 */
class AmazonECommerceServiceTypeCollections extends AmazonECommerceServiceWsdlClass
{
	/**
	 * The Collection
	 * @var AmazonECommerceServiceTypeCollection
	 */
	public $Collection;
	/**
	 * Constructor
	 * @param AmazonECommerceServiceTypeCollection Collection
	 * @return AmazonECommerceServiceTypeCollections
	 */
	public function __construct($_Collection = null)
	{
		parent::__construct(array('Collection'=>$_Collection));
	}
	/**
	 * Set Collection
	 * @param Collection Collection
	 * @return Collection
	 */
	public function setCollection($_Collection)
	{
		return ($this->Collection = $_Collection);
	}
	/**
	 * Get Collection
	 * @return AmazonECommerceServiceTypeCollection
	 */
	public function getCollection()
	{
		return $this->Collection;
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