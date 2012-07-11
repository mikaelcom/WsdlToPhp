<?php
/**
 * Class file for OvhTypeRpsGetIoStats
 * @date 02/07/2012
 */
/**
 * Class OvhTypeRpsGetIoStats
 * @date 02/07/2012
 */
class OvhTypeRpsGetIoStats extends OvhWsdlClass
{
	/**
	 * The session
	 * @var string
	 */
	public $session;
	/**
	 * The domain
	 * @var string
	 */
	public $domain;
	/**
	 * The type
	 * @var string
	 */
	public $type;
	/**
	 * The duration
	 * @var string
	 */
	public $duration;
	/**
	 * Constructor
	 * @param string session
	 * @param string domain
	 * @param string type
	 * @param string duration
	 * @return OvhTypeRpsGetIoStats
	 */
	public function __construct($_session = null,$_domain = null,$_type = null,$_duration = null)
	{
		parent::__construct(array('session'=>$_session,'domain'=>$_domain,'type'=>$_type,'duration'=>$_duration));
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
	 * Set domain
	 * @param string domain
	 * @return string
	 */
	public function setDomain($_domain)
	{
		return ($this->domain = $_domain);
	}
	/**
	 * Get domain
	 * @return string
	 */
	public function getDomain()
	{
		return $this->domain;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>