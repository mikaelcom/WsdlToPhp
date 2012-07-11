<?php
/**
 * Class file for EccMktGoogleTypeGoogleCount
 * @date 03/07/2012
 */
/**
 * Class EccMktGoogleTypeGoogleCount
 * @date 03/07/2012
 */
class EccMktGoogleTypeGoogleCount extends EccMktGoogleWsdlClass
{
	/**
	 * The Url
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Url;
	/**
	 * The Count
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Count;
	/**
	 * Constructor
	 * @param string Url
	 * @param string Count
	 * @return EccMktGoogleTypeGoogleCount
	 */
	public function __construct($_Url = null,$_Count = null)
	{
		parent::__construct(array('Url'=>$_Url,'Count'=>$_Count));
	}
	/**
	 * Set Url
	 * @param string Url
	 * @return string
	 */
	public function setUrl($_Url)
	{
		return ($this->Url = $_Url);
	}
	/**
	 * Get Url
	 * @return string
	 */
	public function getUrl()
	{
		return $this->Url;
	}
	/**
	 * Set Count
	 * @param string Count
	 * @return string
	 */
	public function setCount($_Count)
	{
		return ($this->Count = $_Count);
	}
	/**
	 * Get Count
	 * @return string
	 */
	public function getCount()
	{
		return $this->Count;
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