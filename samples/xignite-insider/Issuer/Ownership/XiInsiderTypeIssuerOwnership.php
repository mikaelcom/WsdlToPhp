<?php
/**
 * Class file for XiInsiderTypeIssuerOwnership
 * @date 08/07/2012
 */
/**
 * Class XiInsiderTypeIssuerOwnership
 * @date 08/07/2012
 */
class XiInsiderTypeIssuerOwnership extends XiInsiderTypeCommon
{
	/**
	 * The Insider
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInsiderTypeInsider
	 */
	public $Insider;
	/**
	 * The Relationship
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInsiderTypeRelationship
	 */
	public $Relationship;
	/**
	 * The Shares
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $Shares;
	/**
	 * The Options
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $Options;
	/**
	 * The Price
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Price;
	/**
	 * The MarketValue
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $MarketValue;
	/**
	 * The PercentageOwnership
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $PercentageOwnership;
	/**
	 * Constructor
	 * @param XiInsiderTypeInsider Insider
	 * @param XiInsiderTypeRelationship Relationship
	 * @param int Shares
	 * @param int Options
	 * @param double Price
	 * @param double MarketValue
	 * @param double PercentageOwnership
	 * @return XiInsiderTypeIssuerOwnership
	 */
	public function __construct($_Insider = null,$_Relationship = null,$_Shares,$_Options,$_Price,$_MarketValue,$_PercentageOwnership)
	{
		XiInsiderWsdlClass::__construct(array('Insider'=>$_Insider,'Relationship'=>$_Relationship,'Shares'=>$_Shares,'Options'=>$_Options,'Price'=>$_Price,'MarketValue'=>$_MarketValue,'PercentageOwnership'=>$_PercentageOwnership));
	}
	/**
	 * Set Insider
	 * @param Insider Insider
	 * @return Insider
	 */
	public function setInsider($_Insider)
	{
		return ($this->Insider = $_Insider);
	}
	/**
	 * Get Insider
	 * @return XiInsiderTypeInsider
	 */
	public function getInsider()
	{
		return $this->Insider;
	}
	/**
	 * Set Relationship
	 * @param Relationship Relationship
	 * @return Relationship
	 */
	public function setRelationship($_Relationship)
	{
		return ($this->Relationship = $_Relationship);
	}
	/**
	 * Get Relationship
	 * @return XiInsiderTypeRelationship
	 */
	public function getRelationship()
	{
		return $this->Relationship;
	}
	/**
	 * Set Shares
	 * @param int Shares
	 * @return int
	 */
	public function setShares($_Shares)
	{
		return ($this->Shares = $_Shares);
	}
	/**
	 * Get Shares
	 * @return int
	 */
	public function getShares()
	{
		return $this->Shares;
	}
	/**
	 * Set Options
	 * @param int Options
	 * @return int
	 */
	public function setOptions($_Options)
	{
		return ($this->Options = $_Options);
	}
	/**
	 * Get Options
	 * @return int
	 */
	public function getOptions()
	{
		return $this->Options;
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
	 * Set MarketValue
	 * @param double MarketValue
	 * @return double
	 */
	public function setMarketValue($_MarketValue)
	{
		return ($this->MarketValue = $_MarketValue);
	}
	/**
	 * Get MarketValue
	 * @return double
	 */
	public function getMarketValue()
	{
		return $this->MarketValue;
	}
	/**
	 * Set PercentageOwnership
	 * @param double PercentageOwnership
	 * @return double
	 */
	public function setPercentageOwnership($_PercentageOwnership)
	{
		return ($this->PercentageOwnership = $_PercentageOwnership);
	}
	/**
	 * Get PercentageOwnership
	 * @return double
	 */
	public function getPercentageOwnership()
	{
		return $this->PercentageOwnership;
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