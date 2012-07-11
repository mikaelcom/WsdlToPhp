<?php
/**
 * Class file for EbayShoppingTypeNameValueListType
 * @date 05/07/2012
 */
/**
 * Class EbayShoppingTypeNameValueListType
 * Documentation : A name and corresponding value (a name/value pair).
 * @date 05/07/2012
 */
class EbayShoppingTypeNameValueListType extends EbayShoppingWsdlClass
{
	/**
	 * The Name
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The name of the item specific. <br> <br> This field is returned only in responses if the seller included an item specific Name in the listing. However, if the seller didn't also include a corresponding value for the item specific, it is best to not display the name to name to avoid confusing users. <br> <br> For the item condition, this usually includes the word "Condition" for eBay US, UK, Australia, and India listings; and "Artikelzustand" for eBay Germany, Austria, and Switzerland listings. <br> <br> <span class="tablenote"><b>Note:</b> Ignore item specifics with SIFFTAS in the name. These are for internal use by eBay and aren't meaningful to users. </span>
	 * @var string
	 */
	public $Name;
	/**
	 * The Value
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : A value for the item specific. <br> <br> This field is only returned in responses if the seller included a value for an item specific. In the GetSingleItem response, this field is always returned for each item specific that is returned (if any). However, if the seller didn't select a value for the item specific, this field may return empty, or it may return a value like "-", "Not Selected", or "Unspecified" (or the equivalent in the language of the site). <br> <br> For the item condition, this usually includes the word "New" or "Used" for eBay US, UK, Australia, and India listings; and "Neu" or "Gebraucht" for eBay Germany, Austria, and Switzerland listings.
	 * @var string
	 */
	public $Value;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param string Name
	 * @param string Value
	 * @param DOMDocument any
	 * @return EbayShoppingTypeNameValueListType
	 */
	public function __construct($_Name = null,$_Value = null,$_any = null)
	{
		parent::__construct(array('Name'=>$_Name,'Value'=>$_Value,'any'=>$_any));
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
	 * Set Value
	 * @param string Value
	 * @return string
	 */
	public function setValue($_Value)
	{
		return ($this->Value = $_Value);
	}
	/**
	 * Get Value
	 * @return string
	 */
	public function getValue()
	{
		return $this->Value;
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