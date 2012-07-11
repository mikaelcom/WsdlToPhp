<?php
/**
 * Class file for OvhTypeTelephonyVoicemailMailboxStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyVoicemailMailboxStruct
 * @date 02/07/2012
 */
class OvhTypeTelephonyVoicemailMailboxStruct extends OvhWsdlClass
{
	/**
	 * The id
	 * @var int
	 */
	public $id;
	/**
	 * The callerid
	 * @var string
	 */
	public $callerid;
	/**
	 * The origdate
	 * @var string
	 */
	public $origdate;
	/**
	 * The origtime
	 * @var string
	 */
	public $origtime;
	/**
	 * The origmailbox
	 * @var string
	 */
	public $origmailbox;
	/**
	 * The duration
	 * @var int
	 */
	public $duration;
	/**
	 * The folder
	 * @var string
	 */
	public $folder;
	/**
	 * Constructor
	 * @param int id
	 * @param string callerid
	 * @param string origdate
	 * @param string origtime
	 * @param string origmailbox
	 * @param int duration
	 * @param string folder
	 * @return OvhTypeTelephonyVoicemailMailboxStruct
	 */
	public function __construct($_id = null,$_callerid = null,$_origdate = null,$_origtime = null,$_origmailbox = null,$_duration = null,$_folder = null)
	{
		parent::__construct(array('id'=>$_id,'callerid'=>$_callerid,'origdate'=>$_origdate,'origtime'=>$_origtime,'origmailbox'=>$_origmailbox,'duration'=>$_duration,'folder'=>$_folder));
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
	 * Set callerid
	 * @param string callerid
	 * @return string
	 */
	public function setCallerid($_callerid)
	{
		return ($this->callerid = $_callerid);
	}
	/**
	 * Get callerid
	 * @return string
	 */
	public function getCallerid()
	{
		return $this->callerid;
	}
	/**
	 * Set origdate
	 * @param string origdate
	 * @return string
	 */
	public function setOrigdate($_origdate)
	{
		return ($this->origdate = $_origdate);
	}
	/**
	 * Get origdate
	 * @return string
	 */
	public function getOrigdate()
	{
		return $this->origdate;
	}
	/**
	 * Set origtime
	 * @param string origtime
	 * @return string
	 */
	public function setOrigtime($_origtime)
	{
		return ($this->origtime = $_origtime);
	}
	/**
	 * Get origtime
	 * @return string
	 */
	public function getOrigtime()
	{
		return $this->origtime;
	}
	/**
	 * Set origmailbox
	 * @param string origmailbox
	 * @return string
	 */
	public function setOrigmailbox($_origmailbox)
	{
		return ($this->origmailbox = $_origmailbox);
	}
	/**
	 * Get origmailbox
	 * @return string
	 */
	public function getOrigmailbox()
	{
		return $this->origmailbox;
	}
	/**
	 * Set duration
	 * @param int duration
	 * @return int
	 */
	public function setDuration($_duration)
	{
		return ($this->duration = $_duration);
	}
	/**
	 * Get duration
	 * @return int
	 */
	public function getDuration()
	{
		return $this->duration;
	}
	/**
	 * Set folder
	 * @param string folder
	 * @return string
	 */
	public function setFolder($_folder)
	{
		return ($this->folder = $_folder);
	}
	/**
	 * Get folder
	 * @return string
	 */
	public function getFolder()
	{
		return $this->folder;
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