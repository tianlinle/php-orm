<?php
namespace Tian\Orm;

/**
* @author wangtianlin
*/
class Connection
{
    protected static $defaultConnection;

    protected $pdo;
    protected $config;

    public function __construct($pdo, $config = [])
    {
        $this->pdo = $pdo;
        $this->config = $config;
        if (!self::$defaultConnection) {
            $this->asDefault();
        }
    }

    public static function getDefault()
    {
        return self::$defaultConnection;
    }

    public function asDefault()
    {
        self::$defaultConnection = $this;
    }

    public function query($query, $params = [])
    {
        if (isset($this->config['beforeExecute'])) {
            call_user_func_array($this->config['beforeExecute'], [$query, $params]);
        }
        $statement = $this->pdo->prepare($query);
        $statement->execute($params);
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function exec($query, $params = [])
    {
        
    }
}