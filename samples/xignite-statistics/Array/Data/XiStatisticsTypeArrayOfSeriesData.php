<?php
/**
 * Class file for XiStatisticsTypeArrayOfSeriesData
 * @date 08/07/2012
 */
/**
 * Class XiStatisticsTypeArrayOfSeriesData
 * @date 08/07/2012
 */
class XiStatisticsTypeArrayOfSeriesData extends XiStatisticsWsdlClass
{
	/**
	 * The SeriesData
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiStatisticsTypeSeriesData
	 */
	public $SeriesData;
	/**
	 * Constructor
	 * @param XiStatisticsTypeSeriesData SeriesData
	 * @return XiStatisticsTypeArrayOfSeriesData
	 */
	public function __construct($_SeriesData = null)
	{
		parent::__construct(array('SeriesData'=>$_SeriesData));
	}
	/**
	 * Set SeriesData
	 * @param SeriesData SeriesData
	 * @return SeriesData
	 */
	public function setSeriesData($_SeriesData)
	{
		return ($this->SeriesData = $_SeriesData);
	}
	/**
	 * Get SeriesData
	 * @return XiStatisticsTypeSeriesData
	 */
	public function getSeriesData()
	{
		return $this->SeriesData;
	}
	/**
	 * Returns the current element
	 * @see XiStatisticsWsdlClass::current()
	 * @return XiStatisticsTypeSeriesData
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiStatisticsWsdlClass::item()
	 * @param int
	 * @return XiStatisticsTypeSeriesData
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiStatisticsWsdlClass::first()
	 * @return XiStatisticsTypeSeriesData
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiStatisticsWsdlClass::last()
	 * @return XiStatisticsTypeSeriesData
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiStatisticsWsdlClass::offsetGet()
	 * @param int
	 * @return XiStatisticsTypeSeriesData
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'SeriesData'
	 */
	public function getAttributeName()
	{
		return 'SeriesData';
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