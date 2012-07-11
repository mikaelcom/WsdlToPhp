<?php
/**
 * Class file for AmazonECommerceServiceTypeCollection
 * @date 10/07/2012
 */
/**
 * Class AmazonECommerceServiceTypeCollection
 * @date 10/07/2012
 */
class AmazonECommerceServiceTypeCollection extends AmazonECommerceServiceWsdlClass
{
	/**
	 * The CollectionSummary
	 * @var AmazonECommerceServiceTypeCollectionSummary
	 */
	public $CollectionSummary;
	/**
	 * The CollectionParent
	 * @var AmazonECommerceServiceTypeCollectionParent
	 */
	public $CollectionParent;
	/**
	 * The CollectionItem
	 * @var AmazonECommerceServiceTypeCollectionItem
	 */
	public $CollectionItem;
	/**
	 * Constructor
	 * @param AmazonECommerceServiceTypeCollectionSummary CollectionSummary
	 * @param AmazonECommerceServiceTypeCollectionParent CollectionParent
	 * @param AmazonECommerceServiceTypeCollectionItem CollectionItem
	 * @return AmazonECommerceServiceTypeCollection
	 */
	public function __construct($_CollectionSummary = null,$_CollectionParent = null,$_CollectionItem = null)
	{
		parent::__construct(array('CollectionSummary'=>$_CollectionSummary,'CollectionParent'=>$_CollectionParent,'CollectionItem'=>$_CollectionItem));
	}
	/**
	 * Set CollectionSummary
	 * @param CollectionSummary CollectionSummary
	 * @return CollectionSummary
	 */
	public function setCollectionSummary($_CollectionSummary)
	{
		return ($this->CollectionSummary = $_CollectionSummary);
	}
	/**
	 * Get CollectionSummary
	 * @return AmazonECommerceServiceTypeCollectionSummary
	 */
	public function getCollectionSummary()
	{
		return $this->CollectionSummary;
	}
	/**
	 * Set CollectionParent
	 * @param CollectionParent CollectionParent
	 * @return CollectionParent
	 */
	public function setCollectionParent($_CollectionParent)
	{
		return ($this->CollectionParent = $_CollectionParent);
	}
	/**
	 * Get CollectionParent
	 * @return AmazonECommerceServiceTypeCollectionParent
	 */
	public function getCollectionParent()
	{
		return $this->CollectionParent;
	}
	/**
	 * Set CollectionItem
	 * @param CollectionItem CollectionItem
	 * @return CollectionItem
	 */
	public function setCollectionItem($_CollectionItem)
	{
		return ($this->CollectionItem = $_CollectionItem);
	}
	/**
	 * Get CollectionItem
	 * @return AmazonECommerceServiceTypeCollectionItem
	 */
	public function getCollectionItem()
	{
		return $this->CollectionItem;
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