<?php

class SqlBuilder
{
    private $sql = ''; // string

    public function select($fields)
    {
        $this->sql .= 'SELECT ' . $fields;
    }

    public function from($table)
    {
        $this->sql .= ' FROM ' . $table;
    }

    public function where($field, $value)
    {
        $this->sql .= ' WHERE ' . $field . '=' . $value;
    }

    public function delete()
    {
        $this->sql .= 'DELETE ';
    }

    public function insert($table, $data)
    {
        $this->sql .= 'INSERT INTO '.$table;
        $columns = [];
        $values = [];
        foreach ($data as $key => $element){
            $columns[] = $key;
            $values[] = $element;
        }

        $this->sql .= ' ('.implode(',', $columns) .') VALUES ("'.implode('","', $values).'")';
    }

    public function orderBy($field)
    {
        $this->sql .= ' ORDER BY '.$field;
    }

    public function update()
    {

    }

    public function limit()
    {

    }
    // SELECT * FROM news WHERE id = 3;
    // SELECT id, name FROM news WHERE id = 3;
    // DELETE FROM news WHERE id = 2
    // UPDATE news SET title = 'naujas title', active = 1 WHERE id = 2
    // INSERT INTO news (title, content, active) VALUES ("naujas title", "bla bla bla", 1);
    public function getSql()
    {
        return $this->sql;
    }


}