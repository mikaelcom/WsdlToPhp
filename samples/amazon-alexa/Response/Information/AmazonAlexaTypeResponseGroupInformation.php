<?php
/**
 * Class file for AmazonAlexaTypeResponseGroupInformation
 * @date 10/07/2012
 */
/**
 * Class AmazonAlexaTypeResponseGroupInformation
 * @date 10/07/2012
 */
class AmazonAlexaTypeResponseGroupInformation extends AmazonAlexaWsdlClass
{
	/**
	 * The Name
	 * @var string
	 */
	public $Name;
	/**
	 * The CreationDate
	 * @var string
	 */
	public $CreationDate;
	/**
	 * The ValidOperations
	 * @var AmazonAlexaTypeValidOperations
	 */
	public $ValidOperations;
	/**
	 * The Elements
	 * @var AmazonAlexaTypeElements
	 */
	public $Elements;
	/**
	 * Constructor
	 * @param string Name
	 * @param string CreationDate
	 * @param AmazonAlexaTypeValidOperations ValidOperations
	 * @param AmazonAlexaTypeElements Elements
	 * @return AmazonAlexaTypeResponseGroupInformation
	 */
	public function __construct($_Name = null,$_CreationDate = null,$_ValidOperations = null,$_Elements = null)
	{
		parent::__construct(array('Name'=>$_Name,'CreationDate'=>$_CreationDate,'ValidOperations'=>$_ValidOperations,'Elements'=>$_Elements));
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
	 * Set CreationDate
	 * @param string CreationDate
	 * @return string
	 */
	public function setCreationDate($_CreationDate)
	{
		return ($this->CreationDate = $_CreationDate);
	}
	/**
	 * Get CreationDate
	 * @return string
	 */
	public function getCreationDate()
	{
		return $this->CreationDate;
	}
	/**
	 * Set ValidOperations
	 * @param ValidOperations ValidOperations
	 * @return ValidOperations
	 */
	public function setValidOperations($_ValidOperations)
	{
		return ($this->ValidOperations = $_ValidOperations);
	}
	/**
	 * Get ValidOperations
	 * @return AmazonAlexaTypeValidOperations
	 */
	public function getValidOperations()
	{
		return $this->ValidOperations;
	}
	/**
	 * Set Elements
	 * @param Elements Elements
	 * @return Elements
	 */
	public function setElements($_Elements)
	{
		return ($this->Elements = $_Elements);
	}
	/**
	 * Get Elements
	 * @return AmazonAlexaTypeElements
	 */
	public function getElements()
	{
		return $this->Elements;
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