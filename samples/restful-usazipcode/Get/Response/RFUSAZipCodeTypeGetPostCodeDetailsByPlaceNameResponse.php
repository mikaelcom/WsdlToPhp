<?php
/**
 * Class file for RFUSAZipCodeTypeGetPostCodeDetailsByPlaceNameResponse
 * @date 15/08/2012
 */
/**
 * Class RFUSAZipCodeTypeGetPostCodeDetailsByPlaceNameResponse
 * @date 15/08/2012
 */
class RFUSAZipCodeTypeGetPostCodeDetailsByPlaceNameResponse extends RFUSAZipCodeWsdlClass
{
	/**
	 * The GetPostCodeDetailsByPlaceNameResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var RFUSAZipCodeTypePostalCode
	 */
	public $GetPostCodeDetailsByPlaceNameResult;
	/**
	 * Constructor
	 * @param RFUSAZipCodeTypePostalCode GetPostCodeDetailsByPlaceNameResult
	 * @return RFUSAZipCodeTypeGetPostCodeDetailsByPlaceNameResponse
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
	 * @return RFUSAZipCodeTypePostalCode
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