<?php
/**
 * File for WsdlToPhpModel class
 * @package WsdlToPhpGenerator
 * @date 19/12/2012
 */
/**
 * Class WsdlToPhpModel defines the basic properties and methods to operations and structs extracted from the WSDL
 * @package WsdlToPhpGenerator
 * @date 19/12/2012
 */
class WsdlToPhpModel
{
    /**
     * Constant used to define the key to store documentation value in meta
     * @var string
     */
    const META_DOCUMENTATION = 'documentation';
    /**
     * Constant used to define the key to store from schema value in meta
     * @var string
     */
    const META_FROM_SCHEMA = 'from schema';
    /**
     * Original name od the element
     * @var string
     */
    private $name = '';
    /**
     * Values associated to the operation
     * @var array
     */
    private $meta = array();
    /**
     * Define the inheritance of a struct by the name of the parent struct or type
     * @var string
     */
    private $inheritance = '';
    /**
     * Store the object which owns the current model
     * @var WsdlToPhpModel
     */
    private $owner = null;
    /**
     * Indicates that the current elemen is an abstract element.
     * It allows to generated an abstract class.
     * This will happen for element/complexType that are defined with abstract="true"
     * @var bool
     */
    private $isAbstract = false;
    /**
     * Store all the models generated
     * @var array
     */
    private static $models = array();
    /**
     * Reserved PHP keywords
     * Plus {PackageName}WsdlClass specific/common methods
     * @var string
     */
    private static $phpReserverKeywords = '__construct|__destruct|__call|__callStatic|__get|__set|__isset|__unset|__sleep|__wakeup|__toString|__invoke|__set_state|__clone|getSoapClient|setSoapClient|initSoapClient|setLocation|getDefaultWsdlOptions|getLastRequest|getLastResponse|getFormatedXml|add|getResult|length|count|current|item|offsetGet|offsetSet|key|last|first|next|offsetExists|offsetUnset|rewind|setResult|toSend|valueIsValid|valid|getLastError|setLastError|saveLastError|getLastErrorForMethod|getInternArrayToIterate|setInternArrayToIterate|getInternArrayToIterateOffset|initInternArrayToIterate|setInternArrayToIterateOffset|getInternArrayToIterateIsArray|setInternArrayToIterateIsArray|getAttributeName|__toString|_set|_get|__halt_compiler|abstract|and|array|as|break|callable|case|catch|class|clone|const|continue|declare|default|die|do|echo|else|elseif|empty|enddeclare|endfor|endforeach|endif|endswitch|endwhile|eval|exit|extends|final|for|foreach|function|global|goto|if|implements|include|include_once|instanceof|insteadof|interface|isset|list|namespace|new|or|print|private|protected|public|require|require_once|return|static|switch|throw|trait|try|unset|use|var|while|xor';
    /**
     * Replaced keywords time in order to generate unique new keyword
     * @var array
     */
    private static $replacedReservedPhpKeywords = array();
    /**
     * Unique name generated in order to ensure unique naming (for struct constructor and setters/getters even for different case attribute name whith same value)
     * @var array
     */
    private static $uniqueNames = array();
    /**
     * Main constructor
     * @uses WsdlToPhpModel::setName()
     * @uses WsdlToPhpModel::updateModels()
     * @param string $_name the original name
     * @return WsdlToPhpModel
     */
    public function __construct($_name)
    {
        $this->setName($_name);
        self::updateModels($this);
    }
    /**
     * Returns comments for the element
     * @return array
     */
    public function getComment()
    {
        return array();
    }
    /**
     * Returns the comments for the file
     * @uses WsdlToPhpModel::getPackagedName()
     * @uses WsdlToPhpGenerator::getOptionAddComments()
     * @uses WsdlToPhpModel::getDocSubPackages()
     * @uses WsdlToPhpGenerator::getPackageName()
     * @return array
     */
    private function getFileComment()
    {
        $comments = array();
        array_push($comments,'File for class ' . $this->getPackagedName());
        array_push($comments,'@package ' . WsdlToPhpGenerator::getPackageName());
        if(count($this->getDocSubPackages()))
            array_push($comments,'@subpackage ' . implode(',',$this->getDocSubPackages()));
        if(count(WsdlToPhpGenerator::getOptionAddComments()))
        {
            foreach(WsdlToPhpGenerator::getOptionAddComments() as $tagName=>$tagValue)
                array_push($comments,"@$tagName $tagValue");
        }
        return $comments;
    }
    /**
     * Returns the comments for the class
     * @uses WsdlToPhpModel::getPackagedName()
     * @uses WsdlToPhpGenerator::getOptionAddComments()
     * @uses WsdlToPhpModel::getDocumentation()
     * @uses WsdlToPhpModel::addMetaComment()
     * @uses WsdlToPhpModel::getDocSubPackages()
     * @uses WsdlToPhpStruct::getIsStruct()
     * @uses WsdlToPhpGenerator::getPackageName()
     * @return array
     */
    private function getClassComment()
    {
        $comments = array();
        array_push($comments,'This class stands for ' . $this->getPackagedName() . ' originally named ' . $this->getName());
        if($this->getDocumentation() != '')
            array_push($comments,'Documentation : ' . $this->getDocumentation());
        $this->addMetaComment($comments,false,true);
        if($this->getInheritance() != '')
        {
            $inheritedModel = self::getModelByName($this->getInheritance());
            /**
             * A virtual struct exists only to store meta informations about itself
             * So don't add meta informations about a valid struct
             */
            if($inheritedModel && !$inheritedModel->getIsStruct())
                $inheritedModel->addMetaComment($comments,false,false);
        }
        array_push($comments,'@package ' . WsdlToPhpGenerator::getPackageName());
        if(count($this->getDocSubPackages()))
            array_push($comments,'@subpackage ' . implode(',',$this->getDocSubPackages()));
        if(count(WsdlToPhpGenerator::getOptionAddComments()))
        {
            foreach(WsdlToPhpGenerator::getOptionAddComments() as $tagName=>$tagValue)
                array_push($comments,"@$tagName $tagValue");
        }
        return $comments;
    }
    /**
     * Method to override in sub class
     * Must return a string in order to declare the function, attribute or the value
     * @uses WsdlToPhpStruct::getIsStruct()
     * @uses WsdlToPhpModel::getModelByName()
     * @uses WsdlToPhpModel::getInheritance()
     * @uses WsdlToPhpModel::getComment()
     * @uses WsdlToPhpModel::getPackagedName()
     * @uses WsdlToPhpModel::getClassBody()
     * @uses WsdlToPhpModel::getGenericWsdlClassName()
     * @uses WsdlToPhpGenerator::getOptionInheritsClassIdentifier()
     * @uses WsdlToPhpGenerator::getOptionGenerateWsdlClassFile()
     * @return string
     */
    public function getClassDeclaration()
    {
        $class = array();
        /**
         * Class comments
         */
        array_push($class,array(
                                'comment'=>$this->getFileComment()));
        array_push($class,array(
                                'comment'=>$this->getClassComment()));
        /**
         * Extends
         */
        $extends = '';
        $base = WsdlToPhpGenerator::getOptionInheritsClassIdentifier();
        if(!empty($base) && ($model = self::getModelByName($this->getName() . $base)))
        {
            if($model->getIsStruct())
                $extends = $model->getPackagedName();
        }
        elseif($this->getInheritance() != '' && ($model = self::getModelByName($this->getInheritance())))
        {
            if($model->getIsStruct())
                $extends = $model->getPackagedName();
        }
        elseif(class_exists($this->getInheritance()) && stripos($this->getInheritance(),WsdlToPhpGenerator::getPackageName()) === 0)
            $extends = $this->getInheritance();
        if(empty($extends) && WsdlToPhpGenerator::getOptionGenerateWsdlClassFile())
            $extends = self::getGenericWsdlClassName();
        array_push($class,($this->getIsAbstract()?'abstract ':'') . 'class ' . $this->getPackagedName() . (!empty($extends)?' extends ' . $extends:''));
        /**
         * Class body starts here
         */
        array_push($class,'{');
        /**
         * Populate class body
         */
        $this->getClassBody($class);
        /**
         * __toString() method comments
         */
        $comments = array();
        array_push($comments,'Method returning the class name');
        array_push($comments,'@return string __CLASS__');
        array_push($class,array(
                                'comment'=>$comments));
        unset($comments);
        /**
         * __toString method body
         */
        array_push($class,'public function __toString()');
        array_push($class,'{');
        array_push($class,'return __CLASS__;');
        array_push($class,'}');
        /**
         * Class body ends here
         */
        array_push($class,'}');
        return $class;
    }
    /**
     * Methods which fills the class body
     * Must be overridden in classes
     * @param array
     * @return void
     */
    public function getClassBody(&$_class)
    {}
    /**
     * Returns the name of the class the current class inherits from
     * @return string
     */
    public function getInheritance()
    {
        return $this->inheritance;
    }
    /**
     * Sets the name of the class the current class inherits from
     * @uses WsdlToPhpModel::updateModels()
     * @param string
     */
    public function setInheritance($_inheritance = '')
    {
        $this->inheritance = $_inheritance;
        self::updateModels($this);
        return $_inheritance;
    }
    /**
     * Add meta informations to comment array
     * @uses WsdlToPhpModel::META_DOCUMENTATION
     * @uses WsdlToPhpModel::getMeta()
     * @uses WsdlToPhpModel::cleanComment()
     * @param array $_comments array which meta are added to
     * @param bool $_addStars add comments tags
     * @param bool $_ignoreDocumentation ignore documentation info or not
     * @return void
     */
    protected function addMetaComment(array &$_comments = array(),$_addStars = false,$_ignoreDocumentation = false)
    {
        $metaComments = array();
        if(count($this->getMeta()))
        {
            foreach($this->getMeta() as $metaName=>$metaValue)
            {
                $cleanedMetaValue = self::cleanComment($metaValue,$metaName == self::META_DOCUMENTATION?' ':',',stripos($metaName,'SOAPHeader') === false);
                if(($_ignoreDocumentation && $metaName == self::META_DOCUMENTATION) || $cleanedMetaValue === '')
                    continue;
                array_push($metaComments,($_addStars?' * ':'') . "    - $metaName : " . (($metaName == self::META_FROM_SCHEMA && stripos($cleanedMetaValue,'http') === 0)?"{@link $cleanedMetaValue}":$cleanedMetaValue));
            }
        }
        if(count($metaComments))
        {
            if(!in_array('Meta informations extracted from the WSDL',$_comments))
                array_push($_comments,'Meta informations extracted from the WSDL');
            foreach($metaComments as $metaComment)
                array_push($_comments,$metaComment);
        }
        unset($metaComments);
    }
    /**
     * Returns the meta
     * @return array
     */
    public function getMeta()
    {
        return $this->meta;
    }
    /**
     * Sets the meta
     * @param array $_meta
     * @return array
     */
    public function setMeta(array $_meta = array())
    {
        return ($this->meta = $_meta);
    }
    /**
     * Add meta information to the operation
     * @uses WsdlToPhpModel::getMeta()
     * @uses WsdlToPhpModel::updateModels()
     * @param string $_metaName
     * @param mixed $_metaValue
     * @return mixed
     */
    public function addMeta($_metaName,$_metaValue)
    {
        if(!is_scalar($_metaName) || (!is_scalar($_metaValue) && !is_array($_metaValue)))
            return '';
        $metaValue = is_scalar($_metaValue)?trim($_metaValue):$_metaValue;
        if(is_scalar($metaValue) && $metaValue === '')
            return false;
        if(!array_key_exists($_metaName,$this->getMeta()))
            $this->meta[$_metaName] = $metaValue;
        elseif(is_array($this->meta[$_metaName]) && is_array($metaValue))
            $this->meta[$_metaName] = array_merge($this->meta[$_metaName],$metaValue);
        elseif(is_array($this->meta[$_metaName]))
            array_push($this->meta[$_metaName],$metaValue);
        else
            $this->meta[$_metaName] = $metaValue;
        ksort($this->meta);
        self::updateModels($this);
        return $metaValue;
    }
    /**
     * Sets the documentation meta value.
     * Documentation is set as an array so if multiple documentation nodes are set for an unique element, it will gather them.
     * @uses WsdlToPhpModel::META_DOCUMENTATION
     * @uses WsdlToPhpModel::addMeta()
     * @param string $_documentation the documentation from the WSDL
     * @return string the documentation from the WSDL
     */
    public function setDocumentation($_documentation)
    {
        return $this->addMeta(self::META_DOCUMENTATION,is_array($_documentation)?$_documentation:array(
                                                                                                        $_documentation));
    }
    /**
     * Get the documentation meta value
     * @uses WsdlToPhpModel::META_DOCUMENTATION
     * @uses WsdlToPhpModel::getMetaValue()
     * @uses WsdlToPhpModel::cleanComment()
     * @return string the documentation from the WSDL
     */
    public function getDocumentation()
    {
        return self::cleanComment($this->getMetaValue(self::META_DOCUMENTATION,''),' ');
    }
    /**
     * Sets the from schema meta value.
     * @uses WsdlToPhpModel::META_FROM_SCHEMA
     * @uses WsdlToPhpModel::addMeta()
     * @param string $_fromSchema the url from which the element comes from
     * @return string the url from which the element comes from
     */
    public function setFromSchema($_fromSchema)
    {
        return $this->addMeta(self::META_FROM_SCHEMA,$_fromSchema);
    }
    /**
     * Get the from schema meta value
     * @uses WsdlToPhpModel::META_FROM_SCHEMA
     * @uses WsdlToPhpModel::getMetaValue()
     * @return string the from schema meta value
     */
    public function getFromSchema()
    {
        return $this->getMetaValue(self::META_FROM_SCHEMA,'');
    }
    /**
     * Returns a meta value according to its name
     * @uses WsdlToPhpModel::getMeta()
     * @param string $_metaName the meta information name
     * @param string $_fallback the fallback value if unset
     * @return mixed the meta information value
     */
    public function getMetaValue($_metaName,$_fallback = null)
    {
        return array_key_exists($_metaName,$this->getMeta())?$this->meta[$_metaName]:$_fallback;
    }
    /**
     * Returns the value of the first meta value assigned to the name
     * @param array $_names the meta names to check
     * @param string $_fallback the fallback value if anyone is set
     * @return mixed the meta information value
     */
    public function getMetaValueFirstSet(array $_names,$_fallback = null)
    {
        foreach($_names as $name)
        {
            if(array_key_exists($name,$this->getMeta()))
                return $this->meta[$name];
        }
        return $_fallback;
    }
    /**
     * Returns the original name extracted from the WSDL
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Sets the original name extracted from the WSDL
     * @param string $_name
     * @return string
     */
    public function setName($_name)
    {
        return ($this->name = $_name);
    }
    /**
     * Returns a valid clean name for PHP
     * @uses WsdlToPhpModel::getName()
     * @uses WsdlToPhpModel::cleanString()
     * @param bool $_keepMultipleUnderscores optional, allows to keep the multiple consecutive underscores
     * @return string
     */
    public function getCleanName($_keepMultipleUnderscores = true)
    {
        return self::cleanString($this->getName(),$_keepMultipleUnderscores);
    }
    /**
     * Returns the owner model object
     * @return WsdlToPhpModel
     */
    public function getOwner()
    {
        return $this->owner;
    }
    /**
     * Sets the owner model object
     * @param WsdlToPhpModel $_owner object the owner of the current model
     * @uses WsdlToPhpModel::updateModels()
     * @return WsdlToPhpModel
     */
    public function setOwner(WsdlToPhpModel $_owner)
    {
        $this->owner = $_owner;
        self::updateModels($this);
        return $_owner;
    }
    /**
     * @return bool
     */
    public function getIsAbstract()
    {
        return $this->isAbstract;
    }
    /**
     * @param bool $_isAbstract
     * @return bool
     */
    public function setIsAbstract($_isAbstract)
    {
        $this->isAbstract = $_isAbstract;
        self::updateModels($this);
        return $_isAbstract;
    }
    /**
     * Returns true if the original name is safe to use as a PHP property, variable name or class name
     * @uses WsdlToPhpModel::getName()
     * @uses WsdlToPhpModel::getCleanName()
     * @return bool
     */
    public function nameIsClean()
    {
        return ($this->getName() != '' && $this->getName() == $this->getCleanName());
    }
    /**
     * Returns the packaged name
     * @uses WsdlToPhpGenerator::getPackageName()
     * @uses WsdlToPhpModel::getCleanName()
     * @uses WsdlToPhpModel::getContextualPart()
     * @uses WsdlToPhpModel::uniqueName() to ensure unique naming of struct case sensitively
     * @return string
     */
    public function getPackagedName()
    {
        return WsdlToPhpGenerator::getPackageName() . $this->getContextualPart() . ucfirst(self::uniqueName($this->getCleanName(),$this->getContextualPart()));
    }
    /**
     * Allows to define the contextual part of the class name for the package
     * @return string
     */
    public function getContextualPart()
    {
        return '';
    }
    /**
     * Returns the sub package name which the model belongs to
     * Must be overridden by sub classes
     * @return array
     */
    public function getDocSubPackages()
    {
        return array();
    }
    /**
     * Clean a string to make it valid as PHP variable
     * @param string $_string the string to clean
     * @param bool $_keepMultipleUnderscores optional, allows to keep the multiple consecutive underscores
     * @return string
     */
    public static function cleanString($_string,$_keepMultipleUnderscores = true)
    {
        $cleanedString = preg_replace('/[^a-zA-Z0-9_]/','_',$_string);
        if(!$_keepMultipleUnderscores)
            $cleanedString = preg_replace('/[_]+/','_',$cleanedString);
        return $cleanedString;
    }
    /**
     * Get models
     * @return array
     */
    public static function getModels()
    {
        return self::$models;
    }
    /**
     * Returns the model by its name
     * @uses WsdlToPhpModel::getModels()
     * @param string $_modelName the original WsdlToPhpStruct name
     * @return WsdlToPhpStruct|null
     */
    public static function getModelByName($_modelName)
    {
        if(!is_scalar($_modelName))
            return null;
        return array_key_exists('_' . $_modelName . '_',self::getModels())?self::$models['_' . $_modelName . '_']:null;
    }
    /**
     * Updates models with model
     * @uses WsdlToPhpModel::getName()
     * @uses WsdlToPhpModel::__toString()
     * @param WsdlToPhpModel $_model a WsdlToPhpModel object
     * @return WsdlToPhpStruct|bool
     */
    protected static function updateModels(WsdlToPhpModel $_model)
    {
        if($_model->__toString() != 'WsdlToPhpStruct' || !$_model->getName())
            return false;
        return (self::$models['_' . $_model->getName() . '_'] = $_model);
    }
    /**
     * Returns a usable keyword for a original keyword
     * @param string $_keyword the keyword
     * @param string $_context the context
     * @return string
     */
    public static function replaceReservedPhpKeyword($_keyword,$_context)
    {
        $phpReservedKeywordFound = '';
        foreach(explode('|',self::$phpReserverKeywords) as $keyword)
        {
            if(strtolower($keyword) == strtolower($_keyword))
            {
                $phpReservedKeywordFound = $keyword;
                break;
            }
        }
        if(!empty($phpReservedKeywordFound))
        {
            $keywordKey = $phpReservedKeywordFound . '_' . $_context;
            if(!array_key_exists($keywordKey,self::$replacedReservedPhpKeywords))
                self::$replacedReservedPhpKeywords[$keywordKey] = 0;
            else
                self::$replacedReservedPhpKeywords[$keywordKey]++;
            return '_' . $_keyword . (self::$replacedReservedPhpKeywords[$keywordKey]?'_' . self::$replacedReservedPhpKeywords[$keywordKey]:'');
        }
        else
            return $_keyword;
    }
    /**
     * Static method wich returns a unique name case sensitively
     * Useful to name methods case sensitively distinct, see http://the-echoplex.net/log/php-case-sensitivity
     * @param string $_name the original name
     * @param string $_context the context where the name is needed unique
     * @return string
     */
    protected static function uniqueName($_name,$_context)
    {
        $insensitiveKey = strtolower($_name . '_' . $_context);
        $sensitiveKey = $_name . '_' . $_context;
        if(array_key_exists($sensitiveKey,self::$uniqueNames))
            return self::$uniqueNames[$sensitiveKey];
        elseif(!array_key_exists($insensitiveKey,self::$uniqueNames))
            self::$uniqueNames[$insensitiveKey] = 0;
        else
            self::$uniqueNames[$insensitiveKey]++;
        $uniqueName = $_name . (self::$uniqueNames[$insensitiveKey]?'_' . self::$uniqueNames[$insensitiveKey]:'');
        self::$uniqueNames[$sensitiveKey] = $uniqueName;
        return $uniqueName;
    }
    /**
     * Returns the value with good type
     * @param mixed $_value the value
     * @return mixed
     */
    public static function getValueWithinItsType($_value,$_knownType = null)
    {
        if(is_int($_value) || (!is_null($_value) && in_array($_knownType,array(
                                                                                'time',
                                                                                'positiveInteger',
                                                                                'unsignedLong',
                                                                                'unsignedInt',
                                                                                'short',
                                                                                'long',
                                                                                'int',
                                                                                'integer'))))
            return intval($_value);
        elseif(is_float($_value) || (!is_null($_value) && in_array($_knownType,array(
                                                                                    'float',
                                                                                    'double',
                                                                                    'decimal'))))
            return floatval($_value);
        elseif(is_numeric($_value))
            return intval($_value) == $_value?intval($_value):floatval($_value);
        elseif(is_bool($_value) || (!is_null($_value) && in_array($_knownType,array(
                                                                                    'bool',
                                                                                    'boolean'))))
            return ($_value === 'true' || $_value === true || $_value === 1 || $_value === '1');
        else
            return $_value;
    }
    /**
     * Clean comment
     * @param string $_comment the comment to clean
     * @param string $_glueSeparator ths string to use when gathering values
     * @param bool $_uniqueValues indicates if comment values must be unique or not
     * @return string
     */
    public static function cleanComment($_comment,$_glueSeparator = ',',$_uniqueValues = true)
    {
        if(!is_scalar($_comment) && !is_array($_comment))
            return '';
        return trim(str_replace('*/','*[:slash:]',is_scalar($_comment)?$_comment:implode($_glueSeparator,$_uniqueValues?array_unique($_comment):$_comment)));
    }
    /**
     * Returns the generic name of the WsdlClass
     * @uses WsdlToPhpGenerator::getPackageName()
     * @return string
     */
    public static function getGenericWsdlClassName()
    {
        return WsdlToPhpGenerator::getPackageName() . 'WsdlClass';
    }
    /**
     * Returns class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
