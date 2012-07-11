<?php
/**
 * Class file for XWebOrderStatusTypeResponseOrderStatusDetailType
 * @date 09/07/2012
 */
/**
 * Class XWebOrderStatusTypeResponseOrderStatusDetailType
 * @date 09/07/2012
 */
class XWebOrderStatusTypeResponseOrderStatusDetailType extends XWebOrderStatusWsdlClass
{
	/**
	 * The PurposeCode
	 * @var PurposeCode
	 */
	public $PurposeCode;
	/**
	 * The RefInfo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var XWebOrderStatusTypeResponseRefInfoType
	 */
	public $RefInfo;
	/**
	 * The ErrorInfo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var XWebOrderStatusTypeResponseErrorInfoType
	 */
	public $ErrorInfo;
	/**
	 * The OrderStatus
	 * @var OrderStatus
	 */
	public $OrderStatus;
	/**
	 * The Terms
	 * @var Terms
	 */
	public $Terms;
	/**
	 * The CurrencyType
	 * @var CurrencyType
	 */
	public $CurrencyType;
	/**
	 * The ShipmentDispQual
	 * @var ShipmentDispQual
	 */
	public $ShipmentDispQual;
	/**
	 * The ShipmentDisp
	 * @var ShipmentDisp
	 */
	public $ShipmentDisp;
	/**
	 * The PackageDispQual
	 * @var PackageDispQual
	 */
	public $PackageDispQual;
	/**
	 * The PackageDisp
	 * @var PackageDisp
	 */
	public $PackageDisp;
	/**
	 * The BillToAcctNbr
	 * @var BillToAcctNbr
	 */
	public $BillToAcctNbr;
	/**
	 * The ShipToName
	 * @var ShipToName
	 */
	public $ShipToName;
	/**
	 * The ShipToAddr1
	 * @var ShipToAddr1
	 */
	public $ShipToAddr1;
	/**
	 * The ShipToAddr2
	 * @var ShipToAddr2
	 */
	public $ShipToAddr2;
	/**
	 * The ShipToAddr3
	 * @var ShipToAddr3
	 */
	public $ShipToAddr3;
	/**
	 * The ShipToCity
	 * @var ShipToCity
	 */
	public $ShipToCity;
	/**
	 * The ShipToStateProv
	 * @var ShipToStateProv
	 */
	public $ShipToStateProv;
	/**
	 * The ShipToPostalCode
	 * @var ShipToPostalCode
	 */
	public $ShipToPostalCode;
	/**
	 * The ContactName
	 * @var ContactName
	 */
	public $ContactName;
	/**
	 * The InvoiceTotal
	 * @var InvoiceTotal
	 */
	public $InvoiceTotal;
	/**
	 * The StateFee
	 * @var StateFee
	 */
	public $StateFee;
	/**
	 * The EstimatedShipDate
	 * @var EstimatedShipDate
	 */
	public $EstimatedShipDate;
	/**
	 * The LineInfo
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : unbounded
	 * @var XWebOrderStatusTypeResponseLineInfoType
	 */
	public $LineInfo;
	/**
	 * The NbrOfOrderLines
	 * @var NbrOfOrderLines
	 */
	public $NbrOfOrderLines;
	/**
	 * Constructor
	 * @param PurposeCode PurposeCode
	 * @param XWebOrderStatusTypeResponseRefInfoType RefInfo
	 * @param XWebOrderStatusTypeResponseErrorInfoType ErrorInfo
	 * @param OrderStatus OrderStatus
	 * @param Terms Terms
	 * @param CurrencyType CurrencyType
	 * @param ShipmentDispQual ShipmentDispQual
	 * @param ShipmentDisp ShipmentDisp
	 * @param PackageDispQual PackageDispQual
	 * @param PackageDisp PackageDisp
	 * @param BillToAcctNbr BillToAcctNbr
	 * @param ShipToName ShipToName
	 * @param ShipToAddr1 ShipToAddr1
	 * @param ShipToAddr2 ShipToAddr2
	 * @param ShipToAddr3 ShipToAddr3
	 * @param ShipToCity ShipToCity
	 * @param ShipToStateProv ShipToStateProv
	 * @param ShipToPostalCode ShipToPostalCode
	 * @param ContactName ContactName
	 * @param InvoiceTotal InvoiceTotal
	 * @param StateFee StateFee
	 * @param EstimatedShipDate EstimatedShipDate
	 * @param XWebOrderStatusTypeResponseLineInfoType LineInfo
	 * @param NbrOfOrderLines NbrOfOrderLines
	 * @return XWebOrderStatusTypeResponseOrderStatusDetailType
	 */
	public function __construct($_PurposeCode = null,$_RefInfo = null,$_ErrorInfo = null,$_OrderStatus = null,$_Terms = null,$_CurrencyType = null,$_ShipmentDispQual = null,$_ShipmentDisp = null,$_PackageDispQual = null,$_PackageDisp = null,$_BillToAcctNbr = null,$_ShipToName = null,$_ShipToAddr1 = null,$_ShipToAddr2 = null,$_ShipToAddr3 = null,$_ShipToCity = null,$_ShipToStateProv = null,$_ShipToPostalCode = null,$_ContactName = null,$_InvoiceTotal = null,$_StateFee = null,$_EstimatedShipDate = null,$_LineInfo,$_NbrOfOrderLines = null)
	{
		parent::__construct(array('PurposeCode'=>$_PurposeCode,'RefInfo'=>$_RefInfo,'ErrorInfo'=>$_ErrorInfo,'OrderStatus'=>$_OrderStatus,'Terms'=>$_Terms,'CurrencyType'=>$_CurrencyType,'ShipmentDispQual'=>$_ShipmentDispQual,'ShipmentDisp'=>$_ShipmentDisp,'PackageDispQual'=>$_PackageDispQual,'PackageDisp'=>$_PackageDisp,'BillToAcctNbr'=>$_BillToAcctNbr,'ShipToName'=>$_ShipToName,'ShipToAddr1'=>$_ShipToAddr1,'ShipToAddr2'=>$_ShipToAddr2,'ShipToAddr3'=>$_ShipToAddr3,'ShipToCity'=>$_ShipToCity,'ShipToStateProv'=>$_ShipToStateProv,'ShipToPostalCode'=>$_ShipToPostalCode,'ContactName'=>$_ContactName,'InvoiceTotal'=>$_InvoiceTotal,'StateFee'=>$_StateFee,'EstimatedShipDate'=>$_EstimatedShipDate,'LineInfo'=>$_LineInfo,'NbrOfOrderLines'=>$_NbrOfOrderLines));
	}
	/**
	 * Set PurposeCode
	 * @param PurposeCode PurposeCode
	 * @return PurposeCode
	 */
	public function setPurposeCode($_PurposeCode)
	{
		return ($this->PurposeCode = $_PurposeCode);
	}
	/**
	 * Get PurposeCode
	 * @return PurposeCode
	 */
	public function getPurposeCode()
	{
		return $this->PurposeCode;
	}
	/**
	 * Set RefInfo
	 * @param ResponseRefInfoType RefInfo
	 * @return ResponseRefInfoType
	 */
	public function setRefInfo($_RefInfo)
	{
		return ($this->RefInfo = $_RefInfo);
	}
	/**
	 * Get RefInfo
	 * @return XWebOrderStatusTypeResponseRefInfoType
	 */
	public function getRefInfo()
	{
		return $this->RefInfo;
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
	 * @return XWebOrderStatusTypeResponseErrorInfoType
	 */
	public function getErrorInfo()
	{
		return $this->ErrorInfo;
	}
	/**
	 * Set OrderStatus
	 * @param OrderStatus OrderStatus
	 * @return OrderStatus
	 */
	public function setOrderStatus($_OrderStatus)
	{
		return ($this->OrderStatus = $_OrderStatus);
	}
	/**
	 * Get OrderStatus
	 * @return OrderStatus
	 */
	public function getOrderStatus()
	{
		return $this->OrderStatus;
	}
	/**
	 * Set Terms
	 * @param Terms Terms
	 * @return Terms
	 */
	public function setTerms($_Terms)
	{
		return ($this->Terms = $_Terms);
	}
	/**
	 * Get Terms
	 * @return Terms
	 */
	public function getTerms()
	{
		return $this->Terms;
	}
	/**
	 * Set CurrencyType
	 * @param CurrencyType CurrencyType
	 * @return CurrencyType
	 */
	public function setCurrencyType($_CurrencyType)
	{
		return ($this->CurrencyType = $_CurrencyType);
	}
	/**
	 * Get CurrencyType
	 * @return CurrencyType
	 */
	public function getCurrencyType()
	{
		return $this->CurrencyType;
	}
	/**
	 * Set ShipmentDispQual
	 * @param ShipmentDispQual ShipmentDispQual
	 * @return ShipmentDispQual
	 */
	public function setShipmentDispQual($_ShipmentDispQual)
	{
		return ($this->ShipmentDispQual = $_ShipmentDispQual);
	}
	/**
	 * Get ShipmentDispQual
	 * @return ShipmentDispQual
	 */
	public function getShipmentDispQual()
	{
		return $this->ShipmentDispQual;
	}
	/**
	 * Set ShipmentDisp
	 * @param ShipmentDisp ShipmentDisp
	 * @return ShipmentDisp
	 */
	public function setShipmentDisp($_ShipmentDisp)
	{
		return ($this->ShipmentDisp = $_ShipmentDisp);
	}
	/**
	 * Get ShipmentDisp
	 * @return ShipmentDisp
	 */
	public function getShipmentDisp()
	{
		return $this->ShipmentDisp;
	}
	/**
	 * Set PackageDispQual
	 * @param PackageDispQual PackageDispQual
	 * @return PackageDispQual
	 */
	public function setPackageDispQual($_PackageDispQual)
	{
		return ($this->PackageDispQual = $_PackageDispQual);
	}
	/**
	 * Get PackageDispQual
	 * @return PackageDispQual
	 */
	public function getPackageDispQual()
	{
		return $this->PackageDispQual;
	}
	/**
	 * Set PackageDisp
	 * @param PackageDisp PackageDisp
	 * @return PackageDisp
	 */
	public function setPackageDisp($_PackageDisp)
	{
		return ($this->PackageDisp = $_PackageDisp);
	}
	/**
	 * Get PackageDisp
	 * @return PackageDisp
	 */
	public function getPackageDisp()
	{
		return $this->PackageDisp;
	}
	/**
	 * Set BillToAcctNbr
	 * @param BillToAcctNbr BillToAcctNbr
	 * @return BillToAcctNbr
	 */
	public function setBillToAcctNbr($_BillToAcctNbr)
	{
		return ($this->BillToAcctNbr = $_BillToAcctNbr);
	}
	/**
	 * Get BillToAcctNbr
	 * @return BillToAcctNbr
	 */
	public function getBillToAcctNbr()
	{
		return $this->BillToAcctNbr;
	}
	/**
	 * Set ShipToName
	 * @param ShipToName ShipToName
	 * @return ShipToName
	 */
	public function setShipToName($_ShipToName)
	{
		return ($this->ShipToName = $_ShipToName);
	}
	/**
	 * Get ShipToName
	 * @return ShipToName
	 */
	public function getShipToName()
	{
		return $this->ShipToName;
	}
	/**
	 * Set ShipToAddr1
	 * @param ShipToAddr1 ShipToAddr1
	 * @return ShipToAddr1
	 */
	public function setShipToAddr1($_ShipToAddr1)
	{
		return ($this->ShipToAddr1 = $_ShipToAddr1);
	}
	/**
	 * Get ShipToAddr1
	 * @return ShipToAddr1
	 */
	public function getShipToAddr1()
	{
		return $this->ShipToAddr1;
	}
	/**
	 * Set ShipToAddr2
	 * @param ShipToAddr2 ShipToAddr2
	 * @return ShipToAddr2
	 */
	public function setShipToAddr2($_ShipToAddr2)
	{
		return ($this->ShipToAddr2 = $_ShipToAddr2);
	}
	/**
	 * Get ShipToAddr2
	 * @return ShipToAddr2
	 */
	public function getShipToAddr2()
	{
		return $this->ShipToAddr2;
	}
	/**
	 * Set ShipToAddr3
	 * @param ShipToAddr3 ShipToAddr3
	 * @return ShipToAddr3
	 */
	public function setShipToAddr3($_ShipToAddr3)
	{
		return ($this->ShipToAddr3 = $_ShipToAddr3);
	}
	/**
	 * Get ShipToAddr3
	 * @return ShipToAddr3
	 */
	public function getShipToAddr3()
	{
		return $this->ShipToAddr3;
	}
	/**
	 * Set ShipToCity
	 * @param ShipToCity ShipToCity
	 * @return ShipToCity
	 */
	public function setShipToCity($_ShipToCity)
	{
		return ($this->ShipToCity = $_ShipToCity);
	}
	/**
	 * Get ShipToCity
	 * @return ShipToCity
	 */
	public function getShipToCity()
	{
		return $this->ShipToCity;
	}
	/**
	 * Set ShipToStateProv
	 * @param ShipToStateProv ShipToStateProv
	 * @return ShipToStateProv
	 */
	public function setShipToStateProv($_ShipToStateProv)
	{
		return ($this->ShipToStateProv = $_ShipToStateProv);
	}
	/**
	 * Get ShipToStateProv
	 * @return ShipToStateProv
	 */
	public function getShipToStateProv()
	{
		return $this->ShipToStateProv;
	}
	/**
	 * Set ShipToPostalCode
	 * @param ShipToPostalCode ShipToPostalCode
	 * @return ShipToPostalCode
	 */
	public function setShipToPostalCode($_ShipToPostalCode)
	{
		return ($this->ShipToPostalCode = $_ShipToPostalCode);
	}
	/**
	 * Get ShipToPostalCode
	 * @return ShipToPostalCode
	 */
	public function getShipToPostalCode()
	{
		return $this->ShipToPostalCode;
	}
	/**
	 * Set ContactName
	 * @param ContactName ContactName
	 * @return ContactName
	 */
	public function setContactName($_ContactName)
	{
		return ($this->ContactName = $_ContactName);
	}
	/**
	 * Get ContactName
	 * @return ContactName
	 */
	public function getContactName()
	{
		return $this->ContactName;
	}
	/**
	 * Set InvoiceTotal
	 * @param InvoiceTotal InvoiceTotal
	 * @return InvoiceTotal
	 */
	public function setInvoiceTotal($_InvoiceTotal)
	{
		return ($this->InvoiceTotal = $_InvoiceTotal);
	}
	/**
	 * Get InvoiceTotal
	 * @return InvoiceTotal
	 */
	public function getInvoiceTotal()
	{
		return $this->InvoiceTotal;
	}
	/**
	 * Set StateFee
	 * @param StateFee StateFee
	 * @return StateFee
	 */
	public function setStateFee($_StateFee)
	{
		return ($this->StateFee = $_StateFee);
	}
	/**
	 * Get StateFee
	 * @return StateFee
	 */
	public function getStateFee()
	{
		return $this->StateFee;
	}
	/**
	 * Set EstimatedShipDate
	 * @param EstimatedShipDate EstimatedShipDate
	 * @return EstimatedShipDate
	 */
	public function setEstimatedShipDate($_EstimatedShipDate)
	{
		return ($this->EstimatedShipDate = $_EstimatedShipDate);
	}
	/**
	 * Get EstimatedShipDate
	 * @return EstimatedShipDate
	 */
	public function getEstimatedShipDate()
	{
		return $this->EstimatedShipDate;
	}
	/**
	 * Set LineInfo
	 * @param ResponseLineInfoType LineInfo
	 * @return ResponseLineInfoType
	 */
	public function setLineInfo($_LineInfo)
	{
		return ($this->LineInfo = $_LineInfo);
	}
	/**
	 * Get LineInfo
	 * @return XWebOrderStatusTypeResponseLineInfoType
	 */
	public function getLineInfo()
	{
		return $this->LineInfo;
	}
	/**
	 * Set NbrOfOrderLines
	 * @param NbrOfOrderLines NbrOfOrderLines
	 * @return NbrOfOrderLines
	 */
	public function setNbrOfOrderLines($_NbrOfOrderLines)
	{
		return ($this->NbrOfOrderLines = $_NbrOfOrderLines);
	}
	/**
	 * Get NbrOfOrderLines
	 * @return NbrOfOrderLines
	 */
	public function getNbrOfOrderLines()
	{
		return $this->NbrOfOrderLines;
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