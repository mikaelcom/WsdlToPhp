<?php
/**
 * Class file for SOPackTrackTypeTrackingInfo
 * @date 08/07/2012
 */
/**
 * Class SOPackTrackTypeTrackingInfo
 * @date 08/07/2012
 */
class SOPackTrackTypeTrackingInfo extends SOPackTrackWsdlClass
{
	/**
	 * The TrackingNumber
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $TrackingNumber;
	/**
	 * The ReferenceNumber
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ReferenceNumber;
	/**
	 * The DeliveredTo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $DeliveredTo;
	/**
	 * The DeliveryLocation
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $DeliveryLocation;
	/**
	 * The DeliveryDateTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $DeliveryDateTime;
	/**
	 * The SignedBy
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $SignedBy;
	/**
	 * The ServiceType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ServiceType;
	/**
	 * The Weight
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Weight;
	/**
	 * The Status
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Status;
	/**
	 * The EstDeliveryDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $EstDeliveryDate;
	/**
	 * The PurchaseOrderNumber
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PurchaseOrderNumber;
	/**
	 * The InvoiceNumber
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $InvoiceNumber;
	/**
	 * The AcceptDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AcceptDate;
	/**
	 * The AcceptTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AcceptTime;
	/**
	 * The ShipDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ShipDate;
	/**
	 * The ShipTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ShipTime;
	/**
	 * The DeliveryDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $DeliveryDate;
	/**
	 * The DeliveryTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $DeliveryTime;
	/**
	 * The Carrier
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Carrier;
	/**
	 * The CurrentLocation
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CurrentLocation;
	/**
	 * The Error
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOPackTrackTypeErr
	 */
	public $Error;
	/**
	 * Constructor
	 * @param string TrackingNumber
	 * @param string ReferenceNumber
	 * @param string DeliveredTo
	 * @param string DeliveryLocation
	 * @param string DeliveryDateTime
	 * @param string SignedBy
	 * @param string ServiceType
	 * @param string Weight
	 * @param string Status
	 * @param string EstDeliveryDate
	 * @param string PurchaseOrderNumber
	 * @param string InvoiceNumber
	 * @param string AcceptDate
	 * @param string AcceptTime
	 * @param string ShipDate
	 * @param string ShipTime
	 * @param string DeliveryDate
	 * @param string DeliveryTime
	 * @param string Carrier
	 * @param string CurrentLocation
	 * @param SOPackTrackTypeErr Error
	 * @return SOPackTrackTypeTrackingInfo
	 */
	public function __construct($_TrackingNumber = null,$_ReferenceNumber = null,$_DeliveredTo = null,$_DeliveryLocation = null,$_DeliveryDateTime = null,$_SignedBy = null,$_ServiceType = null,$_Weight = null,$_Status = null,$_EstDeliveryDate = null,$_PurchaseOrderNumber = null,$_InvoiceNumber = null,$_AcceptDate = null,$_AcceptTime = null,$_ShipDate = null,$_ShipTime = null,$_DeliveryDate = null,$_DeliveryTime = null,$_Carrier = null,$_CurrentLocation = null,$_Error = null)
	{
		parent::__construct(array('TrackingNumber'=>$_TrackingNumber,'ReferenceNumber'=>$_ReferenceNumber,'DeliveredTo'=>$_DeliveredTo,'DeliveryLocation'=>$_DeliveryLocation,'DeliveryDateTime'=>$_DeliveryDateTime,'SignedBy'=>$_SignedBy,'ServiceType'=>$_ServiceType,'Weight'=>$_Weight,'Status'=>$_Status,'EstDeliveryDate'=>$_EstDeliveryDate,'PurchaseOrderNumber'=>$_PurchaseOrderNumber,'InvoiceNumber'=>$_InvoiceNumber,'AcceptDate'=>$_AcceptDate,'AcceptTime'=>$_AcceptTime,'ShipDate'=>$_ShipDate,'ShipTime'=>$_ShipTime,'DeliveryDate'=>$_DeliveryDate,'DeliveryTime'=>$_DeliveryTime,'Carrier'=>$_Carrier,'CurrentLocation'=>$_CurrentLocation,'Error'=>$_Error));
	}
	/**
	 * Set TrackingNumber
	 * @param string TrackingNumber
	 * @return string
	 */
	public function setTrackingNumber($_TrackingNumber)
	{
		return ($this->TrackingNumber = $_TrackingNumber);
	}
	/**
	 * Get TrackingNumber
	 * @return string
	 */
	public function getTrackingNumber()
	{
		return $this->TrackingNumber;
	}
	/**
	 * Set ReferenceNumber
	 * @param string ReferenceNumber
	 * @return string
	 */
	public function setReferenceNumber($_ReferenceNumber)
	{
		return ($this->ReferenceNumber = $_ReferenceNumber);
	}
	/**
	 * Get ReferenceNumber
	 * @return string
	 */
	public function getReferenceNumber()
	{
		return $this->ReferenceNumber;
	}
	/**
	 * Set DeliveredTo
	 * @param string DeliveredTo
	 * @return string
	 */
	public function setDeliveredTo($_DeliveredTo)
	{
		return ($this->DeliveredTo = $_DeliveredTo);
	}
	/**
	 * Get DeliveredTo
	 * @return string
	 */
	public function getDeliveredTo()
	{
		return $this->DeliveredTo;
	}
	/**
	 * Set DeliveryLocation
	 * @param string DeliveryLocation
	 * @return string
	 */
	public function setDeliveryLocation($_DeliveryLocation)
	{
		return ($this->DeliveryLocation = $_DeliveryLocation);
	}
	/**
	 * Get DeliveryLocation
	 * @return string
	 */
	public function getDeliveryLocation()
	{
		return $this->DeliveryLocation;
	}
	/**
	 * Set DeliveryDateTime
	 * @param string DeliveryDateTime
	 * @return string
	 */
	public function setDeliveryDateTime($_DeliveryDateTime)
	{
		return ($this->DeliveryDateTime = $_DeliveryDateTime);
	}
	/**
	 * Get DeliveryDateTime
	 * @return string
	 */
	public function getDeliveryDateTime()
	{
		return $this->DeliveryDateTime;
	}
	/**
	 * Set SignedBy
	 * @param string SignedBy
	 * @return string
	 */
	public function setSignedBy($_SignedBy)
	{
		return ($this->SignedBy = $_SignedBy);
	}
	/**
	 * Get SignedBy
	 * @return string
	 */
	public function getSignedBy()
	{
		return $this->SignedBy;
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
	 * Set Weight
	 * @param string Weight
	 * @return string
	 */
	public function setWeight($_Weight)
	{
		return ($this->Weight = $_Weight);
	}
	/**
	 * Get Weight
	 * @return string
	 */
	public function getWeight()
	{
		return $this->Weight;
	}
	/**
	 * Set Status
	 * @param string Status
	 * @return string
	 */
	public function setStatus($_Status)
	{
		return ($this->Status = $_Status);
	}
	/**
	 * Get Status
	 * @return string
	 */
	public function getStatus()
	{
		return $this->Status;
	}
	/**
	 * Set EstDeliveryDate
	 * @param string EstDeliveryDate
	 * @return string
	 */
	public function setEstDeliveryDate($_EstDeliveryDate)
	{
		return ($this->EstDeliveryDate = $_EstDeliveryDate);
	}
	/**
	 * Get EstDeliveryDate
	 * @return string
	 */
	public function getEstDeliveryDate()
	{
		return $this->EstDeliveryDate;
	}
	/**
	 * Set PurchaseOrderNumber
	 * @param string PurchaseOrderNumber
	 * @return string
	 */
	public function setPurchaseOrderNumber($_PurchaseOrderNumber)
	{
		return ($this->PurchaseOrderNumber = $_PurchaseOrderNumber);
	}
	/**
	 * Get PurchaseOrderNumber
	 * @return string
	 */
	public function getPurchaseOrderNumber()
	{
		return $this->PurchaseOrderNumber;
	}
	/**
	 * Set InvoiceNumber
	 * @param string InvoiceNumber
	 * @return string
	 */
	public function setInvoiceNumber($_InvoiceNumber)
	{
		return ($this->InvoiceNumber = $_InvoiceNumber);
	}
	/**
	 * Get InvoiceNumber
	 * @return string
	 */
	public function getInvoiceNumber()
	{
		return $this->InvoiceNumber;
	}
	/**
	 * Set AcceptDate
	 * @param string AcceptDate
	 * @return string
	 */
	public function setAcceptDate($_AcceptDate)
	{
		return ($this->AcceptDate = $_AcceptDate);
	}
	/**
	 * Get AcceptDate
	 * @return string
	 */
	public function getAcceptDate()
	{
		return $this->AcceptDate;
	}
	/**
	 * Set AcceptTime
	 * @param string AcceptTime
	 * @return string
	 */
	public function setAcceptTime($_AcceptTime)
	{
		return ($this->AcceptTime = $_AcceptTime);
	}
	/**
	 * Get AcceptTime
	 * @return string
	 */
	public function getAcceptTime()
	{
		return $this->AcceptTime;
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
	 * Set ShipTime
	 * @param string ShipTime
	 * @return string
	 */
	public function setShipTime($_ShipTime)
	{
		return ($this->ShipTime = $_ShipTime);
	}
	/**
	 * Get ShipTime
	 * @return string
	 */
	public function getShipTime()
	{
		return $this->ShipTime;
	}
	/**
	 * Set DeliveryDate
	 * @param string DeliveryDate
	 * @return string
	 */
	public function setDeliveryDate($_DeliveryDate)
	{
		return ($this->DeliveryDate = $_DeliveryDate);
	}
	/**
	 * Get DeliveryDate
	 * @return string
	 */
	public function getDeliveryDate()
	{
		return $this->DeliveryDate;
	}
	/**
	 * Set DeliveryTime
	 * @param string DeliveryTime
	 * @return string
	 */
	public function setDeliveryTime($_DeliveryTime)
	{
		return ($this->DeliveryTime = $_DeliveryTime);
	}
	/**
	 * Get DeliveryTime
	 * @return string
	 */
	public function getDeliveryTime()
	{
		return $this->DeliveryTime;
	}
	/**
	 * Set Carrier
	 * @param string Carrier
	 * @return string
	 */
	public function setCarrier($_Carrier)
	{
		return ($this->Carrier = $_Carrier);
	}
	/**
	 * Get Carrier
	 * @return string
	 */
	public function getCarrier()
	{
		return $this->Carrier;
	}
	/**
	 * Set CurrentLocation
	 * @param string CurrentLocation
	 * @return string
	 */
	public function setCurrentLocation($_CurrentLocation)
	{
		return ($this->CurrentLocation = $_CurrentLocation);
	}
	/**
	 * Get CurrentLocation
	 * @return string
	 */
	public function getCurrentLocation()
	{
		return $this->CurrentLocation;
	}
	/**
	 * Set Error
	 * @param Err Error
	 * @return Err
	 */
	public function setError($_Error)
	{
		return ($this->Error = $_Error);
	}
	/**
	 * Get Error
	 * @return SOPackTrackTypeErr
	 */
	public function getError()
	{
		return $this->Error;
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