<?php
/**
 * Class file for AmazonEc2TypeBundleInstanceTaskStorageType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeBundleInstanceTaskStorageType
 * @date 10/07/2012
 */
class AmazonEc2TypeBundleInstanceTaskStorageType extends AmazonEc2WsdlClass
{
	/**
	 * The S3
	 * @var AmazonEc2TypeBundleInstanceS3StorageType
	 */
	public $S3;
	/**
	 * Constructor
	 * @param AmazonEc2TypeBundleInstanceS3StorageType S3
	 * @return AmazonEc2TypeBundleInstanceTaskStorageType
	 */
	public function __construct($_S3 = null)
	{
		parent::__construct(array('S3'=>$_S3));
	}
	/**
	 * Set S3
	 * @param BundleInstanceS3StorageType S3
	 * @return BundleInstanceS3StorageType
	 */
	public function setS3($_S3)
	{
		return ($this->S3 = $_S3);
	}
	/**
	 * Get S3
	 * @return AmazonEc2TypeBundleInstanceS3StorageType
	 */
	public function getS3()
	{
		return $this->S3;
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