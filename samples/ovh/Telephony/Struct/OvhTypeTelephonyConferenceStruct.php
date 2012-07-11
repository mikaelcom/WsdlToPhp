<?php
/**
 * Class file for OvhTypeTelephonyConferenceStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyConferenceStruct
 * @date 02/07/2012
 */
class OvhTypeTelephonyConferenceStruct extends OvhWsdlClass
{
	/**
	 * The room
	 * @var string
	 */
	public $room;
	/**
	 * The countryCode
	 * @var string
	 */
	public $countryCode;
	/**
	 * The callNumber
	 * @var string
	 */
	public $callNumber;
	/**
	 * The language
	 * @var string
	 */
	public $language;
	/**
	 * The customAnnounce
	 * @var boolean
	 */
	public $customAnnounce;
	/**
	 * The recordAnnounce
	 * @var boolean
	 */
	public $recordAnnounce;
	/**
	 * The mailReport
	 * @var boolean
	 */
	public $mailReport;
	/**
	 * The customMailReportAddress
	 * @var string
	 */
	public $customMailReportAddress;
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
	 * The moderatorCountryCode
	 * @var string
	 */
	public $moderatorCountryCode;
	/**
	 * The moderatorCallNumber
	 * @var string
	 */
	public $moderatorCallNumber;
	/**
	 * The status
	 * @var string
	 */
	public $status;
	/**
	 * The dtmfmenu
	 * @var boolean
	 */
	public $dtmfmenu;
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
	 * The recordConf
	 * @var boolean
	 */
	public $recordConf;
	/**
	 * Constructor
	 * @param string room
	 * @param string countryCode
	 * @param string callNumber
	 * @param string language
	 * @param boolean customAnnounce
	 * @param boolean recordAnnounce
	 * @param boolean mailReport
	 * @param string customMailReportAddress
	 * @param boolean askName
	 * @param boolean tellMemberCount
	 * @param string moderatorCountryCode
	 * @param string moderatorCallNumber
	 * @param string status
	 * @param boolean dtmfmenu
	 * @param boolean announce_rcv
	 * @param boolean announce_snd
	 * @param boolean recordConf
	 * @return OvhTypeTelephonyConferenceStruct
	 */
	public function __construct($_room = null,$_countryCode = null,$_callNumber = null,$_language = null,$_customAnnounce = null,$_recordAnnounce = null,$_mailReport = null,$_customMailReportAddress = null,$_askName = null,$_tellMemberCount = null,$_moderatorCountryCode = null,$_moderatorCallNumber = null,$_status = null,$_dtmfmenu = null,$_announce_rcv = null,$_announce_snd = null,$_recordConf = null)
	{
		parent::__construct(array('room'=>$_room,'countryCode'=>$_countryCode,'callNumber'=>$_callNumber,'language'=>$_language,'customAnnounce'=>$_customAnnounce,'recordAnnounce'=>$_recordAnnounce,'mailReport'=>$_mailReport,'customMailReportAddress'=>$_customMailReportAddress,'askName'=>$_askName,'tellMemberCount'=>$_tellMemberCount,'moderatorCountryCode'=>$_moderatorCountryCode,'moderatorCallNumber'=>$_moderatorCallNumber,'status'=>$_status,'dtmfmenu'=>$_dtmfmenu,'announce_rcv'=>$_announce_rcv,'announce_snd'=>$_announce_snd,'recordConf'=>$_recordConf));
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
	 * Set countryCode
	 * @param string countryCode
	 * @return string
	 */
	public function setCountryCode($_countryCode)
	{
		return ($this->countryCode = $_countryCode);
	}
	/**
	 * Get countryCode
	 * @return string
	 */
	public function getCountryCode()
	{
		return $this->countryCode;
	}
	/**
	 * Set callNumber
	 * @param string callNumber
	 * @return string
	 */
	public function setCallNumber($_callNumber)
	{
		return ($this->callNumber = $_callNumber);
	}
	/**
	 * Get callNumber
	 * @return string
	 */
	public function getCallNumber()
	{
		return $this->callNumber;
	}
	/**
	 * Set language
	 * @param string language
	 * @return string
	 */
	public function setLanguage($_language)
	{
		return ($this->language = $_language);
	}
	/**
	 * Get language
	 * @return string
	 */
	public function getLanguage()
	{
		return $this->language;
	}
	/**
	 * Set customAnnounce
	 * @param boolean customAnnounce
	 * @return boolean
	 */
	public function setCustomAnnounce($_customAnnounce)
	{
		return ($this->customAnnounce = $_customAnnounce);
	}
	/**
	 * Get customAnnounce
	 * @return boolean
	 */
	public function getCustomAnnounce()
	{
		return $this->customAnnounce;
	}
	/**
	 * Set recordAnnounce
	 * @param boolean recordAnnounce
	 * @return boolean
	 */
	public function setRecordAnnounce($_recordAnnounce)
	{
		return ($this->recordAnnounce = $_recordAnnounce);
	}
	/**
	 * Get recordAnnounce
	 * @return boolean
	 */
	public function getRecordAnnounce()
	{
		return $this->recordAnnounce;
	}
	/**
	 * Set mailReport
	 * @param boolean mailReport
	 * @return boolean
	 */
	public function setMailReport($_mailReport)
	{
		return ($this->mailReport = $_mailReport);
	}
	/**
	 * Get mailReport
	 * @return boolean
	 */
	public function getMailReport()
	{
		return $this->mailReport;
	}
	/**
	 * Set customMailReportAddress
	 * @param string customMailReportAddress
	 * @return string
	 */
	public function setCustomMailReportAddress($_customMailReportAddress)
	{
		return ($this->customMailReportAddress = $_customMailReportAddress);
	}
	/**
	 * Get customMailReportAddress
	 * @return string
	 */
	public function getCustomMailReportAddress()
	{
		return $this->customMailReportAddress;
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
	 * Set moderatorCountryCode
	 * @param string moderatorCountryCode
	 * @return string
	 */
	public function setModeratorCountryCode($_moderatorCountryCode)
	{
		return ($this->moderatorCountryCode = $_moderatorCountryCode);
	}
	/**
	 * Get moderatorCountryCode
	 * @return string
	 */
	public function getModeratorCountryCode()
	{
		return $this->moderatorCountryCode;
	}
	/**
	 * Set moderatorCallNumber
	 * @param string moderatorCallNumber
	 * @return string
	 */
	public function setModeratorCallNumber($_moderatorCallNumber)
	{
		return ($this->moderatorCallNumber = $_moderatorCallNumber);
	}
	/**
	 * Get moderatorCallNumber
	 * @return string
	 */
	public function getModeratorCallNumber()
	{
		return $this->moderatorCallNumber;
	}
	/**
	 * Set status
	 * @param string status
	 * @return string
	 */
	public function setStatus($_status)
	{
		return ($this->status = $_status);
	}
	/**
	 * Get status
	 * @return string
	 */
	public function getStatus()
	{
		return $this->status;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>