<?php
/**
 * Class file for MaxMindTypeMINFRAUD
 * @date 08/07/2012
 */
/**
 * Class MaxMindTypeMINFRAUD
 * @date 08/07/2012
 */
class MaxMindTypeMINFRAUD extends MaxMindWsdlClass
{
	/**
	 * The anonymousProxy
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $anonymousProxy;
	/**
	 * The binCountry
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $binCountry;
	/**
	 * The binMatch
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $binMatch;
	/**
	 * The binName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $binName;
	/**
	 * The binNameMatch
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $binNameMatch;
	/**
	 * The binPhone
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $binPhone;
	/**
	 * The binPhoneMatch
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $binPhoneMatch;
	/**
	 * The carderEmail
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $carderEmail;
	/**
	 * The cityPostalMatch
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $cityPostalMatch;
	/**
	 * The countryCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $countryCode;
	/**
	 * The countryMatch
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $countryMatch;
	/**
	 * The custPhoneInBillingLoc
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $custPhoneInBillingLoc;
	/**
	 * The distance
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $distance;
	/**
	 * The err
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $err;
	/**
	 * The freeMail
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $freeMail;
	/**
	 * The highRiskCountry
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $highRiskCountry;
	/**
	 * The highRiskPassword
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $highRiskPassword;
	/**
	 * The highRiskUsername
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $highRiskUsername;
	/**
	 * The ip_accuracyRadius
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ip_accuracyRadius;
	/**
	 * The ip_areaCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ip_areaCode;
	/**
	 * The ip_asnum
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ip_asnum;
	/**
	 * The ip_city
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ip_city;
	/**
	 * The ip_cityConf
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ip_cityConf;
	/**
	 * The ip_continentCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ip_continentCode;
	/**
	 * The ip_corporateProxy
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ip_corporateProxy;
	/**
	 * The ip_countryConf
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ip_countryConf;
	/**
	 * The ip_countryName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ip_countryName;
	/**
	 * The ip_domain
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ip_domain;
	/**
	 * The ip_isp
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ip_isp;
	/**
	 * The ip_latitude
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ip_latitude;
	/**
	 * The ip_longitude
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ip_longitude;
	/**
	 * The ip_metroCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ip_metroCode;
	/**
	 * The ip_netSpeedCell
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ip_netSpeedCell;
	/**
	 * The ip_org
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ip_org;
	/**
	 * The ip_postalCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ip_postalCode;
	/**
	 * The ip_postalConf
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ip_postalConf;
	/**
	 * The ip_region
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ip_region;
	/**
	 * The ip_regionConf
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ip_regionConf;
	/**
	 * The ip_regionName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ip_regionName;
	/**
	 * The ip_timeZone
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ip_timeZone;
	/**
	 * The ip_userType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ip_userType;
	/**
	 * The isTransProxy
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $isTransProxy;
	/**
	 * The maxmindID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $maxmindID;
	/**
	 * The minfraud_version
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $minfraud_version;
	/**
	 * The prepaid
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $prepaid;
	/**
	 * The proxyScore
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $proxyScore;
	/**
	 * The queriesRemaining
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $queriesRemaining;
	/**
	 * The riskScore
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $riskScore;
	/**
	 * The service_level
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $service_level;
	/**
	 * The shipCityPostalMatch
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $shipCityPostalMatch;
	/**
	 * The shipForward
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $shipForward;
	/**
	 * Constructor
	 * @param string anonymousProxy
	 * @param string binCountry
	 * @param string binMatch
	 * @param string binName
	 * @param string binNameMatch
	 * @param string binPhone
	 * @param string binPhoneMatch
	 * @param string carderEmail
	 * @param string cityPostalMatch
	 * @param string countryCode
	 * @param string countryMatch
	 * @param string custPhoneInBillingLoc
	 * @param string distance
	 * @param string err
	 * @param string freeMail
	 * @param string highRiskCountry
	 * @param string highRiskPassword
	 * @param string highRiskUsername
	 * @param string ip_accuracyRadius
	 * @param string ip_areaCode
	 * @param string ip_asnum
	 * @param string ip_city
	 * @param string ip_cityConf
	 * @param string ip_continentCode
	 * @param string ip_corporateProxy
	 * @param string ip_countryConf
	 * @param string ip_countryName
	 * @param string ip_domain
	 * @param string ip_isp
	 * @param string ip_latitude
	 * @param string ip_longitude
	 * @param string ip_metroCode
	 * @param string ip_netSpeedCell
	 * @param string ip_org
	 * @param string ip_postalCode
	 * @param string ip_postalConf
	 * @param string ip_region
	 * @param string ip_regionConf
	 * @param string ip_regionName
	 * @param string ip_timeZone
	 * @param string ip_userType
	 * @param string isTransProxy
	 * @param string maxmindID
	 * @param string minfraud_version
	 * @param string prepaid
	 * @param string proxyScore
	 * @param string queriesRemaining
	 * @param string riskScore
	 * @param string service_level
	 * @param string shipCityPostalMatch
	 * @param string shipForward
	 * @return MaxMindTypeMINFRAUD
	 */
	public function __construct($_anonymousProxy = null,$_binCountry = null,$_binMatch = null,$_binName = null,$_binNameMatch = null,$_binPhone = null,$_binPhoneMatch = null,$_carderEmail = null,$_cityPostalMatch = null,$_countryCode = null,$_countryMatch = null,$_custPhoneInBillingLoc = null,$_distance = null,$_err = null,$_freeMail = null,$_highRiskCountry = null,$_highRiskPassword = null,$_highRiskUsername = null,$_ip_accuracyRadius = null,$_ip_areaCode = null,$_ip_asnum = null,$_ip_city = null,$_ip_cityConf = null,$_ip_continentCode = null,$_ip_corporateProxy = null,$_ip_countryConf = null,$_ip_countryName = null,$_ip_domain = null,$_ip_isp = null,$_ip_latitude = null,$_ip_longitude = null,$_ip_metroCode = null,$_ip_netSpeedCell = null,$_ip_org = null,$_ip_postalCode = null,$_ip_postalConf = null,$_ip_region = null,$_ip_regionConf = null,$_ip_regionName = null,$_ip_timeZone = null,$_ip_userType = null,$_isTransProxy = null,$_maxmindID = null,$_minfraud_version = null,$_prepaid = null,$_proxyScore = null,$_queriesRemaining = null,$_riskScore = null,$_service_level = null,$_shipCityPostalMatch = null,$_shipForward = null)
	{
		parent::__construct(array('anonymousProxy'=>$_anonymousProxy,'binCountry'=>$_binCountry,'binMatch'=>$_binMatch,'binName'=>$_binName,'binNameMatch'=>$_binNameMatch,'binPhone'=>$_binPhone,'binPhoneMatch'=>$_binPhoneMatch,'carderEmail'=>$_carderEmail,'cityPostalMatch'=>$_cityPostalMatch,'countryCode'=>$_countryCode,'countryMatch'=>$_countryMatch,'custPhoneInBillingLoc'=>$_custPhoneInBillingLoc,'distance'=>$_distance,'err'=>$_err,'freeMail'=>$_freeMail,'highRiskCountry'=>$_highRiskCountry,'highRiskPassword'=>$_highRiskPassword,'highRiskUsername'=>$_highRiskUsername,'ip_accuracyRadius'=>$_ip_accuracyRadius,'ip_areaCode'=>$_ip_areaCode,'ip_asnum'=>$_ip_asnum,'ip_city'=>$_ip_city,'ip_cityConf'=>$_ip_cityConf,'ip_continentCode'=>$_ip_continentCode,'ip_corporateProxy'=>$_ip_corporateProxy,'ip_countryConf'=>$_ip_countryConf,'ip_countryName'=>$_ip_countryName,'ip_domain'=>$_ip_domain,'ip_isp'=>$_ip_isp,'ip_latitude'=>$_ip_latitude,'ip_longitude'=>$_ip_longitude,'ip_metroCode'=>$_ip_metroCode,'ip_netSpeedCell'=>$_ip_netSpeedCell,'ip_org'=>$_ip_org,'ip_postalCode'=>$_ip_postalCode,'ip_postalConf'=>$_ip_postalConf,'ip_region'=>$_ip_region,'ip_regionConf'=>$_ip_regionConf,'ip_regionName'=>$_ip_regionName,'ip_timeZone'=>$_ip_timeZone,'ip_userType'=>$_ip_userType,'isTransProxy'=>$_isTransProxy,'maxmindID'=>$_maxmindID,'minfraud_version'=>$_minfraud_version,'prepaid'=>$_prepaid,'proxyScore'=>$_proxyScore,'queriesRemaining'=>$_queriesRemaining,'riskScore'=>$_riskScore,'service_level'=>$_service_level,'shipCityPostalMatch'=>$_shipCityPostalMatch,'shipForward'=>$_shipForward));
	}
	/**
	 * Set anonymousProxy
	 * @param string anonymousProxy
	 * @return string
	 */
	public function setAnonymousProxy($_anonymousProxy)
	{
		return ($this->anonymousProxy = $_anonymousProxy);
	}
	/**
	 * Get anonymousProxy
	 * @return string
	 */
	public function getAnonymousProxy()
	{
		return $this->anonymousProxy;
	}
	/**
	 * Set binCountry
	 * @param string binCountry
	 * @return string
	 */
	public function setBinCountry($_binCountry)
	{
		return ($this->binCountry = $_binCountry);
	}
	/**
	 * Get binCountry
	 * @return string
	 */
	public function getBinCountry()
	{
		return $this->binCountry;
	}
	/**
	 * Set binMatch
	 * @param string binMatch
	 * @return string
	 */
	public function setBinMatch($_binMatch)
	{
		return ($this->binMatch = $_binMatch);
	}
	/**
	 * Get binMatch
	 * @return string
	 */
	public function getBinMatch()
	{
		return $this->binMatch;
	}
	/**
	 * Set binName
	 * @param string binName
	 * @return string
	 */
	public function setBinName($_binName)
	{
		return ($this->binName = $_binName);
	}
	/**
	 * Get binName
	 * @return string
	 */
	public function getBinName()
	{
		return $this->binName;
	}
	/**
	 * Set binNameMatch
	 * @param string binNameMatch
	 * @return string
	 */
	public function setBinNameMatch($_binNameMatch)
	{
		return ($this->binNameMatch = $_binNameMatch);
	}
	/**
	 * Get binNameMatch
	 * @return string
	 */
	public function getBinNameMatch()
	{
		return $this->binNameMatch;
	}
	/**
	 * Set binPhone
	 * @param string binPhone
	 * @return string
	 */
	public function setBinPhone($_binPhone)
	{
		return ($this->binPhone = $_binPhone);
	}
	/**
	 * Get binPhone
	 * @return string
	 */
	public function getBinPhone()
	{
		return $this->binPhone;
	}
	/**
	 * Set binPhoneMatch
	 * @param string binPhoneMatch
	 * @return string
	 */
	public function setBinPhoneMatch($_binPhoneMatch)
	{
		return ($this->binPhoneMatch = $_binPhoneMatch);
	}
	/**
	 * Get binPhoneMatch
	 * @return string
	 */
	public function getBinPhoneMatch()
	{
		return $this->binPhoneMatch;
	}
	/**
	 * Set carderEmail
	 * @param string carderEmail
	 * @return string
	 */
	public function setCarderEmail($_carderEmail)
	{
		return ($this->carderEmail = $_carderEmail);
	}
	/**
	 * Get carderEmail
	 * @return string
	 */
	public function getCarderEmail()
	{
		return $this->carderEmail;
	}
	/**
	 * Set cityPostalMatch
	 * @param string cityPostalMatch
	 * @return string
	 */
	public function setCityPostalMatch($_cityPostalMatch)
	{
		return ($this->cityPostalMatch = $_cityPostalMatch);
	}
	/**
	 * Get cityPostalMatch
	 * @return string
	 */
	public function getCityPostalMatch()
	{
		return $this->cityPostalMatch;
	}
	/**
	 * Set countryCode
	 * @param string countryCode
	 * @return string
	 */
	public function setCountryCode($_countryCode)
	{
		return ($this->countryCode = $_countryCode);
	}
	/**
	 * Get countryCode
	 * @return string
	 */
	public function getCountryCode()
	{
		return $this->countryCode;
	}
	/**
	 * Set countryMatch
	 * @param string countryMatch
	 * @return string
	 */
	public function setCountryMatch($_countryMatch)
	{
		return ($this->countryMatch = $_countryMatch);
	}
	/**
	 * Get countryMatch
	 * @return string
	 */
	public function getCountryMatch()
	{
		return $this->countryMatch;
	}
	/**
	 * Set custPhoneInBillingLoc
	 * @param string custPhoneInBillingLoc
	 * @return string
	 */
	public function setCustPhoneInBillingLoc($_custPhoneInBillingLoc)
	{
		return ($this->custPhoneInBillingLoc = $_custPhoneInBillingLoc);
	}
	/**
	 * Get custPhoneInBillingLoc
	 * @return string
	 */
	public function getCustPhoneInBillingLoc()
	{
		return $this->custPhoneInBillingLoc;
	}
	/**
	 * Set distance
	 * @param string distance
	 * @return string
	 */
	public function setDistance($_distance)
	{
		return ($this->distance = $_distance);
	}
	/**
	 * Get distance
	 * @return string
	 */
	public function getDistance()
	{
		return $this->distance;
	}
	/**
	 * Set err
	 * @param string err
	 * @return string
	 */
	public function setErr($_err)
	{
		return ($this->err = $_err);
	}
	/**
	 * Get err
	 * @return string
	 */
	public function getErr()
	{
		return $this->err;
	}
	/**
	 * Set freeMail
	 * @param string freeMail
	 * @return string
	 */
	public function setFreeMail($_freeMail)
	{
		return ($this->freeMail = $_freeMail);
	}
	/**
	 * Get freeMail
	 * @return string
	 */
	public function getFreeMail()
	{
		return $this->freeMail;
	}
	/**
	 * Set highRiskCountry
	 * @param string highRiskCountry
	 * @return string
	 */
	public function setHighRiskCountry($_highRiskCountry)
	{
		return ($this->highRiskCountry = $_highRiskCountry);
	}
	/**
	 * Get highRiskCountry
	 * @return string
	 */
	public function getHighRiskCountry()
	{
		return $this->highRiskCountry;
	}
	/**
	 * Set highRiskPassword
	 * @param string highRiskPassword
	 * @return string
	 */
	public function setHighRiskPassword($_highRiskPassword)
	{
		return ($this->highRiskPassword = $_highRiskPassword);
	}
	/**
	 * Get highRiskPassword
	 * @return string
	 */
	public function getHighRiskPassword()
	{
		return $this->highRiskPassword;
	}
	/**
	 * Set highRiskUsername
	 * @param string highRiskUsername
	 * @return string
	 */
	public function setHighRiskUsername($_highRiskUsername)
	{
		return ($this->highRiskUsername = $_highRiskUsername);
	}
	/**
	 * Get highRiskUsername
	 * @return string
	 */
	public function getHighRiskUsername()
	{
		return $this->highRiskUsername;
	}
	/**
	 * Set ip_accuracyRadius
	 * @param string ip_accuracyRadius
	 * @return string
	 */
	public function setIp_accuracyRadius($_ip_accuracyRadius)
	{
		return ($this->ip_accuracyRadius = $_ip_accuracyRadius);
	}
	/**
	 * Get ip_accuracyRadius
	 * @return string
	 */
	public function getIp_accuracyRadius()
	{
		return $this->ip_accuracyRadius;
	}
	/**
	 * Set ip_areaCode
	 * @param string ip_areaCode
	 * @return string
	 */
	public function setIp_areaCode($_ip_areaCode)
	{
		return ($this->ip_areaCode = $_ip_areaCode);
	}
	/**
	 * Get ip_areaCode
	 * @return string
	 */
	public function getIp_areaCode()
	{
		return $this->ip_areaCode;
	}
	/**
	 * Set ip_asnum
	 * @param string ip_asnum
	 * @return string
	 */
	public function setIp_asnum($_ip_asnum)
	{
		return ($this->ip_asnum = $_ip_asnum);
	}
	/**
	 * Get ip_asnum
	 * @return string
	 */
	public function getIp_asnum()
	{
		return $this->ip_asnum;
	}
	/**
	 * Set ip_city
	 * @param string ip_city
	 * @return string
	 */
	public function setIp_city($_ip_city)
	{
		return ($this->ip_city = $_ip_city);
	}
	/**
	 * Get ip_city
	 * @return string
	 */
	public function getIp_city()
	{
		return $this->ip_city;
	}
	/**
	 * Set ip_cityConf
	 * @param string ip_cityConf
	 * @return string
	 */
	public function setIp_cityConf($_ip_cityConf)
	{
		return ($this->ip_cityConf = $_ip_cityConf);
	}
	/**
	 * Get ip_cityConf
	 * @return string
	 */
	public function getIp_cityConf()
	{
		return $this->ip_cityConf;
	}
	/**
	 * Set ip_continentCode
	 * @param string ip_continentCode
	 * @return string
	 */
	public function setIp_continentCode($_ip_continentCode)
	{
		return ($this->ip_continentCode = $_ip_continentCode);
	}
	/**
	 * Get ip_continentCode
	 * @return string
	 */
	public function getIp_continentCode()
	{
		return $this->ip_continentCode;
	}
	/**
	 * Set ip_corporateProxy
	 * @param string ip_corporateProxy
	 * @return string
	 */
	public function setIp_corporateProxy($_ip_corporateProxy)
	{
		return ($this->ip_corporateProxy = $_ip_corporateProxy);
	}
	/**
	 * Get ip_corporateProxy
	 * @return string
	 */
	public function getIp_corporateProxy()
	{
		return $this->ip_corporateProxy;
	}
	/**
	 * Set ip_countryConf
	 * @param string ip_countryConf
	 * @return string
	 */
	public function setIp_countryConf($_ip_countryConf)
	{
		return ($this->ip_countryConf = $_ip_countryConf);
	}
	/**
	 * Get ip_countryConf
	 * @return string
	 */
	public function getIp_countryConf()
	{
		return $this->ip_countryConf;
	}
	/**
	 * Set ip_countryName
	 * @param string ip_countryName
	 * @return string
	 */
	public function setIp_countryName($_ip_countryName)
	{
		return ($this->ip_countryName = $_ip_countryName);
	}
	/**
	 * Get ip_countryName
	 * @return string
	 */
	public function getIp_countryName()
	{
		return $this->ip_countryName;
	}
	/**
	 * Set ip_domain
	 * @param string ip_domain
	 * @return string
	 */
	public function setIp_domain($_ip_domain)
	{
		return ($this->ip_domain = $_ip_domain);
	}
	/**
	 * Get ip_domain
	 * @return string
	 */
	public function getIp_domain()
	{
		return $this->ip_domain;
	}
	/**
	 * Set ip_isp
	 * @param string ip_isp
	 * @return string
	 */
	public function setIp_isp($_ip_isp)
	{
		return ($this->ip_isp = $_ip_isp);
	}
	/**
	 * Get ip_isp
	 * @return string
	 */
	public function getIp_isp()
	{
		return $this->ip_isp;
	}
	/**
	 * Set ip_latitude
	 * @param string ip_latitude
	 * @return string
	 */
	public function setIp_latitude($_ip_latitude)
	{
		return ($this->ip_latitude = $_ip_latitude);
	}
	/**
	 * Get ip_latitude
	 * @return string
	 */
	public function getIp_latitude()
	{
		return $this->ip_latitude;
	}
	/**
	 * Set ip_longitude
	 * @param string ip_longitude
	 * @return string
	 */
	public function setIp_longitude($_ip_longitude)
	{
		return ($this->ip_longitude = $_ip_longitude);
	}
	/**
	 * Get ip_longitude
	 * @return string
	 */
	public function getIp_longitude()
	{
		return $this->ip_longitude;
	}
	/**
	 * Set ip_metroCode
	 * @param string ip_metroCode
	 * @return string
	 */
	public function setIp_metroCode($_ip_metroCode)
	{
		return ($this->ip_metroCode = $_ip_metroCode);
	}
	/**
	 * Get ip_metroCode
	 * @return string
	 */
	public function getIp_metroCode()
	{
		return $this->ip_metroCode;
	}
	/**
	 * Set ip_netSpeedCell
	 * @param string ip_netSpeedCell
	 * @return string
	 */
	public function setIp_netSpeedCell($_ip_netSpeedCell)
	{
		return ($this->ip_netSpeedCell = $_ip_netSpeedCell);
	}
	/**
	 * Get ip_netSpeedCell
	 * @return string
	 */
	public function getIp_netSpeedCell()
	{
		return $this->ip_netSpeedCell;
	}
	/**
	 * Set ip_org
	 * @param string ip_org
	 * @return string
	 */
	public function setIp_org($_ip_org)
	{
		return ($this->ip_org = $_ip_org);
	}
	/**
	 * Get ip_org
	 * @return string
	 */
	public function getIp_org()
	{
		return $this->ip_org;
	}
	/**
	 * Set ip_postalCode
	 * @param string ip_postalCode
	 * @return string
	 */
	public function setIp_postalCode($_ip_postalCode)
	{
		return ($this->ip_postalCode = $_ip_postalCode);
	}
	/**
	 * Get ip_postalCode
	 * @return string
	 */
	public function getIp_postalCode()
	{
		return $this->ip_postalCode;
	}
	/**
	 * Set ip_postalConf
	 * @param string ip_postalConf
	 * @return string
	 */
	public function setIp_postalConf($_ip_postalConf)
	{
		return ($this->ip_postalConf = $_ip_postalConf);
	}
	/**
	 * Get ip_postalConf
	 * @return string
	 */
	public function getIp_postalConf()
	{
		return $this->ip_postalConf;
	}
	/**
	 * Set ip_region
	 * @param string ip_region
	 * @return string
	 */
	public function setIp_region($_ip_region)
	{
		return ($this->ip_region = $_ip_region);
	}
	/**
	 * Get ip_region
	 * @return string
	 */
	public function getIp_region()
	{
		return $this->ip_region;
	}
	/**
	 * Set ip_regionConf
	 * @param string ip_regionConf
	 * @return string
	 */
	public function setIp_regionConf($_ip_regionConf)
	{
		return ($this->ip_regionConf = $_ip_regionConf);
	}
	/**
	 * Get ip_regionConf
	 * @return string
	 */
	public function getIp_regionConf()
	{
		return $this->ip_regionConf;
	}
	/**
	 * Set ip_regionName
	 * @param string ip_regionName
	 * @return string
	 */
	public function setIp_regionName($_ip_regionName)
	{
		return ($this->ip_regionName = $_ip_regionName);
	}
	/**
	 * Get ip_regionName
	 * @return string
	 */
	public function getIp_regionName()
	{
		return $this->ip_regionName;
	}
	/**
	 * Set ip_timeZone
	 * @param string ip_timeZone
	 * @return string
	 */
	public function setIp_timeZone($_ip_timeZone)
	{
		return ($this->ip_timeZone = $_ip_timeZone);
	}
	/**
	 * Get ip_timeZone
	 * @return string
	 */
	public function getIp_timeZone()
	{
		return $this->ip_timeZone;
	}
	/**
	 * Set ip_userType
	 * @param string ip_userType
	 * @return string
	 */
	public function setIp_userType($_ip_userType)
	{
		return ($this->ip_userType = $_ip_userType);
	}
	/**
	 * Get ip_userType
	 * @return string
	 */
	public function getIp_userType()
	{
		return $this->ip_userType;
	}
	/**
	 * Set isTransProxy
	 * @param string isTransProxy
	 * @return string
	 */
	public function setIsTransProxy($_isTransProxy)
	{
		return ($this->isTransProxy = $_isTransProxy);
	}
	/**
	 * Get isTransProxy
	 * @return string
	 */
	public function getIsTransProxy()
	{
		return $this->isTransProxy;
	}
	/**
	 * Set maxmindID
	 * @param string maxmindID
	 * @return string
	 */
	public function setMaxmindID($_maxmindID)
	{
		return ($this->maxmindID = $_maxmindID);
	}
	/**
	 * Get maxmindID
	 * @return string
	 */
	public function getMaxmindID()
	{
		return $this->maxmindID;
	}
	/**
	 * Set minfraud_version
	 * @param string minfraud_version
	 * @return string
	 */
	public function setMinfraud_version($_minfraud_version)
	{
		return ($this->minfraud_version = $_minfraud_version);
	}
	/**
	 * Get minfraud_version
	 * @return string
	 */
	public function getMinfraud_version()
	{
		return $this->minfraud_version;
	}
	/**
	 * Set prepaid
	 * @param string prepaid
	 * @return string
	 */
	public function setPrepaid($_prepaid)
	{
		return ($this->prepaid = $_prepaid);
	}
	/**
	 * Get prepaid
	 * @return string
	 */
	public function getPrepaid()
	{
		return $this->prepaid;
	}
	/**
	 * Set proxyScore
	 * @param string proxyScore
	 * @return string
	 */
	public function setProxyScore($_proxyScore)
	{
		return ($this->proxyScore = $_proxyScore);
	}
	/**
	 * Get proxyScore
	 * @return string
	 */
	public function getProxyScore()
	{
		return $this->proxyScore;
	}
	/**
	 * Set queriesRemaining
	 * @param string queriesRemaining
	 * @return string
	 */
	public function setQueriesRemaining($_queriesRemaining)
	{
		return ($this->queriesRemaining = $_queriesRemaining);
	}
	/**
	 * Get queriesRemaining
	 * @return string
	 */
	public function getQueriesRemaining()
	{
		return $this->queriesRemaining;
	}
	/**
	 * Set riskScore
	 * @param string riskScore
	 * @return string
	 */
	public function setRiskScore($_riskScore)
	{
		return ($this->riskScore = $_riskScore);
	}
	/**
	 * Get riskScore
	 * @return string
	 */
	public function getRiskScore()
	{
		return $this->riskScore;
	}
	/**
	 * Set service_level
	 * @param string service_level
	 * @return string
	 */
	public function setService_level($_service_level)
	{
		return ($this->service_level = $_service_level);
	}
	/**
	 * Get service_level
	 * @return string
	 */
	public function getService_level()
	{
		return $this->service_level;
	}
	/**
	 * Set shipCityPostalMatch
	 * @param string shipCityPostalMatch
	 * @return string
	 */
	public function setShipCityPostalMatch($_shipCityPostalMatch)
	{
		return ($this->shipCityPostalMatch = $_shipCityPostalMatch);
	}
	/**
	 * Get shipCityPostalMatch
	 * @return string
	 */
	public function getShipCityPostalMatch()
	{
		return $this->shipCityPostalMatch;
	}
	/**
	 * Set shipForward
	 * @param string shipForward
	 * @return string
	 */
	public function setShipForward($_shipForward)
	{
		return ($this->shipForward = $_shipForward);
	}
	/**
	 * Get shipForward
	 * @return string
	 */
	public function getShipForward()
	{
		return $this->shipForward;
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