<?php
/**
 * Class file for SOAddressValidateTypeArrayOfFragmentAddress
 * @date 05/07/2012
 */
/**
 * Class SOAddressValidateTypeArrayOfFragmentAddress
 * @date 05/07/2012
 */
class SOAddressValidateTypeArrayOfFragmentAddress extends SOAddressValidateWsdlClass
{
	/**
	 * The FragmentAddress
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var SOAddressValidateTypeFragmentAddress
	 */
	public $FragmentAddress;
	/**
	 * Constructor
	 * @param SOAddressValidateTypeFragmentAddress FragmentAddress
	 * @return SOAddressValidateTypeArrayOfFragmentAddress
	 */
	public function __construct($_FragmentAddress = null)
	{
		parent::__construct(array('FragmentAddress'=>$_FragmentAddress));
	}
	/**
	 * Set FragmentAddress
	 * @param FragmentAddress FragmentAddress
	 * @return FragmentAddress
	 */
	public function setFragmentAddress($_FragmentAddress)
	{
		return ($this->FragmentAddress = $_FragmentAddress);
	}
	/**
	 * Get FragmentAddress
	 * @return SOAddressValidateTypeFragmentAddress
	 */
	public function getFragmentAddress()
	{
		return $this->FragmentAddress;
	}
	/**
	 * Returns the current element
	 * @see SOAddressValidateWsdlClass::current()
	 * @return SOAddressValidateTypeFragmentAddress
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see SOAddressValidateWsdlClass::item()
	 * @param int
	 * @return SOAddressValidateTypeFragmentAddress
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see SOAddressValidateWsdlClass::first()
	 * @return SOAddressValidateTypeFragmentAddress
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see SOAddressValidateWsdlClass::last()
	 * @return SOAddressValidateTypeFragmentAddress
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see SOAddressValidateWsdlClass::offsetGet()
	 * @param int
	 * @return SOAddressValidateTypeFragmentAddress
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'FragmentAddress'
	 */
	public function getAttributeName()
	{
		return 'FragmentAddress';
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