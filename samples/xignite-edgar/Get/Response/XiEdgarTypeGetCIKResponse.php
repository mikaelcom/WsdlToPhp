<?php
/**
 * Class file for XiEdgarTypeGetCIKResponse
 * @date 08/07/2012
 */
/**
 * Class XiEdgarTypeGetCIKResponse
 * @date 08/07/2012
 */
class XiEdgarTypeGetCIKResponse extends XiEdgarWsdlClass
{
	/**
	 * The GetCIKResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEdgarTypeSecurity
	 */
	public $GetCIKResult;
	/**
	 * Constructor
	 * @param XiEdgarTypeSecurity GetCIKResult
	 * @return XiEdgarTypeGetCIKResponse
	 */
	public function __construct($_GetCIKResult = null)
	{
		parent::__construct(array('GetCIKResult'=>$_GetCIKResult));
	}
	/**
	 * Set GetCIKResult
	 * @param Security GetCIKResult
	 * @return Security
	 */
	public function setGetCIKResult($_GetCIKResult)
	{
		return ($this->GetCIKResult = $_GetCIKResult);
	}
	/**
	 * Get GetCIKResult
	 * @return XiEdgarTypeSecurity
	 */
	public function getGetCIKResult()
	{
		return $this->GetCIKResult;
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