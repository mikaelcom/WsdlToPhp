<?php
/**
 * Class file for OvhTypeAnonymousFtpInfoReturn
 * @date 02/07/2012
 */
/**
 * Class OvhTypeAnonymousFtpInfoReturn
 * @date 02/07/2012
 */
class OvhTypeAnonymousFtpInfoReturn extends OvhWsdlClass
{
	/**
	 * The login
	 * @var string
	 */
	public $login;
	/**
	 * The url
	 * @var string
	 */
	public $url;
	/**
	 * The max
	 * @var int
	 */
	public $max;
	/**
	 * The quota
	 * @var int
	 */
	public $quota;
	/**
	 * The active
	 * @var boolean
	 */
	public $active;
	/**
	 * The todo
	 * @var boolean
	 */
	public $todo;
	/**
	 * Constructor
	 * @param string login
	 * @param string url
	 * @param int max
	 * @param int quota
	 * @param boolean active
	 * @param boolean todo
	 * @return OvhTypeAnonymousFtpInfoReturn
	 */
	public function __construct($_login = null,$_url = null,$_max = null,$_quota = null,$_active = null,$_todo = null)
	{
		parent::__construct(array('login'=>$_login,'url'=>$_url,'max'=>$_max,'quota'=>$_quota,'active'=>$_active,'todo'=>$_todo));
	}
	/**
	 * Set login
	 * @param string login
	 * @return string
	 */
	public function setLogin($_login)
	{
		return ($this->login = $_login);
	}
	/**
	 * Get login
	 * @return string
	 */
	public function getLogin()
	{
		return $this->login;
	}
	/**
	 * Set url
	 * @param string url
	 * @return string
	 */
	public function setUrl($_url)
	{
		return ($this->url = $_url);
	}
	/**
	 * Get url
	 * @return string
	 */
	public function getUrl()
	{
		return $this->url;
	}
	/**
	 * Set max
	 * @param int max
	 * @return int
	 */
	public function setMax($_max)
	{
		return ($this->max = $_max);
	}
	/**
	 * Get max
	 * @return int
	 */
	public function getMax()
	{
		return $this->max;
	}
	/**
	 * Set quota
	 * @param int quota
	 * @return int
	 */
	public function setQuota($_quota)
	{
		return ($this->quota = $_quota);
	}
	/**
	 * Get quota
	 * @return int
	 */
	public function getQuota()
	{
		return $this->quota;
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
	 * Set todo
	 * @param boolean todo
	 * @return boolean
	 */
	public function setTodo($_todo)
	{
		return ($this->todo = $_todo);
	}
	/**
	 * Get todo
	 * @return boolean
	 */
	public function getTodo()
	{
		return $this->todo;
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