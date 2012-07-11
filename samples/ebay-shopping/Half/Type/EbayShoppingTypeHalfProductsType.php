<?php
/**
 * Class file for EbayShoppingTypeHalfProductsType
 * @date 05/07/2012
 */
/**
 * Class EbayShoppingTypeHalfProductsType
 * Documentation : Information about an eBay catalog product.
 * @date 05/07/2012
 */
class EbayShoppingTypeHalfProductsType extends EbayShoppingWsdlClass
{
	/**
	 * The Product
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : A set of Half.com catalog products. This contains stock information about a particular DVD, book, or other product. When you use QueryKeywords in the request, FindHalfProducts returns a maximum of 20 products per page. When you use ProductID in the request, FindHalfProducts usually only returns 1 product. ItemCount is only returned when ProductID is used in the request and the IncludeSelector is set to Items or Details. (If more than one product matches the same ProductID, FindProducts will return all of those products. As of the time of this writing, we expect this to be a rare case.)
	 * @var EbayShoppingTypeHalfCatalogProductType
	 */
	public $Product;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayShoppingTypeHalfCatalogProductType Product
	 * @param DOMDocument any
	 * @return EbayShoppingTypeHalfProductsType
	 */
	public function __construct($_Product = null,$_any = null)
	{
		parent::__construct(array('Product'=>$_Product,'any'=>$_any));
	}
	/**
	 * Set Product
	 * @param HalfCatalogProductType Product
	 * @return HalfCatalogProductType
	 */
	public function setProduct($_Product)
	{
		return ($this->Product = $_Product);
	}
	/**
	 * Get Product
	 * @return EbayShoppingTypeHalfCatalogProductType
	 */
	public function getProduct()
	{
		return $this->Product;
	}
	/**
	 * Set any
	 * @param DOMDocument any
	 * @return DOMDocument
	 */
	public function setAny($_any)
	{
		return ($this->any = $_any);
	}
	/**
	 * Get any
	 * @return DOMDocument
	 */
	public function getAny()
	{
		if(!($this->any instanceof DOMDocument))
		{
			$dom = new DOMDocument('1.0','UTF-8');
			$dom->formatOutput = true;
			$dom->loadXML($this->any);
			$this->setAny($dom);
		}
		return $this->any;
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