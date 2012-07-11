<?php
/**
 * Class file for SPImagingTypeEdit
 * @date 06/07/2012
 */
/**
 * Class SPImagingTypeEdit
 * @date 06/07/2012
 */
class SPImagingTypeEdit extends SPImagingWsdlClass
{
	/**
	 * The strListName
	 * @var string
	 */
	public $strListName;
	/**
	 * The strFolder
	 * @var string
	 */
	public $strFolder;
	/**
	 * The itemFileName
	 * @var string
	 */
	public $itemFileName;
	/**
	 * The recipe
	 * @var SPImagingTypeRecipe
	 */
	public $recipe;
	/**
	 * Constructor
	 * @param string strListName
	 * @param string strFolder
	 * @param string itemFileName
	 * @param SPImagingTypeRecipe recipe
	 * @return SPImagingTypeEdit
	 */
	public function __construct($_strListName = null,$_strFolder = null,$_itemFileName = null,$_recipe = null)
	{
		parent::__construct(array('strListName'=>$_strListName,'strFolder'=>$_strFolder,'itemFileName'=>$_itemFileName,'recipe'=>$_recipe));
	}
	/**
	 * Set strListName
	 * @param string strListName
	 * @return string
	 */
	public function setStrListName($_strListName)
	{
		return ($this->strListName = $_strListName);
	}
	/**
	 * Get strListName
	 * @return string
	 */
	public function getStrListName()
	{
		return $this->strListName;
	}
	/**
	 * Set strFolder
	 * @param string strFolder
	 * @return string
	 */
	public function setStrFolder($_strFolder)
	{
		return ($this->strFolder = $_strFolder);
	}
	/**
	 * Get strFolder
	 * @return string
	 */
	public function getStrFolder()
	{
		return $this->strFolder;
	}
	/**
	 * Set itemFileName
	 * @param string itemFileName
	 * @return string
	 */
	public function setItemFileName($_itemFileName)
	{
		return ($this->itemFileName = $_itemFileName);
	}
	/**
	 * Get itemFileName
	 * @return string
	 */
	public function getItemFileName()
	{
		return $this->itemFileName;
	}
	/**
	 * Set recipe
	 * @param recipe recipe
	 * @return recipe
	 */
	public function setRecipe($_recipe)
	{
		return ($this->recipe = $_recipe);
	}
	/**
	 * Get recipe
	 * @return SPImagingTyperecipe
	 */
	public function getRecipe()
	{
		return $this->recipe;
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