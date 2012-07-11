<?php
/**
 * Class file for CdyneAddressTypeGetCongressionalDistrictByZipResponse
 * @date 02/07/2012
 */
/**
 * Class CdyneAddressTypeGetCongressionalDistrictByZipResponse
 * @date 02/07/2012
 */
class CdyneAddressTypeGetCongressionalDistrictByZipResponse extends CdyneAddressWsdlClass
{
	/**
	 * The GetCongressionalDistrictByZipResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $GetCongressionalDistrictByZipResult;
	/**
	 * Constructor
	 * @param string GetCongressionalDistrictByZipResult
	 * @return CdyneAddressTypeGetCongressionalDistrictByZipResponse
	 */
	public function __construct($_GetCongressionalDistrictByZipResult = null)
	{
		parent::__construct(array('GetCongressionalDistrictByZipResult'=>$_GetCongressionalDistrictByZipResult));
	}
	/**
	 * Set GetCongressionalDistrictByZipResult
	 * @param string GetCongressionalDistrictByZipResult
	 * @return string
	 */
	public function setGetCongressionalDistrictByZipResult($_GetCongressionalDistrictByZipResult)
	{
		return ($this->GetCongressionalDistrictByZipResult = $_GetCongressionalDistrictByZipResult);
	}
	/**
	 * Get GetCongressionalDistrictByZipResult
	 * @return string
	 */
	public function getGetCongressionalDistrictByZipResult()
	{
		return $this->GetCongressionalDistrictByZipResult;
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