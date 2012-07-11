<?php
/**
 * Class file for AmazonEc2TypeCustomerGatewayType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeCustomerGatewayType
 * @date 10/07/2012
 */
class AmazonEc2TypeCustomerGatewayType extends AmazonEc2WsdlClass
{
	/**
	 * The customerGatewayId
	 * @var string
	 */
	public $customerGatewayId;
	/**
	 * The state
	 * @var string
	 */
	public $state;
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
	 * The tagSet
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonEc2TypeResourceTagSetType
	 */
	public $tagSet;
	/**
	 * Constructor
	 * @param string customerGatewayId
	 * @param string state
	 * @param string type
	 * @param string ipAddress
	 * @param int bgpAsn
	 * @param AmazonEc2TypeResourceTagSetType tagSet
	 * @return AmazonEc2TypeCustomerGatewayType
	 */
	public function __construct($_customerGatewayId = null,$_state = null,$_type = null,$_ipAddress = null,$_bgpAsn = null,$_tagSet = null)
	{
		parent::__construct(array('customerGatewayId'=>$_customerGatewayId,'state'=>$_state,'type'=>$_type,'ipAddress'=>$_ipAddress,'bgpAsn'=>$_bgpAsn,'tagSet'=>$_tagSet));
	}
	/**
	 * Set customerGatewayId
	 * @param string customerGatewayId
	 * @return string
	 */
	public function setCustomerGatewayId($_customerGatewayId)
	{
		return ($this->customerGatewayId = $_customerGatewayId);
	}
	/**
	 * Get customerGatewayId
	 * @return string
	 */
	public function getCustomerGatewayId()
	{
		return $this->customerGatewayId;
	}
	/**
	 * Set state
	 * @param string state
	 * @return string
	 */
	public function setState($_state)
	{
		return ($this->state = $_state);
	}
	/**
	 * Get state
	 * @return string
	 */
	public function getState()
	{
		return $this->state;
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
	 * Set tagSet
	 * @param ResourceTagSetType tagSet
	 * @return ResourceTagSetType
	 */
	public function setTagSet($_tagSet)
	{
		return ($this->tagSet = $_tagSet);
	}
	/**
	 * Get tagSet
	 * @return AmazonEc2TypeResourceTagSetType
	 */
	public function getTagSet()
	{
		return $this->tagSet;
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