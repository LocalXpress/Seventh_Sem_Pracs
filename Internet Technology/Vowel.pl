$string = "AAAEEEEEasdjopqiweuralsk;djfouwerx,.mncvqopiwuesdfoqiweuraapoutre";
$count = 0;
while ($string =~ m/[aeiouAEIOU]/g) 
    {
        $count=$count+1;
    }
print "There are ".$count." lower case vowels in the string\n";