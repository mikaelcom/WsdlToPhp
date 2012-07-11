<?php
/**
 * Class file for OvhTypeDedicatedRtmListBackdoorStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedRtmListBackdoorStruct
 * @date 02/07/2012
 */
class OvhTypeDedicatedRtmListBackdoorStruct extends OvhWsdlClass
{
	/**
	 * The date_email
	 * @var string
	 */
	public $date_email;
	/**
	 * The date_start
	 * @var string
	 */
	public $date_start;
	/**
	 * The date_end
	 * @var string
	 */
	public $date_end;
	/**
	 * The date_today
	 * @var string
	 */
	public $date_today;
	/**
	 * The id
	 * @var int
	 */
	public $id;
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
	 * The do_not_mail
	 * @var boolean
	 */
	public $do_not_mail;
	/**
	 * The active
	 * @var boolean
	 */
	public $active;
	/**
	 * The status
	 * @var int
	 */
	public $status;
	/**
	 * The ip
	 * @var string
	 */
	public $ip;
	/**
	 * The type
	 * @var string
	 */
	public $type;
	/**
	 * The cmdline
	 * @var string
	 */
	public $cmdline;
	/**
	 * The port
	 * @var int
	 */
	public $port;
	/**
	 * The ports
	 * @var string
	 */
	public $ports;
	/**
	 * The procname
	 * @var string
	 */
	public $procname;
	/**
	 * The exe
	 * @var string
	 */
	public $exe;
	/**
	 * Constructor
	 * @param string date_email
	 * @param string date_start
	 * @param string date_end
	 * @param string date_today
	 * @param int id
	 * @param string uid
	 * @param int pid
	 * @param boolean do_not_mail
	 * @param boolean active
	 * @param int status
	 * @param string ip
	 * @param string type
	 * @param string cmdline
	 * @param int port
	 * @param string ports
	 * @param string procname
	 * @param string exe
	 * @return OvhTypeDedicatedRtmListBackdoorStruct
	 */
	public function __construct($_date_email = null,$_date_start = null,$_date_end = null,$_date_today = null,$_id = null,$_uid = null,$_pid = null,$_do_not_mail = null,$_active = null,$_status = null,$_ip = null,$_type = null,$_cmdline = null,$_port = null,$_ports = null,$_procname = null,$_exe = null)
	{
		parent::__construct(array('date_email'=>$_date_email,'date_start'=>$_date_start,'date_end'=>$_date_end,'date_today'=>$_date_today,'id'=>$_id,'uid'=>$_uid,'pid'=>$_pid,'do_not_mail'=>$_do_not_mail,'active'=>$_active,'status'=>$_status,'ip'=>$_ip,'type'=>$_type,'cmdline'=>$_cmdline,'port'=>$_port,'ports'=>$_ports,'procname'=>$_procname,'exe'=>$_exe));
	}
	/**
	 * Set date_email
	 * @param string date_email
	 * @return string
	 */
	public function setDate_email($_date_email)
	{
		return ($this->date_email = $_date_email);
	}
	/**
	 * Get date_email
	 * @return string
	 */
	public function getDate_email()
	{
		return $this->date_email;
	}
	/**
	 * Set date_start
	 * @param string date_start
	 * @return string
	 */
	public function setDate_start($_date_start)
	{
		return ($this->date_start = $_date_start);
	}
	/**
	 * Get date_start
	 * @return string
	 */
	public function getDate_start()
	{
		return $this->date_start;
	}
	/**
	 * Set date_end
	 * @param string date_end
	 * @return string
	 */
	public function setDate_end($_date_end)
	{
		return ($this->date_end = $_date_end);
	}
	/**
	 * Get date_end
	 * @return string
	 */
	public function getDate_end()
	{
		return $this->date_end;
	}
	/**
	 * Set date_today
	 * @param string date_today
	 * @return string
	 */
	public function setDate_today($_date_today)
	{
		return ($this->date_today = $_date_today);
	}
	/**
	 * Get date_today
	 * @return string
	 */
	public function getDate_today()
	{
		return $this->date_today;
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
	 * Set do_not_mail
	 * @param boolean do_not_mail
	 * @return boolean
	 */
	public function setDo_not_mail($_do_not_mail)
	{
		return ($this->do_not_mail = $_do_not_mail);
	}
	/**
	 * Get do_not_mail
	 * @return boolean
	 */
	public function getDo_not_mail()
	{
		return $this->do_not_mail;
	}
	/**
	 * Set active
	 * @param boolean active
	 * @return boolean
	 */
	public function setActive($_active)
	{
		return ($this->active = $_active);
	}
	/**
	 * Get active
	 * @return boolean
	 */
	public function getActive()
	{
		return $this->active;
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
	 * Set type
	 * @param string type
	 * @return string
	 */
	public function setType($_type)
	{
		return ($this->type = $_type);
	}
	/**
	 * Get type
	 * @return string
	 */
	public function getType()
	{
		return $this->type;
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
	 * Set port
	 * @param int port
	 * @return int
	 */
	public function setPort($_port)
	{
		return ($this->port = $_port);
	}
	/**
	 * Get port
	 * @return int
	 */
	public function getPort()
	{
		return $this->port;
	}
	/**
	 * Set ports
	 * @param string ports
	 * @return string
	 */
	public function setPorts($_ports)
	{
		return ($this->ports = $_ports);
	}
	/**
	 * Get ports
	 * @return string
	 */
	public function getPorts()
	{
		return $this->ports;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>