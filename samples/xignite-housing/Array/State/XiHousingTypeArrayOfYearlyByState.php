<?php
/**
 * Class file for XiHousingTypeArrayOfYearlyByState
 * @date 08/07/2012
 */
/**
 * Class XiHousingTypeArrayOfYearlyByState
 * @date 08/07/2012
 */
class XiHousingTypeArrayOfYearlyByState extends XiHousingWsdlClass
{
	/**
	 * The YearlyByState
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiHousingTypeYearlyByState
	 */
	public $YearlyByState;
	/**
	 * Constructor
	 * @param XiHousingTypeYearlyByState YearlyByState
	 * @return XiHousingTypeArrayOfYearlyByState
	 */
	public function __construct($_YearlyByState = null)
	{
		parent::__construct(array('YearlyByState'=>$_YearlyByState));
	}
	/**
	 * Set YearlyByState
	 * @param YearlyByState YearlyByState
	 * @return YearlyByState
	 */
	public function setYearlyByState($_YearlyByState)
	{
		return ($this->YearlyByState = $_YearlyByState);
	}
	/**
	 * Get YearlyByState
	 * @return XiHousingTypeYearlyByState
	 */
	public function getYearlyByState()
	{
		return $this->YearlyByState;
	}
	/**
	 * Returns the current element
	 * @see XiHousingWsdlClass::current()
	 * @return XiHousingTypeYearlyByState
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiHousingWsdlClass::item()
	 * @param int
	 * @return XiHousingTypeYearlyByState
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiHousingWsdlClass::first()
	 * @return XiHousingTypeYearlyByState
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiHousingWsdlClass::last()
	 * @return XiHousingTypeYearlyByState
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiHousingWsdlClass::offsetGet()
	 * @param int
	 * @return XiHousingTypeYearlyByState
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'YearlyByState'
	 */
	public function getAttributeName()
	{
		return 'YearlyByState';
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