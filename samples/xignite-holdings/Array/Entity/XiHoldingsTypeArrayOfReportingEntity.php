<?php
/**
 * Class file for XiHoldingsTypeArrayOfReportingEntity
 * @date 08/07/2012
 */
/**
 * Class XiHoldingsTypeArrayOfReportingEntity
 * @date 08/07/2012
 */
class XiHoldingsTypeArrayOfReportingEntity extends XiHoldingsWsdlClass
{
	/**
	 * The ReportingEntity
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiHoldingsTypeReportingEntity
	 */
	public $ReportingEntity;
	/**
	 * Constructor
	 * @param XiHoldingsTypeReportingEntity ReportingEntity
	 * @return XiHoldingsTypeArrayOfReportingEntity
	 */
	public function __construct($_ReportingEntity = null)
	{
		parent::__construct(array('ReportingEntity'=>$_ReportingEntity));
	}
	/**
	 * Set ReportingEntity
	 * @param ReportingEntity ReportingEntity
	 * @return ReportingEntity
	 */
	public function setReportingEntity($_ReportingEntity)
	{
		return ($this->ReportingEntity = $_ReportingEntity);
	}
	/**
	 * Get ReportingEntity
	 * @return XiHoldingsTypeReportingEntity
	 */
	public function getReportingEntity()
	{
		return $this->ReportingEntity;
	}
	/**
	 * Returns the current element
	 * @see XiHoldingsWsdlClass::current()
	 * @return XiHoldingsTypeReportingEntity
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiHoldingsWsdlClass::item()
	 * @param int
	 * @return XiHoldingsTypeReportingEntity
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiHoldingsWsdlClass::first()
	 * @return XiHoldingsTypeReportingEntity
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiHoldingsWsdlClass::last()
	 * @return XiHoldingsTypeReportingEntity
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiHoldingsWsdlClass::offsetGet()
	 * @param int
	 * @return XiHoldingsTypeReportingEntity
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'ReportingEntity'
	 */
	public function getAttributeName()
	{
		return 'ReportingEntity';
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