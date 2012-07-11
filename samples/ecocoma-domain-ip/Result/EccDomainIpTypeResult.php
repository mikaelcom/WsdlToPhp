<?php
/**
 * Class file for EccDomainIpTypeResult
 * @date 03/07/2012
 */
/**
 * Class EccDomainIpTypeResult
 * @date 03/07/2012
 */
class EccDomainIpTypeResult extends EccDomainIpWsdlClass
{
	/**
	 * The Url
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Url;
	/**
	 * Constructor
	 * @param string Url
	 * @return EccDomainIpTypeResult
	 */
	public function __construct($_Url = null)
	{
		parent::__construct(array('Url'=>$_Url));
	}
	/**
	 * Set Url
	 * @param string Url
	 * @return string
	 */
	public function setUrl($_Url)
	{
		return ($this->Url = $_Url);
	}
	/**
	 * Get Url
	 * @return string
	 */
	public function getUrl()
	{
		return $this->Url;
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