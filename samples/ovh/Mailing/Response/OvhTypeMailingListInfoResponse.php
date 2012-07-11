<?php
/**
 * Class file for OvhTypeMailingListInfoResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeMailingListInfoResponse
 * @date 02/07/2012
 */
class OvhTypeMailingListInfoResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeMailingListStruct
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeMailingListStruct return
	 * @return OvhTypeMailingListInfoResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>$_return));
	}
	/**
	 * Set return
	 * @param mailingListStruct return
	 * @return mailingListStruct
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypemailingListStruct
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