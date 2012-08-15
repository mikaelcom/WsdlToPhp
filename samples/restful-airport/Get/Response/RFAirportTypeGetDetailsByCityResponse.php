<?php
/**
 * Class file for RFAirportTypeGetDetailsByCityResponse
 * @date 15/08/2012
 */
/**
 * Class RFAirportTypeGetDetailsByCityResponse
 * @date 15/08/2012
 */
class RFAirportTypeGetDetailsByCityResponse extends RFAirportWsdlClass
{
	/**
	 * The GetDetailsByCityResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var RFAirportTypeAirport
	 */
	public $GetDetailsByCityResult;
	/**
	 * Constructor
	 * @param RFAirportTypeAirport GetDetailsByCityResult
	 * @return RFAirportTypeGetDetailsByCityResponse
	 */
	public function __construct($_GetDetailsByCityResult = null)
	{
		parent::__construct(array('GetDetailsByCityResult'=>$_GetDetailsByCityResult));
	}
	/**
	 * Set GetDetailsByCityResult
	 * @param Airport GetDetailsByCityResult
	 * @return Airport
	 */
	public function setGetDetailsByCityResult($_GetDetailsByCityResult)
	{
		return ($this->GetDetailsByCityResult = $_GetDetailsByCityResult);
	}
	/**
	 * Get GetDetailsByCityResult
	 * @return RFAirportTypeAirport
	 */
	public function getGetDetailsByCityResult()
	{
		return $this->GetDetailsByCityResult;
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