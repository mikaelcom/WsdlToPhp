<?php
/**
 * Class file for BioIDWSTypeArrayOfScoredClass
 * @date 15/08/2012
 */
/**
 * Class BioIDWSTypeArrayOfScoredClass
 * @date 15/08/2012
 */
class BioIDWSTypeArrayOfScoredClass extends BioIDWSWsdlClass
{
	/**
	 * The ScoredClass
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var BioIDWSTypeScoredClass
	 */
	public $ScoredClass;
	/**
	 * Constructor
	 * @param BioIDWSTypeScoredClass ScoredClass
	 * @return BioIDWSTypeArrayOfScoredClass
	 */
	public function __construct($_ScoredClass = null)
	{
		parent::__construct(array('ScoredClass'=>$_ScoredClass));
	}
	/**
	 * Set ScoredClass
	 * @param ScoredClass ScoredClass
	 * @return ScoredClass
	 */
	public function setScoredClass($_ScoredClass)
	{
		return ($this->ScoredClass = $_ScoredClass);
	}
	/**
	 * Get ScoredClass
	 * @return BioIDWSTypeScoredClass
	 */
	public function getScoredClass()
	{
		return $this->ScoredClass;
	}
	/**
	 * Returns the current element
	 * @see BioIDWSWsdlClass::current()
	 * @return BioIDWSTypeScoredClass
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see BioIDWSWsdlClass::item()
	 * @param int
	 * @return BioIDWSTypeScoredClass
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see BioIDWSWsdlClass::first()
	 * @return BioIDWSTypeScoredClass
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see BioIDWSWsdlClass::last()
	 * @return BioIDWSTypeScoredClass
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see BioIDWSWsdlClass::offsetGet()
	 * @param int
	 * @return BioIDWSTypeScoredClass
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'ScoredClass'
	 */
	public function getAttributeName()
	{
		return 'ScoredClass';
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