<?php
/**
 * Class file for RFHCPCSTypeGetDetailsByCodeResponse
 * @date 15/08/2012
 */
/**
 * Class RFHCPCSTypeGetDetailsByCodeResponse
 * @date 15/08/2012
 */
class RFHCPCSTypeGetDetailsByCodeResponse extends RFHCPCSWsdlClass
{
	/**
	 * The GetDetailsByCodeResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var RFHCPCSTypeHCPCS
	 */
	public $GetDetailsByCodeResult;
	/**
	 * Constructor
	 * @param RFHCPCSTypeHCPCS GetDetailsByCodeResult
	 * @return RFHCPCSTypeGetDetailsByCodeResponse
	 */
	public function __construct($_GetDetailsByCodeResult = null)
	{
		parent::__construct(array('GetDetailsByCodeResult'=>$_GetDetailsByCodeResult));
	}
	/**
	 * Set GetDetailsByCodeResult
	 * @param HCPCS GetDetailsByCodeResult
	 * @return HCPCS
	 */
	public function setGetDetailsByCodeResult($_GetDetailsByCodeResult)
	{
		return ($this->GetDetailsByCodeResult = $_GetDetailsByCodeResult);
	}
	/**
	 * Get GetDetailsByCodeResult
	 * @return RFHCPCSTypeHCPCS
	 */
	public function getGetDetailsByCodeResult()
	{
		return $this->GetDetailsByCodeResult;
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