<?php
/**
 * Class file for BioIDWSTypeBioIDWebServiceFault
 * @date 15/08/2012
 */
/**
 * Class BioIDWSTypeBioIDWebServiceFault
 * @date 15/08/2012
 */
class BioIDWSTypeBioIDWebServiceFault extends BioIDWSWsdlClass
{
	/**
	 * The Code
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $Code;
	/**
	 * The Message
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $Message;
	/**
	 * Constructor
	 * @param string Code
	 * @param string Message
	 * @return BioIDWSTypeBioIDWebServiceFault
	 */
	public function __construct($_Code = null,$_Message = null)
	{
		parent::__construct(array('Code'=>$_Code,'Message'=>$_Message));
	}
	/**
	 * Set Code
	 * @param string Code
	 * @return string
	 */
	public function setCode($_Code)
	{
		return ($this->Code = $_Code);
	}
	/**
	 * Get Code
	 * @return string
	 */
	public function getCode()
	{
		return $this->Code;
	}
	/**
	 * Set Message
	 * @param string Message
	 * @return string
	 */
	public function setMessage($_Message)
	{
		return ($this->Message = $_Message);
	}
	/**
	 * Get Message
	 * @return string
	 */
	public function getMessage()
	{
		return $this->Message;
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