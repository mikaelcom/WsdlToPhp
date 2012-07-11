<?php
/**
 * Class file for XiGlobalmasterTypeArrayOfClassification
 * @date 08/07/2012
 */
/**
 * Class XiGlobalmasterTypeArrayOfClassification
 * @date 08/07/2012
 */
class XiGlobalmasterTypeArrayOfClassification extends XiGlobalmasterWsdlClass
{
	/**
	 * The Classification
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiGlobalmasterTypeClassification
	 */
	public $Classification;
	/**
	 * Constructor
	 * @param XiGlobalmasterTypeClassification Classification
	 * @return XiGlobalmasterTypeArrayOfClassification
	 */
	public function __construct($_Classification = null)
	{
		parent::__construct(array('Classification'=>$_Classification));
	}
	/**
	 * Set Classification
	 * @param Classification Classification
	 * @return Classification
	 */
	public function setClassification($_Classification)
	{
		return ($this->Classification = $_Classification);
	}
	/**
	 * Get Classification
	 * @return XiGlobalmasterTypeClassification
	 */
	public function getClassification()
	{
		return $this->Classification;
	}
	/**
	 * Returns the current element
	 * @see XiGlobalmasterWsdlClass::current()
	 * @return XiGlobalmasterTypeClassification
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiGlobalmasterWsdlClass::item()
	 * @param int
	 * @return XiGlobalmasterTypeClassification
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiGlobalmasterWsdlClass::first()
	 * @return XiGlobalmasterTypeClassification
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiGlobalmasterWsdlClass::last()
	 * @return XiGlobalmasterTypeClassification
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiGlobalmasterWsdlClass::offsetGet()
	 * @param int
	 * @return XiGlobalmasterTypeClassification
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'Classification'
	 */
	public function getAttributeName()
	{
		return 'Classification';
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