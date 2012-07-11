<?php
/**
 * Class file for EbayTradingTypeHistogramEntryType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeHistogramEntryType
 * Documentation : For GetProducts, this is the domain name (attribute set name or characteristic set name). A domain is like a high-level category.
 * @date 04/07/2012
 */
class EbayTradingTypeHistogramEntryType extends EbayTradingWsdlClass
{
	/**
	 * The Count
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : For GetProducts, the number of products found in the domain (characteristic set or attribute set). If a product is mapped to more than one domain, it will be counted separately for each domain. (For example, if the same product can be found in both Children's Books and Fiction Books, the count for both of these domains will include that product.) Furthermore, when a product is mapped to more than one domain, Product.AttributeSetID only returns the most applicable domain, as determined by eBay.
	 * @var int
	 */
	public $Count;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * The id
	 * Meta informations :
	 * 	- use : optional
	 * @var string
	 */
	public $id;
	/**
	 * The name
	 * Meta informations :
	 * 	- use : optional
	 * @var string
	 */
	public $name;
	/**
	 * Constructor
	 * @param int Count
	 * @param DOMDocument any
	 * @param string id
	 * @param string name
	 * @return EbayTradingTypeHistogramEntryType
	 */
	public function __construct($_Count = null,$_any = null,$_id = null,$_name = null)
	{
		parent::__construct(array('Count'=>$_Count,'any'=>$_any,'id'=>$_id,'name'=>$_name));
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
	 * Set id
	 * @param string id
	 * @return string
	 */
	public function setId($_id)
	{
		return ($this->id = $_id);
	}
	/**
	 * Get id
	 * @return string
	 */
	public function getId()
	{
		return $this->id;
	}
	/**
	 * Set name
	 * @param string name
	 * @return string
	 */
	public function setName($_name)
	{
		return ($this->name = $_name);
	}
	/**
	 * Get name
	 * @return string
	 */
	public function getName()
	{
		return $this->name;
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