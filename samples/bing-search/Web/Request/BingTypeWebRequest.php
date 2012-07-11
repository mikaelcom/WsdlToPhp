<?php
/**
 * Class file for BingTypeWebRequest
 * @date 02/07/2012
 */
/**
 * Class BingTypeWebRequest
 * @date 02/07/2012
 */
class BingTypeWebRequest extends BingWsdlClass
{
	/**
	 * The Offset
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var unsignedInt
	 */
	public $Offset;
	/**
	 * The Count
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var unsignedInt
	 */
	public $Count;
	/**
	 * The FileType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $FileType;
	/**
	 * The Options
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var BingTypeArrayOfWebSearchOption
	 */
	public $Options;
	/**
	 * The SearchTags
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var BingTypeArrayOfString
	 */
	public $SearchTags;
	/**
	 * Constructor
	 * @param unsignedInt Offset
	 * @param unsignedInt Count
	 * @param string FileType
	 * @param BingTypeArrayOfWebSearchOption Options
	 * @param BingTypeArrayOfString SearchTags
	 * @return BingTypeWebRequest
	 */
	public function __construct($_Offset = null,$_Count = null,$_FileType = null,$_Options = null,$_SearchTags = null)
	{
		parent::__construct(array('Offset'=>$_Offset,'Count'=>$_Count,'FileType'=>$_FileType,'Options'=>new BingTypeArrayOfWebSearchOption($_Options),'SearchTags'=>new BingTypeArrayOfString($_SearchTags)));
	}
	/**
	 * Set Offset
	 * @param unsignedInt Offset
	 * @return unsignedInt
	 */
	public function setOffset($_Offset)
	{
		return ($this->Offset = $_Offset);
	}
	/**
	 * Get Offset
	 * @return unsignedInt
	 */
	public function getOffset()
	{
		return $this->Offset;
	}
	/**
	 * Set Count
	 * @param unsignedInt Count
	 * @return unsignedInt
	 */
	public function setCount($_Count)
	{
		return ($this->Count = $_Count);
	}
	/**
	 * Get Count
	 * @return unsignedInt
	 */
	public function getCount()
	{
		return $this->Count;
	}
	/**
	 * Set FileType
	 * @param string FileType
	 * @return string
	 */
	public function setFileType($_FileType)
	{
		return ($this->FileType = $_FileType);
	}
	/**
	 * Get FileType
	 * @return string
	 */
	public function getFileType()
	{
		return $this->FileType;
	}
	/**
	 * Set Options
	 * @param ArrayOfWebSearchOption Options
	 * @return ArrayOfWebSearchOption
	 */
	public function setOptions($_Options)
	{
		return ($this->Options = $_Options);
	}
	/**
	 * Get Options
	 * @return BingTypeArrayOfWebSearchOption
	 */
	public function getOptions()
	{
		return $this->Options;
	}
	/**
	 * Set SearchTags
	 * @param ArrayOfString SearchTags
	 * @return ArrayOfString
	 */
	public function setSearchTags($_SearchTags)
	{
		return ($this->SearchTags = $_SearchTags);
	}
	/**
	 * Get SearchTags
	 * @return BingTypeArrayOfString
	 */
	public function getSearchTags()
	{
		return $this->SearchTags;
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