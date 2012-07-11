<?php
/**
 * Class file for XiInsiderTypeArrayOfIssuerChange
 * @date 08/07/2012
 */
/**
 * Class XiInsiderTypeArrayOfIssuerChange
 * @date 08/07/2012
 */
class XiInsiderTypeArrayOfIssuerChange extends XiInsiderWsdlClass
{
	/**
	 * The IssuerChange
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiInsiderTypeIssuerChange
	 */
	public $IssuerChange;
	/**
	 * Constructor
	 * @param XiInsiderTypeIssuerChange IssuerChange
	 * @return XiInsiderTypeArrayOfIssuerChange
	 */
	public function __construct($_IssuerChange = null)
	{
		parent::__construct(array('IssuerChange'=>$_IssuerChange));
	}
	/**
	 * Set IssuerChange
	 * @param IssuerChange IssuerChange
	 * @return IssuerChange
	 */
	public function setIssuerChange($_IssuerChange)
	{
		return ($this->IssuerChange = $_IssuerChange);
	}
	/**
	 * Get IssuerChange
	 * @return XiInsiderTypeIssuerChange
	 */
	public function getIssuerChange()
	{
		return $this->IssuerChange;
	}
	/**
	 * Returns the current element
	 * @see XiInsiderWsdlClass::current()
	 * @return XiInsiderTypeIssuerChange
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiInsiderWsdlClass::item()
	 * @param int
	 * @return XiInsiderTypeIssuerChange
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiInsiderWsdlClass::first()
	 * @return XiInsiderTypeIssuerChange
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiInsiderWsdlClass::last()
	 * @return XiInsiderTypeIssuerChange
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiInsiderWsdlClass::offsetGet()
	 * @param int
	 * @return XiInsiderTypeIssuerChange
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'IssuerChange'
	 */
	public function getAttributeName()
	{
		return 'IssuerChange';
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