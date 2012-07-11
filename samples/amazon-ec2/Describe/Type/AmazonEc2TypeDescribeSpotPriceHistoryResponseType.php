<?php
/**
 * Class file for AmazonEc2TypeDescribeSpotPriceHistoryResponseType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDescribeSpotPriceHistoryResponseType
 * @date 10/07/2012
 */
class AmazonEc2TypeDescribeSpotPriceHistoryResponseType extends AmazonEc2WsdlClass
{
	/**
	 * The requestId
	 * @var string
	 */
	public $requestId;
	/**
	 * The spotPriceHistorySet
	 * @var AmazonEc2TypeSpotPriceHistorySetType
	 */
	public $spotPriceHistorySet;
	/**
	 * The nextToken
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $nextToken;
	/**
	 * Constructor
	 * @param string requestId
	 * @param AmazonEc2TypeSpotPriceHistorySetType spotPriceHistorySet
	 * @param string nextToken
	 * @return AmazonEc2TypeDescribeSpotPriceHistoryResponseType
	 */
	public function __construct($_requestId = null,$_spotPriceHistorySet = null,$_nextToken = null)
	{
		parent::__construct(array('requestId'=>$_requestId,'spotPriceHistorySet'=>$_spotPriceHistorySet,'nextToken'=>$_nextToken));
	}
	/**
	 * Set requestId
	 * @param string requestId
	 * @return string
	 */
	public function setRequestId($_requestId)
	{
		return ($this->requestId = $_requestId);
	}
	/**
	 * Get requestId
	 * @return string
	 */
	public function getRequestId()
	{
		return $this->requestId;
	}
	/**
	 * Set spotPriceHistorySet
	 * @param SpotPriceHistorySetType spotPriceHistorySet
	 * @return SpotPriceHistorySetType
	 */
	public function setSpotPriceHistorySet($_spotPriceHistorySet)
	{
		return ($this->spotPriceHistorySet = $_spotPriceHistorySet);
	}
	/**
	 * Get spotPriceHistorySet
	 * @return AmazonEc2TypeSpotPriceHistorySetType
	 */
	public function getSpotPriceHistorySet()
	{
		return $this->spotPriceHistorySet;
	}
	/**
	 * Set nextToken
	 * @param string nextToken
	 * @return string
	 */
	public function setNextToken($_nextToken)
	{
		return ($this->nextToken = $_nextToken);
	}
	/**
	 * Get nextToken
	 * @return string
	 */
	public function getNextToken()
	{
		return $this->nextToken;
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