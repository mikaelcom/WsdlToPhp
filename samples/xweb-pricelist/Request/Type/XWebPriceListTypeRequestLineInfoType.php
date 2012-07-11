<?php
/**
 * Class file for XWebPriceListTypeRequestLineInfoType
 * @date 09/07/2012
 */
/**
 * Class XWebPriceListTypeRequestLineInfoType
 * @date 09/07/2012
 */
class XWebPriceListTypeRequestLineInfoType extends XWebPriceListWsdlClass
{
	/**
	 * The AssignedID
	 * @var AssignedID
	 */
	public $AssignedID;
	/**
	 * The RefIDQual
	 * Meta informations :
	 * 	- nillable : true
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XWebPriceListTypeRefIDQualType
	 */
	public $RefIDQual;
	/**
	 * The RefID
	 * @var RefID
	 */
	public $RefID;
	/**
	 * The ReturnAvailability
	 * @var ReturnAvailability
	 */
	public $ReturnAvailability;
	/**
	 * Constructor
	 * @param AssignedID AssignedID
	 * @param XWebPriceListTypeRefIDQualType RefIDQual
	 * @param RefID RefID
	 * @param ReturnAvailability ReturnAvailability
	 * @return XWebPriceListTypeRequestLineInfoType
	 */
	public function __construct($_AssignedID = null,$_RefIDQual,$_RefID = null,$_ReturnAvailability = null)
	{
		parent::__construct(array('AssignedID'=>$_AssignedID,'RefIDQual'=>$_RefIDQual,'RefID'=>$_RefID,'ReturnAvailability'=>$_ReturnAvailability));
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
		return ($this->RefIDQual = XWebPriceListTypeRefIDQualType::valueIsValid($_RefIDQual)?$_RefIDQual:null);
	}
	/**
	 * Get RefIDQual
	 * @return XWebPriceListTypeRefIDQualType
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
	 * Set ReturnAvailability
	 * @param ReturnAvailability ReturnAvailability
	 * @return ReturnAvailability
	 */
	public function setReturnAvailability($_ReturnAvailability)
	{
		return ($this->ReturnAvailability = $_ReturnAvailability);
	}
	/**
	 * Get ReturnAvailability
	 * @return ReturnAvailability
	 */
	public function getReturnAvailability()
	{
		return $this->ReturnAvailability;
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