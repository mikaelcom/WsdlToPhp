<?php
/**
 * Class file for PayPalTypeFlightDetailsType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeFlightDetailsType
 * Documentation : Details of leg information
 * @date 14/07/2012
 */
class PayPalTypeFlightDetailsType extends PayPalWsdlClass
{
	/**
	 * The ConjuctionTicket
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $ConjuctionTicket;
	/**
	 * The ExchangeTicket
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $ExchangeTicket;
	/**
	 * The CouponNumber
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $CouponNumber;
	/**
	 * The ServiceClass
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $ServiceClass;
	/**
	 * The TravelDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $TravelDate;
	/**
	 * The CarrierCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $CarrierCode;
	/**
	 * The StopOverPermitted
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $StopOverPermitted;
	/**
	 * The DepartureAirport
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $DepartureAirport;
	/**
	 * The ArrivalAirport
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $ArrivalAirport;
	/**
	 * The FlightNumber
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $FlightNumber;
	/**
	 * The DepartureTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $DepartureTime;
	/**
	 * The ArrivalTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $ArrivalTime;
	/**
	 * The FareBasisCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $FareBasisCode;
	/**
	 * The Fare
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var PayPalTypeBasicAmountType
	 */
	public $Fare;
	/**
	 * The Taxes
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var PayPalTypeBasicAmountType
	 */
	public $Taxes;
	/**
	 * The Fee
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var PayPalTypeBasicAmountType
	 */
	public $Fee;
	/**
	 * The EndorsementOrRestrictions
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $EndorsementOrRestrictions;
	/**
	 * Constructor
	 * @param string ConjuctionTicket
	 * @param string ExchangeTicket
	 * @param string CouponNumber
	 * @param string ServiceClass
	 * @param string TravelDate
	 * @param string CarrierCode
	 * @param string StopOverPermitted
	 * @param string DepartureAirport
	 * @param string ArrivalAirport
	 * @param string FlightNumber
	 * @param string DepartureTime
	 * @param string ArrivalTime
	 * @param string FareBasisCode
	 * @param PayPalTypeBasicAmountType Fare
	 * @param PayPalTypeBasicAmountType Taxes
	 * @param PayPalTypeBasicAmountType Fee
	 * @param string EndorsementOrRestrictions
	 * @return PayPalTypeFlightDetailsType
	 */
	public function __construct($_ConjuctionTicket = null,$_ExchangeTicket = null,$_CouponNumber = null,$_ServiceClass = null,$_TravelDate = null,$_CarrierCode = null,$_StopOverPermitted = null,$_DepartureAirport = null,$_ArrivalAirport = null,$_FlightNumber = null,$_DepartureTime = null,$_ArrivalTime = null,$_FareBasisCode = null,$_Fare = null,$_Taxes = null,$_Fee = null,$_EndorsementOrRestrictions = null)
	{
		parent::__construct(array('ConjuctionTicket'=>$_ConjuctionTicket,'ExchangeTicket'=>$_ExchangeTicket,'CouponNumber'=>$_CouponNumber,'ServiceClass'=>$_ServiceClass,'TravelDate'=>$_TravelDate,'CarrierCode'=>$_CarrierCode,'StopOverPermitted'=>$_StopOverPermitted,'DepartureAirport'=>$_DepartureAirport,'ArrivalAirport'=>$_ArrivalAirport,'FlightNumber'=>$_FlightNumber,'DepartureTime'=>$_DepartureTime,'ArrivalTime'=>$_ArrivalTime,'FareBasisCode'=>$_FareBasisCode,'Fare'=>$_Fare,'Taxes'=>$_Taxes,'Fee'=>$_Fee,'EndorsementOrRestrictions'=>$_EndorsementOrRestrictions));
	}
	/**
	 * Set ConjuctionTicket
	 * @param string ConjuctionTicket
	 * @return string
	 */
	public function setConjuctionTicket($_ConjuctionTicket)
	{
		return ($this->ConjuctionTicket = $_ConjuctionTicket);
	}
	/**
	 * Get ConjuctionTicket
	 * @return string
	 */
	public function getConjuctionTicket()
	{
		return $this->ConjuctionTicket;
	}
	/**
	 * Set ExchangeTicket
	 * @param string ExchangeTicket
	 * @return string
	 */
	public function setExchangeTicket($_ExchangeTicket)
	{
		return ($this->ExchangeTicket = $_ExchangeTicket);
	}
	/**
	 * Get ExchangeTicket
	 * @return string
	 */
	public function getExchangeTicket()
	{
		return $this->ExchangeTicket;
	}
	/**
	 * Set CouponNumber
	 * @param string CouponNumber
	 * @return string
	 */
	public function setCouponNumber($_CouponNumber)
	{
		return ($this->CouponNumber = $_CouponNumber);
	}
	/**
	 * Get CouponNumber
	 * @return string
	 */
	public function getCouponNumber()
	{
		return $this->CouponNumber;
	}
	/**
	 * Set ServiceClass
	 * @param string ServiceClass
	 * @return string
	 */
	public function setServiceClass($_ServiceClass)
	{
		return ($this->ServiceClass = $_ServiceClass);
	}
	/**
	 * Get ServiceClass
	 * @return string
	 */
	public function getServiceClass()
	{
		return $this->ServiceClass;
	}
	/**
	 * Set TravelDate
	 * @param string TravelDate
	 * @return string
	 */
	public function setTravelDate($_TravelDate)
	{
		return ($this->TravelDate = $_TravelDate);
	}
	/**
	 * Get TravelDate
	 * @return string
	 */
	public function getTravelDate()
	{
		return $this->TravelDate;
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
	 * Set StopOverPermitted
	 * @param string StopOverPermitted
	 * @return string
	 */
	public function setStopOverPermitted($_StopOverPermitted)
	{
		return ($this->StopOverPermitted = $_StopOverPermitted);
	}
	/**
	 * Get StopOverPermitted
	 * @return string
	 */
	public function getStopOverPermitted()
	{
		return $this->StopOverPermitted;
	}
	/**
	 * Set DepartureAirport
	 * @param string DepartureAirport
	 * @return string
	 */
	public function setDepartureAirport($_DepartureAirport)
	{
		return ($this->DepartureAirport = $_DepartureAirport);
	}
	/**
	 * Get DepartureAirport
	 * @return string
	 */
	public function getDepartureAirport()
	{
		return $this->DepartureAirport;
	}
	/**
	 * Set ArrivalAirport
	 * @param string ArrivalAirport
	 * @return string
	 */
	public function setArrivalAirport($_ArrivalAirport)
	{
		return ($this->ArrivalAirport = $_ArrivalAirport);
	}
	/**
	 * Get ArrivalAirport
	 * @return string
	 */
	public function getArrivalAirport()
	{
		return $this->ArrivalAirport;
	}
	/**
	 * Set FlightNumber
	 * @param string FlightNumber
	 * @return string
	 */
	public function setFlightNumber($_FlightNumber)
	{
		return ($this->FlightNumber = $_FlightNumber);
	}
	/**
	 * Get FlightNumber
	 * @return string
	 */
	public function getFlightNumber()
	{
		return $this->FlightNumber;
	}
	/**
	 * Set DepartureTime
	 * @param string DepartureTime
	 * @return string
	 */
	public function setDepartureTime($_DepartureTime)
	{
		return ($this->DepartureTime = $_DepartureTime);
	}
	/**
	 * Get DepartureTime
	 * @return string
	 */
	public function getDepartureTime()
	{
		return $this->DepartureTime;
	}
	/**
	 * Set ArrivalTime
	 * @param string ArrivalTime
	 * @return string
	 */
	public function setArrivalTime($_ArrivalTime)
	{
		return ($this->ArrivalTime = $_ArrivalTime);
	}
	/**
	 * Get ArrivalTime
	 * @return string
	 */
	public function getArrivalTime()
	{
		return $this->ArrivalTime;
	}
	/**
	 * Set FareBasisCode
	 * @param string FareBasisCode
	 * @return string
	 */
	public function setFareBasisCode($_FareBasisCode)
	{
		return ($this->FareBasisCode = $_FareBasisCode);
	}
	/**
	 * Get FareBasisCode
	 * @return string
	 */
	public function getFareBasisCode()
	{
		return $this->FareBasisCode;
	}
	/**
	 * Set Fare
	 * @param BasicAmountType Fare
	 * @return BasicAmountType
	 */
	public function setFare($_Fare)
	{
		return ($this->Fare = $_Fare);
	}
	/**
	 * Get Fare
	 * @return PayPalTypeBasicAmountType
	 */
	public function getFare()
	{
		return $this->Fare;
	}
	/**
	 * Set Taxes
	 * @param BasicAmountType Taxes
	 * @return BasicAmountType
	 */
	public function setTaxes($_Taxes)
	{
		return ($this->Taxes = $_Taxes);
	}
	/**
	 * Get Taxes
	 * @return PayPalTypeBasicAmountType
	 */
	public function getTaxes()
	{
		return $this->Taxes;
	}
	/**
	 * Set Fee
	 * @param BasicAmountType Fee
	 * @return BasicAmountType
	 */
	public function setFee($_Fee)
	{
		return ($this->Fee = $_Fee);
	}
	/**
	 * Get Fee
	 * @return PayPalTypeBasicAmountType
	 */
	public function getFee()
	{
		return $this->Fee;
	}
	/**
	 * Set EndorsementOrRestrictions
	 * @param string EndorsementOrRestrictions
	 * @return string
	 */
	public function setEndorsementOrRestrictions($_EndorsementOrRestrictions)
	{
		return ($this->EndorsementOrRestrictions = $_EndorsementOrRestrictions);
	}
	/**
	 * Get EndorsementOrRestrictions
	 * @return string
	 */
	public function getEndorsementOrRestrictions()
	{
		return $this->EndorsementOrRestrictions;
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