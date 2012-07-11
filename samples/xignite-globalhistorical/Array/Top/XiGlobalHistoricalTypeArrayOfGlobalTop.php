<?php
/**
 * Class file for XiGlobalHistoricalTypeArrayOfGlobalTop
 * @date 08/07/2012
 */
/**
 * Class XiGlobalHistoricalTypeArrayOfGlobalTop
 * @date 08/07/2012
 */
class XiGlobalHistoricalTypeArrayOfGlobalTop extends XiGlobalHistoricalWsdlClass
{
	/**
	 * The GlobalTop
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiGlobalHistoricalTypeGlobalTop
	 */
	public $GlobalTop;
	/**
	 * Constructor
	 * @param XiGlobalHistoricalTypeGlobalTop GlobalTop
	 * @return XiGlobalHistoricalTypeArrayOfGlobalTop
	 */
	public function __construct($_GlobalTop = null)
	{
		parent::__construct(array('GlobalTop'=>$_GlobalTop));
	}
	/**
	 * Set GlobalTop
	 * @param GlobalTop GlobalTop
	 * @return GlobalTop
	 */
	public function setGlobalTop($_GlobalTop)
	{
		return ($this->GlobalTop = $_GlobalTop);
	}
	/**
	 * Get GlobalTop
	 * @return XiGlobalHistoricalTypeGlobalTop
	 */
	public function getGlobalTop()
	{
		return $this->GlobalTop;
	}
	/**
	 * Returns the current element
	 * @see XiGlobalHistoricalWsdlClass::current()
	 * @return XiGlobalHistoricalTypeGlobalTop
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiGlobalHistoricalWsdlClass::item()
	 * @param int
	 * @return XiGlobalHistoricalTypeGlobalTop
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiGlobalHistoricalWsdlClass::first()
	 * @return XiGlobalHistoricalTypeGlobalTop
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiGlobalHistoricalWsdlClass::last()
	 * @return XiGlobalHistoricalTypeGlobalTop
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiGlobalHistoricalWsdlClass::offsetGet()
	 * @param int
	 * @return XiGlobalHistoricalTypeGlobalTop
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'GlobalTop'
	 */
	public function getAttributeName()
	{
		return 'GlobalTop';
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