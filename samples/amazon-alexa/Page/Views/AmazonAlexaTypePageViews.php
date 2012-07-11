<?php
/**
 * Class file for AmazonAlexaTypePageViews
 * @date 10/07/2012
 */
/**
 * Class AmazonAlexaTypePageViews
 * @date 10/07/2012
 */
class AmazonAlexaTypePageViews extends AmazonAlexaWsdlClass
{
	/**
	 * The PerMillion
	 * @var AmazonAlexaTypeTrafficStatType
	 */
	public $PerMillion;
	/**
	 * The Rank
	 * @var AmazonAlexaTypeTrafficStatType
	 */
	public $Rank;
	/**
	 * The PerUser
	 * @var AmazonAlexaTypeTrafficStatType
	 */
	public $PerUser;
	/**
	 * Constructor
	 * @param AmazonAlexaTypeTrafficStatType PerMillion
	 * @param AmazonAlexaTypeTrafficStatType Rank
	 * @param AmazonAlexaTypeTrafficStatType PerUser
	 * @return AmazonAlexaTypePageViews
	 */
	public function __construct($_PerMillion = null,$_Rank = null,$_PerUser = null)
	{
		parent::__construct(array('PerMillion'=>$_PerMillion,'Rank'=>$_Rank,'PerUser'=>$_PerUser));
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
	 * Set PerUser
	 * @param TrafficStatType PerUser
	 * @return TrafficStatType
	 */
	public function setPerUser($_PerUser)
	{
		return ($this->PerUser = $_PerUser);
	}
	/**
	 * Get PerUser
	 * @return AmazonAlexaTypeTrafficStatType
	 */
	public function getPerUser()
	{
		return $this->PerUser;
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