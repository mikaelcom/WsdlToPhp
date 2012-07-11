<?php
/**
 * Class file for XiSecurityTypeArrayOfCapitalization
 * @date 08/07/2012
 */
/**
 * Class XiSecurityTypeArrayOfCapitalization
 * @date 08/07/2012
 */
class XiSecurityTypeArrayOfCapitalization extends XiSecurityWsdlClass
{
	/**
	 * The Capitalization
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiSecurityTypeCapitalization
	 */
	public $Capitalization;
	/**
	 * Constructor
	 * @param XiSecurityTypeCapitalization Capitalization
	 * @return XiSecurityTypeArrayOfCapitalization
	 */
	public function __construct($_Capitalization = null)
	{
		parent::__construct(array('Capitalization'=>$_Capitalization));
	}
	/**
	 * Set Capitalization
	 * @param Capitalization Capitalization
	 * @return Capitalization
	 */
	public function setCapitalization($_Capitalization)
	{
		return ($this->Capitalization = $_Capitalization);
	}
	/**
	 * Get Capitalization
	 * @return XiSecurityTypeCapitalization
	 */
	public function getCapitalization()
	{
		return $this->Capitalization;
	}
	/**
	 * Returns the current element
	 * @see XiSecurityWsdlClass::current()
	 * @return XiSecurityTypeCapitalization
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiSecurityWsdlClass::item()
	 * @param int
	 * @return XiSecurityTypeCapitalization
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiSecurityWsdlClass::first()
	 * @return XiSecurityTypeCapitalization
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiSecurityWsdlClass::last()
	 * @return XiSecurityTypeCapitalization
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiSecurityWsdlClass::offsetGet()
	 * @param int
	 * @return XiSecurityTypeCapitalization
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'Capitalization'
	 */
	public function getAttributeName()
	{
		return 'Capitalization';
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