<?php
/**
 * Class file for OvhTypeOverquotaInfoReturn
 * @date 02/07/2012
 */
/**
 * Class OvhTypeOverquotaInfoReturn
 * @date 02/07/2012
 */
class OvhTypeOverquotaInfoReturn extends OvhWsdlClass
{
	/**
	 * The domain
	 * @var string
	 */
	public $domain;
	/**
	 * The quota
	 * @var OvhTypeMyArrayOfOverquotaInfoStructType
	 */
	public $quota;
	/**
	 * The capacities
	 * @var int
	 */
	public $capacities;
	/**
	 * The order
	 * @var int
	 */
	public $order;
	/**
	 * Constructor
	 * @param string domain
	 * @param OvhTypeMyArrayOfOverquotaInfoStructType quota
	 * @param int capacities
	 * @param int order
	 * @return OvhTypeOverquotaInfoReturn
	 */
	public function __construct($_domain = null,$_quota = null,$_capacities = null,$_order = null)
	{
		parent::__construct(array('domain'=>$_domain,'quota'=>new OvhTypeMyArrayOfOverquotaInfoStructType($_quota),'capacities'=>$_capacities,'order'=>$_order));
	}
	/**
	 * Set domain
	 * @param string domain
	 * @return string
	 */
	public function setDomain($_domain)
	{
		return ($this->domain = $_domain);
	}
	/**
	 * Get domain
	 * @return string
	 */
	public function getDomain()
	{
		return $this->domain;
	}
	/**
	 * Set quota
	 * @param MyArrayOfOverquotaInfoStructType quota
	 * @return MyArrayOfOverquotaInfoStructType
	 */
	public function setQuota($_quota)
	{
		return ($this->quota = $_quota);
	}
	/**
	 * Get quota
	 * @return OvhTypeMyArrayOfOverquotaInfoStructType
	 */
	public function getQuota()
	{
		return $this->quota;
	}
	/**
	 * Set capacities
	 * @param int capacities
	 * @return int
	 */
	public function setCapacities($_capacities)
	{
		return ($this->capacities = $_capacities);
	}
	/**
	 * Get capacities
	 * @return int
	 */
	public function getCapacities()
	{
		return $this->capacities;
	}
	/**
	 * Set order
	 * @param int order
	 * @return int
	 */
	public function setOrder($_order)
	{
		return ($this->order = $_order);
	}
	/**
	 * Get order
	 * @return int
	 */
	public function getOrder()
	{
		return $this->order;
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