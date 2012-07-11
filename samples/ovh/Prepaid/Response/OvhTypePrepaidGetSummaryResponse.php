<?php
/**
 * Class file for OvhTypePrepaidGetSummaryResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypePrepaidGetSummaryResponse
 * @date 02/07/2012
 */
class OvhTypePrepaidGetSummaryResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypePrepaidGetSummaryReturn
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypePrepaidGetSummaryReturn return
	 * @return OvhTypePrepaidGetSummaryResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>$_return));
	}
	/**
	 * Set return
	 * @param prepaidGetSummaryReturn return
	 * @return prepaidGetSummaryReturn
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypeprepaidGetSummaryReturn
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