<?php
/**
 * Class file for XWebShipViaTypeRequestLineInfoType
 * @date 09/07/2012
 */
/**
 * Class XWebShipViaTypeRequestLineInfoType
 * @date 09/07/2012
 */
class XWebShipViaTypeRequestLineInfoType extends XWebShipViaWsdlClass
{
	/**
	 * The AssignedID
	 * @var AssignedID
	 */
	public $AssignedID;
	/**
	 * The RefIDQual
	 * @var XWebShipViaTypeRefIDQualType
	 */
	public $RefIDQual;
	/**
	 * The RefID
	 * @var RefID
	 */
	public $RefID;
	/**
	 * The WhseCode
	 * @var WhseCode
	 */
	public $WhseCode;
	/**
	 * Constructor
	 * @param AssignedID AssignedID
	 * @param XWebShipViaTypeRefIDQualType RefIDQual
	 * @param RefID RefID
	 * @param WhseCode WhseCode
	 * @return XWebShipViaTypeRequestLineInfoType
	 */
	public function __construct($_AssignedID = null,$_RefIDQual = null,$_RefID = null,$_WhseCode = null)
	{
		parent::__construct(array('AssignedID'=>$_AssignedID,'RefIDQual'=>$_RefIDQual,'RefID'=>$_RefID,'WhseCode'=>$_WhseCode));
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
		return ($this->RefIDQual = XWebShipViaTypeRefIDQualType::valueIsValid($_RefIDQual)?$_RefIDQual:null);
	}
	/**
	 * Get RefIDQual
	 * @return XWebShipViaTypeRefIDQualType
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
	 * Set WhseCode
	 * @param WhseCode WhseCode
	 * @return WhseCode
	 */
	public function setWhseCode($_WhseCode)
	{
		return ($this->WhseCode = $_WhseCode);
	}
	/**
	 * Get WhseCode
	 * @return WhseCode
	 */
	public function getWhseCode()
	{
		return $this->WhseCode;
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