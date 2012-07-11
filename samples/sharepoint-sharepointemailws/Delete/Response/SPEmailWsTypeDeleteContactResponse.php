<?php
/**
 * Class file for SPEmailWsTypeDeleteContactResponse
 * @date 06/07/2012
 */
/**
 * Class SPEmailWsTypeDeleteContactResponse
 * @date 06/07/2012
 */
class SPEmailWsTypeDeleteContactResponse extends SPEmailWsWsdlClass
{
	/**
	 * The DeleteContactResult
	 * @var RequestStatus
	 */
	public $DeleteContactResult;
	/**
	 * Constructor
	 * @param RequestStatus DeleteContactResult
	 * @return SPEmailWsTypeDeleteContactResponse
	 */
	public function __construct($_DeleteContactResult = null)
	{
		parent::__construct(array('DeleteContactResult'=>$_DeleteContactResult));
	}
	/**
	 * Set DeleteContactResult
	 * @param RequestStatus DeleteContactResult
	 * @return RequestStatus
	 */
	public function setDeleteContactResult($_DeleteContactResult)
	{
		return ($this->DeleteContactResult = $_DeleteContactResult);
	}
	/**
	 * Get DeleteContactResult
	 * @return RequestStatus
	 */
	public function getDeleteContactResult()
	{
		return $this->DeleteContactResult;
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