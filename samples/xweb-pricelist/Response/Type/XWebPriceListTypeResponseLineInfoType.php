<?php
/**
 * Class file for XWebPriceListTypeResponseLineInfoType
 * @date 09/07/2012
 */
/**
 * Class XWebPriceListTypeResponseLineInfoType
 * @date 09/07/2012
 */
class XWebPriceListTypeResponseLineInfoType extends XWebPriceListWsdlClass
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
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XWebPriceListTypeRefIDQualType
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
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XWebPriceListTypeRefIDQualType
	 */
	public $RefIDQual2;
	/**
	 * The RefID2
	 * @var RefID2
	 */
	public $RefID2;
	/**
	 * The ProductDesc
	 * @var ProductDesc
	 */
	public $ProductDesc;
	/**
	 * The ItemEUIRequired
	 * @var ItemEUIRequired
	 */
	public $ItemEUIRequired;
	/**
	 * The LicenseRequired
	 * @var LicenseRequired
	 */
	public $LicenseRequired;
	/**
	 * The CustomerPrice
	 * @var CustomerPrice
	 */
	public $CustomerPrice;
	/**
	 * The MSRP
	 * @var MSRP
	 */
	public $MSRP;
	/**
	 * The PromotionInfo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var XWebPriceListTypeResponsePromotionInfoType
	 */
	public $PromotionInfo;
	/**
	 * The AvailabilityInfo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XWebPriceListTypeResponseAvailabilityInfoType
	 */
	public $AvailabilityInfo;
	/**
	 * The ErrorInfo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var XWebPriceListTypeResponseErrorInfoType
	 */
	public $ErrorInfo;
	/**
	 * Constructor
	 * @param AssignedID AssignedID
	 * @param XWebPriceListTypeRefIDQualType RefIDQual1
	 * @param RefID1 RefID1
	 * @param XWebPriceListTypeRefIDQualType RefIDQual2
	 * @param RefID2 RefID2
	 * @param ProductDesc ProductDesc
	 * @param ItemEUIRequired ItemEUIRequired
	 * @param LicenseRequired LicenseRequired
	 * @param CustomerPrice CustomerPrice
	 * @param MSRP MSRP
	 * @param XWebPriceListTypeResponsePromotionInfoType PromotionInfo
	 * @param XWebPriceListTypeResponseAvailabilityInfoType AvailabilityInfo
	 * @param XWebPriceListTypeResponseErrorInfoType ErrorInfo
	 * @return XWebPriceListTypeResponseLineInfoType
	 */
	public function __construct($_AssignedID = null,$_RefIDQual1 = null,$_RefID1 = null,$_RefIDQual2 = null,$_RefID2 = null,$_ProductDesc = null,$_ItemEUIRequired = null,$_LicenseRequired = null,$_CustomerPrice = null,$_MSRP = null,$_PromotionInfo = null,$_AvailabilityInfo = null,$_ErrorInfo = null)
	{
		parent::__construct(array('AssignedID'=>$_AssignedID,'RefIDQual1'=>$_RefIDQual1,'RefID1'=>$_RefID1,'RefIDQual2'=>$_RefIDQual2,'RefID2'=>$_RefID2,'ProductDesc'=>$_ProductDesc,'ItemEUIRequired'=>$_ItemEUIRequired,'LicenseRequired'=>$_LicenseRequired,'CustomerPrice'=>$_CustomerPrice,'MSRP'=>$_MSRP,'PromotionInfo'=>$_PromotionInfo,'AvailabilityInfo'=>$_AvailabilityInfo,'ErrorInfo'=>$_ErrorInfo));
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
		return ($this->RefIDQual1 = XWebPriceListTypeRefIDQualType::valueIsValid($_RefIDQual1)?$_RefIDQual1:null);
	}
	/**
	 * Get RefIDQual1
	 * @return XWebPriceListTypeRefIDQualType
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
		return ($this->RefIDQual2 = XWebPriceListTypeRefIDQualType::valueIsValid($_RefIDQual2)?$_RefIDQual2:null);
	}
	/**
	 * Get RefIDQual2
	 * @return XWebPriceListTypeRefIDQualType
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
	 * Set ItemEUIRequired
	 * @param ItemEUIRequired ItemEUIRequired
	 * @return ItemEUIRequired
	 */
	public function setItemEUIRequired($_ItemEUIRequired)
	{
		return ($this->ItemEUIRequired = $_ItemEUIRequired);
	}
	/**
	 * Get ItemEUIRequired
	 * @return ItemEUIRequired
	 */
	public function getItemEUIRequired()
	{
		return $this->ItemEUIRequired;
	}
	/**
	 * Set LicenseRequired
	 * @param LicenseRequired LicenseRequired
	 * @return LicenseRequired
	 */
	public function setLicenseRequired($_LicenseRequired)
	{
		return ($this->LicenseRequired = $_LicenseRequired);
	}
	/**
	 * Get LicenseRequired
	 * @return LicenseRequired
	 */
	public function getLicenseRequired()
	{
		return $this->LicenseRequired;
	}
	/**
	 * Set CustomerPrice
	 * @param CustomerPrice CustomerPrice
	 * @return CustomerPrice
	 */
	public function setCustomerPrice($_CustomerPrice)
	{
		return ($this->CustomerPrice = $_CustomerPrice);
	}
	/**
	 * Get CustomerPrice
	 * @return CustomerPrice
	 */
	public function getCustomerPrice()
	{
		return $this->CustomerPrice;
	}
	/**
	 * Set MSRP
	 * @param MSRP MSRP
	 * @return MSRP
	 */
	public function setMSRP($_MSRP)
	{
		return ($this->MSRP = $_MSRP);
	}
	/**
	 * Get MSRP
	 * @return MSRP
	 */
	public function getMSRP()
	{
		return $this->MSRP;
	}
	/**
	 * Set PromotionInfo
	 * @param ResponsePromotionInfoType PromotionInfo
	 * @return ResponsePromotionInfoType
	 */
	public function setPromotionInfo($_PromotionInfo)
	{
		return ($this->PromotionInfo = $_PromotionInfo);
	}
	/**
	 * Get PromotionInfo
	 * @return XWebPriceListTypeResponsePromotionInfoType
	 */
	public function getPromotionInfo()
	{
		return $this->PromotionInfo;
	}
	/**
	 * Set AvailabilityInfo
	 * @param ResponseAvailabilityInfoType AvailabilityInfo
	 * @return ResponseAvailabilityInfoType
	 */
	public function setAvailabilityInfo($_AvailabilityInfo)
	{
		return ($this->AvailabilityInfo = $_AvailabilityInfo);
	}
	/**
	 * Get AvailabilityInfo
	 * @return XWebPriceListTypeResponseAvailabilityInfoType
	 */
	public function getAvailabilityInfo()
	{
		return $this->AvailabilityInfo;
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
	 * @return XWebPriceListTypeResponseErrorInfoType
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