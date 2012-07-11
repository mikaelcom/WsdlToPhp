<?php
/**
 * Class file for XiReleasesTypeGetLastMarketHeadlines
 * @date 08/07/2012
 */
/**
 * Class XiReleasesTypeGetLastMarketHeadlines
 * @date 08/07/2012
 */
class XiReleasesTypeGetLastMarketHeadlines extends XiReleasesWsdlClass
{
	/**
	 * The SinceDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $SinceDate;
	/**
	 * Constructor
	 * @param string SinceDate
	 * @return XiReleasesTypeGetLastMarketHeadlines
	 */
	public function __construct($_SinceDate = null)
	{
		parent::__construct(array('SinceDate'=>$_SinceDate));
	}
	/**
	 * Set SinceDate
	 * @param string SinceDate
	 * @return string
	 */
	public function setSinceDate($_SinceDate)
	{
		return ($this->SinceDate = $_SinceDate);
	}
	/**
	 * Get SinceDate
	 * @return string
	 */
	public function getSinceDate()
	{
		return $this->SinceDate;
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