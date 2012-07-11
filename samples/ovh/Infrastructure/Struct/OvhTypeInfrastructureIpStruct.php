<?php
/**
 * Class file for OvhTypeInfrastructureIpStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeInfrastructureIpStruct
 * @date 02/07/2012
 */
class OvhTypeInfrastructureIpStruct extends OvhWsdlClass
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
	 * The ipAddressFromBlock
	 * @var OvhTypeMyArrayOfStringType
	 */
	public $ipAddressFromBlock;
	/**
	 * Constructor
	 * @param string country
	 * @param string netname
	 * @param string routedTo
	 * @param string status
	 * @param int addressesNumber
	 * @param string networkIp
	 * @param OvhTypeMyArrayOfStringType ipAddressFromBlock
	 * @return OvhTypeInfrastructureIpStruct
	 */
	public function __construct($_country = null,$_netname = null,$_routedTo = null,$_status = null,$_addressesNumber = null,$_networkIp = null,$_ipAddressFromBlock = null)
	{
		parent::__construct(array('country'=>$_country,'netname'=>$_netname,'routedTo'=>$_routedTo,'status'=>$_status,'addressesNumber'=>$_addressesNumber,'networkIp'=>$_networkIp,'ipAddressFromBlock'=>new OvhTypeMyArrayOfStringType($_ipAddressFromBlock)));
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
	 * Set ipAddressFromBlock
	 * @param MyArrayOfStringType ipAddressFromBlock
	 * @return MyArrayOfStringType
	 */
	public function setIpAddressFromBlock($_ipAddressFromBlock)
	{
		return ($this->ipAddressFromBlock = $_ipAddressFromBlock);
	}
	/**
	 * Get ipAddressFromBlock
	 * @return OvhTypeMyArrayOfStringType
	 */
	public function getIpAddressFromBlock()
	{
		return $this->ipAddressFromBlock;
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