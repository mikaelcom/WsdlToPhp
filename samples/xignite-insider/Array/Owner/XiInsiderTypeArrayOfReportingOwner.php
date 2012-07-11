<?php
/**
 * Class file for XiInsiderTypeArrayOfReportingOwner
 * @date 08/07/2012
 */
/**
 * Class XiInsiderTypeArrayOfReportingOwner
 * @date 08/07/2012
 */
class XiInsiderTypeArrayOfReportingOwner extends XiInsiderWsdlClass
{
	/**
	 * The reportingOwner
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiInsiderTypeReportingOwner
	 */
	public $reportingOwner;
	/**
	 * Constructor
	 * @param XiInsiderTypeReportingOwner reportingOwner
	 * @return XiInsiderTypeArrayOfReportingOwner
	 */
	public function __construct($_reportingOwner = null)
	{
		parent::__construct(array('reportingOwner'=>$_reportingOwner));
	}
	/**
	 * Set reportingOwner
	 * @param reportingOwner reportingOwner
	 * @return reportingOwner
	 */
	public function setReportingOwner($_reportingOwner)
	{
		return ($this->reportingOwner = $_reportingOwner);
	}
	/**
	 * Get reportingOwner
	 * @return XiInsiderTypereportingOwner
	 */
	public function getReportingOwner()
	{
		return $this->reportingOwner;
	}
	/**
	 * Returns the current element
	 * @see XiInsiderWsdlClass::current()
	 * @return XiInsiderTypeReportingOwner
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiInsiderWsdlClass::item()
	 * @param int
	 * @return XiInsiderTypeReportingOwner
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiInsiderWsdlClass::first()
	 * @return XiInsiderTypeReportingOwner
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiInsiderWsdlClass::last()
	 * @return XiInsiderTypeReportingOwner
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiInsiderWsdlClass::offsetGet()
	 * @param int
	 * @return XiInsiderTypeReportingOwner
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'reportingOwner'
	 */
	public function getAttributeName()
	{
		return 'reportingOwner';
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