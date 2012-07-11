<?php
/**
 * Class file for OvhTypePopListByMasterNicResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypePopListByMasterNicResponse
 * @date 02/07/2012
 */
class OvhTypePopListByMasterNicResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeMyArrayOfPopStructType
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeMyArrayOfPopStructType return
	 * @return OvhTypePopListByMasterNicResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>new OvhTypeMyArrayOfPopStructType($_return)));
	}
	/**
	 * Set return
	 * @param MyArrayOfPopStructType return
	 * @return MyArrayOfPopStructType
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypeMyArrayOfPopStructType
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