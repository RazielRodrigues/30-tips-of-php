<?php

echo '<h1> Attributes: </h1> <hr>';

# null
$null = null;

# bool
$bool = TRUE; # ou 1 ou 2

# integer
$int = 1234; // decimal number
$int = 0123; // octal number (equivalent to 83 decimal)
$int = 0o123; // octal number (as of PHP 8.1.0)
$int = 0x1A; // hexadecimal number (equivalent to 26 decimal)
$int = 0b11111111; // binary number (equivalent to 255 decimal)
$int = 1_234_567; // decimal number (as of PHP 7.4.0)

# float (floating-point number) pode ser levado ao NaN
$float = 1.234;
$float = 1.2e3;
$float = 7E-10;
$float = 1_234.567; // as of PHP 7.4.0

# string (single quote)
echo 'this is a simple string';

echo 'You can also have embedded newlines in
strings this way as it is
okay to do';

// Outputs: Arnold once said: "I'll be back"
echo 'Arnold once said: "I\'ll be back"';

// Outputs: You deleted C:\*.*?
echo 'You deleted C:\\*.*?';

// Outputs: You deleted C:\*.*?
echo 'You deleted C:\*.*?';

// Outputs: This will not expand: \n a newline
echo 'This will not expand: \n a newline';

// Outputs: Variables do not $expand $either
echo 'Variables do not $expand $either';

# double quoted


# heredoc

// no indentation
echo <<<END
      a
     b
    c
\n
END;

// 4 spaces of indentation
echo <<<END
      a
     b
    c
    END;

$str = <<<EOD
Example of string
spanning multiple lines
using heredoc syntax.
EOD;

/* More complex example, with variables. */
class foo
{
    var $foo;
    var $bar;

    function __construct()
    {
        $this->foo = 'Foo';
        $this->bar = array('Bar1', 'Bar2', 'Bar3');
    }
}

$foo = new foo();
$name = 'MyName';

echo <<<EOT
My name is "$name". I am printing some $foo->foo.
Now, I am printing some {$foo->bar[1]}.
This should print a capital 'A': \x41
EOT;

// Static variables
function foo()
{
    static $bar = <<<LABEL
Nothing in here...
LABEL;
}

// Class properties/constants
class foo2
{
    const BAR = <<<FOOBAR
Constant example
FOOBAR;

    public $baz = <<<FOOBAR
Property example
FOOBAR;
}

# Example #12 Nowdoc string quoting example

echo <<<'EOD'
Example of string spanning multiple lines
using nowdoc syntax. Backslashes are always treated literally,
e.g. \\ and \'.
EOD;

# Example #variables parsing
$juice = "apple";
echo "He drank some $juice juice." . PHP_EOL;
// Unintended. "s" is a valid character for a variable name, so this refers to $juices, not $juice.
/* echo "He drank some juice made of $juices." . PHP_EOL;
 */// Explicitly specify the end of the variable name by enclosing the reference in braces.
echo "He drank some juice made of {$juice}s.";




# Arrays

$array = [];
$array = array();
$array = new ArrayObject();

$destruct = ['test', 'key'];

[$test, $key] = $destruct;

$destructAssociative = [ 'nome' => 'raziel'];

['nome' => $meuNome] = $destructAssociative;

echo 'Teste <hr>';
echo $test;
echo $key;
echo $meuNome;

$arrayUnpacking = [...$destructAssociative, ...$destruct];
var_dump($arrayUnpacking);

echo '<hr>';

$ponteiro = [1,2,3];

$array5 = &$ponteiro;

$ponteiro[] = 'ola';


var_dump($array5);


# objects

class foo
{
    function do_foo()
    {
        echo "Doing foo.";
    }
}

$bar = new foo;
echo $bar->do_foo();



# enum

enum Suit
{
    case Hearts;
    case Diamonds;
    case Clubs;
    case Spades;
}

function do_stuff(Suit $s)
{
    // ...
}

do_stuff(Suit::Spades);