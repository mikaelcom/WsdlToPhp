<?php
/**
 * Class file for OvhTypeManagedServicesPartitionCreate
 * @date 02/07/2012
 */
/**
 * Class OvhTypeManagedServicesPartitionCreate
 * @date 02/07/2012
 */
class OvhTypeManagedServicesPartitionCreate extends OvhWsdlClass
{
	/**
	 * The session
	 * @var string
	 */
	public $session;
	/**
	 * The storage
	 * @var string
	 */
	public $storage;
	/**
	 * The name
	 * @var string
	 */
	public $name;
	/**
	 * The size
	 * @var int
	 */
	public $size;
	/**
	 * The protocol
	 * @var string
	 */
	public $protocol;
	/**
	 * Constructor
	 * @param string session
	 * @param string storage
	 * @param string name
	 * @param int size
	 * @param string protocol
	 * @return OvhTypeManagedServicesPartitionCreate
	 */
	public function __construct($_session = null,$_storage = null,$_name = null,$_size = null,$_protocol = null)
	{
		parent::__construct(array('session'=>$_session,'storage'=>$_storage,'name'=>$_name,'size'=>$_size,'protocol'=>$_protocol));
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
	 * Set storage
	 * @param string storage
	 * @return string
	 */
	public function setStorage($_storage)
	{
		return ($this->storage = $_storage);
	}
	/**
	 * Get storage
	 * @return string
	 */
	public function getStorage()
	{
		return $this->storage;
	}
	/**
	 * Set name
	 * @param string name
	 * @return string
	 */
	public function setName($_name)
	{
		return ($this->name = $_name);
	}
	/**
	 * Get name
	 * @return string
	 */
	public function getName()
	{
		return $this->name;
	}
	/**
	 * Set size
	 * @param int size
	 * @return int
	 */
	public function setSize($_size)
	{
		return ($this->size = $_size);
	}
	/**
	 * Get size
	 * @return int
	 */
	public function getSize()
	{
		return $this->size;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>