<?php
/**
 * Class file for AmazonECommerceServiceTypeSimilarProducts
 * @date 10/07/2012
 */
/**
 * Class AmazonECommerceServiceTypeSimilarProducts
 * @date 10/07/2012
 */
class AmazonECommerceServiceTypeSimilarProducts extends AmazonECommerceServiceWsdlClass
{
	/**
	 * The SimilarProduct
	 * @var AmazonECommerceServiceTypeSimilarProduct
	 */
	public $SimilarProduct;
	/**
	 * Constructor
	 * @param AmazonECommerceServiceTypeSimilarProduct SimilarProduct
	 * @return AmazonECommerceServiceTypeSimilarProducts
	 */
	public function __construct($_SimilarProduct = null)
	{
		parent::__construct(array('SimilarProduct'=>$_SimilarProduct));
	}
	/**
	 * Set SimilarProduct
	 * @param SimilarProduct SimilarProduct
	 * @return SimilarProduct
	 */
	public function setSimilarProduct($_SimilarProduct)
	{
		return ($this->SimilarProduct = $_SimilarProduct);
	}
	/**
	 * Get SimilarProduct
	 * @return AmazonECommerceServiceTypeSimilarProduct
	 */
	public function getSimilarProduct()
	{
		return $this->SimilarProduct;
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