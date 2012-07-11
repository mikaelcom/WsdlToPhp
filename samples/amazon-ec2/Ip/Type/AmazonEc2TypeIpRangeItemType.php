<?php
/**
 * Class file for AmazonEc2TypeIpRangeItemType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeIpRangeItemType
 * @date 10/07/2012
 */
class AmazonEc2TypeIpRangeItemType extends AmazonEc2WsdlClass
{
	/**
	 * The cidrIp
	 * @var string
	 */
	public $cidrIp;
	/**
	 * Constructor
	 * @param string cidrIp
	 * @return AmazonEc2TypeIpRangeItemType
	 */
	public function __construct($_cidrIp = null)
	{
		parent::__construct(array('cidrIp'=>$_cidrIp));
	}
	/**
	 * Set cidrIp
	 * @param string cidrIp
	 * @return string
	 */
	public function setCidrIp($_cidrIp)
	{
		return ($this->cidrIp = $_cidrIp);
	}
	/**
	 * Get cidrIp
	 * @return string
	 */
	public function getCidrIp()
	{
		return $this->cidrIp;
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