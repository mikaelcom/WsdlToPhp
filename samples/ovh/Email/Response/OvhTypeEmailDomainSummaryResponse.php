<?php
/**
 * Class file for OvhTypeEmailDomainSummaryResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeEmailDomainSummaryResponse
 * @date 02/07/2012
 */
class OvhTypeEmailDomainSummaryResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeEmailDomainSummaryReturn
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeEmailDomainSummaryReturn return
	 * @return OvhTypeEmailDomainSummaryResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>$_return));
	}
	/**
	 * Set return
	 * @param emailDomainSummaryReturn return
	 * @return emailDomainSummaryReturn
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypeemailDomainSummaryReturn
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