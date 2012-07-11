<?php
/**
 * Class file for XiHistoricalTypeGetTopMoversByMarketCapitalization
 * @date 08/07/2012
 */
/**
 * Class XiHistoricalTypeGetTopMoversByMarketCapitalization
 * @date 08/07/2012
 */
class XiHistoricalTypeGetTopMoversByMarketCapitalization extends XiHistoricalWsdlClass
{
	/**
	 * The AsOfDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AsOfDate;
	/**
	 * The LowCapitalization
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $LowCapitalization;
	/**
	 * The HighCapitalization
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $HighCapitalization;
	/**
	 * The Count
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $Count;
	/**
	 * Constructor
	 * @param string AsOfDate
	 * @param double LowCapitalization
	 * @param double HighCapitalization
	 * @param int Count
	 * @return XiHistoricalTypeGetTopMoversByMarketCapitalization
	 */
	public function __construct($_AsOfDate = null,$_LowCapitalization,$_HighCapitalization,$_Count)
	{
		parent::__construct(array('AsOfDate'=>$_AsOfDate,'LowCapitalization'=>$_LowCapitalization,'HighCapitalization'=>$_HighCapitalization,'Count'=>$_Count));
	}
	/**
	 * Set AsOfDate
	 * @param string AsOfDate
	 * @return string
	 */
	public function setAsOfDate($_AsOfDate)
	{
		return ($this->AsOfDate = $_AsOfDate);
	}
	/**
	 * Get AsOfDate
	 * @return string
	 */
	public function getAsOfDate()
	{
		return $this->AsOfDate;
	}
	/**
	 * Set LowCapitalization
	 * @param double LowCapitalization
	 * @return double
	 */
	public function setLowCapitalization($_LowCapitalization)
	{
		return ($this->LowCapitalization = $_LowCapitalization);
	}
	/**
	 * Get LowCapitalization
	 * @return double
	 */
	public function getLowCapitalization()
	{
		return $this->LowCapitalization;
	}
	/**
	 * Set HighCapitalization
	 * @param double HighCapitalization
	 * @return double
	 */
	public function setHighCapitalization($_HighCapitalization)
	{
		return ($this->HighCapitalization = $_HighCapitalization);
	}
	/**
	 * Get HighCapitalization
	 * @return double
	 */
	public function getHighCapitalization()
	{
		return $this->HighCapitalization;
	}
	/**
	 * Set Count
	 * @param int Count
	 * @return int
	 */
	public function setCount($_Count)
	{
		return ($this->Count = $_Count);
	}
	/**
	 * Get Count
	 * @return int
	 */
	public function getCount()
	{
		return $this->Count;
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