<?php

namespace Container8yLrVHy;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder7c0fd = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer56d64 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties9172c = [
        
    ];

    public function getConnection()
    {
        $this->initializer56d64 && ($this->initializer56d64->__invoke($valueHolder7c0fd, $this, 'getConnection', array(), $this->initializer56d64) || 1) && $this->valueHolder7c0fd = $valueHolder7c0fd;

        return $this->valueHolder7c0fd->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer56d64 && ($this->initializer56d64->__invoke($valueHolder7c0fd, $this, 'getMetadataFactory', array(), $this->initializer56d64) || 1) && $this->valueHolder7c0fd = $valueHolder7c0fd;

        return $this->valueHolder7c0fd->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer56d64 && ($this->initializer56d64->__invoke($valueHolder7c0fd, $this, 'getExpressionBuilder', array(), $this->initializer56d64) || 1) && $this->valueHolder7c0fd = $valueHolder7c0fd;

        return $this->valueHolder7c0fd->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer56d64 && ($this->initializer56d64->__invoke($valueHolder7c0fd, $this, 'beginTransaction', array(), $this->initializer56d64) || 1) && $this->valueHolder7c0fd = $valueHolder7c0fd;

        return $this->valueHolder7c0fd->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer56d64 && ($this->initializer56d64->__invoke($valueHolder7c0fd, $this, 'getCache', array(), $this->initializer56d64) || 1) && $this->valueHolder7c0fd = $valueHolder7c0fd;

        return $this->valueHolder7c0fd->getCache();
    }

    public function transactional($func)
    {
        $this->initializer56d64 && ($this->initializer56d64->__invoke($valueHolder7c0fd, $this, 'transactional', array('func' => $func), $this->initializer56d64) || 1) && $this->valueHolder7c0fd = $valueHolder7c0fd;

        return $this->valueHolder7c0fd->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer56d64 && ($this->initializer56d64->__invoke($valueHolder7c0fd, $this, 'wrapInTransaction', array('func' => $func), $this->initializer56d64) || 1) && $this->valueHolder7c0fd = $valueHolder7c0fd;

        return $this->valueHolder7c0fd->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer56d64 && ($this->initializer56d64->__invoke($valueHolder7c0fd, $this, 'commit', array(), $this->initializer56d64) || 1) && $this->valueHolder7c0fd = $valueHolder7c0fd;

        return $this->valueHolder7c0fd->commit();
    }

    public function rollback()
    {
        $this->initializer56d64 && ($this->initializer56d64->__invoke($valueHolder7c0fd, $this, 'rollback', array(), $this->initializer56d64) || 1) && $this->valueHolder7c0fd = $valueHolder7c0fd;

        return $this->valueHolder7c0fd->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer56d64 && ($this->initializer56d64->__invoke($valueHolder7c0fd, $this, 'getClassMetadata', array('className' => $className), $this->initializer56d64) || 1) && $this->valueHolder7c0fd = $valueHolder7c0fd;

        return $this->valueHolder7c0fd->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer56d64 && ($this->initializer56d64->__invoke($valueHolder7c0fd, $this, 'createQuery', array('dql' => $dql), $this->initializer56d64) || 1) && $this->valueHolder7c0fd = $valueHolder7c0fd;

        return $this->valueHolder7c0fd->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer56d64 && ($this->initializer56d64->__invoke($valueHolder7c0fd, $this, 'createNamedQuery', array('name' => $name), $this->initializer56d64) || 1) && $this->valueHolder7c0fd = $valueHolder7c0fd;

        return $this->valueHolder7c0fd->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer56d64 && ($this->initializer56d64->__invoke($valueHolder7c0fd, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer56d64) || 1) && $this->valueHolder7c0fd = $valueHolder7c0fd;

        return $this->valueHolder7c0fd->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer56d64 && ($this->initializer56d64->__invoke($valueHolder7c0fd, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer56d64) || 1) && $this->valueHolder7c0fd = $valueHolder7c0fd;

        return $this->valueHolder7c0fd->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer56d64 && ($this->initializer56d64->__invoke($valueHolder7c0fd, $this, 'createQueryBuilder', array(), $this->initializer56d64) || 1) && $this->valueHolder7c0fd = $valueHolder7c0fd;

        return $this->valueHolder7c0fd->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer56d64 && ($this->initializer56d64->__invoke($valueHolder7c0fd, $this, 'flush', array('entity' => $entity), $this->initializer56d64) || 1) && $this->valueHolder7c0fd = $valueHolder7c0fd;

        return $this->valueHolder7c0fd->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer56d64 && ($this->initializer56d64->__invoke($valueHolder7c0fd, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer56d64) || 1) && $this->valueHolder7c0fd = $valueHolder7c0fd;

        return $this->valueHolder7c0fd->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer56d64 && ($this->initializer56d64->__invoke($valueHolder7c0fd, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer56d64) || 1) && $this->valueHolder7c0fd = $valueHolder7c0fd;

        return $this->valueHolder7c0fd->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer56d64 && ($this->initializer56d64->__invoke($valueHolder7c0fd, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer56d64) || 1) && $this->valueHolder7c0fd = $valueHolder7c0fd;

        return $this->valueHolder7c0fd->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer56d64 && ($this->initializer56d64->__invoke($valueHolder7c0fd, $this, 'clear', array('entityName' => $entityName), $this->initializer56d64) || 1) && $this->valueHolder7c0fd = $valueHolder7c0fd;

        return $this->valueHolder7c0fd->clear($entityName);
    }

    public function close()
    {
        $this->initializer56d64 && ($this->initializer56d64->__invoke($valueHolder7c0fd, $this, 'close', array(), $this->initializer56d64) || 1) && $this->valueHolder7c0fd = $valueHolder7c0fd;

        return $this->valueHolder7c0fd->close();
    }

    public function persist($entity)
    {
        $this->initializer56d64 && ($this->initializer56d64->__invoke($valueHolder7c0fd, $this, 'persist', array('entity' => $entity), $this->initializer56d64) || 1) && $this->valueHolder7c0fd = $valueHolder7c0fd;

        return $this->valueHolder7c0fd->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer56d64 && ($this->initializer56d64->__invoke($valueHolder7c0fd, $this, 'remove', array('entity' => $entity), $this->initializer56d64) || 1) && $this->valueHolder7c0fd = $valueHolder7c0fd;

        return $this->valueHolder7c0fd->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer56d64 && ($this->initializer56d64->__invoke($valueHolder7c0fd, $this, 'refresh', array('entity' => $entity), $this->initializer56d64) || 1) && $this->valueHolder7c0fd = $valueHolder7c0fd;

        return $this->valueHolder7c0fd->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer56d64 && ($this->initializer56d64->__invoke($valueHolder7c0fd, $this, 'detach', array('entity' => $entity), $this->initializer56d64) || 1) && $this->valueHolder7c0fd = $valueHolder7c0fd;

        return $this->valueHolder7c0fd->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer56d64 && ($this->initializer56d64->__invoke($valueHolder7c0fd, $this, 'merge', array('entity' => $entity), $this->initializer56d64) || 1) && $this->valueHolder7c0fd = $valueHolder7c0fd;

        return $this->valueHolder7c0fd->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer56d64 && ($this->initializer56d64->__invoke($valueHolder7c0fd, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer56d64) || 1) && $this->valueHolder7c0fd = $valueHolder7c0fd;

        return $this->valueHolder7c0fd->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer56d64 && ($this->initializer56d64->__invoke($valueHolder7c0fd, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer56d64) || 1) && $this->valueHolder7c0fd = $valueHolder7c0fd;

        return $this->valueHolder7c0fd->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer56d64 && ($this->initializer56d64->__invoke($valueHolder7c0fd, $this, 'getRepository', array('entityName' => $entityName), $this->initializer56d64) || 1) && $this->valueHolder7c0fd = $valueHolder7c0fd;

        return $this->valueHolder7c0fd->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer56d64 && ($this->initializer56d64->__invoke($valueHolder7c0fd, $this, 'contains', array('entity' => $entity), $this->initializer56d64) || 1) && $this->valueHolder7c0fd = $valueHolder7c0fd;

        return $this->valueHolder7c0fd->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer56d64 && ($this->initializer56d64->__invoke($valueHolder7c0fd, $this, 'getEventManager', array(), $this->initializer56d64) || 1) && $this->valueHolder7c0fd = $valueHolder7c0fd;

        return $this->valueHolder7c0fd->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer56d64 && ($this->initializer56d64->__invoke($valueHolder7c0fd, $this, 'getConfiguration', array(), $this->initializer56d64) || 1) && $this->valueHolder7c0fd = $valueHolder7c0fd;

        return $this->valueHolder7c0fd->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer56d64 && ($this->initializer56d64->__invoke($valueHolder7c0fd, $this, 'isOpen', array(), $this->initializer56d64) || 1) && $this->valueHolder7c0fd = $valueHolder7c0fd;

        return $this->valueHolder7c0fd->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer56d64 && ($this->initializer56d64->__invoke($valueHolder7c0fd, $this, 'getUnitOfWork', array(), $this->initializer56d64) || 1) && $this->valueHolder7c0fd = $valueHolder7c0fd;

        return $this->valueHolder7c0fd->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer56d64 && ($this->initializer56d64->__invoke($valueHolder7c0fd, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer56d64) || 1) && $this->valueHolder7c0fd = $valueHolder7c0fd;

        return $this->valueHolder7c0fd->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer56d64 && ($this->initializer56d64->__invoke($valueHolder7c0fd, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer56d64) || 1) && $this->valueHolder7c0fd = $valueHolder7c0fd;

        return $this->valueHolder7c0fd->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer56d64 && ($this->initializer56d64->__invoke($valueHolder7c0fd, $this, 'getProxyFactory', array(), $this->initializer56d64) || 1) && $this->valueHolder7c0fd = $valueHolder7c0fd;

        return $this->valueHolder7c0fd->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer56d64 && ($this->initializer56d64->__invoke($valueHolder7c0fd, $this, 'initializeObject', array('obj' => $obj), $this->initializer56d64) || 1) && $this->valueHolder7c0fd = $valueHolder7c0fd;

        return $this->valueHolder7c0fd->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer56d64 && ($this->initializer56d64->__invoke($valueHolder7c0fd, $this, 'getFilters', array(), $this->initializer56d64) || 1) && $this->valueHolder7c0fd = $valueHolder7c0fd;

        return $this->valueHolder7c0fd->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer56d64 && ($this->initializer56d64->__invoke($valueHolder7c0fd, $this, 'isFiltersStateClean', array(), $this->initializer56d64) || 1) && $this->valueHolder7c0fd = $valueHolder7c0fd;

        return $this->valueHolder7c0fd->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer56d64 && ($this->initializer56d64->__invoke($valueHolder7c0fd, $this, 'hasFilters', array(), $this->initializer56d64) || 1) && $this->valueHolder7c0fd = $valueHolder7c0fd;

        return $this->valueHolder7c0fd->hasFilters();
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

        $instance->initializer56d64 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder7c0fd) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder7c0fd = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder7c0fd->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer56d64 && ($this->initializer56d64->__invoke($valueHolder7c0fd, $this, '__get', ['name' => $name], $this->initializer56d64) || 1) && $this->valueHolder7c0fd = $valueHolder7c0fd;

        if (isset(self::$publicProperties9172c[$name])) {
            return $this->valueHolder7c0fd->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7c0fd;

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

        $targetObject = $this->valueHolder7c0fd;
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
        $this->initializer56d64 && ($this->initializer56d64->__invoke($valueHolder7c0fd, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer56d64) || 1) && $this->valueHolder7c0fd = $valueHolder7c0fd;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7c0fd;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder7c0fd;
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
        $this->initializer56d64 && ($this->initializer56d64->__invoke($valueHolder7c0fd, $this, '__isset', array('name' => $name), $this->initializer56d64) || 1) && $this->valueHolder7c0fd = $valueHolder7c0fd;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7c0fd;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder7c0fd;
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
        $this->initializer56d64 && ($this->initializer56d64->__invoke($valueHolder7c0fd, $this, '__unset', array('name' => $name), $this->initializer56d64) || 1) && $this->valueHolder7c0fd = $valueHolder7c0fd;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7c0fd;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder7c0fd;
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
        $this->initializer56d64 && ($this->initializer56d64->__invoke($valueHolder7c0fd, $this, '__clone', array(), $this->initializer56d64) || 1) && $this->valueHolder7c0fd = $valueHolder7c0fd;

        $this->valueHolder7c0fd = clone $this->valueHolder7c0fd;
    }

    public function __sleep()
    {
        $this->initializer56d64 && ($this->initializer56d64->__invoke($valueHolder7c0fd, $this, '__sleep', array(), $this->initializer56d64) || 1) && $this->valueHolder7c0fd = $valueHolder7c0fd;

        return array('valueHolder7c0fd');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer56d64 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer56d64;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer56d64 && ($this->initializer56d64->__invoke($valueHolder7c0fd, $this, 'initializeProxy', array(), $this->initializer56d64) || 1) && $this->valueHolder7c0fd = $valueHolder7c0fd;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder7c0fd;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder7c0fd;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
