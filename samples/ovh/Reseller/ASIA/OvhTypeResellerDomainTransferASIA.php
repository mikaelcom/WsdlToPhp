<?php
/**
 * Class file for OvhTypeResellerDomainTransferASIA
 * @date 02/07/2012
 */
/**
 * Class OvhTypeResellerDomainTransferASIA
 * @date 02/07/2012
 */
class OvhTypeResellerDomainTransferASIA extends OvhWsdlClass
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
	 * The authinfo
	 * @var string
	 */
	public $authinfo;
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
	 * The CedCea
	 * @var string
	 */
	public $CedCea;
	/**
	 * The contactCED
	 * @var string
	 */
	public $contactCED;
	/**
	 * The localityCity
	 * @var string
	 */
	public $localityCity;
	/**
	 * The localitySp
	 * @var string
	 */
	public $localitySp;
	/**
	 * The ccLocality
	 * @var string
	 */
	public $ccLocality;
	/**
	 * The legalEntityType
	 * @var string
	 */
	public $legalEntityType;
	/**
	 * The otherLEType
	 * @var string
	 */
	public $otherLEType;
	/**
	 * The identForm
	 * @var string
	 */
	public $identForm;
	/**
	 * The otherIdentForm
	 * @var string
	 */
	public $otherIdentForm;
	/**
	 * The identNumber
	 * @var string
	 */
	public $identNumber;
	/**
	 * The dryRun
	 * @var boolean
	 */
	public $dryRun;
	/**
	 * Constructor
	 * @param string session
	 * @param string domain
	 * @param string authinfo
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
	 * @param string CedCea
	 * @param string contactCED
	 * @param string localityCity
	 * @param string localitySp
	 * @param string ccLocality
	 * @param string legalEntityType
	 * @param string otherLEType
	 * @param string identForm
	 * @param string otherIdentForm
	 * @param string identNumber
	 * @param boolean dryRun
	 * @return OvhTypeResellerDomainTransferASIA
	 */
	public function __construct($_session = null,$_domain = null,$_authinfo = null,$_hosting = null,$_offer = null,$_profile = null,$_owo = null,$_owner = null,$_admin = null,$_tech = null,$_billing = null,$_dns1 = null,$_dns2 = null,$_dns3 = null,$_dns4 = null,$_dns5 = null,$_CedCea = null,$_contactCED = null,$_localityCity = null,$_localitySp = null,$_ccLocality = null,$_legalEntityType = null,$_otherLEType = null,$_identForm = null,$_otherIdentForm = null,$_identNumber = null,$_dryRun = null)
	{
		parent::__construct(array('session'=>$_session,'domain'=>$_domain,'authinfo'=>$_authinfo,'hosting'=>$_hosting,'offer'=>$_offer,'profile'=>$_profile,'owo'=>$_owo,'owner'=>$_owner,'admin'=>$_admin,'tech'=>$_tech,'billing'=>$_billing,'dns1'=>$_dns1,'dns2'=>$_dns2,'dns3'=>$_dns3,'dns4'=>$_dns4,'dns5'=>$_dns5,'CedCea'=>$_CedCea,'contactCED'=>$_contactCED,'localityCity'=>$_localityCity,'localitySp'=>$_localitySp,'ccLocality'=>$_ccLocality,'legalEntityType'=>$_legalEntityType,'otherLEType'=>$_otherLEType,'identForm'=>$_identForm,'otherIdentForm'=>$_otherIdentForm,'identNumber'=>$_identNumber,'dryRun'=>$_dryRun));
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
	 * Set authinfo
	 * @param string authinfo
	 * @return string
	 */
	public function setAuthinfo($_authinfo)
	{
		return ($this->authinfo = $_authinfo);
	}
	/**
	 * Get authinfo
	 * @return string
	 */
	public function getAuthinfo()
	{
		return $this->authinfo;
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
	 * Set CedCea
	 * @param string CedCea
	 * @return string
	 */
	public function setCedCea($_CedCea)
	{
		return ($this->CedCea = $_CedCea);
	}
	/**
	 * Get CedCea
	 * @return string
	 */
	public function getCedCea()
	{
		return $this->CedCea;
	}
	/**
	 * Set contactCED
	 * @param string contactCED
	 * @return string
	 */
	public function setContactCED($_contactCED)
	{
		return ($this->contactCED = $_contactCED);
	}
	/**
	 * Get contactCED
	 * @return string
	 */
	public function getContactCED()
	{
		return $this->contactCED;
	}
	/**
	 * Set localityCity
	 * @param string localityCity
	 * @return string
	 */
	public function setLocalityCity($_localityCity)
	{
		return ($this->localityCity = $_localityCity);
	}
	/**
	 * Get localityCity
	 * @return string
	 */
	public function getLocalityCity()
	{
		return $this->localityCity;
	}
	/**
	 * Set localitySp
	 * @param string localitySp
	 * @return string
	 */
	public function setLocalitySp($_localitySp)
	{
		return ($this->localitySp = $_localitySp);
	}
	/**
	 * Get localitySp
	 * @return string
	 */
	public function getLocalitySp()
	{
		return $this->localitySp;
	}
	/**
	 * Set ccLocality
	 * @param string ccLocality
	 * @return string
	 */
	public function setCcLocality($_ccLocality)
	{
		return ($this->ccLocality = $_ccLocality);
	}
	/**
	 * Get ccLocality
	 * @return string
	 */
	public function getCcLocality()
	{
		return $this->ccLocality;
	}
	/**
	 * Set legalEntityType
	 * @param string legalEntityType
	 * @return string
	 */
	public function setLegalEntityType($_legalEntityType)
	{
		return ($this->legalEntityType = $_legalEntityType);
	}
	/**
	 * Get legalEntityType
	 * @return string
	 */
	public function getLegalEntityType()
	{
		return $this->legalEntityType;
	}
	/**
	 * Set otherLEType
	 * @param string otherLEType
	 * @return string
	 */
	public function setOtherLEType($_otherLEType)
	{
		return ($this->otherLEType = $_otherLEType);
	}
	/**
	 * Get otherLEType
	 * @return string
	 */
	public function getOtherLEType()
	{
		return $this->otherLEType;
	}
	/**
	 * Set identForm
	 * @param string identForm
	 * @return string
	 */
	public function setIdentForm($_identForm)
	{
		return ($this->identForm = $_identForm);
	}
	/**
	 * Get identForm
	 * @return string
	 */
	public function getIdentForm()
	{
		return $this->identForm;
	}
	/**
	 * Set otherIdentForm
	 * @param string otherIdentForm
	 * @return string
	 */
	public function setOtherIdentForm($_otherIdentForm)
	{
		return ($this->otherIdentForm = $_otherIdentForm);
	}
	/**
	 * Get otherIdentForm
	 * @return string
	 */
	public function getOtherIdentForm()
	{
		return $this->otherIdentForm;
	}
	/**
	 * Set identNumber
	 * @param string identNumber
	 * @return string
	 */
	public function setIdentNumber($_identNumber)
	{
		return ($this->identNumber = $_identNumber);
	}
	/**
	 * Get identNumber
	 * @return string
	 */
	public function getIdentNumber()
	{
		return $this->identNumber;
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