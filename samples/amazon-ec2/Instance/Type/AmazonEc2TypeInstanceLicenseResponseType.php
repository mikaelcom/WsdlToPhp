<?php
/**
 * Class file for AmazonEc2TypeInstanceLicenseResponseType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeInstanceLicenseResponseType
 * @date 10/07/2012
 */
class AmazonEc2TypeInstanceLicenseResponseType extends AmazonEc2WsdlClass
{
	/**
	 * The pool
	 * @var string
	 */
	public $pool;
	/**
	 * Constructor
	 * @param string pool
	 * @return AmazonEc2TypeInstanceLicenseResponseType
	 */
	public function __construct($_pool = null)
	{
		parent::__construct(array('pool'=>$_pool));
	}
	/**
	 * Set pool
	 * @param string pool
	 * @return string
	 */
	public function setPool($_pool)
	{
		return ($this->pool = $_pool);
	}
	/**
	 * Get pool
	 * @return string
	 */
	public function getPool()
	{
		return $this->pool;
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