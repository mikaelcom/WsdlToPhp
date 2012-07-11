<?php
/**
 * Class file for OvhTypeRtmPortsIfaceDetailStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeRtmPortsIfaceDetailStruct
 * @date 02/07/2012
 */
class OvhTypeRtmPortsIfaceDetailStruct extends OvhWsdlClass
{
	/**
	 * The port
	 * @var string
	 */
	public $port;
	/**
	 * The procname
	 * @var string
	 */
	public $procname;
	/**
	 * The uid
	 * @var string
	 */
	public $uid;
	/**
	 * The pid
	 * @var int
	 */
	public $pid;
	/**
	 * The cmdline
	 * @var string
	 */
	public $cmdline;
	/**
	 * The exe
	 * @var string
	 */
	public $exe;
	/**
	 * The username
	 * @var string
	 */
	public $username;
	/**
	 * Constructor
	 * @param string port
	 * @param string procname
	 * @param string uid
	 * @param int pid
	 * @param string cmdline
	 * @param string exe
	 * @param string username
	 * @return OvhTypeRtmPortsIfaceDetailStruct
	 */
	public function __construct($_port = null,$_procname = null,$_uid = null,$_pid = null,$_cmdline = null,$_exe = null,$_username = null)
	{
		parent::__construct(array('port'=>$_port,'procname'=>$_procname,'uid'=>$_uid,'pid'=>$_pid,'cmdline'=>$_cmdline,'exe'=>$_exe,'username'=>$_username));
	}
	/**
	 * Set port
	 * @param string port
	 * @return string
	 */
	public function setPort($_port)
	{
		return ($this->port = $_port);
	}
	/**
	 * Get port
	 * @return string
	 */
	public function getPort()
	{
		return $this->port;
	}
	/**
	 * Set procname
	 * @param string procname
	 * @return string
	 */
	public function setProcname($_procname)
	{
		return ($this->procname = $_procname);
	}
	/**
	 * Get procname
	 * @return string
	 */
	public function getProcname()
	{
		return $this->procname;
	}
	/**
	 * Set uid
	 * @param string uid
	 * @return string
	 */
	public function setUid($_uid)
	{
		return ($this->uid = $_uid);
	}
	/**
	 * Get uid
	 * @return string
	 */
	public function getUid()
	{
		return $this->uid;
	}
	/**
	 * Set pid
	 * @param int pid
	 * @return int
	 */
	public function setPid($_pid)
	{
		return ($this->pid = $_pid);
	}
	/**
	 * Get pid
	 * @return int
	 */
	public function getPid()
	{
		return $this->pid;
	}
	/**
	 * Set cmdline
	 * @param string cmdline
	 * @return string
	 */
	public function setCmdline($_cmdline)
	{
		return ($this->cmdline = $_cmdline);
	}
	/**
	 * Get cmdline
	 * @return string
	 */
	public function getCmdline()
	{
		return $this->cmdline;
	}
	/**
	 * Set exe
	 * @param string exe
	 * @return string
	 */
	public function setExe($_exe)
	{
		return ($this->exe = $_exe);
	}
	/**
	 * Get exe
	 * @return string
	 */
	public function getExe()
	{
		return $this->exe;
	}
	/**
	 * Set username
	 * @param string username
	 * @return string
	 */
	public function setUsername($_username)
	{
		return ($this->username = $_username);
	}
	/**
	 * Get username
	 * @return string
	 */
	public function getUsername()
	{
		return $this->username;
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