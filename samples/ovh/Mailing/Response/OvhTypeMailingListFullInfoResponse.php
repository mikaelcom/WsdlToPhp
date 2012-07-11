<?php
/**
 * Class file for OvhTypeMailingListFullInfoResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeMailingListFullInfoResponse
 * @date 02/07/2012
 */
class OvhTypeMailingListFullInfoResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeMailingListFullInfoReturn
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeMailingListFullInfoReturn return
	 * @return OvhTypeMailingListFullInfoResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>$_return));
	}
	/**
	 * Set return
	 * @param mailingListFullInfoReturn return
	 * @return mailingListFullInfoReturn
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypemailingListFullInfoReturn
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