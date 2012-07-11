<?php
/**
 * Class file for YMailTypeMoveMessagesResponse
 * @date 02/07/2012
 */
/**
 * Class YMailTypeMoveMessagesResponse
 * @date 02/07/2012
 */
class YMailTypeMoveMessagesResponse extends YMailWsdlClass
{
	/**
	 * The sourceFolder
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- nillable : true
	 * @var YMailTypeFolderData
	 */
	public $sourceFolder;
	/**
	 * The destinationFolder
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- nillable : true
	 * @var YMailTypeFolderData
	 */
	public $destinationFolder;
	/**
	 * The mid
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var string
	 */
	public $mid;
	/**
	 * The error
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var YMailTypeErrorCode
	 */
	public $error;
	/**
	 * Constructor
	 * @param YMailTypeFolderData sourceFolder
	 * @param YMailTypeFolderData destinationFolder
	 * @param string mid
	 * @param YMailTypeErrorCode error
	 * @return YMailTypeMoveMessagesResponse
	 */
	public function __construct($_sourceFolder = null,$_destinationFolder = null,$_mid = null,$_error = null)
	{
		parent::__construct(array('sourceFolder'=>$_sourceFolder,'destinationFolder'=>$_destinationFolder,'mid'=>$_mid,'error'=>$_error));
	}
	/**
	 * Set sourceFolder
	 * @param FolderData sourceFolder
	 * @return FolderData
	 */
	public function setSourceFolder($_sourceFolder)
	{
		return ($this->sourceFolder = $_sourceFolder);
	}
	/**
	 * Get sourceFolder
	 * @return YMailTypeFolderData
	 */
	public function getSourceFolder()
	{
		return $this->sourceFolder;
	}
	/**
	 * Set destinationFolder
	 * @param FolderData destinationFolder
	 * @return FolderData
	 */
	public function setDestinationFolder($_destinationFolder)
	{
		return ($this->destinationFolder = $_destinationFolder);
	}
	/**
	 * Get destinationFolder
	 * @return YMailTypeFolderData
	 */
	public function getDestinationFolder()
	{
		return $this->destinationFolder;
	}
	/**
	 * Set mid
	 * @param string mid
	 * @return string
	 */
	public function setMid($_mid)
	{
		return ($this->mid = $_mid);
	}
	/**
	 * Get mid
	 * @return string
	 */
	public function getMid()
	{
		return $this->mid;
	}
	/**
	 * Set error
	 * @param ErrorCode error
	 * @return ErrorCode
	 */
	public function setError($_error)
	{
		return ($this->error = $_error);
	}
	/**
	 * Get error
	 * @return YMailTypeErrorCode
	 */
	public function getError()
	{
		return $this->error;
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