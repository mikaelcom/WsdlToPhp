<?php
/**
 * Class file for OvhTypeManagedServicesPartitionDelete
 * @date 02/07/2012
 */
/**
 * Class OvhTypeManagedServicesPartitionDelete
 * @date 02/07/2012
 */
class OvhTypeManagedServicesPartitionDelete extends OvhWsdlClass
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
	 * Constructor
	 * @param string session
	 * @param string storage
	 * @param string name
	 * @return OvhTypeManagedServicesPartitionDelete
	 */
	public function __construct($_session = null,$_storage = null,$_name = null)
	{
		parent::__construct(array('session'=>$_session,'storage'=>$_storage,'name'=>$_name));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>