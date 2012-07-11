<?php
/**
 * Class file for EbayShoppingTypeHistogramEntryType
 * @date 05/07/2012
 */
/**
 * Class EbayShoppingTypeHistogramEntryType
 * Documentation : A generic histogram entry type.
 * @date 05/07/2012
 */
class EbayShoppingTypeHistogramEntryType extends EbayShoppingWsdlClass
{
	/**
	 * The Name
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This is the domain name.<br> <br> A product can be mapped to more than one domain. This means that even if a name appears in this histogram and the Count is greater than 1, you won't necessarily see the same name returned for each returned product (in the Product node of the response). That is, Product.DomainName only returns the most applicable domain name (as determined by eBay).
	 * @var string
	 */
	public $Name;
	/**
	 * The Count
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This is the number of products found in the domain. If a product is mapped to more than one domain, it is counted separately for each domain. (For example, if the same product name appears in both Children's Books and Fiction Books, the count for both of these domains will include that product.) This means you cannot sum the product counts to determine the total number of matching products across all domains. The histogram is only intended to show the number of matching products in each individual domain.
	 * @var int
	 */
	public $Count;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param string Name
	 * @param int Count
	 * @param DOMDocument any
	 * @return EbayShoppingTypeHistogramEntryType
	 */
	public function __construct($_Name = null,$_Count = null,$_any = null)
	{
		parent::__construct(array('Name'=>$_Name,'Count'=>$_Count,'any'=>$_any));
	}
	/**
	 * Set Name
	 * @param string Name
	 * @return string
	 */
	public function setName($_Name)
	{
		return ($this->Name = $_Name);
	}
	/**
	 * Get Name
	 * @return string
	 */
	public function getName()
	{
		return $this->Name;
	}
	/**
	 * Set Count
	 * @param int Count
	 * @return int
	 */
	public function setCount($_Count)
	{
		return ($this->Count = $_Count);
	}
	/**
	 * Get Count
	 * @return int
	 */
	public function getCount()
	{
		return $this->Count;
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