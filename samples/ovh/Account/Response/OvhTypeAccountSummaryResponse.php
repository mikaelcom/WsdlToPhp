<?php
/**
 * Class file for OvhTypeAccountSummaryResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeAccountSummaryResponse
 * @date 02/07/2012
 */
class OvhTypeAccountSummaryResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeAccountSummaryReturn
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeAccountSummaryReturn return
	 * @return OvhTypeAccountSummaryResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>$_return));
	}
	/**
	 * Set return
	 * @param accountSummaryReturn return
	 * @return accountSummaryReturn
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypeaccountSummaryReturn
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