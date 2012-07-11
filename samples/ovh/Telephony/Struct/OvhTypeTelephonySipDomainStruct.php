<?php
/**
 * Class file for OvhTypeTelephonySipDomainStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonySipDomainStruct
 * @date 02/07/2012
 */
class OvhTypeTelephonySipDomainStruct extends OvhWsdlClass
{
	/**
	 * The domain
	 * @var string
	 */
	public $domain;
	/**
	 * The country
	 * @var string
	 */
	public $country;
	/**
	 * The list
	 * @var OvhTypeMyArrayOfStringType
	 */
	public $list;
	/**
	 * Constructor
	 * @param string domain
	 * @param string country
	 * @param OvhTypeMyArrayOfStringType list
	 * @return OvhTypeTelephonySipDomainStruct
	 */
	public function __construct($_domain = null,$_country = null,$_list = null)
	{
		parent::__construct(array('domain'=>$_domain,'country'=>$_country,'list'=>new OvhTypeMyArrayOfStringType($_list)));
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
	 * Set country
	 * @param string country
	 * @return string
	 */
	public function setCountry($_country)
	{
		return ($this->country = $_country);
	}
	/**
	 * Get country
	 * @return string
	 */
	public function getCountry()
	{
		return $this->country;
	}
	/**
	 * Set list
	 * @param MyArrayOfStringType list
	 * @return MyArrayOfStringType
	 */
	public function setList($_list)
	{
		return ($this->list = $_list);
	}
	/**
	 * Get list
	 * @return OvhTypeMyArrayOfStringType
	 */
	public function getList()
	{
		return $this->list;
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