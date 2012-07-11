<?php
/**
 * Class file for EccShippingFedexTypeOptions
 * @date 03/07/2012
 */
/**
 * Class EccShippingFedexTypeOptions
 * @date 03/07/2012
 */
class EccShippingFedexTypeOptions extends EccShippingFedexWsdlClass
{
	/**
	 * The ResidentialDeliveryFlag
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ResidentialDeliveryFlag;
	/**
	 * The CarrierCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CarrierCode;
	/**
	 * The ShipDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ShipDate;
	/**
	 * The DropOffType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $DropOffType;
	/**
	 * The PackagingType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PackagingType;
	/**
	 * The ServiceType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ServiceType;
	/**
	 * The SaturdayDeliveryFlag
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $SaturdayDeliveryFlag;
	/**
	 * The DryIceFlag
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $DryIceFlag;
	/**
	 * The CourierPickup
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CourierPickup;
	/**
	 * The DangerousGoodsType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $DangerousGoodsType;
	/**
	 * The SignatureOption
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $SignatureOption;
	/**
	 * The ReturnsShipmentIndicator
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ReturnsShipmentIndicator;
	/**
	 * The DimHeight
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $DimHeight;
	/**
	 * The DimWidth
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $DimWidth;
	/**
	 * The DimLength
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $DimLength;
	/**
	 * The CODFlag
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CODFlag;
	/**
	 * The Mode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Mode;
	/**
	 * The Sort
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Sort;
	/**
	 * Constructor
	 * @param string ResidentialDeliveryFlag
	 * @param string CarrierCode
	 * @param string ShipDate
	 * @param string DropOffType
	 * @param string PackagingType
	 * @param string ServiceType
	 * @param string SaturdayDeliveryFlag
	 * @param string DryIceFlag
	 * @param string CourierPickup
	 * @param string DangerousGoodsType
	 * @param string SignatureOption
	 * @param string ReturnsShipmentIndicator
	 * @param string DimHeight
	 * @param string DimWidth
	 * @param string DimLength
	 * @param string CODFlag
	 * @param string Mode
	 * @param string Sort
	 * @return EccShippingFedexTypeOptions
	 */
	public function __construct($_ResidentialDeliveryFlag = null,$_CarrierCode = null,$_ShipDate = null,$_DropOffType = null,$_PackagingType = null,$_ServiceType = null,$_SaturdayDeliveryFlag = null,$_DryIceFlag = null,$_CourierPickup = null,$_DangerousGoodsType = null,$_SignatureOption = null,$_ReturnsShipmentIndicator = null,$_DimHeight = null,$_DimWidth = null,$_DimLength = null,$_CODFlag = null,$_Mode = null,$_Sort = null)
	{
		parent::__construct(array('ResidentialDeliveryFlag'=>$_ResidentialDeliveryFlag,'CarrierCode'=>$_CarrierCode,'ShipDate'=>$_ShipDate,'DropOffType'=>$_DropOffType,'PackagingType'=>$_PackagingType,'ServiceType'=>$_ServiceType,'SaturdayDeliveryFlag'=>$_SaturdayDeliveryFlag,'DryIceFlag'=>$_DryIceFlag,'CourierPickup'=>$_CourierPickup,'DangerousGoodsType'=>$_DangerousGoodsType,'SignatureOption'=>$_SignatureOption,'ReturnsShipmentIndicator'=>$_ReturnsShipmentIndicator,'DimHeight'=>$_DimHeight,'DimWidth'=>$_DimWidth,'DimLength'=>$_DimLength,'CODFlag'=>$_CODFlag,'Mode'=>$_Mode,'Sort'=>$_Sort));
	}
	/**
	 * Set ResidentialDeliveryFlag
	 * @param string ResidentialDeliveryFlag
	 * @return string
	 */
	public function setResidentialDeliveryFlag($_ResidentialDeliveryFlag)
	{
		return ($this->ResidentialDeliveryFlag = $_ResidentialDeliveryFlag);
	}
	/**
	 * Get ResidentialDeliveryFlag
	 * @return string
	 */
	public function getResidentialDeliveryFlag()
	{
		return $this->ResidentialDeliveryFlag;
	}
	/**
	 * Set CarrierCode
	 * @param string CarrierCode
	 * @return string
	 */
	public function setCarrierCode($_CarrierCode)
	{
		return ($this->CarrierCode = $_CarrierCode);
	}
	/**
	 * Get CarrierCode
	 * @return string
	 */
	public function getCarrierCode()
	{
		return $this->CarrierCode;
	}
	/**
	 * Set ShipDate
	 * @param string ShipDate
	 * @return string
	 */
	public function setShipDate($_ShipDate)
	{
		return ($this->ShipDate = $_ShipDate);
	}
	/**
	 * Get ShipDate
	 * @return string
	 */
	public function getShipDate()
	{
		return $this->ShipDate;
	}
	/**
	 * Set DropOffType
	 * @param string DropOffType
	 * @return string
	 */
	public function setDropOffType($_DropOffType)
	{
		return ($this->DropOffType = $_DropOffType);
	}
	/**
	 * Get DropOffType
	 * @return string
	 */
	public function getDropOffType()
	{
		return $this->DropOffType;
	}
	/**
	 * Set PackagingType
	 * @param string PackagingType
	 * @return string
	 */
	public function setPackagingType($_PackagingType)
	{
		return ($this->PackagingType = $_PackagingType);
	}
	/**
	 * Get PackagingType
	 * @return string
	 */
	public function getPackagingType()
	{
		return $this->PackagingType;
	}
	/**
	 * Set ServiceType
	 * @param string ServiceType
	 * @return string
	 */
	public function setServiceType($_ServiceType)
	{
		return ($this->ServiceType = $_ServiceType);
	}
	/**
	 * Get ServiceType
	 * @return string
	 */
	public function getServiceType()
	{
		return $this->ServiceType;
	}
	/**
	 * Set SaturdayDeliveryFlag
	 * @param string SaturdayDeliveryFlag
	 * @return string
	 */
	public function setSaturdayDeliveryFlag($_SaturdayDeliveryFlag)
	{
		return ($this->SaturdayDeliveryFlag = $_SaturdayDeliveryFlag);
	}
	/**
	 * Get SaturdayDeliveryFlag
	 * @return string
	 */
	public function getSaturdayDeliveryFlag()
	{
		return $this->SaturdayDeliveryFlag;
	}
	/**
	 * Set DryIceFlag
	 * @param string DryIceFlag
	 * @return string
	 */
	public function setDryIceFlag($_DryIceFlag)
	{
		return ($this->DryIceFlag = $_DryIceFlag);
	}
	/**
	 * Get DryIceFlag
	 * @return string
	 */
	public function getDryIceFlag()
	{
		return $this->DryIceFlag;
	}
	/**
	 * Set CourierPickup
	 * @param string CourierPickup
	 * @return string
	 */
	public function setCourierPickup($_CourierPickup)
	{
		return ($this->CourierPickup = $_CourierPickup);
	}
	/**
	 * Get CourierPickup
	 * @return string
	 */
	public function getCourierPickup()
	{
		return $this->CourierPickup;
	}
	/**
	 * Set DangerousGoodsType
	 * @param string DangerousGoodsType
	 * @return string
	 */
	public function setDangerousGoodsType($_DangerousGoodsType)
	{
		return ($this->DangerousGoodsType = $_DangerousGoodsType);
	}
	/**
	 * Get DangerousGoodsType
	 * @return string
	 */
	public function getDangerousGoodsType()
	{
		return $this->DangerousGoodsType;
	}
	/**
	 * Set SignatureOption
	 * @param string SignatureOption
	 * @return string
	 */
	public function setSignatureOption($_SignatureOption)
	{
		return ($this->SignatureOption = $_SignatureOption);
	}
	/**
	 * Get SignatureOption
	 * @return string
	 */
	public function getSignatureOption()
	{
		return $this->SignatureOption;
	}
	/**
	 * Set ReturnsShipmentIndicator
	 * @param string ReturnsShipmentIndicator
	 * @return string
	 */
	public function setReturnsShipmentIndicator($_ReturnsShipmentIndicator)
	{
		return ($this->ReturnsShipmentIndicator = $_ReturnsShipmentIndicator);
	}
	/**
	 * Get ReturnsShipmentIndicator
	 * @return string
	 */
	public function getReturnsShipmentIndicator()
	{
		return $this->ReturnsShipmentIndicator;
	}
	/**
	 * Set DimHeight
	 * @param string DimHeight
	 * @return string
	 */
	public function setDimHeight($_DimHeight)
	{
		return ($this->DimHeight = $_DimHeight);
	}
	/**
	 * Get DimHeight
	 * @return string
	 */
	public function getDimHeight()
	{
		return $this->DimHeight;
	}
	/**
	 * Set DimWidth
	 * @param string DimWidth
	 * @return string
	 */
	public function setDimWidth($_DimWidth)
	{
		return ($this->DimWidth = $_DimWidth);
	}
	/**
	 * Get DimWidth
	 * @return string
	 */
	public function getDimWidth()
	{
		return $this->DimWidth;
	}
	/**
	 * Set DimLength
	 * @param string DimLength
	 * @return string
	 */
	public function setDimLength($_DimLength)
	{
		return ($this->DimLength = $_DimLength);
	}
	/**
	 * Get DimLength
	 * @return string
	 */
	public function getDimLength()
	{
		return $this->DimLength;
	}
	/**
	 * Set CODFlag
	 * @param string CODFlag
	 * @return string
	 */
	public function setCODFlag($_CODFlag)
	{
		return ($this->CODFlag = $_CODFlag);
	}
	/**
	 * Get CODFlag
	 * @return string
	 */
	public function getCODFlag()
	{
		return $this->CODFlag;
	}
	/**
	 * Set Mode
	 * @param string Mode
	 * @return string
	 */
	public function setMode($_Mode)
	{
		return ($this->Mode = $_Mode);
	}
	/**
	 * Get Mode
	 * @return string
	 */
	public function getMode()
	{
		return $this->Mode;
	}
	/**
	 * Set Sort
	 * @param string Sort
	 * @return string
	 */
	public function setSort($_Sort)
	{
		return ($this->Sort = $_Sort);
	}
	/**
	 * Get Sort
	 * @return string
	 */
	public function getSort()
	{
		return $this->Sort;
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