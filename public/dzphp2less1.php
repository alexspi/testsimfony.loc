<?

class Buyer
{
	public $id;
	public $fname;
	public $sname;
	public $age;
	public $location;

	function __construct ($id, $fname, $sname, $age, $location) {
		$this->id = $id;
		$this->fname = $fname;
		$this->sname = $sname;
		$this->age = $age;
		$this->location = $location;
	}

	public function showInfo () {
		echo "Имя покупателя: ".$this->fname." ".$this->sname."<br>";
		echo "Возраст: ".$this->age."<br>";
		echo "Адрес: ".$this->location."<br><br>";
	}
}


class BuyerVIP extends Buyer
{
	
	public $vipnumber;

	function __construct($id, $fname, $sname, $age, $location,$vipnumber)
	{
		$this->vipnumber = $vipnumber;
		$this->id = $id;
		$this->fname = $fname;
		$this->sname = $sname;
		$this->age = $age;
		$this->location = $location;
	}

	public function showVIPInfo () {
		echo "VIPnumber: ".$this->vipnumber."<br>";
		$this->showInfo();
	}

}

$buyer = new Buyer(12,"Петр","Иванов",33,"г. Москва, ул. Профсоюзная, д. 16, кв. 3");
$buyer->showInfo();

$vipbuyer = new BuyerVIP(13,"Геннадий","Петров",34,"г. Уфа, ул. Советскийая, д. 20, кв. 78","039123");
$vipbuyer->showVIPInfo();


class A {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
$a1 = new A();
$a2 = new A();
$a1->foo();
$a2->foo();
$a1->foo();
$a2->foo();

echo "<br>Инкремент происходит из-за директивы \"static\" перед объявлением переменной \"x\".<br><br>";
 
 /*
class A {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
class B extends A {
}
$a1 = new A();
$b1 = new B();
$a1->foo(); 
$b1->foo(); 
$a1->foo(); 
$b1->foo();

*/
echo "<br>Инкремент происходит из-за директивы \"static\" перед объявлением переменной \"x\" в пределах созданного объекта с разным классом.<br><br>";
/*


class A {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
class B extends A {
}
$a1 = new A;
$b1 = new B;
$a1->foo(); 
$b1->foo(); 
$a1->foo(); 
$b1->foo();


*/
echo "<br>Сработает так же как и в предыдущем варианте, т.к. разницы (отсутсвующие скобки стр. 100, 101) с точки зрения синтаксиса PHP нет.";