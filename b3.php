<!--Câu 1: Viết chương trình PHP để kiểm tra xem một số có phải là số chẵn hay không. -->
<?php
function cau1($number) {
    if ($number % 2 == 0) {
        return true;
    } else {
        return false;
    }
}
// Ví dụ sử dụng hàm
$number = 6;
if (cau1($number)) {
    echo $number . " là số chẵn.";
} else {
    echo $number . " không phải là số chẵn.";
}
?><br>

<!--Cau 2: Viết chương trình PHP để tính tổng của các số từ 1 đến n. -->
<?php
function cau2($n) {
    $sum = 0;
    for ($i = 1; $i <= $n; $i++) {
        $sum += $i;
    }
    return $sum;
}
$n = 10;
$sum = cau2($n);
echo "Tổng của các số từ 1 đến $n là: " . $sum;
?><br>

<!--Câu 3: Viết chương trình PHP để in ra bảng cửu chương từ 1 đến 10. -->
<?php
function cau3() {
    for ($i = 1; $i <= 10; $i++) {
        for ($j = 1; $j <= 10; $j++) {
            $KQ = $i * $j;
            echo "$i x $j = $KQ \n";
        }
        echo "\n";
    }
}
cau3();
?><br>

<!--Câu 5: Viết chương trình PHP để tìm giá trị lớn nhất và nhỏ nhất trong một mảng. -->
<?php
function cau5Max($array) {
    $max = $array[0];      // Giả sử giá trị đầu tiên trong mảng là giá trị lớn nhất
    foreach ($array as $value) {
        if ($value > $max) {
            $max = $value;
        }
    }
    return $max;
}
function cau5Min($array) {
    $min = $array[0]; // Giả sử giá trị đầu tiên trong mảng là giá trị nhỏ nhất
    foreach ($array as $value) {
        if ($value < $min) {
            $min = $value;
        }
    }
    return $min;
}
$numbers = [4, 1, 9, 3, 7];
$max = cau5Max($numbers);
echo "Giá trị lớn nhất trong mảng là: " . $max . "\n";
$min = cau5Min($numbers);
echo "Giá trị nhỏ nhất trong mảng là: " . $min . "\n";
?><br>

<!--Câu 6: Viết chương trình PHP để sắp xếp một mảng theo thứ tự tăng dần. -->
<<?php
function sortArrayAscending($array) {
    $length = count($array);
    for ($i = 0; $i < $length - 1; $i++) {
        for ($j = 0; $j < $length - $i - 1; $j++) {
            if ($array[$j] > $array[$j + 1]) {
                $temp = $array[$j];
                $array[$j] = $array[$j + 1];
                $array[$j + 1] = $temp;
            }
        }
    }
    return $array;
}
$array = [7, 9, 2, 1, 4];
$sortedArray = sortArrayAscending($array);
echo "Mảng sau khi sắp xếp theo thứ tự tăng dần: ";
foreach ($sortedArray as $element) {
    echo "$element ";
}
?>
<br>
<!--Câu 7: Viết chương trình PHP để tính giai thừa của một số nguyên dương. -->
<?php
function cau7($number) {
    if ($number <= 1) {
        return 1;
    } else {
        return $number * cau7($number - 1);
    }
}
$n = 4;
$cau7 = cau7($n);
echo "Giai thừa của $n là: " . $cau7;
?><br>


<!-- cau 8: Viết chương trình PHP để tìm số nguyên tố trong một khoảng cho trước. -->
<?php
function kt($number) {
    if ($number < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }
    return true;
}
function cau8($start, $end) {
    $primes = array();
    for ($i = $start; $i <= $end; $i++) {
        if (kt($i)) {
            $primes[] = $i;
        }
    }
    return $primes;
}
$start = 1;
$end = 100;
$primeNumbers = cau8($start, $end);
echo "Các số nguyên tố từ $start đến $end là: " . implode(", ", $primeNumbers);
?> <br>


<!--cau 9 Viết chương trình PHP để tính tổng các số trong một mảng. -->
<?php
function sumArray($arr) {
    $sum = 0; 
    foreach ($arr as $number) {
        $sum += $number;
    }
    
    return $sum;
}
$numbers = [1, 2, 3, 4, 5];
$cau9 = sumArray($numbers);
echo "Tổng của các số trong mảng là: $cau9";
?><br>

