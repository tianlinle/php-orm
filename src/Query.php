<?php
namespace Tian\Orm;

/**
* @author wangtianlin
*/
class Query
{
    protected static $pdo;

    const CONNECT_AND = 'AND';
    const CONNECT_OR = 'OR';

    protected $table;
    protected $condiction = '';

    public function query()
    {
        
    }

    public function eq($field, $value, $connect = self::CONNECT_AND)
    {
        if ($this->condiction != '') {
            $this->condiction .= ' ' . $connect . ' ';
        }
        $this->condiction .= $field . '=' . $value;
    }

    public function neq($field, $value, $connect = self::CONNECT_AND)
    {
        return $this->and($field, '<>', $value);
    }

    public function gt($field, $value, $connect = self::CONNECT_AND)
    {
        $op = $canEqual ? '>=' : '>';
        return $this->and($field, $op, $value);
    }

    public function gte($field, $value, $connect = self::CONNECT_AND)
    {

    }

    public function lt($field, $value, $connect = self::CONNECT_AND)
    {

    }

    public function lte($field, $value, $connect = self::CONNECT_AND)
    {

    }

    public function in($field, $values, $connect = self::CONNECT_AND)
    {

    }

    public function like($field, $value, $connect = self::CONNECT_AND)
    {

    }

    public function likeRaw($field, $value, $connect = self::CONNECT_AND)
    {

    }

    public function order($field, $type)
    {

    }

    public function limit($count, $from)
    {

    }

    public function count()
    {

    }
}