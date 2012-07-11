<?php
/**
 * Class file for OvhTypeHostingSummaryResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeHostingSummaryResponse
 * @date 02/07/2012
 */
class OvhTypeHostingSummaryResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeHostingSummaryReturn
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeHostingSummaryReturn return
	 * @return OvhTypeHostingSummaryResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>$_return));
	}
	/**
	 * Set return
	 * @param hostingSummaryReturn return
	 * @return hostingSummaryReturn
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypehostingSummaryReturn
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