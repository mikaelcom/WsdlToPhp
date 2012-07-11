<?php
/**
 * Class file for OvhTypePopGetQuotaReturn
 * @date 02/07/2012
 */
/**
 * Class OvhTypePopGetQuotaReturn
 * @date 02/07/2012
 */
class OvhTypePopGetQuotaReturn extends OvhWsdlClass
{
	/**
	 * The emailCount
	 * @var int
	 */
	public $emailCount;
	/**
	 * The quota
	 * @var int
	 */
	public $quota;
	/**
	 * The maxQuota
	 * @var int
	 */
	public $maxQuota;
	/**
	 * Constructor
	 * @param int emailCount
	 * @param int quota
	 * @param int maxQuota
	 * @return OvhTypePopGetQuotaReturn
	 */
	public function __construct($_emailCount = null,$_quota = null,$_maxQuota = null)
	{
		parent::__construct(array('emailCount'=>$_emailCount,'quota'=>$_quota,'maxQuota'=>$_maxQuota));
	}
	/**
	 * Set emailCount
	 * @param int emailCount
	 * @return int
	 */
	public function setEmailCount($_emailCount)
	{
		return ($this->emailCount = $_emailCount);
	}
	/**
	 * Get emailCount
	 * @return int
	 */
	public function getEmailCount()
	{
		return $this->emailCount;
	}
	/**
	 * Set quota
	 * @param int quota
	 * @return int
	 */
	public function setQuota($_quota)
	{
		return ($this->quota = $_quota);
	}
	/**
	 * Get quota
	 * @return int
	 */
	public function getQuota()
	{
		return $this->quota;
	}
	/**
	 * Set maxQuota
	 * @param int maxQuota
	 * @return int
	 */
	public function setMaxQuota($_maxQuota)
	{
		return ($this->maxQuota = $_maxQuota);
	}
	/**
	 * Get maxQuota
	 * @return int
	 */
	public function getMaxQuota()
	{
		return $this->maxQuota;
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