<!--cau 10: Viết chương trình PHP để ra các số Fibonacci trong một khoảng cho trước. -->
<?php
function generateFibonacci($start, $end) {
    $fibonacciNumbers = array();
    $first = 0;
    $second = 1;
    while ($first <= $end) {
        if ($first >= $start) {
            $fibonacciNumbers[] = $first;
        }
        $next = $first + $second;
        $first = $second;
        $second = $next;
    }
    return $fibonacciNumbers;
}
$start = 0;
$end = 100;
$fibonacciNumbers = generateFibonacci($start, $end);
echo "Các số Fibonacci từ $start đến $end là: " . implode(", ", $fibonacciNumbers);
?>

<!--cau 11: Viết chương trình PHP để kiểm tra xem một số có phải là số Armstrong hay không. -->
<?php
function isArmstrongNumber($number) {
    $sum = 0;
    $originalNumber = $number;
    $numDigits = strlen($number);
    while ($number > 0) {
        $digit = $number % 10;
        $sum += pow($digit, $numDigits);
        $number = (int)($number / 10);
    }  
    return $sum === $originalNumber;
}
$number = 153;
if (isArmstrongNumber($number)) {
    echo "$number là số Armstrong.";
} else {
    echo "$number không là số Armstrong.";
}
?>

<!--cau 12 Viết chương trình PHP để chèn một phần tử vào một mảng ở bất kỳ vị trí nào. -->
<?php
function insertElement($array, $element, $position) {
    if ($position >= count($array)) {
        $array[] = $element;
    } else {
        array_splice($array, $position, 0, $element);
    }  
    return $array;
}
$numbers = [1, 2, 3, 4, 5];
$element = 10;
$position = 2;
$newArray = insertElement($numbers, $element, $position);
echo "Mảng mới sau khi chèn phần tử là: " . implode(", ", $newArray);
?>


<!--13 Viết chương trình PHP để loại bỏ các phần tử trùng lặp trong một mảng. -->
<?php
function removeDuplicates($array) {
    $result = array();
    foreach ($array as $element) {
        if (!in_array($element, $result)) {
            $result[] = $element;
        }
    }
    return $result;
}
$numbers = [1, 2, 3, 2, 4, 1, 5, 4];
$uniqueArray = removeDuplicates($numbers);
echo "Mảng mới sau khi loại bỏ phần tử trùng lặp là: " . implode(", ", $uniqueArray);
?>


<!--14 Viết chương trình PHP để tìm vị trí của một phần tử trong một mảng. -->
<?php
function findElementIndex($array, $element) {
    $indexes = array();
    foreach ($array as $index => $value) {
        if ($value === $element) {
            $indexes[] = $index;
        }
    }
    return $indexes;
}
$numbers = [1, 2, 3, 4, 2, 5, 2];
$searchElement = 2;
$elementIndexes = findElementIndex($numbers, $searchElement);
if (empty($elementIndexes)) {
    echo "Phần tử $searchElement không được tìm thấy trong mảng.";
} else {
    echo "Phần tử $searchElement được tìm thấy tại các vị trí: " . implode(", ", $elementIndexes);
}
?>


<!--15 Viết chương trình PHP để đảo ngược một chuỗi. -->
<?php
function reverseString($string) {
    $length = strlen($string);
    $reversedString = '';
    for ($i = $length - 1; $i >= 0; $i--) {
        $reversedString .= $string[$i];
    }
    return $reversedString;
}
$inputString = "Hello, World!";
$reversedString = reverseString($inputString);
echo "Chuỗi ban đầu: " . $inputString . "<br>";
echo "Chuỗi đảo ngược: " . $reversedString;
?><br>

<!--16 Viết chương trình PHP để tính toán số lượng phần tử trong một mảng -->
<?php
function countElements($array) {
    $count = count($array);
    return $count;
}
$numbers = [1, 2, 3, 4, 5];
$elementCount = countElements($numbers);
echo "Số lượng phần tử trong mảng là: " . $elementCount;
?><br>

<!--17 Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi Palindrome hay không. -->
<?php
function isPalindrome($string) {
    $string = strtolower(str_replace(' ', '', $string));
    $length = strlen($string);
    for ($i = 0; $i < $length / 2; $i++) {
        if ($string[$i] !== $string[$length - $i - 1]) {
            return false;
        }
    }
    return true;
}
$string = "Able was I saw Elba";
if (isPalindrome($string)) {
    echo "$string là một chuỗi Palindrome";
} else {
    echo "$string không là một chuỗi Palindrome";
}
?>


