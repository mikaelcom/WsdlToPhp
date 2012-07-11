<?php
/**
 * Class file for OvhTypeMultiFtpListResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeMultiFtpListResponse
 * @date 02/07/2012
 */
class OvhTypeMultiFtpListResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeMyArrayOfMultiFtpStructType
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeMyArrayOfMultiFtpStructType return
	 * @return OvhTypeMultiFtpListResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>new OvhTypeMyArrayOfMultiFtpStructType($_return)));
	}
	/**
	 * Set return
	 * @param MyArrayOfMultiFtpStructType return
	 * @return MyArrayOfMultiFtpStructType
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypeMyArrayOfMultiFtpStructType
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