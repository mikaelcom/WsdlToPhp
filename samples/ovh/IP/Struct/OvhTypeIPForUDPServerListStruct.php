<?php
/**
 * Class file for OvhTypeIPForUDPServerListStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeIPForUDPServerListStruct
 * @date 02/07/2012
 */
class OvhTypeIPForUDPServerListStruct extends OvhWsdlClass
{
	/**
	 * The server
	 * @var string
	 */
	public $server;
	/**
	 * The reverse
	 * @var string
	 */
	public $reverse;
	/**
	 * The ipList
	 * @var OvhTypeMyArrayOfDedicatedIPForUDPStructType
	 */
	public $ipList;
	/**
	 * Constructor
	 * @param string server
	 * @param string reverse
	 * @param OvhTypeMyArrayOfDedicatedIPForUDPStructType ipList
	 * @return OvhTypeIPForUDPServerListStruct
	 */
	public function __construct($_server = null,$_reverse = null,$_ipList = null)
	{
		parent::__construct(array('server'=>$_server,'reverse'=>$_reverse,'ipList'=>new OvhTypeMyArrayOfDedicatedIPForUDPStructType($_ipList)));
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
	 * Set ipList
	 * @param MyArrayOfDedicatedIPForUDPStructType ipList
	 * @return MyArrayOfDedicatedIPForUDPStructType
	 */
	public function setIpList($_ipList)
	{
		return ($this->ipList = $_ipList);
	}
	/**
	 * Get ipList
	 * @return OvhTypeMyArrayOfDedicatedIPForUDPStructType
	 */
	public function getIpList()
	{
		return $this->ipList;
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