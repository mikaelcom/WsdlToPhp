<?php
/**
 * Class file for AmazonECommerceServiceTypeCollectionSummary
 * @date 10/07/2012
 */
/**
 * Class AmazonECommerceServiceTypeCollectionSummary
 * @date 10/07/2012
 */
class AmazonECommerceServiceTypeCollectionSummary extends AmazonECommerceServiceWsdlClass
{
	/**
	 * The LowestListPrice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var AmazonECommerceServiceTypePrice
	 */
	public $LowestListPrice;
	/**
	 * The HighestListPrice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var AmazonECommerceServiceTypePrice
	 */
	public $HighestListPrice;
	/**
	 * The LowestSalePrice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var AmazonECommerceServiceTypePrice
	 */
	public $LowestSalePrice;
	/**
	 * The HighestSalePrice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var AmazonECommerceServiceTypePrice
	 */
	public $HighestSalePrice;
	/**
	 * Constructor
	 * @param AmazonECommerceServiceTypePrice LowestListPrice
	 * @param AmazonECommerceServiceTypePrice HighestListPrice
	 * @param AmazonECommerceServiceTypePrice LowestSalePrice
	 * @param AmazonECommerceServiceTypePrice HighestSalePrice
	 * @return AmazonECommerceServiceTypeCollectionSummary
	 */
	public function __construct($_LowestListPrice = null,$_HighestListPrice = null,$_LowestSalePrice = null,$_HighestSalePrice = null)
	{
		parent::__construct(array('LowestListPrice'=>$_LowestListPrice,'HighestListPrice'=>$_HighestListPrice,'LowestSalePrice'=>$_LowestSalePrice,'HighestSalePrice'=>$_HighestSalePrice));
	}
	/**
	 * Set LowestListPrice
	 * @param Price LowestListPrice
	 * @return Price
	 */
	public function setLowestListPrice($_LowestListPrice)
	{
		return ($this->LowestListPrice = $_LowestListPrice);
	}
	/**
	 * Get LowestListPrice
	 * @return AmazonECommerceServiceTypePrice
	 */
	public function getLowestListPrice()
	{
		return $this->LowestListPrice;
	}
	/**
	 * Set HighestListPrice
	 * @param Price HighestListPrice
	 * @return Price
	 */
	public function setHighestListPrice($_HighestListPrice)
	{
		return ($this->HighestListPrice = $_HighestListPrice);
	}
	/**
	 * Get HighestListPrice
	 * @return AmazonECommerceServiceTypePrice
	 */
	public function getHighestListPrice()
	{
		return $this->HighestListPrice;
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