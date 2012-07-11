<?php
/**
 * Class file for ATReportingTypeNXHeader
 * @date 03/07/2012
 */
/**
 * Class ATReportingTypeNXHeader
 * @date 03/07/2012
 */
class ATReportingTypeNXHeader extends ATReportingWsdlClass
{
	/**
	 * The GUID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $GUID;
	/**
	 * The SecurityKey
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $SecurityKey;
	/**
	 * The Site
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $Site;
	/**
	 * Constructor
	 * @param string GUID
	 * @param string SecurityKey
	 * @param int Site
	 * @return ATReportingTypeNXHeader
	 */
	public function __construct($_GUID = null,$_SecurityKey = null,$_Site)
	{
		parent::__construct(array('GUID'=>$_GUID,'SecurityKey'=>$_SecurityKey,'Site'=>$_Site));
	}
	/**
	 * Set GUID
	 * @param string GUID
	 * @return string
	 */
	public function setGUID($_GUID)
	{
		return ($this->GUID = $_GUID);
	}
	/**
	 * Get GUID
	 * @return string
	 */
	public function getGUID()
	{
		return $this->GUID;
	}
	/**
	 * Set SecurityKey
	 * @param string SecurityKey
	 * @return string
	 */
	public function setSecurityKey($_SecurityKey)
	{
		return ($this->SecurityKey = $_SecurityKey);
	}
	/**
	 * Get SecurityKey
	 * @return string
	 */
	public function getSecurityKey()
	{
		return $this->SecurityKey;
	}
	/**
	 * Set Site
	 * @param int Site
	 * @return int
	 */
	public function setSite($_Site)
	{
		return ($this->Site = $_Site);
	}
	/**
	 * Get Site
	 * @return int
	 */
	public function getSite()
	{
		return $this->Site;
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