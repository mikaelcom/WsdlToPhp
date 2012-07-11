<?php
/**
 * Class file for XWebAvailabilityTypeResponseLineInfoType
 * @date 09/07/2012
 */
/**
 * Class XWebAvailabilityTypeResponseLineInfoType
 * @date 09/07/2012
 */
class XWebAvailabilityTypeResponseLineInfoType extends XWebAvailabilityWsdlClass
{
	/**
	 * The AssignedID
	 * @var AssignedID
	 */
	public $AssignedID;
	/**
	 * The RefIDQual1
	 * @var XWebAvailabilityTypeRefIDQualType
	 */
	public $RefIDQual1;
	/**
	 * The RefID1
	 * @var RefID1
	 */
	public $RefID1;
	/**
	 * The RefIDQual2
	 * Meta informations :
	 * 	- nillable : true
	 * @var XWebAvailabilityTypeRefIDQualType
	 */
	public $RefIDQual2;
	/**
	 * The RefID2
	 * @var RefID2
	 */
	public $RefID2;
	/**
	 * The RefIDQual4
	 * Meta informations :
	 * 	- nillable : true
	 * @var XWebAvailabilityTypeRefIDQualType
	 */
	public $RefIDQual4;
	/**
	 * The RefID4
	 * @var RefID4
	 */
	public $RefID4;
	/**
	 * The ProductWeight
	 * @var ProductWeight
	 */
	public $ProductWeight;
	/**
	 * The ItemStatus
	 * @var ItemStatus
	 */
	public $ItemStatus;
	/**
	 * The WhseInfo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var XWebAvailabilityTypeResponseWhseInfoType
	 */
	public $WhseInfo;
	/**
	 * The ErrorInfo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var XWebAvailabilityTypeResponseErrorInfoType
	 */
	public $ErrorInfo;
	/**
	 * Constructor
	 * @param AssignedID AssignedID
	 * @param XWebAvailabilityTypeRefIDQualType RefIDQual1
	 * @param RefID1 RefID1
	 * @param XWebAvailabilityTypeRefIDQualType RefIDQual2
	 * @param RefID2 RefID2
	 * @param XWebAvailabilityTypeRefIDQualType RefIDQual4
	 * @param RefID4 RefID4
	 * @param ProductWeight ProductWeight
	 * @param ItemStatus ItemStatus
	 * @param XWebAvailabilityTypeResponseWhseInfoType WhseInfo
	 * @param XWebAvailabilityTypeResponseErrorInfoType ErrorInfo
	 * @return XWebAvailabilityTypeResponseLineInfoType
	 */
	public function __construct($_AssignedID = null,$_RefIDQual1 = null,$_RefID1 = null,$_RefIDQual2 = null,$_RefID2 = null,$_RefIDQual4 = null,$_RefID4 = null,$_ProductWeight = null,$_ItemStatus = null,$_WhseInfo = null,$_ErrorInfo = null)
	{
		parent::__construct(array('AssignedID'=>$_AssignedID,'RefIDQual1'=>$_RefIDQual1,'RefID1'=>$_RefID1,'RefIDQual2'=>$_RefIDQual2,'RefID2'=>$_RefID2,'RefIDQual4'=>$_RefIDQual4,'RefID4'=>$_RefID4,'ProductWeight'=>$_ProductWeight,'ItemStatus'=>$_ItemStatus,'WhseInfo'=>$_WhseInfo,'ErrorInfo'=>$_ErrorInfo));
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
	 * Set RefIDQual1
	 * @param RefIDQualType RefIDQual1
	 * @return RefIDQualType
	 */
	public function setRefIDQual1($_RefIDQual1)
	{
		return ($this->RefIDQual1 = XWebAvailabilityTypeRefIDQualType::valueIsValid($_RefIDQual1)?$_RefIDQual1:null);
	}
	/**
	 * Get RefIDQual1
	 * @return XWebAvailabilityTypeRefIDQualType
	 */
	public function getRefIDQual1()
	{
		return $this->RefIDQual1;
	}
	/**
	 * Set RefID1
	 * @param RefID1 RefID1
	 * @return RefID1
	 */
	public function setRefID1($_RefID1)
	{
		return ($this->RefID1 = $_RefID1);
	}
	/**
	 * Get RefID1
	 * @return RefID1
	 */
	public function getRefID1()
	{
		return $this->RefID1;
	}
	/**
	 * Set RefIDQual2
	 * @param RefIDQualType RefIDQual2
	 * @return RefIDQualType
	 */
	public function setRefIDQual2($_RefIDQual2)
	{
		return ($this->RefIDQual2 = XWebAvailabilityTypeRefIDQualType::valueIsValid($_RefIDQual2)?$_RefIDQual2:null);
	}
	/**
	 * Get RefIDQual2
	 * @return XWebAvailabilityTypeRefIDQualType
	 */
	public function getRefIDQual2()
	{
		return $this->RefIDQual2;
	}
	/**
	 * Set RefID2
	 * @param RefID2 RefID2
	 * @return RefID2
	 */
	public function setRefID2($_RefID2)
	{
		return ($this->RefID2 = $_RefID2);
	}
	/**
	 * Get RefID2
	 * @return RefID2
	 */
	public function getRefID2()
	{
		return $this->RefID2;
	}
	/**
	 * Set RefIDQual4
	 * @param RefIDQualType RefIDQual4
	 * @return RefIDQualType
	 */
	public function setRefIDQual4($_RefIDQual4)
	{
		return ($this->RefIDQual4 = XWebAvailabilityTypeRefIDQualType::valueIsValid($_RefIDQual4)?$_RefIDQual4:null);
	}
	/**
	 * Get RefIDQual4
	 * @return XWebAvailabilityTypeRefIDQualType
	 */
	public function getRefIDQual4()
	{
		return $this->RefIDQual4;
	}
	/**
	 * Set RefID4
	 * @param RefID4 RefID4
	 * @return RefID4
	 */
	public function setRefID4($_RefID4)
	{
		return ($this->RefID4 = $_RefID4);
	}
	/**
	 * Get RefID4
	 * @return RefID4
	 */
	public function getRefID4()
	{
		return $this->RefID4;
	}
	/**
	 * Set ProductWeight
	 * @param ProductWeight ProductWeight
	 * @return ProductWeight
	 */
	public function setProductWeight($_ProductWeight)
	{
		return ($this->ProductWeight = $_ProductWeight);
	}
	/**
	 * Get ProductWeight
	 * @return ProductWeight
	 */
	public function getProductWeight()
	{
		return $this->ProductWeight;
	}
	/**
	 * Set ItemStatus
	 * @param ItemStatus ItemStatus
	 * @return ItemStatus
	 */
	public function setItemStatus($_ItemStatus)
	{
		return ($this->ItemStatus = $_ItemStatus);
	}
	/**
	 * Get ItemStatus
	 * @return ItemStatus
	 */
	public function getItemStatus()
	{
		return $this->ItemStatus;
	}
	/**
	 * Set WhseInfo
	 * @param ResponseWhseInfoType WhseInfo
	 * @return ResponseWhseInfoType
	 */
	public function setWhseInfo($_WhseInfo)
	{
		return ($this->WhseInfo = $_WhseInfo);
	}
	/**
	 * Get WhseInfo
	 * @return XWebAvailabilityTypeResponseWhseInfoType
	 */
	public function getWhseInfo()
	{
		return $this->WhseInfo;
	}
	/**
	 * Set ErrorInfo
	 * @param ResponseErrorInfoType ErrorInfo
	 * @return ResponseErrorInfoType
	 */
	public function setErrorInfo($_ErrorInfo)
	{
		return ($this->ErrorInfo = $_ErrorInfo);
	}
	/**
	 * Get ErrorInfo
	 * @return XWebAvailabilityTypeResponseErrorInfoType
	 */
	public function getErrorInfo()
	{
		return $this->ErrorInfo;
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