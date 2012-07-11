<?php
/**
 * Class file for AmazonAlexaTypeListingType
 * @date 10/07/2012
 */
/**
 * Class AmazonAlexaTypeListingType
 * @date 10/07/2012
 */
class AmazonAlexaTypeListingType extends AmazonAlexaWsdlClass
{
	/**
	 * The DataUrl
	 * @var AmazonAlexaTypeDataUrlType
	 */
	public $DataUrl;
	/**
	 * The Title
	 * @var normalizedString
	 */
	public $Title;
	/**
	 * The PopularityRank
	 * @var UnsignedIntegerType
	 */
	public $PopularityRank;
	/**
	 * The AverageReview
	 * @var token
	 */
	public $AverageReview;
	/**
	 * Constructor
	 * @param AmazonAlexaTypeDataUrlType DataUrl
	 * @param normalizedString Title
	 * @param UnsignedIntegerType PopularityRank
	 * @param token AverageReview
	 * @return AmazonAlexaTypeListingType
	 */
	public function __construct($_DataUrl = null,$_Title = null,$_PopularityRank = null,$_AverageReview = null)
	{
		parent::__construct(array('DataUrl'=>$_DataUrl,'Title'=>$_Title,'PopularityRank'=>$_PopularityRank,'AverageReview'=>$_AverageReview));
	}
	/**
	 * Set DataUrl
	 * @param DataUrlType DataUrl
	 * @return DataUrlType
	 */
	public function setDataUrl($_DataUrl)
	{
		return ($this->DataUrl = $_DataUrl);
	}
	/**
	 * Get DataUrl
	 * @return AmazonAlexaTypeDataUrlType
	 */
	public function getDataUrl()
	{
		return $this->DataUrl;
	}
	/**
	 * Set Title
	 * @param normalizedString Title
	 * @return normalizedString
	 */
	public function setTitle($_Title)
	{
		return ($this->Title = $_Title);
	}
	/**
	 * Get Title
	 * @return normalizedString
	 */
	public function getTitle()
	{
		return $this->Title;
	}
	/**
	 * Set PopularityRank
	 * @param UnsignedIntegerType PopularityRank
	 * @return UnsignedIntegerType
	 */
	public function setPopularityRank($_PopularityRank)
	{
		return ($this->PopularityRank = $_PopularityRank);
	}
	/**
	 * Get PopularityRank
	 * @return UnsignedIntegerType
	 */
	public function getPopularityRank()
	{
		return $this->PopularityRank;
	}
	/**
	 * Set AverageReview
	 * @param token AverageReview
	 * @return token
	 */
	public function setAverageReview($_AverageReview)
	{
		return ($this->AverageReview = $_AverageReview);
	}
	/**
	 * Get AverageReview
	 * @return token
	 */
	public function getAverageReview()
	{
		return $this->AverageReview;
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