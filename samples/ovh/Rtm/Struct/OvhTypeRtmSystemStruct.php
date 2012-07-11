<?php
/**
 * Class file for OvhTypeRtmSystemStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeRtmSystemStruct
 * @date 02/07/2012
 */
class OvhTypeRtmSystemStruct extends OvhWsdlClass
{
	/**
	 * The last_update
	 * @var string
	 */
	public $last_update;
	/**
	 * The ip
	 * @var string
	 */
	public $ip;
	/**
	 * The hostname
	 * @var string
	 */
	public $hostname;
	/**
	 * The uptime
	 * @var int
	 */
	public $uptime;
	/**
	 * The freshest_file_date
	 * @var string
	 */
	public $freshest_file_date;
	/**
	 * The os
	 * @var OvhTypeRtmSystemOsStruct
	 */
	public $os;
	/**
	 * The rtm
	 * @var OvhTypeRtmSystemRtmStruct
	 */
	public $rtm;
	/**
	 * The kernel
	 * @var OvhTypeRtmSystemKernelStruct
	 */
	public $kernel;
	/**
	 * Constructor
	 * @param string last_update
	 * @param string ip
	 * @param string hostname
	 * @param int uptime
	 * @param string freshest_file_date
	 * @param OvhTypeRtmSystemOsStruct os
	 * @param OvhTypeRtmSystemRtmStruct rtm
	 * @param OvhTypeRtmSystemKernelStruct kernel
	 * @return OvhTypeRtmSystemStruct
	 */
	public function __construct($_last_update = null,$_ip = null,$_hostname = null,$_uptime = null,$_freshest_file_date = null,$_os = null,$_rtm = null,$_kernel = null)
	{
		parent::__construct(array('last_update'=>$_last_update,'ip'=>$_ip,'hostname'=>$_hostname,'uptime'=>$_uptime,'freshest_file_date'=>$_freshest_file_date,'os'=>$_os,'rtm'=>$_rtm,'kernel'=>$_kernel));
	}
	/**
	 * Set last_update
	 * @param string last_update
	 * @return string
	 */
	public function setLast_update($_last_update)
	{
		return ($this->last_update = $_last_update);
	}
	/**
	 * Get last_update
	 * @return string
	 */
	public function getLast_update()
	{
		return $this->last_update;
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
	 * Set uptime
	 * @param int uptime
	 * @return int
	 */
	public function setUptime($_uptime)
	{
		return ($this->uptime = $_uptime);
	}
	/**
	 * Get uptime
	 * @return int
	 */
	public function getUptime()
	{
		return $this->uptime;
	}
	/**
	 * Set freshest_file_date
	 * @param string freshest_file_date
	 * @return string
	 */
	public function setFreshest_file_date($_freshest_file_date)
	{
		return ($this->freshest_file_date = $_freshest_file_date);
	}
	/**
	 * Get freshest_file_date
	 * @return string
	 */
	public function getFreshest_file_date()
	{
		return $this->freshest_file_date;
	}
	/**
	 * Set os
	 * @param rtmSystemOsStruct os
	 * @return rtmSystemOsStruct
	 */
	public function setOs($_os)
	{
		return ($this->os = $_os);
	}
	/**
	 * Get os
	 * @return OvhTypertmSystemOsStruct
	 */
	public function getOs()
	{
		return $this->os;
	}
	/**
	 * Set rtm
	 * @param rtmSystemRtmStruct rtm
	 * @return rtmSystemRtmStruct
	 */
	public function setRtm($_rtm)
	{
		return ($this->rtm = $_rtm);
	}
	/**
	 * Get rtm
	 * @return OvhTypertmSystemRtmStruct
	 */
	public function getRtm()
	{
		return $this->rtm;
	}
	/**
	 * Set kernel
	 * @param rtmSystemKernelStruct kernel
	 * @return rtmSystemKernelStruct
	 */
	public function setKernel($_kernel)
	{
		return ($this->kernel = $_kernel);
	}
	/**
	 * Get kernel
	 * @return OvhTypertmSystemKernelStruct
	 */
	public function getKernel()
	{
		return $this->kernel;
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