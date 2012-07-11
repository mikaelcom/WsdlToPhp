<?php
/**
 * Class file for AmazonEc2TypeReservationInfoType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeReservationInfoType
 * @date 10/07/2012
 */
class AmazonEc2TypeReservationInfoType extends AmazonEc2WsdlClass
{
	/**
	 * The reservationId
	 * @var string
	 */
	public $reservationId;
	/**
	 * The ownerId
	 * @var string
	 */
	public $ownerId;
	/**
	 * The groupSet
	 * @var AmazonEc2TypeGroupSetType
	 */
	public $groupSet;
	/**
	 * The instancesSet
	 * @var AmazonEc2TypeRunningInstancesSetType
	 */
	public $instancesSet;
	/**
	 * The requesterId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $requesterId;
	/**
	 * Constructor
	 * @param string reservationId
	 * @param string ownerId
	 * @param AmazonEc2TypeGroupSetType groupSet
	 * @param AmazonEc2TypeRunningInstancesSetType instancesSet
	 * @param string requesterId
	 * @return AmazonEc2TypeReservationInfoType
	 */
	public function __construct($_reservationId = null,$_ownerId = null,$_groupSet = null,$_instancesSet = null,$_requesterId = null)
	{
		parent::__construct(array('reservationId'=>$_reservationId,'ownerId'=>$_ownerId,'groupSet'=>$_groupSet,'instancesSet'=>$_instancesSet,'requesterId'=>$_requesterId));
	}
	/**
	 * Set reservationId
	 * @param string reservationId
	 * @return string
	 */
	public function setReservationId($_reservationId)
	{
		return ($this->reservationId = $_reservationId);
	}
	/**
	 * Get reservationId
	 * @return string
	 */
	public function getReservationId()
	{
		return $this->reservationId;
	}
	/**
	 * Set ownerId
	 * @param string ownerId
	 * @return string
	 */
	public function setOwnerId($_ownerId)
	{
		return ($this->ownerId = $_ownerId);
	}
	/**
	 * Get ownerId
	 * @return string
	 */
	public function getOwnerId()
	{
		return $this->ownerId;
	}
	/**
	 * Set groupSet
	 * @param GroupSetType groupSet
	 * @return GroupSetType
	 */
	public function setGroupSet($_groupSet)
	{
		return ($this->groupSet = $_groupSet);
	}
	/**
	 * Get groupSet
	 * @return AmazonEc2TypeGroupSetType
	 */
	public function getGroupSet()
	{
		return $this->groupSet;
	}
	/**
	 * Set instancesSet
	 * @param RunningInstancesSetType instancesSet
	 * @return RunningInstancesSetType
	 */
	public function setInstancesSet($_instancesSet)
	{
		return ($this->instancesSet = $_instancesSet);
	}
	/**
	 * Get instancesSet
	 * @return AmazonEc2TypeRunningInstancesSetType
	 */
	public function getInstancesSet()
	{
		return $this->instancesSet;
	}
	/**
	 * Set requesterId
	 * @param string requesterId
	 * @return string
	 */
	public function setRequesterId($_requesterId)
	{
		return ($this->requesterId = $_requesterId);
	}
	/**
	 * Get requesterId
	 * @return string
	 */
	public function getRequesterId()
	{
		return $this->requesterId;
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