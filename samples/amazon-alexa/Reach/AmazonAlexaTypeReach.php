<?php
/**
 * Class file for AmazonAlexaTypeReach
 * @date 10/07/2012
 */
/**
 * Class AmazonAlexaTypeReach
 * @date 10/07/2012
 */
class AmazonAlexaTypeReach extends AmazonAlexaWsdlClass
{
	/**
	 * The Rank
	 * @var AmazonAlexaTypeTrafficStatType
	 */
	public $Rank;
	/**
	 * The PerMillion
	 * @var AmazonAlexaTypeTrafficStatType
	 */
	public $PerMillion;
	/**
	 * Constructor
	 * @param AmazonAlexaTypeTrafficStatType Rank
	 * @param AmazonAlexaTypeTrafficStatType PerMillion
	 * @return AmazonAlexaTypeReach
	 */
	public function __construct($_Rank = null,$_PerMillion = null)
	{
		parent::__construct(array('Rank'=>$_Rank,'PerMillion'=>$_PerMillion));
	}
	/**
	 * Set Rank
	 * @param TrafficStatType Rank
	 * @return TrafficStatType
	 */
	public function setRank($_Rank)
	{
		return ($this->Rank = $_Rank);
	}
	/**
	 * Get Rank
	 * @return AmazonAlexaTypeTrafficStatType
	 */
	public function getRank()
	{
		return $this->Rank;
	}
	/**
	 * Set PerMillion
	 * @param TrafficStatType PerMillion
	 * @return TrafficStatType
	 */
	public function setPerMillion($_PerMillion)
	{
		return ($this->PerMillion = $_PerMillion);
	}
	/**
	 * Get PerMillion
	 * @return AmazonAlexaTypeTrafficStatType
	 */
	public function getPerMillion()
	{
		return $this->PerMillion;
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