<?php
/**
 * Class file for BioIDWSTypeArrayOfSample
 * @date 15/08/2012
 */
/**
 * Class BioIDWSTypeArrayOfSample
 * @date 15/08/2012
 */
class BioIDWSTypeArrayOfSample extends BioIDWSWsdlClass
{
	/**
	 * The Sample
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var BioIDWSTypeSample
	 */
	public $Sample;
	/**
	 * Constructor
	 * @param BioIDWSTypeSample Sample
	 * @return BioIDWSTypeArrayOfSample
	 */
	public function __construct($_Sample = null)
	{
		parent::__construct(array('Sample'=>$_Sample));
	}
	/**
	 * Set Sample
	 * @param Sample Sample
	 * @return Sample
	 */
	public function setSample($_Sample)
	{
		return ($this->Sample = $_Sample);
	}
	/**
	 * Get Sample
	 * @return BioIDWSTypeSample
	 */
	public function getSample()
	{
		return $this->Sample;
	}
	/**
	 * Returns the current element
	 * @see BioIDWSWsdlClass::current()
	 * @return BioIDWSTypeSample
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see BioIDWSWsdlClass::item()
	 * @param int
	 * @return BioIDWSTypeSample
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see BioIDWSWsdlClass::first()
	 * @return BioIDWSTypeSample
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see BioIDWSWsdlClass::last()
	 * @return BioIDWSTypeSample
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see BioIDWSWsdlClass::offsetGet()
	 * @param int
	 * @return BioIDWSTypeSample
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'Sample'
	 */
	public function getAttributeName()
	{
		return 'Sample';
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