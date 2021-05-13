<?php


namespace App\Services;


use PDO;

class DBConnector
{

    private $connection;
    private $request = [];

    /**
     * DBConnector constructor.
     * @param $servername
     * @param $username
     * @param $password
     */
    public function __construct($servername, $username, $password)
    {
        $this->connection = new PDO('mysql:host=localhost;dbname=' . $servername, $username, $password);
        if (!$this->connection) {
            die("Connection failed: ");
        }

    }

    /**
     * @param string $tableProperty
     * @return DBConnector
     */
    public function select($tableProperty = '*'): self
    {
        $this->request['select'] = 'SELECT ' . $tableProperty . ' ';

        return $this;

    }

    /**
     * @param $fromProperty
     * @return DBConnector
     */
    public function from($fromProperty): self
    {
        $this->request['from'] = 'FROM ' . '`' . $fromProperty . '`' . ' ';

        return $this;
    }

    /**
     * @param $condition
     * @param $params
     * @return DBConnector
     */
    public function where($condition, array $params): self
    {
        $this->request['where']['condition'][] = $condition;
        $this->request['where']['params'] = $params;

        return $this;
    }

    //TODO: andWhere


    /**
     * @param $amount
     * @return DBConnector
     */
    public function limit(int $amount): self
    {
        $this->request['limit'] .= 'LIMIT ' . $amount;

        return $this;
    }

    /**
     * @return array
     */
    public function all(): array
    {
        $request = '';
        if (!array_key_exists('select', $this->request)) {
            return [];
        }
        $request .= $this->request['select'];

        if (!array_key_exists('from', $this->request)) {
            return [];
        }
        $request .= $this->request['from'];

        if (array_key_exists('where', $this->request)) {
            $request .= $this->conditionWhere();
        }

        if (array_key_exists('limit', $this->request)) {
            $request .= $this->request['limit'];
        }


        return $this->makeRequest($request);
    }

    private function makeRequest(string $request): array
    {
        $sth = $this->connection->prepare($request, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        if (array_key_exists('where', $this->request)) {
            $sth->execute($this->paramsWhere());
        } else {
            $sth->execute();
        }

        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * @return string
     */
    private function conditionWhere(): string
    {
        $condition = $this->request['where']['condition'];
        $where = 'WHERE ';
        $where .= $condition[0] . ' ';
        if (count($condition) > 1) {
            for ($i = 1; $i < count($condition); $i++) {
                $where .= 'AND ' . $condition[$i] . ' ';
            }
        }

        return $where;
    }

    private function paramsWhere(): array
    {
        $params = $this->request['where']['params'];
        $arr = [];
        foreach ($params as $key => $value) {
            $arr[':' . $key] = $value;
        }

        return $arr;
    }

    /**
     * DESTRUCT!!!!!!!!!!
     */
    public
    function __destruct()
    {
//        $this->connection;

    }

}


$condition = [
    'login' => ['test'],
];

$dbConnect = new DBConnector('evosol', 'root', '');

var_dump($dbConnect->select()
    ->from('news')
//    ->where('id = :id', ['id' => 2])
//    ->limit(1)
    ->all());
