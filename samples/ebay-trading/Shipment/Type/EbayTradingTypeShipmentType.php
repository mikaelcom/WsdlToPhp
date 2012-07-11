<?php
/**
 * Class file for EbayTradingTypeShipmentType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeShipmentType
 * Documentation : 
 * @date 04/07/2012
 */
class EbayTradingTypeShipmentType extends EbayTradingWsdlClass
{
	/**
	 * The EstimatedDeliveryDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : 
	 * @var dateTime
	 */
	public $EstimatedDeliveryDate;
	/**
	 * The InsuredValue
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : 
	 * @var EbayTradingTypeAmountType
	 */
	public $InsuredValue;
	/**
	 * The PackageDepth
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Depth dimension of the package needed to ship the item after it is sold. <br> For calculated shipping only.
	 * @var EbayTradingTypeMeasureType
	 */
	public $PackageDepth;
	/**
	 * The PackageLength
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Length dimension of the package needed to ship the item after it is sold. <br> For calculated shipping only.
	 * @var EbayTradingTypeMeasureType
	 */
	public $PackageLength;
	/**
	 * The PackageWidth
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Width dimension of the package needed to ship the item after it is sold. <br> For calculated shipping only.
	 * @var EbayTradingTypeMeasureType
	 */
	public $PackageWidth;
	/**
	 * The PayPalShipmentID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : 
	 * @var string
	 */
	public $PayPalShipmentID;
	/**
	 * The ShipmentID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : 
	 * @var long
	 */
	public $ShipmentID;
	/**
	 * The PostageTotal
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : 
	 * @var EbayTradingTypeAmountType
	 */
	public $PostageTotal;
	/**
	 * The PrintedTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : 
	 * @var dateTime
	 */
	public $PrintedTime;
	/**
	 * The ShipFromAddress
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The address from which the item is being shipped.
	 * @var EbayTradingTypeAddressType
	 */
	public $ShipFromAddress;
	/**
	 * The ShippingAddress
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The address to which the item is to be shipped.
	 * @var EbayTradingTypeAddressType
	 */
	public $ShippingAddress;
	/**
	 * The ShippingCarrierUsed
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The shipping carrier used to ship the package. This value can be any combination of alphanumeric characters and it is not checked and verified by eBay. This field is required if ShipmentTrackingNumber is included in the call request. <br><br> ShippingCarrierUsed and ShipmentTrackingNumber are dependent upon each other. You must either specify both, or specify neither.
	 * @var string
	 */
	public $ShippingCarrierUsed;
	/**
	 * The ShippingFeature
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : 
	 * @var EbayTradingTypeShippingFeatureCodeType
	 */
	public $ShippingFeature;
	/**
	 * The ShippingPackage
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The size of the package used to ship the item(s). See ShippingPackageCodeType for its possible values. Input.
	 * @var EbayTradingTypeShippingPackageCodeType
	 */
	public $ShippingPackage;
	/**
	 * The ShippingServiceUsed
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The size of the package used to ship the item(s). See ShippingPackageCodeType for its possible values. Input.
	 * @var token
	 */
	public $ShippingServiceUsed;
	/**
	 * The ShipmentTrackingNumber
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The tracking number associated with one package of a shipment. The seller is responsible for the accuracy of the shipment tracking number. eBay verifies the tracking number is unique (across all of a seller's orders) and consistent with the numbering scheme used by the specified shipping carrier. eBay cannot verify the accuracy of the tracking number. This field is required if ShippingCarrierUsed is included in the call request. <br><br> Sellers can specify multiple tracking numbers for the same ShippingCarrierUsed by separating the tracking numbers with commas. <br><br> ShippingCarrierUsed and ShipmentTrackingNumber are dependent upon each other. You must either specify both, or specify neither.
	 * @var string
	 */
	public $ShipmentTrackingNumber;
	/**
	 * The WeightMajor
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : See the documentation regarding "Working with Item Weights". The 'unit' attribute can have a value of lbs.
	 * @var EbayTradingTypeMeasureType
	 */
	public $WeightMajor;
	/**
	 * The WeightMinor
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : See the documentation regarding "Working with Item Weights". The 'unit' attribute is optional and assumed to be the minor compared to the value of 'unit' in WeightMajor.
	 * @var EbayTradingTypeMeasureType
	 */
	public $WeightMinor;
	/**
	 * The ItemTransactionID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : 
	 * @var EbayTradingTypeItemTransactionIDType
	 */
	public $ItemTransactionID;
	/**
	 * The DeliveryDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Revise only
	 * @var dateTime
	 */
	public $DeliveryDate;
	/**
	 * The DeliveryStatus
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Revise only
	 * @var EbayTradingTypeShipmentDeliveryStatusCodeType
	 */
	public $DeliveryStatus;
	/**
	 * The RefundGrantedTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Revise only
	 * @var dateTime
	 */
	public $RefundGrantedTime;
	/**
	 * The RefundRequestedTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Revise only
	 * @var dateTime
	 */
	public $RefundRequestedTime;
	/**
	 * The Status
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Status, for revise only
	 * @var EbayTradingTypeShipmentStatusCodeType
	 */
	public $Status;
	/**
	 * The ShippedTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The date and time that the seller handed off the package(s) to the shipping carrier. If this field is not included in the request, the timestamp of the call execution is used as the shipped time. Note that sellers have the ability to set this value up to 3 calendar days in the future.
	 * @var dateTime
	 */
	public $ShippedTime;
	/**
	 * The Notes
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This string field allows a seller to provide notes to the buyer regarding shipment of a Half.com item. Only alphanumeric characters can be used in this field. This is an optional field that is only applicable to Half.com items.
	 * @var string
	 */
	public $Notes;
	/**
	 * The ShipmentTrackingDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Container consisting of the tracking number and shipping carrier associated with the shipment of one item (package). <br><br> Because an order can have multiple line items and/or packages, there can be multiple <b>ShipmentTrackingDetails</b> containers under the <b>Shipment</b> container.
	 * @var EbayTradingTypeShipmentTrackingDetailsType
	 */
	public $ShipmentTrackingDetails;
	/**
	 * The ShipmentLineItem
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains information about one or more order line items in a Global Exchange package. Required or returned if the value of <strong>ShippingCarrierUsed</strong> is GlobalShipping_MultiCarrier. <br/><br/> <span class="tablenote"> <strong>Note:</strong> The Global Exchange program is available for testing with simulated responses in the Sandbox in mid-June 2012. The full functionality of the Global Exchange program will be available in August 2012. </span>
	 * @var EbayTradingTypeShipmentLineItemType
	 */
	public $ShipmentLineItem;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param dateTime EstimatedDeliveryDate
	 * @param EbayTradingTypeAmountType InsuredValue
	 * @param EbayTradingTypeMeasureType PackageDepth
	 * @param EbayTradingTypeMeasureType PackageLength
	 * @param EbayTradingTypeMeasureType PackageWidth
	 * @param string PayPalShipmentID
	 * @param long ShipmentID
	 * @param EbayTradingTypeAmountType PostageTotal
	 * @param dateTime PrintedTime
	 * @param EbayTradingTypeAddressType ShipFromAddress
	 * @param EbayTradingTypeAddressType ShippingAddress
	 * @param string ShippingCarrierUsed
	 * @param EbayTradingTypeShippingFeatureCodeType ShippingFeature
	 * @param EbayTradingTypeShippingPackageCodeType ShippingPackage
	 * @param token ShippingServiceUsed
	 * @param string ShipmentTrackingNumber
	 * @param EbayTradingTypeMeasureType WeightMajor
	 * @param EbayTradingTypeMeasureType WeightMinor
	 * @param EbayTradingTypeItemTransactionIDType ItemTransactionID
	 * @param dateTime DeliveryDate
	 * @param EbayTradingTypeShipmentDeliveryStatusCodeType DeliveryStatus
	 * @param dateTime RefundGrantedTime
	 * @param dateTime RefundRequestedTime
	 * @param EbayTradingTypeShipmentStatusCodeType Status
	 * @param dateTime ShippedTime
	 * @param string Notes
	 * @param EbayTradingTypeShipmentTrackingDetailsType ShipmentTrackingDetails
	 * @param EbayTradingTypeShipmentLineItemType ShipmentLineItem
	 * @param DOMDocument any
	 * @return EbayTradingTypeShipmentType
	 */
	public function __construct($_EstimatedDeliveryDate = null,$_InsuredValue = null,$_PackageDepth = null,$_PackageLength = null,$_PackageWidth = null,$_PayPalShipmentID = null,$_ShipmentID = null,$_PostageTotal = null,$_PrintedTime = null,$_ShipFromAddress = null,$_ShippingAddress = null,$_ShippingCarrierUsed = null,$_ShippingFeature = null,$_ShippingPackage = null,$_ShippingServiceUsed = null,$_ShipmentTrackingNumber = null,$_WeightMajor = null,$_WeightMinor = null,$_ItemTransactionID = null,$_DeliveryDate = null,$_DeliveryStatus = null,$_RefundGrantedTime = null,$_RefundRequestedTime = null,$_Status = null,$_ShippedTime = null,$_Notes = null,$_ShipmentTrackingDetails = null,$_ShipmentLineItem = null,$_any = null)
	{
		parent::__construct(array('EstimatedDeliveryDate'=>$_EstimatedDeliveryDate,'InsuredValue'=>$_InsuredValue,'PackageDepth'=>$_PackageDepth,'PackageLength'=>$_PackageLength,'PackageWidth'=>$_PackageWidth,'PayPalShipmentID'=>$_PayPalShipmentID,'ShipmentID'=>$_ShipmentID,'PostageTotal'=>$_PostageTotal,'PrintedTime'=>$_PrintedTime,'ShipFromAddress'=>$_ShipFromAddress,'ShippingAddress'=>$_ShippingAddress,'ShippingCarrierUsed'=>$_ShippingCarrierUsed,'ShippingFeature'=>$_ShippingFeature,'ShippingPackage'=>$_ShippingPackage,'ShippingServiceUsed'=>$_ShippingServiceUsed,'ShipmentTrackingNumber'=>$_ShipmentTrackingNumber,'WeightMajor'=>$_WeightMajor,'WeightMinor'=>$_WeightMinor,'ItemTransactionID'=>$_ItemTransactionID,'DeliveryDate'=>$_DeliveryDate,'DeliveryStatus'=>$_DeliveryStatus,'RefundGrantedTime'=>$_RefundGrantedTime,'RefundRequestedTime'=>$_RefundRequestedTime,'Status'=>$_Status,'ShippedTime'=>$_ShippedTime,'Notes'=>$_Notes,'ShipmentTrackingDetails'=>$_ShipmentTrackingDetails,'ShipmentLineItem'=>$_ShipmentLineItem,'any'=>$_any));
	}
	/**
	 * Set EstimatedDeliveryDate
	 * @param dateTime EstimatedDeliveryDate
	 * @return dateTime
	 */
	public function setEstimatedDeliveryDate($_EstimatedDeliveryDate)
	{
		return ($this->EstimatedDeliveryDate = $_EstimatedDeliveryDate);
	}
	/**
	 * Get EstimatedDeliveryDate
	 * @return dateTime
	 */
	public function getEstimatedDeliveryDate()
	{
		return $this->EstimatedDeliveryDate;
	}
	/**
	 * Set InsuredValue
	 * @param AmountType InsuredValue
	 * @return AmountType
	 */
	public function setInsuredValue($_InsuredValue)
	{
		return ($this->InsuredValue = $_InsuredValue);
	}
	/**
	 * Get InsuredValue
	 * @return EbayTradingTypeAmountType
	 */
	public function getInsuredValue()
	{
		return $this->InsuredValue;
	}
	/**
	 * Set PackageDepth
	 * @param MeasureType PackageDepth
	 * @return MeasureType
	 */
	public function setPackageDepth($_PackageDepth)
	{
		return ($this->PackageDepth = $_PackageDepth);
	}
	/**
	 * Get PackageDepth
	 * @return EbayTradingTypeMeasureType
	 */
	public function getPackageDepth()
	{
		return $this->PackageDepth;
	}
	/**
	 * Set PackageLength
	 * @param MeasureType PackageLength
	 * @return MeasureType
	 */
	public function setPackageLength($_PackageLength)
	{
		return ($this->PackageLength = $_PackageLength);
	}
	/**
	 * Get PackageLength
	 * @return EbayTradingTypeMeasureType
	 */
	public function getPackageLength()
	{
		return $this->PackageLength;
	}
	/**
	 * Set PackageWidth
	 * @param MeasureType PackageWidth
	 * @return MeasureType
	 */
	public function setPackageWidth($_PackageWidth)
	{
		return ($this->PackageWidth = $_PackageWidth);
	}
	/**
	 * Get PackageWidth
	 * @return EbayTradingTypeMeasureType
	 */
	public function getPackageWidth()
	{
		return $this->PackageWidth;
	}
	/**
	 * Set PayPalShipmentID
	 * @param string PayPalShipmentID
	 * @return string
	 */
	public function setPayPalShipmentID($_PayPalShipmentID)
	{
		return ($this->PayPalShipmentID = $_PayPalShipmentID);
	}
	/**
	 * Get PayPalShipmentID
	 * @return string
	 */
	public function getPayPalShipmentID()
	{
		return $this->PayPalShipmentID;
	}
	/**
	 * Set ShipmentID
	 * @param long ShipmentID
	 * @return long
	 */
	public function setShipmentID($_ShipmentID)
	{
		return ($this->ShipmentID = $_ShipmentID);
	}
	/**
	 * Get ShipmentID
	 * @return long
	 */
	public function getShipmentID()
	{
		return $this->ShipmentID;
	}
	/**
	 * Set PostageTotal
	 * @param AmountType PostageTotal
	 * @return AmountType
	 */
	public function setPostageTotal($_PostageTotal)
	{
		return ($this->PostageTotal = $_PostageTotal);
	}
	/**
	 * Get PostageTotal
	 * @return EbayTradingTypeAmountType
	 */
	public function getPostageTotal()
	{
		return $this->PostageTotal;
	}
	/**
	 * Set PrintedTime
	 * @param dateTime PrintedTime
	 * @return dateTime
	 */
	public function setPrintedTime($_PrintedTime)
	{
		return ($this->PrintedTime = $_PrintedTime);
	}
	/**
	 * Get PrintedTime
	 * @return dateTime
	 */
	public function getPrintedTime()
	{
		return $this->PrintedTime;
	}
	/**
	 * Set ShipFromAddress
	 * @param AddressType ShipFromAddress
	 * @return AddressType
	 */
	public function setShipFromAddress($_ShipFromAddress)
	{
		return ($this->ShipFromAddress = $_ShipFromAddress);
	}
	/**
	 * Get ShipFromAddress
	 * @return EbayTradingTypeAddressType
	 */
	public function getShipFromAddress()
	{
		return $this->ShipFromAddress;
	}
	/**
	 * Set ShippingAddress
	 * @param AddressType ShippingAddress
	 * @return AddressType
	 */
	public function setShippingAddress($_ShippingAddress)
	{
		return ($this->ShippingAddress = $_ShippingAddress);
	}
	/**
	 * Get ShippingAddress
	 * @return EbayTradingTypeAddressType
	 */
	public function getShippingAddress()
	{
		return $this->ShippingAddress;
	}
	/**
	 * Set ShippingCarrierUsed
	 * @param string ShippingCarrierUsed
	 * @return string
	 */
	public function setShippingCarrierUsed($_ShippingCarrierUsed)
	{
		return ($this->ShippingCarrierUsed = $_ShippingCarrierUsed);
	}
	/**
	 * Get ShippingCarrierUsed
	 * @return string
	 */
	public function getShippingCarrierUsed()
	{
		return $this->ShippingCarrierUsed;
	}
	/**
	 * Set ShippingFeature
	 * @param ShippingFeatureCodeType ShippingFeature
	 * @return ShippingFeatureCodeType
	 */
	public function setShippingFeature($_ShippingFeature)
	{
		return ($this->ShippingFeature = EbayTradingTypeShippingFeatureCodeType::valueIsValid($_ShippingFeature)?$_ShippingFeature:null);
	}
	/**
	 * Get ShippingFeature
	 * @return EbayTradingTypeShippingFeatureCodeType
	 */
	public function getShippingFeature()
	{
		return $this->ShippingFeature;
	}
	/**
	 * Set ShippingPackage
	 * @param ShippingPackageCodeType ShippingPackage
	 * @return ShippingPackageCodeType
	 */
	public function setShippingPackage($_ShippingPackage)
	{
		return ($this->ShippingPackage = EbayTradingTypeShippingPackageCodeType::valueIsValid($_ShippingPackage)?$_ShippingPackage:null);
	}
	/**
	 * Get ShippingPackage
	 * @return EbayTradingTypeShippingPackageCodeType
	 */
	public function getShippingPackage()
	{
		return $this->ShippingPackage;
	}
	/**
	 * Set ShippingServiceUsed
	 * @param token ShippingServiceUsed
	 * @return token
	 */
	public function setShippingServiceUsed($_ShippingServiceUsed)
	{
		return ($this->ShippingServiceUsed = $_ShippingServiceUsed);
	}
	/**
	 * Get ShippingServiceUsed
	 * @return token
	 */
	public function getShippingServiceUsed()
	{
		return $this->ShippingServiceUsed;
	}
	/**
	 * Set ShipmentTrackingNumber
	 * @param string ShipmentTrackingNumber
	 * @return string
	 */
	public function setShipmentTrackingNumber($_ShipmentTrackingNumber)
	{
		return ($this->ShipmentTrackingNumber = $_ShipmentTrackingNumber);
	}
	/**
	 * Get ShipmentTrackingNumber
	 * @return string
	 */
	public function getShipmentTrackingNumber()
	{
		return $this->ShipmentTrackingNumber;
	}
	/**
	 * Set WeightMajor
	 * @param MeasureType WeightMajor
	 * @return MeasureType
	 */
	public function setWeightMajor($_WeightMajor)
	{
		return ($this->WeightMajor = $_WeightMajor);
	}
	/**
	 * Get WeightMajor
	 * @return EbayTradingTypeMeasureType
	 */
	public function getWeightMajor()
	{
		return $this->WeightMajor;
	}
	/**
	 * Set WeightMinor
	 * @param MeasureType WeightMinor
	 * @return MeasureType
	 */
	public function setWeightMinor($_WeightMinor)
	{
		return ($this->WeightMinor = $_WeightMinor);
	}
	/**
	 * Get WeightMinor
	 * @return EbayTradingTypeMeasureType
	 */
	public function getWeightMinor()
	{
		return $this->WeightMinor;
	}
	/**
	 * Set ItemTransactionID
	 * @param ItemTransactionIDType ItemTransactionID
	 * @return ItemTransactionIDType
	 */
	public function setItemTransactionID($_ItemTransactionID)
	{
		return ($this->ItemTransactionID = $_ItemTransactionID);
	}
	/**
	 * Get ItemTransactionID
	 * @return EbayTradingTypeItemTransactionIDType
	 */
	public function getItemTransactionID()
	{
		return $this->ItemTransactionID;
	}
	/**
	 * Set DeliveryDate
	 * @param dateTime DeliveryDate
	 * @return dateTime
	 */
	public function setDeliveryDate($_DeliveryDate)
	{
		return ($this->DeliveryDate = $_DeliveryDate);
	}
	/**
	 * Get DeliveryDate
	 * @return dateTime
	 */
	public function getDeliveryDate()
	{
		return $this->DeliveryDate;
	}
	/**
	 * Set DeliveryStatus
	 * @param ShipmentDeliveryStatusCodeType DeliveryStatus
	 * @return ShipmentDeliveryStatusCodeType
	 */
	public function setDeliveryStatus($_DeliveryStatus)
	{
		return ($this->DeliveryStatus = EbayTradingTypeShipmentDeliveryStatusCodeType::valueIsValid($_DeliveryStatus)?$_DeliveryStatus:null);
	}
	/**
	 * Get DeliveryStatus
	 * @return EbayTradingTypeShipmentDeliveryStatusCodeType
	 */
	public function getDeliveryStatus()
	{
		return $this->DeliveryStatus;
	}
	/**
	 * Set RefundGrantedTime
	 * @param dateTime RefundGrantedTime
	 * @return dateTime
	 */
	public function setRefundGrantedTime($_RefundGrantedTime)
	{
		return ($this->RefundGrantedTime = $_RefundGrantedTime);
	}
	/**
	 * Get RefundGrantedTime
	 * @return dateTime
	 */
	public function getRefundGrantedTime()
	{
		return $this->RefundGrantedTime;
	}
	/**
	 * Set RefundRequestedTime
	 * @param dateTime RefundRequestedTime
	 * @return dateTime
	 */
	public function setRefundRequestedTime($_RefundRequestedTime)
	{
		return ($this->RefundRequestedTime = $_RefundRequestedTime);
	}
	/**
	 * Get RefundRequestedTime
	 * @return dateTime
	 */
	public function getRefundRequestedTime()
	{
		return $this->RefundRequestedTime;
	}
	/**
	 * Set Status
	 * @param ShipmentStatusCodeType Status
	 * @return ShipmentStatusCodeType
	 */
	public function setStatus($_Status)
	{
		return ($this->Status = EbayTradingTypeShipmentStatusCodeType::valueIsValid($_Status)?$_Status:null);
	}
	/**
	 * Get Status
	 * @return EbayTradingTypeShipmentStatusCodeType
	 */
	public function getStatus()
	{
		return $this->Status;
	}
	/**
	 * Set ShippedTime
	 * @param dateTime ShippedTime
	 * @return dateTime
	 */
	public function setShippedTime($_ShippedTime)
	{
		return ($this->ShippedTime = $_ShippedTime);
	}
	/**
	 * Get ShippedTime
	 * @return dateTime
	 */
	public function getShippedTime()
	{
		return $this->ShippedTime;
	}
	/**
	 * Set Notes
	 * @param string Notes
	 * @return string
	 */
	public function setNotes($_Notes)
	{
		return ($this->Notes = $_Notes);
	}
	/**
	 * Get Notes
	 * @return string
	 */
	public function getNotes()
	{
		return $this->Notes;
	}
	/**
	 * Set ShipmentTrackingDetails
	 * @param ShipmentTrackingDetailsType ShipmentTrackingDetails
	 * @return ShipmentTrackingDetailsType
	 */
	public function setShipmentTrackingDetails($_ShipmentTrackingDetails)
	{
		return ($this->ShipmentTrackingDetails = $_ShipmentTrackingDetails);
	}
	/**
	 * Get ShipmentTrackingDetails
	 * @return EbayTradingTypeShipmentTrackingDetailsType
	 */
	public function getShipmentTrackingDetails()
	{
		return $this->ShipmentTrackingDetails;
	}
	/**
	 * Set ShipmentLineItem
	 * @param ShipmentLineItemType ShipmentLineItem
	 * @return ShipmentLineItemType
	 */
	public function setShipmentLineItem($_ShipmentLineItem)
	{
		return ($this->ShipmentLineItem = $_ShipmentLineItem);
	}
	/**
	 * Get ShipmentLineItem
	 * @return EbayTradingTypeShipmentLineItemType
	 */
	public function getShipmentLineItem()
	{
		return $this->ShipmentLineItem;
	}
	/**
	 * Set any
	 * @param DOMDocument any
	 * @return DOMDocument
	 */
	public function setAny($_any)
	{
		return ($this->any = $_any);
	}
	/**
	 * Get any
	 * @return DOMDocument
	 */
	public function getAny()
	{
		if(!($this->any instanceof DOMDocument))
		{
			$dom = new DOMDocument('1.0','UTF-8');
			$dom->formatOutput = true;
			$dom->loadXML($this->any);
			$this->setAny($dom);
		}
		return $this->any;
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