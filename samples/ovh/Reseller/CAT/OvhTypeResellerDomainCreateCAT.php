<?php
/**
 * Class file for OvhTypeResellerDomainCreateCAT
 * @date 02/07/2012
 */
/**
 * Class OvhTypeResellerDomainCreateCAT
 * @date 02/07/2012
 */
class OvhTypeResellerDomainCreateCAT extends OvhWsdlClass
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
	 * The hosting
	 * @var string
	 */
	public $hosting;
	/**
	 * The offer
	 * @var string
	 */
	public $offer;
	/**
	 * The profile
	 * @var string
	 */
	public $profile;
	/**
	 * The owo
	 * @var string
	 */
	public $owo;
	/**
	 * The owner
	 * @var string
	 */
	public $owner;
	/**
	 * The admin
	 * @var string
	 */
	public $admin;
	/**
	 * The tech
	 * @var string
	 */
	public $tech;
	/**
	 * The billing
	 * @var string
	 */
	public $billing;
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
	 * The reason
	 * @var string
	 */
	public $reason;
	/**
	 * The dryRun
	 * @var boolean
	 */
	public $dryRun;
	/**
	 * Constructor
	 * @param string session
	 * @param string domain
	 * @param string hosting
	 * @param string offer
	 * @param string profile
	 * @param string owo
	 * @param string owner
	 * @param string admin
	 * @param string tech
	 * @param string billing
	 * @param string dns1
	 * @param string dns2
	 * @param string dns3
	 * @param string dns4
	 * @param string dns5
	 * @param string reason
	 * @param boolean dryRun
	 * @return OvhTypeResellerDomainCreateCAT
	 */
	public function __construct($_session = null,$_domain = null,$_hosting = null,$_offer = null,$_profile = null,$_owo = null,$_owner = null,$_admin = null,$_tech = null,$_billing = null,$_dns1 = null,$_dns2 = null,$_dns3 = null,$_dns4 = null,$_dns5 = null,$_reason = null,$_dryRun = null)
	{
		parent::__construct(array('session'=>$_session,'domain'=>$_domain,'hosting'=>$_hosting,'offer'=>$_offer,'profile'=>$_profile,'owo'=>$_owo,'owner'=>$_owner,'admin'=>$_admin,'tech'=>$_tech,'billing'=>$_billing,'dns1'=>$_dns1,'dns2'=>$_dns2,'dns3'=>$_dns3,'dns4'=>$_dns4,'dns5'=>$_dns5,'reason'=>$_reason,'dryRun'=>$_dryRun));
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
	 * Set hosting
	 * @param string hosting
	 * @return string
	 */
	public function setHosting($_hosting)
	{
		return ($this->hosting = $_hosting);
	}
	/**
	 * Get hosting
	 * @return string
	 */
	public function getHosting()
	{
		return $this->hosting;
	}
	/**
	 * Set offer
	 * @param string offer
	 * @return string
	 */
	public function setOffer($_offer)
	{
		return ($this->offer = $_offer);
	}
	/**
	 * Get offer
	 * @return string
	 */
	public function getOffer()
	{
		return $this->offer;
	}
	/**
	 * Set profile
	 * @param string profile
	 * @return string
	 */
	public function setProfile($_profile)
	{
		return ($this->profile = $_profile);
	}
	/**
	 * Get profile
	 * @return string
	 */
	public function getProfile()
	{
		return $this->profile;
	}
	/**
	 * Set owo
	 * @param string owo
	 * @return string
	 */
	public function setOwo($_owo)
	{
		return ($this->owo = $_owo);
	}
	/**
	 * Get owo
	 * @return string
	 */
	public function getOwo()
	{
		return $this->owo;
	}
	/**
	 * Set owner
	 * @param string owner
	 * @return string
	 */
	public function setOwner($_owner)
	{
		return ($this->owner = $_owner);
	}
	/**
	 * Get owner
	 * @return string
	 */
	public function getOwner()
	{
		return $this->owner;
	}
	/**
	 * Set admin
	 * @param string admin
	 * @return string
	 */
	public function setAdmin($_admin)
	{
		return ($this->admin = $_admin);
	}
	/**
	 * Get admin
	 * @return string
	 */
	public function getAdmin()
	{
		return $this->admin;
	}
	/**
	 * Set tech
	 * @param string tech
	 * @return string
	 */
	public function setTech($_tech)
	{
		return ($this->tech = $_tech);
	}
	/**
	 * Get tech
	 * @return string
	 */
	public function getTech()
	{
		return $this->tech;
	}
	/**
	 * Set billing
	 * @param string billing
	 * @return string
	 */
	public function setBilling($_billing)
	{
		return ($this->billing = $_billing);
	}
	/**
	 * Get billing
	 * @return string
	 */
	public function getBilling()
	{
		return $this->billing;
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
	 * Set reason
	 * @param string reason
	 * @return string
	 */
	public function setReason($_reason)
	{
		return ($this->reason = $_reason);
	}
	/**
	 * Get reason
	 * @return string
	 */
	public function getReason()
	{
		return $this->reason;
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