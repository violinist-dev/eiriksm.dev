for f in *.gif; do
  echo "processing file $f"
  noext=`echo $f | sed 's/.gif//'`
  ext="_1.gif"
  cp $f $noext$ext
done
