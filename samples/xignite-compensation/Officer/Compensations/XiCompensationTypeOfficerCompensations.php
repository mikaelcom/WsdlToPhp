<?php
/**
 * Class file for XiCompensationTypeOfficerCompensations
 * @date 08/07/2012
 */
/**
 * Class XiCompensationTypeOfficerCompensations
 * @date 08/07/2012
 */
class XiCompensationTypeOfficerCompensations extends XiCompensationTypeCommon
{
	/**
	 * The OfficerID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $OfficerID;
	/**
	 * The Officer
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiCompensationTypeOfficer
	 */
	public $Officer;
	/**
	 * The Compensations
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiCompensationTypeArrayOfCompensation
	 */
	public $Compensations;
	/**
	 * Constructor
	 * @param string OfficerID
	 * @param XiCompensationTypeOfficer Officer
	 * @param XiCompensationTypeArrayOfCompensation Compensations
	 * @return XiCompensationTypeOfficerCompensations
	 */
	public function __construct($_OfficerID = null,$_Officer = null,$_Compensations = null)
	{
		XiCompensationWsdlClass::__construct(array('OfficerID'=>$_OfficerID,'Officer'=>$_Officer,'Compensations'=>new XiCompensationTypeArrayOfCompensation($_Compensations)));
	}
	/**
	 * Set OfficerID
	 * @param string OfficerID
	 * @return string
	 */
	public function setOfficerID($_OfficerID)
	{
		return ($this->OfficerID = $_OfficerID);
	}
	/**
	 * Get OfficerID
	 * @return string
	 */
	public function getOfficerID()
	{
		return $this->OfficerID;
	}
	/**
	 * Set Officer
	 * @param Officer Officer
	 * @return Officer
	 */
	public function setOfficer($_Officer)
	{
		return ($this->Officer = $_Officer);
	}
	/**
	 * Get Officer
	 * @return XiCompensationTypeOfficer
	 */
	public function getOfficer()
	{
		return $this->Officer;
	}
	/**
	 * Set Compensations
	 * @param ArrayOfCompensation Compensations
	 * @return ArrayOfCompensation
	 */
	public function setCompensations($_Compensations)
	{
		return ($this->Compensations = $_Compensations);
	}
	/**
	 * Get Compensations
	 * @return XiCompensationTypeArrayOfCompensation
	 */
	public function getCompensations()
	{
		return $this->Compensations;
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