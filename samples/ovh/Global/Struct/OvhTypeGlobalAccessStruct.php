<?php
/**
 * Class file for OvhTypeGlobalAccessStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeGlobalAccessStruct
 * @date 02/07/2012
 */
class OvhTypeGlobalAccessStruct extends OvhWsdlClass
{
	/**
	 * The name
	 * @var string
	 */
	public $name;
	/**
	 * The domain
	 * @var boolean
	 */
	public $domain;
	/**
	 * The hosting
	 * @var boolean
	 */
	public $hosting;
	/**
	 * The email
	 * @var boolean
	 */
	public $email;
	/**
	 * The pop
	 * @var boolean
	 */
	public $pop;
	/**
	 * The dedicated
	 * @var boolean
	 */
	public $dedicated;
	/**
	 * The reverse
	 * @var string
	 */
	public $reverse;
	/**
	 * The alldom
	 * @var boolean
	 */
	public $alldom;
	/**
	 * The ssl
	 * @var boolean
	 */
	public $ssl;
	/**
	 * The rps
	 * @var boolean
	 */
	public $rps;
	/**
	 * The rpsOrphan
	 * @var boolean
	 */
	public $rpsOrphan;
	/**
	 * The vs
	 * @var boolean
	 */
	public $vs;
	/**
	 * The voip
	 * @var boolean
	 */
	public $voip;
	/**
	 * The housing
	 * @var boolean
	 */
	public $housing;
	/**
	 * The sqlpriv
	 * @var boolean
	 */
	public $sqlpriv;
	/**
	 * Constructor
	 * @param string name
	 * @param boolean domain
	 * @param boolean hosting
	 * @param boolean email
	 * @param boolean pop
	 * @param boolean dedicated
	 * @param string reverse
	 * @param boolean alldom
	 * @param boolean ssl
	 * @param boolean rps
	 * @param boolean rpsOrphan
	 * @param boolean vs
	 * @param boolean voip
	 * @param boolean housing
	 * @param boolean sqlpriv
	 * @return OvhTypeGlobalAccessStruct
	 */
	public function __construct($_name = null,$_domain = null,$_hosting = null,$_email = null,$_pop = null,$_dedicated = null,$_reverse = null,$_alldom = null,$_ssl = null,$_rps = null,$_rpsOrphan = null,$_vs = null,$_voip = null,$_housing = null,$_sqlpriv = null)
	{
		parent::__construct(array('name'=>$_name,'domain'=>$_domain,'hosting'=>$_hosting,'email'=>$_email,'pop'=>$_pop,'dedicated'=>$_dedicated,'reverse'=>$_reverse,'alldom'=>$_alldom,'ssl'=>$_ssl,'rps'=>$_rps,'rpsOrphan'=>$_rpsOrphan,'vs'=>$_vs,'voip'=>$_voip,'housing'=>$_housing,'sqlpriv'=>$_sqlpriv));
	}
	/**
	 * Set name
	 * @param string name
	 * @return string
	 */
	public function setName($_name)
	{
		return ($this->name = $_name);
	}
	/**
	 * Get name
	 * @return string
	 */
	public function getName()
	{
		return $this->name;
	}
	/**
	 * Set domain
	 * @param boolean domain
	 * @return boolean
	 */
	public function setDomain($_domain)
	{
		return ($this->domain = $_domain);
	}
	/**
	 * Get domain
	 * @return boolean
	 */
	public function getDomain()
	{
		return $this->domain;
	}
	/**
	 * Set hosting
	 * @param boolean hosting
	 * @return boolean
	 */
	public function setHosting($_hosting)
	{
		return ($this->hosting = $_hosting);
	}
	/**
	 * Get hosting
	 * @return boolean
	 */
	public function getHosting()
	{
		return $this->hosting;
	}
	/**
	 * Set email
	 * @param boolean email
	 * @return boolean
	 */
	public function setEmail($_email)
	{
		return ($this->email = $_email);
	}
	/**
	 * Get email
	 * @return boolean
	 */
	public function getEmail()
	{
		return $this->email;
	}
	/**
	 * Set pop
	 * @param boolean pop
	 * @return boolean
	 */
	public function setPop($_pop)
	{
		return ($this->pop = $_pop);
	}
	/**
	 * Get pop
	 * @return boolean
	 */
	public function getPop()
	{
		return $this->pop;
	}
	/**
	 * Set dedicated
	 * @param boolean dedicated
	 * @return boolean
	 */
	public function setDedicated($_dedicated)
	{
		return ($this->dedicated = $_dedicated);
	}
	/**
	 * Get dedicated
	 * @return boolean
	 */
	public function getDedicated()
	{
		return $this->dedicated;
	}
	/**
	 * Set reverse
	 * @param string reverse
	 * @return string
	 */
	public function setReverse($_reverse)
	{
		return ($this->reverse = $_reverse);
	}
	/**
	 * Get reverse
	 * @return string
	 */
	public function getReverse()
	{
		return $this->reverse;
	}
	/**
	 * Set alldom
	 * @param boolean alldom
	 * @return boolean
	 */
	public function setAlldom($_alldom)
	{
		return ($this->alldom = $_alldom);
	}
	/**
	 * Get alldom
	 * @return boolean
	 */
	public function getAlldom()
	{
		return $this->alldom;
	}
	/**
	 * Set ssl
	 * @param boolean ssl
	 * @return boolean
	 */
	public function setSsl($_ssl)
	{
		return ($this->ssl = $_ssl);
	}
	/**
	 * Get ssl
	 * @return boolean
	 */
	public function getSsl()
	{
		return $this->ssl;
	}
	/**
	 * Set rps
	 * @param boolean rps
	 * @return boolean
	 */
	public function setRps($_rps)
	{
		return ($this->rps = $_rps);
	}
	/**
	 * Get rps
	 * @return boolean
	 */
	public function getRps()
	{
		return $this->rps;
	}
	/**
	 * Set rpsOrphan
	 * @param boolean rpsOrphan
	 * @return boolean
	 */
	public function setRpsOrphan($_rpsOrphan)
	{
		return ($this->rpsOrphan = $_rpsOrphan);
	}
	/**
	 * Get rpsOrphan
	 * @return boolean
	 */
	public function getRpsOrphan()
	{
		return $this->rpsOrphan;
	}
	/**
	 * Set vs
	 * @param boolean vs
	 * @return boolean
	 */
	public function setVs($_vs)
	{
		return ($this->vs = $_vs);
	}
	/**
	 * Get vs
	 * @return boolean
	 */
	public function getVs()
	{
		return $this->vs;
	}
	/**
	 * Set voip
	 * @param boolean voip
	 * @return boolean
	 */
	public function setVoip($_voip)
	{
		return ($this->voip = $_voip);
	}
	/**
	 * Get voip
	 * @return boolean
	 */
	public function getVoip()
	{
		return $this->voip;
	}
	/**
	 * Set housing
	 * @param boolean housing
	 * @return boolean
	 */
	public function setHousing($_housing)
	{
		return ($this->housing = $_housing);
	}
	/**
	 * Get housing
	 * @return boolean
	 */
	public function getHousing()
	{
		return $this->housing;
	}
	/**
	 * Set sqlpriv
	 * @param boolean sqlpriv
	 * @return boolean
	 */
	public function setSqlpriv($_sqlpriv)
	{
		return ($this->sqlpriv = $_sqlpriv);
	}
	/**
	 * Get sqlpriv
	 * @return boolean
	 */
	public function getSqlpriv()
	{
		return $this->sqlpriv;
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