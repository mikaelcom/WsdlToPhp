<?php
/**
 * Class file for OvhTypeDedicatedFailoverRipeAdd
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedFailoverRipeAdd
 * @date 02/07/2012
 */
class OvhTypeDedicatedFailoverRipeAdd extends OvhWsdlClass
{
	/**
	 * The session
	 * @var string
	 */
	public $session;
	/**
	 * The hostname
	 * @var string
	 */
	public $hostname;
	/**
	 * The netname
	 * @var string
	 */
	public $netname;
	/**
	 * The description
	 * @var string
	 */
	public $description;
	/**
	 * The country
	 * @var string
	 */
	public $country;
	/**
	 * The addressesNumber
	 * @var int
	 */
	public $addressesNumber;
	/**
	 * The comment
	 * @var string
	 */
	public $comment;
	/**
	 * The routedToInterface
	 * @var string
	 */
	public $routedToInterface;
	/**
	 * Constructor
	 * @param string session
	 * @param string hostname
	 * @param string netname
	 * @param string description
	 * @param string country
	 * @param int addressesNumber
	 * @param string comment
	 * @param string routedToInterface
	 * @return OvhTypeDedicatedFailoverRipeAdd
	 */
	public function __construct($_session = null,$_hostname = null,$_netname = null,$_description = null,$_country = null,$_addressesNumber = null,$_comment = null,$_routedToInterface = null)
	{
		parent::__construct(array('session'=>$_session,'hostname'=>$_hostname,'netname'=>$_netname,'description'=>$_description,'country'=>$_country,'addressesNumber'=>$_addressesNumber,'comment'=>$_comment,'routedToInterface'=>$_routedToInterface));
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
	 * Set hostname
	 * @param string hostname
	 * @return string
	 */
	public function setHostname($_hostname)
	{
		return ($this->hostname = $_hostname);
	}
	/**
	 * Get hostname
	 * @return string
	 */
	public function getHostname()
	{
		return $this->hostname;
	}
	/**
	 * Set netname
	 * @param string netname
	 * @return string
	 */
	public function setNetname($_netname)
	{
		return ($this->netname = $_netname);
	}
	/**
	 * Get netname
	 * @return string
	 */
	public function getNetname()
	{
		return $this->netname;
	}
	/**
	 * Set description
	 * @param string description
	 * @return string
	 */
	public function setDescription($_description)
	{
		return ($this->description = $_description);
	}
	/**
	 * Get description
	 * @return string
	 */
	public function getDescription()
	{
		return $this->description;
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
	 * Set addressesNumber
	 * @param int addressesNumber
	 * @return int
	 */
	public function setAddressesNumber($_addressesNumber)
	{
		return ($this->addressesNumber = $_addressesNumber);
	}
	/**
	 * Get addressesNumber
	 * @return int
	 */
	public function getAddressesNumber()
	{
		return $this->addressesNumber;
	}
	/**
	 * Set comment
	 * @param string comment
	 * @return string
	 */
	public function setComment($_comment)
	{
		return ($this->comment = $_comment);
	}
	/**
	 * Get comment
	 * @return string
	 */
	public function getComment()
	{
		return $this->comment;
	}
	/**
	 * Set routedToInterface
	 * @param string routedToInterface
	 * @return string
	 */
	public function setRoutedToInterface($_routedToInterface)
	{
		return ($this->routedToInterface = $_routedToInterface);
	}
	/**
	 * Get routedToInterface
	 * @return string
	 */
	public function getRoutedToInterface()
	{
		return $this->routedToInterface;
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