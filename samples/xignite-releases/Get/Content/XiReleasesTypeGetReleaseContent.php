<?php
/**
 * Class file for XiReleasesTypeGetReleaseContent
 * @date 08/07/2012
 */
/**
 * Class XiReleasesTypeGetReleaseContent
 * @date 08/07/2012
 */
class XiReleasesTypeGetReleaseContent extends XiReleasesWsdlClass
{
	/**
	 * The ReleaseID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ReleaseID;
	/**
	 * Constructor
	 * @param string ReleaseID
	 * @return XiReleasesTypeGetReleaseContent
	 */
	public function __construct($_ReleaseID = null)
	{
		parent::__construct(array('ReleaseID'=>$_ReleaseID));
	}
	/**
	 * Set ReleaseID
	 * @param string ReleaseID
	 * @return string
	 */
	public function setReleaseID($_ReleaseID)
	{
		return ($this->ReleaseID = $_ReleaseID);
	}
	/**
	 * Get ReleaseID
	 * @return string
	 */
	public function getReleaseID()
	{
		return $this->ReleaseID;
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