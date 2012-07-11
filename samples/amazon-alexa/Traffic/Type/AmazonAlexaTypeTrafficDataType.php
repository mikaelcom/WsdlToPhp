<?php
/**
 * Class file for AmazonAlexaTypeTrafficDataType
 * @date 10/07/2012
 */
/**
 * Class AmazonAlexaTypeTrafficDataType
 * @date 10/07/2012
 */
class AmazonAlexaTypeTrafficDataType extends AmazonAlexaWsdlClass
{
	/**
	 * The Rank
	 * @var AmazonAlexaTypeGenericDataType
	 */
	public $Rank;
	/**
	 * The RankByCountry
	 * @var AmazonAlexaTypeRankByCountry
	 */
	public $RankByCountry;
	/**
	 * The RankByCity
	 * @var AmazonAlexaTypeRankByCity
	 */
	public $RankByCity;
	/**
	 * The ContributingSubdomains
	 * @var AmazonAlexaTypeContributingSubdomains
	 */
	public $ContributingSubdomains;
	/**
	 * The UsageStatistics
	 * @var AmazonAlexaTypeUsageStatistics
	 */
	public $UsageStatistics;
	/**
	 * Constructor
	 * @param AmazonAlexaTypeGenericDataType Rank
	 * @param AmazonAlexaTypeRankByCountry RankByCountry
	 * @param AmazonAlexaTypeRankByCity RankByCity
	 * @param AmazonAlexaTypeContributingSubdomains ContributingSubdomains
	 * @param AmazonAlexaTypeUsageStatistics UsageStatistics
	 * @return AmazonAlexaTypeTrafficDataType
	 */
	public function __construct($_Rank = null,$_RankByCountry = null,$_RankByCity = null,$_ContributingSubdomains = null,$_UsageStatistics = null)
	{
		parent::__construct(array('Rank'=>$_Rank,'RankByCountry'=>$_RankByCountry,'RankByCity'=>$_RankByCity,'ContributingSubdomains'=>$_ContributingSubdomains,'UsageStatistics'=>$_UsageStatistics));
	}
	/**
	 * Set Rank
	 * @param GenericDataType Rank
	 * @return GenericDataType
	 */
	public function setRank($_Rank)
	{
		return ($this->Rank = $_Rank);
	}
	/**
	 * Get Rank
	 * @return AmazonAlexaTypeGenericDataType
	 */
	public function getRank()
	{
		return $this->Rank;
	}
	/**
	 * Set RankByCountry
	 * @param RankByCountry RankByCountry
	 * @return RankByCountry
	 */
	public function setRankByCountry($_RankByCountry)
	{
		return ($this->RankByCountry = $_RankByCountry);
	}
	/**
	 * Get RankByCountry
	 * @return AmazonAlexaTypeRankByCountry
	 */
	public function getRankByCountry()
	{
		return $this->RankByCountry;
	}
	/**
	 * Set RankByCity
	 * @param RankByCity RankByCity
	 * @return RankByCity
	 */
	public function setRankByCity($_RankByCity)
	{
		return ($this->RankByCity = $_RankByCity);
	}
	/**
	 * Get RankByCity
	 * @return AmazonAlexaTypeRankByCity
	 */
	public function getRankByCity()
	{
		return $this->RankByCity;
	}
	/**
	 * Set ContributingSubdomains
	 * @param ContributingSubdomains ContributingSubdomains
	 * @return ContributingSubdomains
	 */
	public function setContributingSubdomains($_ContributingSubdomains)
	{
		return ($this->ContributingSubdomains = $_ContributingSubdomains);
	}
	/**
	 * Get ContributingSubdomains
	 * @return AmazonAlexaTypeContributingSubdomains
	 */
	public function getContributingSubdomains()
	{
		return $this->ContributingSubdomains;
	}
	/**
	 * Set UsageStatistics
	 * @param UsageStatistics UsageStatistics
	 * @return UsageStatistics
	 */
	public function setUsageStatistics($_UsageStatistics)
	{
		return ($this->UsageStatistics = $_UsageStatistics);
	}
	/**
	 * Get UsageStatistics
	 * @return AmazonAlexaTypeUsageStatistics
	 */
	public function getUsageStatistics()
	{
		return $this->UsageStatistics;
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