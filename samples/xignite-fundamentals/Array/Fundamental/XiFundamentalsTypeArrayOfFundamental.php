<?php
/**
 * Class file for XiFundamentalsTypeArrayOfFundamental
 * @date 08/07/2012
 */
/**
 * Class XiFundamentalsTypeArrayOfFundamental
 * @date 08/07/2012
 */
class XiFundamentalsTypeArrayOfFundamental extends XiFundamentalsWsdlClass
{
	/**
	 * The Fundamental
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiFundamentalsTypeFundamental
	 */
	public $Fundamental;
	/**
	 * Constructor
	 * @param XiFundamentalsTypeFundamental Fundamental
	 * @return XiFundamentalsTypeArrayOfFundamental
	 */
	public function __construct($_Fundamental = null)
	{
		parent::__construct(array('Fundamental'=>$_Fundamental));
	}
	/**
	 * Set Fundamental
	 * @param Fundamental Fundamental
	 * @return Fundamental
	 */
	public function setFundamental($_Fundamental)
	{
		return ($this->Fundamental = $_Fundamental);
	}
	/**
	 * Get Fundamental
	 * @return XiFundamentalsTypeFundamental
	 */
	public function getFundamental()
	{
		return $this->Fundamental;
	}
	/**
	 * Returns the current element
	 * @see XiFundamentalsWsdlClass::current()
	 * @return XiFundamentalsTypeFundamental
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiFundamentalsWsdlClass::item()
	 * @param int
	 * @return XiFundamentalsTypeFundamental
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiFundamentalsWsdlClass::first()
	 * @return XiFundamentalsTypeFundamental
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiFundamentalsWsdlClass::last()
	 * @return XiFundamentalsTypeFundamental
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiFundamentalsWsdlClass::offsetGet()
	 * @param int
	 * @return XiFundamentalsTypeFundamental
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'Fundamental'
	 */
	public function getAttributeName()
	{
		return 'Fundamental';
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