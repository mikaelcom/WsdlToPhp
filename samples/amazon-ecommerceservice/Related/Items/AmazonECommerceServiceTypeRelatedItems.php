<?php
/**
 * Class file for AmazonECommerceServiceTypeRelatedItems
 * @date 10/07/2012
 */
/**
 * Class AmazonECommerceServiceTypeRelatedItems
 * @date 10/07/2012
 */
class AmazonECommerceServiceTypeRelatedItems extends AmazonECommerceServiceWsdlClass
{
	/**
	 * The Relationship
	 * @var Relationship
	 */
	public $Relationship;
	/**
	 * The RelationshipType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $RelationshipType;
	/**
	 * The RelatedItemCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var nonNegativeInteger
	 */
	public $RelatedItemCount;
	/**
	 * The RelatedItemPageCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var nonNegativeInteger
	 */
	public $RelatedItemPageCount;
	/**
	 * The RelatedItemPage
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var nonNegativeInteger
	 */
	public $RelatedItemPage;
	/**
	 * The RelatedItem
	 * @var AmazonECommerceServiceTypeRelatedItem
	 */
	public $RelatedItem;
	/**
	 * Constructor
	 * @param Relationship Relationship
	 * @param string RelationshipType
	 * @param nonNegativeInteger RelatedItemCount
	 * @param nonNegativeInteger RelatedItemPageCount
	 * @param nonNegativeInteger RelatedItemPage
	 * @param AmazonECommerceServiceTypeRelatedItem RelatedItem
	 * @return AmazonECommerceServiceTypeRelatedItems
	 */
	public function __construct($_Relationship = null,$_RelationshipType = null,$_RelatedItemCount = null,$_RelatedItemPageCount = null,$_RelatedItemPage = null,$_RelatedItem = null)
	{
		parent::__construct(array('Relationship'=>$_Relationship,'RelationshipType'=>$_RelationshipType,'RelatedItemCount'=>$_RelatedItemCount,'RelatedItemPageCount'=>$_RelatedItemPageCount,'RelatedItemPage'=>$_RelatedItemPage,'RelatedItem'=>$_RelatedItem));
	}
	/**
	 * Set Relationship
	 * @param Relationship Relationship
	 * @return Relationship
	 */
	public function setRelationship($_Relationship)
	{
		return ($this->Relationship = $_Relationship);
	}
	/**
	 * Get Relationship
	 * @return Relationship
	 */
	public function getRelationship()
	{
		return $this->Relationship;
	}
	/**
	 * Set RelationshipType
	 * @param string RelationshipType
	 * @return string
	 */
	public function setRelationshipType($_RelationshipType)
	{
		return ($this->RelationshipType = $_RelationshipType);
	}
	/**
	 * Get RelationshipType
	 * @return string
	 */
	public function getRelationshipType()
	{
		return $this->RelationshipType;
	}
	/**
	 * Set RelatedItemCount
	 * @param nonNegativeInteger RelatedItemCount
	 * @return nonNegativeInteger
	 */
	public function setRelatedItemCount($_RelatedItemCount)
	{
		return ($this->RelatedItemCount = $_RelatedItemCount);
	}
	/**
	 * Get RelatedItemCount
	 * @return nonNegativeInteger
	 */
	public function getRelatedItemCount()
	{
		return $this->RelatedItemCount;
	}
	/**
	 * Set RelatedItemPageCount
	 * @param nonNegativeInteger RelatedItemPageCount
	 * @return nonNegativeInteger
	 */
	public function setRelatedItemPageCount($_RelatedItemPageCount)
	{
		return ($this->RelatedItemPageCount = $_RelatedItemPageCount);
	}
	/**
	 * Get RelatedItemPageCount
	 * @return nonNegativeInteger
	 */
	public function getRelatedItemPageCount()
	{
		return $this->RelatedItemPageCount;
	}
	/**
	 * Set RelatedItemPage
	 * @param nonNegativeInteger RelatedItemPage
	 * @return nonNegativeInteger
	 */
	public function setRelatedItemPage($_RelatedItemPage)
	{
		return ($this->RelatedItemPage = $_RelatedItemPage);
	}
	/**
	 * Get RelatedItemPage
	 * @return nonNegativeInteger
	 */
	public function getRelatedItemPage()
	{
		return $this->RelatedItemPage;
	}
	/**
	 * Set RelatedItem
	 * @param RelatedItem RelatedItem
	 * @return RelatedItem
	 */
	public function setRelatedItem($_RelatedItem)
	{
		return ($this->RelatedItem = $_RelatedItem);
	}
	/**
	 * Get RelatedItem
	 * @return AmazonECommerceServiceTypeRelatedItem
	 */
	public function getRelatedItem()
	{
		return $this->RelatedItem;
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