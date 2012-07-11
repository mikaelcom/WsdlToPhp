<?php
/**
 * Class file for SONcoaLiveTypeArrayOfJobInfo
 * @date 06/07/2012
 */
/**
 * Class SONcoaLiveTypeArrayOfJobInfo
 * @date 06/07/2012
 */
class SONcoaLiveTypeArrayOfJobInfo extends SONcoaLiveWsdlClass
{
	/**
	 * The JobInfo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var SONcoaLiveTypeJobInfo
	 */
	public $JobInfo;
	/**
	 * Constructor
	 * @param SONcoaLiveTypeJobInfo JobInfo
	 * @return SONcoaLiveTypeArrayOfJobInfo
	 */
	public function __construct($_JobInfo = null)
	{
		parent::__construct(array('JobInfo'=>$_JobInfo));
	}
	/**
	 * Set JobInfo
	 * @param JobInfo JobInfo
	 * @return JobInfo
	 */
	public function setJobInfo($_JobInfo)
	{
		return ($this->JobInfo = $_JobInfo);
	}
	/**
	 * Get JobInfo
	 * @return SONcoaLiveTypeJobInfo
	 */
	public function getJobInfo()
	{
		return $this->JobInfo;
	}
	/**
	 * Returns the current element
	 * @see SONcoaLiveWsdlClass::current()
	 * @return SONcoaLiveTypeJobInfo
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see SONcoaLiveWsdlClass::item()
	 * @param int
	 * @return SONcoaLiveTypeJobInfo
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see SONcoaLiveWsdlClass::first()
	 * @return SONcoaLiveTypeJobInfo
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see SONcoaLiveWsdlClass::last()
	 * @return SONcoaLiveTypeJobInfo
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see SONcoaLiveWsdlClass::offsetGet()
	 * @param int
	 * @return SONcoaLiveTypeJobInfo
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'JobInfo'
	 */
	public function getAttributeName()
	{
		return 'JobInfo';
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