<?php
/**
 * Class file for OvhTypeServiceModifyContact
 * @date 02/07/2012
 */
/**
 * Class OvhTypeServiceModifyContact
 * @date 02/07/2012
 */
class OvhTypeServiceModifyContact extends OvhWsdlClass
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
	 * The component
	 * @var string
	 */
	public $component;
	/**
	 * The contact
	 * @var string
	 */
	public $contact;
	/**
	 * The nic
	 * @var string
	 */
	public $nic;
	/**
	 * The componentSubType
	 * @var string
	 */
	public $componentSubType;
	/**
	 * Constructor
	 * @param string session
	 * @param string domain
	 * @param string component
	 * @param string contact
	 * @param string nic
	 * @param string componentSubType
	 * @return OvhTypeServiceModifyContact
	 */
	public function __construct($_session = null,$_domain = null,$_component = null,$_contact = null,$_nic = null,$_componentSubType = null)
	{
		parent::__construct(array('session'=>$_session,'domain'=>$_domain,'component'=>$_component,'contact'=>$_contact,'nic'=>$_nic,'componentSubType'=>$_componentSubType));
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
	 * Set component
	 * @param string component
	 * @return string
	 */
	public function setComponent($_component)
	{
		return ($this->component = $_component);
	}
	/**
	 * Get component
	 * @return string
	 */
	public function getComponent()
	{
		return $this->component;
	}
	/**
	 * Set contact
	 * @param string contact
	 * @return string
	 */
	public function setContact($_contact)
	{
		return ($this->contact = $_contact);
	}
	/**
	 * Get contact
	 * @return string
	 */
	public function getContact()
	{
		return $this->contact;
	}
	/**
	 * Set nic
	 * @param string nic
	 * @return string
	 */
	public function setNic($_nic)
	{
		return ($this->nic = $_nic);
	}
	/**
	 * Get nic
	 * @return string
	 */
	public function getNic()
	{
		return $this->nic;
	}
	/**
	 * Set componentSubType
	 * @param string componentSubType
	 * @return string
	 */
	public function setComponentSubType($_componentSubType)
	{
		return ($this->componentSubType = $_componentSubType);
	}
	/**
	 * Get componentSubType
	 * @return string
	 */
	public function getComponentSubType()
	{
		return $this->componentSubType;
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