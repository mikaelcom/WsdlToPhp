<?php
/**
 * Class file for XWebPriceAvailabilityTypeResponseLineInfoType
 * @date 09/07/2012
 */
/**
 * Class XWebPriceAvailabilityTypeResponseLineInfoType
 * @date 09/07/2012
 */
class XWebPriceAvailabilityTypeResponseLineInfoType extends XWebPriceAvailabilityWsdlClass
{
	/**
	 * The AssignedID
	 * @var AssignedID
	 */
	public $AssignedID;
	/**
	 * The RefIDQual1
	 * Meta informations :
	 * 	- nillable : true
	 * @var XWebPriceAvailabilityTypeRefIDQualType
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
	 * @var XWebPriceAvailabilityTypeRefIDQualType
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
	 * @var XWebPriceAvailabilityTypeRefIDQualType
	 */
	public $RefIDQual4;
	/**
	 * The RefID4
	 * @var RefID4
	 */
	public $RefID4;
	/**
	 * The ProductDesc
	 * @var ProductDesc
	 */
	public $ProductDesc;
	/**
	 * The PriceIDCode1
	 * @var PriceIDCode1
	 */
	public $PriceIDCode1;
	/**
	 * The UnitPrice1
	 * @var UnitPrice1
	 */
	public $UnitPrice1;
	/**
	 * The PriceIDCode2
	 * @var PriceIDCode2
	 */
	public $PriceIDCode2;
	/**
	 * The UnitPrice2
	 * @var UnitPrice2
	 */
	public $UnitPrice2;
	/**
	 * The RequiredEndUserInfo
	 * @var RequiredEndUserInfo
	 */
	public $RequiredEndUserInfo;
	/**
	 * The RequiredLicenseInfo
	 * @var RequiredLicenseInfo
	 */
	public $RequiredLicenseInfo;
	/**
	 * The PromoAppliedInd
	 * @var PromoAppliedInd
	 */
	public $PromoAppliedInd;
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
	 * @var XWebPriceAvailabilityTypeResponseWhseInfoType
	 */
	public $WhseInfo;
	/**
	 * The ErrorInfo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var XWebPriceAvailabilityTypeResponseErrorInfoType
	 */
	public $ErrorInfo;
	/**
	 * Constructor
	 * @param AssignedID AssignedID
	 * @param XWebPriceAvailabilityTypeRefIDQualType RefIDQual1
	 * @param RefID1 RefID1
	 * @param XWebPriceAvailabilityTypeRefIDQualType RefIDQual2
	 * @param RefID2 RefID2
	 * @param XWebPriceAvailabilityTypeRefIDQualType RefIDQual4
	 * @param RefID4 RefID4
	 * @param ProductDesc ProductDesc
	 * @param PriceIDCode1 PriceIDCode1
	 * @param UnitPrice1 UnitPrice1
	 * @param PriceIDCode2 PriceIDCode2
	 * @param UnitPrice2 UnitPrice2
	 * @param RequiredEndUserInfo RequiredEndUserInfo
	 * @param RequiredLicenseInfo RequiredLicenseInfo
	 * @param PromoAppliedInd PromoAppliedInd
	 * @param ProductWeight ProductWeight
	 * @param ItemStatus ItemStatus
	 * @param XWebPriceAvailabilityTypeResponseWhseInfoType WhseInfo
	 * @param XWebPriceAvailabilityTypeResponseErrorInfoType ErrorInfo
	 * @return XWebPriceAvailabilityTypeResponseLineInfoType
	 */
	public function __construct($_AssignedID = null,$_RefIDQual1 = null,$_RefID1 = null,$_RefIDQual2 = null,$_RefID2 = null,$_RefIDQual4 = null,$_RefID4 = null,$_ProductDesc = null,$_PriceIDCode1 = null,$_UnitPrice1 = null,$_PriceIDCode2 = null,$_UnitPrice2 = null,$_RequiredEndUserInfo = null,$_RequiredLicenseInfo = null,$_PromoAppliedInd = null,$_ProductWeight = null,$_ItemStatus = null,$_WhseInfo = null,$_ErrorInfo = null)
	{
		parent::__construct(array('AssignedID'=>$_AssignedID,'RefIDQual1'=>$_RefIDQual1,'RefID1'=>$_RefID1,'RefIDQual2'=>$_RefIDQual2,'RefID2'=>$_RefID2,'RefIDQual4'=>$_RefIDQual4,'RefID4'=>$_RefID4,'ProductDesc'=>$_ProductDesc,'PriceIDCode1'=>$_PriceIDCode1,'UnitPrice1'=>$_UnitPrice1,'PriceIDCode2'=>$_PriceIDCode2,'UnitPrice2'=>$_UnitPrice2,'RequiredEndUserInfo'=>$_RequiredEndUserInfo,'RequiredLicenseInfo'=>$_RequiredLicenseInfo,'PromoAppliedInd'=>$_PromoAppliedInd,'ProductWeight'=>$_ProductWeight,'ItemStatus'=>$_ItemStatus,'WhseInfo'=>$_WhseInfo,'ErrorInfo'=>$_ErrorInfo));
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
		return ($this->RefIDQual1 = XWebPriceAvailabilityTypeRefIDQualType::valueIsValid($_RefIDQual1)?$_RefIDQual1:null);
	}
	/**
	 * Get RefIDQual1
	 * @return XWebPriceAvailabilityTypeRefIDQualType
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
		return ($this->RefIDQual2 = XWebPriceAvailabilityTypeRefIDQualType::valueIsValid($_RefIDQual2)?$_RefIDQual2:null);
	}
	/**
	 * Get RefIDQual2
	 * @return XWebPriceAvailabilityTypeRefIDQualType
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
		return ($this->RefIDQual4 = XWebPriceAvailabilityTypeRefIDQualType::valueIsValid($_RefIDQual4)?$_RefIDQual4:null);
	}
	/**
	 * Get RefIDQual4
	 * @return XWebPriceAvailabilityTypeRefIDQualType
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
	 * Set ProductDesc
	 * @param ProductDesc ProductDesc
	 * @return ProductDesc
	 */
	public function setProductDesc($_ProductDesc)
	{
		return ($this->ProductDesc = $_ProductDesc);
	}
	/**
	 * Get ProductDesc
	 * @return ProductDesc
	 */
	public function getProductDesc()
	{
		return $this->ProductDesc;
	}
	/**
	 * Set PriceIDCode1
	 * @param PriceIDCode1 PriceIDCode1
	 * @return PriceIDCode1
	 */
	public function setPriceIDCode1($_PriceIDCode1)
	{
		return ($this->PriceIDCode1 = $_PriceIDCode1);
	}
	/**
	 * Get PriceIDCode1
	 * @return PriceIDCode1
	 */
	public function getPriceIDCode1()
	{
		return $this->PriceIDCode1;
	}
	/**
	 * Set UnitPrice1
	 * @param UnitPrice1 UnitPrice1
	 * @return UnitPrice1
	 */
	public function setUnitPrice1($_UnitPrice1)
	{
		return ($this->UnitPrice1 = $_UnitPrice1);
	}
	/**
	 * Get UnitPrice1
	 * @return UnitPrice1
	 */
	public function getUnitPrice1()
	{
		return $this->UnitPrice1;
	}
	/**
	 * Set PriceIDCode2
	 * @param PriceIDCode2 PriceIDCode2
	 * @return PriceIDCode2
	 */
	public function setPriceIDCode2($_PriceIDCode2)
	{
		return ($this->PriceIDCode2 = $_PriceIDCode2);
	}
	/**
	 * Get PriceIDCode2
	 * @return PriceIDCode2
	 */
	public function getPriceIDCode2()
	{
		return $this->PriceIDCode2;
	}
	/**
	 * Set UnitPrice2
	 * @param UnitPrice2 UnitPrice2
	 * @return UnitPrice2
	 */
	public function setUnitPrice2($_UnitPrice2)
	{
		return ($this->UnitPrice2 = $_UnitPrice2);
	}
	/**
	 * Get UnitPrice2
	 * @return UnitPrice2
	 */
	public function getUnitPrice2()
	{
		return $this->UnitPrice2;
	}
	/**
	 * Set RequiredEndUserInfo
	 * @param RequiredEndUserInfo RequiredEndUserInfo
	 * @return RequiredEndUserInfo
	 */
	public function setRequiredEndUserInfo($_RequiredEndUserInfo)
	{
		return ($this->RequiredEndUserInfo = $_RequiredEndUserInfo);
	}
	/**
	 * Get RequiredEndUserInfo
	 * @return RequiredEndUserInfo
	 */
	public function getRequiredEndUserInfo()
	{
		return $this->RequiredEndUserInfo;
	}
	/**
	 * Set RequiredLicenseInfo
	 * @param RequiredLicenseInfo RequiredLicenseInfo
	 * @return RequiredLicenseInfo
	 */
	public function setRequiredLicenseInfo($_RequiredLicenseInfo)
	{
		return ($this->RequiredLicenseInfo = $_RequiredLicenseInfo);
	}
	/**
	 * Get RequiredLicenseInfo
	 * @return RequiredLicenseInfo
	 */
	public function getRequiredLicenseInfo()
	{
		return $this->RequiredLicenseInfo;
	}
	/**
	 * Set PromoAppliedInd
	 * @param PromoAppliedInd PromoAppliedInd
	 * @return PromoAppliedInd
	 */
	public function setPromoAppliedInd($_PromoAppliedInd)
	{
		return ($this->PromoAppliedInd = $_PromoAppliedInd);
	}
	/**
	 * Get PromoAppliedInd
	 * @return PromoAppliedInd
	 */
	public function getPromoAppliedInd()
	{
		return $this->PromoAppliedInd;
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
	 * @return XWebPriceAvailabilityTypeResponseWhseInfoType
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
	 * @return XWebPriceAvailabilityTypeResponseErrorInfoType
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