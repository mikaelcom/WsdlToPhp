<?php
/**
 * Class file for OvhTypeDedicatedVirtualMacIpAdd
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedVirtualMacIpAdd
 * @date 02/07/2012
 */
class OvhTypeDedicatedVirtualMacIpAdd extends OvhWsdlClass
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
	 * The ip
	 * @var string
	 */
	public $ip;
	/**
	 * The newMac
	 * @var string
	 */
	public $newMac;
	/**
	 * The typeMac
	 * @var string
	 */
	public $typeMac;
	/**
	 * The macName
	 * @var string
	 */
	public $macName;
	/**
	 * The mac
	 * @var string
	 */
	public $mac;
	/**
	 * Constructor
	 * @param string session
	 * @param string hostname
	 * @param string ip
	 * @param string newMac
	 * @param string typeMac
	 * @param string macName
	 * @param string mac
	 * @return OvhTypeDedicatedVirtualMacIpAdd
	 */
	public function __construct($_session = null,$_hostname = null,$_ip = null,$_newMac = null,$_typeMac = null,$_macName = null,$_mac = null)
	{
		parent::__construct(array('session'=>$_session,'hostname'=>$_hostname,'ip'=>$_ip,'newMac'=>$_newMac,'typeMac'=>$_typeMac,'macName'=>$_macName,'mac'=>$_mac));
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
	 * Set ip
	 * @param string ip
	 * @return string
	 */
	public function setIp($_ip)
	{
		return ($this->ip = $_ip);
	}
	/**
	 * Get ip
	 * @return string
	 */
	public function getIp()
	{
		return $this->ip;
	}
	/**
	 * Set newMac
	 * @param string newMac
	 * @return string
	 */
	public function setNewMac($_newMac)
	{
		return ($this->newMac = $_newMac);
	}
	/**
	 * Get newMac
	 * @return string
	 */
	public function getNewMac()
	{
		return $this->newMac;
	}
	/**
	 * Set typeMac
	 * @param string typeMac
	 * @return string
	 */
	public function setTypeMac($_typeMac)
	{
		return ($this->typeMac = $_typeMac);
	}
	/**
	 * Get typeMac
	 * @return string
	 */
	public function getTypeMac()
	{
		return $this->typeMac;
	}
	/**
	 * Set macName
	 * @param string macName
	 * @return string
	 */
	public function setMacName($_macName)
	{
		return ($this->macName = $_macName);
	}
	/**
	 * Get macName
	 * @return string
	 */
	public function getMacName()
	{
		return $this->macName;
	}
	/**
	 * Set mac
	 * @param string mac
	 * @return string
	 */
	public function setMac($_mac)
	{
		return ($this->mac = $_mac);
	}
	/**
	 * Get mac
	 * @return string
	 */
	public function getMac()
	{
		return $this->mac;
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