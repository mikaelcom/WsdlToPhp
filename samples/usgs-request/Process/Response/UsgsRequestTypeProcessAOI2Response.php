<?php
/**
 * Class file for UsgsRequestTypeProcessAOI2Response
 * @date 08/07/2012
 */
/**
 * Class UsgsRequestTypeProcessAOI2Response
 * @date 08/07/2012
 */
class UsgsRequestTypeProcessAOI2Response extends UsgsRequestWsdlClass
{
	/**
	 * The processAOI2Return
	 * @var string
	 */
	public $processAOI2Return;
	/**
	 * Constructor
	 * @param string processAOI2Return
	 * @return UsgsRequestTypeProcessAOI2Response
	 */
	public function __construct($_processAOI2Return = null)
	{
		parent::__construct(array('processAOI2Return'=>$_processAOI2Return));
	}
	/**
	 * Set processAOI2Return
	 * @param string processAOI2Return
	 * @return string
	 */
	public function setProcessAOI2Return($_processAOI2Return)
	{
		return ($this->processAOI2Return = $_processAOI2Return);
	}
	/**
	 * Get processAOI2Return
	 * @return string
	 */
	public function getProcessAOI2Return()
	{
		return $this->processAOI2Return;
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