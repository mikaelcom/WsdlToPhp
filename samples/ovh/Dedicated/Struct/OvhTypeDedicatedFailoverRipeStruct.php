<?php
/**
 * Class file for OvhTypeDedicatedFailoverRipeStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedFailoverRipeStruct
 * @date 02/07/2012
 */
class OvhTypeDedicatedFailoverRipeStruct extends OvhWsdlClass
{
	/**
	 * The country
	 * @var string
	 */
	public $country;
	/**
	 * The netname
	 * @var string
	 */
	public $netname;
	/**
	 * The routedTo
	 * @var string
	 */
	public $routedTo;
	/**
	 * The routingStatus
	 * @var string
	 */
	public $routingStatus;
	/**
	 * The status
	 * @var string
	 */
	public $status;
	/**
	 * The addressesNumber
	 * @var int
	 */
	public $addressesNumber;
	/**
	 * The networkIp
	 * @var string
	 */
	public $networkIp;
	/**
	 * The isExclude
	 * @var boolean
	 */
	public $isExclude;
	/**
	 * Constructor
	 * @param string country
	 * @param string netname
	 * @param string routedTo
	 * @param string routingStatus
	 * @param string status
	 * @param int addressesNumber
	 * @param string networkIp
	 * @param boolean isExclude
	 * @return OvhTypeDedicatedFailoverRipeStruct
	 */
	public function __construct($_country = null,$_netname = null,$_routedTo = null,$_routingStatus = null,$_status = null,$_addressesNumber = null,$_networkIp = null,$_isExclude = null)
	{
		parent::__construct(array('country'=>$_country,'netname'=>$_netname,'routedTo'=>$_routedTo,'routingStatus'=>$_routingStatus,'status'=>$_status,'addressesNumber'=>$_addressesNumber,'networkIp'=>$_networkIp,'isExclude'=>$_isExclude));
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
	 * Set routedTo
	 * @param string routedTo
	 * @return string
	 */
	public function setRoutedTo($_routedTo)
	{
		return ($this->routedTo = $_routedTo);
	}
	/**
	 * Get routedTo
	 * @return string
	 */
	public function getRoutedTo()
	{
		return $this->routedTo;
	}
	/**
	 * Set routingStatus
	 * @param string routingStatus
	 * @return string
	 */
	public function setRoutingStatus($_routingStatus)
	{
		return ($this->routingStatus = $_routingStatus);
	}
	/**
	 * Get routingStatus
	 * @return string
	 */
	public function getRoutingStatus()
	{
		return $this->routingStatus;
	}
	/**
	 * Set status
	 * @param string status
	 * @return string
	 */
	public function setStatus($_status)
	{
		return ($this->status = $_status);
	}
	/**
	 * Get status
	 * @return string
	 */
	public function getStatus()
	{
		return $this->status;
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
	 * Set networkIp
	 * @param string networkIp
	 * @return string
	 */
	public function setNetworkIp($_networkIp)
	{
		return ($this->networkIp = $_networkIp);
	}
	/**
	 * Get networkIp
	 * @return string
	 */
	public function getNetworkIp()
	{
		return $this->networkIp;
	}
	/**
	 * Set isExclude
	 * @param boolean isExclude
	 * @return boolean
	 */
	public function setIsExclude($_isExclude)
	{
		return ($this->isExclude = $_isExclude);
	}
	/**
	 * Get isExclude
	 * @return boolean
	 */
	public function getIsExclude()
	{
		return $this->isExclude;
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