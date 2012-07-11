<?php
/**
 * Class file for AmazonEc2TypeCreateSpotDatafeedSubscriptionResponseType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeCreateSpotDatafeedSubscriptionResponseType
 * @date 10/07/2012
 */
class AmazonEc2TypeCreateSpotDatafeedSubscriptionResponseType extends AmazonEc2WsdlClass
{
	/**
	 * The requestId
	 * @var string
	 */
	public $requestId;
	/**
	 * The spotDatafeedSubscription
	 * @var AmazonEc2TypeSpotDatafeedSubscriptionType
	 */
	public $spotDatafeedSubscription;
	/**
	 * Constructor
	 * @param string requestId
	 * @param AmazonEc2TypeSpotDatafeedSubscriptionType spotDatafeedSubscription
	 * @return AmazonEc2TypeCreateSpotDatafeedSubscriptionResponseType
	 */
	public function __construct($_requestId = null,$_spotDatafeedSubscription = null)
	{
		parent::__construct(array('requestId'=>$_requestId,'spotDatafeedSubscription'=>$_spotDatafeedSubscription));
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
	 * Set spotDatafeedSubscription
	 * @param SpotDatafeedSubscriptionType spotDatafeedSubscription
	 * @return SpotDatafeedSubscriptionType
	 */
	public function setSpotDatafeedSubscription($_spotDatafeedSubscription)
	{
		return ($this->spotDatafeedSubscription = $_spotDatafeedSubscription);
	}
	/**
	 * Get spotDatafeedSubscription
	 * @return AmazonEc2TypeSpotDatafeedSubscriptionType
	 */
	public function getSpotDatafeedSubscription()
	{
		return $this->spotDatafeedSubscription;
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