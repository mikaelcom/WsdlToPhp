<?php
/**
 * Class file for AmazonFPSTypeErrorResponse
 * @date 10/07/2012
 */
/**
 * Class AmazonFPSTypeErrorResponse
 * @date 10/07/2012
 */
class AmazonFPSTypeErrorResponse extends AmazonFPSWsdlClass
{
	/**
	 * The Error
	 * @var AmazonFPSTypeError
	 */
	public $Error;
	/**
	 * The RequestId
	 * @var string
	 */
	public $RequestId;
	/**
	 * Constructor
	 * @param AmazonFPSTypeError Error
	 * @param string RequestId
	 * @return AmazonFPSTypeErrorResponse
	 */
	public function __construct($_Error = null,$_RequestId = null)
	{
		parent::__construct(array('Error'=>$_Error,'RequestId'=>$_RequestId));
	}
	/**
	 * Set Error
	 * @param Error Error
	 * @return Error
	 */
	public function setError($_Error)
	{
		return ($this->Error = $_Error);
	}
	/**
	 * Get Error
	 * @return AmazonFPSTypeError
	 */
	public function getError()
	{
		return $this->Error;
	}
	/**
	 * Set RequestId
	 * @param string RequestId
	 * @return string
	 */
	public function setRequestId($_RequestId)
	{
		return ($this->RequestId = $_RequestId);
	}
	/**
	 * Get RequestId
	 * @return string
	 */
	public function getRequestId()
	{
		return $this->RequestId;
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