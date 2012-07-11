<?php
/**
 * Class file for OvhTypeTelephonySmsUserMultiSendResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonySmsUserMultiSendResponse
 * @date 02/07/2012
 */
class OvhTypeTelephonySmsUserMultiSendResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeMyArrayOfIntType
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeMyArrayOfIntType return
	 * @return OvhTypeTelephonySmsUserMultiSendResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>new OvhTypeMyArrayOfIntType($_return)));
	}
	/**
	 * Set return
	 * @param MyArrayOfIntType return
	 * @return MyArrayOfIntType
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypeMyArrayOfIntType
	 */
	public function getReturn()
	{
		return $this->return;
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