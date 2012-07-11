<?php
/**
 * Class file for AmazonWebServicesTypeKeyPhrase
 * @date 10/07/2012
 */
/**
 * Class AmazonWebServicesTypeKeyPhrase
 * @date 10/07/2012
 */
class AmazonWebServicesTypeKeyPhrase extends AmazonWebServicesWsdlClass
{
	/**
	 * The KeyPhrase
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $KeyPhrase;
	/**
	 * The Type
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $Type;
	/**
	 * Constructor
	 * @param string KeyPhrase
	 * @param string Type
	 * @return AmazonWebServicesTypeKeyPhrase
	 */
	public function __construct($_KeyPhrase = null,$_Type = null)
	{
		parent::__construct(array('KeyPhrase'=>$_KeyPhrase,'Type'=>$_Type));
	}
	/**
	 * Set KeyPhrase
	 * @param string KeyPhrase
	 * @return string
	 */
	public function setKeyPhrase($_KeyPhrase)
	{
		return ($this->KeyPhrase = $_KeyPhrase);
	}
	/**
	 * Get KeyPhrase
	 * @return string
	 */
	public function getKeyPhrase()
	{
		return $this->KeyPhrase;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>