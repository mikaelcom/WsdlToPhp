<?php
/**
 * Class file for LifePicsTypeSubmitOrderResponse
 * @date 02/08/2012
 */
/**
 * Class LifePicsTypeSubmitOrderResponse
 * @date 02/08/2012
 */
class LifePicsTypeSubmitOrderResponse extends LifePicsWsdlClass
{
	/**
	 * The SubmitOrderResult
	 * @var LifePicsTypeSubmitOrderResult
	 */
	public $SubmitOrderResult;
	/**
	 * Constructor
	 * @param LifePicsTypeSubmitOrderResult SubmitOrderResult
	 * @return LifePicsTypeSubmitOrderResponse
	 */
	public function __construct($_SubmitOrderResult = null)
	{
		parent::__construct(array('SubmitOrderResult'=>$_SubmitOrderResult));
	}
	/**
	 * Set SubmitOrderResult
	 * @param SubmitOrderResult SubmitOrderResult
	 * @return SubmitOrderResult
	 */
	public function setSubmitOrderResult($_SubmitOrderResult)
	{
		return ($this->SubmitOrderResult = $_SubmitOrderResult);
	}
	/**
	 * Get SubmitOrderResult
	 * @return LifePicsTypeSubmitOrderResult
	 */
	public function getSubmitOrderResult()
	{
		return $this->SubmitOrderResult;
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