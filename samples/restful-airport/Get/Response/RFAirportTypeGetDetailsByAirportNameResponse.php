<?php
/**
 * Class file for RFAirportTypeGetDetailsByAirportNameResponse
 * @date 15/08/2012
 */
/**
 * Class RFAirportTypeGetDetailsByAirportNameResponse
 * @date 15/08/2012
 */
class RFAirportTypeGetDetailsByAirportNameResponse extends RFAirportWsdlClass
{
	/**
	 * The GetDetailsByAirportNameResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var RFAirportTypeAirport
	 */
	public $GetDetailsByAirportNameResult;
	/**
	 * Constructor
	 * @param RFAirportTypeAirport GetDetailsByAirportNameResult
	 * @return RFAirportTypeGetDetailsByAirportNameResponse
	 */
	public function __construct($_GetDetailsByAirportNameResult = null)
	{
		parent::__construct(array('GetDetailsByAirportNameResult'=>$_GetDetailsByAirportNameResult));
	}
	/**
	 * Set GetDetailsByAirportNameResult
	 * @param Airport GetDetailsByAirportNameResult
	 * @return Airport
	 */
	public function setGetDetailsByAirportNameResult($_GetDetailsByAirportNameResult)
	{
		return ($this->GetDetailsByAirportNameResult = $_GetDetailsByAirportNameResult);
	}
	/**
	 * Get GetDetailsByAirportNameResult
	 * @return RFAirportTypeAirport
	 */
	public function getGetDetailsByAirportNameResult()
	{
		return $this->GetDetailsByAirportNameResult;
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