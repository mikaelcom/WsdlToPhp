<?php
/**
 * Class file for SPSitesTypeGetSiteTemplates
 * @date 06/07/2012
 */
/**
 * Class SPSitesTypeGetSiteTemplates
 * @date 06/07/2012
 */
class SPSitesTypeGetSiteTemplates extends SPSitesWsdlClass
{
	/**
	 * The LCID
	 * @var unsignedInt
	 */
	public $LCID;
	/**
	 * Constructor
	 * @param unsignedInt LCID
	 * @return SPSitesTypeGetSiteTemplates
	 */
	public function __construct($_LCID = null)
	{
		parent::__construct(array('LCID'=>$_LCID));
	}
	/**
	 * Set LCID
	 * @param unsignedInt LCID
	 * @return unsignedInt
	 */
	public function setLCID($_LCID)
	{
		return ($this->LCID = $_LCID);
	}
	/**
	 * Get LCID
	 * @return unsignedInt
	 */
	public function getLCID()
	{
		return $this->LCID;
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