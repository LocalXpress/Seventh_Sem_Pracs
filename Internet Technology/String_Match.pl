$string = "MCAabcAAAEEEEEasdjopqiweuralsk;djfouwerx,.mncvqopiwuesdfoqiweuraapoutreabcbw";
$count = 0;
if ($string =~ m/^MCA|bw$/) {
  print 'match';
} else {
  print 'no match';
}