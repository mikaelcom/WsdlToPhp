<?php
/**
 * Class file for XiInsiderTypeArrayOfIssuerOwnership
 * @date 08/07/2012
 */
/**
 * Class XiInsiderTypeArrayOfIssuerOwnership
 * @date 08/07/2012
 */
class XiInsiderTypeArrayOfIssuerOwnership extends XiInsiderWsdlClass
{
	/**
	 * The IssuerOwnership
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiInsiderTypeIssuerOwnership
	 */
	public $IssuerOwnership;
	/**
	 * Constructor
	 * @param XiInsiderTypeIssuerOwnership IssuerOwnership
	 * @return XiInsiderTypeArrayOfIssuerOwnership
	 */
	public function __construct($_IssuerOwnership = null)
	{
		parent::__construct(array('IssuerOwnership'=>$_IssuerOwnership));
	}
	/**
	 * Set IssuerOwnership
	 * @param IssuerOwnership IssuerOwnership
	 * @return IssuerOwnership
	 */
	public function setIssuerOwnership($_IssuerOwnership)
	{
		return ($this->IssuerOwnership = $_IssuerOwnership);
	}
	/**
	 * Get IssuerOwnership
	 * @return XiInsiderTypeIssuerOwnership
	 */
	public function getIssuerOwnership()
	{
		return $this->IssuerOwnership;
	}
	/**
	 * Returns the current element
	 * @see XiInsiderWsdlClass::current()
	 * @return XiInsiderTypeIssuerOwnership
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiInsiderWsdlClass::item()
	 * @param int
	 * @return XiInsiderTypeIssuerOwnership
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiInsiderWsdlClass::first()
	 * @return XiInsiderTypeIssuerOwnership
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiInsiderWsdlClass::last()
	 * @return XiInsiderTypeIssuerOwnership
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiInsiderWsdlClass::offsetGet()
	 * @param int
	 * @return XiInsiderTypeIssuerOwnership
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'IssuerOwnership'
	 */
	public function getAttributeName()
	{
		return 'IssuerOwnership';
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