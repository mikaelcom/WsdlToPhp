<?php
/**
 * Class file for XiIndicesTypeArrayOfIndicator
 * @date 08/07/2012
 */
/**
 * Class XiIndicesTypeArrayOfIndicator
 * @date 08/07/2012
 */
class XiIndicesTypeArrayOfIndicator extends XiIndicesWsdlClass
{
	/**
	 * The Indicator
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiIndicesTypeIndicator
	 */
	public $Indicator;
	/**
	 * Constructor
	 * @param XiIndicesTypeIndicator Indicator
	 * @return XiIndicesTypeArrayOfIndicator
	 */
	public function __construct($_Indicator = null)
	{
		parent::__construct(array('Indicator'=>$_Indicator));
	}
	/**
	 * Set Indicator
	 * @param Indicator Indicator
	 * @return Indicator
	 */
	public function setIndicator($_Indicator)
	{
		return ($this->Indicator = $_Indicator);
	}
	/**
	 * Get Indicator
	 * @return XiIndicesTypeIndicator
	 */
	public function getIndicator()
	{
		return $this->Indicator;
	}
	/**
	 * Returns the current element
	 * @see XiIndicesWsdlClass::current()
	 * @return XiIndicesTypeIndicator
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiIndicesWsdlClass::item()
	 * @param int
	 * @return XiIndicesTypeIndicator
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiIndicesWsdlClass::first()
	 * @return XiIndicesTypeIndicator
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiIndicesWsdlClass::last()
	 * @return XiIndicesTypeIndicator
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiIndicesWsdlClass::offsetGet()
	 * @param int
	 * @return XiIndicesTypeIndicator
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'Indicator'
	 */
	public function getAttributeName()
	{
		return 'Indicator';
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