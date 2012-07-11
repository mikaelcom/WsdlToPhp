<?php
/**
 * Class file for SPCopyTypeCopyIntoItems
 * @date 07/07/2012
 */
/**
 * Class SPCopyTypeCopyIntoItems
 * @date 07/07/2012
 */
class SPCopyTypeCopyIntoItems extends SPCopyWsdlClass
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
	 * The Fields
	 * @var SPCopyTypeFieldInformationCollection
	 */
	public $Fields;
	/**
	 * The Stream
	 * @var base64Binary
	 */
	public $Stream;
	/**
	 * Constructor
	 * @param string SourceUrl
	 * @param SPCopyTypeDestinationUrlCollection DestinationUrls
	 * @param SPCopyTypeFieldInformationCollection Fields
	 * @param base64Binary Stream
	 * @return SPCopyTypeCopyIntoItems
	 */
	public function __construct($_SourceUrl = null,$_DestinationUrls = null,$_Fields = null,$_Stream = null)
	{
		parent::__construct(array('SourceUrl'=>$_SourceUrl,'DestinationUrls'=>$_DestinationUrls,'Fields'=>$_Fields,'Stream'=>$_Stream));
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
	 * Set Fields
	 * @param FieldInformationCollection Fields
	 * @return FieldInformationCollection
	 */
	public function setFields($_Fields)
	{
		return ($this->Fields = $_Fields);
	}
	/**
	 * Get Fields
	 * @return SPCopyTypeFieldInformationCollection
	 */
	public function getFields()
	{
		return $this->Fields;
	}
	/**
	 * Set Stream
	 * @param base64Binary Stream
	 * @return base64Binary
	 */
	public function setStream($_Stream)
	{
		return ($this->Stream = $_Stream);
	}
	/**
	 * Get Stream
	 * @return base64Binary
	 */
	public function getStream()
	{
		return $this->Stream;
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