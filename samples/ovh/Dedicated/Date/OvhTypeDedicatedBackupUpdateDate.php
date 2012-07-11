<?php
/**
 * Class file for OvhTypeDedicatedBackupUpdateDate
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedBackupUpdateDate
 * @date 02/07/2012
 */
class OvhTypeDedicatedBackupUpdateDate extends OvhWsdlClass
{
	/**
	 * The session
	 * @var string
	 */
	public $session;
	/**
	 * The hostname
	 * @var string
	 */
	public $hostname;
	/**
	 * The backupId
	 * @var string
	 */
	public $backupId;
	/**
	 * The monday
	 * @var string
	 */
	public $monday;
	/**
	 * The tuesday
	 * @var string
	 */
	public $tuesday;
	/**
	 * The wednesday
	 * @var string
	 */
	public $wednesday;
	/**
	 * The thursday
	 * @var string
	 */
	public $thursday;
	/**
	 * The friday
	 * @var string
	 */
	public $friday;
	/**
	 * The saturday
	 * @var string
	 */
	public $saturday;
	/**
	 * The sunday
	 * @var string
	 */
	public $sunday;
	/**
	 * Constructor
	 * @param string session
	 * @param string hostname
	 * @param string backupId
	 * @param string monday
	 * @param string tuesday
	 * @param string wednesday
	 * @param string thursday
	 * @param string friday
	 * @param string saturday
	 * @param string sunday
	 * @return OvhTypeDedicatedBackupUpdateDate
	 */
	public function __construct($_session = null,$_hostname = null,$_backupId = null,$_monday = null,$_tuesday = null,$_wednesday = null,$_thursday = null,$_friday = null,$_saturday = null,$_sunday = null)
	{
		parent::__construct(array('session'=>$_session,'hostname'=>$_hostname,'backupId'=>$_backupId,'monday'=>$_monday,'tuesday'=>$_tuesday,'wednesday'=>$_wednesday,'thursday'=>$_thursday,'friday'=>$_friday,'saturday'=>$_saturday,'sunday'=>$_sunday));
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
	 * Set hostname
	 * @param string hostname
	 * @return string
	 */
	public function setHostname($_hostname)
	{
		return ($this->hostname = $_hostname);
	}
	/**
	 * Get hostname
	 * @return string
	 */
	public function getHostname()
	{
		return $this->hostname;
	}
	/**
	 * Set backupId
	 * @param string backupId
	 * @return string
	 */
	public function setBackupId($_backupId)
	{
		return ($this->backupId = $_backupId);
	}
	/**
	 * Get backupId
	 * @return string
	 */
	public function getBackupId()
	{
		return $this->backupId;
	}
	/**
	 * Set monday
	 * @param string monday
	 * @return string
	 */
	public function setMonday($_monday)
	{
		return ($this->monday = $_monday);
	}
	/**
	 * Get monday
	 * @return string
	 */
	public function getMonday()
	{
		return $this->monday;
	}
	/**
	 * Set tuesday
	 * @param string tuesday
	 * @return string
	 */
	public function setTuesday($_tuesday)
	{
		return ($this->tuesday = $_tuesday);
	}
	/**
	 * Get tuesday
	 * @return string
	 */
	public function getTuesday()
	{
		return $this->tuesday;
	}
	/**
	 * Set wednesday
	 * @param string wednesday
	 * @return string
	 */
	public function setWednesday($_wednesday)
	{
		return ($this->wednesday = $_wednesday);
	}
	/**
	 * Get wednesday
	 * @return string
	 */
	public function getWednesday()
	{
		return $this->wednesday;
	}
	/**
	 * Set thursday
	 * @param string thursday
	 * @return string
	 */
	public function setThursday($_thursday)
	{
		return ($this->thursday = $_thursday);
	}
	/**
	 * Get thursday
	 * @return string
	 */
	public function getThursday()
	{
		return $this->thursday;
	}
	/**
	 * Set friday
	 * @param string friday
	 * @return string
	 */
	public function setFriday($_friday)
	{
		return ($this->friday = $_friday);
	}
	/**
	 * Get friday
	 * @return string
	 */
	public function getFriday()
	{
		return $this->friday;
	}
	/**
	 * Set saturday
	 * @param string saturday
	 * @return string
	 */
	public function setSaturday($_saturday)
	{
		return ($this->saturday = $_saturday);
	}
	/**
	 * Get saturday
	 * @return string
	 */
	public function getSaturday()
	{
		return $this->saturday;
	}
	/**
	 * Set sunday
	 * @param string sunday
	 * @return string
	 */
	public function setSunday($_sunday)
	{
		return ($this->sunday = $_sunday);
	}
	/**
	 * Get sunday
	 * @return string
	 */
	public function getSunday()
	{
		return $this->sunday;
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