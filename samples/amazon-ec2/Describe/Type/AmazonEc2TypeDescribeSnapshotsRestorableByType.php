<?php
/**
 * Class file for AmazonEc2TypeDescribeSnapshotsRestorableByType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDescribeSnapshotsRestorableByType
 * @date 10/07/2012
 */
class AmazonEc2TypeDescribeSnapshotsRestorableByType extends AmazonEc2WsdlClass
{
	/**
	 * The user
	 * @var string
	 */
	public $user;
	/**
	 * Constructor
	 * @param string user
	 * @return AmazonEc2TypeDescribeSnapshotsRestorableByType
	 */
	public function __construct($_user = null)
	{
		parent::__construct(array('user'=>$_user));
	}
	/**
	 * Set user
	 * @param string user
	 * @return string
	 */
	public function setUser($_user)
	{
		return ($this->user = $_user);
	}
	/**
	 * Get user
	 * @return string
	 */
	public function getUser()
	{
		return $this->user;
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