<?php
/**
 * Class file for OvhTypeTelephonyScreenListBlackWhiteChoiceResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyScreenListBlackWhiteChoiceResponse
 * @date 02/07/2012
 */
class OvhTypeTelephonyScreenListBlackWhiteChoiceResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeTelephonyScreenBlackWhiteChoiceReturn
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeTelephonyScreenBlackWhiteChoiceReturn return
	 * @return OvhTypeTelephonyScreenListBlackWhiteChoiceResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>$_return));
	}
	/**
	 * Set return
	 * @param telephonyScreenBlackWhiteChoiceReturn return
	 * @return telephonyScreenBlackWhiteChoiceReturn
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypetelephonyScreenBlackWhiteChoiceReturn
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