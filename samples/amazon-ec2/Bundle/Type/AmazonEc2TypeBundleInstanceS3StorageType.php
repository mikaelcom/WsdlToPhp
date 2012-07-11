<?php
/**
 * Class file for AmazonEc2TypeBundleInstanceS3StorageType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeBundleInstanceS3StorageType
 * @date 10/07/2012
 */
class AmazonEc2TypeBundleInstanceS3StorageType extends AmazonEc2WsdlClass
{
	/**
	 * The bucket
	 * @var string
	 */
	public $bucket;
	/**
	 * The prefix
	 * @var string
	 */
	public $prefix;
	/**
	 * The awsAccessKeyId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $awsAccessKeyId;
	/**
	 * The uploadPolicy
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $uploadPolicy;
	/**
	 * The uploadPolicySignature
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $uploadPolicySignature;
	/**
	 * Constructor
	 * @param string bucket
	 * @param string prefix
	 * @param string awsAccessKeyId
	 * @param string uploadPolicy
	 * @param string uploadPolicySignature
	 * @return AmazonEc2TypeBundleInstanceS3StorageType
	 */
	public function __construct($_bucket = null,$_prefix = null,$_awsAccessKeyId = null,$_uploadPolicy = null,$_uploadPolicySignature = null)
	{
		parent::__construct(array('bucket'=>$_bucket,'prefix'=>$_prefix,'awsAccessKeyId'=>$_awsAccessKeyId,'uploadPolicy'=>$_uploadPolicy,'uploadPolicySignature'=>$_uploadPolicySignature));
	}
	/**
	 * Set bucket
	 * @param string bucket
	 * @return string
	 */
	public function setBucket($_bucket)
	{
		return ($this->bucket = $_bucket);
	}
	/**
	 * Get bucket
	 * @return string
	 */
	public function getBucket()
	{
		return $this->bucket;
	}
	/**
	 * Set prefix
	 * @param string prefix
	 * @return string
	 */
	public function setPrefix($_prefix)
	{
		return ($this->prefix = $_prefix);
	}
	/**
	 * Get prefix
	 * @return string
	 */
	public function getPrefix()
	{
		return $this->prefix;
	}
	/**
	 * Set awsAccessKeyId
	 * @param string awsAccessKeyId
	 * @return string
	 */
	public function setAwsAccessKeyId($_awsAccessKeyId)
	{
		return ($this->awsAccessKeyId = $_awsAccessKeyId);
	}
	/**
	 * Get awsAccessKeyId
	 * @return string
	 */
	public function getAwsAccessKeyId()
	{
		return $this->awsAccessKeyId;
	}
	/**
	 * Set uploadPolicy
	 * @param string uploadPolicy
	 * @return string
	 */
	public function setUploadPolicy($_uploadPolicy)
	{
		return ($this->uploadPolicy = $_uploadPolicy);
	}
	/**
	 * Get uploadPolicy
	 * @return string
	 */
	public function getUploadPolicy()
	{
		return $this->uploadPolicy;
	}
	/**
	 * Set uploadPolicySignature
	 * @param string uploadPolicySignature
	 * @return string
	 */
	public function setUploadPolicySignature($_uploadPolicySignature)
	{
		return ($this->uploadPolicySignature = $_uploadPolicySignature);
	}
	/**
	 * Get uploadPolicySignature
	 * @return string
	 */
	public function getUploadPolicySignature()
	{
		return $this->uploadPolicySignature;
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