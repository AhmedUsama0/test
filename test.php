<?php

$str = "ahmed osama";

// echo str_contains($str,"ahmeds");
// echo strpos('ahmed osama ahmed osama osama','osama');

//  echo str_ends_with($str,"osama");
// echo str_ireplace(['AHMED','osama'],['mai','bear'],$str);

// echo str_replace('ahmed',"Mai",$str);

// echo str_rot13($str);

// echo str_shuffle($str);
// print_r (str_split($str,2));

$arr = [
    'ahmed',
    'osama',
    'name' => 'mai',
    'nickname' => 'bear',
    'age' => 24
];

// print_r(array_change_key_case($arr,CASE_UPPER));

// print_r(array_chunk($arr,2,true));

// print_r(array_combine(['name','age'],['ahmed',24]));

// print_r(array_count_values([1,2,1,1,3,3,4]));

// print_r(array_fill(1,4,"ahmed"));

// print_r(array_fill_keys(['name','age'],'ahmed',));

// print_r(array_filter($arr,function($el) {
//     return str_starts_with($el,'m');
// }));

// print_r(array_flip($arr));

// print_r(array_intersect($arr,['ahmed','osama','name' =>'mai']));

// print_r(array_is_list([1,2,3,4]));

// print_r(array_key_exists('name',$arr));

// print_r(array_key_first($arr));

// print_r(array_keys($arr,24));



$newArr = array_map(
    callback: fn($item) => strtoupper($item),
    array: $arr
);

function regular()
{
    global $arr;
    print_r($arr);
}

$anoy = function () use ($arr) {
    print_r($arr);
};

// automatic capturing the variable from the global scope
// anoynomus function providing simple and shorter expression
$arrow = fn() => print_r($arr);

// $arrow();

// regular();

// $anoy();


// $getFirstChar = function(string $string): callable  {

//     $firstChar = substr($string,0,1);

//     $firstCharToUpper = fn(): string => strtoupper($firstChar);

//     return $firstCharToUpper;
// };

// $firstCharToUpper = $getFirstChar(string: 'ahmed');

// echo $firstCharToUpper();



class Person
{
    public function __construct(private string $name, private ?int $age)
    {
        $this->setName($name);
        $this->setAge($age);
    }

    private function setName(string $name): void
    {
        $sanitizeName = filter_var($name, FILTER_SANITIZE_STRING);

        if (strlen($sanitizeName) === 0) {
            throw new Exception('please enter valid name');
        }

        $options = [
            'options' => [
                'regexp' => '/^[a-zA-Z][a-zA-Z0-9]{2,4}$/'
            ]
        ];
        if (!filter_var($sanitizeName, FILTER_VALIDATE_REGEXP, $options)) {
            throw new Exception("name should contains letters,numbers and start with letter and be from 3 to 5 in length");
        }

        $this->name = $sanitizeName;
    }

    private function setAge(?int $age): void
    {
        if (!isset($age)) {
            throw new Exception('please, enter your age');
        }
        if (!filter_var($age,FILTER_VALIDATE_INT)) {
            throw new Exception('enter valid integer');
        }

        $this->age = $age;
    }
    public function getPerson(): array
    {
        return [
            'name' => $this->name,
            'age' => $this->age
        ];
    }
}


try {
    $person = new Person(
        name: 'ahmed',
        age: "232",
    );
    $personData = $person->getPerson();
    print_r($personData);
    var_dump($personData['age']);
} catch (Exception $e) {
    echo $e->getMessage();
} catch (TypeError $e) {
    echo "invalid data type";
}
