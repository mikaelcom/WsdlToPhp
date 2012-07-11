<?php
/**
 * Class file for AmazonECommerceServiceTypeOtherCategoriesSimilarProducts
 * @date 10/07/2012
 */
/**
 * Class AmazonECommerceServiceTypeOtherCategoriesSimilarProducts
 * @date 10/07/2012
 */
class AmazonECommerceServiceTypeOtherCategoriesSimilarProducts extends AmazonECommerceServiceWsdlClass
{
	/**
	 * The OtherCategoriesSimilarProduct
	 * @var AmazonECommerceServiceTypeOtherCategoriesSimilarProduct
	 */
	public $OtherCategoriesSimilarProduct;
	/**
	 * Constructor
	 * @param AmazonECommerceServiceTypeOtherCategoriesSimilarProduct OtherCategoriesSimilarProduct
	 * @return AmazonECommerceServiceTypeOtherCategoriesSimilarProducts
	 */
	public function __construct($_OtherCategoriesSimilarProduct = null)
	{
		parent::__construct(array('OtherCategoriesSimilarProduct'=>$_OtherCategoriesSimilarProduct));
	}
	/**
	 * Set OtherCategoriesSimilarProduct
	 * @param OtherCategoriesSimilarProduct OtherCategoriesSimilarProduct
	 * @return OtherCategoriesSimilarProduct
	 */
	public function setOtherCategoriesSimilarProduct($_OtherCategoriesSimilarProduct)
	{
		return ($this->OtherCategoriesSimilarProduct = $_OtherCategoriesSimilarProduct);
	}
	/**
	 * Get OtherCategoriesSimilarProduct
	 * @return AmazonECommerceServiceTypeOtherCategoriesSimilarProduct
	 */
	public function getOtherCategoriesSimilarProduct()
	{
		return $this->OtherCategoriesSimilarProduct;
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