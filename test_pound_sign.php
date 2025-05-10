<?php
// Test script to verify pound sign (£) works as a variable sigil

// Define some variables with pound sign
£test = "Hello World!";
£number = 42;
£array = ["one", "two", "three"];

// Print the variables
echo "Simple variable: £test = " . £test . "\n";
echo "Number variable: £number = " . £number . "\n";
echo "Array elements: " . £array[0] . ", " . £array[1] . ", " . £array[2] . "\n";

// Test variable inside string interpolation
echo "Interpolation test: {£number} is the answer\n";

// Test in function calls
function test_function(£param1, £param2) {
    echo "Function received: £param1, £param2\n";
    return £param1 . £param2;
}

£result = test_function("Hello", "Function");
echo "Function returned: " . £result . "\n";

// Test variable variables
£varname = "test";
echo "Variable variable: " . ££varname . "\n";

echo "Test completed successfully!\n";
?>