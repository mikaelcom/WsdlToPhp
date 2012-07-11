<?php
/**
 * Class file for XiFundDataTypeArrayOfReportFinancials
 * @date 08/07/2012
 */
/**
 * Class XiFundDataTypeArrayOfReportFinancials
 * @date 08/07/2012
 */
class XiFundDataTypeArrayOfReportFinancials extends XiFundDataWsdlClass
{
	/**
	 * The ReportFinancials
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiFundDataTypeReportFinancials
	 */
	public $ReportFinancials;
	/**
	 * Constructor
	 * @param XiFundDataTypeReportFinancials ReportFinancials
	 * @return XiFundDataTypeArrayOfReportFinancials
	 */
	public function __construct($_ReportFinancials = null)
	{
		parent::__construct(array('ReportFinancials'=>$_ReportFinancials));
	}
	/**
	 * Set ReportFinancials
	 * @param ReportFinancials ReportFinancials
	 * @return ReportFinancials
	 */
	public function setReportFinancials($_ReportFinancials)
	{
		return ($this->ReportFinancials = $_ReportFinancials);
	}
	/**
	 * Get ReportFinancials
	 * @return XiFundDataTypeReportFinancials
	 */
	public function getReportFinancials()
	{
		return $this->ReportFinancials;
	}
	/**
	 * Returns the current element
	 * @see XiFundDataWsdlClass::current()
	 * @return XiFundDataTypeReportFinancials
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiFundDataWsdlClass::item()
	 * @param int
	 * @return XiFundDataTypeReportFinancials
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiFundDataWsdlClass::first()
	 * @return XiFundDataTypeReportFinancials
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiFundDataWsdlClass::last()
	 * @return XiFundDataTypeReportFinancials
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiFundDataWsdlClass::offsetGet()
	 * @param int
	 * @return XiFundDataTypeReportFinancials
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'ReportFinancials'
	 */
	public function getAttributeName()
	{
		return 'ReportFinancials';
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