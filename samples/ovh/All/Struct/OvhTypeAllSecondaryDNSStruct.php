<?php
/**
 * Class file for OvhTypeAllSecondaryDNSStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeAllSecondaryDNSStruct
 * @date 02/07/2012
 */
class OvhTypeAllSecondaryDNSStruct extends OvhWsdlClass
{
	/**
	 * The ip
	 * @var string
	 */
	public $ip;
	/**
	 * The secondary
	 * @var OvhTypeMyArrayOfSecondaryDNSStructType
	 */
	public $secondary;
	/**
	 * Constructor
	 * @param string ip
	 * @param OvhTypeMyArrayOfSecondaryDNSStructType secondary
	 * @return OvhTypeAllSecondaryDNSStruct
	 */
	public function __construct($_ip = null,$_secondary = null)
	{
		parent::__construct(array('ip'=>$_ip,'secondary'=>new OvhTypeMyArrayOfSecondaryDNSStructType($_secondary)));
	}
	/**
	 * Set ip
	 * @param string ip
	 * @return string
	 */
	public function setIp($_ip)
	{
		return ($this->ip = $_ip);
	}
	/**
	 * Get ip
	 * @return string
	 */
	public function getIp()
	{
		return $this->ip;
	}
	/**
	 * Set secondary
	 * @param MyArrayOfSecondaryDNSStructType secondary
	 * @return MyArrayOfSecondaryDNSStructType
	 */
	public function setSecondary($_secondary)
	{
		return ($this->secondary = $_secondary);
	}
	/**
	 * Get secondary
	 * @return OvhTypeMyArrayOfSecondaryDNSStructType
	 */
	public function getSecondary()
	{
		return $this->secondary;
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