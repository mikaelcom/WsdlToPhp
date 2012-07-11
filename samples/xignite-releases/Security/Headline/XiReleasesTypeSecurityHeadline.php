<?php
/**
 * Class file for XiReleasesTypeSecurityHeadline
 * @date 08/07/2012
 */
/**
 * Class XiReleasesTypeSecurityHeadline
 * @date 08/07/2012
 */
class XiReleasesTypeSecurityHeadline extends XiReleasesWsdlClass
{
	/**
	 * The ReleaseId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ReleaseId;
	/**
	 * The Title
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Title;
	/**
	 * The Date
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Date;
	/**
	 * The Source
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiReleasesTypeReleaseSource
	 */
	public $Source;
	/**
	 * The Reference
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Reference;
	/**
	 * Constructor
	 * @param string ReleaseId
	 * @param string Title
	 * @param string Date
	 * @param XiReleasesTypeReleaseSource Source
	 * @param string Reference
	 * @return XiReleasesTypeSecurityHeadline
	 */
	public function __construct($_ReleaseId = null,$_Title = null,$_Date = null,$_Source = null,$_Reference = null)
	{
		parent::__construct(array('ReleaseId'=>$_ReleaseId,'Title'=>$_Title,'Date'=>$_Date,'Source'=>$_Source,'Reference'=>$_Reference));
	}
	/**
	 * Set ReleaseId
	 * @param string ReleaseId
	 * @return string
	 */
	public function setReleaseId($_ReleaseId)
	{
		return ($this->ReleaseId = $_ReleaseId);
	}
	/**
	 * Get ReleaseId
	 * @return string
	 */
	public function getReleaseId()
	{
		return $this->ReleaseId;
	}
	/**
	 * Set Title
	 * @param string Title
	 * @return string
	 */
	public function setTitle($_Title)
	{
		return ($this->Title = $_Title);
	}
	/**
	 * Get Title
	 * @return string
	 */
	public function getTitle()
	{
		return $this->Title;
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
	 * Set Source
	 * @param ReleaseSource Source
	 * @return ReleaseSource
	 */
	public function setSource($_Source)
	{
		return ($this->Source = $_Source);
	}
	/**
	 * Get Source
	 * @return XiReleasesTypeReleaseSource
	 */
	public function getSource()
	{
		return $this->Source;
	}
	/**
	 * Set Reference
	 * @param string Reference
	 * @return string
	 */
	public function setReference($_Reference)
	{
		return ($this->Reference = $_Reference);
	}
	/**
	 * Get Reference
	 * @return string
	 */
	public function getReference()
	{
		return $this->Reference;
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