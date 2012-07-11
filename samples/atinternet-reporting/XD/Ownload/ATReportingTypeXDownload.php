<?php
/**
 * Class file for ATReportingTypeXDownload
 * @date 03/07/2012
 */
/**
 * Class ATReportingTypeXDownload
 * @date 03/07/2012
 */
class ATReportingTypeXDownload extends ATReportingWsdlClass
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
	 * The status
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $status;
	/**
	 * The url
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $url;
	/**
	 * The size
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $size;
	/**
	 * The duration
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $duration;
	/**
	 * The message
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $message;
	/**
	 * Constructor
	 * @param int jobid
	 * @param int status
	 * @param string url
	 * @param string size
	 * @param string duration
	 * @param string message
	 * @return ATReportingTypeXDownload
	 */
	public function __construct($_jobid,$_status,$_url = null,$_size = null,$_duration = null,$_message = null)
	{
		parent::__construct(array('jobid'=>$_jobid,'status'=>$_status,'url'=>$_url,'size'=>$_size,'duration'=>$_duration,'message'=>$_message));
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
	 * Set status
	 * @param int status
	 * @return int
	 */
	public function setStatus($_status)
	{
		return ($this->status = $_status);
	}
	/**
	 * Get status
	 * @return int
	 */
	public function getStatus()
	{
		return $this->status;
	}
	/**
	 * Set url
	 * @param string url
	 * @return string
	 */
	public function setUrl($_url)
	{
		return ($this->url = $_url);
	}
	/**
	 * Get url
	 * @return string
	 */
	public function getUrl()
	{
		return $this->url;
	}
	/**
	 * Set size
	 * @param string size
	 * @return string
	 */
	public function setSize($_size)
	{
		return ($this->size = $_size);
	}
	/**
	 * Get size
	 * @return string
	 */
	public function getSize()
	{
		return $this->size;
	}
	/**
	 * Set duration
	 * @param string duration
	 * @return string
	 */
	public function setDuration($_duration)
	{
		return ($this->duration = $_duration);
	}
	/**
	 * Get duration
	 * @return string
	 */
	public function getDuration()
	{
		return $this->duration;
	}
	/**
	 * Set message
	 * @param string message
	 * @return string
	 */
	public function setMessage($_message)
	{
		return ($this->message = $_message);
	}
	/**
	 * Get message
	 * @return string
	 */
	public function getMessage()
	{
		return $this->message;
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