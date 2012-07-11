<?php
/**
 * Class file for AmazonFPSTypeTokenUsageLimit
 * @date 10/07/2012
 */
/**
 * Class AmazonFPSTypeTokenUsageLimit
 * @date 10/07/2012
 */
class AmazonFPSTypeTokenUsageLimit extends AmazonFPSWsdlClass
{
	/**
	 * The Count
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var integer
	 */
	public $Count;
	/**
	 * The Amount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonFPSTypeAmount
	 */
	public $Amount;
	/**
	 * The LastResetCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var integer
	 */
	public $LastResetCount;
	/**
	 * The LastResetAmount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonFPSTypeAmount
	 */
	public $LastResetAmount;
	/**
	 * The LastResetTimestamp
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var dateTime
	 */
	public $LastResetTimestamp;
	/**
	 * Constructor
	 * @param integer Count
	 * @param AmazonFPSTypeAmount Amount
	 * @param integer LastResetCount
	 * @param AmazonFPSTypeAmount LastResetAmount
	 * @param dateTime LastResetTimestamp
	 * @return AmazonFPSTypeTokenUsageLimit
	 */
	public function __construct($_Count = null,$_Amount = null,$_LastResetCount = null,$_LastResetAmount = null,$_LastResetTimestamp = null)
	{
		parent::__construct(array('Count'=>$_Count,'Amount'=>$_Amount,'LastResetCount'=>$_LastResetCount,'LastResetAmount'=>$_LastResetAmount,'LastResetTimestamp'=>$_LastResetTimestamp));
	}
	/**
	 * Set Count
	 * @param integer Count
	 * @return integer
	 */
	public function setCount($_Count)
	{
		return ($this->Count = $_Count);
	}
	/**
	 * Get Count
	 * @return integer
	 */
	public function getCount()
	{
		return $this->Count;
	}
	/**
	 * Set Amount
	 * @param Amount Amount
	 * @return Amount
	 */
	public function setAmount($_Amount)
	{
		return ($this->Amount = $_Amount);
	}
	/**
	 * Get Amount
	 * @return AmazonFPSTypeAmount
	 */
	public function getAmount()
	{
		return $this->Amount;
	}
	/**
	 * Set LastResetCount
	 * @param integer LastResetCount
	 * @return integer
	 */
	public function setLastResetCount($_LastResetCount)
	{
		return ($this->LastResetCount = $_LastResetCount);
	}
	/**
	 * Get LastResetCount
	 * @return integer
	 */
	public function getLastResetCount()
	{
		return $this->LastResetCount;
	}
	/**
	 * Set LastResetAmount
	 * @param Amount LastResetAmount
	 * @return Amount
	 */
	public function setLastResetAmount($_LastResetAmount)
	{
		return ($this->LastResetAmount = $_LastResetAmount);
	}
	/**
	 * Get LastResetAmount
	 * @return AmazonFPSTypeAmount
	 */
	public function getLastResetAmount()
	{
		return $this->LastResetAmount;
	}
	/**
	 * Set LastResetTimestamp
	 * @param dateTime LastResetTimestamp
	 * @return dateTime
	 */
	public function setLastResetTimestamp($_LastResetTimestamp)
	{
		return ($this->LastResetTimestamp = $_LastResetTimestamp);
	}
	/**
	 * Get LastResetTimestamp
	 * @return dateTime
	 */
	public function getLastResetTimestamp()
	{
		return $this->LastResetTimestamp;
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