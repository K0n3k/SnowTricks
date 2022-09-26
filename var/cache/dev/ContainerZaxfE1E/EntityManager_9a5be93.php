<?php

namespace ContainerZaxfE1E;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldera0709 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializeref1b8 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesad084 = [
        
    ];

    public function getConnection()
    {
        $this->initializeref1b8 && ($this->initializeref1b8->__invoke($valueHoldera0709, $this, 'getConnection', array(), $this->initializeref1b8) || 1) && $this->valueHoldera0709 = $valueHoldera0709;

        return $this->valueHoldera0709->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializeref1b8 && ($this->initializeref1b8->__invoke($valueHoldera0709, $this, 'getMetadataFactory', array(), $this->initializeref1b8) || 1) && $this->valueHoldera0709 = $valueHoldera0709;

        return $this->valueHoldera0709->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializeref1b8 && ($this->initializeref1b8->__invoke($valueHoldera0709, $this, 'getExpressionBuilder', array(), $this->initializeref1b8) || 1) && $this->valueHoldera0709 = $valueHoldera0709;

        return $this->valueHoldera0709->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializeref1b8 && ($this->initializeref1b8->__invoke($valueHoldera0709, $this, 'beginTransaction', array(), $this->initializeref1b8) || 1) && $this->valueHoldera0709 = $valueHoldera0709;

        return $this->valueHoldera0709->beginTransaction();
    }

    public function getCache()
    {
        $this->initializeref1b8 && ($this->initializeref1b8->__invoke($valueHoldera0709, $this, 'getCache', array(), $this->initializeref1b8) || 1) && $this->valueHoldera0709 = $valueHoldera0709;

        return $this->valueHoldera0709->getCache();
    }

    public function transactional($func)
    {
        $this->initializeref1b8 && ($this->initializeref1b8->__invoke($valueHoldera0709, $this, 'transactional', array('func' => $func), $this->initializeref1b8) || 1) && $this->valueHoldera0709 = $valueHoldera0709;

        return $this->valueHoldera0709->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializeref1b8 && ($this->initializeref1b8->__invoke($valueHoldera0709, $this, 'wrapInTransaction', array('func' => $func), $this->initializeref1b8) || 1) && $this->valueHoldera0709 = $valueHoldera0709;

        return $this->valueHoldera0709->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializeref1b8 && ($this->initializeref1b8->__invoke($valueHoldera0709, $this, 'commit', array(), $this->initializeref1b8) || 1) && $this->valueHoldera0709 = $valueHoldera0709;

        return $this->valueHoldera0709->commit();
    }

    public function rollback()
    {
        $this->initializeref1b8 && ($this->initializeref1b8->__invoke($valueHoldera0709, $this, 'rollback', array(), $this->initializeref1b8) || 1) && $this->valueHoldera0709 = $valueHoldera0709;

        return $this->valueHoldera0709->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializeref1b8 && ($this->initializeref1b8->__invoke($valueHoldera0709, $this, 'getClassMetadata', array('className' => $className), $this->initializeref1b8) || 1) && $this->valueHoldera0709 = $valueHoldera0709;

        return $this->valueHoldera0709->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializeref1b8 && ($this->initializeref1b8->__invoke($valueHoldera0709, $this, 'createQuery', array('dql' => $dql), $this->initializeref1b8) || 1) && $this->valueHoldera0709 = $valueHoldera0709;

        return $this->valueHoldera0709->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializeref1b8 && ($this->initializeref1b8->__invoke($valueHoldera0709, $this, 'createNamedQuery', array('name' => $name), $this->initializeref1b8) || 1) && $this->valueHoldera0709 = $valueHoldera0709;

        return $this->valueHoldera0709->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializeref1b8 && ($this->initializeref1b8->__invoke($valueHoldera0709, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializeref1b8) || 1) && $this->valueHoldera0709 = $valueHoldera0709;

        return $this->valueHoldera0709->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializeref1b8 && ($this->initializeref1b8->__invoke($valueHoldera0709, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializeref1b8) || 1) && $this->valueHoldera0709 = $valueHoldera0709;

        return $this->valueHoldera0709->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializeref1b8 && ($this->initializeref1b8->__invoke($valueHoldera0709, $this, 'createQueryBuilder', array(), $this->initializeref1b8) || 1) && $this->valueHoldera0709 = $valueHoldera0709;

        return $this->valueHoldera0709->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializeref1b8 && ($this->initializeref1b8->__invoke($valueHoldera0709, $this, 'flush', array('entity' => $entity), $this->initializeref1b8) || 1) && $this->valueHoldera0709 = $valueHoldera0709;

        return $this->valueHoldera0709->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializeref1b8 && ($this->initializeref1b8->__invoke($valueHoldera0709, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializeref1b8) || 1) && $this->valueHoldera0709 = $valueHoldera0709;

        return $this->valueHoldera0709->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializeref1b8 && ($this->initializeref1b8->__invoke($valueHoldera0709, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializeref1b8) || 1) && $this->valueHoldera0709 = $valueHoldera0709;

        return $this->valueHoldera0709->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializeref1b8 && ($this->initializeref1b8->__invoke($valueHoldera0709, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializeref1b8) || 1) && $this->valueHoldera0709 = $valueHoldera0709;

        return $this->valueHoldera0709->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializeref1b8 && ($this->initializeref1b8->__invoke($valueHoldera0709, $this, 'clear', array('entityName' => $entityName), $this->initializeref1b8) || 1) && $this->valueHoldera0709 = $valueHoldera0709;

        return $this->valueHoldera0709->clear($entityName);
    }

    public function close()
    {
        $this->initializeref1b8 && ($this->initializeref1b8->__invoke($valueHoldera0709, $this, 'close', array(), $this->initializeref1b8) || 1) && $this->valueHoldera0709 = $valueHoldera0709;

        return $this->valueHoldera0709->close();
    }

    public function persist($entity)
    {
        $this->initializeref1b8 && ($this->initializeref1b8->__invoke($valueHoldera0709, $this, 'persist', array('entity' => $entity), $this->initializeref1b8) || 1) && $this->valueHoldera0709 = $valueHoldera0709;

        return $this->valueHoldera0709->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializeref1b8 && ($this->initializeref1b8->__invoke($valueHoldera0709, $this, 'remove', array('entity' => $entity), $this->initializeref1b8) || 1) && $this->valueHoldera0709 = $valueHoldera0709;

        return $this->valueHoldera0709->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializeref1b8 && ($this->initializeref1b8->__invoke($valueHoldera0709, $this, 'refresh', array('entity' => $entity), $this->initializeref1b8) || 1) && $this->valueHoldera0709 = $valueHoldera0709;

        return $this->valueHoldera0709->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializeref1b8 && ($this->initializeref1b8->__invoke($valueHoldera0709, $this, 'detach', array('entity' => $entity), $this->initializeref1b8) || 1) && $this->valueHoldera0709 = $valueHoldera0709;

        return $this->valueHoldera0709->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializeref1b8 && ($this->initializeref1b8->__invoke($valueHoldera0709, $this, 'merge', array('entity' => $entity), $this->initializeref1b8) || 1) && $this->valueHoldera0709 = $valueHoldera0709;

        return $this->valueHoldera0709->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializeref1b8 && ($this->initializeref1b8->__invoke($valueHoldera0709, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializeref1b8) || 1) && $this->valueHoldera0709 = $valueHoldera0709;

        return $this->valueHoldera0709->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializeref1b8 && ($this->initializeref1b8->__invoke($valueHoldera0709, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializeref1b8) || 1) && $this->valueHoldera0709 = $valueHoldera0709;

        return $this->valueHoldera0709->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializeref1b8 && ($this->initializeref1b8->__invoke($valueHoldera0709, $this, 'getRepository', array('entityName' => $entityName), $this->initializeref1b8) || 1) && $this->valueHoldera0709 = $valueHoldera0709;

        return $this->valueHoldera0709->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializeref1b8 && ($this->initializeref1b8->__invoke($valueHoldera0709, $this, 'contains', array('entity' => $entity), $this->initializeref1b8) || 1) && $this->valueHoldera0709 = $valueHoldera0709;

        return $this->valueHoldera0709->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializeref1b8 && ($this->initializeref1b8->__invoke($valueHoldera0709, $this, 'getEventManager', array(), $this->initializeref1b8) || 1) && $this->valueHoldera0709 = $valueHoldera0709;

        return $this->valueHoldera0709->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializeref1b8 && ($this->initializeref1b8->__invoke($valueHoldera0709, $this, 'getConfiguration', array(), $this->initializeref1b8) || 1) && $this->valueHoldera0709 = $valueHoldera0709;

        return $this->valueHoldera0709->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializeref1b8 && ($this->initializeref1b8->__invoke($valueHoldera0709, $this, 'isOpen', array(), $this->initializeref1b8) || 1) && $this->valueHoldera0709 = $valueHoldera0709;

        return $this->valueHoldera0709->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializeref1b8 && ($this->initializeref1b8->__invoke($valueHoldera0709, $this, 'getUnitOfWork', array(), $this->initializeref1b8) || 1) && $this->valueHoldera0709 = $valueHoldera0709;

        return $this->valueHoldera0709->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializeref1b8 && ($this->initializeref1b8->__invoke($valueHoldera0709, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializeref1b8) || 1) && $this->valueHoldera0709 = $valueHoldera0709;

        return $this->valueHoldera0709->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializeref1b8 && ($this->initializeref1b8->__invoke($valueHoldera0709, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializeref1b8) || 1) && $this->valueHoldera0709 = $valueHoldera0709;

        return $this->valueHoldera0709->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializeref1b8 && ($this->initializeref1b8->__invoke($valueHoldera0709, $this, 'getProxyFactory', array(), $this->initializeref1b8) || 1) && $this->valueHoldera0709 = $valueHoldera0709;

        return $this->valueHoldera0709->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializeref1b8 && ($this->initializeref1b8->__invoke($valueHoldera0709, $this, 'initializeObject', array('obj' => $obj), $this->initializeref1b8) || 1) && $this->valueHoldera0709 = $valueHoldera0709;

        return $this->valueHoldera0709->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializeref1b8 && ($this->initializeref1b8->__invoke($valueHoldera0709, $this, 'getFilters', array(), $this->initializeref1b8) || 1) && $this->valueHoldera0709 = $valueHoldera0709;

        return $this->valueHoldera0709->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializeref1b8 && ($this->initializeref1b8->__invoke($valueHoldera0709, $this, 'isFiltersStateClean', array(), $this->initializeref1b8) || 1) && $this->valueHoldera0709 = $valueHoldera0709;

        return $this->valueHoldera0709->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializeref1b8 && ($this->initializeref1b8->__invoke($valueHoldera0709, $this, 'hasFilters', array(), $this->initializeref1b8) || 1) && $this->valueHoldera0709 = $valueHoldera0709;

        return $this->valueHoldera0709->hasFilters();
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

        $instance->initializeref1b8 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHoldera0709) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldera0709 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldera0709->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializeref1b8 && ($this->initializeref1b8->__invoke($valueHoldera0709, $this, '__get', ['name' => $name], $this->initializeref1b8) || 1) && $this->valueHoldera0709 = $valueHoldera0709;

        if (isset(self::$publicPropertiesad084[$name])) {
            return $this->valueHoldera0709->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera0709;

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

        $targetObject = $this->valueHoldera0709;
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
        $this->initializeref1b8 && ($this->initializeref1b8->__invoke($valueHoldera0709, $this, '__set', array('name' => $name, 'value' => $value), $this->initializeref1b8) || 1) && $this->valueHoldera0709 = $valueHoldera0709;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera0709;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldera0709;
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
        $this->initializeref1b8 && ($this->initializeref1b8->__invoke($valueHoldera0709, $this, '__isset', array('name' => $name), $this->initializeref1b8) || 1) && $this->valueHoldera0709 = $valueHoldera0709;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera0709;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldera0709;
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
        $this->initializeref1b8 && ($this->initializeref1b8->__invoke($valueHoldera0709, $this, '__unset', array('name' => $name), $this->initializeref1b8) || 1) && $this->valueHoldera0709 = $valueHoldera0709;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera0709;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldera0709;
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
        $this->initializeref1b8 && ($this->initializeref1b8->__invoke($valueHoldera0709, $this, '__clone', array(), $this->initializeref1b8) || 1) && $this->valueHoldera0709 = $valueHoldera0709;

        $this->valueHoldera0709 = clone $this->valueHoldera0709;
    }

    public function __sleep()
    {
        $this->initializeref1b8 && ($this->initializeref1b8->__invoke($valueHoldera0709, $this, '__sleep', array(), $this->initializeref1b8) || 1) && $this->valueHoldera0709 = $valueHoldera0709;

        return array('valueHoldera0709');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializeref1b8 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializeref1b8;
    }

    public function initializeProxy() : bool
    {
        return $this->initializeref1b8 && ($this->initializeref1b8->__invoke($valueHoldera0709, $this, 'initializeProxy', array(), $this->initializeref1b8) || 1) && $this->valueHoldera0709 = $valueHoldera0709;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldera0709;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldera0709;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
