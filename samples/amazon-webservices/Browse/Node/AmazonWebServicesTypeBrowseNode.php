<?php
/**
 * Class file for AmazonWebServicesTypeBrowseNode
 * @date 10/07/2012
 */
/**
 * Class AmazonWebServicesTypeBrowseNode
 * @date 10/07/2012
 */
class AmazonWebServicesTypeBrowseNode extends AmazonWebServicesWsdlClass
{
	/**
	 * The BrowseId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $BrowseId;
	/**
	 * The BrowseName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $BrowseName;
	/**
	 * Constructor
	 * @param string BrowseId
	 * @param string BrowseName
	 * @return AmazonWebServicesTypeBrowseNode
	 */
	public function __construct($_BrowseId = null,$_BrowseName = null)
	{
		parent::__construct(array('BrowseId'=>$_BrowseId,'BrowseName'=>$_BrowseName));
	}
	/**
	 * Set BrowseId
	 * @param string BrowseId
	 * @return string
	 */
	public function setBrowseId($_BrowseId)
	{
		return ($this->BrowseId = $_BrowseId);
	}
	/**
	 * Get BrowseId
	 * @return string
	 */
	public function getBrowseId()
	{
		return $this->BrowseId;
	}
	/**
	 * Set BrowseName
	 * @param string BrowseName
	 * @return string
	 */
	public function setBrowseName($_BrowseName)
	{
		return ($this->BrowseName = $_BrowseName);
	}
	/**
	 * Get BrowseName
	 * @return string
	 */
	public function getBrowseName()
	{
		return $this->BrowseName;
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