<!-- 18 Viết chương trình PHP để đếm số lần xuất hiện của một phần tử trong một mảng. -->
<?php
function countOccurrences($array, $element) {
    $count = 0;
    foreach ($array as $value) {
        if ($value === $element) {
            $count++;
        }
    }
    return $count;
}
$numbers = [1, 2, 3, 4, 2, 5, 2];
$searchElement = 2;
$occurrences = countOccurrences($numbers, $searchElement);
echo "Số lần xuất hiện của phần tử $searchElement trong mảng là: " . $occurrences;
?><br>

<!--19 Viết chương trình PHP để sắp xếp một mảng theo thứ tự giảm dần. -->
<?php

// Hàm để sắp xếp một mảng theo thứ tự giảm dần
function sortDescending($array) {
    $length = count($array);
    for ($i = 0; $i < $length - 1; $i++) {
        for ($j = 0; $j < $length - $i - 1; $j++) {
            if ($array[$j] < $array[$j + 1]) {
                // Hoán đổi vị trí của hai phần tử
                $temp = $array[$j];
                $array[$j] = $array[$j + 1];
                $array[$j + 1] = $temp;
            }
        }
    }
    return $array;
}
$array = [5, 2, 10, 0, 8, 3, 15];
$sortedArray = sortDescending($array);
echo "Mảng sau khi sắp xếp theo thứ tự giảm dần: ";
foreach ($sortedArray as $element) {
    echo $element . " ";
}
?>

<!--20 Viết chương trình PHP để thêm một phần tử vào đầu hoặc cuối của một mảng. -->
<?php
function addElementToBeginning($array, $element) {
    array_unshift($array, $element);
    return $array;
}

function addElementToEnd($array, $element) {
    $array[] = $element;
    return $array;
}
$numbers = [1, 2, 3, 4, 5];
$element = 0;
$numbersWithElementAtBeginning = addElementToBeginning($numbers, $element);
$numbersWithElementAtEnd = addElementToEnd($numbers, $element);
echo "Mảng sau khi thêm phần tử vào đầu: ";
foreach ($numbersWithElementAtBeginning as $num) {
    echo $num . " ";
}
echo "<br>";
echo "Mảng sau khi thêm phần tử vào cuối: ";
foreach ($numbersWithElementAtEnd as $num) {
    echo $num . " ";
}
?><br>

<!--21 Viết chương trình PHP để tìm hai số lớn trong một mảng. -->
<?php
function findTwoLargestNumbers($array) {
    $firstLargest = $array[0];
    $secondLargest = $array[1];
    if ($secondLargest > $firstLargest) {
        $temp = $firstLargest;
        $firstLargest = $secondLargest;
        $secondLargest = $temp;
    }
    for ($i = 2; $i < count($array); $i++) {
        if ($array[$i] > $firstLargest) {
            $secondLargest = $firstLargest;
            $firstLargest = $array[$i];
        } elseif ($array[$i] > $secondLargest) {
            $secondLargest = $array[$i];
        }
    }
    return [$firstLargest, $secondLargest];
}
$numbers = [5, 2, 9, 1, 7, 10, 4];
$result = findTwoLargestNumbers($numbers);
echo "Hai số lớn nhất trong mảng là: " . $result[0] . " và " . $result[1];
?><br>

<!--22 Viết chương trình PHP để tìm ước số chung lớn nhất và bội số chung nhỏ nhất của hai số nguyên dương. -->
<?php
function findGCD($a, $b) {
    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
}
function findLCM($a, $b) {
    $gcd = findGCD($a, $b);
    $lcm = ($a * $b) / $gcd;
    return $lcm;
}
$number1 = 24;
$number2 = 36;
$gcd = findGCD($number1, $number2);
$lcm = findLCM($number1, $number2);
echo "Ước số chung lớn nhất của $number1 và $number2 là: $gcd" . PHP_EOL;
echo "Bội số chung nhỏ nhất của $number1 và $number2 là: $lcm" . PHP_EOL;
?><br>

<!--23 Viết chương trình PHP để kiểm tra xem một số có phải là số hoàn hảo hay không. -->
<?php
function isPerfectNumber($number) {
    if ($number <= 1) {
        return false;
    }
    $sum = 1;
    $sqrt = sqrt($number);
    for ($i = 2; $i <= $sqrt; $i++) {
        if ($number % $i === 0) {
            $sum += $i;
            $otherFactor = $number / $i;
            if ($otherFactor !== $i) {
                $sum += $otherFactor;
            }
        }
    }
    return $sum === $number;
}
$number = 28;
if (isPerfectNumber($number)) {
    echo "$number là một số hoàn hảo.";
} else {
    echo "$number không phải là số hoàn hảo.";
}
?><br>

