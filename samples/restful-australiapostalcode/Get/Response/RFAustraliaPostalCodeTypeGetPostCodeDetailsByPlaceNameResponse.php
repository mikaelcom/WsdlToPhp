<?php
/**
 * Class file for RFAustraliaPostalCodeTypeGetPostCodeDetailsByPlaceNameResponse
 * @date 15/08/2012
 */
/**
 * Class RFAustraliaPostalCodeTypeGetPostCodeDetailsByPlaceNameResponse
 * @date 15/08/2012
 */
class RFAustraliaPostalCodeTypeGetPostCodeDetailsByPlaceNameResponse extends RFAustraliaPostalCodeWsdlClass
{
	/**
	 * The GetPostCodeDetailsByPlaceNameResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var RFAustraliaPostalCodeTypePostalCode
	 */
	public $GetPostCodeDetailsByPlaceNameResult;
	/**
	 * Constructor
	 * @param RFAustraliaPostalCodeTypePostalCode GetPostCodeDetailsByPlaceNameResult
	 * @return RFAustraliaPostalCodeTypeGetPostCodeDetailsByPlaceNameResponse
	 */
	public function __construct($_GetPostCodeDetailsByPlaceNameResult = null)
	{
		parent::__construct(array('GetPostCodeDetailsByPlaceNameResult'=>$_GetPostCodeDetailsByPlaceNameResult));
	}
	/**
	 * Set GetPostCodeDetailsByPlaceNameResult
	 * @param PostalCode GetPostCodeDetailsByPlaceNameResult
	 * @return PostalCode
	 */
	public function setGetPostCodeDetailsByPlaceNameResult($_GetPostCodeDetailsByPlaceNameResult)
	{
		return ($this->GetPostCodeDetailsByPlaceNameResult = $_GetPostCodeDetailsByPlaceNameResult);
	}
	/**
	 * Get GetPostCodeDetailsByPlaceNameResult
	 * @return RFAustraliaPostalCodeTypePostalCode
	 */
	public function getGetPostCodeDetailsByPlaceNameResult()
	{
		return $this->GetPostCodeDetailsByPlaceNameResult;
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