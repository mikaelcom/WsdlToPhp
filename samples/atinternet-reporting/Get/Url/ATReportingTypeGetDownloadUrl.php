<?php
/**
 * Class file for ATReportingTypeGetDownloadUrl
 * @date 03/07/2012
 */
/**
 * Class ATReportingTypeGetDownloadUrl
 * @date 03/07/2012
 */
class ATReportingTypeGetDownloadUrl extends ATReportingWsdlClass
{
	/**
	 * The jobid
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $jobid;
	/**
	 * Constructor
	 * @param int jobid
	 * @return ATReportingTypeGetDownloadUrl
	 */
	public function __construct($_jobid)
	{
		parent::__construct(array('jobid'=>$_jobid));
	}
	/**
	 * Set jobid
	 * @param int jobid
	 * @return int
	 */
	public function setJobid($_jobid)
	{
		return ($this->jobid = $_jobid);
	}
	/**
	 * Get jobid
	 * @return int
	 */
	public function getJobid()
	{
		return $this->jobid;
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