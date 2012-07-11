<?php
/**
 * Class file for EbayFindTypeAspectValueHistogram
 * @date 04/07/2012
 */
/**
 * Class EbayFindTypeAspectValueHistogram
 * Documentation : Name of an aspect value. For example, "Short Sleeve" could be an aspect value of the Sleeve Style aspect in the Women's Dresses domain, or "Athletic" could be an aspect value of the Style aspect in the Men's Shoes domain.
 * @date 04/07/2012
 */
class EbayFindTypeAspectValueHistogram extends EbayFindWsdlClass
{
	/**
	 * The count
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : Number of items that share the characteristic the respective aspect value.
	 * @var long
	 */
	public $count;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * The valueName
	 * Meta informations :
	 * 	- use : required
	 * @var string
	 */
	public $valueName;
	/**
	 * Constructor
	 * @param long count
	 * @param DOMDocument any
	 * @param string valueName
	 * @return EbayFindTypeAspectValueHistogram
	 */
	public function __construct($_count,$_any = null,$_valueName = null)
	{
		parent::__construct(array('count'=>$_count,'any'=>$_any,'valueName'=>$_valueName));
	}
	/**
	 * Set count
	 * @param long count
	 * @return long
	 */
	public function setCount($_count)
	{
		return ($this->count = $_count);
	}
	/**
	 * Get count
	 * @return long
	 */
	public function getCount()
	{
		return $this->count;
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
	 * Set valueName
	 * @param string valueName
	 * @return string
	 */
	public function setValueName($_valueName)
	{
		return ($this->valueName = $_valueName);
	}
	/**
	 * Get valueName
	 * @return string
	 */
	public function getValueName()
	{
		return $this->valueName;
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