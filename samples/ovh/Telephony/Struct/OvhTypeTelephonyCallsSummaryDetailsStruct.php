<?php
/**
 * Class file for OvhTypeTelephonyCallsSummaryDetailsStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyCallsSummaryDetailsStruct
 * @date 02/07/2012
 */
class OvhTypeTelephonyCallsSummaryDetailsStruct extends OvhWsdlClass
{
	/**
	 * The count
	 * @var int
	 */
	public $count;
	/**
	 * The duration
	 * @var string
	 */
	public $duration;
	/**
	 * The priceWithoutVAT
	 * @var float
	 */
	public $priceWithoutVAT;
	/**
	 * Constructor
	 * @param int count
	 * @param string duration
	 * @param float priceWithoutVAT
	 * @return OvhTypeTelephonyCallsSummaryDetailsStruct
	 */
	public function __construct($_count = null,$_duration = null,$_priceWithoutVAT = null)
	{
		parent::__construct(array('count'=>$_count,'duration'=>$_duration,'priceWithoutVAT'=>$_priceWithoutVAT));
	}
	/**
	 * Set count
	 * @param int count
	 * @return int
	 */
	public function setCount($_count)
	{
		return ($this->count = $_count);
	}
	/**
	 * Get count
	 * @return int
	 */
	public function getCount()
	{
		return $this->count;
	}
	/**
	 * Set duration
	 * @param string duration
	 * @return string
	 */
	public function setDuration($_duration)
	{
		return ($this->duration = $_duration);
	}
	/**
	 * Get duration
	 * @return string
	 */
	public function getDuration()
	{
		return $this->duration;
	}
	/**
	 * Set priceWithoutVAT
	 * @param float priceWithoutVAT
	 * @return float
	 */
	public function setPriceWithoutVAT($_priceWithoutVAT)
	{
		return ($this->priceWithoutVAT = $_priceWithoutVAT);
	}
	/**
	 * Get priceWithoutVAT
	 * @return float
	 */
	public function getPriceWithoutVAT()
	{
		return $this->priceWithoutVAT;
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