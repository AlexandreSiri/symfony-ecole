<?php

namespace ContainerEcqohCx;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder24ba8 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerb7521 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesb383a = [
        
    ];

    public function getConnection()
    {
        $this->initializerb7521 && ($this->initializerb7521->__invoke($valueHolder24ba8, $this, 'getConnection', array(), $this->initializerb7521) || 1) && $this->valueHolder24ba8 = $valueHolder24ba8;

        return $this->valueHolder24ba8->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerb7521 && ($this->initializerb7521->__invoke($valueHolder24ba8, $this, 'getMetadataFactory', array(), $this->initializerb7521) || 1) && $this->valueHolder24ba8 = $valueHolder24ba8;

        return $this->valueHolder24ba8->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerb7521 && ($this->initializerb7521->__invoke($valueHolder24ba8, $this, 'getExpressionBuilder', array(), $this->initializerb7521) || 1) && $this->valueHolder24ba8 = $valueHolder24ba8;

        return $this->valueHolder24ba8->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerb7521 && ($this->initializerb7521->__invoke($valueHolder24ba8, $this, 'beginTransaction', array(), $this->initializerb7521) || 1) && $this->valueHolder24ba8 = $valueHolder24ba8;

        return $this->valueHolder24ba8->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerb7521 && ($this->initializerb7521->__invoke($valueHolder24ba8, $this, 'getCache', array(), $this->initializerb7521) || 1) && $this->valueHolder24ba8 = $valueHolder24ba8;

        return $this->valueHolder24ba8->getCache();
    }

    public function transactional($func)
    {
        $this->initializerb7521 && ($this->initializerb7521->__invoke($valueHolder24ba8, $this, 'transactional', array('func' => $func), $this->initializerb7521) || 1) && $this->valueHolder24ba8 = $valueHolder24ba8;

        return $this->valueHolder24ba8->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerb7521 && ($this->initializerb7521->__invoke($valueHolder24ba8, $this, 'wrapInTransaction', array('func' => $func), $this->initializerb7521) || 1) && $this->valueHolder24ba8 = $valueHolder24ba8;

        return $this->valueHolder24ba8->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerb7521 && ($this->initializerb7521->__invoke($valueHolder24ba8, $this, 'commit', array(), $this->initializerb7521) || 1) && $this->valueHolder24ba8 = $valueHolder24ba8;

        return $this->valueHolder24ba8->commit();
    }

    public function rollback()
    {
        $this->initializerb7521 && ($this->initializerb7521->__invoke($valueHolder24ba8, $this, 'rollback', array(), $this->initializerb7521) || 1) && $this->valueHolder24ba8 = $valueHolder24ba8;

        return $this->valueHolder24ba8->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerb7521 && ($this->initializerb7521->__invoke($valueHolder24ba8, $this, 'getClassMetadata', array('className' => $className), $this->initializerb7521) || 1) && $this->valueHolder24ba8 = $valueHolder24ba8;

        return $this->valueHolder24ba8->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerb7521 && ($this->initializerb7521->__invoke($valueHolder24ba8, $this, 'createQuery', array('dql' => $dql), $this->initializerb7521) || 1) && $this->valueHolder24ba8 = $valueHolder24ba8;

        return $this->valueHolder24ba8->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerb7521 && ($this->initializerb7521->__invoke($valueHolder24ba8, $this, 'createNamedQuery', array('name' => $name), $this->initializerb7521) || 1) && $this->valueHolder24ba8 = $valueHolder24ba8;

        return $this->valueHolder24ba8->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerb7521 && ($this->initializerb7521->__invoke($valueHolder24ba8, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerb7521) || 1) && $this->valueHolder24ba8 = $valueHolder24ba8;

        return $this->valueHolder24ba8->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerb7521 && ($this->initializerb7521->__invoke($valueHolder24ba8, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerb7521) || 1) && $this->valueHolder24ba8 = $valueHolder24ba8;

        return $this->valueHolder24ba8->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerb7521 && ($this->initializerb7521->__invoke($valueHolder24ba8, $this, 'createQueryBuilder', array(), $this->initializerb7521) || 1) && $this->valueHolder24ba8 = $valueHolder24ba8;

        return $this->valueHolder24ba8->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerb7521 && ($this->initializerb7521->__invoke($valueHolder24ba8, $this, 'flush', array('entity' => $entity), $this->initializerb7521) || 1) && $this->valueHolder24ba8 = $valueHolder24ba8;

        return $this->valueHolder24ba8->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerb7521 && ($this->initializerb7521->__invoke($valueHolder24ba8, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb7521) || 1) && $this->valueHolder24ba8 = $valueHolder24ba8;

        return $this->valueHolder24ba8->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerb7521 && ($this->initializerb7521->__invoke($valueHolder24ba8, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerb7521) || 1) && $this->valueHolder24ba8 = $valueHolder24ba8;

        return $this->valueHolder24ba8->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerb7521 && ($this->initializerb7521->__invoke($valueHolder24ba8, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerb7521) || 1) && $this->valueHolder24ba8 = $valueHolder24ba8;

        return $this->valueHolder24ba8->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerb7521 && ($this->initializerb7521->__invoke($valueHolder24ba8, $this, 'clear', array('entityName' => $entityName), $this->initializerb7521) || 1) && $this->valueHolder24ba8 = $valueHolder24ba8;

        return $this->valueHolder24ba8->clear($entityName);
    }

    public function close()
    {
        $this->initializerb7521 && ($this->initializerb7521->__invoke($valueHolder24ba8, $this, 'close', array(), $this->initializerb7521) || 1) && $this->valueHolder24ba8 = $valueHolder24ba8;

        return $this->valueHolder24ba8->close();
    }

    public function persist($entity)
    {
        $this->initializerb7521 && ($this->initializerb7521->__invoke($valueHolder24ba8, $this, 'persist', array('entity' => $entity), $this->initializerb7521) || 1) && $this->valueHolder24ba8 = $valueHolder24ba8;

        return $this->valueHolder24ba8->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerb7521 && ($this->initializerb7521->__invoke($valueHolder24ba8, $this, 'remove', array('entity' => $entity), $this->initializerb7521) || 1) && $this->valueHolder24ba8 = $valueHolder24ba8;

        return $this->valueHolder24ba8->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerb7521 && ($this->initializerb7521->__invoke($valueHolder24ba8, $this, 'refresh', array('entity' => $entity), $this->initializerb7521) || 1) && $this->valueHolder24ba8 = $valueHolder24ba8;

        return $this->valueHolder24ba8->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerb7521 && ($this->initializerb7521->__invoke($valueHolder24ba8, $this, 'detach', array('entity' => $entity), $this->initializerb7521) || 1) && $this->valueHolder24ba8 = $valueHolder24ba8;

        return $this->valueHolder24ba8->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerb7521 && ($this->initializerb7521->__invoke($valueHolder24ba8, $this, 'merge', array('entity' => $entity), $this->initializerb7521) || 1) && $this->valueHolder24ba8 = $valueHolder24ba8;

        return $this->valueHolder24ba8->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerb7521 && ($this->initializerb7521->__invoke($valueHolder24ba8, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerb7521) || 1) && $this->valueHolder24ba8 = $valueHolder24ba8;

        return $this->valueHolder24ba8->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerb7521 && ($this->initializerb7521->__invoke($valueHolder24ba8, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb7521) || 1) && $this->valueHolder24ba8 = $valueHolder24ba8;

        return $this->valueHolder24ba8->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerb7521 && ($this->initializerb7521->__invoke($valueHolder24ba8, $this, 'getRepository', array('entityName' => $entityName), $this->initializerb7521) || 1) && $this->valueHolder24ba8 = $valueHolder24ba8;

        return $this->valueHolder24ba8->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerb7521 && ($this->initializerb7521->__invoke($valueHolder24ba8, $this, 'contains', array('entity' => $entity), $this->initializerb7521) || 1) && $this->valueHolder24ba8 = $valueHolder24ba8;

        return $this->valueHolder24ba8->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerb7521 && ($this->initializerb7521->__invoke($valueHolder24ba8, $this, 'getEventManager', array(), $this->initializerb7521) || 1) && $this->valueHolder24ba8 = $valueHolder24ba8;

        return $this->valueHolder24ba8->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerb7521 && ($this->initializerb7521->__invoke($valueHolder24ba8, $this, 'getConfiguration', array(), $this->initializerb7521) || 1) && $this->valueHolder24ba8 = $valueHolder24ba8;

        return $this->valueHolder24ba8->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerb7521 && ($this->initializerb7521->__invoke($valueHolder24ba8, $this, 'isOpen', array(), $this->initializerb7521) || 1) && $this->valueHolder24ba8 = $valueHolder24ba8;

        return $this->valueHolder24ba8->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerb7521 && ($this->initializerb7521->__invoke($valueHolder24ba8, $this, 'getUnitOfWork', array(), $this->initializerb7521) || 1) && $this->valueHolder24ba8 = $valueHolder24ba8;

        return $this->valueHolder24ba8->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerb7521 && ($this->initializerb7521->__invoke($valueHolder24ba8, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb7521) || 1) && $this->valueHolder24ba8 = $valueHolder24ba8;

        return $this->valueHolder24ba8->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerb7521 && ($this->initializerb7521->__invoke($valueHolder24ba8, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb7521) || 1) && $this->valueHolder24ba8 = $valueHolder24ba8;

        return $this->valueHolder24ba8->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerb7521 && ($this->initializerb7521->__invoke($valueHolder24ba8, $this, 'getProxyFactory', array(), $this->initializerb7521) || 1) && $this->valueHolder24ba8 = $valueHolder24ba8;

        return $this->valueHolder24ba8->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerb7521 && ($this->initializerb7521->__invoke($valueHolder24ba8, $this, 'initializeObject', array('obj' => $obj), $this->initializerb7521) || 1) && $this->valueHolder24ba8 = $valueHolder24ba8;

        return $this->valueHolder24ba8->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerb7521 && ($this->initializerb7521->__invoke($valueHolder24ba8, $this, 'getFilters', array(), $this->initializerb7521) || 1) && $this->valueHolder24ba8 = $valueHolder24ba8;

        return $this->valueHolder24ba8->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerb7521 && ($this->initializerb7521->__invoke($valueHolder24ba8, $this, 'isFiltersStateClean', array(), $this->initializerb7521) || 1) && $this->valueHolder24ba8 = $valueHolder24ba8;

        return $this->valueHolder24ba8->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerb7521 && ($this->initializerb7521->__invoke($valueHolder24ba8, $this, 'hasFilters', array(), $this->initializerb7521) || 1) && $this->valueHolder24ba8 = $valueHolder24ba8;

        return $this->valueHolder24ba8->hasFilters();
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

        $instance->initializerb7521 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder24ba8) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder24ba8 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder24ba8->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerb7521 && ($this->initializerb7521->__invoke($valueHolder24ba8, $this, '__get', ['name' => $name], $this->initializerb7521) || 1) && $this->valueHolder24ba8 = $valueHolder24ba8;

        if (isset(self::$publicPropertiesb383a[$name])) {
            return $this->valueHolder24ba8->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder24ba8;

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

        $targetObject = $this->valueHolder24ba8;
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
        $this->initializerb7521 && ($this->initializerb7521->__invoke($valueHolder24ba8, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerb7521) || 1) && $this->valueHolder24ba8 = $valueHolder24ba8;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder24ba8;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder24ba8;
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
        $this->initializerb7521 && ($this->initializerb7521->__invoke($valueHolder24ba8, $this, '__isset', array('name' => $name), $this->initializerb7521) || 1) && $this->valueHolder24ba8 = $valueHolder24ba8;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder24ba8;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder24ba8;
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
        $this->initializerb7521 && ($this->initializerb7521->__invoke($valueHolder24ba8, $this, '__unset', array('name' => $name), $this->initializerb7521) || 1) && $this->valueHolder24ba8 = $valueHolder24ba8;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder24ba8;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder24ba8;
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
        $this->initializerb7521 && ($this->initializerb7521->__invoke($valueHolder24ba8, $this, '__clone', array(), $this->initializerb7521) || 1) && $this->valueHolder24ba8 = $valueHolder24ba8;

        $this->valueHolder24ba8 = clone $this->valueHolder24ba8;
    }

    public function __sleep()
    {
        $this->initializerb7521 && ($this->initializerb7521->__invoke($valueHolder24ba8, $this, '__sleep', array(), $this->initializerb7521) || 1) && $this->valueHolder24ba8 = $valueHolder24ba8;

        return array('valueHolder24ba8');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerb7521 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerb7521;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerb7521 && ($this->initializerb7521->__invoke($valueHolder24ba8, $this, 'initializeProxy', array(), $this->initializerb7521) || 1) && $this->valueHolder24ba8 = $valueHolder24ba8;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder24ba8;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder24ba8;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
