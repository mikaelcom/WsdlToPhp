<?php
/**
 * Class file for OvhTypeEmailSetDomainCatchAll
 * @date 02/07/2012
 */
/**
 * Class OvhTypeEmailSetDomainCatchAll
 * @date 02/07/2012
 */
class OvhTypeEmailSetDomainCatchAll extends OvhWsdlClass
{
	/**
	 * The session
	 * @var string
	 */
	public $session;
	/**
	 * The domain
	 * @var string
	 */
	public $domain;
	/**
	 * The type
	 * @var string
	 */
	public $type;
	/**
	 * The pop
	 * @var string
	 */
	public $pop;
	/**
	 * The address
	 * @var string
	 */
	public $address;
	/**
	 * Constructor
	 * @param string session
	 * @param string domain
	 * @param string type
	 * @param string pop
	 * @param string address
	 * @return OvhTypeEmailSetDomainCatchAll
	 */
	public function __construct($_session = null,$_domain = null,$_type = null,$_pop = null,$_address = null)
	{
		parent::__construct(array('session'=>$_session,'domain'=>$_domain,'type'=>$_type,'pop'=>$_pop,'address'=>$_address));
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
	 * Set domain
	 * @param string domain
	 * @return string
	 */
	public function setDomain($_domain)
	{
		return ($this->domain = $_domain);
	}
	/**
	 * Get domain
	 * @return string
	 */
	public function getDomain()
	{
		return $this->domain;
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
	 * Set pop
	 * @param string pop
	 * @return string
	 */
	public function setPop($_pop)
	{
		return ($this->pop = $_pop);
	}
	/**
	 * Get pop
	 * @return string
	 */
	public function getPop()
	{
		return $this->pop;
	}
	/**
	 * Set address
	 * @param string address
	 * @return string
	 */
	public function setAddress($_address)
	{
		return ($this->address = $_address);
	}
	/**
	 * Get address
	 * @return string
	 */
	public function getAddress()
	{
		return $this->address;
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