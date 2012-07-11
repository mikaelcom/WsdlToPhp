<?php
/**
 * Class file for XiFundDataTypeArrayOfFundPerformance
 * @date 08/07/2012
 */
/**
 * Class XiFundDataTypeArrayOfFundPerformance
 * @date 08/07/2012
 */
class XiFundDataTypeArrayOfFundPerformance extends XiFundDataWsdlClass
{
	/**
	 * The FundPerformance
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiFundDataTypeFundPerformance
	 */
	public $FundPerformance;
	/**
	 * Constructor
	 * @param XiFundDataTypeFundPerformance FundPerformance
	 * @return XiFundDataTypeArrayOfFundPerformance
	 */
	public function __construct($_FundPerformance = null)
	{
		parent::__construct(array('FundPerformance'=>$_FundPerformance));
	}
	/**
	 * Set FundPerformance
	 * @param FundPerformance FundPerformance
	 * @return FundPerformance
	 */
	public function setFundPerformance($_FundPerformance)
	{
		return ($this->FundPerformance = $_FundPerformance);
	}
	/**
	 * Get FundPerformance
	 * @return XiFundDataTypeFundPerformance
	 */
	public function getFundPerformance()
	{
		return $this->FundPerformance;
	}
	/**
	 * Returns the current element
	 * @see XiFundDataWsdlClass::current()
	 * @return XiFundDataTypeFundPerformance
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiFundDataWsdlClass::item()
	 * @param int
	 * @return XiFundDataTypeFundPerformance
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiFundDataWsdlClass::first()
	 * @return XiFundDataTypeFundPerformance
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiFundDataWsdlClass::last()
	 * @return XiFundDataTypeFundPerformance
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiFundDataWsdlClass::offsetGet()
	 * @param int
	 * @return XiFundDataTypeFundPerformance
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'FundPerformance'
	 */
	public function getAttributeName()
	{
		return 'FundPerformance';
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