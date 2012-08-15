<?php
/**
 * Class file for RFAirportTypeGetDetailsByIATACodeResponse
 * @date 15/08/2012
 */
/**
 * Class RFAirportTypeGetDetailsByIATACodeResponse
 * @date 15/08/2012
 */
class RFAirportTypeGetDetailsByIATACodeResponse extends RFAirportWsdlClass
{
	/**
	 * The GetDetailsByIATACodeResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var RFAirportTypeAirport
	 */
	public $GetDetailsByIATACodeResult;
	/**
	 * Constructor
	 * @param RFAirportTypeAirport GetDetailsByIATACodeResult
	 * @return RFAirportTypeGetDetailsByIATACodeResponse
	 */
	public function __construct($_GetDetailsByIATACodeResult = null)
	{
		parent::__construct(array('GetDetailsByIATACodeResult'=>$_GetDetailsByIATACodeResult));
	}
	/**
	 * Set GetDetailsByIATACodeResult
	 * @param Airport GetDetailsByIATACodeResult
	 * @return Airport
	 */
	public function setGetDetailsByIATACodeResult($_GetDetailsByIATACodeResult)
	{
		return ($this->GetDetailsByIATACodeResult = $_GetDetailsByIATACodeResult);
	}
	/**
	 * Get GetDetailsByIATACodeResult
	 * @return RFAirportTypeAirport
	 */
	public function getGetDetailsByIATACodeResult()
	{
		return $this->GetDetailsByIATACodeResult;
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