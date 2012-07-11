<?php
/**
 * Class file for XiReleasesTypeGetHistoricalMarketHeadlines
 * @date 08/07/2012
 */
/**
 * Class XiReleasesTypeGetHistoricalMarketHeadlines
 * @date 08/07/2012
 */
class XiReleasesTypeGetHistoricalMarketHeadlines extends XiReleasesWsdlClass
{
	/**
	 * The Source
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiReleasesTypeReleaseSourceTypes
	 */
	public $Source;
	/**
	 * The StartDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $StartDate;
	/**
	 * The EndDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $EndDate;
	/**
	 * Constructor
	 * @param XiReleasesTypeReleaseSourceTypes Source
	 * @param string StartDate
	 * @param string EndDate
	 * @return XiReleasesTypeGetHistoricalMarketHeadlines
	 */
	public function __construct($_Source,$_StartDate = null,$_EndDate = null)
	{
		parent::__construct(array('Source'=>$_Source,'StartDate'=>$_StartDate,'EndDate'=>$_EndDate));
	}
	/**
	 * Set Source
	 * @param ReleaseSourceTypes Source
	 * @return ReleaseSourceTypes
	 */
	public function setSource($_Source)
	{
		return ($this->Source = XiReleasesTypeReleaseSourceTypes::valueIsValid($_Source)?$_Source:null);
	}
	/**
	 * Get Source
	 * @return XiReleasesTypeReleaseSourceTypes
	 */
	public function getSource()
	{
		return $this->Source;
	}
	/**
	 * Set StartDate
	 * @param string StartDate
	 * @return string
	 */
	public function setStartDate($_StartDate)
	{
		return ($this->StartDate = $_StartDate);
	}
	/**
	 * Get StartDate
	 * @return string
	 */
	public function getStartDate()
	{
		return $this->StartDate;
	}
	/**
	 * Set EndDate
	 * @param string EndDate
	 * @return string
	 */
	public function setEndDate($_EndDate)
	{
		return ($this->EndDate = $_EndDate);
	}
	/**
	 * Get EndDate
	 * @return string
	 */
	public function getEndDate()
	{
		return $this->EndDate;
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