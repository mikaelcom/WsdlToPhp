<?php
/**
 * Class file for OvhTypeOverquotaInfoStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeOverquotaInfoStruct
 * @date 02/07/2012
 */
class OvhTypeOverquotaInfoStruct extends OvhWsdlClass
{
	/**
	 * The month
	 * @var string
	 */
	public $month;
	/**
	 * The traffic
	 * @var int
	 */
	public $traffic;
	/**
	 * The hits
	 * @var int
	 */
	public $hits;
	/**
	 * Constructor
	 * @param string month
	 * @param int traffic
	 * @param int hits
	 * @return OvhTypeOverquotaInfoStruct
	 */
	public function __construct($_month = null,$_traffic = null,$_hits = null)
	{
		parent::__construct(array('month'=>$_month,'traffic'=>$_traffic,'hits'=>$_hits));
	}
	/**
	 * Set month
	 * @param string month
	 * @return string
	 */
	public function setMonth($_month)
	{
		return ($this->month = $_month);
	}
	/**
	 * Get month
	 * @return string
	 */
	public function getMonth()
	{
		return $this->month;
	}
	/**
	 * Set traffic
	 * @param int traffic
	 * @return int
	 */
	public function setTraffic($_traffic)
	{
		return ($this->traffic = $_traffic);
	}
	/**
	 * Get traffic
	 * @return int
	 */
	public function getTraffic()
	{
		return $this->traffic;
	}
	/**
	 * Set hits
	 * @param int hits
	 * @return int
	 */
	public function setHits($_hits)
	{
		return ($this->hits = $_hits);
	}
	/**
	 * Get hits
	 * @return int
	 */
	public function getHits()
	{
		return $this->hits;
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