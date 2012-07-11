<?php
/**
 * Class file for OvhTypeTelephonySmsSenderListResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonySmsSenderListResponse
 * @date 02/07/2012
 */
class OvhTypeTelephonySmsSenderListResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeMyArrayOfTelephonySmsSenderStructType
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeMyArrayOfTelephonySmsSenderStructType return
	 * @return OvhTypeTelephonySmsSenderListResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>new OvhTypeMyArrayOfTelephonySmsSenderStructType($_return)));
	}
	/**
	 * Set return
	 * @param MyArrayOfTelephonySmsSenderStructType return
	 * @return MyArrayOfTelephonySmsSenderStructType
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypeMyArrayOfTelephonySmsSenderStructType
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