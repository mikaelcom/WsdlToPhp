<?php
/**
 * Class file for EbayTradingTypeProductSearchResultType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeProductSearchResultType
 * Documentation : Container for the results of a product query. Supports Pre-filled Product Information functionality. See the Developer's Guide for more information about working with this data.
 * @date 04/07/2012
 */
class EbayTradingTypeProductSearchResultType extends EbayTradingWsdlClass
{
	/**
	 * The ID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Key you specified in ProductSearchID in the search request to distinguish between query results. Primarily useful when conducting multiple searches in the same call. If no ProductSearchID value was specified in the request, returns the array index of the search result (beginning with 0). Not applicable to GetProductFamilyMembers.
	 * @var string
	 */
	public $ID;
	/**
	 * The NumProducts
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Total quantity of products that match the search request (across all characteristic sets). This value can exceed the actual quantity of products returned in the current virtual page. Not applicable to GetProductFamilyMembers.
	 * @var string
	 */
	public $NumProducts;
	/**
	 * The AttributeSet
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : A result containing a set of one or more product families. For GetProductSearchResults, if QueryKeywords and multiple characteristic set IDs were specified in the request, multiple AttributeSet objects can be returned. Each AttributeSet corresponds to a characteristic set ID specified in the request. See the eBay Web Services guide for more information about working with this data. For GetProductSearchResults, only returned with request version 387 and higher. For GetProductFamilyMembers, only returned with request version 415 and higher.
	 * @var EbayTradingTypeResponseAttributeSetType
	 */
	public $AttributeSet;
	/**
	 * The DisplayStockPhotos
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If true, your application should attempt to display stock photos that are returned. If false, your application should not attempt to display any stock photos that are returned. This recommendation is useful for catalog data related to products like coins, where stock photos are not applicable. An application with a graphical user interface can use this flag to determine when to hide stock photo widgets for a set of search results.
	 * @var boolean
	 */
	public $DisplayStockPhotos;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param string ID
	 * @param string NumProducts
	 * @param EbayTradingTypeResponseAttributeSetType AttributeSet
	 * @param boolean DisplayStockPhotos
	 * @param DOMDocument any
	 * @return EbayTradingTypeProductSearchResultType
	 */
	public function __construct($_ID = null,$_NumProducts = null,$_AttributeSet = null,$_DisplayStockPhotos = null,$_any = null)
	{
		parent::__construct(array('ID'=>$_ID,'NumProducts'=>$_NumProducts,'AttributeSet'=>$_AttributeSet,'DisplayStockPhotos'=>$_DisplayStockPhotos,'any'=>$_any));
	}
	/**
	 * Set ID
	 * @param string ID
	 * @return string
	 */
	public function setID($_ID)
	{
		return ($this->ID = $_ID);
	}
	/**
	 * Get ID
	 * @return string
	 */
	public function getID()
	{
		return $this->ID;
	}
	/**
	 * Set NumProducts
	 * @param string NumProducts
	 * @return string
	 */
	public function setNumProducts($_NumProducts)
	{
		return ($this->NumProducts = $_NumProducts);
	}
	/**
	 * Get NumProducts
	 * @return string
	 */
	public function getNumProducts()
	{
		return $this->NumProducts;
	}
	/**
	 * Set AttributeSet
	 * @param ResponseAttributeSetType AttributeSet
	 * @return ResponseAttributeSetType
	 */
	public function setAttributeSet($_AttributeSet)
	{
		return ($this->AttributeSet = $_AttributeSet);
	}
	/**
	 * Get AttributeSet
	 * @return EbayTradingTypeResponseAttributeSetType
	 */
	public function getAttributeSet()
	{
		return $this->AttributeSet;
	}
	/**
	 * Set DisplayStockPhotos
	 * @param boolean DisplayStockPhotos
	 * @return boolean
	 */
	public function setDisplayStockPhotos($_DisplayStockPhotos)
	{
		return ($this->DisplayStockPhotos = $_DisplayStockPhotos);
	}
	/**
	 * Get DisplayStockPhotos
	 * @return boolean
	 */
	public function getDisplayStockPhotos()
	{
		return $this->DisplayStockPhotos;
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