<?php

namespace ContainerWti5ufv;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldercc4aa = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerf03b9 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties68da5 = [
        
    ];

    public function getConnection()
    {
        $this->initializerf03b9 && ($this->initializerf03b9->__invoke($valueHoldercc4aa, $this, 'getConnection', array(), $this->initializerf03b9) || 1) && $this->valueHoldercc4aa = $valueHoldercc4aa;

        return $this->valueHoldercc4aa->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerf03b9 && ($this->initializerf03b9->__invoke($valueHoldercc4aa, $this, 'getMetadataFactory', array(), $this->initializerf03b9) || 1) && $this->valueHoldercc4aa = $valueHoldercc4aa;

        return $this->valueHoldercc4aa->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerf03b9 && ($this->initializerf03b9->__invoke($valueHoldercc4aa, $this, 'getExpressionBuilder', array(), $this->initializerf03b9) || 1) && $this->valueHoldercc4aa = $valueHoldercc4aa;

        return $this->valueHoldercc4aa->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerf03b9 && ($this->initializerf03b9->__invoke($valueHoldercc4aa, $this, 'beginTransaction', array(), $this->initializerf03b9) || 1) && $this->valueHoldercc4aa = $valueHoldercc4aa;

        return $this->valueHoldercc4aa->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerf03b9 && ($this->initializerf03b9->__invoke($valueHoldercc4aa, $this, 'getCache', array(), $this->initializerf03b9) || 1) && $this->valueHoldercc4aa = $valueHoldercc4aa;

        return $this->valueHoldercc4aa->getCache();
    }

    public function transactional($func)
    {
        $this->initializerf03b9 && ($this->initializerf03b9->__invoke($valueHoldercc4aa, $this, 'transactional', array('func' => $func), $this->initializerf03b9) || 1) && $this->valueHoldercc4aa = $valueHoldercc4aa;

        return $this->valueHoldercc4aa->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerf03b9 && ($this->initializerf03b9->__invoke($valueHoldercc4aa, $this, 'wrapInTransaction', array('func' => $func), $this->initializerf03b9) || 1) && $this->valueHoldercc4aa = $valueHoldercc4aa;

        return $this->valueHoldercc4aa->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerf03b9 && ($this->initializerf03b9->__invoke($valueHoldercc4aa, $this, 'commit', array(), $this->initializerf03b9) || 1) && $this->valueHoldercc4aa = $valueHoldercc4aa;

        return $this->valueHoldercc4aa->commit();
    }

    public function rollback()
    {
        $this->initializerf03b9 && ($this->initializerf03b9->__invoke($valueHoldercc4aa, $this, 'rollback', array(), $this->initializerf03b9) || 1) && $this->valueHoldercc4aa = $valueHoldercc4aa;

        return $this->valueHoldercc4aa->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerf03b9 && ($this->initializerf03b9->__invoke($valueHoldercc4aa, $this, 'getClassMetadata', array('className' => $className), $this->initializerf03b9) || 1) && $this->valueHoldercc4aa = $valueHoldercc4aa;

        return $this->valueHoldercc4aa->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerf03b9 && ($this->initializerf03b9->__invoke($valueHoldercc4aa, $this, 'createQuery', array('dql' => $dql), $this->initializerf03b9) || 1) && $this->valueHoldercc4aa = $valueHoldercc4aa;

        return $this->valueHoldercc4aa->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerf03b9 && ($this->initializerf03b9->__invoke($valueHoldercc4aa, $this, 'createNamedQuery', array('name' => $name), $this->initializerf03b9) || 1) && $this->valueHoldercc4aa = $valueHoldercc4aa;

        return $this->valueHoldercc4aa->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerf03b9 && ($this->initializerf03b9->__invoke($valueHoldercc4aa, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerf03b9) || 1) && $this->valueHoldercc4aa = $valueHoldercc4aa;

        return $this->valueHoldercc4aa->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerf03b9 && ($this->initializerf03b9->__invoke($valueHoldercc4aa, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerf03b9) || 1) && $this->valueHoldercc4aa = $valueHoldercc4aa;

        return $this->valueHoldercc4aa->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerf03b9 && ($this->initializerf03b9->__invoke($valueHoldercc4aa, $this, 'createQueryBuilder', array(), $this->initializerf03b9) || 1) && $this->valueHoldercc4aa = $valueHoldercc4aa;

        return $this->valueHoldercc4aa->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerf03b9 && ($this->initializerf03b9->__invoke($valueHoldercc4aa, $this, 'flush', array('entity' => $entity), $this->initializerf03b9) || 1) && $this->valueHoldercc4aa = $valueHoldercc4aa;

        return $this->valueHoldercc4aa->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerf03b9 && ($this->initializerf03b9->__invoke($valueHoldercc4aa, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf03b9) || 1) && $this->valueHoldercc4aa = $valueHoldercc4aa;

        return $this->valueHoldercc4aa->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerf03b9 && ($this->initializerf03b9->__invoke($valueHoldercc4aa, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerf03b9) || 1) && $this->valueHoldercc4aa = $valueHoldercc4aa;

        return $this->valueHoldercc4aa->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerf03b9 && ($this->initializerf03b9->__invoke($valueHoldercc4aa, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerf03b9) || 1) && $this->valueHoldercc4aa = $valueHoldercc4aa;

        return $this->valueHoldercc4aa->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerf03b9 && ($this->initializerf03b9->__invoke($valueHoldercc4aa, $this, 'clear', array('entityName' => $entityName), $this->initializerf03b9) || 1) && $this->valueHoldercc4aa = $valueHoldercc4aa;

        return $this->valueHoldercc4aa->clear($entityName);
    }

    public function close()
    {
        $this->initializerf03b9 && ($this->initializerf03b9->__invoke($valueHoldercc4aa, $this, 'close', array(), $this->initializerf03b9) || 1) && $this->valueHoldercc4aa = $valueHoldercc4aa;

        return $this->valueHoldercc4aa->close();
    }

    public function persist($entity)
    {
        $this->initializerf03b9 && ($this->initializerf03b9->__invoke($valueHoldercc4aa, $this, 'persist', array('entity' => $entity), $this->initializerf03b9) || 1) && $this->valueHoldercc4aa = $valueHoldercc4aa;

        return $this->valueHoldercc4aa->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerf03b9 && ($this->initializerf03b9->__invoke($valueHoldercc4aa, $this, 'remove', array('entity' => $entity), $this->initializerf03b9) || 1) && $this->valueHoldercc4aa = $valueHoldercc4aa;

        return $this->valueHoldercc4aa->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerf03b9 && ($this->initializerf03b9->__invoke($valueHoldercc4aa, $this, 'refresh', array('entity' => $entity), $this->initializerf03b9) || 1) && $this->valueHoldercc4aa = $valueHoldercc4aa;

        return $this->valueHoldercc4aa->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerf03b9 && ($this->initializerf03b9->__invoke($valueHoldercc4aa, $this, 'detach', array('entity' => $entity), $this->initializerf03b9) || 1) && $this->valueHoldercc4aa = $valueHoldercc4aa;

        return $this->valueHoldercc4aa->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerf03b9 && ($this->initializerf03b9->__invoke($valueHoldercc4aa, $this, 'merge', array('entity' => $entity), $this->initializerf03b9) || 1) && $this->valueHoldercc4aa = $valueHoldercc4aa;

        return $this->valueHoldercc4aa->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerf03b9 && ($this->initializerf03b9->__invoke($valueHoldercc4aa, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerf03b9) || 1) && $this->valueHoldercc4aa = $valueHoldercc4aa;

        return $this->valueHoldercc4aa->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerf03b9 && ($this->initializerf03b9->__invoke($valueHoldercc4aa, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf03b9) || 1) && $this->valueHoldercc4aa = $valueHoldercc4aa;

        return $this->valueHoldercc4aa->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerf03b9 && ($this->initializerf03b9->__invoke($valueHoldercc4aa, $this, 'getRepository', array('entityName' => $entityName), $this->initializerf03b9) || 1) && $this->valueHoldercc4aa = $valueHoldercc4aa;

        return $this->valueHoldercc4aa->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerf03b9 && ($this->initializerf03b9->__invoke($valueHoldercc4aa, $this, 'contains', array('entity' => $entity), $this->initializerf03b9) || 1) && $this->valueHoldercc4aa = $valueHoldercc4aa;

        return $this->valueHoldercc4aa->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerf03b9 && ($this->initializerf03b9->__invoke($valueHoldercc4aa, $this, 'getEventManager', array(), $this->initializerf03b9) || 1) && $this->valueHoldercc4aa = $valueHoldercc4aa;

        return $this->valueHoldercc4aa->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerf03b9 && ($this->initializerf03b9->__invoke($valueHoldercc4aa, $this, 'getConfiguration', array(), $this->initializerf03b9) || 1) && $this->valueHoldercc4aa = $valueHoldercc4aa;

        return $this->valueHoldercc4aa->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerf03b9 && ($this->initializerf03b9->__invoke($valueHoldercc4aa, $this, 'isOpen', array(), $this->initializerf03b9) || 1) && $this->valueHoldercc4aa = $valueHoldercc4aa;

        return $this->valueHoldercc4aa->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerf03b9 && ($this->initializerf03b9->__invoke($valueHoldercc4aa, $this, 'getUnitOfWork', array(), $this->initializerf03b9) || 1) && $this->valueHoldercc4aa = $valueHoldercc4aa;

        return $this->valueHoldercc4aa->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerf03b9 && ($this->initializerf03b9->__invoke($valueHoldercc4aa, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf03b9) || 1) && $this->valueHoldercc4aa = $valueHoldercc4aa;

        return $this->valueHoldercc4aa->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerf03b9 && ($this->initializerf03b9->__invoke($valueHoldercc4aa, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf03b9) || 1) && $this->valueHoldercc4aa = $valueHoldercc4aa;

        return $this->valueHoldercc4aa->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerf03b9 && ($this->initializerf03b9->__invoke($valueHoldercc4aa, $this, 'getProxyFactory', array(), $this->initializerf03b9) || 1) && $this->valueHoldercc4aa = $valueHoldercc4aa;

        return $this->valueHoldercc4aa->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerf03b9 && ($this->initializerf03b9->__invoke($valueHoldercc4aa, $this, 'initializeObject', array('obj' => $obj), $this->initializerf03b9) || 1) && $this->valueHoldercc4aa = $valueHoldercc4aa;

        return $this->valueHoldercc4aa->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerf03b9 && ($this->initializerf03b9->__invoke($valueHoldercc4aa, $this, 'getFilters', array(), $this->initializerf03b9) || 1) && $this->valueHoldercc4aa = $valueHoldercc4aa;

        return $this->valueHoldercc4aa->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerf03b9 && ($this->initializerf03b9->__invoke($valueHoldercc4aa, $this, 'isFiltersStateClean', array(), $this->initializerf03b9) || 1) && $this->valueHoldercc4aa = $valueHoldercc4aa;

        return $this->valueHoldercc4aa->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerf03b9 && ($this->initializerf03b9->__invoke($valueHoldercc4aa, $this, 'hasFilters', array(), $this->initializerf03b9) || 1) && $this->valueHoldercc4aa = $valueHoldercc4aa;

        return $this->valueHoldercc4aa->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializerf03b9 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHoldercc4aa) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldercc4aa = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldercc4aa->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializerf03b9 && ($this->initializerf03b9->__invoke($valueHoldercc4aa, $this, '__get', ['name' => $name], $this->initializerf03b9) || 1) && $this->valueHoldercc4aa = $valueHoldercc4aa;

        if (isset(self::$publicProperties68da5[$name])) {
            return $this->valueHoldercc4aa->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercc4aa;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldercc4aa;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializerf03b9 && ($this->initializerf03b9->__invoke($valueHoldercc4aa, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerf03b9) || 1) && $this->valueHoldercc4aa = $valueHoldercc4aa;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercc4aa;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldercc4aa;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializerf03b9 && ($this->initializerf03b9->__invoke($valueHoldercc4aa, $this, '__isset', array('name' => $name), $this->initializerf03b9) || 1) && $this->valueHoldercc4aa = $valueHoldercc4aa;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercc4aa;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldercc4aa;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializerf03b9 && ($this->initializerf03b9->__invoke($valueHoldercc4aa, $this, '__unset', array('name' => $name), $this->initializerf03b9) || 1) && $this->valueHoldercc4aa = $valueHoldercc4aa;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercc4aa;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldercc4aa;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializerf03b9 && ($this->initializerf03b9->__invoke($valueHoldercc4aa, $this, '__clone', array(), $this->initializerf03b9) || 1) && $this->valueHoldercc4aa = $valueHoldercc4aa;

        $this->valueHoldercc4aa = clone $this->valueHoldercc4aa;
    }

    public function __sleep()
    {
        $this->initializerf03b9 && ($this->initializerf03b9->__invoke($valueHoldercc4aa, $this, '__sleep', array(), $this->initializerf03b9) || 1) && $this->valueHoldercc4aa = $valueHoldercc4aa;

        return array('valueHoldercc4aa');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerf03b9 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerf03b9;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerf03b9 && ($this->initializerf03b9->__invoke($valueHoldercc4aa, $this, 'initializeProxy', array(), $this->initializerf03b9) || 1) && $this->valueHoldercc4aa = $valueHoldercc4aa;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldercc4aa;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldercc4aa;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
