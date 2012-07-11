<?php
/**
 * Class file for EccDomainHostTypeHost
 * @date 03/07/2012
 */
/**
 * Class EccDomainHostTypeHost
 * @date 03/07/2012
 */
class EccDomainHostTypeHost extends EccDomainHostWsdlClass
{
	/**
	 * The HostName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $HostName;
	/**
	 * The AddressList
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var EccDomainHostTypeArrayOfString
	 */
	public $AddressList;
	/**
	 * The Aliases
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var EccDomainHostTypeArrayOfString
	 */
	public $Aliases;
	/**
	 * Constructor
	 * @param string HostName
	 * @param EccDomainHostTypeArrayOfString AddressList
	 * @param EccDomainHostTypeArrayOfString Aliases
	 * @return EccDomainHostTypeHost
	 */
	public function __construct($_HostName = null,$_AddressList = null,$_Aliases = null)
	{
		parent::__construct(array('HostName'=>$_HostName,'AddressList'=>new EccDomainHostTypeArrayOfString($_AddressList),'Aliases'=>new EccDomainHostTypeArrayOfString($_Aliases)));
	}
	/**
	 * Set HostName
	 * @param string HostName
	 * @return string
	 */
	public function setHostName($_HostName)
	{
		return ($this->HostName = $_HostName);
	}
	/**
	 * Get HostName
	 * @return string
	 */
	public function getHostName()
	{
		return $this->HostName;
	}
	/**
	 * Set AddressList
	 * @param ArrayOfString AddressList
	 * @return ArrayOfString
	 */
	public function setAddressList($_AddressList)
	{
		return ($this->AddressList = $_AddressList);
	}
	/**
	 * Get AddressList
	 * @return EccDomainHostTypeArrayOfString
	 */
	public function getAddressList()
	{
		return $this->AddressList;
	}
	/**
	 * Set Aliases
	 * @param ArrayOfString Aliases
	 * @return ArrayOfString
	 */
	public function setAliases($_Aliases)
	{
		return ($this->Aliases = $_Aliases);
	}
	/**
	 * Get Aliases
	 * @return EccDomainHostTypeArrayOfString
	 */
	public function getAliases()
	{
		return $this->Aliases;
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