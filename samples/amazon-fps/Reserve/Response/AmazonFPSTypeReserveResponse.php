<?php
/**
 * Class file for AmazonFPSTypeReserveResponse
 * @date 10/07/2012
 */
/**
 * Class AmazonFPSTypeReserveResponse
 * @date 10/07/2012
 */
class AmazonFPSTypeReserveResponse extends AmazonFPSWsdlClass
{
	/**
	 * The ReserveResult
	 * @var AmazonFPSTypeReserveResult
	 */
	public $ReserveResult;
	/**
	 * The ResponseMetadata
	 * @var AmazonFPSTypeResponseMetadata
	 */
	public $ResponseMetadata;
	/**
	 * Constructor
	 * @param AmazonFPSTypeReserveResult ReserveResult
	 * @param AmazonFPSTypeResponseMetadata ResponseMetadata
	 * @return AmazonFPSTypeReserveResponse
	 */
	public function __construct($_ReserveResult = null,$_ResponseMetadata = null)
	{
		parent::__construct(array('ReserveResult'=>$_ReserveResult,'ResponseMetadata'=>$_ResponseMetadata));
	}
	/**
	 * Set ReserveResult
	 * @param ReserveResult ReserveResult
	 * @return ReserveResult
	 */
	public function setReserveResult($_ReserveResult)
	{
		return ($this->ReserveResult = $_ReserveResult);
	}
	/**
	 * Get ReserveResult
	 * @return AmazonFPSTypeReserveResult
	 */
	public function getReserveResult()
	{
		return $this->ReserveResult;
	}
	/**
	 * Set ResponseMetadata
	 * @param ResponseMetadata ResponseMetadata
	 * @return ResponseMetadata
	 */
	public function setResponseMetadata($_ResponseMetadata)
	{
		return ($this->ResponseMetadata = $_ResponseMetadata);
	}
	/**
	 * Get ResponseMetadata
	 * @return AmazonFPSTypeResponseMetadata
	 */
	public function getResponseMetadata()
	{
		return $this->ResponseMetadata;
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