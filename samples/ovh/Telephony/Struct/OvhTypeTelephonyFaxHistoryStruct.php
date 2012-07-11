<?php
/**
 * Class file for OvhTypeTelephonyFaxHistoryStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyFaxHistoryStruct
 * @date 02/07/2012
 */
class OvhTypeTelephonyFaxHistoryStruct extends OvhWsdlClass
{
	/**
	 * The id
	 * @var int
	 */
	public $id;
	/**
	 * The relatedNumber
	 * @var string
	 */
	public $relatedNumber;
	/**
	 * The jobid
	 * @var int
	 */
	public $jobid;
	/**
	 * The jobtag
	 * @var string
	 */
	public $jobtag;
	/**
	 * The sender
	 * @var string
	 */
	public $sender;
	/**
	 * The pages
	 * @var int
	 */
	public $pages;
	/**
	 * The quality
	 * @var string
	 */
	public $quality;
	/**
	 * The callTime
	 * @var string
	 */
	public $callTime;
	/**
	 * The date
	 * @var string
	 */
	public $date;
	/**
	 * The state
	 * @var string
	 */
	public $state;
	/**
	 * Constructor
	 * @param int id
	 * @param string relatedNumber
	 * @param int jobid
	 * @param string jobtag
	 * @param string sender
	 * @param int pages
	 * @param string quality
	 * @param string callTime
	 * @param string date
	 * @param string state
	 * @return OvhTypeTelephonyFaxHistoryStruct
	 */
	public function __construct($_id = null,$_relatedNumber = null,$_jobid = null,$_jobtag = null,$_sender = null,$_pages = null,$_quality = null,$_callTime = null,$_date = null,$_state = null)
	{
		parent::__construct(array('id'=>$_id,'relatedNumber'=>$_relatedNumber,'jobid'=>$_jobid,'jobtag'=>$_jobtag,'sender'=>$_sender,'pages'=>$_pages,'quality'=>$_quality,'callTime'=>$_callTime,'date'=>$_date,'state'=>$_state));
	}
	/**
	 * Set id
	 * @param int id
	 * @return int
	 */
	public function setId($_id)
	{
		return ($this->id = $_id);
	}
	/**
	 * Get id
	 * @return int
	 */
	public function getId()
	{
		return $this->id;
	}
	/**
	 * Set relatedNumber
	 * @param string relatedNumber
	 * @return string
	 */
	public function setRelatedNumber($_relatedNumber)
	{
		return ($this->relatedNumber = $_relatedNumber);
	}
	/**
	 * Get relatedNumber
	 * @return string
	 */
	public function getRelatedNumber()
	{
		return $this->relatedNumber;
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
	 * Set jobtag
	 * @param string jobtag
	 * @return string
	 */
	public function setJobtag($_jobtag)
	{
		return ($this->jobtag = $_jobtag);
	}
	/**
	 * Get jobtag
	 * @return string
	 */
	public function getJobtag()
	{
		return $this->jobtag;
	}
	/**
	 * Set sender
	 * @param string sender
	 * @return string
	 */
	public function setSender($_sender)
	{
		return ($this->sender = $_sender);
	}
	/**
	 * Get sender
	 * @return string
	 */
	public function getSender()
	{
		return $this->sender;
	}
	/**
	 * Set pages
	 * @param int pages
	 * @return int
	 */
	public function setPages($_pages)
	{
		return ($this->pages = $_pages);
	}
	/**
	 * Get pages
	 * @return int
	 */
	public function getPages()
	{
		return $this->pages;
	}
	/**
	 * Set quality
	 * @param string quality
	 * @return string
	 */
	public function setQuality($_quality)
	{
		return ($this->quality = $_quality);
	}
	/**
	 * Get quality
	 * @return string
	 */
	public function getQuality()
	{
		return $this->quality;
	}
	/**
	 * Set callTime
	 * @param string callTime
	 * @return string
	 */
	public function setCallTime($_callTime)
	{
		return ($this->callTime = $_callTime);
	}
	/**
	 * Get callTime
	 * @return string
	 */
	public function getCallTime()
	{
		return $this->callTime;
	}
	/**
	 * Set date
	 * @param string date
	 * @return string
	 */
	public function setDate($_date)
	{
		return ($this->date = $_date);
	}
	/**
	 * Get date
	 * @return string
	 */
	public function getDate()
	{
		return $this->date;
	}
	/**
	 * Set state
	 * @param string state
	 * @return string
	 */
	public function setState($_state)
	{
		return ($this->state = $_state);
	}
	/**
	 * Get state
	 * @return string
	 */
	public function getState()
	{
		return $this->state;
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