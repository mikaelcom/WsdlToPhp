<?php
/**
 * Class file for EccDomainIpTypeGetURL
 * @date 03/07/2012
 */
/**
 * Class EccDomainIpTypeGetURL
 * @date 03/07/2012
 */
class EccDomainIpTypeGetURL extends EccDomainIpWsdlClass
{
	/**
	 * The KeyID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $KeyID;
	/**
	 * The DomainID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $DomainID;
	/**
	 * The IPAddress
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $IPAddress;
	/**
	 * Constructor
	 * @param string KeyID
	 * @param string DomainID
	 * @param string IPAddress
	 * @return EccDomainIpTypeGetURL
	 */
	public function __construct($_KeyID = null,$_DomainID = null,$_IPAddress = null)
	{
		parent::__construct(array('KeyID'=>$_KeyID,'DomainID'=>$_DomainID,'IPAddress'=>$_IPAddress));
	}
	/**
	 * Set KeyID
	 * @param string KeyID
	 * @return string
	 */
	public function setKeyID($_KeyID)
	{
		return ($this->KeyID = $_KeyID);
	}
	/**
	 * Get KeyID
	 * @return string
	 */
	public function getKeyID()
	{
		return $this->KeyID;
	}
	/**
	 * Set DomainID
	 * @param string DomainID
	 * @return string
	 */
	public function setDomainID($_DomainID)
	{
		return ($this->DomainID = $_DomainID);
	}
	/**
	 * Get DomainID
	 * @return string
	 */
	public function getDomainID()
	{
		return $this->DomainID;
	}
	/**
	 * Set IPAddress
	 * @param string IPAddress
	 * @return string
	 */
	public function setIPAddress($_IPAddress)
	{
		return ($this->IPAddress = $_IPAddress);
	}
	/**
	 * Get IPAddress
	 * @return string
	 */
	public function getIPAddress()
	{
		return $this->IPAddress;
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