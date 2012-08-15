<?php
/**
 * Class file for RFAirportTypeGetDetailsByICAOCodeResponse
 * @date 15/08/2012
 */
/**
 * Class RFAirportTypeGetDetailsByICAOCodeResponse
 * @date 15/08/2012
 */
class RFAirportTypeGetDetailsByICAOCodeResponse extends RFAirportWsdlClass
{
	/**
	 * The GetDetailsByICAOCodeResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var RFAirportTypeAirport
	 */
	public $GetDetailsByICAOCodeResult;
	/**
	 * Constructor
	 * @param RFAirportTypeAirport GetDetailsByICAOCodeResult
	 * @return RFAirportTypeGetDetailsByICAOCodeResponse
	 */
	public function __construct($_GetDetailsByICAOCodeResult = null)
	{
		parent::__construct(array('GetDetailsByICAOCodeResult'=>$_GetDetailsByICAOCodeResult));
	}
	/**
	 * Set GetDetailsByICAOCodeResult
	 * @param Airport GetDetailsByICAOCodeResult
	 * @return Airport
	 */
	public function setGetDetailsByICAOCodeResult($_GetDetailsByICAOCodeResult)
	{
		return ($this->GetDetailsByICAOCodeResult = $_GetDetailsByICAOCodeResult);
	}
	/**
	 * Get GetDetailsByICAOCodeResult
	 * @return RFAirportTypeAirport
	 */
	public function getGetDetailsByICAOCodeResult()
	{
		return $this->GetDetailsByICAOCodeResult;
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