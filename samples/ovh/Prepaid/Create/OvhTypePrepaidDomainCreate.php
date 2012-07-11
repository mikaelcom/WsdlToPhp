<?php
/**
 * Class file for OvhTypePrepaidDomainCreate
 * @date 02/07/2012
 */
/**
 * Class OvhTypePrepaidDomainCreate
 * @date 02/07/2012
 */
class OvhTypePrepaidDomainCreate extends OvhWsdlClass
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
	 * The nicowner
	 * @var string
	 */
	public $nicowner;
	/**
	 * The nicadmin
	 * @var string
	 */
	public $nicadmin;
	/**
	 * The nictech
	 * @var string
	 */
	public $nictech;
	/**
	 * The nicbilling
	 * @var string
	 */
	public $nicbilling;
	/**
	 * The dns1
	 * @var string
	 */
	public $dns1;
	/**
	 * The dns2
	 * @var string
	 */
	public $dns2;
	/**
	 * The dns3
	 * @var string
	 */
	public $dns3;
	/**
	 * The dns4
	 * @var string
	 */
	public $dns4;
	/**
	 * The dns5
	 * @var string
	 */
	public $dns5;
	/**
	 * The frpartBirthday
	 * @var string
	 */
	public $frpartBirthday;
	/**
	 * The frpartBirthCountry
	 * @var string
	 */
	public $frpartBirthCountry;
	/**
	 * The frpartBirthDepartment
	 * @var string
	 */
	public $frpartBirthDepartment;
	/**
	 * The frpartBirthTown
	 * @var string
	 */
	public $frpartBirthTown;
	/**
	 * The dryRun
	 * @var boolean
	 */
	public $dryRun;
	/**
	 * Constructor
	 * @param string session
	 * @param string domain
	 * @param string nicowner
	 * @param string nicadmin
	 * @param string nictech
	 * @param string nicbilling
	 * @param string dns1
	 * @param string dns2
	 * @param string dns3
	 * @param string dns4
	 * @param string dns5
	 * @param string frpartBirthday
	 * @param string frpartBirthCountry
	 * @param string frpartBirthDepartment
	 * @param string frpartBirthTown
	 * @param boolean dryRun
	 * @return OvhTypePrepaidDomainCreate
	 */
	public function __construct($_session = null,$_domain = null,$_nicowner = null,$_nicadmin = null,$_nictech = null,$_nicbilling = null,$_dns1 = null,$_dns2 = null,$_dns3 = null,$_dns4 = null,$_dns5 = null,$_frpartBirthday = null,$_frpartBirthCountry = null,$_frpartBirthDepartment = null,$_frpartBirthTown = null,$_dryRun = null)
	{
		parent::__construct(array('session'=>$_session,'domain'=>$_domain,'nicowner'=>$_nicowner,'nicadmin'=>$_nicadmin,'nictech'=>$_nictech,'nicbilling'=>$_nicbilling,'dns1'=>$_dns1,'dns2'=>$_dns2,'dns3'=>$_dns3,'dns4'=>$_dns4,'dns5'=>$_dns5,'frpartBirthday'=>$_frpartBirthday,'frpartBirthCountry'=>$_frpartBirthCountry,'frpartBirthDepartment'=>$_frpartBirthDepartment,'frpartBirthTown'=>$_frpartBirthTown,'dryRun'=>$_dryRun));
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
	 * Set nicowner
	 * @param string nicowner
	 * @return string
	 */
	public function setNicowner($_nicowner)
	{
		return ($this->nicowner = $_nicowner);
	}
	/**
	 * Get nicowner
	 * @return string
	 */
	public function getNicowner()
	{
		return $this->nicowner;
	}
	/**
	 * Set nicadmin
	 * @param string nicadmin
	 * @return string
	 */
	public function setNicadmin($_nicadmin)
	{
		return ($this->nicadmin = $_nicadmin);
	}
	/**
	 * Get nicadmin
	 * @return string
	 */
	public function getNicadmin()
	{
		return $this->nicadmin;
	}
	/**
	 * Set nictech
	 * @param string nictech
	 * @return string
	 */
	public function setNictech($_nictech)
	{
		return ($this->nictech = $_nictech);
	}
	/**
	 * Get nictech
	 * @return string
	 */
	public function getNictech()
	{
		return $this->nictech;
	}
	/**
	 * Set nicbilling
	 * @param string nicbilling
	 * @return string
	 */
	public function setNicbilling($_nicbilling)
	{
		return ($this->nicbilling = $_nicbilling);
	}
	/**
	 * Get nicbilling
	 * @return string
	 */
	public function getNicbilling()
	{
		return $this->nicbilling;
	}
	/**
	 * Set dns1
	 * @param string dns1
	 * @return string
	 */
	public function setDns1($_dns1)
	{
		return ($this->dns1 = $_dns1);
	}
	/**
	 * Get dns1
	 * @return string
	 */
	public function getDns1()
	{
		return $this->dns1;
	}
	/**
	 * Set dns2
	 * @param string dns2
	 * @return string
	 */
	public function setDns2($_dns2)
	{
		return ($this->dns2 = $_dns2);
	}
	/**
	 * Get dns2
	 * @return string
	 */
	public function getDns2()
	{
		return $this->dns2;
	}
	/**
	 * Set dns3
	 * @param string dns3
	 * @return string
	 */
	public function setDns3($_dns3)
	{
		return ($this->dns3 = $_dns3);
	}
	/**
	 * Get dns3
	 * @return string
	 */
	public function getDns3()
	{
		return $this->dns3;
	}
	/**
	 * Set dns4
	 * @param string dns4
	 * @return string
	 */
	public function setDns4($_dns4)
	{
		return ($this->dns4 = $_dns4);
	}
	/**
	 * Get dns4
	 * @return string
	 */
	public function getDns4()
	{
		return $this->dns4;
	}
	/**
	 * Set dns5
	 * @param string dns5
	 * @return string
	 */
	public function setDns5($_dns5)
	{
		return ($this->dns5 = $_dns5);
	}
	/**
	 * Get dns5
	 * @return string
	 */
	public function getDns5()
	{
		return $this->dns5;
	}
	/**
	 * Set frpartBirthday
	 * @param string frpartBirthday
	 * @return string
	 */
	public function setFrpartBirthday($_frpartBirthday)
	{
		return ($this->frpartBirthday = $_frpartBirthday);
	}
	/**
	 * Get frpartBirthday
	 * @return string
	 */
	public function getFrpartBirthday()
	{
		return $this->frpartBirthday;
	}
	/**
	 * Set frpartBirthCountry
	 * @param string frpartBirthCountry
	 * @return string
	 */
	public function setFrpartBirthCountry($_frpartBirthCountry)
	{
		return ($this->frpartBirthCountry = $_frpartBirthCountry);
	}
	/**
	 * Get frpartBirthCountry
	 * @return string
	 */
	public function getFrpartBirthCountry()
	{
		return $this->frpartBirthCountry;
	}
	/**
	 * Set frpartBirthDepartment
	 * @param string frpartBirthDepartment
	 * @return string
	 */
	public function setFrpartBirthDepartment($_frpartBirthDepartment)
	{
		return ($this->frpartBirthDepartment = $_frpartBirthDepartment);
	}
	/**
	 * Get frpartBirthDepartment
	 * @return string
	 */
	public function getFrpartBirthDepartment()
	{
		return $this->frpartBirthDepartment;
	}
	/**
	 * Set frpartBirthTown
	 * @param string frpartBirthTown
	 * @return string
	 */
	public function setFrpartBirthTown($_frpartBirthTown)
	{
		return ($this->frpartBirthTown = $_frpartBirthTown);
	}
	/**
	 * Get frpartBirthTown
	 * @return string
	 */
	public function getFrpartBirthTown()
	{
		return $this->frpartBirthTown;
	}
	/**
	 * Set dryRun
	 * @param boolean dryRun
	 * @return boolean
	 */
	public function setDryRun($_dryRun)
	{
		return ($this->dryRun = $_dryRun);
	}
	/**
	 * Get dryRun
	 * @return boolean
	 */
	public function getDryRun()
	{
		return $this->dryRun;
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