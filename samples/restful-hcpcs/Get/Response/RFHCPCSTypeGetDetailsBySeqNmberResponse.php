<?php
/**
 * Class file for RFHCPCSTypeGetDetailsBySeqNmberResponse
 * @date 15/08/2012
 */
/**
 * Class RFHCPCSTypeGetDetailsBySeqNmberResponse
 * @date 15/08/2012
 */
class RFHCPCSTypeGetDetailsBySeqNmberResponse extends RFHCPCSWsdlClass
{
	/**
	 * The GetDetailsBySeqNmberResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var RFHCPCSTypeHCPCS
	 */
	public $GetDetailsBySeqNmberResult;
	/**
	 * Constructor
	 * @param RFHCPCSTypeHCPCS GetDetailsBySeqNmberResult
	 * @return RFHCPCSTypeGetDetailsBySeqNmberResponse
	 */
	public function __construct($_GetDetailsBySeqNmberResult = null)
	{
		parent::__construct(array('GetDetailsBySeqNmberResult'=>$_GetDetailsBySeqNmberResult));
	}
	/**
	 * Set GetDetailsBySeqNmberResult
	 * @param HCPCS GetDetailsBySeqNmberResult
	 * @return HCPCS
	 */
	public function setGetDetailsBySeqNmberResult($_GetDetailsBySeqNmberResult)
	{
		return ($this->GetDetailsBySeqNmberResult = $_GetDetailsBySeqNmberResult);
	}
	/**
	 * Get GetDetailsBySeqNmberResult
	 * @return RFHCPCSTypeHCPCS
	 */
	public function getGetDetailsBySeqNmberResult()
	{
		return $this->GetDetailsBySeqNmberResult;
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