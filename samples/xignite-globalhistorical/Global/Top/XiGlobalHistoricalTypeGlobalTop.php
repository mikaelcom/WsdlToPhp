<?php
/**
 * Class file for XiGlobalHistoricalTypeGlobalTop
 * @date 08/07/2012
 */
/**
 * Class XiGlobalHistoricalTypeGlobalTop
 * @date 08/07/2012
 */
class XiGlobalHistoricalTypeGlobalTop extends XiGlobalHistoricalTypeAbstractGlobalHistoricalObject
{
	/**
	 * The Rank
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $Rank;
	/**
	 * The GlobalTopType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiGlobalHistoricalTypeGlobalTopTypes
	 */
	public $GlobalTopType;
	/**
	 * The GlobalQuote
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalHistoricalTypeGlobalHistoricalQuote
	 */
	public $GlobalQuote;
	/**
	 * Constructor
	 * @param int Rank
	 * @param XiGlobalHistoricalTypeGlobalTopTypes GlobalTopType
	 * @param XiGlobalHistoricalTypeGlobalHistoricalQuote GlobalQuote
	 * @return XiGlobalHistoricalTypeGlobalTop
	 */
	public function __construct($_Rank,$_GlobalTopType,$_GlobalQuote = null)
	{
		XiGlobalHistoricalWsdlClass::__construct(array('Rank'=>$_Rank,'GlobalTopType'=>$_GlobalTopType,'GlobalQuote'=>$_GlobalQuote));
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
	 * Set GlobalTopType
	 * @param GlobalTopTypes GlobalTopType
	 * @return GlobalTopTypes
	 */
	public function setGlobalTopType($_GlobalTopType)
	{
		return ($this->GlobalTopType = XiGlobalHistoricalTypeGlobalTopTypes::valueIsValid($_GlobalTopType)?$_GlobalTopType:null);
	}
	/**
	 * Get GlobalTopType
	 * @return XiGlobalHistoricalTypeGlobalTopTypes
	 */
	public function getGlobalTopType()
	{
		return $this->GlobalTopType;
	}
	/**
	 * Set GlobalQuote
	 * @param GlobalHistoricalQuote GlobalQuote
	 * @return GlobalHistoricalQuote
	 */
	public function setGlobalQuote($_GlobalQuote)
	{
		return ($this->GlobalQuote = $_GlobalQuote);
	}
	/**
	 * Get GlobalQuote
	 * @return XiGlobalHistoricalTypeGlobalHistoricalQuote
	 */
	public function getGlobalQuote()
	{
		return $this->GlobalQuote;
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