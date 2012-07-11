<?php
/**
 * Class file for XiInsiderTypeGetInsidersResponse
 * @date 08/07/2012
 */
/**
 * Class XiInsiderTypeGetInsidersResponse
 * @date 08/07/2012
 */
class XiInsiderTypeGetInsidersResponse extends XiInsiderWsdlClass
{
	/**
	 * The GetInsidersResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInsiderTypeArrayOfInsider
	 */
	public $GetInsidersResult;
	/**
	 * Constructor
	 * @param XiInsiderTypeArrayOfInsider GetInsidersResult
	 * @return XiInsiderTypeGetInsidersResponse
	 */
	public function __construct($_GetInsidersResult = null)
	{
		parent::__construct(array('GetInsidersResult'=>new XiInsiderTypeArrayOfInsider($_GetInsidersResult)));
	}
	/**
	 * Set GetInsidersResult
	 * @param ArrayOfInsider GetInsidersResult
	 * @return ArrayOfInsider
	 */
	public function setGetInsidersResult($_GetInsidersResult)
	{
		return ($this->GetInsidersResult = $_GetInsidersResult);
	}
	/**
	 * Get GetInsidersResult
	 * @return XiInsiderTypeArrayOfInsider
	 */
	public function getGetInsidersResult()
	{
		return $this->GetInsidersResult;
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