<!--24 Viết chương trình PHP để tìm số lẻ lớn nhất trong một mảng. -->
<?php
function findLargestOddNumber($array) {
    $largestOdd = null;
    foreach ($array as $number) {
        if ($number % 2 !== 0 && ($largestOdd === null || $number > $largestOdd)) {
            $largestOdd = $number;
        }
    }
    return $largestOdd;
}
$numbers = [5, 2, 9, 1, 7, 10, 4];
$largestOddNumber = findLargestOddNumber($numbers);

if ($largestOddNumber !== null) {
    echo "Số lẻ lớn nhất trong mảng là: $largestOddNumber";
} else {
    echo "Không có số lẻ nào trong mảng.";
}
?>

<!--25 Viết chương trình PHP để kiểm tra xem một số có phải là số nguyên tố hay không. -->
<?php
function isPrimeNumber($number) {
    if ($number <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }
    return true;
}
$number = 17;
if (isPrimeNumber($number)) {
    echo "$number là số nguyên tố.";
} else {
    echo "$number không phải là số nguyên tố.";
}
?><br>

<!--26 Viết chương trình PHP để tìm số dương lớn nhất trong một mảng. -->
<?php
function findLargestPositiveNumber($array) {
    $largestPositive = null;
    foreach ($array as $number) {
        if ($number > 0 && ($largestPositive === null || $number > $largestPositive)) {
            $largestPositive = $number;
        }
    }
    return $largestPositive;
}
$numbers = [-5, -2, 0, 7, -1, 10, 4];
$largestPositiveNumber = findLargestPositiveNumber($numbers);

if ($largestPositiveNumber !== null) {
    echo "Số dương lớn nhất trong mảng là: $largestPositiveNumber";
} else {
    echo "Không có số dương nào trong mảng.";
}
?><br>

<!--27 Viết chương trình PHP để tìm số âm lớn nhất trong một mảng. -->
<?php
function findLargestNegativeNumber($array) {
    $largestNegative = null;
    foreach ($array as $number) {
        if ($number < 0 && ($largestNegative === null || $number > $largestNegative)) {
            $largestNegative = $number;
        }
    }
    return $largestNegative;
}
$numbers = [-5, -2, 0, -7, -1, -10, -4];
$largestNegativeNumber = findLargestNegativeNumber($numbers);
if ($largestNegativeNumber !== null) {
    echo "Số âm lớn nhất trong mảng là: $largestNegativeNumber";
} else {
    echo "Không có số âm nào trong mảng.";
}
?><br>

<!--28 Viết chương trình PHP để tính tổng các số lẻ từ 1 đến n. -->
<?php
function sumOfOddNumbers($n) {
    $sum = 0;
    for ($i = 1; $i <= $n; $i++) {
        if ($i % 2 !== 0) {
            $sum += $i;
        }
    }
    return $sum;
}
$n = 10;
$sum = sumOfOddNumbers($n);
echo "Tổng các số lẻ từ 1 đến $n là: $sum";
?><br>

<!--29 Viết chương trình PHP để tìm phương pháp chính trong một khoảng cho trước. -->
<?php
function findPrimeFactors($number) {
    $primeFactors = array();
    for ($i = 2; $i <= $number; $i++) {
        while ($number % $i === 0) {
            $primeFactors[] = $i;
            $number /= $i;
        }
    }
    return $primeFactors;
}
$number = 84;
$primeFactors = findPrimeFactors($number);
echo "Các phương pháp chính của $number là: ";
echo implode(", ", $primeFactors);
?><br>

<!--30 Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi con của một chuỗi khác hay không. -->
<?php
function isSubstring($str, $substr) {
    $strLength = strlen($str);
    $substrLength = strlen($substr);
    for ($i = 0; $i <= $strLength - $substrLength; $i++) {
        $j = 0;
        while ($j < $substrLength && $str[$i + $j] === $substr[$j]) {
            $j++;
        }
        if ($j === $substrLength) {
            return true;
        }
    }
    return false;
}
$string = "Hello, world!";
$substring = "world";
if (isSubstring($string, $substring)) {
    echo "\"$substring\" là chuỗi con của \"$string\".";
} else {
    echo "\"$substring\" không phải là chuỗi con của \"$string\".";
}
?>





