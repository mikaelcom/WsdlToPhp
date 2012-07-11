<?php
/**
 * Class file for AmazonAlexaTypeData
 * @date 10/07/2012
 */
/**
 * Class AmazonAlexaTypeData
 * @date 10/07/2012
 */
class AmazonAlexaTypeData extends AmazonAlexaWsdlClass
{
	/**
	 * The Date
	 * @var string
	 */
	public $Date;
	/**
	 * The PageViews
	 * @var AmazonAlexaTypePageViews
	 */
	public $PageViews;
	/**
	 * The Rank
	 * @var string
	 */
	public $Rank;
	/**
	 * The Reach
	 * @var AmazonAlexaTypeReach
	 */
	public $Reach;
	/**
	 * Constructor
	 * @param string Date
	 * @param AmazonAlexaTypePageViews PageViews
	 * @param string Rank
	 * @param AmazonAlexaTypeReach Reach
	 * @return AmazonAlexaTypeData
	 */
	public function __construct($_Date = null,$_PageViews = null,$_Rank = null,$_Reach = null)
	{
		parent::__construct(array('Date'=>$_Date,'PageViews'=>$_PageViews,'Rank'=>$_Rank,'Reach'=>$_Reach));
	}
	/**
	 * Set Date
	 * @param string Date
	 * @return string
	 */
	public function setDate($_Date)
	{
		return ($this->Date = $_Date);
	}
	/**
	 * Get Date
	 * @return string
	 */
	public function getDate()
	{
		return $this->Date;
	}
	/**
	 * Set PageViews
	 * @param PageViews PageViews
	 * @return PageViews
	 */
	public function setPageViews($_PageViews)
	{
		return ($this->PageViews = $_PageViews);
	}
	/**
	 * Get PageViews
	 * @return AmazonAlexaTypePageViews
	 */
	public function getPageViews()
	{
		return $this->PageViews;
	}
	/**
	 * Set Rank
	 * @param string Rank
	 * @return string
	 */
	public function setRank($_Rank)
	{
		return ($this->Rank = $_Rank);
	}
	/**
	 * Get Rank
	 * @return string
	 */
	public function getRank()
	{
		return $this->Rank;
	}
	/**
	 * Set Reach
	 * @param Reach Reach
	 * @return Reach
	 */
	public function setReach($_Reach)
	{
		return ($this->Reach = $_Reach);
	}
	/**
	 * Get Reach
	 * @return AmazonAlexaTypeReach
	 */
	public function getReach()
	{
		return $this->Reach;
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