<?php
/**
 * Class file for RFUSAZipCodeTypeGetPostCodeDetailByPostCodeResponse
 * @date 15/08/2012
 */
/**
 * Class RFUSAZipCodeTypeGetPostCodeDetailByPostCodeResponse
 * @date 15/08/2012
 */
class RFUSAZipCodeTypeGetPostCodeDetailByPostCodeResponse extends RFUSAZipCodeWsdlClass
{
	/**
	 * The GetPostCodeDetailByPostCodeResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var RFUSAZipCodeTypePostalCode
	 */
	public $GetPostCodeDetailByPostCodeResult;
	/**
	 * Constructor
	 * @param RFUSAZipCodeTypePostalCode GetPostCodeDetailByPostCodeResult
	 * @return RFUSAZipCodeTypeGetPostCodeDetailByPostCodeResponse
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
	 * @return RFUSAZipCodeTypePostalCode
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