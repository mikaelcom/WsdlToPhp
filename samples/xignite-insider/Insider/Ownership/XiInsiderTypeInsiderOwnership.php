<?php
/**
 * Class file for XiInsiderTypeInsiderOwnership
 * @date 08/07/2012
 */
/**
 * Class XiInsiderTypeInsiderOwnership
 * @date 08/07/2012
 */
class XiInsiderTypeInsiderOwnership extends XiInsiderTypeCommon
{
	/**
	 * The Security
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInsiderTypeSecurity
	 */
	public $Security;
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
	 * The Options
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $Options;
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
	 * @param XiInsiderTypeSecurity Security
	 * @param XiInsiderTypeRelationship Relationship
	 * @param int Shares
	 * @param double Price
	 * @param double MarketValue
	 * @param int Options
	 * @param double PercentageOwnership
	 * @return XiInsiderTypeInsiderOwnership
	 */
	public function __construct($_Security = null,$_Relationship = null,$_Shares,$_Price,$_MarketValue,$_Options,$_PercentageOwnership)
	{
		XiInsiderWsdlClass::__construct(array('Security'=>$_Security,'Relationship'=>$_Relationship,'Shares'=>$_Shares,'Price'=>$_Price,'MarketValue'=>$_MarketValue,'Options'=>$_Options,'PercentageOwnership'=>$_PercentageOwnership));
	}
	/**
	 * Set Security
	 * @param Security Security
	 * @return Security
	 */
	public function setSecurity($_Security)
	{
		return ($this->Security = $_Security);
	}
	/**
	 * Get Security
	 * @return XiInsiderTypeSecurity
	 */
	public function getSecurity()
	{
		return $this->Security;
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