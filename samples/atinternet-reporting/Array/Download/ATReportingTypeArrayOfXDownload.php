<?php
/**
 * Class file for ATReportingTypeArrayOfXDownload
 * @date 03/07/2012
 */
/**
 * Class ATReportingTypeArrayOfXDownload
 * @date 03/07/2012
 */
class ATReportingTypeArrayOfXDownload extends ATReportingWsdlClass
{
	/**
	 * The XDownload
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var ATReportingTypeXDownload
	 */
	public $XDownload;
	/**
	 * Constructor
	 * @param ATReportingTypeXDownload XDownload
	 * @return ATReportingTypeArrayOfXDownload
	 */
	public function __construct($_XDownload = null)
	{
		parent::__construct(array('XDownload'=>$_XDownload));
	}
	/**
	 * Set XDownload
	 * @param XDownload XDownload
	 * @return XDownload
	 */
	public function setXDownload($_XDownload)
	{
		return ($this->XDownload = $_XDownload);
	}
	/**
	 * Get XDownload
	 * @return ATReportingTypeXDownload
	 */
	public function getXDownload()
	{
		return $this->XDownload;
	}
	/**
	 * Returns the current element
	 * @see ATReportingWsdlClass::current()
	 * @return ATReportingTypeXDownload
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see ATReportingWsdlClass::item()
	 * @param int
	 * @return ATReportingTypeXDownload
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see ATReportingWsdlClass::first()
	 * @return ATReportingTypeXDownload
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see ATReportingWsdlClass::last()
	 * @return ATReportingTypeXDownload
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see ATReportingWsdlClass::offsetGet()
	 * @param int
	 * @return ATReportingTypeXDownload
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'XDownload'
	 */
	public function getAttributeName()
	{
		return 'XDownload';
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