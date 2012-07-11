<?php
/**
 * Class file for OvhTypeTelephonyFreefaxToVoicefaxCheckStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyFreefaxToVoicefaxCheckStruct
 * @date 02/07/2012
 */
class OvhTypeTelephonyFreefaxToVoicefaxCheckStruct extends OvhWsdlClass
{
	/**
	 * The domain
	 * @var string
	 */
	public $domain;
	/**
	 * The number
	 * @var string
	 */
	public $number;
	/**
	 * Constructor
	 * @param string domain
	 * @param string number
	 * @return OvhTypeTelephonyFreefaxToVoicefaxCheckStruct
	 */
	public function __construct($_domain = null,$_number = null)
	{
		parent::__construct(array('domain'=>$_domain,'number'=>$_number));
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
	 * Set number
	 * @param string number
	 * @return string
	 */
	public function setNumber($_number)
	{
		return ($this->number = $_number);
	}
	/**
	 * Get number
	 * @return string
	 */
	public function getNumber()
	{
		return $this->number;
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