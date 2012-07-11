<?php
/**
 * Class file for XiRealTimeTypeOrderSummary
 * @date 08/07/2012
 */
/**
 * Class XiRealTimeTypeOrderSummary
 * @date 08/07/2012
 */
class XiRealTimeTypeOrderSummary extends XiRealTimeWsdlClass
{
	/**
	 * The Price
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Price;
	/**
	 * The Ordered
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $Ordered;
	/**
	 * The Filled
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $Filled;
	/**
	 * The Cancelled
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $Cancelled;
	/**
	 * The Unfilled
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $Unfilled;
	/**
	 * The Rank
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $Rank;
	/**
	 * Constructor
	 * @param double Price
	 * @param int Ordered
	 * @param int Filled
	 * @param int Cancelled
	 * @param int Unfilled
	 * @param int Rank
	 * @return XiRealTimeTypeOrderSummary
	 */
	public function __construct($_Price,$_Ordered,$_Filled,$_Cancelled,$_Unfilled,$_Rank)
	{
		parent::__construct(array('Price'=>$_Price,'Ordered'=>$_Ordered,'Filled'=>$_Filled,'Cancelled'=>$_Cancelled,'Unfilled'=>$_Unfilled,'Rank'=>$_Rank));
	}
	/**
	 * Set Price
	 * @param double Price
	 * @return double
	 */
	public function setPrice($_Price)
	{
		return ($this->Price = $_Price);
	}
	/**
	 * Get Price
	 * @return double
	 */
	public function getPrice()
	{
		return $this->Price;
	}
	/**
	 * Set Ordered
	 * @param int Ordered
	 * @return int
	 */
	public function setOrdered($_Ordered)
	{
		return ($this->Ordered = $_Ordered);
	}
	/**
	 * Get Ordered
	 * @return int
	 */
	public function getOrdered()
	{
		return $this->Ordered;
	}
	/**
	 * Set Filled
	 * @param int Filled
	 * @return int
	 */
	public function setFilled($_Filled)
	{
		return ($this->Filled = $_Filled);
	}
	/**
	 * Get Filled
	 * @return int
	 */
	public function getFilled()
	{
		return $this->Filled;
	}
	/**
	 * Set Cancelled
	 * @param int Cancelled
	 * @return int
	 */
	public function setCancelled($_Cancelled)
	{
		return ($this->Cancelled = $_Cancelled);
	}
	/**
	 * Get Cancelled
	 * @return int
	 */
	public function getCancelled()
	{
		return $this->Cancelled;
	}
	/**
	 * Set Unfilled
	 * @param int Unfilled
	 * @return int
	 */
	public function setUnfilled($_Unfilled)
	{
		return ($this->Unfilled = $_Unfilled);
	}
	/**
	 * Get Unfilled
	 * @return int
	 */
	public function getUnfilled()
	{
		return $this->Unfilled;
	}
	/**
	 * Set Rank
	 * @param int Rank
	 * @return int
	 */
	public function setRank($_Rank)
	{
		return ($this->Rank = $_Rank);
	}
	/**
	 * Get Rank
	 * @return int
	 */
	public function getRank()
	{
		return $this->Rank;
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