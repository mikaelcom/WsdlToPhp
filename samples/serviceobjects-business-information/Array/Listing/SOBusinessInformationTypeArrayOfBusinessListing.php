<?php
/**
 * Class file for SOBusinessInformationTypeArrayOfBusinessListing
 * @date 08/07/2012
 */
/**
 * Class SOBusinessInformationTypeArrayOfBusinessListing
 * @date 08/07/2012
 */
class SOBusinessInformationTypeArrayOfBusinessListing extends SOBusinessInformationWsdlClass
{
	/**
	 * The BusinessListing
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var SOBusinessInformationTypeBusinessListing
	 */
	public $BusinessListing;
	/**
	 * Constructor
	 * @param SOBusinessInformationTypeBusinessListing BusinessListing
	 * @return SOBusinessInformationTypeArrayOfBusinessListing
	 */
	public function __construct($_BusinessListing = null)
	{
		parent::__construct(array('BusinessListing'=>$_BusinessListing));
	}
	/**
	 * Set BusinessListing
	 * @param BusinessListing BusinessListing
	 * @return BusinessListing
	 */
	public function setBusinessListing($_BusinessListing)
	{
		return ($this->BusinessListing = $_BusinessListing);
	}
	/**
	 * Get BusinessListing
	 * @return SOBusinessInformationTypeBusinessListing
	 */
	public function getBusinessListing()
	{
		return $this->BusinessListing;
	}
	/**
	 * Returns the current element
	 * @see SOBusinessInformationWsdlClass::current()
	 * @return SOBusinessInformationTypeBusinessListing
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see SOBusinessInformationWsdlClass::item()
	 * @param int
	 * @return SOBusinessInformationTypeBusinessListing
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see SOBusinessInformationWsdlClass::first()
	 * @return SOBusinessInformationTypeBusinessListing
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see SOBusinessInformationWsdlClass::last()
	 * @return SOBusinessInformationTypeBusinessListing
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see SOBusinessInformationWsdlClass::offsetGet()
	 * @param int
	 * @return SOBusinessInformationTypeBusinessListing
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'BusinessListing'
	 */
	public function getAttributeName()
	{
		return 'BusinessListing';
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