<?php
/**
 * Class file for OvhTypeMultiDomainStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeMultiDomainStruct
 * @date 02/07/2012
 */
class OvhTypeMultiDomainStruct extends OvhWsdlClass
{
	/**
	 * The multidomain
	 * @var string
	 */
	public $multidomain;
	/**
	 * The target
	 * @var string
	 */
	public $target;
	/**
	 * The country
	 * @var string
	 */
	public $country;
	/**
	 * Constructor
	 * @param string multidomain
	 * @param string target
	 * @param string country
	 * @return OvhTypeMultiDomainStruct
	 */
	public function __construct($_multidomain = null,$_target = null,$_country = null)
	{
		parent::__construct(array('multidomain'=>$_multidomain,'target'=>$_target,'country'=>$_country));
	}
	/**
	 * Set multidomain
	 * @param string multidomain
	 * @return string
	 */
	public function setMultidomain($_multidomain)
	{
		return ($this->multidomain = $_multidomain);
	}
	/**
	 * Get multidomain
	 * @return string
	 */
	public function getMultidomain()
	{
		return $this->multidomain;
	}
	/**
	 * Set target
	 * @param string target
	 * @return string
	 */
	public function setTarget($_target)
	{
		return ($this->target = $_target);
	}
	/**
	 * Get target
	 * @return string
	 */
	public function getTarget()
	{
		return $this->target;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>