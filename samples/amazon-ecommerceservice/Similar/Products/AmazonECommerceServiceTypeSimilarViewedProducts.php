<?php
/**
 * Class file for AmazonECommerceServiceTypeSimilarViewedProducts
 * @date 10/07/2012
 */
/**
 * Class AmazonECommerceServiceTypeSimilarViewedProducts
 * @date 10/07/2012
 */
class AmazonECommerceServiceTypeSimilarViewedProducts extends AmazonECommerceServiceWsdlClass
{
	/**
	 * The SimilarViewedProduct
	 * @var AmazonECommerceServiceTypeSimilarViewedProduct
	 */
	public $SimilarViewedProduct;
	/**
	 * Constructor
	 * @param AmazonECommerceServiceTypeSimilarViewedProduct SimilarViewedProduct
	 * @return AmazonECommerceServiceTypeSimilarViewedProducts
	 */
	public function __construct($_SimilarViewedProduct = null)
	{
		parent::__construct(array('SimilarViewedProduct'=>$_SimilarViewedProduct));
	}
	/**
	 * Set SimilarViewedProduct
	 * @param SimilarViewedProduct SimilarViewedProduct
	 * @return SimilarViewedProduct
	 */
	public function setSimilarViewedProduct($_SimilarViewedProduct)
	{
		return ($this->SimilarViewedProduct = $_SimilarViewedProduct);
	}
	/**
	 * Get SimilarViewedProduct
	 * @return AmazonECommerceServiceTypeSimilarViewedProduct
	 */
	public function getSimilarViewedProduct()
	{
		return $this->SimilarViewedProduct;
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