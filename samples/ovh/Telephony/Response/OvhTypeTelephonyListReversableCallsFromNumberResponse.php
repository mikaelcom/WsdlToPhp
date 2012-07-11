<?php
/**
 * Class file for OvhTypeTelephonyListReversableCallsFromNumberResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyListReversableCallsFromNumberResponse
 * @date 02/07/2012
 */
class OvhTypeTelephonyListReversableCallsFromNumberResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeTelephonyListReversableCallsFromNumberReturn
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeTelephonyListReversableCallsFromNumberReturn return
	 * @return OvhTypeTelephonyListReversableCallsFromNumberResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>$_return));
	}
	/**
	 * Set return
	 * @param telephonyListReversableCallsFromNumberReturn return
	 * @return telephonyListReversableCallsFromNumberReturn
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypetelephonyListReversableCallsFromNumberReturn
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