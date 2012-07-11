<?php
/**
 * Class file for UsgsDownloadTypeGetData
 * @date 08/07/2012
 */
/**
 * Class UsgsDownloadTypeGetData
 * @date 08/07/2012
 */
class UsgsDownloadTypeGetData extends UsgsDownloadWsdlClass
{
	/**
	 * The downloadID
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $downloadID;
	/**
	 * The DB
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $DB;
	/**
	 * Constructor
	 * @param string downloadID
	 * @param string DB
	 * @return UsgsDownloadTypeGetData
	 */
	public function __construct($_downloadID = null,$_DB = null)
	{
		parent::__construct(array('downloadID'=>$_downloadID,'DB'=>$_DB));
	}
	/**
	 * Set downloadID
	 * @param string downloadID
	 * @return string
	 */
	public function setDownloadID($_downloadID)
	{
		return ($this->downloadID = $_downloadID);
	}
	/**
	 * Get downloadID
	 * @return string
	 */
	public function getDownloadID()
	{
		return $this->downloadID;
	}
	/**
	 * Set DB
	 * @param string DB
	 * @return string
	 */
	public function setDB($_DB)
	{
		return ($this->DB = $_DB);
	}
	/**
	 * Get DB
	 * @return string
	 */
	public function getDB()
	{
		return $this->DB;
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