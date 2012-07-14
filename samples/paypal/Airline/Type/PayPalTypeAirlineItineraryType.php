<?php
/**
 * Class file for PayPalTypeAirlineItineraryType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeAirlineItineraryType
 * Documentation : AID for Airlines
 * @date 14/07/2012
 */
class PayPalTypeAirlineItineraryType extends PayPalWsdlClass
{
	/**
	 * The PassengerName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $PassengerName;
	/**
	 * The IssueDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $IssueDate;
	/**
	 * The TravelAgencyName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $TravelAgencyName;
	/**
	 * The TravelAgencyCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $TravelAgencyCode;
	/**
	 * The TicketNumber
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $TicketNumber;
	/**
	 * The IssuingCarrierCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $IssuingCarrierCode;
	/**
	 * The CustomerCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $CustomerCode;
	/**
	 * The TotalFare
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var PayPalTypeBasicAmountType
	 */
	public $TotalFare;
	/**
	 * The TotalTaxes
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var PayPalTypeBasicAmountType
	 */
	public $TotalTaxes;
	/**
	 * The TotalFee
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var PayPalTypeBasicAmountType
	 */
	public $TotalFee;
	/**
	 * The RestrictedTicket
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $RestrictedTicket;
	/**
	 * The ClearingSequence
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $ClearingSequence;
	/**
	 * The ClearingCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $ClearingCount;
	/**
	 * The FlightDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var PayPalTypeFlightDetailsType
	 */
	public $FlightDetails;
	/**
	 * Constructor
	 * @param string PassengerName
	 * @param string IssueDate
	 * @param string TravelAgencyName
	 * @param string TravelAgencyCode
	 * @param string TicketNumber
	 * @param string IssuingCarrierCode
	 * @param string CustomerCode
	 * @param PayPalTypeBasicAmountType TotalFare
	 * @param PayPalTypeBasicAmountType TotalTaxes
	 * @param PayPalTypeBasicAmountType TotalFee
	 * @param string RestrictedTicket
	 * @param string ClearingSequence
	 * @param string ClearingCount
	 * @param PayPalTypeFlightDetailsType FlightDetails
	 * @return PayPalTypeAirlineItineraryType
	 */
	public function __construct($_PassengerName = null,$_IssueDate = null,$_TravelAgencyName = null,$_TravelAgencyCode = null,$_TicketNumber = null,$_IssuingCarrierCode = null,$_CustomerCode = null,$_TotalFare = null,$_TotalTaxes = null,$_TotalFee = null,$_RestrictedTicket = null,$_ClearingSequence = null,$_ClearingCount = null,$_FlightDetails = null)
	{
		parent::__construct(array('PassengerName'=>$_PassengerName,'IssueDate'=>$_IssueDate,'TravelAgencyName'=>$_TravelAgencyName,'TravelAgencyCode'=>$_TravelAgencyCode,'TicketNumber'=>$_TicketNumber,'IssuingCarrierCode'=>$_IssuingCarrierCode,'CustomerCode'=>$_CustomerCode,'TotalFare'=>$_TotalFare,'TotalTaxes'=>$_TotalTaxes,'TotalFee'=>$_TotalFee,'RestrictedTicket'=>$_RestrictedTicket,'ClearingSequence'=>$_ClearingSequence,'ClearingCount'=>$_ClearingCount,'FlightDetails'=>$_FlightDetails));
	}
	/**
	 * Set PassengerName
	 * @param string PassengerName
	 * @return string
	 */
	public function setPassengerName($_PassengerName)
	{
		return ($this->PassengerName = $_PassengerName);
	}
	/**
	 * Get PassengerName
	 * @return string
	 */
	public function getPassengerName()
	{
		return $this->PassengerName;
	}
	/**
	 * Set IssueDate
	 * @param string IssueDate
	 * @return string
	 */
	public function setIssueDate($_IssueDate)
	{
		return ($this->IssueDate = $_IssueDate);
	}
	/**
	 * Get IssueDate
	 * @return string
	 */
	public function getIssueDate()
	{
		return $this->IssueDate;
	}
	/**
	 * Set TravelAgencyName
	 * @param string TravelAgencyName
	 * @return string
	 */
	public function setTravelAgencyName($_TravelAgencyName)
	{
		return ($this->TravelAgencyName = $_TravelAgencyName);
	}
	/**
	 * Get TravelAgencyName
	 * @return string
	 */
	public function getTravelAgencyName()
	{
		return $this->TravelAgencyName;
	}
	/**
	 * Set TravelAgencyCode
	 * @param string TravelAgencyCode
	 * @return string
	 */
	public function setTravelAgencyCode($_TravelAgencyCode)
	{
		return ($this->TravelAgencyCode = $_TravelAgencyCode);
	}
	/**
	 * Get TravelAgencyCode
	 * @return string
	 */
	public function getTravelAgencyCode()
	{
		return $this->TravelAgencyCode;
	}
	/**
	 * Set TicketNumber
	 * @param string TicketNumber
	 * @return string
	 */
	public function setTicketNumber($_TicketNumber)
	{
		return ($this->TicketNumber = $_TicketNumber);
	}
	/**
	 * Get TicketNumber
	 * @return string
	 */
	public function getTicketNumber()
	{
		return $this->TicketNumber;
	}
	/**
	 * Set IssuingCarrierCode
	 * @param string IssuingCarrierCode
	 * @return string
	 */
	public function setIssuingCarrierCode($_IssuingCarrierCode)
	{
		return ($this->IssuingCarrierCode = $_IssuingCarrierCode);
	}
	/**
	 * Get IssuingCarrierCode
	 * @return string
	 */
	public function getIssuingCarrierCode()
	{
		return $this->IssuingCarrierCode;
	}
	/**
	 * Set CustomerCode
	 * @param string CustomerCode
	 * @return string
	 */
	public function setCustomerCode($_CustomerCode)
	{
		return ($this->CustomerCode = $_CustomerCode);
	}
	/**
	 * Get CustomerCode
	 * @return string
	 */
	public function getCustomerCode()
	{
		return $this->CustomerCode;
	}
	/**
	 * Set TotalFare
	 * @param BasicAmountType TotalFare
	 * @return BasicAmountType
	 */
	public function setTotalFare($_TotalFare)
	{
		return ($this->TotalFare = $_TotalFare);
	}
	/**
	 * Get TotalFare
	 * @return PayPalTypeBasicAmountType
	 */
	public function getTotalFare()
	{
		return $this->TotalFare;
	}
	/**
	 * Set TotalTaxes
	 * @param BasicAmountType TotalTaxes
	 * @return BasicAmountType
	 */
	public function setTotalTaxes($_TotalTaxes)
	{
		return ($this->TotalTaxes = $_TotalTaxes);
	}
	/**
	 * Get TotalTaxes
	 * @return PayPalTypeBasicAmountType
	 */
	public function getTotalTaxes()
	{
		return $this->TotalTaxes;
	}
	/**
	 * Set TotalFee
	 * @param BasicAmountType TotalFee
	 * @return BasicAmountType
	 */
	public function setTotalFee($_TotalFee)
	{
		return ($this->TotalFee = $_TotalFee);
	}
	/**
	 * Get TotalFee
	 * @return PayPalTypeBasicAmountType
	 */
	public function getTotalFee()
	{
		return $this->TotalFee;
	}
	/**
	 * Set RestrictedTicket
	 * @param string RestrictedTicket
	 * @return string
	 */
	public function setRestrictedTicket($_RestrictedTicket)
	{
		return ($this->RestrictedTicket = $_RestrictedTicket);
	}
	/**
	 * Get RestrictedTicket
	 * @return string
	 */
	public function getRestrictedTicket()
	{
		return $this->RestrictedTicket;
	}
	/**
	 * Set ClearingSequence
	 * @param string ClearingSequence
	 * @return string
	 */
	public function setClearingSequence($_ClearingSequence)
	{
		return ($this->ClearingSequence = $_ClearingSequence);
	}
	/**
	 * Get ClearingSequence
	 * @return string
	 */
	public function getClearingSequence()
	{
		return $this->ClearingSequence;
	}
	/**
	 * Set ClearingCount
	 * @param string ClearingCount
	 * @return string
	 */
	public function setClearingCount($_ClearingCount)
	{
		return ($this->ClearingCount = $_ClearingCount);
	}
	/**
	 * Get ClearingCount
	 * @return string
	 */
	public function getClearingCount()
	{
		return $this->ClearingCount;
	}
	/**
	 * Set FlightDetails
	 * @param FlightDetailsType FlightDetails
	 * @return FlightDetailsType
	 */
	public function setFlightDetails($_FlightDetails)
	{
		return ($this->FlightDetails = $_FlightDetails);
	}
	/**
	 * Get FlightDetails
	 * @return PayPalTypeFlightDetailsType
	 */
	public function getFlightDetails()
	{
		return $this->FlightDetails;
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