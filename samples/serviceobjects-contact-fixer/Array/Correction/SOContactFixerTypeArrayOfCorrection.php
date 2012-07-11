<?php
/**
 * Class file for SOContactFixerTypeArrayOfCorrection
 * @date 08/07/2012
 */
/**
 * Class SOContactFixerTypeArrayOfCorrection
 * @date 08/07/2012
 */
class SOContactFixerTypeArrayOfCorrection extends SOContactFixerWsdlClass
{
	/**
	 * The Correction
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var SOContactFixerTypeCorrection
	 */
	public $Correction;
	/**
	 * Constructor
	 * @param SOContactFixerTypeCorrection Correction
	 * @return SOContactFixerTypeArrayOfCorrection
	 */
	public function __construct($_Correction = null)
	{
		parent::__construct(array('Correction'=>$_Correction));
	}
	/**
	 * Set Correction
	 * @param Correction Correction
	 * @return Correction
	 */
	public function setCorrection($_Correction)
	{
		return ($this->Correction = $_Correction);
	}
	/**
	 * Get Correction
	 * @return SOContactFixerTypeCorrection
	 */
	public function getCorrection()
	{
		return $this->Correction;
	}
	/**
	 * Returns the current element
	 * @see SOContactFixerWsdlClass::current()
	 * @return SOContactFixerTypeCorrection
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see SOContactFixerWsdlClass::item()
	 * @param int
	 * @return SOContactFixerTypeCorrection
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see SOContactFixerWsdlClass::first()
	 * @return SOContactFixerTypeCorrection
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see SOContactFixerWsdlClass::last()
	 * @return SOContactFixerTypeCorrection
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see SOContactFixerWsdlClass::offsetGet()
	 * @param int
	 * @return SOContactFixerTypeCorrection
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'Correction'
	 */
	public function getAttributeName()
	{
		return 'Correction';
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