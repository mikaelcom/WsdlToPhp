<?php
/**
 * Class file for XiGlobalFundamentalsTypeArrayOfFundamental
 * @date 08/07/2012
 */
/**
 * Class XiGlobalFundamentalsTypeArrayOfFundamental
 * @date 08/07/2012
 */
class XiGlobalFundamentalsTypeArrayOfFundamental extends XiGlobalFundamentalsWsdlClass
{
	/**
	 * The Fundamental
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiGlobalFundamentalsTypeFundamental
	 */
	public $Fundamental;
	/**
	 * Constructor
	 * @param XiGlobalFundamentalsTypeFundamental Fundamental
	 * @return XiGlobalFundamentalsTypeArrayOfFundamental
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
	 * @return XiGlobalFundamentalsTypeFundamental
	 */
	public function getFundamental()
	{
		return $this->Fundamental;
	}
	/**
	 * Returns the current element
	 * @see XiGlobalFundamentalsWsdlClass::current()
	 * @return XiGlobalFundamentalsTypeFundamental
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiGlobalFundamentalsWsdlClass::item()
	 * @param int
	 * @return XiGlobalFundamentalsTypeFundamental
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiGlobalFundamentalsWsdlClass::first()
	 * @return XiGlobalFundamentalsTypeFundamental
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiGlobalFundamentalsWsdlClass::last()
	 * @return XiGlobalFundamentalsTypeFundamental
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiGlobalFundamentalsWsdlClass::offsetGet()
	 * @param int
	 * @return XiGlobalFundamentalsTypeFundamental
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