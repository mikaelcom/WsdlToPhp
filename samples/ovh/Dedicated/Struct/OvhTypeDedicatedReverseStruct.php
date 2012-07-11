<?php
/**
 * Class file for OvhTypeDedicatedReverseStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedReverseStruct
 * @date 02/07/2012
 */
class OvhTypeDedicatedReverseStruct extends OvhWsdlClass
{
	/**
	 * The reverse
	 * @var string
	 */
	public $reverse;
	/**
	 * The ip
	 * @var string
	 */
	public $ip;
	/**
	 * The type
	 * @var string
	 */
	public $type;
	/**
	 * Constructor
	 * @param string reverse
	 * @param string ip
	 * @param string type
	 * @return OvhTypeDedicatedReverseStruct
	 */
	public function __construct($_reverse = null,$_ip = null,$_type = null)
	{
		parent::__construct(array('reverse'=>$_reverse,'ip'=>$_ip,'type'=>$_type));
	}
	/**
	 * Set reverse
	 * @param string reverse
	 * @return string
	 */
	public function setReverse($_reverse)
	{
		return ($this->reverse = $_reverse);
	}
	/**
	 * Get reverse
	 * @return string
	 */
	public function getReverse()
	{
		return $this->reverse;
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
	 * Set type
	 * @param string type
	 * @return string
	 */
	public function setType($_type)
	{
		return ($this->type = $_type);
	}
	/**
	 * Get type
	 * @return string
	 */
	public function getType()
	{
		return $this->type;
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