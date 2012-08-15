<?php
/**
 * Class file for RFHCPCSTypeGetDetailsByDescriptionResponse
 * @date 15/08/2012
 */
/**
 * Class RFHCPCSTypeGetDetailsByDescriptionResponse
 * @date 15/08/2012
 */
class RFHCPCSTypeGetDetailsByDescriptionResponse extends RFHCPCSWsdlClass
{
	/**
	 * The GetDetailsByDescriptionResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var RFHCPCSTypeArrayOfHCPCS
	 */
	public $GetDetailsByDescriptionResult;
	/**
	 * Constructor
	 * @param RFHCPCSTypeArrayOfHCPCS GetDetailsByDescriptionResult
	 * @return RFHCPCSTypeGetDetailsByDescriptionResponse
	 */
	public function __construct($_GetDetailsByDescriptionResult = null)
	{
		parent::__construct(array('GetDetailsByDescriptionResult'=>new RFHCPCSTypeArrayOfHCPCS($_GetDetailsByDescriptionResult)));
	}
	/**
	 * Set GetDetailsByDescriptionResult
	 * @param ArrayOfHCPCS GetDetailsByDescriptionResult
	 * @return ArrayOfHCPCS
	 */
	public function setGetDetailsByDescriptionResult($_GetDetailsByDescriptionResult)
	{
		return ($this->GetDetailsByDescriptionResult = $_GetDetailsByDescriptionResult);
	}
	/**
	 * Get GetDetailsByDescriptionResult
	 * @return RFHCPCSTypeArrayOfHCPCS
	 */
	public function getGetDetailsByDescriptionResult()
	{
		return $this->GetDetailsByDescriptionResult;
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