<?php
/**
 * Class file for AmazonECommerceServiceTypeLanguage
 * @date 10/07/2012
 */
/**
 * Class AmazonECommerceServiceTypeLanguage
 * @date 10/07/2012
 */
class AmazonECommerceServiceTypeLanguage extends AmazonECommerceServiceWsdlClass
{
	/**
	 * The Name
	 * @var string
	 */
	public $Name;
	/**
	 * The Type
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $Type;
	/**
	 * The AudioFormat
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $AudioFormat;
	/**
	 * Constructor
	 * @param string Name
	 * @param string Type
	 * @param string AudioFormat
	 * @return AmazonECommerceServiceTypeLanguage
	 */
	public function __construct($_Name = null,$_Type = null,$_AudioFormat = null)
	{
		parent::__construct(array('Name'=>$_Name,'Type'=>$_Type,'AudioFormat'=>$_AudioFormat));
	}
	/**
	 * Set Name
	 * @param string Name
	 * @return string
	 */
	public function setName($_Name)
	{
		return ($this->Name = $_Name);
	}
	/**
	 * Get Name
	 * @return string
	 */
	public function getName()
	{
		return $this->Name;
	}
	/**
	 * Set Type
	 * @param string Type
	 * @return string
	 */
	public function setType($_Type)
	{
		return ($this->Type = $_Type);
	}
	/**
	 * Get Type
	 * @return string
	 */
	public function getType()
	{
		return $this->Type;
	}
	/**
	 * Set AudioFormat
	 * @param string AudioFormat
	 * @return string
	 */
	public function setAudioFormat($_AudioFormat)
	{
		return ($this->AudioFormat = $_AudioFormat);
	}
	/**
	 * Get AudioFormat
	 * @return string
	 */
	public function getAudioFormat()
	{
		return $this->AudioFormat;
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