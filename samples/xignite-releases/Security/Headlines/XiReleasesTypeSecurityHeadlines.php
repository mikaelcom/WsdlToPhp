<?php
/**
 * Class file for XiReleasesTypeSecurityHeadlines
 * @date 08/07/2012
 */
/**
 * Class XiReleasesTypeSecurityHeadlines
 * @date 08/07/2012
 */
class XiReleasesTypeSecurityHeadlines extends XiReleasesTypeCommon
{
	/**
	 * The Security
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiReleasesTypeSecurity
	 */
	public $Security;
	/**
	 * The Headlines
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiReleasesTypeArrayOfSecurityHeadline
	 */
	public $Headlines;
	/**
	 * Constructor
	 * @param XiReleasesTypeSecurity Security
	 * @param XiReleasesTypeArrayOfSecurityHeadline Headlines
	 * @return XiReleasesTypeSecurityHeadlines
	 */
	public function __construct($_Security = null,$_Headlines = null)
	{
		XiReleasesWsdlClass::__construct(array('Security'=>$_Security,'Headlines'=>new XiReleasesTypeArrayOfSecurityHeadline($_Headlines)));
	}
	/**
	 * Set Security
	 * @param Security Security
	 * @return Security
	 */
	public function setSecurity($_Security)
	{
		return ($this->Security = $_Security);
	}
	/**
	 * Get Security
	 * @return XiReleasesTypeSecurity
	 */
	public function getSecurity()
	{
		return $this->Security;
	}
	/**
	 * Set Headlines
	 * @param ArrayOfSecurityHeadline Headlines
	 * @return ArrayOfSecurityHeadline
	 */
	public function setHeadlines($_Headlines)
	{
		return ($this->Headlines = $_Headlines);
	}
	/**
	 * Get Headlines
	 * @return XiReleasesTypeArrayOfSecurityHeadline
	 */
	public function getHeadlines()
	{
		return $this->Headlines;
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