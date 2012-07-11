<?php
/**
 * Class file for OvhTypeManagedServicesIpAccessChange
 * @date 02/07/2012
 */
/**
 * Class OvhTypeManagedServicesIpAccessChange
 * @date 02/07/2012
 */
class OvhTypeManagedServicesIpAccessChange extends OvhWsdlClass
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
	 * The value
	 * @var string
	 */
	public $value;
	/**
	 * The server
	 * @var string
	 */
	public $server;
	/**
	 * The idZfs
	 * @var string
	 */
	public $idZfs;
	/**
	 * Constructor
	 * @param string session
	 * @param string storage
	 * @param string value
	 * @param string server
	 * @param string idZfs
	 * @return OvhTypeManagedServicesIpAccessChange
	 */
	public function __construct($_session = null,$_storage = null,$_value = null,$_server = null,$_idZfs = null)
	{
		parent::__construct(array('session'=>$_session,'storage'=>$_storage,'value'=>$_value,'server'=>$_server,'idZfs'=>$_idZfs));
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
	 * Set value
	 * @param string value
	 * @return string
	 */
	public function setValue($_value)
	{
		return ($this->value = $_value);
	}
	/**
	 * Get value
	 * @return string
	 */
	public function getValue()
	{
		return $this->value;
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
	 * Set idZfs
	 * @param string idZfs
	 * @return string
	 */
	public function setIdZfs($_idZfs)
	{
		return ($this->idZfs = $_idZfs);
	}
	/**
	 * Get idZfs
	 * @return string
	 */
	public function getIdZfs()
	{
		return $this->idZfs;
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