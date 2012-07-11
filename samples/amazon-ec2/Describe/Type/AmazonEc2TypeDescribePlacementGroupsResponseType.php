<?php
/**
 * Class file for AmazonEc2TypeDescribePlacementGroupsResponseType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDescribePlacementGroupsResponseType
 * @date 10/07/2012
 */
class AmazonEc2TypeDescribePlacementGroupsResponseType extends AmazonEc2WsdlClass
{
	/**
	 * The requestId
	 * @var string
	 */
	public $requestId;
	/**
	 * The placementGroupSet
	 * @var AmazonEc2TypePlacementGroupSetType
	 */
	public $placementGroupSet;
	/**
	 * Constructor
	 * @param string requestId
	 * @param AmazonEc2TypePlacementGroupSetType placementGroupSet
	 * @return AmazonEc2TypeDescribePlacementGroupsResponseType
	 */
	public function __construct($_requestId = null,$_placementGroupSet = null)
	{
		parent::__construct(array('requestId'=>$_requestId,'placementGroupSet'=>$_placementGroupSet));
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
	 * Set placementGroupSet
	 * @param PlacementGroupSetType placementGroupSet
	 * @return PlacementGroupSetType
	 */
	public function setPlacementGroupSet($_placementGroupSet)
	{
		return ($this->placementGroupSet = $_placementGroupSet);
	}
	/**
	 * Get placementGroupSet
	 * @return AmazonEc2TypePlacementGroupSetType
	 */
	public function getPlacementGroupSet()
	{
		return $this->placementGroupSet;
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