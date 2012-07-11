<?php
/**
 * Class file for EbayTradingTypeProductFinderConstraintType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeProductFinderConstraintType
 * Documentation : An attribute (constraint) that was specified in a search request that was based on a product finder query. Used to help you map each query in a batch request to the corresponding search result in the response.
 * @date 04/07/2012
 */
class EbayTradingTypeProductFinderConstraintType extends EbayTradingWsdlClass
{
	/**
	 * The DisplayName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The search attribute name (e.g., Manufacturer).
	 * @var string
	 */
	public $DisplayName;
	/**
	 * The DisplayValue
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The search attribute value the user specified in the query (e.g., the actual name the user chose for the manufacturer).
	 * @var string
	 */
	public $DisplayValue;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param string DisplayName
	 * @param string DisplayValue
	 * @param DOMDocument any
	 * @return EbayTradingTypeProductFinderConstraintType
	 */
	public function __construct($_DisplayName = null,$_DisplayValue = null,$_any = null)
	{
		parent::__construct(array('DisplayName'=>$_DisplayName,'DisplayValue'=>$_DisplayValue,'any'=>$_any));
	}
	/**
	 * Set DisplayName
	 * @param string DisplayName
	 * @return string
	 */
	public function setDisplayName($_DisplayName)
	{
		return ($this->DisplayName = $_DisplayName);
	}
	/**
	 * Get DisplayName
	 * @return string
	 */
	public function getDisplayName()
	{
		return $this->DisplayName;
	}
	/**
	 * Set DisplayValue
	 * @param string DisplayValue
	 * @return string
	 */
	public function setDisplayValue($_DisplayValue)
	{
		return ($this->DisplayValue = $_DisplayValue);
	}
	/**
	 * Get DisplayValue
	 * @return string
	 */
	public function getDisplayValue()
	{
		return $this->DisplayValue;
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