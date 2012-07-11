<?php
/**
 * Class file for EbayTradingTypePricingRecommendationsType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypePricingRecommendationsType
 * Documentation : Pricing data returned from the Product Pricing engine.
 * @date 04/07/2012
 */
class EbayTradingTypePricingRecommendationsType extends EbayTradingWsdlClass
{
	/**
	 * The ProductInfo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A product's pricing data (if any) and brief information about the product.
	 * @var EbayTradingTypeProductInfoType
	 */
	public $ProductInfo;
	/**
	 * Constructor
	 * @param EbayTradingTypeProductInfoType ProductInfo
	 * @return EbayTradingTypePricingRecommendationsType
	 */
	public function __construct($_ProductInfo = null)
	{
		parent::__construct(array('ProductInfo'=>$_ProductInfo));
	}
	/**
	 * Set ProductInfo
	 * @param ProductInfoType ProductInfo
	 * @return ProductInfoType
	 */
	public function setProductInfo($_ProductInfo)
	{
		return ($this->ProductInfo = $_ProductInfo);
	}
	/**
	 * Get ProductInfo
	 * @return EbayTradingTypeProductInfoType
	 */
	public function getProductInfo()
	{
		return $this->ProductInfo;
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