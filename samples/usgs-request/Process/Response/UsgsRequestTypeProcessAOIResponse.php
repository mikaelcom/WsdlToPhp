<?php
/**
 * Class file for UsgsRequestTypeProcessAOIResponse
 * @date 08/07/2012
 */
/**
 * Class UsgsRequestTypeProcessAOIResponse
 * @date 08/07/2012
 */
class UsgsRequestTypeProcessAOIResponse extends UsgsRequestWsdlClass
{
	/**
	 * The processAOIReturn
	 * @var string
	 */
	public $processAOIReturn;
	/**
	 * Constructor
	 * @param string processAOIReturn
	 * @return UsgsRequestTypeProcessAOIResponse
	 */
	public function __construct($_processAOIReturn = null)
	{
		parent::__construct(array('processAOIReturn'=>$_processAOIReturn));
	}
	/**
	 * Set processAOIReturn
	 * @param string processAOIReturn
	 * @return string
	 */
	public function setProcessAOIReturn($_processAOIReturn)
	{
		return ($this->processAOIReturn = $_processAOIReturn);
	}
	/**
	 * Get processAOIReturn
	 * @return string
	 */
	public function getProcessAOIReturn()
	{
		return $this->processAOIReturn;
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