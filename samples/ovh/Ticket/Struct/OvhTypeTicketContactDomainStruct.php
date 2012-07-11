<?php
/**
 * Class file for OvhTypeTicketContactDomainStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTicketContactDomainStruct
 * @date 02/07/2012
 */
class OvhTypeTicketContactDomainStruct extends OvhWsdlClass
{
	/**
	 * The domain
	 * @var string
	 */
	public $domain;
	/**
	 * The state
	 * @var string
	 */
	public $state;
	/**
	 * The reverse
	 * @var string
	 */
	public $reverse;
	/**
	 * Constructor
	 * @param string domain
	 * @param string state
	 * @param string reverse
	 * @return OvhTypeTicketContactDomainStruct
	 */
	public function __construct($_domain = null,$_state = null,$_reverse = null)
	{
		parent::__construct(array('domain'=>$_domain,'state'=>$_state,'reverse'=>$_reverse));
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
	 * Set state
	 * @param string state
	 * @return string
	 */
	public function setState($_state)
	{
		return ($this->state = $_state);
	}
	/**
	 * Get state
	 * @return string
	 */
	public function getState()
	{
		return $this->state;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>