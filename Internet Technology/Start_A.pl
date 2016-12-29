$string = "abcAAAEEEEEasdjopqiweuralsk;djfouwerx,.mncvqopiwuesdfoqiweuraapoutreabcbw";
$count = 0;
if ($string =~ m/^a+|^0/) {
  print 'match';
} else {
  print 'no match';
}