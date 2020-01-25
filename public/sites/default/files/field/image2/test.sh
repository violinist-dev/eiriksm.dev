for f in *.gif; do
  echo "processing file $f"
  test=`sed 's/.gif//' $f`
  echo $test
done
