<?php
/**
 * Class file for MaxMindTypeMinfraud_soap14
 * @date 08/07/2012
 */
/**
 * Class MaxMindTypeMinfraud_soap14
 * @date 08/07/2012
 */
class MaxMindTypeMinfraud_soap14 extends MaxMindWsdlClass
{
	/**
	 * The accept_language
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $accept_language;
	/**
	 * The i
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $i;
	/**
	 * The city
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $city;
	/**
	 * The region
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $region;
	/**
	 * The postal
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $postal;
	/**
	 * The country
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $country;
	/**
	 * The domain
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $domain;
	/**
	 * The bin
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $bin;
	/**
	 * The binName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $binName;
	/**
	 * The binPhone
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $binPhone;
	/**
	 * The custPhone
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $custPhone;
	/**
	 * The license_key
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $license_key;
	/**
	 * The requested_type
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $requested_type;
	/**
	 * The forwardedIP
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $forwardedIP;
	/**
	 * The emailMD5
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $emailMD5;
	/**
	 * The usernameMD5
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $usernameMD5;
	/**
	 * The passwordMD5
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $passwordMD5;
	/**
	 * The shipAddr
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $shipAddr;
	/**
	 * The shipCity
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $shipCity;
	/**
	 * The shipRegion
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $shipRegion;
	/**
	 * The shipPostal
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $shipPostal;
	/**
	 * The shipCountry
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $shipCountry;
	/**
	 * The txnID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $txnID;
	/**
	 * The sessionID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $sessionID;
	/**
	 * The user_agent
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $user_agent;
	/**
	 * The order_amount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $order_amount;
	/**
	 * The order_currency
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $order_currency;
	/**
	 * The shopID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $shopID;
	/**
	 * The avs_result
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $avs_result;
	/**
	 * The cvv_result
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $cvv_result;
	/**
	 * The txn_type
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $txn_type;
	/**
	 * Constructor
	 * @param string accept_language
	 * @param string i
	 * @param string city
	 * @param string region
	 * @param string postal
	 * @param string country
	 * @param string domain
	 * @param string bin
	 * @param string binName
	 * @param string binPhone
	 * @param string custPhone
	 * @param string license_key
	 * @param string requested_type
	 * @param string forwardedIP
	 * @param string emailMD5
	 * @param string usernameMD5
	 * @param string passwordMD5
	 * @param string shipAddr
	 * @param string shipCity
	 * @param string shipRegion
	 * @param string shipPostal
	 * @param string shipCountry
	 * @param string txnID
	 * @param string sessionID
	 * @param string user_agent
	 * @param string order_amount
	 * @param string order_currency
	 * @param string shopID
	 * @param string avs_result
	 * @param string cvv_result
	 * @param string txn_type
	 * @return MaxMindTypeMinfraud_soap14
	 */
	public function __construct($_accept_language = null,$_i,$_city = null,$_region = null,$_postal = null,$_country,$_domain = null,$_bin = null,$_binName = null,$_binPhone = null,$_custPhone = null,$_license_key,$_requested_type = null,$_forwardedIP = null,$_emailMD5 = null,$_usernameMD5 = null,$_passwordMD5 = null,$_shipAddr = null,$_shipCity = null,$_shipRegion = null,$_shipPostal = null,$_shipCountry = null,$_txnID = null,$_sessionID = null,$_user_agent = null,$_order_amount = null,$_order_currency = null,$_shopID = null,$_avs_result = null,$_cvv_result = null,$_txn_type = null)
	{
		parent::__construct(array('accept_language'=>$_accept_language,'i'=>$_i,'city'=>$_city,'region'=>$_region,'postal'=>$_postal,'country'=>$_country,'domain'=>$_domain,'bin'=>$_bin,'binName'=>$_binName,'binPhone'=>$_binPhone,'custPhone'=>$_custPhone,'license_key'=>$_license_key,'requested_type'=>$_requested_type,'forwardedIP'=>$_forwardedIP,'emailMD5'=>$_emailMD5,'usernameMD5'=>$_usernameMD5,'passwordMD5'=>$_passwordMD5,'shipAddr'=>$_shipAddr,'shipCity'=>$_shipCity,'shipRegion'=>$_shipRegion,'shipPostal'=>$_shipPostal,'shipCountry'=>$_shipCountry,'txnID'=>$_txnID,'sessionID'=>$_sessionID,'user_agent'=>$_user_agent,'order_amount'=>$_order_amount,'order_currency'=>$_order_currency,'shopID'=>$_shopID,'avs_result'=>$_avs_result,'cvv_result'=>$_cvv_result,'txn_type'=>$_txn_type));
	}
	/**
	 * Set accept_language
	 * @param string accept_language
	 * @return string
	 */
	public function setAccept_language($_accept_language)
	{
		return ($this->accept_language = $_accept_language);
	}
	/**
	 * Get accept_language
	 * @return string
	 */
	public function getAccept_language()
	{
		return $this->accept_language;
	}
	/**
	 * Set i
	 * @param string i
	 * @return string
	 */
	public function setI($_i)
	{
		return ($this->i = $_i);
	}
	/**
	 * Get i
	 * @return string
	 */
	public function getI()
	{
		return $this->i;
	}
	/**
	 * Set city
	 * @param string city
	 * @return string
	 */
	public function setCity($_city)
	{
		return ($this->city = $_city);
	}
	/**
	 * Get city
	 * @return string
	 */
	public function getCity()
	{
		return $this->city;
	}
	/**
	 * Set region
	 * @param string region
	 * @return string
	 */
	public function setRegion($_region)
	{
		return ($this->region = $_region);
	}
	/**
	 * Get region
	 * @return string
	 */
	public function getRegion()
	{
		return $this->region;
	}
	/**
	 * Set postal
	 * @param string postal
	 * @return string
	 */
	public function setPostal($_postal)
	{
		return ($this->postal = $_postal);
	}
	/**
	 * Get postal
	 * @return string
	 */
	public function getPostal()
	{
		return $this->postal;
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
	 * Set bin
	 * @param string bin
	 * @return string
	 */
	public function setBin($_bin)
	{
		return ($this->bin = $_bin);
	}
	/**
	 * Get bin
	 * @return string
	 */
	public function getBin()
	{
		return $this->bin;
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
	 * Set custPhone
	 * @param string custPhone
	 * @return string
	 */
	public function setCustPhone($_custPhone)
	{
		return ($this->custPhone = $_custPhone);
	}
	/**
	 * Get custPhone
	 * @return string
	 */
	public function getCustPhone()
	{
		return $this->custPhone;
	}
	/**
	 * Set license_key
	 * @param string license_key
	 * @return string
	 */
	public function setLicense_key($_license_key)
	{
		return ($this->license_key = $_license_key);
	}
	/**
	 * Get license_key
	 * @return string
	 */
	public function getLicense_key()
	{
		return $this->license_key;
	}
	/**
	 * Set requested_type
	 * @param string requested_type
	 * @return string
	 */
	public function setRequested_type($_requested_type)
	{
		return ($this->requested_type = $_requested_type);
	}
	/**
	 * Get requested_type
	 * @return string
	 */
	public function getRequested_type()
	{
		return $this->requested_type;
	}
	/**
	 * Set forwardedIP
	 * @param string forwardedIP
	 * @return string
	 */
	public function setForwardedIP($_forwardedIP)
	{
		return ($this->forwardedIP = $_forwardedIP);
	}
	/**
	 * Get forwardedIP
	 * @return string
	 */
	public function getForwardedIP()
	{
		return $this->forwardedIP;
	}
	/**
	 * Set emailMD5
	 * @param string emailMD5
	 * @return string
	 */
	public function setEmailMD5($_emailMD5)
	{
		return ($this->emailMD5 = $_emailMD5);
	}
	/**
	 * Get emailMD5
	 * @return string
	 */
	public function getEmailMD5()
	{
		return $this->emailMD5;
	}
	/**
	 * Set usernameMD5
	 * @param string usernameMD5
	 * @return string
	 */
	public function setUsernameMD5($_usernameMD5)
	{
		return ($this->usernameMD5 = $_usernameMD5);
	}
	/**
	 * Get usernameMD5
	 * @return string
	 */
	public function getUsernameMD5()
	{
		return $this->usernameMD5;
	}
	/**
	 * Set passwordMD5
	 * @param string passwordMD5
	 * @return string
	 */
	public function setPasswordMD5($_passwordMD5)
	{
		return ($this->passwordMD5 = $_passwordMD5);
	}
	/**
	 * Get passwordMD5
	 * @return string
	 */
	public function getPasswordMD5()
	{
		return $this->passwordMD5;
	}
	/**
	 * Set shipAddr
	 * @param string shipAddr
	 * @return string
	 */
	public function setShipAddr($_shipAddr)
	{
		return ($this->shipAddr = $_shipAddr);
	}
	/**
	 * Get shipAddr
	 * @return string
	 */
	public function getShipAddr()
	{
		return $this->shipAddr;
	}
	/**
	 * Set shipCity
	 * @param string shipCity
	 * @return string
	 */
	public function setShipCity($_shipCity)
	{
		return ($this->shipCity = $_shipCity);
	}
	/**
	 * Get shipCity
	 * @return string
	 */
	public function getShipCity()
	{
		return $this->shipCity;
	}
	/**
	 * Set shipRegion
	 * @param string shipRegion
	 * @return string
	 */
	public function setShipRegion($_shipRegion)
	{
		return ($this->shipRegion = $_shipRegion);
	}
	/**
	 * Get shipRegion
	 * @return string
	 */
	public function getShipRegion()
	{
		return $this->shipRegion;
	}
	/**
	 * Set shipPostal
	 * @param string shipPostal
	 * @return string
	 */
	public function setShipPostal($_shipPostal)
	{
		return ($this->shipPostal = $_shipPostal);
	}
	/**
	 * Get shipPostal
	 * @return string
	 */
	public function getShipPostal()
	{
		return $this->shipPostal;
	}
	/**
	 * Set shipCountry
	 * @param string shipCountry
	 * @return string
	 */
	public function setShipCountry($_shipCountry)
	{
		return ($this->shipCountry = $_shipCountry);
	}
	/**
	 * Get shipCountry
	 * @return string
	 */
	public function getShipCountry()
	{
		return $this->shipCountry;
	}
	/**
	 * Set txnID
	 * @param string txnID
	 * @return string
	 */
	public function setTxnID($_txnID)
	{
		return ($this->txnID = $_txnID);
	}
	/**
	 * Get txnID
	 * @return string
	 */
	public function getTxnID()
	{
		return $this->txnID;
	}
	/**
	 * Set sessionID
	 * @param string sessionID
	 * @return string
	 */
	public function setSessionID($_sessionID)
	{
		return ($this->sessionID = $_sessionID);
	}
	/**
	 * Get sessionID
	 * @return string
	 */
	public function getSessionID()
	{
		return $this->sessionID;
	}
	/**
	 * Set user_agent
	 * @param string user_agent
	 * @return string
	 */
	public function setUser_agent($_user_agent)
	{
		return ($this->user_agent = $_user_agent);
	}
	/**
	 * Get user_agent
	 * @return string
	 */
	public function getUser_agent()
	{
		return $this->user_agent;
	}
	/**
	 * Set order_amount
	 * @param string order_amount
	 * @return string
	 */
	public function setOrder_amount($_order_amount)
	{
		return ($this->order_amount = $_order_amount);
	}
	/**
	 * Get order_amount
	 * @return string
	 */
	public function getOrder_amount()
	{
		return $this->order_amount;
	}
	/**
	 * Set order_currency
	 * @param string order_currency
	 * @return string
	 */
	public function setOrder_currency($_order_currency)
	{
		return ($this->order_currency = $_order_currency);
	}
	/**
	 * Get order_currency
	 * @return string
	 */
	public function getOrder_currency()
	{
		return $this->order_currency;
	}
	/**
	 * Set shopID
	 * @param string shopID
	 * @return string
	 */
	public function setShopID($_shopID)
	{
		return ($this->shopID = $_shopID);
	}
	/**
	 * Get shopID
	 * @return string
	 */
	public function getShopID()
	{
		return $this->shopID;
	}
	/**
	 * Set avs_result
	 * @param string avs_result
	 * @return string
	 */
	public function setAvs_result($_avs_result)
	{
		return ($this->avs_result = $_avs_result);
	}
	/**
	 * Get avs_result
	 * @return string
	 */
	public function getAvs_result()
	{
		return $this->avs_result;
	}
	/**
	 * Set cvv_result
	 * @param string cvv_result
	 * @return string
	 */
	public function setCvv_result($_cvv_result)
	{
		return ($this->cvv_result = $_cvv_result);
	}
	/**
	 * Get cvv_result
	 * @return string
	 */
	public function getCvv_result()
	{
		return $this->cvv_result;
	}
	/**
	 * Set txn_type
	 * @param string txn_type
	 * @return string
	 */
	public function setTxn_type($_txn_type)
	{
		return ($this->txn_type = $_txn_type);
	}
	/**
	 * Get txn_type
	 * @return string
	 */
	public function getTxn_type()
	{
		return $this->txn_type;
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