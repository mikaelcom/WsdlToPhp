<?php
/**
 * Class file for AmazonECommerceServiceTypeVariations
 * @date 10/07/2012
 */
/**
 * Class AmazonECommerceServiceTypeVariations
 * @date 10/07/2012
 */
class AmazonECommerceServiceTypeVariations extends AmazonECommerceServiceWsdlClass
{
	/**
	 * The TotalVariations
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var nonNegativeInteger
	 */
	public $TotalVariations;
	/**
	 * The TotalVariationPages
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var nonNegativeInteger
	 */
	public $TotalVariationPages;
	/**
	 * The VariationDimensions
	 * @var AmazonECommerceServiceTypeVariationDimensions
	 */
	public $VariationDimensions;
	/**
	 * The Item
	 * @var AmazonECommerceServiceTypeItem
	 */
	public $Item;
	/**
	 * Constructor
	 * @param nonNegativeInteger TotalVariations
	 * @param nonNegativeInteger TotalVariationPages
	 * @param AmazonECommerceServiceTypeVariationDimensions VariationDimensions
	 * @param AmazonECommerceServiceTypeItem Item
	 * @return AmazonECommerceServiceTypeVariations
	 */
	public function __construct($_TotalVariations = null,$_TotalVariationPages = null,$_VariationDimensions = null,$_Item = null)
	{
		parent::__construct(array('TotalVariations'=>$_TotalVariations,'TotalVariationPages'=>$_TotalVariationPages,'VariationDimensions'=>$_VariationDimensions,'Item'=>$_Item));
	}
	/**
	 * Set TotalVariations
	 * @param nonNegativeInteger TotalVariations
	 * @return nonNegativeInteger
	 */
	public function setTotalVariations($_TotalVariations)
	{
		return ($this->TotalVariations = $_TotalVariations);
	}
	/**
	 * Get TotalVariations
	 * @return nonNegativeInteger
	 */
	public function getTotalVariations()
	{
		return $this->TotalVariations;
	}
	/**
	 * Set TotalVariationPages
	 * @param nonNegativeInteger TotalVariationPages
	 * @return nonNegativeInteger
	 */
	public function setTotalVariationPages($_TotalVariationPages)
	{
		return ($this->TotalVariationPages = $_TotalVariationPages);
	}
	/**
	 * Get TotalVariationPages
	 * @return nonNegativeInteger
	 */
	public function getTotalVariationPages()
	{
		return $this->TotalVariationPages;
	}
	/**
	 * Set VariationDimensions
	 * @param VariationDimensions VariationDimensions
	 * @return VariationDimensions
	 */
	public function setVariationDimensions($_VariationDimensions)
	{
		return ($this->VariationDimensions = $_VariationDimensions);
	}
	/**
	 * Get VariationDimensions
	 * @return AmazonECommerceServiceTypeVariationDimensions
	 */
	public function getVariationDimensions()
	{
		return $this->VariationDimensions;
	}
	/**
	 * Set Item
	 * @param Item Item
	 * @return Item
	 */
	public function setItem($_Item)
	{
		return ($this->Item = $_Item);
	}
	/**
	 * Get Item
	 * @return AmazonECommerceServiceTypeItem
	 */
	public function getItem()
	{
		return $this->Item;
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