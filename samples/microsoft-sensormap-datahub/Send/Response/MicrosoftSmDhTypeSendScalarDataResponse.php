<?php
/**
 * Class file for MicrosoftSmDhTypeSendScalarDataResponse
 * @date 05/07/2012
 */
/**
 * Class MicrosoftSmDhTypeSendScalarDataResponse
 * @date 05/07/2012
 */
class MicrosoftSmDhTypeSendScalarDataResponse extends MicrosoftSmDhWsdlClass
{
	/**
	 * The SendScalarDataResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $SendScalarDataResult;
	/**
	 * Constructor
	 * @param string SendScalarDataResult
	 * @return MicrosoftSmDhTypeSendScalarDataResponse
	 */
	public function __construct($_SendScalarDataResult = null)
	{
		parent::__construct(array('SendScalarDataResult'=>$_SendScalarDataResult));
	}
	/**
	 * Set SendScalarDataResult
	 * @param string SendScalarDataResult
	 * @return string
	 */
	public function setSendScalarDataResult($_SendScalarDataResult)
	{
		return ($this->SendScalarDataResult = $_SendScalarDataResult);
	}
	/**
	 * Get SendScalarDataResult
	 * @return string
	 */
	public function getSendScalarDataResult()
	{
		return $this->SendScalarDataResult;
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