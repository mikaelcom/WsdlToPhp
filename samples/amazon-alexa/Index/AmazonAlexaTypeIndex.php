<?php
/**
 * Class file for AmazonAlexaTypeIndex
 * @date 10/07/2012
 */
/**
 * Class AmazonAlexaTypeIndex
 * @date 10/07/2012
 */
class AmazonAlexaTypeIndex extends AmazonAlexaWsdlClass
{
	/**
	 * The MD5Sum
	 * @var token
	 */
	public $MD5Sum;
	/**
	 * The CanonizedUrl
	 * @var token
	 */
	public $CanonizedUrl;
	/**
	 * The Location
	 * @var token
	 */
	public $Location;
	/**
	 * The FileName
	 * @var token
	 */
	public $FileName;
	/**
	 * The Offsets
	 * @var AmazonAlexaTypeOffsets
	 */
	public $Offsets;
	/**
	 * Constructor
	 * @param token MD5Sum
	 * @param token CanonizedUrl
	 * @param token Location
	 * @param token FileName
	 * @param AmazonAlexaTypeOffsets Offsets
	 * @return AmazonAlexaTypeIndex
	 */
	public function __construct($_MD5Sum = null,$_CanonizedUrl = null,$_Location = null,$_FileName = null,$_Offsets = null)
	{
		parent::__construct(array('MD5Sum'=>$_MD5Sum,'CanonizedUrl'=>$_CanonizedUrl,'Location'=>$_Location,'FileName'=>$_FileName,'Offsets'=>$_Offsets));
	}
	/**
	 * Set MD5Sum
	 * @param token MD5Sum
	 * @return token
	 */
	public function setMD5Sum($_MD5Sum)
	{
		return ($this->MD5Sum = $_MD5Sum);
	}
	/**
	 * Get MD5Sum
	 * @return token
	 */
	public function getMD5Sum()
	{
		return $this->MD5Sum;
	}
	/**
	 * Set CanonizedUrl
	 * @param token CanonizedUrl
	 * @return token
	 */
	public function setCanonizedUrl($_CanonizedUrl)
	{
		return ($this->CanonizedUrl = $_CanonizedUrl);
	}
	/**
	 * Get CanonizedUrl
	 * @return token
	 */
	public function getCanonizedUrl()
	{
		return $this->CanonizedUrl;
	}
	/**
	 * Set Location
	 * @param token Location
	 * @return token
	 */
	public function setLocation($_Location)
	{
		return ($this->Location = $_Location);
	}
	/**
	 * Get Location
	 * @return token
	 */
	public function getLocation()
	{
		return $this->Location;
	}
	/**
	 * Set FileName
	 * @param token FileName
	 * @return token
	 */
	public function setFileName($_FileName)
	{
		return ($this->FileName = $_FileName);
	}
	/**
	 * Get FileName
	 * @return token
	 */
	public function getFileName()
	{
		return $this->FileName;
	}
	/**
	 * Set Offsets
	 * @param Offsets Offsets
	 * @return Offsets
	 */
	public function setOffsets($_Offsets)
	{
		return ($this->Offsets = $_Offsets);
	}
	/**
	 * Get Offsets
	 * @return AmazonAlexaTypeOffsets
	 */
	public function getOffsets()
	{
		return $this->Offsets;
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