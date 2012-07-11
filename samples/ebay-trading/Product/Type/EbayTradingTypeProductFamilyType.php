<?php
/**
 * Class file for EbayTradingTypeProductFamilyType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeProductFamilyType
 * Documentation : If true, the product family has more products than you requested in MaxChildrenPerFamily for a query in the GetProductSearchResults request. In this case, no products are returned in the GetProductSearchResults response. (Call GetProductFamilyMembers to retrieve all products in the family.) If false, the product family has MaxChildrenPerFamily or fewer product children, and the call returns all products in the family.
 * @date 04/07/2012
 */
class EbayTradingTypeProductFamilyType extends EbayTradingWsdlClass
{
	/**
	 * The ParentProduct
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A transient header that describes the current search results. Contains a an ID, a subset of attributes, and a typical stock photo to help a user easily distinguish the products in the current result set from products in other result sets returned in the same response. One ParentProduct is returned per ProductFamily.
	 * @var EbayTradingTypeProductType
	 */
	public $ParentProduct;
	/**
	 * The FamilyMembers
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : A set of products (within the same product family) that match the search query.
	 * @var EbayTradingTypeProductType
	 */
	public $FamilyMembers;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * The hasMoreChildren
	 * @var boolean
	 */
	public $hasMoreChildren;
	/**
	 * Constructor
	 * @param EbayTradingTypeProductType ParentProduct
	 * @param EbayTradingTypeProductType FamilyMembers
	 * @param DOMDocument any
	 * @param boolean hasMoreChildren
	 * @return EbayTradingTypeProductFamilyType
	 */
	public function __construct($_ParentProduct = null,$_FamilyMembers = null,$_any = null,$_hasMoreChildren = null)
	{
		parent::__construct(array('ParentProduct'=>$_ParentProduct,'FamilyMembers'=>$_FamilyMembers,'any'=>$_any,'hasMoreChildren'=>$_hasMoreChildren));
	}
	/**
	 * Set ParentProduct
	 * @param ProductType ParentProduct
	 * @return ProductType
	 */
	public function setParentProduct($_ParentProduct)
	{
		return ($this->ParentProduct = $_ParentProduct);
	}
	/**
	 * Get ParentProduct
	 * @return EbayTradingTypeProductType
	 */
	public function getParentProduct()
	{
		return $this->ParentProduct;
	}
	/**
	 * Set FamilyMembers
	 * @param ProductType FamilyMembers
	 * @return ProductType
	 */
	public function setFamilyMembers($_FamilyMembers)
	{
		return ($this->FamilyMembers = $_FamilyMembers);
	}
	/**
	 * Get FamilyMembers
	 * @return EbayTradingTypeProductType
	 */
	public function getFamilyMembers()
	{
		return $this->FamilyMembers;
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
	 * Set hasMoreChildren
	 * @param boolean hasMoreChildren
	 * @return boolean
	 */
	public function setHasMoreChildren($_hasMoreChildren)
	{
		return ($this->hasMoreChildren = $_hasMoreChildren);
	}
	/**
	 * Get hasMoreChildren
	 * @return boolean
	 */
	public function getHasMoreChildren()
	{
		return $this->hasMoreChildren;
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