<?php
/**
 * Class file for SPCopyTypeCopyIntoItemsLocal
 * @date 07/07/2012
 */
/**
 * Class SPCopyTypeCopyIntoItemsLocal
 * @date 07/07/2012
 */
class SPCopyTypeCopyIntoItemsLocal extends SPCopyWsdlClass
{
	/**
	 * The SourceUrl
	 * @var string
	 */
	public $SourceUrl;
	/**
	 * The DestinationUrls
	 * @var SPCopyTypeDestinationUrlCollection
	 */
	public $DestinationUrls;
	/**
	 * Constructor
	 * @param string SourceUrl
	 * @param SPCopyTypeDestinationUrlCollection DestinationUrls
	 * @return SPCopyTypeCopyIntoItemsLocal
	 */
	public function __construct($_SourceUrl = null,$_DestinationUrls = null)
	{
		parent::__construct(array('SourceUrl'=>$_SourceUrl,'DestinationUrls'=>$_DestinationUrls));
	}
	/**
	 * Set SourceUrl
	 * @param string SourceUrl
	 * @return string
	 */
	public function setSourceUrl($_SourceUrl)
	{
		return ($this->SourceUrl = $_SourceUrl);
	}
	/**
	 * Get SourceUrl
	 * @return string
	 */
	public function getSourceUrl()
	{
		return $this->SourceUrl;
	}
	/**
	 * Set DestinationUrls
	 * @param DestinationUrlCollection DestinationUrls
	 * @return DestinationUrlCollection
	 */
	public function setDestinationUrls($_DestinationUrls)
	{
		return ($this->DestinationUrls = $_DestinationUrls);
	}
	/**
	 * Get DestinationUrls
	 * @return SPCopyTypeDestinationUrlCollection
	 */
	public function getDestinationUrls()
	{
		return $this->DestinationUrls;
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