<?php
/**
 * Class file for AmazonECommerceServiceTypeVariationSummary
 * @date 10/07/2012
 */
/**
 * Class AmazonECommerceServiceTypeVariationSummary
 * @date 10/07/2012
 */
class AmazonECommerceServiceTypeVariationSummary extends AmazonECommerceServiceWsdlClass
{
	/**
	 * The LowestPrice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonECommerceServiceTypePrice
	 */
	public $LowestPrice;
	/**
	 * The HighestPrice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonECommerceServiceTypePrice
	 */
	public $HighestPrice;
	/**
	 * The LowestSalePrice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonECommerceServiceTypePrice
	 */
	public $LowestSalePrice;
	/**
	 * The HighestSalePrice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonECommerceServiceTypePrice
	 */
	public $HighestSalePrice;
	/**
	 * Constructor
	 * @param AmazonECommerceServiceTypePrice LowestPrice
	 * @param AmazonECommerceServiceTypePrice HighestPrice
	 * @param AmazonECommerceServiceTypePrice LowestSalePrice
	 * @param AmazonECommerceServiceTypePrice HighestSalePrice
	 * @return AmazonECommerceServiceTypeVariationSummary
	 */
	public function __construct($_LowestPrice = null,$_HighestPrice = null,$_LowestSalePrice = null,$_HighestSalePrice = null)
	{
		parent::__construct(array('LowestPrice'=>$_LowestPrice,'HighestPrice'=>$_HighestPrice,'LowestSalePrice'=>$_LowestSalePrice,'HighestSalePrice'=>$_HighestSalePrice));
	}
	/**
	 * Set LowestPrice
	 * @param Price LowestPrice
	 * @return Price
	 */
	public function setLowestPrice($_LowestPrice)
	{
		return ($this->LowestPrice = $_LowestPrice);
	}
	/**
	 * Get LowestPrice
	 * @return AmazonECommerceServiceTypePrice
	 */
	public function getLowestPrice()
	{
		return $this->LowestPrice;
	}
	/**
	 * Set HighestPrice
	 * @param Price HighestPrice
	 * @return Price
	 */
	public function setHighestPrice($_HighestPrice)
	{
		return ($this->HighestPrice = $_HighestPrice);
	}
	/**
	 * Get HighestPrice
	 * @return AmazonECommerceServiceTypePrice
	 */
	public function getHighestPrice()
	{
		return $this->HighestPrice;
	}
	/**
	 * Set LowestSalePrice
	 * @param Price LowestSalePrice
	 * @return Price
	 */
	public function setLowestSalePrice($_LowestSalePrice)
	{
		return ($this->LowestSalePrice = $_LowestSalePrice);
	}
	/**
	 * Get LowestSalePrice
	 * @return AmazonECommerceServiceTypePrice
	 */
	public function getLowestSalePrice()
	{
		return $this->LowestSalePrice;
	}
	/**
	 * Set HighestSalePrice
	 * @param Price HighestSalePrice
	 * @return Price
	 */
	public function setHighestSalePrice($_HighestSalePrice)
	{
		return ($this->HighestSalePrice = $_HighestSalePrice);
	}
	/**
	 * Get HighestSalePrice
	 * @return AmazonECommerceServiceTypePrice
	 */
	public function getHighestSalePrice()
	{
		return $this->HighestSalePrice;
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