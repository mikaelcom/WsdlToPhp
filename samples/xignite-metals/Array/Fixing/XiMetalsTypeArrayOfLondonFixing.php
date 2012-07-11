<?php
/**
 * Class file for XiMetalsTypeArrayOfLondonFixing
 * @date 08/07/2012
 */
/**
 * Class XiMetalsTypeArrayOfLondonFixing
 * @date 08/07/2012
 */
class XiMetalsTypeArrayOfLondonFixing extends XiMetalsWsdlClass
{
	/**
	 * The LondonFixing
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiMetalsTypeLondonFixing
	 */
	public $LondonFixing;
	/**
	 * Constructor
	 * @param XiMetalsTypeLondonFixing LondonFixing
	 * @return XiMetalsTypeArrayOfLondonFixing
	 */
	public function __construct($_LondonFixing = null)
	{
		parent::__construct(array('LondonFixing'=>$_LondonFixing));
	}
	/**
	 * Set LondonFixing
	 * @param LondonFixing LondonFixing
	 * @return LondonFixing
	 */
	public function setLondonFixing($_LondonFixing)
	{
		return ($this->LondonFixing = $_LondonFixing);
	}
	/**
	 * Get LondonFixing
	 * @return XiMetalsTypeLondonFixing
	 */
	public function getLondonFixing()
	{
		return $this->LondonFixing;
	}
	/**
	 * Returns the current element
	 * @see XiMetalsWsdlClass::current()
	 * @return XiMetalsTypeLondonFixing
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiMetalsWsdlClass::item()
	 * @param int
	 * @return XiMetalsTypeLondonFixing
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiMetalsWsdlClass::first()
	 * @return XiMetalsTypeLondonFixing
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiMetalsWsdlClass::last()
	 * @return XiMetalsTypeLondonFixing
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiMetalsWsdlClass::offsetGet()
	 * @param int
	 * @return XiMetalsTypeLondonFixing
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'LondonFixing'
	 */
	public function getAttributeName()
	{
		return 'LondonFixing';
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