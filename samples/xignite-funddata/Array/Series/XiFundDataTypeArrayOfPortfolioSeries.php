<?php
/**
 * Class file for XiFundDataTypeArrayOfPortfolioSeries
 * @date 08/07/2012
 */
/**
 * Class XiFundDataTypeArrayOfPortfolioSeries
 * @date 08/07/2012
 */
class XiFundDataTypeArrayOfPortfolioSeries extends XiFundDataWsdlClass
{
	/**
	 * The PortfolioSeries
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiFundDataTypePortfolioSeries
	 */
	public $PortfolioSeries;
	/**
	 * Constructor
	 * @param XiFundDataTypePortfolioSeries PortfolioSeries
	 * @return XiFundDataTypeArrayOfPortfolioSeries
	 */
	public function __construct($_PortfolioSeries = null)
	{
		parent::__construct(array('PortfolioSeries'=>$_PortfolioSeries));
	}
	/**
	 * Set PortfolioSeries
	 * @param PortfolioSeries PortfolioSeries
	 * @return PortfolioSeries
	 */
	public function setPortfolioSeries($_PortfolioSeries)
	{
		return ($this->PortfolioSeries = $_PortfolioSeries);
	}
	/**
	 * Get PortfolioSeries
	 * @return XiFundDataTypePortfolioSeries
	 */
	public function getPortfolioSeries()
	{
		return $this->PortfolioSeries;
	}
	/**
	 * Returns the current element
	 * @see XiFundDataWsdlClass::current()
	 * @return XiFundDataTypePortfolioSeries
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiFundDataWsdlClass::item()
	 * @param int
	 * @return XiFundDataTypePortfolioSeries
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiFundDataWsdlClass::first()
	 * @return XiFundDataTypePortfolioSeries
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiFundDataWsdlClass::last()
	 * @return XiFundDataTypePortfolioSeries
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiFundDataWsdlClass::offsetGet()
	 * @param int
	 * @return XiFundDataTypePortfolioSeries
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'PortfolioSeries'
	 */
	public function getAttributeName()
	{
		return 'PortfolioSeries';
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