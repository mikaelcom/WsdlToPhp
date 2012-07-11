<?php
/**
 * Class file for EbayTradingTypeProductRecommendationsType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeProductRecommendationsType
 * Documentation : A list of products returned from the Suggested Attributes engine.
 * @date 04/07/2012
 */
class EbayTradingTypeProductRecommendationsType extends EbayTradingWsdlClass
{
	/**
	 * The Product
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : A suggested product to use to list an item with Pre-filled Item Information. Returned from GetItemRecommendations when the Suggested Attributes engine is used See the Developer's Guide for additional details.
	 * @var EbayTradingTypeProductInfoType
	 */
	public $Product;
	/**
	 * Constructor
	 * @param EbayTradingTypeProductInfoType Product
	 * @return EbayTradingTypeProductRecommendationsType
	 */
	public function __construct($_Product = null)
	{
		parent::__construct(array('Product'=>$_Product));
	}
	/**
	 * Set Product
	 * @param ProductInfoType Product
	 * @return ProductInfoType
	 */
	public function setProduct($_Product)
	{
		return ($this->Product = $_Product);
	}
	/**
	 * Get Product
	 * @return EbayTradingTypeProductInfoType
	 */
	public function getProduct()
	{
		return $this->Product;
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