<?php
/**
 * Class file for XiStatisticsTypeCategory
 * @date 08/07/2012
 */
/**
 * Class XiStatisticsTypeCategory
 * @date 08/07/2012
 */
class XiStatisticsTypeCategory extends XiStatisticsTypeCommon
{
	/**
	 * The Code
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Code;
	/**
	 * The Name
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Name;
	/**
	 * The TopicCollection
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiStatisticsTypeArrayOfTopic
	 */
	public $TopicCollection;
	/**
	 * Constructor
	 * @param string Code
	 * @param string Name
	 * @param XiStatisticsTypeArrayOfTopic TopicCollection
	 * @return XiStatisticsTypeCategory
	 */
	public function __construct($_Code = null,$_Name = null,$_TopicCollection = null)
	{
		XiStatisticsWsdlClass::__construct(array('Code'=>$_Code,'Name'=>$_Name,'TopicCollection'=>new XiStatisticsTypeArrayOfTopic($_TopicCollection)));
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
	 * Set TopicCollection
	 * @param ArrayOfTopic TopicCollection
	 * @return ArrayOfTopic
	 */
	public function setTopicCollection($_TopicCollection)
	{
		return ($this->TopicCollection = $_TopicCollection);
	}
	/**
	 * Get TopicCollection
	 * @return XiStatisticsTypeArrayOfTopic
	 */
	public function getTopicCollection()
	{
		return $this->TopicCollection;
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