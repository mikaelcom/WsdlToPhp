<?php
/**
 * Class file for XiFundDataTypeGetFundRegistrantResponse
 * @date 08/07/2012
 */
/**
 * Class XiFundDataTypeGetFundRegistrantResponse
 * @date 08/07/2012
 */
class XiFundDataTypeGetFundRegistrantResponse extends XiFundDataWsdlClass
{
	/**
	 * The GetFundRegistrantResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundDataTypeRegistrant
	 */
	public $GetFundRegistrantResult;
	/**
	 * Constructor
	 * @param XiFundDataTypeRegistrant GetFundRegistrantResult
	 * @return XiFundDataTypeGetFundRegistrantResponse
	 */
	public function __construct($_GetFundRegistrantResult = null)
	{
		parent::__construct(array('GetFundRegistrantResult'=>$_GetFundRegistrantResult));
	}
	/**
	 * Set GetFundRegistrantResult
	 * @param Registrant GetFundRegistrantResult
	 * @return Registrant
	 */
	public function setGetFundRegistrantResult($_GetFundRegistrantResult)
	{
		return ($this->GetFundRegistrantResult = $_GetFundRegistrantResult);
	}
	/**
	 * Get GetFundRegistrantResult
	 * @return XiFundDataTypeRegistrant
	 */
	public function getGetFundRegistrantResult()
	{
		return $this->GetFundRegistrantResult;
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