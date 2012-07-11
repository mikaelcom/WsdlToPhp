<?php
/**
 * Class file for OvhTypeHostingListStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeHostingListStruct
 * @date 02/07/2012
 */
class OvhTypeHostingListStruct extends OvhWsdlClass
{
	/**
	 * The domain
	 * @var string
	 */
	public $domain;
	/**
	 * The hosting
	 * @var string
	 */
	public $hosting;
	/**
	 * Constructor
	 * @param string domain
	 * @param string hosting
	 * @return OvhTypeHostingListStruct
	 */
	public function __construct($_domain = null,$_hosting = null)
	{
		parent::__construct(array('domain'=>$_domain,'hosting'=>$_hosting));
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
	 * Set hosting
	 * @param string hosting
	 * @return string
	 */
	public function setHosting($_hosting)
	{
		return ($this->hosting = $_hosting);
	}
	/**
	 * Get hosting
	 * @return string
	 */
	public function getHosting()
	{
		return $this->hosting;
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