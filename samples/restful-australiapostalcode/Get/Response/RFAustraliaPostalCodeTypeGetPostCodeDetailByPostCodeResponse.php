<?php
/**
 * Class file for RFAustraliaPostalCodeTypeGetPostCodeDetailByPostCodeResponse
 * @date 15/08/2012
 */
/**
 * Class RFAustraliaPostalCodeTypeGetPostCodeDetailByPostCodeResponse
 * @date 15/08/2012
 */
class RFAustraliaPostalCodeTypeGetPostCodeDetailByPostCodeResponse extends RFAustraliaPostalCodeWsdlClass
{
	/**
	 * The GetPostCodeDetailByPostCodeResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var RFAustraliaPostalCodeTypePostalCode
	 */
	public $GetPostCodeDetailByPostCodeResult;
	/**
	 * Constructor
	 * @param RFAustraliaPostalCodeTypePostalCode GetPostCodeDetailByPostCodeResult
	 * @return RFAustraliaPostalCodeTypeGetPostCodeDetailByPostCodeResponse
	 */
	public function __construct($_GetPostCodeDetailByPostCodeResult = null)
	{
		parent::__construct(array('GetPostCodeDetailByPostCodeResult'=>$_GetPostCodeDetailByPostCodeResult));
	}
	/**
	 * Set GetPostCodeDetailByPostCodeResult
	 * @param PostalCode GetPostCodeDetailByPostCodeResult
	 * @return PostalCode
	 */
	public function setGetPostCodeDetailByPostCodeResult($_GetPostCodeDetailByPostCodeResult)
	{
		return ($this->GetPostCodeDetailByPostCodeResult = $_GetPostCodeDetailByPostCodeResult);
	}
	/**
	 * Get GetPostCodeDetailByPostCodeResult
	 * @return RFAustraliaPostalCodeTypePostalCode
	 */
	public function getGetPostCodeDetailByPostCodeResult()
	{
		return $this->GetPostCodeDetailByPostCodeResult;
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