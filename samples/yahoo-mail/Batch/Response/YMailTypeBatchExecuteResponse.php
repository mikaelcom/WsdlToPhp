<?php
/**
 * Class file for YMailTypeBatchExecuteResponse
 * @date 02/07/2012
 */
/**
 * Class YMailTypeBatchExecuteResponse
 * @date 02/07/2012
 */
class YMailTypeBatchExecuteResponse extends YMailWsdlClass
{
	/**
	 * The response
	 * Meta informations :
	 * 	- minOccurs : 2
	 * 	- maxOccurs : unbounded
	 * @var YMailTypeBatchResponse
	 */
	public $response;
	/**
	 * Constructor
	 * @param YMailTypeBatchResponse response
	 * @return YMailTypeBatchExecuteResponse
	 */
	public function __construct($_response)
	{
		parent::__construct(array('response'=>$_response));
	}
	/**
	 * Set response
	 * @param BatchResponse response
	 * @return BatchResponse
	 */
	public function setResponse($_response)
	{
		return ($this->response = $_response);
	}
	/**
	 * Get response
	 * @return YMailTypeBatchResponse
	 */
	public function getResponse()
	{
		return $this->response;
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