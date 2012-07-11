<?php
/**
 * Class file for OvhTypeTelephonyConferenceOptionsModify
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyConferenceOptionsModify
 * @date 02/07/2012
 */
class OvhTypeTelephonyConferenceOptionsModify extends OvhWsdlClass
{
	/**
	 * The session
	 * @var string
	 */
	public $session;
	/**
	 * The number
	 * @var string
	 */
	public $number;
	/**
	 * The country
	 * @var string
	 */
	public $country;
	/**
	 * The room
	 * @var string
	 */
	public $room;
	/**
	 * The askName
	 * @var boolean
	 */
	public $askName;
	/**
	 * The tellMemberCount
	 * @var boolean
	 */
	public $tellMemberCount;
	/**
	 * The announce_rcv
	 * @var boolean
	 */
	public $announce_rcv;
	/**
	 * The announce_snd
	 * @var boolean
	 */
	public $announce_snd;
	/**
	 * The dtmfmenu
	 * @var boolean
	 */
	public $dtmfmenu;
	/**
	 * The recordConf
	 * @var boolean
	 */
	public $recordConf;
	/**
	 * The recordDir
	 * @var string
	 */
	public $recordDir;
	/**
	 * Constructor
	 * @param string session
	 * @param string number
	 * @param string country
	 * @param string room
	 * @param boolean askName
	 * @param boolean tellMemberCount
	 * @param boolean announce_rcv
	 * @param boolean announce_snd
	 * @param boolean dtmfmenu
	 * @param boolean recordConf
	 * @param string recordDir
	 * @return OvhTypeTelephonyConferenceOptionsModify
	 */
	public function __construct($_session = null,$_number = null,$_country = null,$_room = null,$_askName = null,$_tellMemberCount = null,$_announce_rcv = null,$_announce_snd = null,$_dtmfmenu = null,$_recordConf = null,$_recordDir = null)
	{
		parent::__construct(array('session'=>$_session,'number'=>$_number,'country'=>$_country,'room'=>$_room,'askName'=>$_askName,'tellMemberCount'=>$_tellMemberCount,'announce_rcv'=>$_announce_rcv,'announce_snd'=>$_announce_snd,'dtmfmenu'=>$_dtmfmenu,'recordConf'=>$_recordConf,'recordDir'=>$_recordDir));
	}
	/**
	 * Set session
	 * @param string session
	 * @return string
	 */
	public function setSession($_session)
	{
		return ($this->session = $_session);
	}
	/**
	 * Get session
	 * @return string
	 */
	public function getSession()
	{
		return $this->session;
	}
	/**
	 * Set number
	 * @param string number
	 * @return string
	 */
	public function setNumber($_number)
	{
		return ($this->number = $_number);
	}
	/**
	 * Get number
	 * @return string
	 */
	public function getNumber()
	{
		return $this->number;
	}
	/**
	 * Set country
	 * @param string country
	 * @return string
	 */
	public function setCountry($_country)
	{
		return ($this->country = $_country);
	}
	/**
	 * Get country
	 * @return string
	 */
	public function getCountry()
	{
		return $this->country;
	}
	/**
	 * Set room
	 * @param string room
	 * @return string
	 */
	public function setRoom($_room)
	{
		return ($this->room = $_room);
	}
	/**
	 * Get room
	 * @return string
	 */
	public function getRoom()
	{
		return $this->room;
	}
	/**
	 * Set askName
	 * @param boolean askName
	 * @return boolean
	 */
	public function setAskName($_askName)
	{
		return ($this->askName = $_askName);
	}
	/**
	 * Get askName
	 * @return boolean
	 */
	public function getAskName()
	{
		return $this->askName;
	}
	/**
	 * Set tellMemberCount
	 * @param boolean tellMemberCount
	 * @return boolean
	 */
	public function setTellMemberCount($_tellMemberCount)
	{
		return ($this->tellMemberCount = $_tellMemberCount);
	}
	/**
	 * Get tellMemberCount
	 * @return boolean
	 */
	public function getTellMemberCount()
	{
		return $this->tellMemberCount;
	}
	/**
	 * Set announce_rcv
	 * @param boolean announce_rcv
	 * @return boolean
	 */
	public function setAnnounce_rcv($_announce_rcv)
	{
		return ($this->announce_rcv = $_announce_rcv);
	}
	/**
	 * Get announce_rcv
	 * @return boolean
	 */
	public function getAnnounce_rcv()
	{
		return $this->announce_rcv;
	}
	/**
	 * Set announce_snd
	 * @param boolean announce_snd
	 * @return boolean
	 */
	public function setAnnounce_snd($_announce_snd)
	{
		return ($this->announce_snd = $_announce_snd);
	}
	/**
	 * Get announce_snd
	 * @return boolean
	 */
	public function getAnnounce_snd()
	{
		return $this->announce_snd;
	}
	/**
	 * Set dtmfmenu
	 * @param boolean dtmfmenu
	 * @return boolean
	 */
	public function setDtmfmenu($_dtmfmenu)
	{
		return ($this->dtmfmenu = $_dtmfmenu);
	}
	/**
	 * Get dtmfmenu
	 * @return boolean
	 */
	public function getDtmfmenu()
	{
		return $this->dtmfmenu;
	}
	/**
	 * Set recordConf
	 * @param boolean recordConf
	 * @return boolean
	 */
	public function setRecordConf($_recordConf)
	{
		return ($this->recordConf = $_recordConf);
	}
	/**
	 * Get recordConf
	 * @return boolean
	 */
	public function getRecordConf()
	{
		return $this->recordConf;
	}
	/**
	 * Set recordDir
	 * @param string recordDir
	 * @return string
	 */
	public function setRecordDir($_recordDir)
	{
		return ($this->recordDir = $_recordDir);
	}
	/**
	 * Get recordDir
	 * @return string
	 */
	public function getRecordDir()
	{
		return $this->recordDir;
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