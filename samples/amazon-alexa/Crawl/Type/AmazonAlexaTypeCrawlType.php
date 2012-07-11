<?php
/**
 * Class file for AmazonAlexaTypeCrawlType
 * @date 10/07/2012
 */
/**
 * Class AmazonAlexaTypeCrawlType
 * @date 10/07/2012
 */
class AmazonAlexaTypeCrawlType extends AmazonAlexaWsdlClass
{
	/**
	 * The MetaData
	 * @var AmazonAlexaTypeMetaData
	 */
	public $MetaData;
	/**
	 * The Index
	 * @var AmazonAlexaTypeIndex
	 */
	public $Index;
	/**
	 * The TotalCount
	 * @var UNKNOWN
	 */
	public $TotalCount;
	/**
	 * Constructor
	 * @param AmazonAlexaTypeMetaData MetaData
	 * @param AmazonAlexaTypeIndex Index
	 * @param UNKNOWN TotalCount
	 * @return AmazonAlexaTypeCrawlType
	 */
	public function __construct($_MetaData = null,$_Index = null,$_TotalCount = null)
	{
		parent::__construct(array('MetaData'=>$_MetaData,'Index'=>$_Index,'TotalCount'=>$_TotalCount));
	}
	/**
	 * Set MetaData
	 * @param MetaData MetaData
	 * @return MetaData
	 */
	public function setMetaData($_MetaData)
	{
		return ($this->MetaData = $_MetaData);
	}
	/**
	 * Get MetaData
	 * @return AmazonAlexaTypeMetaData
	 */
	public function getMetaData()
	{
		return $this->MetaData;
	}
	/**
	 * Set Index
	 * @param Index Index
	 * @return Index
	 */
	public function setIndex($_Index)
	{
		return ($this->Index = $_Index);
	}
	/**
	 * Get Index
	 * @return AmazonAlexaTypeIndex
	 */
	public function getIndex()
	{
		return $this->Index;
	}
	/**
	 * Set TotalCount
	 * @param UNKNOWN TotalCount
	 * @return UNKNOWN
	 */
	public function setTotalCount($_TotalCount)
	{
		return ($this->TotalCount = $_TotalCount);
	}
	/**
	 * Get TotalCount
	 * @return UNKNOWN
	 */
	public function getTotalCount()
	{
		return $this->TotalCount;
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