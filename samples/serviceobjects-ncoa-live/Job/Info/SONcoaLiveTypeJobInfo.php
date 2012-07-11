<?php
/**
 * Class file for SONcoaLiveTypeJobInfo
 * @date 06/07/2012
 */
/**
 * Class SONcoaLiveTypeJobInfo
 * @date 06/07/2012
 */
class SONcoaLiveTypeJobInfo extends SONcoaLiveWsdlClass
{
	/**
	 * The JobId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $JobId;
	/**
	 * The Status
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Status;
	/**
	 * The StartDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $StartDate;
	/**
	 * The EndDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $EndDate;
	/**
	 * Constructor
	 * @param string JobId
	 * @param string Status
	 * @param string StartDate
	 * @param string EndDate
	 * @return SONcoaLiveTypeJobInfo
	 */
	public function __construct($_JobId = null,$_Status = null,$_StartDate = null,$_EndDate = null)
	{
		parent::__construct(array('JobId'=>$_JobId,'Status'=>$_Status,'StartDate'=>$_StartDate,'EndDate'=>$_EndDate));
	}
	/**
	 * Set JobId
	 * @param string JobId
	 * @return string
	 */
	public function setJobId($_JobId)
	{
		return ($this->JobId = $_JobId);
	}
	/**
	 * Get JobId
	 * @return string
	 */
	public function getJobId()
	{
		return $this->JobId;
	}
	/**
	 * Set Status
	 * @param string Status
	 * @return string
	 */
	public function setStatus($_Status)
	{
		return ($this->Status = $_Status);
	}
	/**
	 * Get Status
	 * @return string
	 */
	public function getStatus()
	{
		return $this->Status;
	}
	/**
	 * Set StartDate
	 * @param string StartDate
	 * @return string
	 */
	public function setStartDate($_StartDate)
	{
		return ($this->StartDate = $_StartDate);
	}
	/**
	 * Get StartDate
	 * @return string
	 */
	public function getStartDate()
	{
		return $this->StartDate;
	}
	/**
	 * Set EndDate
	 * @param string EndDate
	 * @return string
	 */
	public function setEndDate($_EndDate)
	{
		return ($this->EndDate = $_EndDate);
	}
	/**
	 * Get EndDate
	 * @return string
	 */
	public function getEndDate()
	{
		return $this->EndDate;
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