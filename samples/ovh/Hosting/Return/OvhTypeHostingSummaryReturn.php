<?php
/**
 * Class file for OvhTypeHostingSummaryReturn
 * @date 02/07/2012
 */
/**
 * Class OvhTypeHostingSummaryReturn
 * @date 02/07/2012
 */
class OvhTypeHostingSummaryReturn extends OvhWsdlClass
{
	/**
	 * The country
	 * @var string
	 */
	public $country;
	/**
	 * The webspace
	 * @var string
	 */
	public $webspace;
	/**
	 * The maxWebspace
	 * @var string
	 */
	public $maxWebspace;
	/**
	 * The subdomains
	 * @var string
	 */
	public $subdomains;
	/**
	 * The multidomains
	 * @var string
	 */
	public $multidomains;
	/**
	 * The multiftps
	 * @var string
	 */
	public $multiftps;
	/**
	 * The anonymousftp
	 * @var string
	 */
	public $anonymousftp;
	/**
	 * The databases
	 * @var string
	 */
	public $databases;
	/**
	 * The freedom_remaining
	 * @var string
	 */
	public $freedom_remaining;
	/**
	 * The freedom_assigned
	 * @var string
	 */
	public $freedom_assigned;
	/**
	 * The freedom_total
	 * @var string
	 */
	public $freedom_total;
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
	 * The state
	 * @var string
	 */
	public $state;
	/**
	 * Constructor
	 * @param string country
	 * @param string webspace
	 * @param string maxWebspace
	 * @param string subdomains
	 * @param string multidomains
	 * @param string multiftps
	 * @param string anonymousftp
	 * @param string databases
	 * @param string freedom_remaining
	 * @param string freedom_assigned
	 * @param string freedom_total
	 * @param boolean highCapacity
	 * @param boolean highSecurity
	 * @param string state
	 * @return OvhTypeHostingSummaryReturn
	 */
	public function __construct($_country = null,$_webspace = null,$_maxWebspace = null,$_subdomains = null,$_multidomains = null,$_multiftps = null,$_anonymousftp = null,$_databases = null,$_freedom_remaining = null,$_freedom_assigned = null,$_freedom_total = null,$_highCapacity = null,$_highSecurity = null,$_state = null)
	{
		parent::__construct(array('country'=>$_country,'webspace'=>$_webspace,'maxWebspace'=>$_maxWebspace,'subdomains'=>$_subdomains,'multidomains'=>$_multidomains,'multiftps'=>$_multiftps,'anonymousftp'=>$_anonymousftp,'databases'=>$_databases,'freedom_remaining'=>$_freedom_remaining,'freedom_assigned'=>$_freedom_assigned,'freedom_total'=>$_freedom_total,'highCapacity'=>$_highCapacity,'highSecurity'=>$_highSecurity,'state'=>$_state));
	}
	/**
	 * Set country
	 * @param string country
	 * @return string
	 */
	public function setCountry($_country)
	{
		return ($this->country = $_country);
	}
	/**
	 * Get country
	 * @return string
	 */
	public function getCountry()
	{
		return $this->country;
	}
	/**
	 * Set webspace
	 * @param string webspace
	 * @return string
	 */
	public function setWebspace($_webspace)
	{
		return ($this->webspace = $_webspace);
	}
	/**
	 * Get webspace
	 * @return string
	 */
	public function getWebspace()
	{
		return $this->webspace;
	}
	/**
	 * Set maxWebspace
	 * @param string maxWebspace
	 * @return string
	 */
	public function setMaxWebspace($_maxWebspace)
	{
		return ($this->maxWebspace = $_maxWebspace);
	}
	/**
	 * Get maxWebspace
	 * @return string
	 */
	public function getMaxWebspace()
	{
		return $this->maxWebspace;
	}
	/**
	 * Set subdomains
	 * @param string subdomains
	 * @return string
	 */
	public function setSubdomains($_subdomains)
	{
		return ($this->subdomains = $_subdomains);
	}
	/**
	 * Get subdomains
	 * @return string
	 */
	public function getSubdomains()
	{
		return $this->subdomains;
	}
	/**
	 * Set multidomains
	 * @param string multidomains
	 * @return string
	 */
	public function setMultidomains($_multidomains)
	{
		return ($this->multidomains = $_multidomains);
	}
	/**
	 * Get multidomains
	 * @return string
	 */
	public function getMultidomains()
	{
		return $this->multidomains;
	}
	/**
	 * Set multiftps
	 * @param string multiftps
	 * @return string
	 */
	public function setMultiftps($_multiftps)
	{
		return ($this->multiftps = $_multiftps);
	}
	/**
	 * Get multiftps
	 * @return string
	 */
	public function getMultiftps()
	{
		return $this->multiftps;
	}
	/**
	 * Set anonymousftp
	 * @param string anonymousftp
	 * @return string
	 */
	public function setAnonymousftp($_anonymousftp)
	{
		return ($this->anonymousftp = $_anonymousftp);
	}
	/**
	 * Get anonymousftp
	 * @return string
	 */
	public function getAnonymousftp()
	{
		return $this->anonymousftp;
	}
	/**
	 * Set databases
	 * @param string databases
	 * @return string
	 */
	public function setDatabases($_databases)
	{
		return ($this->databases = $_databases);
	}
	/**
	 * Get databases
	 * @return string
	 */
	public function getDatabases()
	{
		return $this->databases;
	}
	/**
	 * Set freedom_remaining
	 * @param string freedom_remaining
	 * @return string
	 */
	public function setFreedom_remaining($_freedom_remaining)
	{
		return ($this->freedom_remaining = $_freedom_remaining);
	}
	/**
	 * Get freedom_remaining
	 * @return string
	 */
	public function getFreedom_remaining()
	{
		return $this->freedom_remaining;
	}
	/**
	 * Set freedom_assigned
	 * @param string freedom_assigned
	 * @return string
	 */
	public function setFreedom_assigned($_freedom_assigned)
	{
		return ($this->freedom_assigned = $_freedom_assigned);
	}
	/**
	 * Get freedom_assigned
	 * @return string
	 */
	public function getFreedom_assigned()
	{
		return $this->freedom_assigned;
	}
	/**
	 * Set freedom_total
	 * @param string freedom_total
	 * @return string
	 */
	public function setFreedom_total($_freedom_total)
	{
		return ($this->freedom_total = $_freedom_total);
	}
	/**
	 * Get freedom_total
	 * @return string
	 */
	public function getFreedom_total()
	{
		return $this->freedom_total;
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
	 * Set state
	 * @param string state
	 * @return string
	 */
	public function setState($_state)
	{
		return ($this->state = $_state);
	}
	/**
	 * Get state
	 * @return string
	 */
	public function getState()
	{
		return $this->state;
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