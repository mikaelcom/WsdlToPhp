<?php
/**
 * Class file for OvhTypeTicketContactStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTicketContactStruct
 * @date 02/07/2012
 */
class OvhTypeTicketContactStruct extends OvhWsdlClass
{
	/**
	 * The componentType
	 * @var string
	 */
	public $componentType;
	/**
	 * The domains
	 * @var OvhTypeMyArrayOfTicketContactDomainStructType
	 */
	public $domains;
	/**
	 * Constructor
	 * @param string componentType
	 * @param OvhTypeMyArrayOfTicketContactDomainStructType domains
	 * @return OvhTypeTicketContactStruct
	 */
	public function __construct($_componentType = null,$_domains = null)
	{
		parent::__construct(array('componentType'=>$_componentType,'domains'=>new OvhTypeMyArrayOfTicketContactDomainStructType($_domains)));
	}
	/**
	 * Set componentType
	 * @param string componentType
	 * @return string
	 */
	public function setComponentType($_componentType)
	{
		return ($this->componentType = $_componentType);
	}
	/**
	 * Get componentType
	 * @return string
	 */
	public function getComponentType()
	{
		return $this->componentType;
	}
	/**
	 * Set domains
	 * @param MyArrayOfTicketContactDomainStructType domains
	 * @return MyArrayOfTicketContactDomainStructType
	 */
	public function setDomains($_domains)
	{
		return ($this->domains = $_domains);
	}
	/**
	 * Get domains
	 * @return OvhTypeMyArrayOfTicketContactDomainStructType
	 */
	public function getDomains()
	{
		return $this->domains;
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