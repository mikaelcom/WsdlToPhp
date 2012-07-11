<?php
/**
 * Class file for OvhTypeAccountHistoryResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeAccountHistoryResponse
 * @date 02/07/2012
 */
class OvhTypeAccountHistoryResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeAccountHistoryReturn
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeAccountHistoryReturn return
	 * @return OvhTypeAccountHistoryResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>$_return));
	}
	/**
	 * Set return
	 * @param accountHistoryReturn return
	 * @return accountHistoryReturn
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypeaccountHistoryReturn
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