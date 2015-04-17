
for G in $( ls -1d 201*.tsv ); do
  INFILE="$G"
  OUTFILE="${G}.new"

  echo "letter	frequency" > $OUTFILE
  for F in $( cat 30.txt ); do
    if [ "$( grep "$F\t" $INFILE )" != "" ]; then
      echo "$( grep "$F\t" $INFILE )" >> $OUTFILE
    else
      echo "$F	0" >> $OUTFILE
    fi
  done
done
