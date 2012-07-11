<?php
/**
 * Class file for OvhTypeHostingGetCapabilitiesReturn
 * @date 02/07/2012
 */
/**
 * Class OvhTypeHostingGetCapabilitiesReturn
 * @date 02/07/2012
 */
class OvhTypeHostingGetCapabilitiesReturn extends OvhWsdlClass
{
	/**
	 * The name
	 * @var string
	 */
	public $name;
	/**
	 * The webspace
	 * @var int
	 */
	public $webspace;
	/**
	 * The traffic
	 * @var string
	 */
	public $traffic;
	/**
	 * The databases
	 * @var int
	 */
	public $databases;
	/**
	 * The databaseSpace
	 * @var int
	 */
	public $databaseSpace;
	/**
	 * The multidomains
	 * @var int
	 */
	public $multidomains;
	/**
	 * The subdomains
	 * @var int
	 */
	public $subdomains;
	/**
	 * The streaming
	 * @var int
	 */
	public $streaming;
	/**
	 * The multiftp
	 * @var int
	 */
	public $multiftp;
	/**
	 * The anonymousftp
	 * @var int
	 */
	public $anonymousftp;
	/**
	 * The freeDomPerYear
	 * @var int
	 */
	public $freeDomPerYear;
	/**
	 * The freeDomMax
	 * @var int
	 */
	public $freeDomMax;
	/**
	 * The sharedSSL
	 * @var boolean
	 */
	public $sharedSSL;
	/**
	 * The ssh
	 * @var boolean
	 */
	public $ssh;
	/**
	 * The geoloc
	 * @var boolean
	 */
	public $geoloc;
	/**
	 * The cgi
	 * @var boolean
	 */
	public $cgi;
	/**
	 * The crontab
	 * @var boolean
	 */
	public $crontab;
	/**
	 * The sip
	 * @var boolean
	 */
	public $sip;
	/**
	 * The vpn
	 * @var boolean
	 */
	public $vpn;
	/**
	 * The jabber
	 * @var boolean
	 */
	public $jabber;
	/**
	 * Constructor
	 * @param string name
	 * @param int webspace
	 * @param string traffic
	 * @param int databases
	 * @param int databaseSpace
	 * @param int multidomains
	 * @param int subdomains
	 * @param int streaming
	 * @param int multiftp
	 * @param int anonymousftp
	 * @param int freeDomPerYear
	 * @param int freeDomMax
	 * @param boolean sharedSSL
	 * @param boolean ssh
	 * @param boolean geoloc
	 * @param boolean cgi
	 * @param boolean crontab
	 * @param boolean sip
	 * @param boolean vpn
	 * @param boolean jabber
	 * @return OvhTypeHostingGetCapabilitiesReturn
	 */
	public function __construct($_name = null,$_webspace = null,$_traffic = null,$_databases = null,$_databaseSpace = null,$_multidomains = null,$_subdomains = null,$_streaming = null,$_multiftp = null,$_anonymousftp = null,$_freeDomPerYear = null,$_freeDomMax = null,$_sharedSSL = null,$_ssh = null,$_geoloc = null,$_cgi = null,$_crontab = null,$_sip = null,$_vpn = null,$_jabber = null)
	{
		parent::__construct(array('name'=>$_name,'webspace'=>$_webspace,'traffic'=>$_traffic,'databases'=>$_databases,'databaseSpace'=>$_databaseSpace,'multidomains'=>$_multidomains,'subdomains'=>$_subdomains,'streaming'=>$_streaming,'multiftp'=>$_multiftp,'anonymousftp'=>$_anonymousftp,'freeDomPerYear'=>$_freeDomPerYear,'freeDomMax'=>$_freeDomMax,'sharedSSL'=>$_sharedSSL,'ssh'=>$_ssh,'geoloc'=>$_geoloc,'cgi'=>$_cgi,'crontab'=>$_crontab,'sip'=>$_sip,'vpn'=>$_vpn,'jabber'=>$_jabber));
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
	 * Set webspace
	 * @param int webspace
	 * @return int
	 */
	public function setWebspace($_webspace)
	{
		return ($this->webspace = $_webspace);
	}
	/**
	 * Get webspace
	 * @return int
	 */
	public function getWebspace()
	{
		return $this->webspace;
	}
	/**
	 * Set traffic
	 * @param string traffic
	 * @return string
	 */
	public function setTraffic($_traffic)
	{
		return ($this->traffic = $_traffic);
	}
	/**
	 * Get traffic
	 * @return string
	 */
	public function getTraffic()
	{
		return $this->traffic;
	}
	/**
	 * Set databases
	 * @param int databases
	 * @return int
	 */
	public function setDatabases($_databases)
	{
		return ($this->databases = $_databases);
	}
	/**
	 * Get databases
	 * @return int
	 */
	public function getDatabases()
	{
		return $this->databases;
	}
	/**
	 * Set databaseSpace
	 * @param int databaseSpace
	 * @return int
	 */
	public function setDatabaseSpace($_databaseSpace)
	{
		return ($this->databaseSpace = $_databaseSpace);
	}
	/**
	 * Get databaseSpace
	 * @return int
	 */
	public function getDatabaseSpace()
	{
		return $this->databaseSpace;
	}
	/**
	 * Set multidomains
	 * @param int multidomains
	 * @return int
	 */
	public function setMultidomains($_multidomains)
	{
		return ($this->multidomains = $_multidomains);
	}
	/**
	 * Get multidomains
	 * @return int
	 */
	public function getMultidomains()
	{
		return $this->multidomains;
	}
	/**
	 * Set subdomains
	 * @param int subdomains
	 * @return int
	 */
	public function setSubdomains($_subdomains)
	{
		return ($this->subdomains = $_subdomains);
	}
	/**
	 * Get subdomains
	 * @return int
	 */
	public function getSubdomains()
	{
		return $this->subdomains;
	}
	/**
	 * Set streaming
	 * @param int streaming
	 * @return int
	 */
	public function setStreaming($_streaming)
	{
		return ($this->streaming = $_streaming);
	}
	/**
	 * Get streaming
	 * @return int
	 */
	public function getStreaming()
	{
		return $this->streaming;
	}
	/**
	 * Set multiftp
	 * @param int multiftp
	 * @return int
	 */
	public function setMultiftp($_multiftp)
	{
		return ($this->multiftp = $_multiftp);
	}
	/**
	 * Get multiftp
	 * @return int
	 */
	public function getMultiftp()
	{
		return $this->multiftp;
	}
	/**
	 * Set anonymousftp
	 * @param int anonymousftp
	 * @return int
	 */
	public function setAnonymousftp($_anonymousftp)
	{
		return ($this->anonymousftp = $_anonymousftp);
	}
	/**
	 * Get anonymousftp
	 * @return int
	 */
	public function getAnonymousftp()
	{
		return $this->anonymousftp;
	}
	/**
	 * Set freeDomPerYear
	 * @param int freeDomPerYear
	 * @return int
	 */
	public function setFreeDomPerYear($_freeDomPerYear)
	{
		return ($this->freeDomPerYear = $_freeDomPerYear);
	}
	/**
	 * Get freeDomPerYear
	 * @return int
	 */
	public function getFreeDomPerYear()
	{
		return $this->freeDomPerYear;
	}
	/**
	 * Set freeDomMax
	 * @param int freeDomMax
	 * @return int
	 */
	public function setFreeDomMax($_freeDomMax)
	{
		return ($this->freeDomMax = $_freeDomMax);
	}
	/**
	 * Get freeDomMax
	 * @return int
	 */
	public function getFreeDomMax()
	{
		return $this->freeDomMax;
	}
	/**
	 * Set sharedSSL
	 * @param boolean sharedSSL
	 * @return boolean
	 */
	public function setSharedSSL($_sharedSSL)
	{
		return ($this->sharedSSL = $_sharedSSL);
	}
	/**
	 * Get sharedSSL
	 * @return boolean
	 */
	public function getSharedSSL()
	{
		return $this->sharedSSL;
	}
	/**
	 * Set ssh
	 * @param boolean ssh
	 * @return boolean
	 */
	public function setSsh($_ssh)
	{
		return ($this->ssh = $_ssh);
	}
	/**
	 * Get ssh
	 * @return boolean
	 */
	public function getSsh()
	{
		return $this->ssh;
	}
	/**
	 * Set geoloc
	 * @param boolean geoloc
	 * @return boolean
	 */
	public function setGeoloc($_geoloc)
	{
		return ($this->geoloc = $_geoloc);
	}
	/**
	 * Get geoloc
	 * @return boolean
	 */
	public function getGeoloc()
	{
		return $this->geoloc;
	}
	/**
	 * Set cgi
	 * @param boolean cgi
	 * @return boolean
	 */
	public function setCgi($_cgi)
	{
		return ($this->cgi = $_cgi);
	}
	/**
	 * Get cgi
	 * @return boolean
	 */
	public function getCgi()
	{
		return $this->cgi;
	}
	/**
	 * Set crontab
	 * @param boolean crontab
	 * @return boolean
	 */
	public function setCrontab($_crontab)
	{
		return ($this->crontab = $_crontab);
	}
	/**
	 * Get crontab
	 * @return boolean
	 */
	public function getCrontab()
	{
		return $this->crontab;
	}
	/**
	 * Set sip
	 * @param boolean sip
	 * @return boolean
	 */
	public function setSip($_sip)
	{
		return ($this->sip = $_sip);
	}
	/**
	 * Get sip
	 * @return boolean
	 */
	public function getSip()
	{
		return $this->sip;
	}
	/**
	 * Set vpn
	 * @param boolean vpn
	 * @return boolean
	 */
	public function setVpn($_vpn)
	{
		return ($this->vpn = $_vpn);
	}
	/**
	 * Get vpn
	 * @return boolean
	 */
	public function getVpn()
	{
		return $this->vpn;
	}
	/**
	 * Set jabber
	 * @param boolean jabber
	 * @return boolean
	 */
	public function setJabber($_jabber)
	{
		return ($this->jabber = $_jabber);
	}
	/**
	 * Get jabber
	 * @return boolean
	 */
	public function getJabber()
	{
		return $this->jabber;
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