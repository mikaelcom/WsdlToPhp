<?php
/**
 * Class file for XiInsiderTypeReportingOwner
 * @date 08/07/2012
 */
/**
 * Class XiInsiderTypeReportingOwner
 * @date 08/07/2012
 */
class XiInsiderTypeReportingOwner extends XiInsiderWsdlClass
{
	/**
	 * The reportingOwnerId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInsiderTypeRptOwnerId
	 */
	public $reportingOwnerId;
	/**
	 * The reportingOwnerAddress
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInsiderTypeRptOwnerAddress
	 */
	public $reportingOwnerAddress;
	/**
	 * The reportingOwnerRelationship
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInsiderTypeRptOwnerRelationship
	 */
	public $reportingOwnerRelationship;
	/**
	 * Constructor
	 * @param XiInsiderTypeRptOwnerId reportingOwnerId
	 * @param XiInsiderTypeRptOwnerAddress reportingOwnerAddress
	 * @param XiInsiderTypeRptOwnerRelationship reportingOwnerRelationship
	 * @return XiInsiderTypeReportingOwner
	 */
	public function __construct($_reportingOwnerId = null,$_reportingOwnerAddress = null,$_reportingOwnerRelationship = null)
	{
		parent::__construct(array('reportingOwnerId'=>$_reportingOwnerId,'reportingOwnerAddress'=>$_reportingOwnerAddress,'reportingOwnerRelationship'=>$_reportingOwnerRelationship));
	}
	/**
	 * Set reportingOwnerId
	 * @param rptOwnerId reportingOwnerId
	 * @return rptOwnerId
	 */
	public function setReportingOwnerId($_reportingOwnerId)
	{
		return ($this->reportingOwnerId = $_reportingOwnerId);
	}
	/**
	 * Get reportingOwnerId
	 * @return XiInsiderTyperptOwnerId
	 */
	public function getReportingOwnerId()
	{
		return $this->reportingOwnerId;
	}
	/**
	 * Set reportingOwnerAddress
	 * @param rptOwnerAddress reportingOwnerAddress
	 * @return rptOwnerAddress
	 */
	public function setReportingOwnerAddress($_reportingOwnerAddress)
	{
		return ($this->reportingOwnerAddress = $_reportingOwnerAddress);
	}
	/**
	 * Get reportingOwnerAddress
	 * @return XiInsiderTyperptOwnerAddress
	 */
	public function getReportingOwnerAddress()
	{
		return $this->reportingOwnerAddress;
	}
	/**
	 * Set reportingOwnerRelationship
	 * @param rptOwnerRelationship reportingOwnerRelationship
	 * @return rptOwnerRelationship
	 */
	public function setReportingOwnerRelationship($_reportingOwnerRelationship)
	{
		return ($this->reportingOwnerRelationship = $_reportingOwnerRelationship);
	}
	/**
	 * Get reportingOwnerRelationship
	 * @return XiInsiderTyperptOwnerRelationship
	 */
	public function getReportingOwnerRelationship()
	{
		return $this->reportingOwnerRelationship;
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