<?php
/**
 * Class file for OvhTypeTelephonyDirectoryPJCodeResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyDirectoryPJCodeResponse
 * @date 02/07/2012
 */
class OvhTypeTelephonyDirectoryPJCodeResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeMyArrayOfTelephonyDirectoryPJHeadingStructType
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeMyArrayOfTelephonyDirectoryPJHeadingStructType return
	 * @return OvhTypeTelephonyDirectoryPJCodeResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>new OvhTypeMyArrayOfTelephonyDirectoryPJHeadingStructType($_return)));
	}
	/**
	 * Set return
	 * @param MyArrayOfTelephonyDirectoryPJHeadingStructType return
	 * @return MyArrayOfTelephonyDirectoryPJHeadingStructType
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypeMyArrayOfTelephonyDirectoryPJHeadingStructType
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