<?php
/**
 * Class file for XiGlobalmasterTypeGetIssuersResponse
 * @date 08/07/2012
 */
/**
 * Class XiGlobalmasterTypeGetIssuersResponse
 * @date 08/07/2012
 */
class XiGlobalmasterTypeGetIssuersResponse extends XiGlobalmasterWsdlClass
{
	/**
	 * The GetIssuersResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalmasterTypeArrayOfIssuer
	 */
	public $GetIssuersResult;
	/**
	 * Constructor
	 * @param XiGlobalmasterTypeArrayOfIssuer GetIssuersResult
	 * @return XiGlobalmasterTypeGetIssuersResponse
	 */
	public function __construct($_GetIssuersResult = null)
	{
		parent::__construct(array('GetIssuersResult'=>new XiGlobalmasterTypeArrayOfIssuer($_GetIssuersResult)));
	}
	/**
	 * Set GetIssuersResult
	 * @param ArrayOfIssuer GetIssuersResult
	 * @return ArrayOfIssuer
	 */
	public function setGetIssuersResult($_GetIssuersResult)
	{
		return ($this->GetIssuersResult = $_GetIssuersResult);
	}
	/**
	 * Get GetIssuersResult
	 * @return XiGlobalmasterTypeArrayOfIssuer
	 */
	public function getGetIssuersResult()
	{
		return $this->GetIssuersResult;
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