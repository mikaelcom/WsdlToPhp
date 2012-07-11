<?php
/**
 * Class file for AmazonEc2TypeDescribeSnapshotsOwnerType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDescribeSnapshotsOwnerType
 * @date 10/07/2012
 */
class AmazonEc2TypeDescribeSnapshotsOwnerType extends AmazonEc2WsdlClass
{
	/**
	 * The owner
	 * @var string
	 */
	public $owner;
	/**
	 * Constructor
	 * @param string owner
	 * @return AmazonEc2TypeDescribeSnapshotsOwnerType
	 */
	public function __construct($_owner = null)
	{
		parent::__construct(array('owner'=>$_owner));
	}
	/**
	 * Set owner
	 * @param string owner
	 * @return string
	 */
	public function setOwner($_owner)
	{
		return ($this->owner = $_owner);
	}
	/**
	 * Get owner
	 * @return string
	 */
	public function getOwner()
	{
		return $this->owner;
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