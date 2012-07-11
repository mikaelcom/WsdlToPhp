<?php
/**
 * Class file for YMailTypeExternalAccount
 * @date 02/07/2012
 */
/**
 * Class YMailTypeExternalAccount
 * @date 02/07/2012
 */
class YMailTypeExternalAccount extends YMailWsdlClass
{
	/**
	 * The protocol
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $protocol;
	/**
	 * The userName
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $userName;
	/**
	 * The server
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $server;
	/**
	 * Constructor
	 * @param string protocol
	 * @param string userName
	 * @param string server
	 * @return YMailTypeExternalAccount
	 */
	public function __construct($_protocol,$_userName,$_server)
	{
		parent::__construct(array('protocol'=>$_protocol,'userName'=>$_userName,'server'=>$_server));
	}
	/**
	 * Set protocol
	 * @param string protocol
	 * @return string
	 */
	public function setProtocol($_protocol)
	{
		return ($this->protocol = $_protocol);
	}
	/**
	 * Get protocol
	 * @return string
	 */
	public function getProtocol()
	{
		return $this->protocol;
	}
	/**
	 * Set userName
	 * @param string userName
	 * @return string
	 */
	public function setUserName($_userName)
	{
		return ($this->userName = $_userName);
	}
	/**
	 * Get userName
	 * @return string
	 */
	public function getUserName()
	{
		return $this->userName;
	}
	/**
	 * Set server
	 * @param string server
	 * @return string
	 */
	public function setServer($_server)
	{
		return ($this->server = $_server);
	}
	/**
	 * Get server
	 * @return string
	 */
	public function getServer()
	{
		return $this->server;
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