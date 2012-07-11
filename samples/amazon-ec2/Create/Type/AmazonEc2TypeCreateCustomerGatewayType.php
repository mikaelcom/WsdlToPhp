<?php
/**
 * Class file for AmazonEc2TypeCreateCustomerGatewayType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeCreateCustomerGatewayType
 * @date 10/07/2012
 */
class AmazonEc2TypeCreateCustomerGatewayType extends AmazonEc2WsdlClass
{
	/**
	 * The type
	 * @var string
	 */
	public $type;
	/**
	 * The ipAddress
	 * @var string
	 */
	public $ipAddress;
	/**
	 * The bgpAsn
	 * @var int
	 */
	public $bgpAsn;
	/**
	 * Constructor
	 * @param string type
	 * @param string ipAddress
	 * @param int bgpAsn
	 * @return AmazonEc2TypeCreateCustomerGatewayType
	 */
	public function __construct($_type = null,$_ipAddress = null,$_bgpAsn = null)
	{
		parent::__construct(array('type'=>$_type,'ipAddress'=>$_ipAddress,'bgpAsn'=>$_bgpAsn));
	}
	/**
	 * Set type
	 * @param string type
	 * @return string
	 */
	public function setType($_type)
	{
		return ($this->type = $_type);
	}
	/**
	 * Get type
	 * @return string
	 */
	public function getType()
	{
		return $this->type;
	}
	/**
	 * Set ipAddress
	 * @param string ipAddress
	 * @return string
	 */
	public function setIpAddress($_ipAddress)
	{
		return ($this->ipAddress = $_ipAddress);
	}
	/**
	 * Get ipAddress
	 * @return string
	 */
	public function getIpAddress()
	{
		return $this->ipAddress;
	}
	/**
	 * Set bgpAsn
	 * @param int bgpAsn
	 * @return int
	 */
	public function setBgpAsn($_bgpAsn)
	{
		return ($this->bgpAsn = $_bgpAsn);
	}
	/**
	 * Get bgpAsn
	 * @return int
	 */
	public function getBgpAsn()
	{
		return $this->bgpAsn;
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