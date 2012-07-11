<?php
/**
 * Class file for SPEmailWsTypeModifyContactResponse
 * @date 06/07/2012
 */
/**
 * Class SPEmailWsTypeModifyContactResponse
 * @date 06/07/2012
 */
class SPEmailWsTypeModifyContactResponse extends SPEmailWsWsdlClass
{
	/**
	 * The ModifyContactResult
	 * @var RequestStatus
	 */
	public $ModifyContactResult;
	/**
	 * Constructor
	 * @param RequestStatus ModifyContactResult
	 * @return SPEmailWsTypeModifyContactResponse
	 */
	public function __construct($_ModifyContactResult = null)
	{
		parent::__construct(array('ModifyContactResult'=>$_ModifyContactResult));
	}
	/**
	 * Set ModifyContactResult
	 * @param RequestStatus ModifyContactResult
	 * @return RequestStatus
	 */
	public function setModifyContactResult($_ModifyContactResult)
	{
		return ($this->ModifyContactResult = $_ModifyContactResult);
	}
	/**
	 * Get ModifyContactResult
	 * @return RequestStatus
	 */
	public function getModifyContactResult()
	{
		return $this->ModifyContactResult;
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