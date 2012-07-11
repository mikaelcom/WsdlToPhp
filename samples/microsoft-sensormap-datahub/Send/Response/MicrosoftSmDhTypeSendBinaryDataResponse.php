<?php
/**
 * Class file for MicrosoftSmDhTypeSendBinaryDataResponse
 * @date 05/07/2012
 */
/**
 * Class MicrosoftSmDhTypeSendBinaryDataResponse
 * @date 05/07/2012
 */
class MicrosoftSmDhTypeSendBinaryDataResponse extends MicrosoftSmDhWsdlClass
{
	/**
	 * The SendBinaryDataResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $SendBinaryDataResult;
	/**
	 * Constructor
	 * @param string SendBinaryDataResult
	 * @return MicrosoftSmDhTypeSendBinaryDataResponse
	 */
	public function __construct($_SendBinaryDataResult = null)
	{
		parent::__construct(array('SendBinaryDataResult'=>$_SendBinaryDataResult));
	}
	/**
	 * Set SendBinaryDataResult
	 * @param string SendBinaryDataResult
	 * @return string
	 */
	public function setSendBinaryDataResult($_SendBinaryDataResult)
	{
		return ($this->SendBinaryDataResult = $_SendBinaryDataResult);
	}
	/**
	 * Get SendBinaryDataResult
	 * @return string
	 */
	public function getSendBinaryDataResult()
	{
		return $this->SendBinaryDataResult;
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