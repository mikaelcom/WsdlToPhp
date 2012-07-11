<?php
/**
 * Class file for AmazonEc2TypeDescribeInstancesResponseType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDescribeInstancesResponseType
 * @date 10/07/2012
 */
class AmazonEc2TypeDescribeInstancesResponseType extends AmazonEc2WsdlClass
{
	/**
	 * The requestId
	 * @var string
	 */
	public $requestId;
	/**
	 * The reservationSet
	 * @var AmazonEc2TypeReservationSetType
	 */
	public $reservationSet;
	/**
	 * Constructor
	 * @param string requestId
	 * @param AmazonEc2TypeReservationSetType reservationSet
	 * @return AmazonEc2TypeDescribeInstancesResponseType
	 */
	public function __construct($_requestId = null,$_reservationSet = null)
	{
		parent::__construct(array('requestId'=>$_requestId,'reservationSet'=>$_reservationSet));
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
	 * Set reservationSet
	 * @param ReservationSetType reservationSet
	 * @return ReservationSetType
	 */
	public function setReservationSet($_reservationSet)
	{
		return ($this->reservationSet = $_reservationSet);
	}
	/**
	 * Get reservationSet
	 * @return AmazonEc2TypeReservationSetType
	 */
	public function getReservationSet()
	{
		return $this->reservationSet;
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