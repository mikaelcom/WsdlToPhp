<?php
/**
 * Class file for AmazonECommerceServiceTypeCatalogNumberList
 * @date 10/07/2012
 */
/**
 * Class AmazonECommerceServiceTypeCatalogNumberList
 * @date 10/07/2012
 */
class AmazonECommerceServiceTypeCatalogNumberList extends AmazonECommerceServiceWsdlClass
{
	/**
	 * The CatalogNumberListElement
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var string
	 */
	public $CatalogNumberListElement;
	/**
	 * Constructor
	 * @param string CatalogNumberListElement
	 * @return AmazonECommerceServiceTypeCatalogNumberList
	 */
	public function __construct($_CatalogNumberListElement = null)
	{
		parent::__construct(array('CatalogNumberListElement'=>$_CatalogNumberListElement));
	}
	/**
	 * Set CatalogNumberListElement
	 * @param string CatalogNumberListElement
	 * @return string
	 */
	public function setCatalogNumberListElement($_CatalogNumberListElement)
	{
		return ($this->CatalogNumberListElement = $_CatalogNumberListElement);
	}
	/**
	 * Get CatalogNumberListElement
	 * @return string
	 */
	public function getCatalogNumberListElement()
	{
		return $this->CatalogNumberListElement;
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