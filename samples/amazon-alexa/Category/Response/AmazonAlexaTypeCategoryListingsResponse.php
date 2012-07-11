<?php
/**
 * Class file for AmazonAlexaTypeCategoryListingsResponse
 * @date 10/07/2012
 */
/**
 * Class AmazonAlexaTypeCategoryListingsResponse
 * @date 10/07/2012
 */
class AmazonAlexaTypeCategoryListingsResponse extends AmazonAlexaWsdlClass
{
	/**
	 * The Response
	 * @var AmazonAlexaTypeResponse
	 */
	public $Response;
	/**
	 * Constructor
	 * @param AmazonAlexaTypeResponse Response
	 * @return AmazonAlexaTypeCategoryListingsResponse
	 */
	public function __construct($_Response = null)
	{
		parent::__construct(array('Response'=>$_Response));
	}
	/**
	 * Set Response
	 * @param Response Response
	 * @return Response
	 */
	public function setResponse($_Response)
	{
		return ($this->Response = $_Response);
	}
	/**
	 * Get Response
	 * @return AmazonAlexaTypeResponse
	 */
	public function getResponse()
	{
		return $this->Response;
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