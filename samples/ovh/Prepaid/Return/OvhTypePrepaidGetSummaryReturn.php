<?php
/**
 * Class file for OvhTypePrepaidGetSummaryReturn
 * @date 02/07/2012
 */
/**
 * Class OvhTypePrepaidGetSummaryReturn
 * @date 02/07/2012
 */
class OvhTypePrepaidGetSummaryReturn extends OvhWsdlClass
{
	/**
	 * The contract
	 * @var string
	 */
	public $contract;
	/**
	 * The threshold
	 * @var int
	 */
	public $threshold;
	/**
	 * The balance
	 * @var float
	 */
	public $balance;
	/**
	 * The md5
	 * @var string
	 */
	public $md5;
	/**
	 * Constructor
	 * @param string contract
	 * @param int threshold
	 * @param float balance
	 * @param string md5
	 * @return OvhTypePrepaidGetSummaryReturn
	 */
	public function __construct($_contract = null,$_threshold = null,$_balance = null,$_md5 = null)
	{
		parent::__construct(array('contract'=>$_contract,'threshold'=>$_threshold,'balance'=>$_balance,'md5'=>$_md5));
	}
	/**
	 * Set contract
	 * @param string contract
	 * @return string
	 */
	public function setContract($_contract)
	{
		return ($this->contract = $_contract);
	}
	/**
	 * Get contract
	 * @return string
	 */
	public function getContract()
	{
		return $this->contract;
	}
	/**
	 * Set threshold
	 * @param int threshold
	 * @return int
	 */
	public function setThreshold($_threshold)
	{
		return ($this->threshold = $_threshold);
	}
	/**
	 * Get threshold
	 * @return int
	 */
	public function getThreshold()
	{
		return $this->threshold;
	}
	/**
	 * Set balance
	 * @param float balance
	 * @return float
	 */
	public function setBalance($_balance)
	{
		return ($this->balance = $_balance);
	}
	/**
	 * Get balance
	 * @return float
	 */
	public function getBalance()
	{
		return $this->balance;
	}
	/**
	 * Set md5
	 * @param string md5
	 * @return string
	 */
	public function setMd5($_md5)
	{
		return ($this->md5 = $_md5);
	}
	/**
	 * Get md5
	 * @return string
	 */
	public function getMd5()
	{
		return $this->md5;
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