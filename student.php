<?php

class Student
{

    public $name;
    public $graduation;
    public $marks = [
        'test' => [1, 2, 5],
        'a' => [1, 2, 7],
        'b' => [1, 10, 3]
    ];

    /**
     * @param string $name
     * @return Student
     */
    public function setName(string $name): Student
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param string $graduation
     * @return Student
     */
    public function setGraduation(string $graduation): Student
    {
        $this->graduation = $graduation;

        return $this;
    }

    /**
     * @param string $discipline
     * @return string[]
     */
    public function getMarksByDiscipline(string $discipline)
    {
        if (array_key_exists($discipline, $this->marks)) {
            return $this->marks[$discipline];
        }

        return null;
    }

    public function getAverageScore()
    {
        $temp = 0;
        $amount = 0;
        foreach ($this->marks as $key => $mark) {
            for ($j = 0; $j < count($mark); $j++) {
                $temp += $mark[$j];
            }
            $amount += count($mark);
        }
        return $temp / $amount;
    }

    public function setMarkByDiscipline(string $discipline, int $mark)
    {
        if (array_key_exists($discipline, $this->marks)) {
            $this->marks[$discipline][] = $mark;

            return true;
        }

        return false;
    }

}

$student = new Student();

$student->setName('Name')
    ->setGraduation('10');

var_dump($student->getAverageScore());
$student->setMarkByDiscipline('a', 10);
var_dump($student->getMarksByDiscipline('a'));