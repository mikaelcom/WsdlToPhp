<?php
/**
 * Class file for OvhTypeFtpInfoReturn
 * @date 02/07/2012
 */
/**
 * Class OvhTypeFtpInfoReturn
 * @date 02/07/2012
 */
class OvhTypeFtpInfoReturn extends OvhWsdlClass
{
	/**
	 * The login
	 * @var string
	 */
	public $login;
	/**
	 * The quota
	 * @var int
	 */
	public $quota;
	/**
	 * The maxQuota
	 * @var int
	 */
	public $maxQuota;
	/**
	 * The url
	 * @var string
	 */
	public $url;
	/**
	 * The hostedOn
	 * @var string
	 */
	public $hostedOn;
	/**
	 * The isTodo
	 * @var string
	 */
	public $isTodo;
	/**
	 * The highCapacity
	 * @var boolean
	 */
	public $highCapacity;
	/**
	 * The highSecurity
	 * @var boolean
	 */
	public $highSecurity;
	/**
	 * Constructor
	 * @param string login
	 * @param int quota
	 * @param int maxQuota
	 * @param string url
	 * @param string hostedOn
	 * @param string isTodo
	 * @param boolean highCapacity
	 * @param boolean highSecurity
	 * @return OvhTypeFtpInfoReturn
	 */
	public function __construct($_login = null,$_quota = null,$_maxQuota = null,$_url = null,$_hostedOn = null,$_isTodo = null,$_highCapacity = null,$_highSecurity = null)
	{
		parent::__construct(array('login'=>$_login,'quota'=>$_quota,'maxQuota'=>$_maxQuota,'url'=>$_url,'hostedOn'=>$_hostedOn,'isTodo'=>$_isTodo,'highCapacity'=>$_highCapacity,'highSecurity'=>$_highSecurity));
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
	 * Set maxQuota
	 * @param int maxQuota
	 * @return int
	 */
	public function setMaxQuota($_maxQuota)
	{
		return ($this->maxQuota = $_maxQuota);
	}
	/**
	 * Get maxQuota
	 * @return int
	 */
	public function getMaxQuota()
	{
		return $this->maxQuota;
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
	 * Set hostedOn
	 * @param string hostedOn
	 * @return string
	 */
	public function setHostedOn($_hostedOn)
	{
		return ($this->hostedOn = $_hostedOn);
	}
	/**
	 * Get hostedOn
	 * @return string
	 */
	public function getHostedOn()
	{
		return $this->hostedOn;
	}
	/**
	 * Set isTodo
	 * @param string isTodo
	 * @return string
	 */
	public function setIsTodo($_isTodo)
	{
		return ($this->isTodo = $_isTodo);
	}
	/**
	 * Get isTodo
	 * @return string
	 */
	public function getIsTodo()
	{
		return $this->isTodo;
	}
	/**
	 * Set highCapacity
	 * @param boolean highCapacity
	 * @return boolean
	 */
	public function setHighCapacity($_highCapacity)
	{
		return ($this->highCapacity = $_highCapacity);
	}
	/**
	 * Get highCapacity
	 * @return boolean
	 */
	public function getHighCapacity()
	{
		return $this->highCapacity;
	}
	/**
	 * Set highSecurity
	 * @param boolean highSecurity
	 * @return boolean
	 */
	public function setHighSecurity($_highSecurity)
	{
		return ($this->highSecurity = $_highSecurity);
	}
	/**
	 * Get highSecurity
	 * @return boolean
	 */
	public function getHighSecurity()
	{
		return $this->highSecurity;
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