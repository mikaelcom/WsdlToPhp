<?php
/**
 * Class file for XiIndicesTypeExchangeSummary
 * @date 08/07/2012
 */
/**
 * Class XiIndicesTypeExchangeSummary
 * @date 08/07/2012
 */
class XiIndicesTypeExchangeSummary extends XiIndicesTypeCommon
{
	/**
	 * The Exchange
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiIndicesTypeExchangeTypes
	 */
	public $Exchange;
	/**
	 * The NewHighs
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $NewHighs;
	/**
	 * The NewLows
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $NewLows;
	/**
	 * The SharesAdvancing
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $SharesAdvancing;
	/**
	 * The SharesDeclining
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $SharesDeclining;
	/**
	 * The SharesUnchanged
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $SharesUnchanged;
	/**
	 * The AdvancesDeclinesRatio
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $AdvancesDeclinesRatio;
	/**
	 * Constructor
	 * @param XiIndicesTypeExchangeTypes Exchange
	 * @param double NewHighs
	 * @param double NewLows
	 * @param double SharesAdvancing
	 * @param double SharesDeclining
	 * @param double SharesUnchanged
	 * @param double AdvancesDeclinesRatio
	 * @return XiIndicesTypeExchangeSummary
	 */
	public function __construct($_Exchange,$_NewHighs,$_NewLows,$_SharesAdvancing,$_SharesDeclining,$_SharesUnchanged,$_AdvancesDeclinesRatio)
	{
		XiIndicesWsdlClass::__construct(array('Exchange'=>$_Exchange,'NewHighs'=>$_NewHighs,'NewLows'=>$_NewLows,'SharesAdvancing'=>$_SharesAdvancing,'SharesDeclining'=>$_SharesDeclining,'SharesUnchanged'=>$_SharesUnchanged,'AdvancesDeclinesRatio'=>$_AdvancesDeclinesRatio));
	}
	/**
	 * Set Exchange
	 * @param ExchangeTypes Exchange
	 * @return ExchangeTypes
	 */
	public function setExchange($_Exchange)
	{
		return ($this->Exchange = XiIndicesTypeExchangeTypes::valueIsValid($_Exchange)?$_Exchange:null);
	}
	/**
	 * Get Exchange
	 * @return XiIndicesTypeExchangeTypes
	 */
	public function getExchange()
	{
		return $this->Exchange;
	}
	/**
	 * Set NewHighs
	 * @param double NewHighs
	 * @return double
	 */
	public function setNewHighs($_NewHighs)
	{
		return ($this->NewHighs = $_NewHighs);
	}
	/**
	 * Get NewHighs
	 * @return double
	 */
	public function getNewHighs()
	{
		return $this->NewHighs;
	}
	/**
	 * Set NewLows
	 * @param double NewLows
	 * @return double
	 */
	public function setNewLows($_NewLows)
	{
		return ($this->NewLows = $_NewLows);
	}
	/**
	 * Get NewLows
	 * @return double
	 */
	public function getNewLows()
	{
		return $this->NewLows;
	}
	/**
	 * Set SharesAdvancing
	 * @param double SharesAdvancing
	 * @return double
	 */
	public function setSharesAdvancing($_SharesAdvancing)
	{
		return ($this->SharesAdvancing = $_SharesAdvancing);
	}
	/**
	 * Get SharesAdvancing
	 * @return double
	 */
	public function getSharesAdvancing()
	{
		return $this->SharesAdvancing;
	}
	/**
	 * Set SharesDeclining
	 * @param double SharesDeclining
	 * @return double
	 */
	public function setSharesDeclining($_SharesDeclining)
	{
		return ($this->SharesDeclining = $_SharesDeclining);
	}
	/**
	 * Get SharesDeclining
	 * @return double
	 */
	public function getSharesDeclining()
	{
		return $this->SharesDeclining;
	}
	/**
	 * Set SharesUnchanged
	 * @param double SharesUnchanged
	 * @return double
	 */
	public function setSharesUnchanged($_SharesUnchanged)
	{
		return ($this->SharesUnchanged = $_SharesUnchanged);
	}
	/**
	 * Get SharesUnchanged
	 * @return double
	 */
	public function getSharesUnchanged()
	{
		return $this->SharesUnchanged;
	}
	/**
	 * Set AdvancesDeclinesRatio
	 * @param double AdvancesDeclinesRatio
	 * @return double
	 */
	public function setAdvancesDeclinesRatio($_AdvancesDeclinesRatio)
	{
		return ($this->AdvancesDeclinesRatio = $_AdvancesDeclinesRatio);
	}
	/**
	 * Get AdvancesDeclinesRatio
	 * @return double
	 */
	public function getAdvancesDeclinesRatio()
	{
		return $this->AdvancesDeclinesRatio;
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