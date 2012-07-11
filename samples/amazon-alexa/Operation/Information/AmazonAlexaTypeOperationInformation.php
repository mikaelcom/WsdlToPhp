<?php
/**
 * Class file for AmazonAlexaTypeOperationInformation
 * @date 10/07/2012
 */
/**
 * Class AmazonAlexaTypeOperationInformation
 * @date 10/07/2012
 */
class AmazonAlexaTypeOperationInformation extends AmazonAlexaWsdlClass
{
	/**
	 * The Name
	 * @var string
	 */
	public $Name;
	/**
	 * The Description
	 * @var string
	 */
	public $Description;
	/**
	 * The RequiredParameters
	 * @var AmazonAlexaTypeRequiredParameters
	 */
	public $RequiredParameters;
	/**
	 * The AvailableParameters
	 * @var AmazonAlexaTypeAvailableParameters
	 */
	public $AvailableParameters;
	/**
	 * The DefaultResponseGroups
	 * @var AmazonAlexaTypeDefaultResponseGroups
	 */
	public $DefaultResponseGroups;
	/**
	 * The AvailableResponseGroups
	 * @var AmazonAlexaTypeAvailableResponseGroups
	 */
	public $AvailableResponseGroups;
	/**
	 * Constructor
	 * @param string Name
	 * @param string Description
	 * @param AmazonAlexaTypeRequiredParameters RequiredParameters
	 * @param AmazonAlexaTypeAvailableParameters AvailableParameters
	 * @param AmazonAlexaTypeDefaultResponseGroups DefaultResponseGroups
	 * @param AmazonAlexaTypeAvailableResponseGroups AvailableResponseGroups
	 * @return AmazonAlexaTypeOperationInformation
	 */
	public function __construct($_Name = null,$_Description = null,$_RequiredParameters = null,$_AvailableParameters = null,$_DefaultResponseGroups = null,$_AvailableResponseGroups = null)
	{
		parent::__construct(array('Name'=>$_Name,'Description'=>$_Description,'RequiredParameters'=>$_RequiredParameters,'AvailableParameters'=>$_AvailableParameters,'DefaultResponseGroups'=>$_DefaultResponseGroups,'AvailableResponseGroups'=>$_AvailableResponseGroups));
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
	 * Set Description
	 * @param string Description
	 * @return string
	 */
	public function setDescription($_Description)
	{
		return ($this->Description = $_Description);
	}
	/**
	 * Get Description
	 * @return string
	 */
	public function getDescription()
	{
		return $this->Description;
	}
	/**
	 * Set RequiredParameters
	 * @param RequiredParameters RequiredParameters
	 * @return RequiredParameters
	 */
	public function setRequiredParameters($_RequiredParameters)
	{
		return ($this->RequiredParameters = $_RequiredParameters);
	}
	/**
	 * Get RequiredParameters
	 * @return AmazonAlexaTypeRequiredParameters
	 */
	public function getRequiredParameters()
	{
		return $this->RequiredParameters;
	}
	/**
	 * Set AvailableParameters
	 * @param AvailableParameters AvailableParameters
	 * @return AvailableParameters
	 */
	public function setAvailableParameters($_AvailableParameters)
	{
		return ($this->AvailableParameters = $_AvailableParameters);
	}
	/**
	 * Get AvailableParameters
	 * @return AmazonAlexaTypeAvailableParameters
	 */
	public function getAvailableParameters()
	{
		return $this->AvailableParameters;
	}
	/**
	 * Set DefaultResponseGroups
	 * @param DefaultResponseGroups DefaultResponseGroups
	 * @return DefaultResponseGroups
	 */
	public function setDefaultResponseGroups($_DefaultResponseGroups)
	{
		return ($this->DefaultResponseGroups = $_DefaultResponseGroups);
	}
	/**
	 * Get DefaultResponseGroups
	 * @return AmazonAlexaTypeDefaultResponseGroups
	 */
	public function getDefaultResponseGroups()
	{
		return $this->DefaultResponseGroups;
	}
	/**
	 * Set AvailableResponseGroups
	 * @param AvailableResponseGroups AvailableResponseGroups
	 * @return AvailableResponseGroups
	 */
	public function setAvailableResponseGroups($_AvailableResponseGroups)
	{
		return ($this->AvailableResponseGroups = $_AvailableResponseGroups);
	}
	/**
	 * Get AvailableResponseGroups
	 * @return AmazonAlexaTypeAvailableResponseGroups
	 */
	public function getAvailableResponseGroups()
	{
		return $this->AvailableResponseGroups;
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