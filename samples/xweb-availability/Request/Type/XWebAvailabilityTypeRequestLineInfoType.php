<?php
/**
 * Class file for XWebAvailabilityTypeRequestLineInfoType
 * @date 09/07/2012
 */
/**
 * Class XWebAvailabilityTypeRequestLineInfoType
 * @date 09/07/2012
 */
class XWebAvailabilityTypeRequestLineInfoType extends XWebAvailabilityWsdlClass
{
	/**
	 * The AssignedID
	 * @var AssignedID
	 */
	public $AssignedID;
	/**
	 * The RefIDQual
	 * @var XWebAvailabilityTypeRefIDQualType
	 */
	public $RefIDQual;
	/**
	 * The RefID
	 * @var RefID
	 */
	public $RefID;
	/**
	 * Constructor
	 * @param AssignedID AssignedID
	 * @param XWebAvailabilityTypeRefIDQualType RefIDQual
	 * @param RefID RefID
	 * @return XWebAvailabilityTypeRequestLineInfoType
	 */
	public function __construct($_AssignedID = null,$_RefIDQual = null,$_RefID = null)
	{
		parent::__construct(array('AssignedID'=>$_AssignedID,'RefIDQual'=>$_RefIDQual,'RefID'=>$_RefID));
	}
	/**
	 * Set AssignedID
	 * @param AssignedID AssignedID
	 * @return AssignedID
	 */
	public function setAssignedID($_AssignedID)
	{
		return ($this->AssignedID = $_AssignedID);
	}
	/**
	 * Get AssignedID
	 * @return AssignedID
	 */
	public function getAssignedID()
	{
		return $this->AssignedID;
	}
	/**
	 * Set RefIDQual
	 * @param RefIDQualType RefIDQual
	 * @return RefIDQualType
	 */
	public function setRefIDQual($_RefIDQual)
	{
		return ($this->RefIDQual = XWebAvailabilityTypeRefIDQualType::valueIsValid($_RefIDQual)?$_RefIDQual:null);
	}
	/**
	 * Get RefIDQual
	 * @return XWebAvailabilityTypeRefIDQualType
	 */
	public function getRefIDQual()
	{
		return $this->RefIDQual;
	}
	/**
	 * Set RefID
	 * @param RefID RefID
	 * @return RefID
	 */
	public function setRefID($_RefID)
	{
		return ($this->RefID = $_RefID);
	}
	/**
	 * Get RefID
	 * @return RefID
	 */
	public function getRefID()
	{
		return $this->RefID;
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