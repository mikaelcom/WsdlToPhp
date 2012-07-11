<?php
/**
 * Class file for OvhTypePrepaidGetHistoryResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypePrepaidGetHistoryResponse
 * @date 02/07/2012
 */
class OvhTypePrepaidGetHistoryResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypePrepaidGetHistoryReturn
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypePrepaidGetHistoryReturn return
	 * @return OvhTypePrepaidGetHistoryResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>$_return));
	}
	/**
	 * Set return
	 * @param prepaidGetHistoryReturn return
	 * @return prepaidGetHistoryReturn
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypeprepaidGetHistoryReturn
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