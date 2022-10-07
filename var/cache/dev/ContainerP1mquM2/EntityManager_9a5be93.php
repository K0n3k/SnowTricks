<?php

namespace ContainerP1mquM2;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldere7988 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerfc81e = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties297b4 = [
        
    ];

    public function getConnection()
    {
        $this->initializerfc81e && ($this->initializerfc81e->__invoke($valueHoldere7988, $this, 'getConnection', array(), $this->initializerfc81e) || 1) && $this->valueHoldere7988 = $valueHoldere7988;

        return $this->valueHoldere7988->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerfc81e && ($this->initializerfc81e->__invoke($valueHoldere7988, $this, 'getMetadataFactory', array(), $this->initializerfc81e) || 1) && $this->valueHoldere7988 = $valueHoldere7988;

        return $this->valueHoldere7988->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerfc81e && ($this->initializerfc81e->__invoke($valueHoldere7988, $this, 'getExpressionBuilder', array(), $this->initializerfc81e) || 1) && $this->valueHoldere7988 = $valueHoldere7988;

        return $this->valueHoldere7988->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerfc81e && ($this->initializerfc81e->__invoke($valueHoldere7988, $this, 'beginTransaction', array(), $this->initializerfc81e) || 1) && $this->valueHoldere7988 = $valueHoldere7988;

        return $this->valueHoldere7988->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerfc81e && ($this->initializerfc81e->__invoke($valueHoldere7988, $this, 'getCache', array(), $this->initializerfc81e) || 1) && $this->valueHoldere7988 = $valueHoldere7988;

        return $this->valueHoldere7988->getCache();
    }

    public function transactional($func)
    {
        $this->initializerfc81e && ($this->initializerfc81e->__invoke($valueHoldere7988, $this, 'transactional', array('func' => $func), $this->initializerfc81e) || 1) && $this->valueHoldere7988 = $valueHoldere7988;

        return $this->valueHoldere7988->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerfc81e && ($this->initializerfc81e->__invoke($valueHoldere7988, $this, 'wrapInTransaction', array('func' => $func), $this->initializerfc81e) || 1) && $this->valueHoldere7988 = $valueHoldere7988;

        return $this->valueHoldere7988->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerfc81e && ($this->initializerfc81e->__invoke($valueHoldere7988, $this, 'commit', array(), $this->initializerfc81e) || 1) && $this->valueHoldere7988 = $valueHoldere7988;

        return $this->valueHoldere7988->commit();
    }

    public function rollback()
    {
        $this->initializerfc81e && ($this->initializerfc81e->__invoke($valueHoldere7988, $this, 'rollback', array(), $this->initializerfc81e) || 1) && $this->valueHoldere7988 = $valueHoldere7988;

        return $this->valueHoldere7988->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerfc81e && ($this->initializerfc81e->__invoke($valueHoldere7988, $this, 'getClassMetadata', array('className' => $className), $this->initializerfc81e) || 1) && $this->valueHoldere7988 = $valueHoldere7988;

        return $this->valueHoldere7988->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerfc81e && ($this->initializerfc81e->__invoke($valueHoldere7988, $this, 'createQuery', array('dql' => $dql), $this->initializerfc81e) || 1) && $this->valueHoldere7988 = $valueHoldere7988;

        return $this->valueHoldere7988->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerfc81e && ($this->initializerfc81e->__invoke($valueHoldere7988, $this, 'createNamedQuery', array('name' => $name), $this->initializerfc81e) || 1) && $this->valueHoldere7988 = $valueHoldere7988;

        return $this->valueHoldere7988->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerfc81e && ($this->initializerfc81e->__invoke($valueHoldere7988, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerfc81e) || 1) && $this->valueHoldere7988 = $valueHoldere7988;

        return $this->valueHoldere7988->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerfc81e && ($this->initializerfc81e->__invoke($valueHoldere7988, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerfc81e) || 1) && $this->valueHoldere7988 = $valueHoldere7988;

        return $this->valueHoldere7988->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerfc81e && ($this->initializerfc81e->__invoke($valueHoldere7988, $this, 'createQueryBuilder', array(), $this->initializerfc81e) || 1) && $this->valueHoldere7988 = $valueHoldere7988;

        return $this->valueHoldere7988->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerfc81e && ($this->initializerfc81e->__invoke($valueHoldere7988, $this, 'flush', array('entity' => $entity), $this->initializerfc81e) || 1) && $this->valueHoldere7988 = $valueHoldere7988;

        return $this->valueHoldere7988->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerfc81e && ($this->initializerfc81e->__invoke($valueHoldere7988, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerfc81e) || 1) && $this->valueHoldere7988 = $valueHoldere7988;

        return $this->valueHoldere7988->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerfc81e && ($this->initializerfc81e->__invoke($valueHoldere7988, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerfc81e) || 1) && $this->valueHoldere7988 = $valueHoldere7988;

        return $this->valueHoldere7988->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerfc81e && ($this->initializerfc81e->__invoke($valueHoldere7988, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerfc81e) || 1) && $this->valueHoldere7988 = $valueHoldere7988;

        return $this->valueHoldere7988->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerfc81e && ($this->initializerfc81e->__invoke($valueHoldere7988, $this, 'clear', array('entityName' => $entityName), $this->initializerfc81e) || 1) && $this->valueHoldere7988 = $valueHoldere7988;

        return $this->valueHoldere7988->clear($entityName);
    }

    public function close()
    {
        $this->initializerfc81e && ($this->initializerfc81e->__invoke($valueHoldere7988, $this, 'close', array(), $this->initializerfc81e) || 1) && $this->valueHoldere7988 = $valueHoldere7988;

        return $this->valueHoldere7988->close();
    }

    public function persist($entity)
    {
        $this->initializerfc81e && ($this->initializerfc81e->__invoke($valueHoldere7988, $this, 'persist', array('entity' => $entity), $this->initializerfc81e) || 1) && $this->valueHoldere7988 = $valueHoldere7988;

        return $this->valueHoldere7988->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerfc81e && ($this->initializerfc81e->__invoke($valueHoldere7988, $this, 'remove', array('entity' => $entity), $this->initializerfc81e) || 1) && $this->valueHoldere7988 = $valueHoldere7988;

        return $this->valueHoldere7988->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerfc81e && ($this->initializerfc81e->__invoke($valueHoldere7988, $this, 'refresh', array('entity' => $entity), $this->initializerfc81e) || 1) && $this->valueHoldere7988 = $valueHoldere7988;

        return $this->valueHoldere7988->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerfc81e && ($this->initializerfc81e->__invoke($valueHoldere7988, $this, 'detach', array('entity' => $entity), $this->initializerfc81e) || 1) && $this->valueHoldere7988 = $valueHoldere7988;

        return $this->valueHoldere7988->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerfc81e && ($this->initializerfc81e->__invoke($valueHoldere7988, $this, 'merge', array('entity' => $entity), $this->initializerfc81e) || 1) && $this->valueHoldere7988 = $valueHoldere7988;

        return $this->valueHoldere7988->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerfc81e && ($this->initializerfc81e->__invoke($valueHoldere7988, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerfc81e) || 1) && $this->valueHoldere7988 = $valueHoldere7988;

        return $this->valueHoldere7988->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerfc81e && ($this->initializerfc81e->__invoke($valueHoldere7988, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerfc81e) || 1) && $this->valueHoldere7988 = $valueHoldere7988;

        return $this->valueHoldere7988->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerfc81e && ($this->initializerfc81e->__invoke($valueHoldere7988, $this, 'getRepository', array('entityName' => $entityName), $this->initializerfc81e) || 1) && $this->valueHoldere7988 = $valueHoldere7988;

        return $this->valueHoldere7988->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerfc81e && ($this->initializerfc81e->__invoke($valueHoldere7988, $this, 'contains', array('entity' => $entity), $this->initializerfc81e) || 1) && $this->valueHoldere7988 = $valueHoldere7988;

        return $this->valueHoldere7988->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerfc81e && ($this->initializerfc81e->__invoke($valueHoldere7988, $this, 'getEventManager', array(), $this->initializerfc81e) || 1) && $this->valueHoldere7988 = $valueHoldere7988;

        return $this->valueHoldere7988->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerfc81e && ($this->initializerfc81e->__invoke($valueHoldere7988, $this, 'getConfiguration', array(), $this->initializerfc81e) || 1) && $this->valueHoldere7988 = $valueHoldere7988;

        return $this->valueHoldere7988->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerfc81e && ($this->initializerfc81e->__invoke($valueHoldere7988, $this, 'isOpen', array(), $this->initializerfc81e) || 1) && $this->valueHoldere7988 = $valueHoldere7988;

        return $this->valueHoldere7988->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerfc81e && ($this->initializerfc81e->__invoke($valueHoldere7988, $this, 'getUnitOfWork', array(), $this->initializerfc81e) || 1) && $this->valueHoldere7988 = $valueHoldere7988;

        return $this->valueHoldere7988->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerfc81e && ($this->initializerfc81e->__invoke($valueHoldere7988, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerfc81e) || 1) && $this->valueHoldere7988 = $valueHoldere7988;

        return $this->valueHoldere7988->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerfc81e && ($this->initializerfc81e->__invoke($valueHoldere7988, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerfc81e) || 1) && $this->valueHoldere7988 = $valueHoldere7988;

        return $this->valueHoldere7988->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerfc81e && ($this->initializerfc81e->__invoke($valueHoldere7988, $this, 'getProxyFactory', array(), $this->initializerfc81e) || 1) && $this->valueHoldere7988 = $valueHoldere7988;

        return $this->valueHoldere7988->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerfc81e && ($this->initializerfc81e->__invoke($valueHoldere7988, $this, 'initializeObject', array('obj' => $obj), $this->initializerfc81e) || 1) && $this->valueHoldere7988 = $valueHoldere7988;

        return $this->valueHoldere7988->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerfc81e && ($this->initializerfc81e->__invoke($valueHoldere7988, $this, 'getFilters', array(), $this->initializerfc81e) || 1) && $this->valueHoldere7988 = $valueHoldere7988;

        return $this->valueHoldere7988->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerfc81e && ($this->initializerfc81e->__invoke($valueHoldere7988, $this, 'isFiltersStateClean', array(), $this->initializerfc81e) || 1) && $this->valueHoldere7988 = $valueHoldere7988;

        return $this->valueHoldere7988->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerfc81e && ($this->initializerfc81e->__invoke($valueHoldere7988, $this, 'hasFilters', array(), $this->initializerfc81e) || 1) && $this->valueHoldere7988 = $valueHoldere7988;

        return $this->valueHoldere7988->hasFilters();
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

        $instance->initializerfc81e = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHoldere7988) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldere7988 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldere7988->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializerfc81e && ($this->initializerfc81e->__invoke($valueHoldere7988, $this, '__get', ['name' => $name], $this->initializerfc81e) || 1) && $this->valueHoldere7988 = $valueHoldere7988;

        if (isset(self::$publicProperties297b4[$name])) {
            return $this->valueHoldere7988->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere7988;

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

        $targetObject = $this->valueHoldere7988;
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
        $this->initializerfc81e && ($this->initializerfc81e->__invoke($valueHoldere7988, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerfc81e) || 1) && $this->valueHoldere7988 = $valueHoldere7988;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere7988;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldere7988;
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
        $this->initializerfc81e && ($this->initializerfc81e->__invoke($valueHoldere7988, $this, '__isset', array('name' => $name), $this->initializerfc81e) || 1) && $this->valueHoldere7988 = $valueHoldere7988;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere7988;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldere7988;
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
        $this->initializerfc81e && ($this->initializerfc81e->__invoke($valueHoldere7988, $this, '__unset', array('name' => $name), $this->initializerfc81e) || 1) && $this->valueHoldere7988 = $valueHoldere7988;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere7988;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldere7988;
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
        $this->initializerfc81e && ($this->initializerfc81e->__invoke($valueHoldere7988, $this, '__clone', array(), $this->initializerfc81e) || 1) && $this->valueHoldere7988 = $valueHoldere7988;

        $this->valueHoldere7988 = clone $this->valueHoldere7988;
    }

    public function __sleep()
    {
        $this->initializerfc81e && ($this->initializerfc81e->__invoke($valueHoldere7988, $this, '__sleep', array(), $this->initializerfc81e) || 1) && $this->valueHoldere7988 = $valueHoldere7988;

        return array('valueHoldere7988');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerfc81e = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerfc81e;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerfc81e && ($this->initializerfc81e->__invoke($valueHoldere7988, $this, 'initializeProxy', array(), $this->initializerfc81e) || 1) && $this->valueHoldere7988 = $valueHoldere7988;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldere7988;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldere7988;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
