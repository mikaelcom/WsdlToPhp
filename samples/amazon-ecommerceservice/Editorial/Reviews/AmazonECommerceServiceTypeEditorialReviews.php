<?php
/**
 * Class file for AmazonECommerceServiceTypeEditorialReviews
 * @date 10/07/2012
 */
/**
 * Class AmazonECommerceServiceTypeEditorialReviews
 * @date 10/07/2012
 */
class AmazonECommerceServiceTypeEditorialReviews extends AmazonECommerceServiceWsdlClass
{
	/**
	 * The EditorialReview
	 * @var AmazonECommerceServiceTypeEditorialReview
	 */
	public $EditorialReview;
	/**
	 * Constructor
	 * @param AmazonECommerceServiceTypeEditorialReview EditorialReview
	 * @return AmazonECommerceServiceTypeEditorialReviews
	 */
	public function __construct($_EditorialReview = null)
	{
		parent::__construct(array('EditorialReview'=>$_EditorialReview));
	}
	/**
	 * Set EditorialReview
	 * @param EditorialReview EditorialReview
	 * @return EditorialReview
	 */
	public function setEditorialReview($_EditorialReview)
	{
		return ($this->EditorialReview = $_EditorialReview);
	}
	/**
	 * Get EditorialReview
	 * @return AmazonECommerceServiceTypeEditorialReview
	 */
	public function getEditorialReview()
	{
		return $this->EditorialReview;
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