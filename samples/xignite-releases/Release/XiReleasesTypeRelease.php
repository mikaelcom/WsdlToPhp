<?php
/**
 * Class file for XiReleasesTypeRelease
 * @date 08/07/2012
 */
/**
 * Class XiReleasesTypeRelease
 * @date 08/07/2012
 */
class XiReleasesTypeRelease extends XiReleasesTypeCommon
{
	/**
	 * The ReleaseId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ReleaseId;
	/**
	 * The Security
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiReleasesTypeSecurity
	 */
	public $Security;
	/**
	 * The Headline
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiReleasesTypeSecurityHeadline
	 */
	public $Headline;
	/**
	 * The Content
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Content;
	/**
	 * Constructor
	 * @param string ReleaseId
	 * @param XiReleasesTypeSecurity Security
	 * @param XiReleasesTypeSecurityHeadline Headline
	 * @param string Content
	 * @return XiReleasesTypeRelease
	 */
	public function __construct($_ReleaseId = null,$_Security = null,$_Headline = null,$_Content = null)
	{
		XiReleasesWsdlClass::__construct(array('ReleaseId'=>$_ReleaseId,'Security'=>$_Security,'Headline'=>$_Headline,'Content'=>$_Content));
	}
	/**
	 * Set ReleaseId
	 * @param string ReleaseId
	 * @return string
	 */
	public function setReleaseId($_ReleaseId)
	{
		return ($this->ReleaseId = $_ReleaseId);
	}
	/**
	 * Get ReleaseId
	 * @return string
	 */
	public function getReleaseId()
	{
		return $this->ReleaseId;
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
	 * Set Headline
	 * @param SecurityHeadline Headline
	 * @return SecurityHeadline
	 */
	public function setHeadline($_Headline)
	{
		return ($this->Headline = $_Headline);
	}
	/**
	 * Get Headline
	 * @return XiReleasesTypeSecurityHeadline
	 */
	public function getHeadline()
	{
		return $this->Headline;
	}
	/**
	 * Set Content
	 * @param string Content
	 * @return string
	 */
	public function setContent($_Content)
	{
		return ($this->Content = $_Content);
	}
	/**
	 * Get Content
	 * @return string
	 */
	public function getContent()
	{
		return $this->Content;
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